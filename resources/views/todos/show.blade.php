@extends('layouts.app')

@section('content')

<h1 class="text-center my-5">{{$todo->name}}</h1>

<div class="row justify-content-center">
            <div class="col-6">
            <div class="card card-default">
            <div class="card-header">
                توضیحات
            </div>

            <div class="card-body">
                {{$todo->description}}
            </div>

           
        </div>
         <a href="/todos/{{$todo->id}}/edit" class="btn btn-primary btn-block d-block my-2 text-center">ویرایش</a>
            </div>
        </div>
@endsection
