<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    // Mendefinisikan nama tabel
    protected $table = 'users';

    // Mendefinisikan kolom-kolom yang dapat diisi (fillable)
    protected $fillable = ['name', 'email', 'password'];
}
