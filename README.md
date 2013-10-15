##Embed code

As always, ensure you have uploaded a copy of JW Player and included the script in the <head> of your page, together with your player key. See the Quick Start Guide for more info. Next, place the following embed code at the location you want the player to appear:




for youtube  

  <div id="myElement"></div>
  
  <script>
      jwplayer("myElement").setup({
          file: "http://www.youtube.com/watch?v=ac7KhViaVqc",
          image: "/uploads/myPoster.jpg"
      });
  </script>
  
--------------  

for file mp4  
  
  <div id="myElement"></div>
  
  <script>
    jwplayer("myElement").setup({
        file: "/uploads/myVideo.mp4",
        image: "/uploads/myPoster.jpg"
    });
  </script>
  
  
-----------

for file acc

  <div id="myElement"></div>
  
  <script>
      jwplayer("myElement").setup({
          file: "/uploads/myAudio.aac",
          image: "/uploads/myPoster.jpg"
      });
  </script>


##Configuration Options

There are three options for configuring which media file(s) to load in the player:

`file`
    URL to a single MP4/FLV/WebM video, AAC/MP3/Vorbis audio, YouTube page or HLS/RTMP stream to play. See Supported Media Formats for an overview.

`image`
    URL to a JPG/PNG poster image to display before playback is started. For audio-only media, the poster image stays visible during playback.

`title`
    Title of the media loaded in the player. Is displayed in the middle of the display before playback is started. 


##Layout

These are the options for configuring the layout of the player:

`controls`
    Whether to display the video controls (controlbar, icons and dock). Can be false or true (default).

`skin`
    Which skin to use for styling the player (we call the default Six). Is set to the URL of that skin on your site. If you have purchased JW Player, you can load one of the 8 premium skins off our CDN by simply inserting the skin name (e.g. skin: "bekle" ). See Using JW Player Skins for more info.

`width`
    Width of the player. Defaults to 480 pixels. We recommend setting this to at least 320 pixels, since otherwise certain UI elements may not fit. It can also be set to "100%" to enable Responsive Design, in combination with the aspectratio option.

`aspectratio`
    This option, used to setup JW Player for Responsive Design, is set to the video display aspect ratio, for example "16:9". When the width of the player changes, it then automatically scales its height accordingly. When the aspectratio is set, the height option is ignored.

`height`
    Height of the player in pixels. We recommend setting this to at least 180, so all UI elements will fit. However, it can be set to a small size (e.g. 40) for audio-only playback. Defaults to 270. 

##Playback

And these are the options for configuring the setup and playback behavior:

`autostart`
    Automatically start playing the video on page load. Can be true or false (default). Autostart does not work on mobile devices like iOS and Android.

`fallback`
    Whether to render a nice download link for the video if HTML5 and/or Flash are not supported. Can be true (a fallback is rendered) or false (the original HTML is not touched). Defaults to true.

`mute`
    Whether to have the sound muted on startup or not. Can be false (default) or true.

`primary`
    Which rendering mode to try first for rendering the player. Can be html5 (default) or flash.

`repeat`
    Whether to loop playback of the playlist or not. Can be true (keep playing forever) or false (stop playback when completed). Defaults to false. 

##Other

Some more obscure options are available to tweak the internals of JW Player:

`displaytitle`
    By default, JW Player will display the title of an audio/video file inside the play icon in the middle of the display when set. If you have set a title, but don't want it to display here, set this option to false.

`flashplayer`
    Alternative location from where to load jwplayer.flash.swf. By default, this file is in the same location as jwplayer.js. In certain edge cases though (e.g. CDN-ing the players), you may want to host them separately.

`html5player`
    Alternative location from where to load jwplayer.html5.js. By default, this file is in the same location as jwplayer.js. In certain edge cases though (e.g. CDN-ing the players), you may want to host them separately.

`startparam`
    Querystring parameter for seeking to not-yet-download portions of FLV or MP4 files in Flash mode. Not needed for HTML5 (where this works by default). See Pseudostreaming in Flash for more info.

`stagevideo`
    Set this flag to false to disable GPU-accelerated image compositing in the Flash rendering mode. With some combinations of H264 parameters and GPU cards, we see inconsistent issues with rendering of the video image. Disabling Stage Video fixes this issue.

`stretching`
    How to resize the poster and video to fit the display. Can be none (keep original dimensions), exactfit (stretch disproportionally), uniform (stretch proportionally; black borders) or fill (stretch proportionally; parts cut off). Defaults to uniform. 




