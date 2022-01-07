@extends('admin.master')
@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3></h3>
            </div>
            <div class="title_right">
                <div class="col-md-5 col-sm-5  form-group pull-right top_search">
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
        <div class="row">
            <div class="col-md-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Sửa món ăn</h2>
                        <div class="clearfix"></div>
                        @if (session('message'))
                            <p class="alert alert-success text-center col-3 m-auto">{{session('message')}}</p>
                            {{session()->forget('message')}}
                        @endif
                    </div>
                    <div class="x_content">
                        <br />
                        <form action="{{route('product.update', $product->id)}}" class="form-horizontal form-label-left" action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 ">Tên</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="text" name="name" id="autocomplete-custom-append" value="{{Str::ucfirst($product->name)}}" class="form-control col-md-10" placeholder="Tên món ăn"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 ">Hình ảnh</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="file" name="image" id="autocomplete-custom-append" class="form-control col-md-10"/> 
                                    <img style="width:100px; height:80px" src="{{asset('uploads/products/'. $product->image)}}" alt="image">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 ">Giá</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="text" name="price" id="autocomplete-custom-append" value="{{$product->price}}" class="form-control col-md-10" placeholder="Giá tiền" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 ">Hiển thị</label>
                                <div class="col-md-1 col-sm-1 ">
                                    <select class="form-control" name="status">
                                        <option @if($product->status === 1) {{'selected'}} @endif value="1">Hiện</option>
                                        <option @if($product->status === 0) {{'selected'}} @endif value="0">Ẩn</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-sm-3  control-label">Ngày bán
                                </label>
                                <div class="col-md-9 col-sm-9 ">
                                    @foreach ($dates as $date)
                                    <div class="form-check form-switch">
                                        <input
                                            @foreach ($product->date as $date2)
                                                @if ($date->id === $date2->id)
                                                    {{'checked'}}
                                                @endif
                                            @endforeach
                                        
                                         class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="date[{{$date->id}}]" value="{{$date->id}}"> {{Str::ucfirst($date->name)}}
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-9 col-sm-9  offset-md-3">
                                    <button type="submit" class="btn btn-success btn-sm">Gửi</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection