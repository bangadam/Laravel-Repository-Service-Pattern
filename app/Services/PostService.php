<?php

namespace App\Services;

use App\Services\Contract\PostContract;
use App\Repositories\Contract\PostContract as UserRepositoryContract;

class PostService implements PostContract
{
    protected $postRepository;

    /**
     * PostService constructor.
     * @param $postRepository
     */
    public function __construct(UserRepositoryContract $postRepository)
    {
        $this->postRepository = $postRepository;
    }


    /**
     * @inheritDoc
     */
    public function get($id)
    {
        return $this->postRepository->find($id);
    }

    public function getAll()
    {
        return $this->postRepository->all();
    }
}
