@extends('layouts.app')
@section('content')

<h1 class="title-pg">
    <a href="{{route('client.index')}}" class="btn btn-success">
        <i class="fas fa-angle-double-left"></i>
        Voltar
    </a> Gestão de solicitações:
</h1>

<!-- Verifica os erros e imprime para o usuário -->
@include('verifyErros')
<!-- Fim da verificação -->
 @if ( isset($client) )
<form class="form" method="post" action="{{route('client.update', $client->id)}}">
    {!! method_field('PUT') !!} @else
    <form class="form" method="post" action="{{route('client.store')}}">
        @endif

        <form class="form" method="post" action="{{route('client.store')}}">
            {!! csrf_field() !!}

            <div class="form-group">
                Nome: <input type="text" class="form-control" name="name" placeholder="Nome do cliente" value="">
            </div>

            <div class="form-group">
                E-mail: <input type="email" class="form-control" name="email" placeholder="email.cliente@gmail.com" value="">
            </div>

            <div class="form-group">
                DDD: <input type="text" data-mask="011" class="form-control ddd-phone-mask" name="ddd_phone" placeholder="011"
                    value="">
            </div>

            <div class="form-group">
                Telefone: <input type="tel" data-mask="0000-0000" class="form-control phone-mask" name="phone" placeholder="0000-0000"
                    value="">
            </div>

            <div class="form-group">
                DDD: <input type="text" data-mask="(011)" class="form-control ddd-cel-mask" name="ddd_cel" placeholder="011"
                    value="">
            </div>

            <div class="form-group">
                Celular: <input type="text" data-mask="00000-0000" class="form-control cel-mask" name="cel" placeholder="00000-0000"
                    value="">
            </div>

            <div class="dropdown">
                Como prefere obter a resposta?
            </div>
            <hr>
            <div class="form-group">
                Solicitação: <textarea class="form-control" name="description" placeholder="O produto que o cliente deseja comprar. Exemplo: Semente de chia"></textarea>
            </div>

            <div class="btnconfirm">
                <button class="btn btn-success"><i class="fas fa-check"></i> Confirmar</button>
            </div>
            </div>
        </form>
@endsection
