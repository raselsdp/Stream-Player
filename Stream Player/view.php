<?php include 'header.php'; ?>

<style>
  .vbtn {
    display: block !important;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }
</style>

<script>
  function showPlayButton() {
    document.getElementById('playButton').style.display = 'block';
  }

  function hidePlayButton() {
    document.getElementById('playButton').style.display = 'none';
  }
</script>

<div style="height: 5vh;"></div>

<div class="container">
  <div class="row">
    <div class="s12 m6">
      <div class="card">
        <div class="card-image" onmouseover="showPlayButton()" onmouseout="hidePlayButton()">
          <div class="video-container">
            <img src="https://c4.wallpaperflare.com/wallpaper/600/919/630/digital-art-illustration-lofi-hd-wallpaper-preview.jpg" alt="">
            <button style=" width: 70px; height: 70px; " id="playButton" class="vbtn btn-floating halfway-fab waves-effect waves-light white pulse">
              <i style=" font-size: 3.6rem; line-height: 65px; " class="material-icons red-text">play_arrow</i>
            </button>
          </div>
        </div>
        <div class="card-content light-blue hide-on-small-only">
          Download Video In HD Mp4 Mp3 3Gp FLV Avi Mkv Wmv DVDrip
          <p> 4 minute </p>
        </div>
      </div>
      <br />
      <div class="center">
        <div class="dashed">
          <form method="post">
            <button type="submit" class="btn bordered">Download Audio</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<div style="height: 30vh;"></div>

<?php include 'footer.php'; ?>




