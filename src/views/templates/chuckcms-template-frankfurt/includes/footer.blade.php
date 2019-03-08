<footer id="Footer" class="clearfix">
    <div class="widgets_wrapper" style="padding:70px 0">
        <div class="container">
            <div class="column one-fourth">
                <aside class="widget_text widget widget_custom_html">
                    <div class="textwidget custom-html-widget">
                        <h5> {{ ChuckSite::getSite('name') }}</h5>
                        <hr class="no_line" style="margin:0 auto 5px">
                        <p>
                            Onafhankelijk verzekeringsmakelaar dat garant staat voor een correcte premie, waarborg en een warm contact.
                        </p>
                        <hr class="no_line" style="margin:0 auto 10px">
                        <a href="{{ URL::to('/over-ons') }}">Over Ons</a>
                    </div>
                </aside>
            </div>
            <div class="column one-fourth">
                <aside class="widget_text widget widget_custom_html">
                    <div class="textwidget custom-html-widget">
                        <h5> Contacteer ons</h5>
                        <hr class="no_line" style="margin:0 auto 5px">
                        <p>
                            Nullam viverra consectetuer quisque cursus et, porttitor risus.
                        </p>
                        <hr class="no_line" style="margin:0 auto 5px"> +32 (0) 478 98 76 54
                        <br>
                        <a href="#">info@cfh-verzekeringen.be</a>
                    </div>
                </aside>
            </div>
            <div class="column one-fourth">
                <aside class="widget_text widget widget_custom_html">
                    <div class="textwidget custom-html-widget">
                        <h5> Adres</h5>
                        <hr class="no_line" style="margin:0 auto 5px"> CFH Verzekeringen
                        <br> BE0555.555.555
                        <br> Straatnaam 38,
                        <br> 2500 Lier
                    </div>
                </aside>
            </div>
            <div class="column one-fourth">
                <aside class="widget widget_media_image">
                    <img src="{{ asset('chuckbe/chuckcms-template-frankfurt/images/footer-logo.png') }}" class="image" style="max-width: 100%; height: auto">
                </aside>
            </div>
        </div>
    </div>
    <div class="footer_copy">
        <div class="container">
            <div class="column one">
                <a id="back_to_top" class="button button_js" href="#"><i class="icon-up-open-big"></i></a>
                <div class="copyright">
                    &copy; {{ date('Y') }} ChuckCMS Frankfurt - Chuck. All Rights Reserved. <a target="_blank" rel="nofollow" href="https://chuck.be/">Chuck.be</a>
                </div>
            </div>
        </div>
    </div>
</footer>