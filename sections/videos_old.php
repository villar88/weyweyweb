<?php
// Script para cargar los videos. Ejecutar solo una vez
//include($_SERVER['DOCUMENT_ROOT'] . '/sections/videos/video_script.php');


    if (($oFile = fopen($_SERVER['DOCUMENT_ROOT'] . '/sections/videos/videos.csv', 'r')) !== FALSE) {
        while (($aRow = fgetcsv($oFile, 1000, ";")) !== FALSE) {
            $aData[$aRow[3]][] = $aRow;
        }
        fclose($oFile);
    }

?>
<style>
    #videos .row{
        margin-bottom: 25px;
    }
    #videos .video-thumb{
        background: #fff;
        display:block;
    }    
    #videos .video-thumb img{
        width: 100%;
    }
    #videos .video-thumb footer p{
        padding: 5px 10px;
        box-sizing: border-box;
        margin-bottom: 0;
    }
    
    @media screen and (max-width: 767px){
        #videos .video-thumb{
           margin: 0 25px 25px 25px; 
        }
    }
</style>
<section id="videos" class="section light">
    <div class="overlay"></div>
    <div class="container">
        <div class="icon-wrap"><span class="icon icon-active icon-multimedia-26"></span></div>
        <h3>Videos Biznaga Hall</h3>
        <h5 class="color-orange">
            <?php
                foreach($aData AS $iDay => $aDay){ ?>
                <div class="row">
                    <h4><?= str_replace('_',' ', $iDay) ?></h4>
                    
                    <?php 
                    $iIndex = 0;
                    foreach($aDay AS $aTalk){
                        if($iIndex == 0){
                            echo '<div class="row">';
                        }
                    ?>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="video-thumb">
                                <a target="_blank" href="<?= $aTalk[1] ?>">
                                    <img src="<?= $aTalk[0] ?>" alt="<?= $aTalk[2] ?>" />
                                    <footer >
                                        <p><?= $aTalk[2] ?></p>
                                    </footer>
                                </a>
                            </div>
                        </div>
                    <?php 
                        if($iIndex == 2){
                            $iIndex = 0;
                            echo '</div>';
                        }else{
                            $iIndex++;
                        }
                    } 
                if($iIndex != 0){
                    echo '</div>';
                }    
                ?>
                </div>  
            <?php } ?>
        </h5>
    </div>
</section>

<?php
if (!isset($oJavascript)) {
    $oJavascript = new stdClass();
}

ob_start();
?>
<script>
    function resizeVideos(){
        if($(window).width() > 767){
            $('.video-thumb').each(function(){
                $(this).css('min-height',$(this).closest('.row').height());
            });
        }
    }
    
    $(window).load(function(){
        resizeVideos();
    })
    
    $(window).resize(function(){
        resizeVideos();
    })
</script>

<?php
$oJavascript->js[] = ob_get_clean();
?>
