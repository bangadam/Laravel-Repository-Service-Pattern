<?php

namespace App\Http\Controllers;

use App\Services\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $postService;

    /**
     * PostController constructor.
     * @param $postService
     */
    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function index()
    {

        $post = $this->postService->getAll();
        return view('welcome', compact('post'));
    }

}
