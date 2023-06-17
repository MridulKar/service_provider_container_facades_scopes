<?php

namespace App\Http\Controllers;

use App\Facades\AllUser;
use Illuminate\Http\Request;
use App\Services\PostService;

class PostController extends Controller
{
    protected $postService;

    public function __construct(PostService $postService){
        $this->postService = $postService;
    }

    public function active_posts(){
        $post = $this->postService->getActivePosts();
        dd($post->toArray());
    }

    public function inactive_posts(){
        $post = $this->postService->getInactivePosts();
        dd($post->toArray());
    }

    public function users(){
        dd(AllUser::getThemAll()->toArray());
    }
}
