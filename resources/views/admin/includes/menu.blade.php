<!-- main menu-->
<div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
    <!-- main menu header-->

    <!-- / main menu header-->
    <!-- main menu content-->
    <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">

            <li class=" nav-item"><a href="{{asset('admin')}}"><i class="icon-home"></i><span data-i18n="nav.form_layouts.form_layout_basic" class="menu-title">خانه</span></a></li>


            <li class=" nav-item"><a href="#"><i class="icon-eye"></i><span data-i18n="nav.content.main" class="menu-title">محتوای سایت</span></a>
                <ul class="menu-content">
                    {{--<li><a href="{{asset('admin/show-users')}}" data-i18n="nav.content.content_grid" class="menu-item">کاربران</a></li>--}}
                    <li><a href="{{route('admin.getUsers')}}" data-i18n="nav.content.content_typography" class="menu-item">کاربران</a></li>
                    <li><a href="{{route('admin.getArticles')}}" data-i18n="nav.content.content_typography" class="menu-item">مقاله ها</a></li>
                    <li><a href="{{route('admin.getCategory')}}" data-i18n="nav.content.content_typography" class="menu-item">دسته ها</a></li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="icon-pencil"></i><span data-i18n="nav.content.main" class="menu-title">ویرایش محتوا</span></a>
                <ul class="menu-content">
                    <li><a href="{{asset('admin/edit-article')}}" data-i18n="nav.content.content_typography" class="menu-item">ویرایش مقاله ها</a></li>
                    <li><a href="{{asset('admin/add-article')}}" data-i18n="nav.content.content_typography" class="menu-item">افزودن مقاله</a></li>
                </ul>
            </li>
            <li class=" nav-item"><a href="{{route('show.sells')}}"><i class="icon-paper"></i><span data-i18n="nav.form_layouts.form_layout_basic" class="menu-title">فروش ها</span></a></li>
        </ul>
    </div>
    <!-- /main menu content-->
    <!-- main menu footer-->
    <!-- include includes/menu-footer-->
    <!-- main menu footer-->
</div>
<!-- / main menu-->