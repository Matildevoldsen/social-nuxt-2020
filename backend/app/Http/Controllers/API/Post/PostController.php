<?php

namespace App\Http\Controllers\API\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function all() {
        return response()->json(['data' => [
            'posts' => Post::all()
        ]], 200);
    }

    public function index($id) {
        return response()->json(['data' => [
            'post' => Post::find($id)
        ]]);
    }

    public function store(Request $request) {

    }

    public function update(Request $request) {

    }

    public function delete(Request $request) {

    }
}
