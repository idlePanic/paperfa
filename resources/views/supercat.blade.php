
<!DOCTYPE html>
<html>
<head>
    <title>سایت فروشگاهی</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
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
</head>

<body style="background-color:#f5f5f5">
<!-- header -->
@include('includes.navbar')
<!-- //header -->

<!-- banner -->
<div class="banner">
    <div class="col-lg-2 col-md-2 hidden-sm hidden-xs">
        <nav class="navbar nav_bottom">

            <div class="container">
                <div class=" w3l_fresh_vegetables_grid w3l_fresh_vegetables_grid_right" >
                    <div class="w3l_fresh_vegetables_grid2" style="background-color:#f5f5f5">
                        @include('includes.cat-list')
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>

        </nav>
    </div>
    <br>
    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

        <div class="w3ls_w3l_banner_nav_left_grid">
            <div class="col-lg-12 col-md-12">
                <img src="{{asset("/images/supercat/brand/".$supercat.".jpg")}}" alt=" " class="img-responsive" style=" display:block;width:100%; height:100%;object-fit: cover;">
            </div>
            <hr>
            @foreach($supercats as $superc)

                @if($superc->eng_name==$supercat)
                    <h3>دسته {{$superc->fa_name}}</h3>
                @endif
            @endforeach

            <div class="w3ls_w3l_banner_nav_left_grid1">
                @foreach($categories as $category)

                    @if($supercat==$category->type)
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="hover14 column">
                                <a href="/{{$supercat}}/{{$category->eng_name}}">
                                <div class="agile_top_brand_right_grid w3l_agile_top_brand_right_grid">
                                    <div class="agile_top_brand_right_grid1">
                                        <figure>
                                            <div class="snipcart-item block">
                                                <div class="snipcart-thumb">
                                                    <img src="{{asset("/images/category/logo/".$category->eng_name.".png")}}" style="width: 140px;height: 140px">
                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                    <span class="center"><h4>{{$category->fa_name}}</h4></span>
                                </div>
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
                <div class="clearfix"> </div>
            </div>

        </div>
    </div>
    <div class="clearfix"></div>
</div>
<!-- //banner -->

<!-- footer -->
@include('includes.footer')
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $(".dropdown").hover(
            function () {
                $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                $(this).toggleClass('open');
            },
            function () {
                $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>
<script type="text/javascript" id="snipcart" src="js/snipcart.js" data-api-key="ZGQxNzVjZTItOWRmNS00YjJhLTlmNGUtMDE4NjdiY2RmZGNj"></script>
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function () {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->
<script type='text/javascript' src="{{asset('js/jquery.mycart.js')}}"></script>
</body>
</html>
