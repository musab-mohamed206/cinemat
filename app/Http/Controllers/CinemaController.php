<?php

namespace App\Http\Controllers;

use App\Models\Cinema;
use Illuminate\Http\Request;

class CinemaController extends Controller
{
    public function index()
    {
        return view('manager.cinema-index', [
            'cinemas' => Cinema::get(),
        ]);
    }

    public function create()
    {
        return view('manager.cinema-create');
    }

    public function store(Request $request)
    {

        Cinema::create($request->all());

        return redirect()->route('manager.cinema.index')->with([
            'flash' => 'success',
            'message' => 'تم الاضافة بنجاح',
        ]);
    }

    public function edit(Cinema $cinema)
    {
        return view('manager.cinema-edit', [
            'cinema' => $cinema,
        ]);
    }

    public function update(Request $request, Cinema $cinema)
    {
        $request->validate([
            'name' => ['required', 'min:1', 'max:255'],
            'address' => ['required', 'min:1', 'max:255'],
        ]);

        $cinema->update($request->all());

        return redirect()->route('manager.cinema.index')->with([
            'flash' => 'success',
            'message' => 'تم التحديث بنجاح',
        ]);
    }
}
