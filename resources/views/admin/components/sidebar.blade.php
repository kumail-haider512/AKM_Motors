<div class="sidebar" data-color="green" data-background-color="black" data-image="{{ asset('admin_theme') }}/assets/img/sidebar-3.jpg">
    <div class="logo">
        <a href="{{ route('admin.dashboard') }}" target="_blank" class="simple-text logo-normal">
            <img src="{{ asset('images/main-logo-removebg-preview.png') }}" width="250px" alt=""></a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="{{ asset(auth()->user()->image) }}" />
            </div>
            <div class="user-info">
                <a data-toggle="collapse" href="#collapseExample" class="username">
                    <span>{{Auth::user()->name}}<b class="caret"></b></span>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.profile')}}">
                                <span class="sidebar-mini"> EP </span>
                                <span class="sidebar-normal"> Edit Profile </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="nav-item @routeis('admin.dashboard') active @endrouteis">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p> Dashboard </p>
                </a>
            </li>
            <li class="nav-item @routeis('admin.user.*') active @endrouteis">
                <a class="nav-link" data-toggle="collapse" href="#user">
                    <i class="material-icons">groups</i><p> User<b class="caret"></b></p>
                </a>
                <div class="collapse @routeis('admin.user.*') show @endrouteis" id="user">
                    <ul class="nav">
                        <li class="nav-item @routeis('admin.user.list') active @endrouteis">
                            <a class="nav-link" href="{{ route('admin.user.list') }}">
                                <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                                <span class="sidebar-normal">User List</span>
                            </a>
                        </li>
                        <li class="nav-item @routeis('admin.user.add') active @endrouteis">
                            <a class="nav-link" href="{{ route('admin.user.add') }}">
                                <span class="sidebar-mini"> <i class="material-icons">add</i> </span>
                                <span class="sidebar-normal">User Add</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item @routeis('admin.make.*') active @endrouteis">
                <a class="nav-link" data-toggle="collapse" href="#make">
                    <i class="material-icons">groups</i><p> Dropdown<b class="caret"></b></p>
                </a>
                <div class="collapse @routeis('admin.make.*') show @endrouteis" id="make">
                    <ul class="nav">
                        <li class="nav-item @routeis('admin.location.list') active @endrouteis">
                            <a class="nav-link" href="{{ route('admin.location.list') }}">
                                <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                                <span class="sidebar-normal">Location</span>
                            </a>
                        </li>
                        <li class="nav-item @routeis('admin.make.list') active @endrouteis">
                            <a class="nav-link" href="{{ route('admin.make.list') }}">
                                <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                                <span class="sidebar-normal">Make</span>
                            </a>
                        </li>
                        <li class="nav-item @routeis('admin.model.list') active @endrouteis">
                            <a class="nav-link" href="{{ route('admin.model.list') }}">
                                <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                                <span class="sidebar-normal">Model</span>
                            </a>
                        </li>
                        <li class="nav-item @routeis('admin.interiorcolor.list') active @endrouteis">
                            <a class="nav-link" href="{{ route('admin.interiorcolor.list') }}">
                                <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                                <span class="sidebar-normal">Interior Color</span>
                            </a>
                        </li>
                        <li class="nav-item @routeis('admin.exteriorcolor.list') active @endrouteis">
                            <a class="nav-link" href="{{ route('admin.exteriorcolor.list') }}">
                                <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                                <span class="sidebar-normal">Exterior Color</span>
                            </a>
                        </li>
                        <li class="nav-item @routeis('admin.engine.list') active @endrouteis">
                            <a class="nav-link" href="{{ route('admin.engine.list') }}">
                                <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                                <span class="sidebar-normal">Engine</span>
                            </a>
                        </li>
                        {{--<li class="nav-item @routeis('admin.body.list') active @endrouteis">
                            <a class="nav-link" href="{{ route('admin.body.list') }}">
                                <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                                <span class="sidebar-normal">Body Type</span>
                            </a>
                        </li>--}}
                        <li class="nav-item @routeis('admin.fuel.list') active @endrouteis">
                            <a class="nav-link" href="{{ route('admin.fuel.list') }}">
                                <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                                <span class="sidebar-normal">Fuel Type</span>
                            </a>
                        </li>
                        <li class="nav-item @routeis('admin.brand.list') active @endrouteis">
                            <a class="nav-link" href="{{ route('admin.brand.list') }}">
                                <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                                <span class="sidebar-normal">Brand</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item @routeis('admin.product.*') active @endrouteis">
                <a class="nav-link" data-toggle="collapse" href="#product">
                    <i class="material-icons">groups</i><p> Product<b class="caret"></b></p>
                </a>
                <div class="collapse @routeis('admin.product.*') show @endrouteis" id="product">
                    <ul class="nav">
                        <li class="nav-item @routeis('admin.product.list') active @endrouteis">
                            <a class="nav-link" href="{{ route('admin.product.list') }}">
                                <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                                <span class="sidebar-normal">Product List</span>
                            </a>
                        </li>
                        <li class="nav-item @routeis('admin.product.add') active @endrouteis">
                            <a class="nav-link" href="{{ route('admin.product.add') }}">
                                <span class="sidebar-mini"> <i class="material-icons">add</i> </span>
                                <span class="sidebar-normal">Product Add</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
