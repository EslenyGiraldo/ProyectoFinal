<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('users.index')->with ('users', $users);
    }


    public function generarPDF()
    {
        $users = User::all();
        $pdf = PDF::loadView('productos.download', compact('users'));
        return $pdf->download('users.pdf');
    }

    public function generarExcel()
    {
        return Excel:: download(new UsersExport, 'users.xlsx');
    }

    public function store(Request $request)
    {
        $users= new User();
        $users->name=$request->nameU;
        $users->last_name=$request->lastnameU;
        $users->cel_num=$request->numberU;
        $users->birthdate=$request->documentU;
        $users->lug_res=$request->ciudadresU;
        $users->gender=$request->genderU;
        $users->email=$request->emailU;
        $users->sede_id=$request->sedeU;
        $users->deporte_id=$request->sportU;
        $users->password=$request->passwordU;

        $users->save();
        return redirect()->route('users.index');
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        $users = User::find($id);
        return view('users.modificarDatosU', compact('user'));
    }

   
    public function update(Request $request, string $id)
    {
        $users= User::find($id);
        $users->name=$request->nameU;
        $users->last_name=$request->lastnameU;
        $users->cel_num=$request->numberU;
        $users->birthdate=$request->documentU;
        $users->lug_res=$request->ciudadresU;
        $users->gender=$request->genderU;
        $users->email=$request->emailU;
        $users->sede_id=$request->sedeU;
        $users->deporte_id=$request->sportU;
        $users->password=$request->passwordU;
        $users->save();
        return redirect()->route('users.index');
    }

  
    public function destroy(string $id)
    {
        $users= User::find($id);
        $users->delete();
        return redirect()->route('users.index');
    }

    public function getUsers()
    {
        $users = User::all();

        return response()->json(['users' => $users]);
    }
}
