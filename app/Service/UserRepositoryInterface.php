<?php
namespace App\Service;

use App\Models\User;

interface UserRepositoryInterface
{
    public function getUsers();
    public function getOne(int $id);

}
