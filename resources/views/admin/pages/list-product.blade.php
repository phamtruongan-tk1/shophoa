@extends('admin.master')
@section('content')
<style>
    .w-5.h-5 {
        width:20px
    }
    
</style>

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3></h3>
            </div>
            <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row" style="display: block;">
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Danh sách món ăn</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="table-responsive">
                            <table class="table table-striped jambo_table bulk_action">
                                <thead>
                                    <tr class="headings">
                                        <th class="column-title">Tên</th>
                                        <th class="column-title">Ảnh</th>
                                        <th class="column-title">Giá </th>
                                        <th class="column-title">Trạng thái</th>
                                        <th class="column-title">Ngày bán</th>
                                        <th class="column-title">Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($products as $product)
                                    <tr class="even pointer">
                                        <td class=" ">{{Str::ucfirst($product->name)}}</td>
                                        <td class=" ">
                                            <img style="width:100px; height:80px" src="{{asset('uploads/products/'. $product->image)}}" alt="image">
                                        </td>
                                        <td class=" ">{{number_format($product->price)}}</td>
                                        <td class=" ">
                                            @if ($product->status === 1)
                                                {{'Hiện'}}
                                            @else 
                                                {{'Ẩn'}}
                                            @endif
                                        </td>
                                        <td class=" ">
                                            @foreach ($product->date as $date)
                                                {{Str::ucfirst($date->name)}}
                                            @endforeach
                                        </td>
                                        <td class=" ">
                                            <a href="{{route('product.edit', $product->id)}}" class="fas fa-edit btn btn-warning btn-sm "></a>
                                            <form action="{{route('product.destroy', $product->id)}}" method="POST" class="d-inline" >
                                                @csrf
                                                @method('DELETE')
                                                <button  onclick="return confirm('Bạn có muốn xóa món ăn')" class="btn btn-danger btn-sm" ><i class="far fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{$products->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection