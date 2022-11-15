<div id="wrapper-navbar">
    <nav id="top" class="navbar fixed-top navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand ml-sm-5" href="{{route('home')}}"><img src="{{asset('images/main-logo-removebg-preview.png')}}" alt="image"></a>
        <button class="navbar-toggler collapsed navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar top-bar"></span>
            <span class="icon-bar middle-bar"></span>
            <span class="icon-bar bottom-bar"></span>
            <span class="sr-only">Toggle navigation</span>
        </button> 
        <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link  mr-3 open my-lg-0 my-2 ml-lg-0 ml-3" href="{{route('home')}}" id="navbarDropdown2" role="button"  aria-haspopup="true" aria-expanded="false">
                    Home
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle  mr-3 open my-lg-0 my-2 ml-lg-0 ml-3" href="{{route('inventory')}}" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            AKM Inventory
                    </a>
                    <div class="dropdown-menu dropdownId dropdown-menu-right" aria-labelledby="navbarDropdown1">    
                        @foreach(makes() as $item)
                            <a class="dropdown-item mt-1" href="{{route('inventory',$item->id)}}">
                                <img src="{{asset($item->image)}}" style="height: 35px;">{{$item->name}}
                            </a>
                            <div class="dropdown-divider"></div>
                        @endforeach
                    </div>
                </li>

                <li class="nav-item ">
                    <a class="nav-link  mr-3 open my-lg-0 my-2 ml-lg-0 ml-3" href="{{route('finance')}}" id="navbarDropdown2" role="button"  aria-haspopup="true" aria-expanded="false">
                    Finance
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link  mr-3 open my-lg-0 my-2 ml-lg-0 ml-3" href="{{route('warranty')}}" id="navbarDropdown2" role="button"  aria-haspopup="true" aria-expanded="false">
                    Warranty
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle  mr-3 open my-lg-0 my-2 ml-lg-0 ml-3" href="{{route('about')}}" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            About Us
                    </a>
                    <div class="dropdown-menu dropdownId dropdown-menu-right" aria-labelledby="navbarDropdown2">    
                        <a class="dropdown-item mt-1" href="{{route('about')}}">
                            About
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item mt-1" href="{{route('service')}}">
                            Services
                        </a>
                       
                    </div>
                </li>
                @if(!Auth::check())
                <li class="nav-item ">
                    <a class="nav-link  mr-3 open my-lg-0 my-2 ml-lg-0 ml-3" href="{{route('login')}}" id="navbarDropdown2" role="button"  aria-haspopup="true" aria-expanded="false" target="_blank">
                    Login
                    </a>
                </li>
                @else
                <li class="nav-item ">
                    <a class="nav-link  mr-3 open my-lg-0 my-2 ml-lg-0 ml-3" href="{{route('login')}}" id="navbarDropdown2" role="button"  aria-haspopup="true" aria-expanded="false">
                    Logout
                    </a>
                </li>
                @endif
            </ul> 
        </div>        
    </nav>
</div>