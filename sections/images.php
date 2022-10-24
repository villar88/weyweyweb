<section id="images" class="section dark">
    <div class="container">
        <div class="icon-wrap"><span class="icon icon-active icon-multimedia-16"></span></div>
        <h3>Pictures</h3>
        <?php
        $sImagesDir = '/assets/img/event-images';
        $aFolders = scandir($_SERVER['DOCUMENT_ROOT'] . $sImagesDir);
        unset($aFolders[0]);
        unset($aFolders[1]);

        echo "<div class='row'>";
        $bFirstime = true;
        foreach ($aFolders AS $oFolder) {
            if (!is_dir($_SERVER['DOCUMENT_ROOT'] . $oFolder)) {
                ?>
                <div class='col-lg-4 col-md-4 col-sm-4 col-xs-12'>
                    <div class='image-group <?= ($bFirstime ? ' ' : ' ') ?>' data-group='<?= $oFolder?>'>
                        <?php
                                if($bFirstime){
                                    $bFirstime = false;
                                }
                                $sFolderName = substr(str_replace('_', " ",$oFolder ),1);
                                echo $sFolderName;
                            ?>
                    </div>
                </div>
            <?php
            }
        }
        echo "</div>";

        //------------------------
        // Show the folders groups
        echo "<div class='images-loader'>";
        echo '<br /><div class="hide-soft loading"><img src="assets/img/preloader.gif" alt="preloader"></div>';
        echo "</div>";
        // End show the folders groups
        //----------------------------


        ?>
    </div>
    <div class="load-more more hide-soft">
        Show more images
    </div>
</section>

<?php
if (!isset($oJavascript)) {
    $oJavascript = new stdClass();
}
ob_start();
?>
    <script>
        // Fancy box
        $(".fancybox-images").attr('rel', 'gallery').fancybox({
            beforeShow: function() {

                // Add buttons
                this.title +=
                    '<a href="http://twitter.com/intent/tweet?url=http://<?= $_SERVER["HTTP_HOST"] ?>%23images&text=Have a look to the pictures from @J_onthebeach" target="_blank" class="twitter-share-button social" data-count="none"><span class="fa fa-2x fa-twitter"></span></a> ';
                this.title += '<a href="http://www.facebook.com/sharer/sharer.php?u=http://<?= $_SERVER["HTTP_HOST"] ?>%23images" target="_blank" class="share-btn facebook social"><i class="fa fa-2x fa-facebook"></i></a>';
                this.title +=
                    '<a href="http://www.linkedin.com/shareArticle?url=http://<?= $_SERVER["HTTP_HOST"] ?>%23images&title=Jonthebeach Pictures&summary=Have a look to the pictures from @J_onthebeach" target="_blank" class="share-btn linkedin social"><i class="fa fa-2x fa-linkedin"></i></a>';

                this.title += '<a style="float:right" href="' + this.href + '" download="Jothebeach">Download</a>';

            },
            afterShow: function() {
                // Render tweet button
                twttr.widgets.load();
            },
            helpers: {
                title: {
                    type: 'inside'
                }, //<-- add a comma to separate the following option
                buttons: {} //<-- add this for buttons
            },
            closeBtn: true, // you will use the buttons now
            arrows: true
        });

        var callbacks = $.Callbacks();

        // Load images on demand
        $('.image-group').click(function() {
            if (!$('.image-group-container').length) {
                $('.images-loader').children('.loading').show();
                console.log($('.image-group-container').children('.loading'));
                $('.images-loader').load('/sections/ajax/images-ajax.php', (function() {
                    $(this).children('.loading').hide();
                    $('.image-group').removeClass('active');
                    $(this).addClass('active');
                    $('.image-group-container').hide();
                    $('.image-group-container.' + $(this).data('group')).show();
                }).bind(this));

                $('.load-more').show();
            } else {
                $('.image-group').removeClass('active');
                $(this).addClass('active');
                $('.image-group-container').hide();
                $('.image-group-container.' + $(this).data('group')).show();
            }
        });


        // Load more
        $('#images .load-more').click(function() {
            var arrowMore = 'Show more images';
            var arrowLess = 'Show less images';

            if ($(this).hasClass('more')) {
                $('#images').css({
                    'max-height': 'inherit'
                });
                $('#images .load-more').html(arrowLess);
            } else {
                $('#images').css({
                    'max-height': '1000px'
                });
                $('#images .load-more').html(arrowMore);
                $('html, body').animate({
                    scrollTop: $('#images').offset().top
                }, 0);
            }
            $(this).toggleClass('more');
        });


        // Check if tehy are looking for any image
    </script>
    <?php
$oJavascript->js[] = ob_get_clean();
?>
