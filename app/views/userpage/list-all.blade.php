@extends('layouts.userpage')

@section('content')
@foreach($products as $p)
    <div class="card h-100">
        <!-- Product image-->
            <img class="card-img-top" src="{{BASE_URL . $p->main_image}}" alt="">
        <!-- Product details-->
            <div class="card-body p-4">
                <div class="text-center">
        <!-- Product name-->
                <h5 class="fw-bolder">{{$p->name}}</h5>
        <!-- Product price-->
                ${{$p->price}}
                </div>
            </div>
    <!-- Product actions-->
        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="detailpro/{{$p->id}}">Xem thêm</a></div>
        </div>
    </div>

@endforeach 
@endsection

@section('aside')                
    @foreach($categories as $c)
        <div>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#">{{$c->name}}</a>
        </div>
    @endforeach
@endsection
