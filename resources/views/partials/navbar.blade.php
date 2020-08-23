<nav role="navigation" aria-label="main navigation">
    <div class="d-flex flex-row align-items-center py-2">
        <a class="d-inline" style="max-width:72px;max-height:72px;width:72px;height:72px;" href="{{ home_url('/') }}"><img style="max-width:72px;max-height:72px;width:72px;height:72px;" src="http://localhost/tompepper-site/wp-content/uploads/2020/08/logo.png"></a>
        <div class="py-4 d-inline align-items-center ">
            @if (has_nav_menu('primary_navigation'))
                {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'sage-menu']) !!}
            @endif
        </div>
    </div>
</nav>
