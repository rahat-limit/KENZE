<section class="newsletter-wrapper <?php
    if (is_page(9)) {
        echo the_field("show_newsletter", 9);
    } else if (is_page(11)) {
        echo the_field("show_newsletter", 11);
    } else if (is_page(5)) {
        echo the_field("show_newsletter", 5);
    } else {
        ?>
        Yes
        <?php
    }
?>
">
    <div class="container">
        <div class="wrapper">
            <h2>Subscribe to our newsletter and stay updated.</h2>
            <div class="tnp tnp-subscription">
                <form method="post" action="http://localhost/Main/?na=s">
                    <input type="hidden" name="nlang" value="">
                    <div class="tnp-field tnp-field-email">
                        <input class="tnp-email" type="email" name="ne" value="" placeholder="Type Here" required="">
                    </div>
                    <div class="tnp-field tnp-field-button">
                        <input class="tnp-submit" type="submit" value="Subscribe">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>