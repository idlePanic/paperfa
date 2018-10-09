<nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            {{--begin logo--}}
            <ul class="nav navbar-nav">
                <li class="nav-item mobile-menu hidden-md-up float-xs-left"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5 font-large-1"></i></a></li>
                <li class="nav-item"><a href="{{asset('/admin.index')}}" class="navbar-brand nav-link"><img alt="branding logo" src="{{asset('/images/logo/robust-logo-light.png')}}" data-expand="{{asset('/images/logo/paper-logo.png')}}" data-collapse="{{asset('/images/logo/robust-logo-small.png')}}" class="brand-logo"></a></li>
                {{--<li class="nav-item hidden-md-up float-xs-right"><a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i class="icon-ellipsis pe-2x icon-icon-rotate-right-right"></i></a></li>--}}
            </ul>
            {{--end logo--}}
        </div>
        <div class="navbar-container content container-fluid">
            <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
                <ul class="nav navbar-nav">
                    <li class="nav-item hidden-sm-down"><a class="nav-link nav-menu-main menu-toggle hidden-xs is-active"><i class="icon-menu5"></i></a></li>
                    <li class="nav-item hidden-sm-down"><a href="#" class="nav-link nav-link-expand"><i class="ficon icon-expand2"></i></a></li>
                </ul>
                <ul class="nav navbar-nav float-xs-right">

                    <li class="dropdown dropdown-notification nav-item ">

                        <a href="#" data-toggle="dropdown" class="">
                            <div class="row" style="padding-left: 80px"> <img src="/images/avatars/{{Auth::user()->avatar}}" class="avatar avatar-sm avatar-online rounded-circle" alt="avatar" ><label class="label-info m-0">{{ Auth::user()->name}}</label></div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-media ">
                            <li>
                                <a class="dropdown-item pull-right" href="{{ url('/profile') }}">
                                    <i class="fa fa-btn fa-user"></i>پروفایل
                                </a>
                                <a class="dropdown-item pull-right" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                                    <i class="fa fa-btn fa-sign-out"></i>خروج
                                </a>

                            </li>
                        </ul>
                    </li>


                </ul>
            </div>
        </div>
    </div>
</nav>