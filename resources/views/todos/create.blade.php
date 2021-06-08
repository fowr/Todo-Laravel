@extends('layouts.app')

@section('content')

<script>
    document.querySelectorAll('.nav-link').forEach((Element) => {Element.classList.remove('active')});
    document.querySelector('.create').classList.add('active');
</script>
<div class="row justify-content-center my-4">
    <div class="col-6">
    <div class="card card-default">
        <div class="card-header">
           ایجاد تودو

        </div>

        <div class="card-body">
            @if($errors->any())
                <ul class="list-group">
                    @foreach ($errors->all() as $error )
                        <div class="alert alert-danger">
                        
                            <li class="list-group-item">
                                {{$error}}
                            </li>
                    
                        </div>

                    @endforeach
                </ul>
             
            @endif
            <form action="/create-todo" method="post">
            @csrf
                <div  class="form-group" >
                    <input name="title" placeholder="عنوان:" class="form-control" type="text">
                
                </div>
                <div class="form-group my-3">
                    <textarea name="description" placeholder="توضیحات" class="form-control" name="" id="" cols="30" rows="5"></textarea>
                </div>
                
                <div class="form-group text-center p-2">
                    <button type="submit" class="btn btn-primary   btn-block">ایجاد</button>
                </div>
            </form>
        </div>

    </div>
    
    </div>
    

</div>

@endsection
