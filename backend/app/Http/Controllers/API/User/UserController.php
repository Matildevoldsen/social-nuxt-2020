<?php

namespace App\Http\Controllers\API\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($id) {
        $user = User::find($id);

        if ($user) {
            return response()->json(['data' => [
                'user' => $user
                // Add in user posts, followers.
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
