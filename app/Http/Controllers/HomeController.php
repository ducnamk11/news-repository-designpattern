<?php

namespace App\Http\Controllers;

use App\Repository\Category\CategoryRepository;
use App\Repository\Post\PostRepository;
use App\Repository\User\UserRepository;

class HomeController extends Controller
{
    protected $postRepository;
    protected $categoryRepository;
    protected $userRepository;

    public function __construct(
        PostRepository $postRepository,
        CategoryRepository $categoryRepository,
        UserRepository $userRepository
    )
    {
        $this->postRepository = $postRepository;
        $this->categoryRepository = $categoryRepository;
        $this->userRepository = $userRepository;

    }

    public function index()
    {
        return view('home.index', [
            'featurest' => $this->postRepository->featurest(),
            'new' => $this->postRepository->new()->take(8),
            'posts' => $this->postRepository->getAll()->take(4),
            'categories' => $this->categoryRepository->getAll()->take(6),
        ]);
    }

    public function show($id)
    {
        return view('home.detail', [
            'post' => $this->postRepository->find($id),
        ]);
    }

}
