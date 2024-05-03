<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function __invoke(Request $request)
    {
        // set validation 
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'name' => 'required',
            'password' => 'required',
            'level_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        // if validator fails 
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // create user 
        $user = UserModel::create([
            'username' => $request->username,
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'level_id' => $request->level_id,
            'image' => $request->image->hashName()
        ]);

        // return respon json user is create 
        if ($user) {
            return response()->json([
                'success' => true,
                'user' => $user,
            ], 201);
        }

        // return json 
        return response()->json([
            'success' => false,
        ], 409);
    }
}
