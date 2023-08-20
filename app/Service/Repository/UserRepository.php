<?php

namespace App\Service\Repository;

use App\Models\User;
use App\Service\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    public function getUsers()
    {
        return User::all();
    }
    public function getOne($id)
    {
        return User::findOrFail($id);
    }

}
