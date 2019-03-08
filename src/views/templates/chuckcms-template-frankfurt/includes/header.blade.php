<header id="Header">
    <div id="Top_bar">
        <div class="container">
            <div class="column one">
                <div class="top_bar_left clearfix">
                    <div class="logo">
                        <a id="logo" href="{{ url('/') }}" title="{{ ChuckSite::getSite('name') }}" data-height="60" data-padding="15">
                            <img class="logo-main scale-with-grid" src="{{ ChuckSite::getSite('domain') . ChuckSite::getSetting('logo.href') }}" data-retina="{{ ChuckSite::getSite('domain') . ChuckSite::getSetting('logo.href') }}" data-height="58" alt="{{ ChuckSite::getSite('name') }}">
                            <img class="logo-sticky scale-with-grid" src="{{ ChuckSite::getSite('domain') . ChuckSite::getSetting('logo.href') }}" data-retina="{{ ChuckSite::getSite('domain') . ChuckSite::getSetting('logo.href') }}" data-height="58" alt="{{ ChuckSite::getSite('name') }}">
                            <img class="logo-mobile scale-with-grid" src="{{ ChuckSite::getSite('domain') . ChuckSite::getSetting('logo.href') }}" data-retina="{{ ChuckSite::getSite('domain') . ChuckSite::getSetting('logo.href') }}" data-height="58" alt="{{ ChuckSite::getSite('name') }}">
                            <img class="logo-mobile-sticky scale-with-grid" src="{{ ChuckSite::getSite('domain') . ChuckSite::getSetting('logo.href') }}" data-retina="{{ ChuckSite::getSite('domain') . ChuckSite::getSetting('logo.href') }}" data-height="58" alt="{{ ChuckSite::getSite('name') }}">
                        </a>
                    </div>
                    <div class="menu_wrapper">
                        <nav id="menu">
                            {!! ChuckMenu::renderFrontEnd('chuckcms-template-frankfurt') !!}
                        </nav>
                        <a class="responsive-menu-toggle" href="#"><i class="icon-menu-fine"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include($template->hintpath.'::templates.' . $template->slug . '.includes.slider')
</header>