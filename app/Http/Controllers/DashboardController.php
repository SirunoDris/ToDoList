<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tarea;

class DashboardController extends Controller
{
    public function index()
    {
        $errors = '';
        $tareas = Tarea::all();
        return view('dashboard')->with('tareas', $tareas);
    }

    public function store(Request $request)
    {
        $request->validate([
            'tarea' => 'required'
        ]);

        DB::table('tareas')->insert([
            'tarea' => $request->input('tarea')
        ]);

        return redirect('/dashboard');
    }

    public function destroy(Request $request)
    {
        $id = $request->input('id');
        DB::table('tareas')->where('id', $id)->delete();

        return redirect('/dashboard');
    }

}
