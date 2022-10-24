<?php include $_SERVER['DOCUMENT_ROOT'] .'/sections/jobs/jobs_header.php' ?>
<?php

function _d($oObject){
    echo "<pre>";
    print_r($oObject);
    echo "</pre>";
}

include $_SERVER['DOCUMENT_ROOT'] . '/sections/videos/YoutubeApi.php';

$oYoutubeApi = new YoutubeApi();

$iPlaylistId = 'PLsMvQeJY1lVQWhN_UOqzgQ5ZrUiBE0hzH';
$iChannelId = 'UC3KyKpIyhLAnIUqcYBo4PFg';

$sType = 'playlists';
$aFilter['part'] = 'snippet';
$aFilter['channelId'] = $iChannelId;
$aFilter['maxResults'] = 50;
$oYoutubePlaylists = json_decode($oYoutubeApi->retreiveYoutubeItemsByFilter($sType,$aFilter));
?>


<section id="videos" class="section light">
    <div class="overlay"></div>
    <div class="container">
        <div class="icon-wrap"><span class="icon icon-active icon-multimedia-26"></span></div>
        <?php
        $aExludedPlaylists[] = 'PLsMvQeJY1lVT09etw6BR8d5PDAci2dFwo';

        // Order the playlists by name
        $aName = array();
        foreach($oYoutubePlaylists->items AS $oYoutubePlaylist){
            $aName[] = $oYoutubePlaylist->snippet->title;
        }
        array_multisort($aName,SORT_ASC,$oYoutubePlaylists->items);

        // If quantity is bigger than 50, I have to fix it adding pagination
        foreach($oYoutubePlaylists->items AS $oYoutubePlaylist){
            // I exclude some playlists
            if(in_array($oYoutubePlaylist->id,$aExludedPlaylists) || strpos($oYoutubePlaylist->snippet->title,'JOTB16') === false){
                continue;
            }

            echo '<h4>'.$oYoutubePlaylist->snippet->title.'</h4>';
            $sType = 'playlistItems';
            $aFilter['part'] = 'snippet';
            $aFilter['playlistId'] = $oYoutubePlaylist->id;
            $aFilter['maxResults'] = 50;
            $oYoutubePlaylistItems = json_decode($oYoutubeApi->retreiveYoutubeItemsByFilter($sType,$aFilter));

            $iIndex = 0;
            foreach($oYoutubePlaylistItems->items AS $oYoutubePlaylistItem){				
                if(trim($oYoutubePlaylistItem->snippet->title) == trim("Private video") || trim($oYoutubePlaylistItem->snippet->title) == trim("Deleted video")){
                    continue;
                }
                if($iIndex == 0){
                    echo '<div class="row">';
                }
                ?>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="video-thumb">
                    <a target="_blank" href="<?= YoutubeApi::getYoutubeVideoUrl($oYoutubePlaylistItem->snippet->resourceId->videoId) ?>">
                        <?php if(isset($oYoutubePlaylistItem->snippet->thumbnails)){
                                    $imgUrl = (isset($oYoutubePlaylistItem->snippet->thumbnails->standard) ? $oYoutubePlaylistItem->snippet->thumbnails->standard->url : $oYoutubePlaylistItem->snippet->thumbnails->high->url);
                                    ?>
                        <img src="<?= $imgUrl ?>" alt="<?= $oYoutubePlaylistItem->snippet->title ?>" />
                        <?php } ?>
                        <footer>
                            <p>
                                <?= $oYoutubePlaylistItem->snippet->title ?>
                            </p>
                        </footer>
                    </a>
                </div>
            </div>
            <?php
                    if($iIndex == 3){
                        $iIndex = 0;
                        echo '</div>';
                    }else{
                        $iIndex++;
                    }
            }
            if($iIndex != 0){
                echo '</div>';
            }
        }

    ?>
    </div>
    <div class="load-more more hide-soft" style="display: none;">
        Show more videos
    </div>
</section>

<?php
    if (!isset($oJavascript)) {
        $oJavascript = new stdClass();
    }
    ob_start();
?>


<!-- Scripts para resize videos -->
<script>
    function resizeVideos() {
        if ($(window).width() > 767) {
            $('.video-thumb').each(function() {
                $(this).css('min-height', $(this).closest('.row').height());
            });
        }
    }

    $(window).load(function() {
        resizeVideos();
    })

    $(window).resize(function() {
        resizeVideos();
    })

    $('#videos .load-more').click(function(){
        var arrowMore = 'Show more videos';
        var arrowLess = 'Show less videos';

        if ($(this).hasClass('more')) {
            $('#videos').css({
                'max-height': 'inherit'
            });
            $('#videos .load-more').html(arrowLess);
        } else {
            $('#videos').css({
                'max-height': '1000px'
            });
            $('#videos .load-more').html(arrowMore);
            $('html, body').animate({
                scrollTop: $('#videos').offset().top
            }, 0);
        }
        $(this).toggleClass('more');
    });
</script>

<?php $oJavascript->js[] = ob_get_clean(); ?>
<?php include $_SERVER['DOCUMENT_ROOT'] .'/sections/jobs/jobs_footer.php'; ?>
