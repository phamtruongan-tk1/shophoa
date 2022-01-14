@extends('admin.master')
@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="row">
            <div class="col-md-4 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Sửa vai trò</h2>
                        <div class="clearfix"></div>
                        @if (session('message'))
                            <p class="alert alert-success text-center col-3 m-auto">{{session('message')}}</p>
                            {{session()->forget('message')}}
                        @endif
                    </div>
                    <div class="x_content">
                        <br />
                        <form class="form-horizontal form-label-left" action="{{route('role.update', $role->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 ">Vai trò</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="text" value="{{$role->name}}" name="name" id="autocomplete-custom-append" class="form-control col-md-10" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-sm-3  control-label">Cấp quyền
                                </label>
                                <div class="col-md-9 col-sm-9 ">
                                @foreach ($permissions as $permission)
                                    <div class="form-check form-switch">
                                        <input
                                        @foreach ($permission->roles as $role2)
                                            @if ($role->id === $role2->id)
                                                {{'checked'}}
                                            @endif
                                        @endforeach
                                         class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="permission[{{$permission->id}}]" value="{{$permission->id}}"> {{Str::ucfirst($permission->name)}} 
                                    </div>
                                @endforeach
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-9 col-sm-9  offset-md-3">
                                    <button type="submit" class="btn btn-success btn-sm">Sửa</button>
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