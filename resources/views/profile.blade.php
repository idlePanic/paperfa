
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
@include('includes.navbar')
<!-- banner -->
<div class="">
    <div class="hidden-sm hidden-xs col-lg-2 col-md-2  ">
        <div class="" style="background-color:#f5f5f5">
            @include('includes.cat-list')
        </div>
    </div>
    <div class="col-lg-7 col-md-7 col-sm-10 col-xs-11">
        <br>
        <div class="row justify-content-center">
            <div class="panel panel-info">
                <div class="panel-heading panel-info">مشخصات</div>
                <div class="panel-body ">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <img src="/images/avatars/{{$user->avatar}}" style="width: 150px;height: 150px;float: left;border-radius: 50%;margin-right: 25px">
                        <h3> {{$user->name}}</h3>
                        <form enctype="multipart/form-data" action="/profile" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <br>
                            <input class="pull-left" type="file" name="avatar">
                            <span class="input-group-btn">
                            <button type="submit" class="btn btn-primary m-0 btn-xs pull-left">تعویض پروفایل</button>
                        </span>

                        </form>
                </div>
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
        $().UItoTop({ easingType: 'easeOutQuart' });
    });
</script>
<!-- //here ends scrolling icon -->
<script type='text/javascript' src="{{asset('js/jquery.mycart.js')}}"></script>
<script type="text/javascript">
    $(function () {

        var goToCartIcon = function ($addTocartBtn) {
            var $cartIcon = $(".my-cart-icon");
            var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({ "position": "fixed", "z-index": "999" });
            $addTocartBtn.prepend($image);
            var position = $cartIcon.position();
            $image.animate({

            }, 500, "linear", function () {
                $image.remove();
            });
        }

        $('.my-cart-btn').myCart({
            classCartIcon: 'my-cart-icon',
            classCartBadge: 'my-cart-badge',
            affixCartIcon: true,
            checkoutCart: function (products) {
                $.each(products, function () {
                    console.log(this);
                });
            },
            clickOnAddToCart: function ($addTocart) {
                goToCartIcon($addTocart);
            },
            getDiscountPrice: function (products) {
                var total = 0;
                $.each(products, function () {
                    total += this.quantity * this.price;
                });
                return total * 1;
            }
        });

    });
</script>
</body>
</html>
