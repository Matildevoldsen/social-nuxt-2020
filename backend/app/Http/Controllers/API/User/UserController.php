<?php

namespace App\Http\Controllers\API\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function users() {
        return response()->json(['data' => [
            'users' => User::all()
        ]]);
    }

    public function usersWithPosts() {
        //Grab all users
        //Grab all user posts
    }

    public function view($id) {
        $user = User::find($id);
        $post = $user->posts()->get();

        if ($user) {
            return response()->json(['data' => [
                'user' => $user,
                'posts' => $post
            ]], 200);
        } else {
            return response()->json(['data' => [
                'success' => false,
                'errors' => [
                    'root' => 'Could not find a user with that ID.'
                ]
            ]], 200);
        }
    }
}
