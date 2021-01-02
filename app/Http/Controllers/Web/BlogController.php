<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class BlogController extends Controller
{
    private $repository;

    public function __construct(Post $post)
    {
        $this->repository = $post;

    }
    public function index()
    {
        $posts = $this->repository->orderBy('id', 'Desc')->paginate(2);
        $postsRecent = $this->repository->orderBy('id', 'Desc')->paginate(3);
        return view('web.pages.blogs.index', compact('posts', 'postsRecent'));
    }

    public function detailsBlog($slug)
    {
        $postDetails = $this->repository->where('slug', $slug)->first();
        $postsRecent = $this->repository->orderBy('id', 'Desc')->paginate(3);
        return view('web.pages.blogs.blog_details', compact('postDetails','postsRecent'));
    }
}
