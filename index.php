<?php
// session_start();

    include("connection.php");
    include("functions.php");

    // $logged_in_user = get_user_by_id($user_data['id']);
    // $user_data = get_user_by_id($con);

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>Yin Music</title>
  <link rel="icon" href="favicon.ico" mce_href="favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="favicon.ico" mce_href="http://jt.hapboy.xyz/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="assets/css/reset.css">
  <link rel="stylesheet" href="assets/css/common.css">
  <link rel="stylesheet" href="assets/css/slider.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
</head>
<body>

<header>
  <div class="container">
    <div class="navbar-header">
      <a href="" class="navbar-brand">
        <img src="assets/images/logo.png" alt="">
      </a>
    </div>
    <nav>
      <ul class="nav navbar-nav navbar-link">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="category/chinese">Chinese</a></li>
        <li><a href="category/japanese">Japanese</a></li>
        <li><a href="category/korean">Korean</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right navbar-sm">
        <li><input type="search" class="search-input" placeholder="Song / Singer"></li>
        <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
        <li><a href="signup.php">Login/Signup</a></li>
      </ul>
    </nav>
  </div>
</header>

<!-- Carousel -->
<div class="container-sm slider-wrap">
  <div class="slider">
    <div class="slider-item-list"></div>
    <div class="slider-dots">
      <div class="slider-dots-wrap"></div>
    </div>
    <div class="slider-arrows">
      <div class="slider-arrows-wrap">
        <span class="slider-arrow slider-arrow-left" onclick="HBSlider.turn(-1)"></span>
        <span class="slider-arrow slider-arrow-right" onclick="HBSlider.turn(1)"></span>
      </div>
    </div>
  </div>
</div>

<!-- main content area -->
<div class="container-sm box">
  <!-- main content -->
  <div class="main">
    <div class="main-wrap">
      <div class="content-box">
        <!-- popular recommendation -->
        <div class="hot-recommand">
          <div class="content-header">
            <h2><i class="fa fa-music red"></i>Recommendation</h2>
          </div>

          <ul class="music-list clearfix">
            <li>
              <div class="u-cover">
                  <img src="./assets/images/01.jpg">
                  <a title="Ai wo komete Umi - Aoi Teshima" href="./music/japan1.html" class="msk"></a>
                </div>
                <p class="dec">
                  <a title="Ai wo komete Umi - Aoi Teshima" href="./music/japan1.html">愛を込めて海(Ai wo komete Umi)</a>
                </p>
              <div class="author">Aoi Teshima</div>
            </li>
            
            <li>
                <div class="u-cover">
                  <img src="./assets/images/2.jpg">
                  <a title="十年人间 - 盗墓笔记" href="./music/chinese4.html" class="msk"></a>
                </div>
                <p class="dec">
                  <a title="十年人间 - 盗墓笔记" href="./music/chinese4.html">十年人间</a>
              </p>
              <div class="author">盗墓笔记</div>
            </li>
            <li>
              <div class="u-cover">
                  <img src="./assets/images/03.jpg">
                  <a title="다시 너를 - 김나영" href="./music/kpop3.html" class="msk"></a>
                </div>
                <p class="dec">
                  <a title="다시 너를 - 김나영" href="./music/kpop3.html">다시 너를(Once Again)</a>
                </p>
              <div class="author">김나영</div>
            </li>
            <li>
              <div class="u-cover">
                  <img src="./assets/images/04.jpg">
                  <a title="Sayonara no natsu - Aoi Teshima" href="./music/japan2.html" class="msk"></a>
                </div>
                <p class="dec">
                  <a title="Sayonara no natsu - Aoi Teshima" href="./music/japan2.html">さよならの夏(Sayonara no natsu)</a>
                </p>
              <div class="author">Aoi Teshima</div>
            </li>
            <li>
              <div class="u-cover">
                  <img src="./assets/images/05.jpg">
                  <a title="มองนานๆ - FLI:P" href="./music/t1.html" class="msk"></a>
                </div>
                <p class="dec">
                  <a title="มองนานๆ - FLI:P" href="./music/t1.html"> มองนานๆ (Mong Nan Nan) </a>
                </p>
              <div class="author">FLI:P</div>
            </li>
            <li>
              <div class="u-cover">
                  <img src="./assets/images/06.jpg">
                  <a title="Mirror Mirror - F.Hero, Milli, Chang Bin (Stray Kids)" href="./music/t2.html" class="msk"></a>
                </div>
                <p class="dec">
                  <a title="Mirror Mirror - F.Hero, Milli, Chang Bin (Stray Kids)" href="./music/t2.html">Mirror Mirror</a>
                </p>
              <div class="author"> F.Hero, Milli, Chang Bin (Stray Kids)</div>
            </li>
            <li>
              <div class="u-cover">
                  <img src="./assets/images/07.jpg">
                  <a title="I will go to you like the first snow - Ailee" href="./music/kpop4.html" class="msk"></a>
                </div>
                <p class="dec">
                  <a title="I will go to you like the first snow - Ailee" href="./music/kpop4.html">I will go to you like the first snow</a>
                </p>
              <div class="author">Ailee</div>
            </li>
            <li>
              <div class="u-cover">
                  <img src="./assets/images/8.jpg">
                  <a title="Endless love - ChengLong, Kim Hee Sun" href="./music/chinese2.html" class="msk"></a>
                </div>
                <p class="dec">
                  <a title="Endless love - ChengLong, Kim Hee Sun" href="./music/chinese2.html">Endless love</a>
                </p>
              <div class="author">Jackie Chan (Thành Long), Kim Hee Sun</div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Sidebar -->
  <div class="sidebar">
    <div class="right-module">
      <h4>Top hits</h4>
      <ul class="new-artist-songs">
        <li class="artist-song">
          <div class="avatar">
            <img src="../music-website-master/storage/avatar/01.jpg">
          </div>
          <div class="info">
            <h3>Ai wo komete Umi</h3>
            <p>Aoi Teshima / <span>1167</span>likes</p>
          </div>
          <a href="../music/japan1.html" title="Ai wo komete Umi" class="cover-link"></a>
        </li>
        <li class="artist-song">
          <div class="avatar">
            <img src="../music-website-master/storage/avatar/02.jpg">
          </div>
          <div class="info">
            <h3>Can't be forgotten</h3>
            <p>Kim Jong Kook / <span>1008</span>likes</p>
          </div>
          <a href="../music/kpop1.html" title="Can't be forgotten" class="cover-link"></a>
        </li>
        <li class="artist-song">
          <div class="avatar">
            <img src="../music-website-master/storage/avatar/03.jpg">
          </div>
          <div class="info">
            <h3>Moong Nan Nan</h3>
            <p>FLI:P / <span>864</span>likes</p>
          </div>
          <a href="../music/t1.html" title="Moong Nan Nan" class="cover-link"></a>
        </li>
        <li class="artist-song">
          <div class="avatar">
            <img src="../music-website-master/storage/avatar/04.jpg">
          </div>
          <div class="info">
            <h3>十年人间</h3>
            <p>老干妈 / <span>838</span>likes</p>
          </div>
          <a href="../music/chinese4.html" title="十年人间" class="cover-link"></a>
        </li>
        <li class="artist-song">
          <div class="avatar">
            <img src="../music-website-master/storage/avatar/05.jpg">
          </div>
          <div class="info">
            <h3>I will go to you like the first snow</h3>
            <p>Ailee / <span>821</span>likes</p>
          </div>
          <a href="../music/kpop4.html" title="I will go to you like the first snow" class="cover-link"></a>
        </li>
      </ul>
    </div>
  </div>


</div>

<!-- bottom copyright -->
<footer>
  <div class="container">
    <div class="copyright">
    <p>From us with love © <span class="update-year">2023</span> YinHuThy - Enjoy the music !</p>
    </div>
  </div>
</footer>
<!-- JS screenplay-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/HBSlider.js"></script>

<script>
  // carousel data
  var sliderData = [
    {
      title: '愛を込めて海 - Teshima Aoi',
      pic: './storage/slider/01.jpg',
      url: './music/japan1.html'
    },
    {
      title: '起风了 - ZhouShen',
      pic: './storage/slider/02.jpg',
      url: './music/kpop4.html'
    },
    {
      title: 'I will go to you like the first snow - Ailee',
      pic: './storage/slider/03.jpg',
      url: './music/kpop4.html'
    },
  ];

  $(function () {
    HBSlider.setConfig({
      autoPlay: true,
      delay: 5
    });
    HBSlider.setItems(sliderData);
    HBSlider.init();
    HBSlider.play();
  });
</script>
</body>
</html>
