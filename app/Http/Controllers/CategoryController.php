<?php

namespace App\Http\Controllers;


use App\Repository\Category\CategoryRepository;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        return view('admin.category.index', [
            'categories' => $this->categoryRepository->getAll(),
        ]);
    }

    public function store(Request $request)
    {
        $this->categoryRepository->create($request->all());

        return redirect('admin/category')->with('success', 'Data created !');
    }

    public function show($id)
    {
        return view('admin.category.detail', [
            'category' => $this->categoryRepository->find($id),
        ]);
    }

    public function edit($id)
    {
        return view('admin.category.edit', [
            'category' => $this->categoryRepository->find($id),
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->categoryRepository->update($id, $request->all());

        return redirect('admin/category')->with('success', 'Data updated! ');
    }

    public function destroy($id)
    {
        $this->categoryRepository->delete($id);

        return redirect('admin/category')->with('success', 'Data deleted! ');
    }
}
