<?php

namespace App\Repositories;

use App\Repositories\Contract\BaseContract;
use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository implements BaseContract
{

    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * @inheritDoc
     */
    public function find($id)
    {
        return $this->model->find($id);
    }

    /**
     * @inheritDoc
     */
    public function create(array $data)
    {
        return $this->model->create($data);
    }

    /**
     * @inheritDoc
     */
    public function update($id, array $data)
    {
        return $this->model->where('id', $id)->update($data);
    }

    /**
     * @inheritDoc
     */
    public function delete($id)
    {
        try {
            return $this->model->delete($id) ? true : false;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|Model[]|mixed
     */
    public function all()
    {
        return $this->model->all();
    }
}
