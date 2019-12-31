<?php

namespace App\Repositories\Contract;

interface BaseContract
{
    /**
     * @param $id
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function find($id);

    /**
     * @param array $data
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function create(array $data);

    /**
     * @param $id
     * @param array $data
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function update($id, array $data);

    /**
     * @param $id
     * @return bool
     */
    public function delete($id);

    /**
     * @return mixed
     */
    public function all();
}
