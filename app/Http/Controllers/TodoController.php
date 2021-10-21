<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function insert(Request $request)
    {
        $valid = $request->validate([
            'user' => 'required|min:3|max:15',
            'desc' => 'required|min:3|max:15'
        ]);

        $insert = new Todo();
        $insert->user = $request->input('user');
        $insert->desc = $request->input('desc');

        $insert->save();

        return redirect('/insert')->with('success', 'Task was successfully added');
    }

    public function showAll()
    {
        $showAll = new Todo();
        return view('watch', ['showAll' => $showAll->all()]);
    }

    public function showOne($id)
    {
        $showOne = Todo::all();
        return view('watchOne', ['showOne' => $showOne->find($id)]);
    }

    public function updateTask($id)
    {
        $update = Todo::all();
        return view('update-task', ['update' => $update->find($id)]);
    }

    public function updateTaskSubmit($id, Request $request)
    {
        $updates = Todo::all();
        $update = $updates->find($id);
        $valid = $request->validate([
            'user' => 'required|min:3|max:15',
            'desc' => 'required|min:3|max:15'
        ]);

        $update->user = $request->input('user');
        $update->desc = $request->input('desc');

        $update->save();

        return redirect()->route('one', $id)->with('success', 'Task was successfully updated');
    }

    public function deleteTask($id)
    {
        $select = Todo::all();
        $select->find($id)->delete();
        return redirect()->route('showAll')->with('success', 'Task was successfully deleted');
    }
}
