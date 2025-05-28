<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Contracts\View\View;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexBlog(Request $request): View 
    {
        $posts = Post::paginate(10);
        return  view("blog.indexBlog", [
            'posts' => $posts,
            'title' => 'Blog',
            'description' => 'Latest blog posts',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function showBlog(string $slug, int $id, Request $request): RedirectResponse | Post
    {
        $post = Post::where('slug', $slug)->where('id', $id)->first();
        if (!$post) {
            return redirect()->route('blog.index')->with('error', 'Post not found');
        }
        return $post;
    }
}
