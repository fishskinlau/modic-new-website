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
            <a href="javascript:" style="color: rgba(0, 0, 0, 0.0);"><img id="playButton1" src="images/play_button.png" style="width: 50px; height:50px; margin: auto; display:inline-block; vertical-align: middle;" onclick="displayVideo('playButton1', 'video1')"/></a>
                <!--video id="video1" loop style="width:auto;height:550px; display:none; vertical-align: middle;" onclick="this.pause();" onpause="hideVideo('playButton1', 'video1')" >
                  <source src="gizmo.mp4" type="video/mp4">
                  Your browser does not support the video tag.
                </video-->
            <iframe id="video1" allowfullscreen="" src="//www.youtube.com/embed/mjfsuHXCiyw?amp;controls=0&amp;loop=1&amp;playlist=mjfsuHXCiyw" style="width:960px;height:550px; display:none; vertical-align: middle;" ></iframe>
            
        </div>
        <div class="container container-5 clearfix">
            <p class="text text-1">BEYOURSELF, NO MATTER WHAT THEY SAY.</p>
        </div>
    </div>
    <div class="main" style="background-image:url('./images/news/top-2-still.jpg');">
        <!-- use oncanplay to solve chrome autoplay problem -->
        <div style="width: 100%; height:550px;text-align:center">
            <!--align helper -->
            <span style="height:100%;display:inline-block;vertical-align:middle;"></span>
            <a href="javascript:" style="color: rgba(0, 0, 0, 0.0);"><img id="playButton2" src="images/play_button.png" style="width: 50px; height:50px; margin: auto; display:inline-block; vertical-align: middle;" onclick="displayVideo('playButton2', 'video2')"/></a>
                <video id="video2" loop style="width:auto;height:550px; display:none; vertical-align: middle;" onclick="this.pause();" onpause="hideVideo('playButton2', 'video2')" >
                  <source src="Game_of_Thrones_opening.mp4" type="video/mp4">
                  Your browser does not support the video tag.
                </video>
            
        </div>
        <div class="container container-5 clearfix">
            <p class="text text-1">BEYOURSELF, NO MATTER WHAT THEY SAY.</p>
        </div>
    </div>
    
    <!--
    <div class="container container-6 clearfix">
      <p class="text text-2">. . . .</p>
    </div>
    -->
  </div>
  
  <div class="container container-7 clearfix">
    <div class="highlight clearfix">
      <div class="container container-8 clearfix">
        <p class="text text-3">HEADLINES</p>
      </div>
      <div class="container container-9 clearfix">
        <div class="container _element container-10" style="background-image: url('./images/news/headline1.jpg');"></div>
        <div class="container container-11 clearfix">
          <p class="text text-4">聖誕唔愁冇節目　跟狄易達、蔚雨芯海邊嘆大餐</p>
          <p class="text text-5">Dec 22, 2014</p>
          <p class="text text-6">狄易達加盟新公司Modic後，於2015年再拾起勁舞鞋，推出全新派台作品《一凍一熱》，歌曲找來著名音樂人Edward Chan及T-Ma監製與作曲，由鬼才填詞人陳詠謙譜上歌詞，在音樂上，這也是達仔首次嘗試的Funky曲風，配以現場演出時的火熱舞步，期望在這個寒冷的冬天裡帶給大家開心熱鬧的節日氣氛。</p>
        </div>
      </div>
      <div class="container container-12 clearfix">
        <div class="container _element container-13" style="background-image: url('./images/news/headline2.jpg');"></div>
        <div class="container container-14 clearfix">
          <p class="text text-7">倫永亮龍世傑互笠高帽</p>
          <p class="text text-8">Dec 22, 2014</p>
          <p class="text text-9">彭懷安（Eddie）、蔚雨芯（Rainky）、朱慧敏及Dance Kingdom成員古志鍵、楊樂文、王顯聰、丁可欣、羅伊婷、施朗然與江宏基，早前齊與又名「雅蘭易達十六世」的狄易達現身由雅蘭床褥有份投資的電影《浮華宴》首映禮，先睹為快。</p>
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
    <div class="container _element container-33" style="background: url('images/modic-index-background.jpg');"></div>
    <div class="container container-34 clearfix">
      <p class="text text-34">If you should go skating
On the thin ice of modern life</p>
    </div>
  </div>
  <div class="container container-35 clearfix">
    <div class="store clearfix">
      <div class="container container-36 clearfix">
        <p class="text text-35">RELEASES</p>
      </div>
      <div class="container container-37 clearfix">
        <img class="image-frontpage-release-artwork" src="images/releases/1-Di2da-Just_Go-cover.jpg">
        <div class="text text-36">
          <p>狄易達</p>
          <p>Just Go</p>
</div>
      </div>
      <div class="container container-38 clearfix">
        <img class="image-frontpage-release-artwork" src="images/releases/2-Di2da-The_Second_Step-cover.jpg">
        <div class="text text-37">
          <p>狄易達</p>
          <p>The Second Step</p>
</div>
      </div>
      <div class="container container-39 clearfix">
        <img class="image-frontpage-release-artwork" src="images/releases/3-Di2da-Infinity-cover.jpg">
        <div class="text text-38">
          <p>狄易達</p>
          <p>Infinity</p>
</div>
      </div>
      <div class="container container-40 clearfix">
        <img class="image-frontpage-release-artwork" src="images/releases/1-Rainky-Raining-cdcover.jpg">
        <div class="text text-39">
          <p>蔚雨芯</p>
          <p>Raining</p>
</div>
      </div>
      <div class="container container-41 clearfix">
        <img class="image-frontpage-release-artwork" src="images/releases/2-Rainky-clone-cdcover.jpg">
        <div class="text text-40">
          <p>蔚雨芯</p>
          <p>複製人</p>
</div>
      </div>
      
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
				id: '144049709026195',
				url: 'facebook.php',
                comments:	 0,
                out:	'intro,thumb,title,text,user,share'
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
      
      
  </script>
</body>
</html>