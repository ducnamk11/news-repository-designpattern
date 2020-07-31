<?php

namespace App\Repository;

interface MainRepositoryInterface
{
    public function getAll();

    public function find($id);

    public function create(array $attributes);

    public function update($id, array $attributes);

    public function delete($id);
    public function with($relations);
    public function paginate($number = 12);
    public function take($number = 6);
    public function orderBy($column = 'id', string $sort = 'asc');
}
