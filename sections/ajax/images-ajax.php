<?php

//------------------------
// Show the folders groups
$sImagesDir = '/assets/img/event-images';
$aFolders = scandir($_SERVER['DOCUMENT_ROOT'] . $sImagesDir);
unset($aFolders[0]);
unset($aFolders[1]);

$bFirstime = true;
foreach ($aFolders AS $oFolder) {
    if (!is_dir($_SERVER['DOCUMENT_ROOT'] . $oFolder)) {
        echo '<article class="image-group-container ' . str_replace(' ', '', $oFolder) . ' ' . ($bFirstime ? '' : 'hide-soft'). '">';
        if($bFirstime){
            $bFirstime = false;
        }
        $iImagesDirFolder = $sImagesDir . '/' . $oFolder . '/';
        $iImagesDirFolderThumbs = $iImagesDirFolder . 'thumbs/';
        $oFileHandler = opendir($_SERVER['DOCUMENT_ROOT'] . $iImagesDirFolderThumbs);

        $iIndex = 0;
        //-----------------
        // I show the files
        while (($oFile = readdir($oFileHandler)) !== false) {
            if (is_dir($_SERVER['DOCUMENT_ROOT'] . $oFile) || $oFile == '.' ||$oFile == '..') {
                continue;
            }
            if ($iIndex == 0) {
                echo '<div class="row">';
            }
            ?>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <a href="http://<?= $_SERVER["HTTP_HOST"] . (file_exists($_SERVER['DOCUMENT_ROOT'] . $iImagesDirFolder . $oFile) ? ($iImagesDirFolder . $oFile) : ($iImagesDirFolderThumbs . $oFile)) ?>" data-url="<?= $_SERVER["HTTP_HOST"] ?>" class="thumb-wrapper fancybox-images" data-fancybox-group="gallery-fotos-<?=str_replace(' ', '', $oFolder) ?>">
                    <img src="http://<?= $_SERVER["HTTP_HOST"] . $iImagesDirFolderThumbs . $oFile ?>" class="img-responsive" />
                </a>
            </div>
            <?php
            $iIndex ++;
            if ($iIndex == 4) {
                echo '</div>';
                $iIndex = 0;
            }
        }
        // end I show the files
        //-----------------

        if ($iIndex != 0) {
            echo '</div>';
        }
        echo '</article>';
    }
}
// End show the folders groups
//----------------------------

?>
