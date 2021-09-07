<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{

    public function index(Request $request)
    {
        $users = User::paginate(25);
        Log::debug($users);
        return view('admin.users.index')->with('users', $users);
        // return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        Log::debug($request);
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|numeric|min:10',
            'password' => 'required|min:6|regex:/^.*(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X]).*$/'
        ]);

        $input['password'] = bcrypt($request->password);
        try {
            $user = User::create($input);
            return redirect()->route('users.index')->with('success', 'User added successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'User is not added successfully.');
        }
    }

    public function show($id)
    {
        try {
            $user = User::find($id);
            return view('admin.users.view', compact('user'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'User Could not found');
        }
    }

    public function edit($id)
    {
        try {
            $user = User::find($id);
            return view('admin.users.edit', compact('user'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'User Could not found');
        }
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|numeric|min:10',
            'password' => 'required|min:6|regex:/^.*(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X]).*$/'
        ]);

        $input['password'] = bcrypt($request->password);
        try {
            $user = $user->update($input);
            return redirect()->route('users.index')->with('success', 'User updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'User could not updated successfully.');
        }
    }

    public function destroy($id)
    {
        try {
            $user = User::where('id', $id)->delete();
            echo json_encode(['status' => 'true']);
            exit();
        } catch (\Exception $e) {
            echo json_encode(['status' => 'false']);
            exit();
        }
    }
}
