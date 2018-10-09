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
    <link href="{{asset('css/sweetalert.css')}}" rel="stylesheet" type="text/css">
    <script href="{{asset('js/sweetalert-dev.js')}}"></script>
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

    <link rel="stylesheet" type="text/css" href="/css/fileponder.css">
</head>

<body style="background-color:#f5f5f5">

<div class="content">
    <div class="title m-b-md">
        Laravel
    </div>

    <input type="file">
</div>



<script src="/js/fileponder.js"></script>
<script>
    FilePond.registerPlugin(
        FilePondPluginImagePreview,
    );

    FilePond.setOptions({
        server: {
            url: '/upload',
            process: {
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            }
        }
    });
    const inputElement = document.querySelector('input[type="file"]');
    const pond = FilePond.create( inputElement );
</script>

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
