<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PostsController extends Controller
{
    public function index() {
        // Query builders
//        $posts = DB::select("SELECT * FROM posts WHERE id = :id;",
//        [
//            'id' => 1
//        ]);

        // 2. eloquante ORM
        $posts = DB::table('posts')
            ->where('id', 5)
            ->delete();
//            ->update([
//                'title' => 'Updated title',
//                'body' => 'Updated body'
//        ]);
        dd($posts);

    }
}
