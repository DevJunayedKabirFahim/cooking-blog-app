<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    private $categories, $blogs, $blog, $twoBlogs, $comments;
    public function index()
    {
        $this->blogs = Blog::where(['status' => 1])->orderBy('id', 'desc')->get();
        $this->twoBlogs = Blog::where('status', 1)->take(2)->get();
        $this->categories  = Category::where('status', 1)->take(4)->get();
        return view('frontend.home.index', [
            'categories' => $this->categories,
            'blogs' => $this->blogs,
            'twoBlogs' => $this->twoBlogs
        ]);
    }

    public function category($id)
    {
        $this->blogs = Blog::where(['category_id' => $id, 'status' => 1])->orderBy('id', 'desc')->get();
        return view('frontend.categories.index', ['blogs' => $this->blogs]);
    }

    public function blogList($id)
    {
        return view('frontend.blog.blog-list');
    }

    public function detail($id)
    {
        $this->blog = Blog::find($id);
        return view('frontend.detail.index', ['blog' => $this->blog]);
    }

    public function about()
    {
        return view('frontend.about.index');
    }

    public function contact()
    {
        return view('frontend.contact.index');
    }
}
