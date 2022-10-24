<section id="newsletter" class="section light">
    <div class="overlay"></div>
    <div class="container">
        <article class="article-big animated hiding" data-animation="fadeInDown" data-delay="0">
            <h5>Call for Papers</h5>
            <h5><span class="highlight">Our Call for Papers is now closed!</span>
                <h6>The candidates selected will be added to our panel of speakers </h6>
                <form id="subscribe" class="form" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="form-group form-inline">
                        <input type="email" class="form-control required" id="NewsletterEmail" name="NewsletterEmail" placeholder="info@jonthebeach.com" />
                        <input type="submit" class="btn btn-xs btn-default" value="Submit" />
                        <span id="response">
                            <? require_once('assets/mailchimp/inc/store-address.php'); if($_GET['submit']){ echo storeAddress(); } ?>
                        </span>
                    </div>

                </form>
        </article>
    </div>
</section>