<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*  public function __construct()
    {
        $this->middleware('auth');
    } 
 */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Get all Posts, ordered by the newest first
        $posts = Post::latest()->get();

        // Pass Post Collection to view 
        //The compact method forms an array of variables and their values
        return view('admin.index', compact('posts'));
    }
}
