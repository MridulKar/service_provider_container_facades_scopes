<?php

namespace App\Services;

use App\Models\Post;

class PostService{
    public function getActivePosts(){
        return Post::active()->get();
    }

    // with passing boolean value true or false
    public function getInactivePosts(){
        return Post::inactive(false)->get();
    }
}
