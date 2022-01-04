@extends('admin.master')
@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Tables</h3>
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
                        <h2>Table design</h2>
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
                                            <img src="public/uploads/products/{{$product->image}}">
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
                                            <a class="fas fa-edit btn btn-warning btn-sm "></a>
                                            <a class="fas fa-trash-alt btn-success btn-sm "></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection