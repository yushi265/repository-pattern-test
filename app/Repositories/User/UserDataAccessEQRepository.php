<?php

namespace App\Repositories\User;

use App\User;;

class UserDataAccessEQRepository implements UserDataAccessRepositoryInterface
{
    protected $table = 'users';

    public function getAll()
    {
        return User::all();
    }
}
