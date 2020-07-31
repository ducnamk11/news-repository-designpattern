<?php

namespace App\Repository\User;

use App\Repository\MainRepository;
use App\User;

class UserRepository extends MainRepository implements UserRepositoryInterface
{

    public function getModel()
    {
        return  User::class;
    }
}
