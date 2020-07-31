<?php

namespace App\Repository\Post;

use App\Post;
use App\Repository\MainRepository;

class  PostRepository extends MainRepository implements PostRepositoryInterface
{

    public function getModel()
    {
        return Post::class;
    }

    public function featurest()
    {
        return $this->model->latest()->where('feature',1)->first();
    }
    public function new()
    {
        return $this->model->latest()->get();
    }

}
