<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //protected $table = 'clients';

    protected $fillable = ['name', 'email', 'ddd_phone', 'phone', 'ddd_cel', 'cel', 'prefer_contact', 'description', 'returno_client'];
}
