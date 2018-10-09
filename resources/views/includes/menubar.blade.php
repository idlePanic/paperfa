<style>
    .modal-header, h4, .close {
        background-color: #5cb85c;
        color:white !important;
        text-align: center;
        font-size: 30px;
    }
    .modal-footer {
        background-color: #f9f9f9;
    }
</style>

<div class="products-breadcrumb">
    <div class="container">
        <ul>
            <li class="pull-right"><i class="fa fa-home" aria-hidden="true"></i><a href="#">صفحه اصلی</a><span>|</span></li>

            <li class="pull-right"> <div class="dropdown">
                    <i class="fa fa-arrow-down" aria-hidden="true"></i><a href="#" class="dropdown-toggle" data-toggle="dropdown">دسته ها</a><span>|</span>
                    <div class="mega-dropdown-menu">
                        <ul class="dropdown-menu drp-mnu">
                            @foreach($categories as $category)
                                <li><a href="/category/{{$category->eng_name}}">.{{$category->fa_name}}</a></li>
                            @endforeach
                        </ul>
                    </div></div></li>

            <li class="pull-right"><i class="fa "></i><a href="#">ارتباط با ما</a><span>|</span></li>

            <li class="pull-right"><i class="fa "></i><a href="#">درباره ما</a></li>


            <li class="pull-left"><span>|</span><a>0213456789 </a><i class="fa fa-phone" aria-hidden="true"></i></li>
            <li class="pull-left"><span>|</span>
                <i><span class="glyphicon glyphicon-shopping-cart my-cart-icon"></span></i>
            </li>
            <li class="pull-left"><div class="dropdown pull-left">
                    <i class="fa fa-user" aria-hidden="true"></i><a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
                    <ul>
                        <li class="dropdown pull-left">
                            <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>-->
                            <div class="mega-dropdown-menu">
                                <ul class="dropdown-menu drp-mnu">
                                    <li><button class="btn btn-dark" id="myBtn">ورود
                                    </button></li>
                                    <br>
                                    <li><button class="btn btn-dark"><a href="{{asset('/register')}}" >
                                                ثبت نام</a></button></li>
                                </ul>

                            </div>
                        </li>
                    </ul>
                </div></li>

        </ul>
    </div>
</div>

@if(Session::has('login_correct'))
    <div class="alert alert-info alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
        </button>
{{--        {{Session::get('login_correct')}}--}}
        {{$value = Session::pull('login_correct', 'default')}}
        {{$value}}

    </div>
@endif
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="padding:35px 50px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
                <form role="form" method="post" action="{{asset('/user/identify')}}" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="name"><span class="glyphicon glyphicon-user"></span> Username</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                        <input type="text" class="form-control" id="psw" name="password" placeholder="Enter password">
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="" checked>Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <p>Not a member? <a href="#">Sign Up</a></p>
                <p>Forgot <a href="#">Password?</a></p>
            </div>
        </div>

    </div>
</div>


<script>
    $(document).ready(function(){
        $("#myBtn").click(function(){
            $("#myModal").modal();
        });
    });
</script>