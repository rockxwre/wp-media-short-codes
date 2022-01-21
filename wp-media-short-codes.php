<?php

/*
Plugin Name: Media short-codes
Version:     1.0
Description: Short codes to embed Odysee, Podbean, SoundCloud and YouTube media.
Author:      Ramon Rockx
Author URI:  mailto:ramonrockx@gmail.com
License:     GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wp-media-short-codes
*/

function media_short_codes_init()
{

   function embed_odysee($atts) {
      if (!array_key_exists('media_url', $atts)) {
         return "";
      }
      $media_url = $atts['media_url'];
      $width = $atts['width'] ?: '560';
      $height = $atts['height'] ?: '315';
      $html = <<<HTML
      <div class="media-embed media-embed-odysee">
         <iframe id="odysee-iframe" width="$width" height="$height" src="$media_url" allowfullscreen></iframe>
      </div>
      HTML;
      return $html;
   }

   function embed_podbean($atts)
   {
      if (!array_key_exists('media_url', $atts)) {
         return "";
      }
      $media_url = $atts['media_url'];
      $title = $atts['title'] ?: 'No title';
      $width = $atts['width'] ?: '150';
      $height = $atts['height'] ?: '100%';
      $html = <<<HTML
      <div class="media-embed media-embed-podbean">
         <iframe title="$title" allowtransparency="true" height="$height" width="$width" style="border: none; min-width: min(100%, 430px);" scrolling="no" data-name="pb-iframe-player" src="$media_url"></iframe>
      </div>
      HTML;
      return $html;
   }

   function embed_soundcloud($atts) {
      if (!array_key_exists('media_url', $atts)) {
         return "";
      }
      $media_url = $atts['media_url'];
      $url = $atts['url'];
      $account_url = $atts['account_url'];
      $account_title = $atts['account_title'];
      $title = $atts['title'] ?: 'No title';
      $width = $atts['width'] ?: '100%';
      $height = $atts['height'] ?: '166';
      $html = <<<HTML
      <div class="media-embed media-embed-soundcloud">
         <iframe width="$width" height="$height" scrolling="no" frameborder="no" allow="autoplay" src="$media_url"></iframe>
         <div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;">
            <a href="$account_url" title="$account_title" target="_blank"
               style="color: #cccccc; text-decoration: none;">$account_title</a> · <a href="$url" title="$title" target="_blank" style="color: #cccccc; text-decoration: none;">$title</a>
         </div>
      </div>
      HTML;
      return $html;
   }

   function embed_youtube($atts) {
      if (!array_key_exists('media_url', $atts)) {
         return "";
      }
      $media_url = $atts['media_url'];
      $width = $atts['width'] ?: '560';
      $height = $atts['height'] ?: '315';
      $html = <<<HTML
      <div class="media-embed media-embed-youtube">
         <iframe width="$width" height="$height" src="$media_url" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      HTML;
      return $html;
   }
   
}

add_shortcode('embed_odysee', 'embed_odysee');
add_shortcode('embed_podbean', 'embed_podbean');
add_shortcode('embed_soundcloud', 'embed_soundcloud');
add_shortcode('embed_youtube', 'embed_youtube');


add_action('init', 'media_short_codes_init');

?>