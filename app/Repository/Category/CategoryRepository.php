<?php

namespace App\Repository\Category;

use App\Category;
use App\Repository\MainRepository;

class CategoryRepository extends MainRepository implements CategoryRepositoryInterface
{
    public function getModel()
    {
        return  Category::class;
    }
}
