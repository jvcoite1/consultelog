<?php

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

add_theme_support('post-thumbnails');

function get_video_thumb($link) {
  $video_id = explode("?v=", $link);
  $video_id = $video_id[1];
  $thumbnail = "http://img.youtube.com/vi/".$video_id."/hqdefault.jpg"; //sddefault,mqdefault,hqdefault,maxresdefault
  return $thumbnail;
}

?>