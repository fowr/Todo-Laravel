@extends('layouts.app')




@section('content')


<div class="row justify-content-center my-4">
    <div class="col-6">
    <div class="card card-default">
        <div class="card-header">
           ویرایش تودو

        </div>

        <div class="card-body">
         
            <form action="/edit/{{$todo->id}}" method="post">
            @csrf
                <div  class="form-group" >
                    <input name="title" placeholder="Title:" class="form-control" type="text" value="{{$todo->name}}">
                
                </div>
                <div class="form-group my-3">
                    <textarea name="description" placeholder="Description:" class="form-control"  cols="30" rows="5" >{{$todo->description}}</textarea>
                </div>
                
                <div class="form-group text-center p-2">
                    <button type="submit" class="btn btn-primary">ذخیره</button>
                     <a href="/todos/{{$todo->id}}/delete" type="submit" class="btn btn-danger">حذف کردن</a>
                </div>
            </form>
        </div>

    </div>
    
    </div>
    

</div>

@endsection
