<?php

/**
 * https://developers.google.com/youtube/v3/docs/
 */
class YoutubeAPI {

    public $API_KEY = 'AIzaSyD3ZRhfBHP-Dv2YYz0wmO8yXC1DyCja2tQ';
    public static $sYoutubeUrl = 'https://www.youtube.com';
    public static $sYoutubeApiUrl = 'https://www.googleapis.com/youtube/v3';

    /**
     * [retreivePlaylistItems description]
     * @param  [type] $iPlaylistId [description]
     * @param  array  $aFilter     [description]
     * @return [type]              [description]
     */
    public function retreiveYoutubeItemsByFilter($sType,$aFilter = array()){
        $sUrlPart = http_build_query($aFilter);
        $oPlaylistItems = file_get_contents(self::$sYoutubeApiUrl . '/' .$sType. '?'.$sUrlPart.'&key=' . $this->API_KEY);
        return $oPlaylistItems;
    }


    /**
     * [getYoutubeVideoUrl description]
     * @param  [type] $iYoutubeVideoId [description]
     * @return [type]                  [description]
     */
    public static function getYoutubeVideoUrl($iYoutubeVideoId){
        $sVideoUrl = self::$sYoutubeUrl . '/watch?v=' . $iYoutubeVideoId;

        return $sVideoUrl;
    }


}
