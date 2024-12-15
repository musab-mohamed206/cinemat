<?php

namespace App\Http\Controllers;

use App\Models\Cinema;
use App\Models\Hall;
use Illuminate\Http\Request;

class HallController extends Controller
{
    public function index()
    {
        return view('manager.hall-index', [
            'halls' => Hall::get(),
        ]);
    }

    public function create()
    {
        return view('manager.hall-create', [
            'cinemas' => Cinema::select(['id', 'name'])->get()->pluck('name', 'id'),
        ]);
    }

    public function store(Request $request)
    {


        Hall::create($request->all());

        return redirect()->route('manager.hall.index')->with([
            'flash' => 'success',
            'message' => 'تم الاضافة بنجاح',
        ]);
    }

    public function destroy(Hall $hall)
    {
        $hall->delete();

        return redirect()->route('manager.hall.index')->with([
            'flash' => 'success',
            'message' => 'تم الحذف بنجاح',
        ]);
    }

    public function edit(Hall $hall)
    {
        return view('manager.hall-edit', [
            'hall' => $hall,
            'cinemas' => Cinema::select(['id', 'name'])->get()->pluck('name', 'id'),
        ]);
    }

    public function update(Request $request, Hall $hall)
    {


        $hall->update($request->all());

        return redirect()->route('manager.hall.index')->with([
            'flash' => 'success',
            'message' => 'تم التعديل بنجاح',
        ]);
    }
}
