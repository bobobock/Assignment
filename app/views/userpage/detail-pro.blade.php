@extends('layouts.userpage')

@section('content')
                <div class="row gx-4 gx-lg-5 align-items-center chitietsp">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="<?= BASE_URL . $product->main_image?>" alt="..."></div>
                    <div class="col-md-6">
                        <div class="small mb-1"> <?= $product->category_id ?></div>
                        <h1 class="display-5 fw-bolder"><?= $product->name ?></h1>
                        <div class="fs-5 mb-5">
                            <span>$<?= $product->price?> - </span>
                            <span> Sale:<?= $product->promotion?>%</span>
                        </div>
                        <p class="lead"><?= $product->detail ?></p>
                    </div>
                </div>
@endsection

@section('aside')                
    @foreach($categories as $c)
        <div>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#">{{$c->name}}</a>
        </div>
    @endforeach
@endsection