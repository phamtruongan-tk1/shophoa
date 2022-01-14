<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
        </div>
        <div class="clearfix"></div>
        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="{{asset('gentelella-alela/production/images/img.jpg')}}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{Str::title(auth()->user()->name)}}</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->
        <br />
        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li>
                        @canany(['product-index','product-store'])
                        <a><i class="fa fa-home"></i> Món <span class="fa fa-chevron-down"></span></a>
                        @endcanany

                        <ul class="nav child_menu">

                            @can('product-store')
                            <li><a href="{{route('product.create')}}">Thêm</a></li>
                            @endcan

                            @can('product-index')
                            <li><a href="{{route('product.index')}}">Danh sách</a></li>
                            @endcan

                        </ul>
                    </li>
                    {{-- <li>
                        <a href="{{route('date.index')}}"><i class="fa fa-home"></i> Quản lý món theo ngày </a>
                    </li> --}}
                    <li>
                        @canany(['user-index','role-managerment'])
                        <a><i class="fa fa-home"></i> User <span class="fa fa-chevron-down"></span></a>
                        @endcanany

                        <ul class="nav child_menu">

                            @can('user-index')
                            <li><a href="{{route('user.index')}}">Quản lý user </a></li>
                            @endcan

                            @can('role-managerment')
                            <li><a href="{{route('role.index')}}">Phân quyền</a></li>
                            @endcan

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /sidebar menu -->
        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>