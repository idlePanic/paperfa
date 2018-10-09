
<!DOCTYPE html>
<html>
<head>
    <title>paperفا</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);function hideURLbar(){ window.scrollTo(0,1); } </script>
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
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        @include('includes.navbar')
    </div>
</div>
<!-- //header -->
 
<!-- banner -->
<div class="banner">
    <div class="col-lg-2 col-md-2">
        <nav class="navbar nav_bottom">
            <div class="container">
                <div class=" w3l_fresh_vegetables_grid w3l_fresh_vegetables_grid_right ">
                    <div class="w3l_fresh_vegetables_grid2" style="background-color:#f5f5f5">
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
            <div class="col-lg-12 col-md-12">
                <img src="{{asset("/images/category/brand/".$cat.".jpg")}}" alt=" " class="img-responsive" style=" display:block;width:100%; height:100%;object-fit: cover;">
            </div><br><br>
            <h3>@foreach($categories as $category)
                    @if($category->eng_name==$cat)
                        دسته {{$category->fa_name}}
                    @endif
                @endforeach
            </h3>
            <div class="w3ls_w3l_banner_nav_left_grid1">
                @foreach($article as $art)
                    @if($art->cat_name==$cat)
                        <div class="col-md-3 ">
                            <div class="hover14 column">
                                <div class="agile_top_brand_right_grid w3l_agile_top_brand_right_grid">
                                    <div class="agile_top_brand_right_grid1">
                                        <figure>
                                            <div class="snipcart-item block">
                                                <a href="/{{$supercat}}/{{$cat}}/{{$art->id}}">
                                                <div class="snipcart-thumb">
                                                    <img src="{{asset("/articles/".$cat."/".$art->logo)}}" style="height: 140px;width: 140px">
                                                    <p>{{$art->fa_name}}</p>
                                                    <p>{{$art->cat_name}}</p>
                                                    <h4>
                                                        <label class="label-info">
                                                            {{$art->price}} هزار تومان
                                                        </label>
                                                    </h4>
                                                </div> {{--end div snipcart-thumb---------------------- --}}
                                                </a>
                                            </div> {{--//end div snipcart-item -----------------}}
                                        </figure>
                                    </div>{{--  //end of div agile_top_brand_right_grid1 -----------------}}
                                    <div class="snipcart-details">
                                        <a class="btn btn-danger my-cart-btn hvr-sweep-to-left" href="{{route('Article.addToCard',['id'=>$art->id])}}" data-id="5" data-name="Knorr instant soup" data-summary="summary 5" data-price="3.00" data-quantity="1" data-image="images/5.png">افزودن به سبد</a>
                                    </div>
                                </div>  {{--end div--}}
                            </div> {{--end of hover14--}}
                        </div>
                    @endif
                @endforeach
                <div class="clearfix"> </div>
                    <nav>
                        {{$article->links()}}
                    </nav>
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
<script type='text/javascript' src="{{asset('js/jquery.mycart.js')}}"></script>

</body>
</html>
