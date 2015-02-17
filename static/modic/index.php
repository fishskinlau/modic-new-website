<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1.0">
  <meta name="viewport" content="width=980px,min-scale=1.0">
  
  <title>MODIC</title>
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,400,300,700,600,800" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/standardize.css">
  <link rel="stylesheet" href="css/index-grid.css">
  <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/webStyle.css"/>

  <!-- Slick slide -->
  <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    
    <!-- social network wall-->

<link rel="stylesheet" type="text/css" href="css/dcsns_wall.css" media="all" />
    
</head>
<body class="body index clearfix">
  <div class="header clearfix">
    <div class="container container-menu clearfix">
     <?php include 'menu.php'; ?>
    </div>
  </div>
  <div class="main_slide container container-4 clearfix">
    <div class="main" style="background-image:url('./images/news/top-1-still.jpg');">
        <!-- use oncanplay to solve chrome autoplay problem -->
        <div style="width: 100%; height:550px;text-align:center">
            <!--align helper -->
            <span style="height:100%;display:inline-block;vertical-align:middle;"></span>
            <a href="javascript:" style="color: rgba(0, 0, 0, 0.0);"><img id="playButton1" name="playButton" src="images/play_button.png" style="width: 50px; height:50px; margin: auto; display:inline-block; vertical-align: middle;" onclick="displayYoutube('playButton1', 'video1', 'izBoODmWtMg')"/></a>
                <!--video id="video1" loop style="width:auto;height:550px; display:none; vertical-align: middle;" onclick="this.pause();" onpause="hideVideo('playButton1', 'video1')" >
                  <source src="gizmo.mp4" type="video/mp4">
                  Your browser does not support the video tag.
                </video-->
            <iframe id="video1" allowfullscreen="" src="" style="width:960px;height:550px; display:none; vertical-align: middle;" ></iframe>
            
        </div>
        <div class="container container-5 clearfix">
            <p class="text text-1">TOGETHER WE STAND, DIVIDED WE FALL</p>
        </div>
    </div>
    <!--div class="main" style="background-image:url('./images/news/top-2-still.jpg');">
        <div style="width: 100%; height:550px;text-align:center">
            <span style="height:100%;display:inline-block;vertical-align:middle;"></span>
            <a href="javascript:" style="color: rgba(0, 0, 0, 0.0);"><img id="playButton2" name="playButton" src="images/play_button.png" style="width: 50px; height:50px; margin: auto; display:inline-block; vertical-align: middle;" onclick="displayVideo('playButton2', 'video2')"/></a>
                <video id="video2" loop style="width:auto;height:550px; display:none; vertical-align: middle;" onclick="this.pause();" onpause="hideVideo('playButton2', 'video2')" >
                  <source src="Game_of_Thrones_opening.mp4" type="video/mp4">
                  Your browser does not support the video tag.
                </video>
            
        </div>
        <div class="container container-5 clearfix">
            <p class="text text-1">BEYOURSELF, NO MATTER WHAT THEY SAY.</p>
        </div>
    </div-->
    
    <!--
    <div class="container container-6 clearfix">
      <p class="text text-2">. . . .</p>
    </div>
    -->
  </div>
  
  <div class="container container-7 clearfix">
    <div class="highlight clearfix">
      <div class="container container-8 clearfix">
        <p class="text text-3">NEWS</p>
      </div>
      <div class="container container-9 clearfix">
        <div class="container _element container-10" style="background-image: url('./images/news/headline1.jpg');"></div>
        <div class="container container-11 clearfix">
          <p class="text text-4">狄易達 x GoPro自家製<br/>第一視感《一凍一熱》Lyrics MV</p>
          <!--p class="text text-5">Dec 22, 2014</p-->
          <p class="text text-6">狄易達加盟新公司Modic後，於2015年再拾起勁舞鞋，推出全新派台作品《一凍一熱》，歌曲找來著名音樂人Edward Chan及T-Ma監製與作曲，由鬼才填詞人陳詠謙譜上歌詞，在音樂上，這也是達仔首次嘗試的Funky曲風，配以現場演出時的火熱舞步，期望在這個寒冷的冬天裡帶給大家開心熱鬧的節日氣氛。</p>
        </div>
      </div>
      <div class="container container-12 clearfix">
        <div class="container _element container-13" style="background-image: url('./images/news/headline2.jpg');"></div>
        <div class="container container-14 clearfix">
          <p class="text text-7">Modic仝人祝願：大家羊年行大運！</p>
          <!--p class="text text-8">Dec 22, 2014</p-->
          <p class="text text-9">農曆新年又到了!今年是羊年，澳滌娛樂Modic仝人祝願大家身體健康、快快樂樂，要邊「羊」得邊「羊」! 新一年記得繼續緊貼我們Modic的資訊，我們務必為你們帶來更精彩的演出、音樂及數不盡的多元化娛樂! </p>
        </div>
      </div>
    </div>
  </div>
    
     <div class="container container-15 clearfix">
    <div class="container container-16 clearfix">
        <div class="container container-17 clearfix">
          <p class="text text-10">WHEREABOUTS</p>
        </div>
        <div id="social-stream"></div>

      
    </div>
  </div>
  <!--div class="container container-15 clearfix">
   
  </div-->
  <div class="container container-32 clearfix">
    <div class="container _element container-33" style="background: url('images/bg/background1.jpg');background-attachment:fixed;background-size: 100% auto;background-position: center top;">
      <img id="imgbg1" src="./images/bg/background1-mobile.jpg" style="height:550px;width:auto;display:none;"/>
      </div>
    <div class="container container-34 clearfix">
      <p class="text text-34">BE YOURSELF, NO MATTER WHAT THEY SAY</p>
    </div>
  </div>
  <div class="container container-35 clearfix">
    <div class="store clearfix">
      <div class="container container-36 clearfix">
        <p class="text text-35">RELEASES</p>
      </div>
      <div class="container container-37 clearfix">
        <img class="image-frontpage-release-artwork" src="images/releases/5-Di2da-one-cold-one-hot.jpg" onClick="window.location='https://itunes.apple.com/hk/album/yi-dong-yi-re-single/id959845318';">
        <div class="text text-36">
          <p>狄易達</p>
          <p>一凍一熱</p>
</div>
      </div>
      <div class="container container-38 clearfix">
        <img class="image-frontpage-release-artwork" src="images/releases/1-rico-existence-cdcover.jpg"  onClick="window.location='https://itunes.apple.com/hk/album/cun-zai-gan-single/id938003948';">
        <div class="text text-37">
          <p>龍世傑</p>
          <p>存在感</p>
</div>
      </div>
      <div class="container container-39 clearfix">
        <img class="image-frontpage-release-artwork" src="images/releases/4-Di2da-good-lovercover.jpg"  onClick="window.location='https://itunes.apple.com/hk/album/hao-qing-ren-single/id916683084';">
        <div class="text text-38">
          <p>狄易達</p>
          <p>好情人</p>
</div>
      </div>
      <div class="container container-40 clearfix">
        <img class="image-frontpage-release-artwork" src="images/releases/3-Rainky-toy-cover.jpg" onClick="window.location='https://itunes.apple.com/hk/album/wan-ju-single/id914085000';" >
        <div class="text text-39">
          <p>蔚雨芯</p>
          <p>玩具</p>
</div>
      </div>
      <!--div class="container container-41 clearfix">
        <img class="image-frontpage-release-artwork" src="images/releases/2-Rainky-clone-cdcover.jpg">
        <div class="text text-40">
          <p>蔚雨芯</p>
          <p>複製人</p>
</div>
      </div-->
      
    </div>
  </div>
    <?php include 'footer.php'; ?>


  <!--
  <script src="js/jquery-min.js"></script>
  -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="js/rimages.js"></script>
  <script type="text/javascript" src="slick/slick.min.js"></script>

    <!-- social network wall -->
    <script type="text/javascript" src="js/jquery.social.stream.wall.1.6.js"></script>
<script type="text/javascript" src="js/jquery.social.stream.1.5.9.js"></script>


    
  <script type="text/javascript">
      
      if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
          var imgbg1 = document.getElementById("imgbg1");
          imgbg1.style.display = "";
      };
        $(document).ready(function(){
            $('.main_slide').slick({
                infinite: true,
                arrows: false,
                lazyLoad: 'ondemand',
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                onAfterChange: function () {hideAllVideo()}
            });
         $(document).ready(function($){
	$('#social-stream').dcSocialStream({
		feeds: {
			
			facebook: {
				id: '283526628524933, Facebook Timeline/283526628524933, Rainky/95072483859851, di2da/304264657663 , Rico/223759697818584 , Dance Kingdom/100008364948649 ',
				url: 'facebook.php',
                comments:	 0,
                out:	'intro,thumb,title,text,user'
			}
		},
		rotate: {
			delay: 0
		},
		twitterId: 'designchemical',
		control: false,
		filter: false,
		wall: true,
		cache: false,
		max: 'limit',
		limit: 10,
		iconPath: 'images/dcsns-dark/',
		imagePath: 'images/dcsns-dark/'
	});
});
            
        });
        // self-made pagination
        var news_index = 0;
        var news_slides = $('.news_slide');
        function displayNews(i) {
            $.each(news_slides, function (index, data) {
                if (index == i) {
                    $(this).fadeIn("slow");
                    //$(this).css('display', 'block');
                } else {
                    $(this).css('display', 'none');
                };
            });
        };
        function displayNextNews() {
            if (news_index < news_slides.length - 1) {
                news_index++;
                displayNews(news_index);
            }
        };
        function displayPrevNews() {
            if (news_index > 0) {
                news_index--;
                displayNews(news_index);
            }
        };
        // init news slide
        displayNews(news_index);
        function hideAllVideo(){
            /*
            var video1 = document.getElementById('video1');
            video1.pause();
            var video2 = document.getElementById('video2');
            video2.pause();
            */
            var videos = document.getElementsByTagName('video');
            for (var i = 0; i < videos.length; i++) {
                videos[i].pause();
            }
			var iframes = document.getElementsByTagName('iframe');
			for (var i = 0; i < iframes.length; i++) {
                iframes[i].src="";
            }
			var playButtons = document.getElementsByName('playButton');
			for (var i = 0; i < playButtons.length; i++) {
                playButtons[i].style.display='inline-block';
            }
        }
        function displayVideo(playButtonId, videoId) {
            var playButton = document.getElementById(playButtonId);
            playButton.style.display='none';
            var video=document.getElementById(videoId);
            video.style.display='inline-block';
            video.play();
        }
        function hideVideo(playButtonId, videoId) {
            var video=document.getElementById(videoId);
            //video.pause();
            video.style.display='none';
            document.getElementById(playButtonId).style.display='inline-block';
        }
        function displayYoutube(playButtonId, iFrameId, yid) {
			var playButton = document.getElementById(playButtonId);
            playButton.style.display='none';
            var iframe=document.getElementById(iFrameId);
			iframe.src = '//www.youtube.com/embed/' + yid + '?autoplay=1&controls=0&loop=1&playlist=' + yid;
			iframe.style.display='inline-block';
			
        }
		function hideYoutube(playButtonId, iFrameId) {
            var iframe=document.getElementById(iFrameId);
            iframe.src = ""
            iframe.style.display='none';
            document.getElementById(playButtonId).style.display='inline-block';
        }
      
      
  </script>
</body>
</html>