<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        /** @var User $currentUser */
        $currentUser = Auth::user(); // 2. Gunakan Auth::user()

        if ($currentUser->role == 1) {
            $users = User::get();
        } else {
            $users = User::where('id', $currentUser->id)->get();
        }

        return view('back.user.index', [
            'users' => $users
        ]);
    }

    public function store(UserRequest $request)
    {
        $data = $request->validated();

        $data['password'] = bcrypt($data['password']);
        User::create($data);

        return back()->with('success', 'User has been created.');
    }

    public function update(UserUpdateRequest $request, $id)
    {
        $data = $request->validated();

        if ($data['password'] != '') {
            $data['password'] = bcrypt($data['password']);
            User::find($id)->update($data);
        } else {
            User::find($id)->update([
                'name' => $request->name,
                'email' => $request->email
            ]);
        }

        return back()->with('success', 'User has been updated.');
    }

    public function destroy(string $id)
    {
        User::find($id)->delete();

        return back()->with('success', 'User has been deleted.');
    }
}
