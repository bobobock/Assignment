@extends('layouts.main')
@section('content')

<div class="col-12">
    <div class="card">
        <div class="card-header">
            <form action="" method="get">
                <div class="row">
                    <div class="col-md-4">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" name="keyword" value="{{$keyword}}">
                            <span class="input-group-append">
                              <button type="submit" class="btn btn-info btn-flat">Tìm!</button>
                            </span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="car-body">
            <table class="table table-hover" border="1">
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Category_id</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Detail</th>
                    <th>Promotion</th>
                    <th>
                        <!-- <a href="them-sp">Add</a> -->
                    </th>
                </thead>
                <tbody>
                    @foreach($products as $p)
                        <tr>
                            <td>{{$p->id}}</td>
                            <td>{{$p->name}}</td>
                            <td>{{$p->category_id}}</td>
                            <td>
                                <img src="{{ BASE_URL . $p->main_image}}" width="70">
                            </td>
                            <td>{{$p->price}}</td>
                            <td>{{$p->detail}}</td>
                            <td>{{$p->promotion}}</td>
                            <td>
                                <a class="btn btn-sm btn-info" href="sua-sp/{{ $p->id }}">Sửa</a>
                                <a class="btn btn-sm btn-danger btn-remove" href="xoa-sp/{{ $p->id }}">Xóa</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('page-script')
<script>
    $(document).ready(function(){
        $('.btn-remove').click(function(){
            location.reload();
        });
    });
</script>
@endsection