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
                <video id="video1" loop style="width:auto;height:550px; display:none; vertical-align: middle;" onclick="this.pause();" onpause="hideVideo('playButton1', 'video1')" >
                  <source src="gizmo.mp4" type="video/mp4">
                  Your browser does not support the video tag.
                </video>
            
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
        <div class="container _element container-10" style="background-image: url('./images/news/headline-1.jpg');"></div>
        <div class="container container-11 clearfix">
          <p class="text text-4">聖誕唔愁冇節目　跟狄易達、蔚雨芯海邊嘆大餐</p>
          <p class="text text-5">Dec 22, 2014</p>
          <p class="text text-6">聖誕節仲未諗好有咩節目？不如問下狄易達、蔚雨芯(Rainky)有乜好推介！達仔呢日帶埋澳滌旗下藝人Rainky、龍世傑和澳門小姐伍家怡，一齊到尖沙咀海港城睇靚景嘆聖誕大餐，兼分享揀聖誕禮物嘅心得。佢哋四個就分別講咗啲最難忘嘅經歷畀大家參考吓，其中龍世傑更大爆：「有年試過收一堆臘腸兼夾一封利是，成件事真係好Cult，同聖誕去食羊腩煲係同一樣嘅概念！」

<br/><br/>《東周網》<br/><a href="http://eastweek.my-magazine.me/?aid=39038">http://eastweek.my-magazine.me/?aid=39038</a></p>
        </div>
      </div>
      <div class="container container-12 clearfix">
        <div class="container _element container-13" style="background-image: url('./images/news/headline-2.jpg');"></div>
        <div class="container container-14 clearfix">
          <p class="text text-7">倫永亮龍世傑互笠高帽</p>
          <p class="text text-8">Dec 22, 2014</p>
          <p class="text text-9">澳門歌手龍世傑下年出唱片，搵咗倫永亮作曲，佢哋日前喺中環出席宣傳活動，倫永亮大讚龍世傑：「佢斯文有內涵，寫嘅詞好好，𠵱家好多歌詞要睇第4次先有感覺，佢嘅詞好唔同，起碼我明白。」龍世傑話：「我本身好鍾意倫永亮寫嘅歌，旋律好優美、動聽，同佢合作學識創作唔可以計算咁多，咁會忽略真感情，佢提醒我音樂要有自己風格。」

<br/><br/>《蘋果日報》<br/><a href="http://hk.apple.nextmedia.com/entertainment/art/20141222/18976948">http://hk.apple.nextmedia.com/entertainment/art/20141222/18976948</a> </p>
        </div>
      </div>
    </div>
  </div>
  <div class="container container-15 clearfix">
    <div class="container container-16 clearfix">
      <div class="video clearfix">
        <div class="container container-17 clearfix">
          <p class="text text-10">NEWS</p>
        </div>
        <div class="container news_slide">
            <div class="container container-18 clearfix">
              <div class="container _element container-19" style="background-image: url('./images/news/news-1.jpg');"></div>
              <div class="container container-20 clearfix">
                <p class="text text-11">Dec 22, 2014</p>
                <p class="text text-12">倫永亮 龍世傑 一拍即合音樂道路擦出火花</p>
                <p class="text text-13">龍世傑對於香港樂迷來說仍然陌生，但其實他在澳門出道已有七、八年擁有多首自己的歌曲，今年才正式與香港公司合作，踏進本港樂壇，也不算新人，他大賣口乖表示：「家俊幫我找成熟、有品味的人寫歌，知道是Anthony就很感恩，咁勁！所以第一次與Anthony開會時覺得很夢幻！」Anthony謙稱自己只是平常人，更反問龍世傑其實是屬於哪個公司，當獲悉是澳滌娛樂即以笑遮醜！Anthony續大讚龍世傑填詞了得，笑說其他人填的詞自己可能看四次才明白，但今次明白之餘更大感有共鳴。


《成報》http://www.singpao.com/yl/mx/201412/t20141222_542062.html</p>
              </div>
            </div>
            
                <div class="container container-18 clearfix">
                  <div class="container _element container-22" style="background-image: url('./images/news/news-2.jpg');"></div>
                  <div class="container container-23 clearfix">
                    <p class="text text-14">Dec 22, 2014</p>
                    <p class="text text-15">創出存在感 倫永亮龍世傑</p>
                    <p class="text text-16">各行各業都需要薪火相傳，尤其現今樂壇，當K-Pop大行其道，國語歌的普及，近年廣東歌總被看低一線，要守得住廣東歌，前輩與後輩的緊密合作才是王道。資深音樂人倫永亮（Anthony）與澳門唱作人龍世傑（Rico）首度合作，雖然龍世傑是新唱作人，卻贏得Anthony大讚：「佢好斯文又有內涵，我好鍾意佢把聲。」兩人似乎已擦出火花。

Rico說與Anthony合作獲益良多，以往自己雖以填詞為主，但偶爾也會作曲，但總感到力不從心，旋律有太多計算，Anthony的歌旋律動聽，很有其個人風格，Rico謂：「同Anthony合作，令我知道自己作曲時忽略咗情感，今次真係學到好多嘢。」

《都巿日報》http://www.metrohk.com.hk/index.php?cmd=detail&id=259640
</p>
                  </div>
                </div>
                <div class="container container-18 clearfix">
                  <div class="container _element container-25" style="background-image: url('./images/news/news-3.jpg');"></div>
                  <div class="container container-26 clearfix">
                    <p class="text text-17">Nov 16, 2014</p>
                    <p class="text text-18">林炳南師傅駕到！勸狄易達勿交年輕女子</p>
                    <p class="text text-19">原名廖成達的狄易達，對風水玄學深信不疑，狄易達這個藝名亦是風水師傅所改的。早前《東周刊》採訪狄易達三合一安樂窩時，就邀請玄學師傅林炳南為他指點迷津，看看此單位是否一間發達屋？林師傅表示這單位風水很好，同達仔的命格相合，對事業非常有利，不過林師傳就多次叮囑達仔，比他年長的女士是貴人，反之比他年輕的女子就累人，故搵女朋友切忌年輕過自己，同年或年長最適合，以及三十六前不宜結婚，否則三十六歲會有機會離婚。《東周網》http://eastweek.my-magazine.me/index.php?aid=38880</p>
                  </div>
                </div>
        </div>
        <div class="container news_slide">
            <div class="container container-18 clearfix">
              <div class="container _element container-19"></div>
              <div class="container container-20 clearfix">
                <p class="text text-11">Nov 16, 2014</p>
                <p class="text text-12">NEWS HEADING</p>
                <p class="text text-13">Ms Castro also raised the subject of future co-operation with the corporation when it needs to film in the South American country.

    In a letter to the BBC Trust, the corporation's governing body, Ms Castro said Clarkson's behaviour in the country fell "well below" BBC editorial values, accusing them of "covering up".</p>
              </div>
            </div>
            
                <div class="container container-18 clearfix">
                  <div class="container _element container-25"></div>
                  <div class="container container-26 clearfix">
                    <p class="text text-17">Nov 16, 2014</p>
                    <p class="text text-18">NEWS HEADING</p>
                    <p class="text text-19">Ms Castro also raised the subject of future co-operation with the corporation when it needs to film in the South American country.

        In a letter to the BBC Trust, the corporation's governing body, Ms Castro said Clarkson's behaviour in the country fell "well below" BBC editorial values, accusing them of "covering up".</p>
                  </div>
                </div>
                <div class="container container-18 clearfix">
                  <div class="container _element container-22"></div>
                  <div class="container container-23 clearfix">
                    <p class="text text-14">Nov 16, 2014</p>
                    <p class="text text-15">NEWS HEADING</p>
                    <p class="text text-16">Ms Castro also raised the subject of future co-operation with the corporation when it needs to film in the South American country.

        In a letter to the BBC Trust, the corporation's governing body, Ms Castro said Clarkson's behaviour in the country fell "well below" BBC editorial values, accusing them of "covering up".</p>
                  </div>
                </div>
        </div>
        <div class="container container-27 clearfix">
          <p class="text text-20"><a id="newer_headline" href="javascript:" onClick="displayPrevNews();" style="color: inherit;">&lt; NEWER &nbsp;</a>/ <a id="older_headline" href="javascript:" onClick="displayNextNews();" style="color: inherit;">&nbsp;OLDER &gt;</a></p>
        </div>
      </div>
      <div class="news clearfix" style="height: 839px">
        <p class="text text-21">WHEREABOUTS</p>
        <div class="container container-28 clearfix">
          <p class="text text-22">Dec 12 , 2013</p>
          <p class="text text-23">Charity Event For Military Held At Vista Motorcycle Service Center</p>
          <p class="text text-24">Building off of the momentum of past successful conferences, Golden Networking brings Cyber Security World Conference 2014 New York City, forum that will bring the latest thinking from security experts to hundreds of senior executives focused on protecting enterprises’ information assets.</p>
        </div>
        <div class="container container-29 clearfix">
          <p class="text text-25">Dec 12 , 2013</p>
          <p class="text text-26">Charity Event For Military Held At Vista Motorcycle Service Center</p>
          <p class="text text-27">Building off of the momentum of past successful conferences, Golden Networking brings Cyber Security World Conference 2014 New York City, forum that will bring the latest thinking from security experts to hundreds of senior executives focused on protecting enterprises’ information assets.</p>
        </div>
        <div class="container container-30 clearfix">
          <p class="text text-28">Dec 12 , 2013</p>
          <p class="text text-29">Charity Event For Military Held At Vista Motorcycle Service Center</p>
          <p class="text text-30">Building off of the momentum of past successful conferences, Golden Networking brings Cyber Security World Conference 2014 New York City, forum that will bring the latest thinking from security experts to hundreds of senior executives focused on protecting enterprises’ information assets.</p>
        </div>
        <div class="container container-31 clearfix">
          <p class="text text-31">Dec 12 , 2013</p>
          <p class="text text-32">Charity Event For Military Held At Vista Motorcycle Service Center</p>
          <p class="text text-33">Building off of the momentum of past successful conferences, Golden Networking brings Cyber Security World Conference 2014 New York City, forum that will bring the latest thinking from security experts to hundreds of senior executives focused on protecting enterprises’ information assets.</p>
        </div>
        <!-- test scroll -->
        <div class="container container-31 clearfix">
          <p class="text text-31">Dec 12 , 2013</p>
          <p class="text text-32">Charity Event For Military Held At Vista Motorcycle Service Center</p>
          <p class="text text-33">Building off of the momentum of past successful conferences, Golden Networking brings Cyber Security World Conference 2014 New York City, forum that will bring the latest thinking from security experts to hundreds of senior executives focused on protecting enterprises’ information assets.</p>
        </div>
        <div class="container container-31 clearfix">
          <p class="text text-31">Dec 12 , 2013</p>
          <p class="text text-32">Charity Event For Military Held At Vista Motorcycle Service Center</p>
          <p class="text text-33">Building off of the momentum of past successful conferences, Golden Networking brings Cyber Security World Conference 2014 New York City, forum that will bring the latest thinking from security experts to hundreds of senior executives focused on protecting enterprises’ information assets.</p>
        </div>
        <div class="container container-31 clearfix">
          <p class="text text-31">Dec 12 , 2013</p>
          <p class="text text-32">Charity Event For Military Held At Vista Motorcycle Service Center</p>
          <p class="text text-33">Building off of the momentum of past successful conferences, Golden Networking brings Cyber Security World Conference 2014 New York City, forum that will bring the latest thinking from security experts to hundreds of senior executives focused on protecting enterprises’ information assets.</p>
        </div>
        <div class="container container-31 clearfix">
          <p class="text text-31">Dec 12 , 2013</p>
          <p class="text text-32">Charity Event For Military Held At Vista Motorcycle Service Center</p>
          <p class="text text-33">Building off of the momentum of past successful conferences, Golden Networking brings Cyber Security World Conference 2014 New York City, forum that will bring the latest thinking from security experts to hundreds of senior executives focused on protecting enterprises’ information assets.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="container container-32 clearfix">
    <div class="container _element container-33"></div>
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
        <img class="image" src="images/thedoors-110x110-2.jpg" data-rimage data-src="images/thedoors-110x110-2.jpg" data-srcat2x="images/thedoors-110x110-2@2x.jpg">
        <div class="text text-36">
          <p>Rainky</p>
          <p>New Album</p>
</div>
      </div>
      <div class="container container-38 clearfix">
        <img class="image" src="images/5f8e2f043f53c846f782dd51dec4bb87-110x110.jpg" data-rimage data-src="images/5f8e2f043f53c846f782dd51dec4bb87-110x110.jpg" data-srcat2x="images/5f8e2f043f53c846f782dd51dec4bb87-110x110@2x.jpg">
        <div class="text text-37">
          <p>Rainky</p>
          <p>New Album</p>
</div>
      </div>
      <div class="container container-39 clearfix">
        <img class="image" src="images/6b56e20f6db8773f5a1f7207171b26e4-110x110.jpg" data-rimage data-src="images/6b56e20f6db8773f5a1f7207171b26e4-110x110.jpg" data-srcat2x="images/6b56e20f6db8773f5a1f7207171b26e4-110x110@2x.jpg">
        <div class="text text-38">
          <p>Rainky</p>
          <p>New Album</p>
</div>
      </div>
      <div class="container container-40 clearfix">
        <img class="image" src="images/43-110x110.jpg" data-rimage data-src="images/43-110x110.jpg" data-srcat2x="images/43-110x110@2x.jpg">
        <div class="text text-39">
          <p>Rainky</p>
          <p>New Album</p>
</div>
      </div>
      <div class="container container-41 clearfix">
        <img class="image" src="images/61iIbmNRTJL-110x110.jpg" data-rimage data-src="images/61iIbmNRTJL-110x110.jpg" data-srcat2x="images/61iIbmNRTJL-110x110@2x.jpg">
        <div class="text text-40">
          <p>Rainky</p>
          <p>New Album</p>
</div>
      </div>
      <div class="container container-42 clearfix">
        <img class="image" src="images/0474a3d3330dcdc8946de67a4a963ca5-110x112.jpg" data-rimage data-src="images/0474a3d3330dcdc8946de67a4a963ca5-110x112.jpg" data-srcat2x="images/0474a3d3330dcdc8946de67a4a963ca5-110x112@2x.jpg">
        <div class="text text-41">
          <p>Rainky</p>
          <p>New Album</p>
</div>
      </div>
      <div class="container container-43 clearfix">
        <img class="image" src="images/3864366_orig-110x110.jpg" data-rimage data-src="images/3864366_orig-110x110.jpg" data-srcat2x="images/3864366_orig-110x110@2x.jpg">
        <div class="text text-42">
          <p>Rainky</p>
          <p>New Album</p>
</div>
      </div>
      <div class="container container-44 clearfix">
        <img class="image" src="images/B0000024RQ.01.LZZZZZZZ-110x110.jpg" data-rimage data-src="images/B0000024RQ.01.LZZZZZZZ-110x110.jpg" data-srcat2x="images/B0000024RQ.01.LZZZZZZZ-110x110@2x.jpg">
        <div class="text text-43">
          <p>Rainky</p>
          <p>New Album</p>
</div>
      </div>
      <div class="container container-45 clearfix">
        <img class="image" src="images/thedoors-110x110-1.jpg" data-rimage data-src="images/thedoors-110x110-1.jpg" data-srcat2x="images/thedoors-110x110-1@2x.jpg">
        <div class="text text-44">
          <p>Rainky</p>
          <p>New Album</p>
</div>
      </div>
      <div class="container container-46 clearfix">
        <img class="image" src="images/thedoors-110x110.jpg" data-rimage data-src="images/thedoors-110x110.jpg" data-srcat2x="images/thedoors-110x110@2x.jpg">
        <div class="text text-45">
          <p>Rainky</p>
          <p>New Album</p>
</div>
      </div>
    </div>
  </div>
  <div class="container container-47 clearfix">
    <div class="container container-48 clearfix">
      <img class="image image-11" src="images/modic-logo(3)-77x19.png" data-rimage data-src="images/modic-logo(3)-77x19.png" data-srcat2x="images/modic-logo(3)-77x19@2x.png">
      <img class="image image-12" src="images/dk-logo-72x44.png" data-rimage data-src="images/dk-logo-72x44.png" data-srcat2x="images/dk-logo-72x44@2x.png">
      <img class="image image-13" src="images/yfcmd-logo-30x39.png" data-rimage data-src="images/yfcmd-logo-30x39.png" data-srcat2x="images/yfcmd-logo-30x39@2x.png">
    </div>
    <div class="container container-49 clearfix">
      <div class="text text-46">
        <p>T &nbsp;3527 7000</p>
        <p>F &nbsp;3521 1200    </p>
        <p>E &nbsp;info@modic.hk</p>
</div>
      <p class="text text-47">Unit 208-210, Metro Centre Phase 1, 32 Lam Hing Street, Kowloon Bay, Hong Kong&nbsp;<br>香港九龍灣臨興街32號美羅中心一期208-210室</p>
      <div class="container container-50 clearfix">
        <button class="_button _button-8"><span>&nbsp;</span></button>
        <button class="_button _button-9"><span>&nbsp;</span></button>
        <button class="_button _button-10"><span>&nbsp;</span></button>
      </div>
    </div>
    <div class="text text-48">© 2014 a Modic product. all rights reserved.</div>
  </div>

  <!--
  <script src="js/jquery-min.js"></script>
  -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="js/rimages.js"></script>
  <script type="text/javascript" src="slick/slick.min.js"></script>
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