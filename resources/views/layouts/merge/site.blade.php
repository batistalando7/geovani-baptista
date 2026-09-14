@include('layouts._includes.site.header')
@include('layouts._includes.site.menu')
<!-- curtain -->
<div class="mil-curtain"></div>
<!-- curtain end -->

<!-- frame -->
<div class="mil-frame">
    <div class="mil-frame-top">
        <a href="index.html" class="mil-logo">G.B.</a>
        <div class="mil-menu-btn">
            <span></span>
        </div>
    </div>
    <div class="mil-frame-bottom">
        <div class="mil-current-page"></div>
        <div class="mil-back-to-top">
            <a href="#top" class="mil-link mil-dark mil-arrow-place">
                <span>Back to top</span>
            </a>
        </div>
    </div>
</div>
<!-- frame end -->
@yield('content')
@include('layouts._includes.site.footer')
