<?php namespace App\Http\Controllers;

use App\Http\User;

class UserController extends Controller {
    public function get_users() {
        $users = User::all();

        return response(json_encode([
            'status' => 'success',
            'data' => [
                'users' => $users
            ]
        ]));
    }

    public function get_user($id) {
        $user = User::find($id);

        return response(json_encode([
            'status' => 'success',
            'data' => [
                'user' => $user
            ]
        ]));
    }
}