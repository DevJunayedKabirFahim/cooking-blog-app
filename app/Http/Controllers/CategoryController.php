<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    private $categories, $category;
    public function index()
    {
        return view('backend.category.index');
    }

    public function store(Request $request)
    {
        Category::newCategory($request);
        return back()->with('message', 'Category stored successfully');
    }

    public function manage()
    {
        $this->categories = Category::all();
        return view('backend.category.manage', ['categories' => $this->categories]);
    }

    public function edit($id)
    {
        $this->category = Category::find($id);
        return view('backend.category.edit', ['category' => $this->category]);
    }

    public function update(Request $request, $id)
    {
        Category::updateCategory($request, $id);
        return redirect('/category/manage')->with('message', 'Category info updated successfully');
    }

    public function destroy($id)
    {
        Category::deleteCategory($id);
        return back()->with('message', 'Category info deleted successfully');
    }
}
