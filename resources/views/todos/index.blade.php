@extends('layouts.app')

@section('content')
<script>
    document.querySelectorAll('.nav-link').forEach((Element) => {Element.classList.remove('active')});
    document.querySelector('.all').classList.add('active')});
</script>
        <div class="row justify-content-center " style="margin-top: 1rem;">
            <div class="col-md-8 ">
                <div class="card card-default">
                    <div class="card-header">
                        تودو ها
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($todos as $todo)
                            <li class="list-group-item ">
                                {{$todo->name}}
                                @if (! $todo->completed)
                                    <a href="/todos/{{$todo->id}}/complete" style="color:white;margin-right:5px"class="btn btn-success btn-sm float-left white">انجام شد!</a>
                                @endif
                                
                                <a href="/todos/{{$todo->id}}" class="btn btn-outline-dark btn-sm float-left">مشاهده</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>


            </div>
        </div>

@endsection
     
