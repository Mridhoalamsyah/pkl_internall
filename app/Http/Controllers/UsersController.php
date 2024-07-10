<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Alert;
class UsersController extends Controller
{

    public function index()
    {
        $users = User::all();
        confirmDelete("Delete", "Are you sure?");
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        return view('admin.user.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $this->validate($request, [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
        'isAdmin' => 'required|boolean',
    ]);

           $user = new user;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->isAdmin = $request->isAdmin;

            $user->save();
            Alert::success('Success Title', 'Success Message')->autoClose(3000);
            return redirect()->route('user.index')->with('success','data berhasil di tambahkan');
        }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
             'name' => 'required',
             'email' => 'required',
             'password' => 'required',
             'isAdmin' => 'required|boolean',
         ]);

         $user = User::findOrFail($id);
         $user->name = $request->name;
         $user->email = $request->email;
         $user->password = $request->password;
         $user->isAdmin = $request->isAdmin;
         $user->save();
         return redirect()->route('user.index');
     }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = user::FindOrFail($id);

        $user->delete();
        toast('Data delete Successfully', 'success')->autoClose(1000);
        return redirect()->route('user.index');
    }
}
