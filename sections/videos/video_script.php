<?php
    set_time_limit(0);
    include($_SERVER['DOCUMENT_ROOT'] . '/sections/videos/simple_html_dom.php');
    $sMicrosoftBase = 'https://channel9.msdn.com';
    $sMicrosoftURL['Day_1'] = $sMicrosoftBase . '/Events/Microsoft-Spain-Events/J-on-the-Beach?sort=sequential&direction=desc&term=&d=1#theSessions';
    $sMicrosoftURL['Day_2'] = $sMicrosoftBase . '/Events/Microsoft-Spain-Events/J-on-the-Beach?sort=sequential&direction=desc&term=&d=2#theSessions';

    $aFields = array();
    foreach($sMicrosoftURL AS $iDay => $sMicrosoft){
        // Retrieve the DOM from a given URL
        $oWeb = file_get_html($sMicrosoft);
        $oFile = fopen($_SERVER['DOCUMENT_ROOT'] . '/sections/videos/videos.csv','w');

        // Find all "A" tags and print their HREFs
        foreach($oWeb->find('.entries li .entry-image a') AS  $iIndex => $container){ 
            $sLink = $sMicrosoftBase . $container->href;
            $sTitle = $container->find('img')[0]->alt;
            $oSubWeb = file_get_html($sMicrosoftBase . $container->href);
            $style = ($oSubWeb->find('a.video')[0]->style);
            preg_match("'background-image:url\((.*?)\);'", $style, $match);
            $sBgImage = $match[1];


            $aFields[$iDay][$iIndex][0] = $sBgImage;
            $aFields[$iDay][$iIndex][1] = $sLink;
            $aFields[$iDay][$iIndex][2] = $sTitle;
            $aFields[$iDay][$iIndex][3] = $iDay;
        }
    }
    
    foreach($aFields AS $aDay){
        foreach($aDay AS $aLine){
            fputcsv($oFile, $aLine,';');
        }
    }
?>
