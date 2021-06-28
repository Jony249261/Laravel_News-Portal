<?php

namespace App\Http\Controllers;
use App\Post;
use App\Category;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){
        $hot_news = Post::with('creator')->withCount('comments')->where('status', 1)->where('hot_news', 1)->orderBy('id', 'ASC')->first();
        $top_viwed = Post::with(['creator'])->withCount('comments')->where('status',1)->orderBy('view_count','ASC')->limit(2)->get();

        $category_posts = Category::with('posts')->where('status',1)->orderBy('id','DESC')->limit(5)->get();

        return view('frontend.home', compact('hot_news', 'top_viwed', 'category_posts'));
    }


    public function search(Request $request){
        $search = $request->search;
        
        $posts = Post::where('title', 'like', '%'.$search.'%')
                             ->orwhere('slug', 'like', '%'.$search.'%')
                             ->orwhere('short_description', 'like', '%'.$search.'%')
                             ->orwhere('description', 'like', '%'.$search.'%')->get();
        return view('frontend.search', compact('posts', 'search'));
    }
}
