<?php

namespace App\Repository\Post;

use App\Repository\MainRepositoryInterface;

interface PostRepositoryInterface extends MainRepositoryInterface
{
    public function featurest();

    public function new();

    public function search($search);

}
