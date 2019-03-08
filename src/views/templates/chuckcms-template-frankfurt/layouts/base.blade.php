<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="{{ app()->getLocale() }}">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>@yield('title')</title>
        
    @yield('meta')

    @if(array_key_exists('raw', $template->fonts))
    <link href="https://fonts.googleapis.com/css?family={{ $template->fonts['raw'] }}" rel="stylesheet" type="text/css" />
    @endif
    @foreach($template->css as $cssKey => $cssValue)
        @if($cssValue['asset'] == 'true')
            <link rel="stylesheet" href="{{ asset($cssValue['href']) }}" type="text/css" />
        @endif
        @if($cssValue['asset'] == 'false')
            <link rel="stylesheet" href="{{ $cssValue['href'] }}" type="text/css" />
        @endif
    @endforeach

    @yield('css')


</head>

<body class="color-custom style-simple button-default layout-full-width if-border-hide no-content-padding header-classic minimalist-header-no sticky-header sticky-tb-color ab-hide subheader-both-center menu-line-below-80 menuo-right menuo-no-borders mobile-tb-center mobile-side-slide mobile-mini-mr-ll tablet-sticky mobile-header-mini mobile-sticky be-reg-20959">
    <div id="Wrapper">
        <div id="Header_wrapper">
            
            @include($template->hintpath.'::templates.' . $template->slug . '.includes.header')
        </div>

        @yield('content')

        
        @include($template->hintpath.'::templates.' . $template->slug . '.includes.footer')
    </div>

    <!-- side menu -->
    <div id="Side_slide" class="right light" data-width="250">
        <div class="close-wrapper">
            <a href="#" class="close"><i class="icon-cancel-fine"></i></a>
        </div>
        <div class="menu_wrapper"></div>
    </div>
    <div id="body_overlay"></div>


<!-- JS -->
@foreach($template->js as $jsKey => $jsValue)
@if($jsValue['asset'] == 'true')
<script src="{{ asset($jsValue['href']) }}"></script>
@endif
@if($jsValue['asset'] == 'false')
<script src="{{ $jsValue['href'] }}"></script>
@endif
@endforeach

<script type="text/javascript">
    var path = window.location.pathname.split('/');
    path = path[path.length-1];
    if (path !== undefined) {
      jQuery("ul#menu-menu")
        .find("a[href$='" + path + "']") // gets all links that match the href
        .parents('li')  // gets all list items that are ancestors of the link
        .addClass('current-menu-item');
    }
    if (window.location =='{{ ChuckSite::getSite('domain') }}'){
        jQuery("ul#menu-menu")
        .find('li').first() // get first list item
        .addClass('current-menu-item');
    }

    (function(jQuery){
        jQuery(document).ready(function(){
            jQuery('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
                event.preventDefault(); 
                event.stopPropagation(); 
                jQuery(this).parent().siblings().removeClass('open');
                jQuery(this).parent().toggleClass('open');
            });
        });
    })(jQuery);
</script>

@yield('scripts')

<script>
var revapi1, tpj;
  ( function() {
      if (!/loaded|interactive|complete/.test(document.readyState))
          document.addEventListener("DOMContentLoaded", onLoad);
      else
          onLoad();
      function onLoad() {
          if (tpj === undefined) {
              tpj = jQuery;
              if ("off" == "on")
                  tpj.noConflict();
          }
          if (tpj("#rev_slider_1_1").revolution == undefined) {
              revslider_showDoubleJqueryError("#rev_slider_1_1");
          } else {
              revapi1 = tpj("#rev_slider_1_1").show().revolution({
                  sliderType : "standard",
                  sliderLayout : "auto",
                  dottedOverlay : "none",
                  delay : 9000,
                  navigation : {
                      keyboardNavigation : "off",
                      keyboard_direction : "horizontal",
                      mouseScrollNavigation : "off",
                      mouseScrollReverse : "default",
                      onHoverStop : "off",
                      bullets : {
                          enable : true,
                          hide_onmobile : false,
                          style : "hesperiden",
                          hide_onleave : false,
                          direction : "vertical",
                          h_align : "right",
                          v_align : "center",
                          h_offset : 30,
                          v_offset : 0,
                          space : 10,
                          tmp : ''
                      }
                  },
                  visibilityLevels : [1240, 1024, 778, 480],
                  gridwidth : 1080,
                  gridheight : 750,
                  lazyType : "none",
                  shadow : 0,
                  spinner : "spinner0",
                  stopLoop : "off",
                  stopAfterLoops : -1,
                  stopAtSlide : -1,
                  shuffle : "off",
                  autoHeight : "off",
                  disableProgressBar : "on",
                  hideThumbsOnMobile : "off",
                  hideSliderAtLimit : 0,
                  hideCaptionAtLimit : 0,
                  hideAllCaptionAtLilmit : 0,
                  debugMode : false,
                  fallbacks : {
                      simplifyAll : "off",
                      nextSlideOnWindowFocus : "off",
                      disableFocusListener : false,
                  }
              });
          };
      };
}());
</script>

<!-- Global Site Tag (gtag.js) - Google Analytics -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-85594949-1"></script> -->
<script>
  // window.dataLayer = window.dataLayer || [];
  // function gtag(){dataLayer.push(arguments)};
  // gtag('js', new Date());

  // gtag('config', 'UA-85594949-1');
</script>


</body>

</html>