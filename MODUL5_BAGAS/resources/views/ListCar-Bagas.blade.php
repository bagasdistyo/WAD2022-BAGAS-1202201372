@extends('layout')

@section('content')
<div class="container" style="padding-top: 20px;">
        <h4>My Show Room</h4>
        <a>List Show Room Bagas - 1202201372</a>
    </div>
    <br />

    @foreach ($products as $product)
    <div class="container">
        <div class="card" style="width: 18rem;">
            <img src="/image/{{$product->image}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$product->name}}</h5>
                <p class="card-text">{{$product->description}}</p>
                <div class="row">
                    <div class="col">
                        <a href=""
                            class="btn btn-primary" name="id">Detail</a>
                    </div>

                    <div class="col">
                        <a href=""
                            class="btn btn-danger" name="delete">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach


</div>
@endsection
