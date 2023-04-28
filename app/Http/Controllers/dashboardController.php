<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        return redirect()->route('dashboard.index')
            ->with('success', 'Tarea añadida correctamente.');
    }

    public function destroy($id)
    {
        DB::table('tareas')->where('id', $id)->delete();

        return redirect()->route('dashboard.index')
            ->with('success', 'Tarea eliminada correctamente.');
    }
}
