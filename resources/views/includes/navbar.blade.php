

<div class="products-breadcrumb">
    <div class="container">
        <ul>
            <li class="pull-right">
                {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
                {{--{{ config('app.name', 'Laravel') }}--}}
                {{--</a>--}}
                <a class="navbar-brand" href="/">خانه</a>
            </li>

            @foreach($supercats as $supercat)
                <li class="pull-right">
                    <div class="dropdown navbar-brand">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{$supercat->fa_name}}</a>
                        <div class="mega-dropdown-menu">
                            <ul class="dropdown-menu drp-mnu">
                                @foreach($categories as $category)
                                    {{--<li>{{$supercat->eng_name}}</li>--}}
                                    @if($category->type == $supercat->eng_name)
                                        <li><a href="/{{$category->type}}/{{$category->eng_name}}">.{{$category->fa_name}}</a></li>
                                    @endif


                                @endforeach
                            </ul>
                        </div>
                    </div>
                </li>
            @endforeach
            {{--<li class="pull-right">--}}
            {{--<div class="dropdown navbar-brand">--}}
            {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">دسته ها</a>--}}
            {{--<div class="mega-dropdown-menu">--}}
            {{--<ul class="dropdown-menu drp-mnu">--}}
            {{--@foreach($categories as $category)--}}
            {{--<li><a href="/category/{{$category->eng_name}}">.{{$category->fa_name}}</a></li>--}}
            {{--@endforeach--}}
            {{--</ul>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</li>--}}


        </ul>
        <!-- Authentication Links -->
        @guest
            <ul>
                <li class=" pull-left ">


                    <a class="navbar-brand" data-target="#masuk" data-toggle="modal" href="#">Login</a>
                    <div class="modal fade" id="masuk" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times</button>
                                    <h4 class="modal-title">log in</h4>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{asset('login/custom')}}" aria-label="{{ __('Login') }}">
                                        @csrf

                                        <div class="form-group row">
                                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-6 offset-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Login') }}
                                                </button>

                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary m" data-dismiss="modal">close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--<a class="navbar-brand" href="{{ route('login') }}">{{ __('Login') }}</a>--}}

                </li>
                <li class="pull-left">

                    <a class="navbar-brand" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li></ul>
        @else
            <ul>
                <li class="dropdown pull-left">
                    <div class="dropdown navbar-brand">
                        <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="position: relative;padding-left: 50px">
                            <span></span>
                            {{ Auth::user()->name }}
                            <img src="/images/avatars/{{Auth::user()->avatar}}" style="width: 32px;height: 32px;position: absolute;top: 0px;left: 10px;border-radius: 50%">

                        </a>
                        <div class="mega-dropdown-menu" aria-labelledby="navbarDropdown">
                            <ul class="dropdown-menu drp-mnu">
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



                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                </li>
                <li class="pull-left">
                    {{--<a href="{{route('article.shoppingCard')}}" role="button" >--}}
                    <a href="/shopping-card" class="navbar-brand" role="button" >
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        سبد خرید
                        <span class="badge">{{Session::has('card') ? Session::get('card')->totalQty : ''}}</span>
                    </a>
                </li>
                {{--<li class="dropdown pull-left">--}}
                {{--<div class="dropdown navbar-brand">--}}
                {{--<a id="navbarDropdown" class="dropdown-toggle" href="{{route('article.shoppingCard')}}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="position: relative;padding-left: 50px">--}}
                {{--<i class="fa fa-shopping-cart" aria-hidden="true"></i>--}}
                {{--سبد خرید--}}
                {{--<span class="badge">{{Session::has('card') ? Session::get('card')->totalQty : ''}}</span>--}}
                {{--</a>--}}

                {{--</div>--}}
                {{--</li>--}}
            </ul>
        @endguest

    </div>
</div>
