<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\Models\Todo;


class TodosController extends Controller
{
    public function index(){

        return view('todos.index')->with('todos',Todo::all());
    }

    public function show($todo_id){
        return view('todos.show')->with('todo',Todo::find($todo_id));
    }


    public function complete( $todo_id){
        $todo=Todo::find($todo_id);
        $todo->completed=true;
        $todo->save();
        return redirect('/todos');
    }


    public function edit_page($todo_id){
        return view('todos.editpage')->with('todo',Todo::find($todo_id));
    }


    public function update($todo_id){
        $todo=Todo::find($todo_id);
        $data=request()->all();
        $todo->name=$data['title'];
        $todo->description=$data['description'];
        $todo->completed=false;

        $todo->save();
        return redirect('/todos');


    }

    public function delete($todo_id){
        $todo=Todo::find($todo_id);
        $todo->delete();
        return redirect('todos');
    }


    public function create(){
        return view('todos.create');
    }

    public function create_todo(){


        $this->validate(request(),[

            'title'=>'required',
            'description'=> 'required'
        ]);


        $data=request()->all();
        $todo=new Todo();
        $todo->name=$data['title'];
        $todo->description=$data['description'];
        $todo->completed=false;

        $todo->save();
        return redirect('/todos');

    }

}
