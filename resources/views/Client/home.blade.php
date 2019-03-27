@extends('layouts.app')
@section('content')

<div>
    <h2 align="center">Listagem com as solicitações</h2>
</div>


<a href="{{route('client.create')}}" class="btn btn-success"><i class="fas fa-plus"></i> Cadastrar</a> <br /><br />

<table class="table table">
    <thead class="thead-dark">
   <!-- <th>Data solicitação</th>
        <th>Data retorno</th> -->
        <th>Nome</th>
   <!-- <th>E-mail</th>
        <th>DDD</th>
        <th>Telefone</th> -->
        <th>Solicitação</th>
        <th>DDD</th>
        <th>Celular</th>
        <th>Preferência de contato</th>
        <th width="100px">Ações</th>
    </thead>
    @foreach ($client as $inform)
    <tbody>
   <!-- <td>{{$inform->created_at}}</td>
        <td>{{$inform->updated_at}}</td> -->
        <td>{{$inform->name}}</td>
   <!-- <td>{{$inform->email}}</td>
        <td>{{$inform->ddd_phone}}</td>
        <td>{{$inform->phone}}</td> -->
        <td>{{$inform->description}}</td>
        <td>{{$inform->ddd_cel}}</td>
        <td>{{$inform->cel}}</td>
        <td>{{$inform->prefer_contact}}</td>
        <td>
            <a href="{{route('client.edit', $inform->id)}}" class="actions edit">
                <i class="fas fa-pen" title="Editar"></i>
            </a>
            <a href="{{route('client.show', $inform->id)}}" class="actions open">
                <i class="fas fa-eye"title="Visualizar"></i>
            </a>
        </tbody>
    @endforeach
</table>

{{-- {!! $client->links() !!} --}}
@endsection
