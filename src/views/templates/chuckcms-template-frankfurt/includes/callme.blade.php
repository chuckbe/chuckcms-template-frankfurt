<div class="section mcb-section no-margin-v" style="padding-top:125px; padding-bottom:125px; background-image:url({{ asset('chuckbe/chuckcms-template-frankfurt/images/cfh-footer-01.jpg') }}); background-repeat:no-repeat; background-position:center">
    <div class="section_wrapper mcb-section-inner">
        <div class="wrap mcb-wrap two-fifth valign-top clearfix" style="padding:30px 2% 0 30px; background-image:url({{ asset('chuckbe/chuckcms-template-frankfurt/images/contact-logo.png') }}); background-repeat:no-repeat; background-position:left top;background-size:80px">
            <div class="mcb-wrap-inner">
                <div class="column mcb-column one column_column">
                    <div class="column_attr clearfix">
                        <h4>Laat je gegevens 
                            <br> achter en we bellen je
                            <br> binnen 5 minuten op</h4>
                        <hr class="no_line" style="margin:0 auto 20px">
                        <p>
                            Heb je een korte vraag? Heb je liever een telefoontje dan een mailtje? Laat ons je opbellen!
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap mcb-wrap one-third valign-top clearfix" style="padding:35px 35px 15px 35px; background-color:#ed8c0c">
            <div class="mcb-wrap-inner">
                <div class="column mcb-column one column_column">
                    <div class="column_attr clearfix">

                        <form id="newsletterform">
                            <div class="column one">
                                <span>
                            <input type="text" id="name_news" name="name_news" size="40" aria-required="true" aria-invalid="false" placeholder="Naam en voornaam" />
                        </span>
                            </div>
                            <div class="column one">
                                <span>
                            <input type="email" id="email_news" name="email_news" size="40" aria-required="true" aria-invalid="false" placeholder="E-mail" />
                        </span>
                            </div>
                            <div class="column one">
                                <span>
                            <input type="text" id="phone_news" name="phone_news" size="40" aria-required="true" aria-invalid="false" placeholder="Telefoon" />
                        </span>
                            </div>
                            <div class="column one">
                                <input type="button" value="Laat je opbellen" id="submit" onClick="return check_values_news();">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>