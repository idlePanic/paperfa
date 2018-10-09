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

    <!--search table--------------------------------------------------------->
    <style class="cp-pen-styles">
        .product {
            margin-bottom: 30px;
        }
        .product-inner {
            box-shadow: 0 0 10px rgba(0,0,0,.2);
            padding: 10px;
        }
        .product img {
            margin-bottom: 10px;
        }</style>
    <!--search table--------------------------------------------------------->
</head>

<body style="background-color:#f5f5f5">
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
                                    <li><a href="login.html">
                                            ورود</a></li>
                                    <li><a href="login.html">
                                            ثبت نام</a></li>
                                </ul>

                            </div>
                        </li>
                    </ul>
                </div></li>

        </ul>
    </div>
</div>
<!-- //header -->

<!-- banner -->
<div class="banner" style="background-color: #f5f5f5">
    <div class="col-lg-3 col-md-5">
        <nav class="navbar nav_bottom">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header nav_2">
                <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                    <span class="sr-only">تعویض ناوبری</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="well">
                <h3 align="center">جستجوی مقاله</h3>
                <form class="form-horizontal">

                    <div class="form-group">
                        <label for="location1" class="control-label">Location</label>
                        <select class="form-control" name="" id="location1">
                            <option value="">Any</option>
                            <option value="">1</option>
                            <option value="">2</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="type1" class="control-label">Type</label>
                        <select class="form-control" name="" id="type1">
                            <option value="">Any</option>
                            <option value="">1</option>
                            <option value="">2</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pricefrom" class="control-label">Min Price</label>
                        <div class="input-group">
                            <div class="input-group-addon" id="basic-addon1">$</div>
                            <input type="text" class="form-control" id="pricefrom" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="priceto" class="control-label">Max Price</label>
                        <div class="input-group">
                            <div class="input-group-addon" id="basic-addon2">$</div>
                            <input type="text" class="form-control" id="priceto" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <p class="text-center"><a href="#" class="btn btn-danger" role="button"><i class="fa fa-search"> جستجو </i></a></p>
                </form>
            </div>
            @yield('search')

        </nav>
    </div>
    <div class="col-lg-8 col-md-7">
        <br><br>
        <section class="slider">
            <div class="flexslider" dir=ltr>
                <ul class="slides">
                    <li>
                        <div class="w3l_banner_nav_left_banner">
                            <h3>درست کردن<span>غذای</span>تند</h3>
                            <div class="more">
                                <a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">
                                    فروشگاه در حال حاضر</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="w3l_banner_nav_left_banner1">
                            <h3>درست کردن<span>غذای</span>تند</h3>
                            <div class="more">
                                <a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">
                                    فروشگاه در حال حاضر</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="w3l_banner_nav_left_banner2">
                            <h3>تا<i>50%</i> off.</h3>
                            <div class="more">
                                <a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">
                                    فروشگاه در حال حاضر</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- flexSlider -->
        <link rel="stylesheet" href="{{asset('css/flexslider.css')}}" type="text/css" media="screen" property="" />
        <script defer src="{{asset('js/jquery.flexslider.js')}}"></script>
        <script type="text/javascript">
            $(window).load(function(){
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function(slider){
                        $('body').removeClass('loading');
                    }
                });
            });
        </script>
        <!-- //flexSlider -->
    </div>
    <div class="clearfix"></div>
</div>
<!-- banner -->

<!-- fresh-vegetables -->
<div class="fresh-vegetables">

    <div class="w3l_fresh_vegetables_grids">
        <h3>دسته بندی مقالات</h3>
        <div class="col-lg-3 col-md-3 w3l_fresh_vegetables_grid ">
            <div class="">
                <ul>
                    <li>دسته ها</li>

                    @foreach($categories as $category)

                        <li><i class="fa fa-check" aria-hidden="true"></i><a href="/category/{{$category->eng_name}}">{{$category->fa_name}}</a></li>
                    @endforeach

                </ul>
            </div>
        </div>
        <div class="col-lg-8 col-md-8 w3l_fresh_vegetables_grid_left">

            <div class="w3ls_w3l_banner_nav_left_grid">

                <div class="w3ls_w3l_banner_nav_left_grid1">

                    @foreach($categories as $category)
                        <a href="/category/{{$category->eng_name}}"><div class="col-md-3 w3ls_w3l_banner_right">
                                <div class="hover14 column">
                                    <div class="agile_top_brand_right_grid w3l_agile_top_brand_right_grid">

                                        <div class="agile_top_brand_right_grid1">
                                            <figure>
                                                <div class="snipcart-item block">
                                                    <div class="snipcart-thumb">
                                                        <img src="/images/category/{{$category->eng_name}}.png" alt=" " class="img-responsive" />
                                                    </div>
                                                    <div class="snipcart-details">
                                                        <button class="btn btn-danger my-cart-btn hvr-sweep-to-left" data-id="5" data-name="Knorr instant soup" data-summary="summary 5" data-price="3.00" data-quantity="1" data-image="images/5.png">{{$category->fa_name}}</button>
                                                    </div>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div></a>
                    @endforeach


                    <div class="clearfix"> </div>
                </div>

            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <!--</div>-->
</div>
<!-- //fresh-vegetables -->

<!-- newsletter -->
<div class="newsletter">
    <div class="container">
        <div class="w3agile_newsletter_right">
            <h3>برای دریافت خبرنامه ما ثبت نام کنید</h3>
        </div>
        <div class="w3agile_newsletter_left">
            <form action="#" method="post">
                <input type="email" name="ایمیل" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                <input type="submit" value="مشترک در حال حاضر">
            </form>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //newsletter -->

<!-- footer -->
<div class="footer">
    <div class="container" dir=ltr>
        <div class="col-md-3 w3_footer_grid">
            <h3>اطلاعات</h3>
            <ul class="w3_footer_grid_list">
                <li><a href="events.html">رویدادها</a></li>
                <li><a href="about.html">درباره ما</a></li>
                <li><a href="products.html">بهترین تخفیف</a></li>
                <li><a href="services.html">خدمات</a></li>
                <li><a href="short-codes.html">
                        کدهای کوتاه</a></li>
            </ul>
        </div>
        <div class="col-md-3 w3_footer_grid">
            <h3>اطلاعات</h3>
            <ul class="w3_footer_grid_list">
                <li><a href="faqs.html">
                        پرسش و پاسخ</a></li>
                <li><a href="privacy.html">
                        سیاست حفظ حریم خصوصی</a></li>
                <li><a href="privacy.html">
                        شرایط استفاده</a></li>
            </ul>
        </div>
        <div class="col-md-3 w3_footer_grid">
            <h3>
                چه در فروشگاهی</h3>
            <ul class="w3_footer_grid_list">
                <li><a href="pet.html">
                        مواد غذایی</a></li>
                <li><a href="frozen.html">اسنک منجمد</a></li>
                <li><a href="kitchen.html">اشپزخانه</a></li>
                <li><a href="products.html">
                        مواد غذایی مارک دار</a></li>
                <li><a href="household.html">خانواده</a></li>
            </ul>
        </div>
        <div class="col-md-3 w3_footer_grid">
            <h3>
                پست توییتر</h3>
            <ul class="w3_footer_grid_list1">
                <li><label class="fa fa-twitter" aria-hidden="true"></label><i>01 روز پیش</i><span>

لورم ایپسوم<a href="#">

لورم ایپسوم یا طرح‌نما</a>
						لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
						<a href="#">

لورم ایپسوم یا طرح‌نما</a> طراحی گرافیک</span></li>
                <li><label class="fa fa-twitter" aria-hidden="true"></label><i>02 روز پیش</i><span>

لورم ایپسوم<a href="#">

لورم ایپسوم یا طرح‌نما</a>
						لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
						<a href="#">

لورم ایپسوم یا طرح‌نما</a> طراحی گرافیک</span></li>
            </ul>
        </div>
        <div class="clearfix"> </div>
        <div class="agile_footer_grids">
            <div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
                <div class="w3_footer_grid_bottom">
                    <h4>
                        100٪ پرداخت امن</h4>
                    <img src="{{asset('images/card.png')}}" alt=" " class="img-responsive" />
                </div>
            </div>
            <div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
                <div class="w3_footer_grid_bottom">
                    <h5>ارتباط با ما</h5>
                    <ul class="agileits_social_icons">
                        <li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="wthree_footer_copy">
            <p>کلیه حقوق مادی و معنوی محفوظ است: <a href="http://pardiswp.com/">پردیس وردپرس</a></p>
        </div>
    </div>
</div>
<!-- //footer -->

<!-- Bootstrap Core JavaScript -->

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
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
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
<script type="text/javascript">
    $(function () {

        var goToCartIcon = function($addTocartBtn){
            var $cartIcon = $(".my-cart-icon");
            var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
            $addTocartBtn.prepend($image);
            var position = $cartIcon.position();
            $image.animate({

            }, 500 , "linear", function() {
                $image.remove();
            });
        }

        $('.my-cart-btn').myCart({
            classCartIcon: 'my-cart-icon',
            classCartBadge: 'my-cart-badge',
            affixCartIcon: true,
            checkoutCart: function(products) {
                $.each(products, function(){
                    console.log(this);
                });
            },
            clickOnAddToCart: function($addTocart){
                goToCartIcon($addTocart);
            },
            getDiscountPrice: function(products) {
                var total = 0;
                $.each(products, function(){
                    total += this.quantity * this.price;
                });
                return total * 1;
            }
        });

    });
</script>

</body>

</html>
