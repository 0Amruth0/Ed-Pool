<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Music Player</title>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'><link rel="stylesheet" href="audio-css.css">

</head>
<body>
<div id="app-cover">
  <div id="bg-artwork"></div>
  <div id="bg-layer"></div>
  <div id="player">
    <div id="player-track">
      <div id="track-name"></div>
      <div id="track-time">
        <div id="current-time"></div>
        <div id="track-length"></div>
      </div>
      <div id="s-area">
        <div id="ins-time"></div>
        <div id="s-hover"></div>
        <div id="seek-bar"></div>
      </div>
    </div>
    <div id="player-content">
      <div id="album-art">
        <img src="https://raw.githubusercontent.com/himalayasingh/music-player-1/master/img/_1.jpg" class="active" id="_1">
        <img src="https://raw.githubusercontent.com/himalayasingh/music-player-1/master/img/_2.jpg" id="_2">
        <img src="https://raw.githubusercontent.com/himalayasingh/music-player-1/master/img/_3.jpg" id="_3">
        <img src="https://raw.githubusercontent.com/himalayasingh/music-player-1/master/img/_4.jpg" id="_4">
        <img src="https://raw.githubusercontent.com/himalayasingh/music-player-1/master/img/_5.jpg" id="_5">
        <img src="https://i.ytimg.com/vi/z_-iE4FnamA/maxresdefault.jpg" id="_6">
        <img src="https://www.bleepstatic.com/content/hl-images/2022/05/12/eternity-network-cloud.jpg" id="_7">
        <img src="https://eartheclipse.com/wp-content/uploads/2017/05/clouds-cloudy-conifers-dawn-valley.jpg" id="_8">
        <div id="buffer-box">Buffering ...</div>
      </div>
      <div id="player-controls">
        <div class="control">
          <div class="button" id="play-previous">
            <i class="fas fa-backward"></i>
          </div>
        </div>
        <div class="control">
          <div class="button" id="play-pause-button">
            <i class="fas fa-play"></i>
          </div>
        </div>
        <div class="control">
          <div class="button" id="play-next">
            <i class="fas fa-forward"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script><script  src="audio.js"></script>

</body>
</html>
