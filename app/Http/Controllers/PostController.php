<?php

namespace App\Http\Controllers;

use App\Category;
use App\Repository\Post\PostRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostController extends Controller
{
    private $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.post.index', [
            'posts' => $this->postRepository->getAll(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.add', [
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $path = public_path() . '/images/';
        $image->move($path, $filename);

        $this->postRepository->create(array_merge($request->all(), [
                'slug' => Str::slug($request->title),
                'user_id' => Auth::id(),
                'feature' => 0,
                'image' => $filename,
            ]
        ));

        return redirect('admin/post')->with('success', 'Created post');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.post.detail', [
            'post' => $this->postRepository->find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.post.edit', [
            'categories' => Category::all(),
            'post' => $this->postRepository->find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->postRepository->update(array_merge($request->all(), [
            'slug' => Str::slug($request->title),
            'user_id' => Auth::id(),
        ]));
        return redirect('admin/post')->with('success', 'update post');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->postRepository->delete($id);
        return redirect('admin/post')->with('success', 'Deleted post');

    }
}
