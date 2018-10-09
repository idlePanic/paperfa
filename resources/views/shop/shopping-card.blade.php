
<!DOCTYPE html>
<html>
<head>
    <title>سایت فروشگاهی</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- font-awesome icons -->
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- //font-awesome icons -->
    <!-- js -->
    <script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
    <!-- //js -->
    <link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
    <style>

    </style>
</head>

<body>
<div class="col-lg-12 col-md-12 col-sm-12">
@include('includes.navbar')
<div class="row">
<div class="banner">
    <div class="col-lg-2 col-md-2">
        <nav class="navbar nav_bottom">

            <div class="container">
                <div class=" w3l_fresh_vegetables_grid w3l_fresh_vegetables_grid_right">
                    <div class="w3l_fresh_vegetables_grid2">
                        @include('includes.cat-list')
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>

        </nav>
    </div>
    <br>

    <div class="col-lg-8 col-md-8">

        <div class="w3ls_w3l_banner_nav_left_grid">

            @if(Session::has('card'))
                <div class="container">
                    <div class="row">
                        <div class="col-xs-8">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <h5><span class="glyphicon glyphicon-shopping-cart"></span> لیست خرید</h5>
                                            </div>
                                            <div class="col-xs-6">
                                                <button type="button" class="btn btn-primary btn-sm btn-block">
                                                    <span class="glyphicon glyphicon-share-alt"></span> Continue shopping
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-xs-2"><h4>تصویر محصول</h4>
                                        </div>
                                        <div class="col-xs-5">
                                            <h4 class="product-name"><strong>نام محصول</strong></h4>
                                        </div>

                                            <div class="col-xs-3">
                                                <h5>قیمت محصول</h5>
                                            </div>

                                            <div class="col-xs-2">
                                                <div>
                                                    عملگر
                                                </div>
                                            </div>

                                    </div>
                                    <hr>
                                    @php($art_ids=[])
                                    @foreach($articles as $article)
                                    <div class="row">
                                        {{--<img src="{{asset("/articles/".$cat."/".$art->logo)}}" style="height: 140px;width: 140px">--}}
                                        <div class="col-xs-2"><img class="img-responsive" src="{{asset(("/articles/".$article['item']['cat_name']."/".$article['item']['logo']))}}" style="width: 60px;height: 60px">
                                        </div>
                                        <div class="col-xs-5"><br>

                                            <h4 class="product-name"><strong>{{$article['item']['fa_name']}}</strong></h4>
                                                {{  $art_ids[]=$article['item']['id'] }}

                                        </div>

                                            <div class="col-xs-3">
                                                <h5><strong>{{$article['price']}}<label class="label-warning">هزار تومان</label></strong></h5>
                                            </div>
                                            <div class="col-xs-2">
                                                <div class="btn-group">
                                                    <a href="{{route('article.remove',['id'=>$article['item']['id']])}}" type="button" class="btn btn-primary"><span class="glyphicon glyphicon-trash"></span></a>

                                                </div>
                                            </div>
                                        </div>

                                    <hr>
                                    @endforeach

                                </div>
                                <div class="panel-footer">
                                    <div class="row text-center">
                                        <div class="col-xs-9">
                                            <h4 class="text-right">مجموع:  <strong>{{$totalPrice}}<label class="label-warning">هزار تومان</label></strong></h4>
                                        </div>
                                        <div class="col-xs-3">
                                            <a type="button" href="{{route('checkout')}}" class="btn btn-success btn-block">
                                                پرداخت
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            @else
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-8">
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <h5><span class="glyphicon glyphicon-shopping-cart"></span> لیست خرید</h5>
                                                </div>
                                                <div class="col-xs-6">
                                                    <button type="button" class="btn btn-primary btn-sm btn-block">
                                                        <span class="glyphicon glyphicon-share-alt"></span> Continue shopping
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="col-xs-10 text-right">
                                                    <h1>سبد خرید خالی است</h1>
                                                </div>

                                            </div>
                                        </div>
                                        <hr>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            @endif


        </div>
    </div>
</div>
</div>

@include('includes.footer')
</div>

<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $(".dropdown").hover(
            function() {
                $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
                $(this).toggleClass('open');
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>
</body>
</html>
