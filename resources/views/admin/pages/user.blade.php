@extends('admin.master')
@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="row">
            <div class="col-md-4 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Thêm User</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form class="form-horizontal form-label-left" action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 ">User</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="text" name="name" id="autocomplete-custom-append" class="form-control col-md-10" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 ">Email</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="email" name="email" id="autocomplete-custom-append" class="form-control col-md-10" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 ">Password</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="text" name="password" id="autocomplete-custom-append" class="form-control col-md-10" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-sm-3  control-label">Cấp vai trò
                                </label>
                                <div class="col-md-9 col-sm-9 ">
                                @foreach ($roles as $role)
                                
                                    <br>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="role[{{$role->id}}]" value="{{$role->id}}"> {{Str::ucfirst($role->name)}} 
                                    </div>
                                @endforeach
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-9 col-sm-9  offset-md-3">
                                    <button type="submit" class="btn btn-success btn-sm">Thêm</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Danh sách User</h2>
                        <div class="clearfix"></div>
                        @if (session('message'))
                            <p class="alert alert-success text-center col-3 m-auto">{{session('message')}}</p>
                            {{session()->forget('message')}}
                        @endif
                    </div>
                    <div class="x_content">
                        <div class="table-responsive">
                            <table class="table table-striped jambo_table bulk_action">
                                <thead>
                                    <tr class="headings">
                                        <th class="column-title">Tên</th>
                                        <th class="column-title">Email</th>
                                        <th class="column-title">Vai trò</th>
                                        <th class="column-title">Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($users as $user)
                                    <tr class="even pointer">
                                        <td class=" ">{{Str::title($user->name)}}</td>
                                        <td class=" ">{{Str::title($user->email)}}</td>
                                        <td class=" ">
                                            @foreach ($user->roles as $role2)
                                                {{Str::ucfirst($role2->name)}} <br>
                                            @endforeach
                                        </td>
                                        <td class=" ">
                                            <a href="" class="fas fa-edit btn btn-warning btn-sm "></a>
                                            <form action="" method="POST" class="d-inline" >
                                                @csrf
                                                @method('DELETE')
                                                <button  onclick="return confirm('Bạn có muốn xóa món ăn')" class="btn btn-danger btn-sm" ><i class="far fa-trash-alt"></i></button>
                                            </form>
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