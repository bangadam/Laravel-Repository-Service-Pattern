<?php

namespace App\Services\Contract;

interface PostContract
{
    /**
     * @param $id
     * @return mixed
     */
    public function get($id);

}
