<?php

namespace Modules\UserModule\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserModule extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'password'];
}
