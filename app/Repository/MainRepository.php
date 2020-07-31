<?php

namespace App\Repository;

abstract class  MainRepository implements MainRepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    //lấy model tương ứng
    abstract public function getModel();

    public function setModel()
    {
        $this->model = app()->make(
            $this->getModel()
        );
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->findOrFail($id);
    }

    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }


    public function update($id, array $attributes)
    {
        $result = $this->find($id);

        if ($result) {
            $result->update($attributes);

            return $result;
        }

        return false;
    }

    public function delete($id)
    {
        $result = $this->find($id);
        if ($result) {
            $result->delete();

            return true;
        }

        return false;
    }

    public function with($relations)
    {
        if (is_string($relations)) $relations = func_get_args();
        $this->model = $this->model->with($relations);

        return $this;
    }

    public function paginate($number = 6)
    {
        return $this->model->paginate($number);
    }

    public function take($number = 6)
    {
        return $this->model->take($number);
    }

    public function orderBy($column = 'id', string $sort = 'asc')
    {
        $this->model = $this->model->orderBy($column, $sort);

        return $this;
    }
}
