<?php

namespace App\Models;

// use App\Models\Mensaje;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mensaje extends Model
{
    use HasFactory;
    protected $fillable = ['name','email','phone','message'];

}

// permiten protegerse en caso de que un usuario 'malicioso' haya modificado los campos del formulario para incluir campos que existían.