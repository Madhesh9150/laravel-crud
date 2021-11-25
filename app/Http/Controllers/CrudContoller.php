<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\crud;

class CrudContoller extends Controller
{
    public function index()
    {
        $dis = crud::all();
        return view('crud.index',compact('dis'));
    }
    public function create()
    {
        return view('crud.create');
    }
    public function store(Request $request)
    {
        $crud = new crud;
        $crud->name=$request->name; 
        $crud->email=$request->email;
        $crud->number=$request->number;
        $crud->amount=$request->amount;
        $crud->save();
        return redirect('/');
    }
    public function edit($id)
    {
        $val = crud::find($id);
        return view('crud.edit',compact('val'));
    }
    public function update(Request $request, $id)
    {
        $upd =crud::find($id);
        $upd->name = $request->name;
        $upd->email = $request->email;
        $upd->number = $request->number;
        $upd->amount = $request->amount;
        $upd->update();
        return redirect('/');
    }
    public function delete($id)
    {
        $del = crud::find($id);
        $del->delete();
        return redirect('/');
    }
}
