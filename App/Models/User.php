<?php

namespace App\Models;

use App\Base\Model;

class User extends Model
{
    protected string $model = 'users'; // Указывает на конечную точку API для пользователей
}