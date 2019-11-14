<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    public function create()
    {
        if (Gate::allows('crud-user')){
            return view('users.add');
        }

        abort(403,'ban khong co quyen');
    }

    public function index()
    {
        $users = User::all();
        return view('users.list', compact('users'));
    }

    public function destroy($id) {
            $user = User::findOrFail($id);
            $user->delete();
            return response()->json([
                'message' => 'xoa thanh cong!'
            ]);
    }

    public function search(Request $request) {
        if ($request->ajax()) {
            $users = User::where('name', 'LIKE', '%'. $request->keyword . '%')->get();
            return response()->json($users);
        }
    }
}
