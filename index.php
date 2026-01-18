<?php
error_reporting( 0 ); // Remove for debug
$pixels = [ 'fb', 'fbe', 'ga', 'gad', 'mt', 'mtrk', 'tt', 'vk' ];
foreach ( $pixels as $px ) if (isset( $_GET[$px] )) {
	$z = preg_replace( '#[^0-9A-Za-z\-\_\.\,]+#i', '', stripslashes(filter_var( $_GET[$px], FILTER_UNSAFE_RAW )) );
	if ( $z ) setcookie( $px, $z, time() + 2592000, '/' );
}
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <title>Neuropathix - Nerve Health Support</title>
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script type="text/javascript">
    function dtime(d) {
      var dayNames = new Array("Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat");
      var monthNames = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
      var now = new Date();
      now.setDate(now.getDate() + d + 1);
      document.write(dayNames[now.getDay()] + ", " + (now.getDate()) + " " + monthNames[now.getMonth()] + " " + now.getFullYear());
    }
  </script>
  <script>
    var numErrors = 0, errMsg = Array(), tmpRegexs = Array(); function alert_msg(r, o) { clear_errors(), numErrors = Math.floor(numErrors + 1), $("body").append('<div class="tip"><div class="toolTip1"><div class="toolTipArrow1"></div>' + o + "</div></div>"), $(".tip").css({ top: $(r).offset().top + $(".tip").height() - 3, left: $(r).offset().left }), $(r).focus() } function clear_errors() { $(".tip").remove(), numErrors = 0 } function show_hidden(r) { $(r).fadeIn(500) } function template_validator(r) { for (x in clear_errors(), r) { var o = document.getElementsByName(x); if ($(o).length && !$(o).val().match(r[x].mask)) { $(o).closest(".mainInfo").is(":hidden") && $(o).closest(".mainInfo").fadeIn(50), alert_msg(o, r[x].hint); break } } return 0 == numErrors } function dump_array(r) { var o = ""; for (x in r) o += x + " => " + r[x] + "\n"; alert(o) } function popup(r) { var o = (screen.width - 600) / 2, n = "width=600, height=600"; return n += ", top=" + (screen.height - 600) / 2 + ", left=" + o, n += ", directories=no", n += ", location=no", n += ", menubar=no", n += ", resizable=no", n += ", scrollbars=no", n += ", status=no", n += ", toolbar=no", newwin = window.open(r, "windowname5", n), window.focus && newwin.focus(), !1 } $(document).on("keydown", function () { clear_errors() });
  </script>
  <style>
    .tip {
      position: absolute !important;
      width: 150px
    }

    .toolTip1 {
      background: #dc3545;
      border: thin solid #c42737;
      color: #fff;
      left: 0;
      margin-top: 48px;
      padding: 5px;
      position: absolute;
      text-align: center;
      width: 150px;
      z-index: 10;
      border-radius: 4px;
      font: bold 11px verdana
    }

    .toolTipArrow1 {
      border-color: transparent transparent #dc3545 transparent;
      border-style: solid;
      border-width: 11px;
      height: 0;
      width: 0;
      position: absolute;
      top: -20px;
      left: 20px;
      display: block;
      content: "\00a0"
    }

    .toolTipArrow1:before {
      border-color: transparent transparent #dc3545 transparent;
      position: absolute;
      top: -11px;
      left: -12px;
      border-style: solid;
      border-width: 12px;
      height: 0;
      width: 0;
      display: block;
      content: "\00a0"
    }

    input:focus {
      box-shadow: 0 0 5px red;
      -webkit-box-shadow: 0 0 5px red;
      -moz-box-shadow: 0 0 5px red;
      border: 1px solid #dc3545;
    }
  </style>




  <link rel="stylesheet" type="text/css" href="css/slick.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
  <link rel="stylesheet" href="css/form2.css">
  <style type="text/css">
    .slider {
      width: 100%;
      margin: 0px auto;

    }

    .slider div img {
      width: 25%;
      margin: 0 auto;
      border-radius: 50%;
    }

    .slick-slide {
      margin: 0px 20px;
      height: auto;
    }

    .slick-slide img {
      width: 100%;
    }

    .slick-prev {
      left: 0;
      z-index: 20;
    }

    .slick-next {
      right: 0;
      z-index: 20;
    }

    .slick-prev:before,
    .slick-next:before {
      color: black;
    }


    .slick-slide {
      transition: all ease-in-out .3s;
      opacity: 1;
    }

    .slick-active {
      opacity: 1 !important;
    }

    .slick-current {
      opacity: 1 !important;
    }

    .review-row {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: center;
      margin: 0px 0px;
    }
  </style>
  <!--[HEADER]--></head>

<body>
  <section id="home" class="section_nav dnone">
    <div style="background: #000;position: relative;z-index: 1;">
      <div class="container-fluid container_shipping">
        <p class="p_s_nav"> <span style="margin-right: 100px;color:#fff;"> <img src="images/truck.png" width="25"
              alt=""> free shipping</span> get 50% off on all orders when you order in the next <span
            class="countdown_box">
            <span class="order-countdown-minutes" id="minutes3">14</span><span style="color:#fff;"> :</span>
            <span class="order-countdown-seconds" id="seconds3">53</span>
          </span> minutes</p>
      </div>
    </div>
    <nav id="nav" class="container-fluid container_shipping nav">
      <a href="#home"> <img src="images/logo.svg" alt=""> </a>
      <a href="#home">home</a>
      <a href="#about">about neuropathix</a>
      <a href="#ing">ingredients</a>
      <a href="#reviews">reviews</a>
      <a href="#order">buy now</a>
    </nav>
  </section>
  <!-- mobile -->
  <section class="mobile_nav">
    <div class="shipping_s1 slider-active-6">
      <div class="">
        <div class="">
          <p><img src="images/icon1.png" alt="">Free Shipping</p>
        </div>
      </div>
      <div class="">
        <div class="">
          <p><img src="images/icon2.png" alt="">30-Day Money-back Guarantee</p>
        </div>
      </div>
      <div class="">
        <div class="">
          <p><img src="images/icon3.png" alt="">Cash on Delivery</p>
        </div>
      </div>
    </div>
  </section>
  <nav style="background: #e0dfe4;z-index: 25;position: absolute;left: 0;top: 50px;right: 0;"
    class="navbar d-block d-md-none " id="sticky-main-navbar">
    <div class="">
      <div style="display: flex;justify-content: space-between;">
        <button style="margin-top: 7px;" onclick="mobbtn()" class="navbar-toggler sticky-button" data-target=""
          data-toggle="collapse" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
          <i style="color:#CC5D6D;" class="fa fa-bars"></i>
        </button>
        <a href="#order"><img src="images/logo.svg" width="70"></a>
        <a class="btn blob"
          style="background: #f80d0c;color: #fff;font-size: 25px;border-radius: 10px;text-transform: capitalize;padding: 5px 15px;"
          href="#order">buy now</a>
      </div>
      <div class="collapse navbar-collapse" id="main-navbar">
        <ul class="navbar-nav ml-auto sticky-navbar">
          <li style="border-bottom: 1px solid #747774;text-align: center;margin-top: 20px;" class="nav-item "><a
              onclick="mobbtn1()" style="" class="nav-link mob-nav-size" href="#homeM"><b>Home</b></a></li>
          <li style="border-bottom: 1px solid #747774;text-align: center;" class="nav-item"><a style=""
              onclick="mobbtn1()" class="nav-link mob-nav-size" href="#aboutM"><b>About Neuropathix</b></a></li>
          <li style="border-bottom: 1px solid #747774;text-align: center;" class="nav-item"><a style=""
              onclick="mobbtn1()" class="nav-link mob-nav-size" href="#ing"><b>Ingredients</b></a></li>
          <li style="border-bottom: 1px solid #747774;text-align: center;" class="nav-item"><a style=""
              onclick="mobbtn1()" class="nav-link mob-nav-size" href="#reviews"><b>Reviews</b></a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!--end mobile -->

  <section id="home" class="section__01">
    <div id="homeM" class="container">
      <div class="row">
        <div class="col-lg-6 pos_rel">
          <h2 class="mS1">Relieve Nerve Pain <span>And Restore Nerve Health</span></h2>
          <img class="prS1" src="images/2_03.png" alt="">
          <a class="btnS1 mS1" href="#order">buy now</a>
          <div class="mS1">
            <div class="boxS1Days">
              <img src="images/1-01.svg" alt="">
              <img src="images/1-02.svg" alt="">
            </div>
          </div>
          <div class="boxS1">
            <div class="">
              <img src="images/2_06.png" alt="" width="100%">
              <p class="old"> 3960php </p>
              <p class="new"> 1980php </p>
              <img class="off" src="images/50OFF-01.svg" alt="">
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <h2 class="dS1">Relieve Nerve Pain <span>And Restore Nerve Health</span></h2>
          <h5><img src="images/Zvezdichki-01.svg" alt=""> <span>250 Reviews</span> </h5>
          <p class="s1_p"><b>Regenerate Damaged Nerves & Stop Tingling.</b>Neuropathix - is an advanced nerve support formula that helps reduce numbness, tingling, and burning sensations in your hands and feet.</p>
          <p class="bold"><span>●</span>Reduces nerve pain & discomfort</p>
          <p class="bold"><span>●</span>Supports healthy nerve function</p>
          <p class="bold"><span>●</span>Helps repair damaged nerve endings</p>
          <p class="bold"><span>●</span>Promotes better circulation</p>
          <p class="bold"><span>●</span>Restores sensation & mobility</p>
          <a class="btnS1 dS1" href="#order">buy now</a>
          <div class="boxS1Days dS1">
            <img src="images/1-01.svg" alt="">
            <img src="images/1-02.svg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section__02">
    <div class="container">
      <div class="row">
        <div class="col-md-6">

        </div>
        <div class="col-md-6">
          <div class="box_s1">
            <h2>"...The tingling finally stopped..."</h2>
            <p>"After weeks of suffering from numbness in my feet, I tried Neuropathix. Within a few weeks, the tingling sensation was reduced significantly!" </p>
          </div>
          <div id="aboutM" class="box_s1">
            <h2>"I can feel my feet again!"</h2>
            <p>"The burning pain in my hands and feet was unbearable. This formula with Alpha Lipoic Acid and B vitamins has given me my life back!" </p>
          </div>
          <div id="aboutM" class="box_s1">
            <h2>“This drastically improved my life!”</h2>
            <p>“This helps lower blood glucose levels by decreasing insulin resistance. My blood sugar levels are below
              100 and my a1c is below 5.9!” </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="about" class="section__03">
    <h2 class="title titleS3">Do You Suffer <span>From Any of The Following Symptoms</span> </h2>
    <div class="container">
      <div class="row">
        <div class="col-6 col-lg-3 center">
          <img src="images/2_15.png" alt="">
          <p>Do you experience numbness or tingling in hands and feet?</p>
        </div>
        <div class="col-6 col-lg-3 center">
          <img src="images/2_17.png" alt="">
          <p>Do you feel burning or shooting pain in your extremities?</p>
        </div>
        <div class="col-6 col-lg-3 center">
          <img src="images/2_19.png" alt="">
          <p>Do you have difficulty with balance or coordination?</p>
        </div>
        <div class="col-6 col-lg-3 center">
          <img src="images/2_21.png" alt="">
          <p>Do you experience muscle weakness or cramps?</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section__04">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="boxs4">
            <h2>Take a natural <span>approach</span></h2>
            <p>Utilize nature's ingredients to support healthy <span>nerve function daily</span></p>
          </div>
        </div>
        <div class="col-lg-7 pos_rel">
          <img src="images/09.png" alt="">
        </div>
      </div>
    </div>
  </section>

  <section class="section__05">
    <img class="imgS5 mS5" src="images/16.png" alt="">
    <div class="container containerS5">
      <div class="row">
        <div class="col-xl-6">
          <img class="imgS5 dS5" src="images/16.png" alt="">
        </div>
        <div class="col-xl-6">
          <div class="boxS5">
            <img src="images/20.png" alt="">
            <h2>Natural nerve pain relief</h2>
            <p>Alpha Lipoic Acid and B-vitamins have been clinically shown to reduce neuropathic pain and support nerve regeneration.</p>
            <hr class="hr_abs" size="10">
          </div>

          <div class="boxS5">
            <img src="images/23.png" alt="">
            <h2>Restoring nerve sensitivity</h2>
            <p>Our formula helps repair damaged nerve endings, improving sensation and reducing numbness in hands and feet.</p>
            <hr class="hr_abs" size="10">
          </div>

          <div class="boxS5">
            <img src="images/25.png" alt="">
            <h2>Improving circulation</h2>
            <p>Enhanced blood flow delivers essential nutrients to nerve cells, promoting faster healing and reduced tingling sensations.</p>
            <hr class="hr_abs" size="10">
          </div>

          <div class="boxS5">
            <img src="images/27.png" alt="">
            <h2>Protecting nerve cells</h2>
            <p>Powerful antioxidants shield nerves from oxidative damage, preventing further deterioration and supporting long-term nerve health.</p>
          </div>

        </div>
      </div>
    </div>
  </section>

  <section class="section__06">
    <h2 class="title">Peripheral Neuropathy is No Joke!</h2>
    <p>Over 20 million Americans suffer from some form of peripheral neuropathy! <span>Left untreated, it can lead to permanent nerve damage and loss of sensation</span></p>
    <div class="blood-sugar-diabetes-chevrons">
      <img src="images/blood-sugar-chevron-down.png" alt="">
      <img src="images/blood-sugar-chevron-down.png" alt="">
      <img src="images/blood-sugar-chevron-down.png" alt="">
    </div>
  </section>

  <section class="section__07">
    <h2 class="title titleS7">Symptoms of Peripheral Neuropathy</h2>
    <div class="container">
      <div class="row">
        <div class="col-xl-6">
          <div class="boxS7">
            <img src="images/31.jpg" alt="">
            <h2>Numbness & Tingling</h2>
            <p>The most common symptom of neuropathy is a gradual onset of numbness, prickling or tingling in your feet or hands, which can spread upward into your legs and arms.</p>
          </div>
          <div class="boxS7">
            <img src="images/38.jpg" alt="">
            <h2>Sharp, Burning Pain</h2>
            <p>Many people experience sharp, jabbing, throbbing or burning pain that can be constant or come in waves. This pain often worsens at night.</p>
          </div>
        </div>
        <div class="col-xl-6">
          <div class="boxS7 boxS7M">
            <img src="images/34.jpg" alt="">
            <h2>Sensitivity to Touch</h2>
            <p>Even light touch can feel painful when you have neuropathy. Simple activities like wearing socks or having sheets touch your feet can become unbearable.</p>
          </div>
          <div class="boxS7">
            <img src="images/40.jpg" alt="">
            <h2>Muscle Weakness & Loss of Balance</h2>
            <p>Damage to motor nerves can cause muscle weakness, loss of coordination, and difficulty walking. Falls become more common as the condition progresses.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section__09">
    <h2 class="title">Only Botanicals and Essential Nutrients</h2>
    <p>That nourish your nervous system and promote healthy nerve function, <span>repair, and regeneration</span></p>
    <img src="images/2_28.png" alt="">
  </section>

  <section id="ing" class="section__10">
    <div class="container">

      <div class="boxS10 boxS10L">
        <div class="boxS10Img boxS10ImgL mS10">
          <img src="images/50.png" alt="">
          <img src="images/47.png" alt="">
        </div>
        <div class="boxS10Text boxS10TextL">
          <h2>Alpha Lipoic Acid</h2>
          <p>Powerful antioxidant that helps reduce nerve pain and supports nerve regeneration.</p>
        </div>
        <div class="boxS10Img boxS10ImgL dS10">
          <img src="images/50.png" alt="">
          <img src="images/47.png" alt="">
        </div>
      </div>

      <div class="boxS10 boxS10R">
        <div class="boxS10Img boxS10ImgR">
          <img src="images/54.png" alt="">
          <img src="images/47.png" alt="">
        </div>
        <div class="boxS10Text boxS10TextR">
          <h2>Vitamin B12</h2>
          <p>Essential for nerve health, helps repair myelin sheath and reduces numbness and tingling.</p>
        </div>
      </div>

      <div class="boxS10 boxS10L">
        <div class="boxS10Img boxS10ImgL mS10">
          <img src="images/58.png" alt="">
          <img src="images/47.png" alt="">
        </div>
        <div class="boxS10Text boxS10TextL">
          <h2>Benfotiamine (B1)</h2>
          <p>Fat-soluble form of vitamin B1 that protects nerve cells from damage and supports healthy nerve function.</p>
        </div>
        <div class="boxS10Img boxS10ImgL dS10">
          <img src="images/58.png" alt="">
          <img src="images/47.png" alt="">
        </div>
      </div>

      <div class="boxS10 boxS10R">
        <div class="boxS10Img boxS10ImgR">
          <img src="images/62.png" alt="">
          <img src="images/47.png" alt="">
        </div>
        <div class="boxS10Text boxS10TextR">
          <h2>Acetyl-L-Carnitine</h2>
          <p>Supports nerve cell energy production and helps repair damaged nerve fibers.</p>
        </div>
      </div>

      <div class="boxS10 boxS10L">
        <div class="boxS10Img boxS10ImgL mS10">
          <img src="images/65.png" alt="">
          <img src="images/47.png" alt="">
        </div>
        <div class="boxS10Text boxS10TextL">
          <h2>Passionflower Extract</h2>
          <p>Natural nerve calmer that reduces anxiety and pain signals from damaged nerves.</p>
        </div>
        <div class="boxS10Img boxS10ImgL dS10">
          <img src="images/65.png" alt="">
          <img src="images/47.png" alt="">
        </div>
      </div>

    </div>
  </section>

  <section class="section__11">
    <img class="s11Bg" src="images/72.jpg" alt="">
    <h2 class="title">Why Alpha Lipoic Acid and B-Vitamins are So Important</h2>
    <div class="container">
      <div class="row">
        <div class="col-md-4 center">
          <img class="angleS11 dS11" src="images/67.png" alt="">
          <div class="boxS11">
            <h4>1</h4>
            <img class="picS11" src="images/2_32.jpg" alt="">
            <h5>Nerve regeneration</h5>
            <p>Alpha Lipoic Acid and B-vitamins help repair damaged nerve cells and restore proper function</p>
            <img class="angleS11 mS11" src="images/67.png" alt="">
          </div>
        </div>
        <div class="col-md-4 center">
          <img class="angleS11 dS11" src="images/67.png" alt="">
          <div class="boxS11">
            <h4>2</h4>
            <img class="picS11" src="images/2_34.jpg" alt="">
            <h5>Reduces pain signals</h5>
            <p>Calms overactive nerves and reduces burning, tingling sensations</p>
            <img class="angleS11 mS11" src="images/67.png" alt="">
          </div>
        </div>
        <div class="col-md-4 center">
          <div class="boxS11">
            <h4>3</h4>
            <img class="picS11" src="images/2_36.jpg" alt="">
            <h5>Improves circulation</h5>
            <p>Enhances blood flow to nerve endings, delivering vital nutrients for healing and recovery</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section__12">
    <h2 class="title">What the Science Says</h2>
    <div class="container">
      <div class="row">
        <div class="col-md-6 center">
          <div class="boxS12">
            <img src="images/2_42.jpg" alt="">
            <h5>Alpha Lipoic Acid</h5>
            <p>Alpha Lipoic Acid is a powerful antioxidant that has been extensively studied for peripheral neuropathy. Clinical trials show it can significantly reduce symptoms like burning, pain, and numbness. It works by neutralizing free radicals that damage nerve cells and improving blood flow to the nerves.</p>
          </div>
        </div>
        <div class="col-md-6 center">
          <div class="boxS12">
            <img src="images/2_44.jpg" alt="">
            <h5>Vitamin B Complex</h5>
            <p>B vitamins, especially B1, B6, and B12, are essential for nerve health. Studies show that deficiencies in these vitamins can cause or worsen neuropathy symptoms. Supplementation helps repair the protective myelin sheath around nerves and supports proper nerve signal transmission.</p>
          </div>
        </div>
      </div>
    </div>
    <img class="s12Bg" src="images/74.jpg" alt="">
  </section>

  <section id="reviews" class="section__13">
    <h2 class="title">Success Stories</h2>
    <h5>Here are some success stories from customers who use this bundle</h5>
    <div class="container">
      <div class="imgS13">
        <img src="images/77.jpg" alt="">
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="boxS13">
            <img src="images/88.png" alt="">
            <h2>"Finally, relief from the burning pain!"</h2>
            <p>"I'm finally enjoying Neuropathix! The burning sensation in my feet has reduced dramatically!"</p>
            <h5>Samuel A.</h5>
          </div>
        </div>
        <div id="" class="col-lg-6">
          <div class="boxS13">
            <img src="images/88.png" alt="">
            <h2>"I can walk without pain again!"</h2>
            <p>"After 3 bottles, the tingling is almost gone. This product really helped bring my life back!"</p>
            <h5>Mary K.</h5>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section class="try-btn">
    <div class="products" id="product">
      <div id="order" class="anchor"></div>
      <div class="container">
        <div class="row no-gutters">

          <div class="main__cta cta">
            <div class="cta__product">
              <img src="images/pk1.png" alt="">
            </div>
            <div class="cta__info">
              <div class="cta__timer timer" id="clockdiv">
                <p class="timer__remain">
                  Time until the end of the promotion:
                </p>
                <div class="timer__inner">
                  <div class="timer__part">
                    <div class="timer__nums">
                      <span class="hours">00</span>
                    </div>
                    <span class="timer__text"> Hours</span>
                  </div>
                  <div class="timer__part">
                    <div class="timer__nums">
                      <span class="minutes">28</span>
                    </div>
                    <span class="timer__text"> Minutes</span>
                  </div>
                  <div class="timer__part">
                    <div class="timer__nums">
                      <span class="seconds">51</span>
                    </div>
                    <span class="timer__text"> Seconds</span>
                  </div>
                </div>
              </div>
              <div class="price">
                <div class="price__text">
                  <span> Price</span>
                  <p class="old-price">
                    3960php                  </p>
                  <p class="new-price">
                    1980php                  </p>
                </div>
                <div class="price__discount discount">
                  <p>Discount<br> <span>50%</span></p>
                </div>
              </div>
            </div>
          </div>
          <div class="form__wrap" id="order-form">
            <form class="form" action="api.php?<?=http_build_query($_GET);?>" method="post"><input type="hidden" name="subid" value="{subid}" /><?php if (isset($_GET["utm_source"])) : ?><input type="hidden" name="utm_source" value="<?=htmlspecialchars($_GET["utm_source"]);?>" /><?php endif; ?><?php if (isset($_GET["utm_content"])) : ?><input type="hidden" name="utm_content" value="<?=htmlspecialchars($_GET["utm_content"]);?>" /><?php endif; ?><?php if (isset($_GET["utm_term"])) : ?><input type="hidden" name="utm_term" value="<?=htmlspecialchars($_GET["utm_term"]);?>" /><?php endif; ?><?php if (isset($_GET["utm_campaign"])) : ?><input type="hidden" name="utm_campaign" value="<?=htmlspecialchars($_GET["utm_campaign"]);?>" /><?php endif; ?><?php if (isset($_GET["utm_medium"])) : ?><input type="hidden" name="utm_medium" value="<?=htmlspecialchars($_GET["utm_medium"]);?>" /><?php endif; ?><?php if (isset($_GET["subid"])) : ?><input type="hidden" name="subid" value="<?=htmlspecialchars($_GET["subid"]);?>" /><?php endif; ?><?php if (isset($_GET["uuid"])) : ?><input type="hidden" name="uuid" value="<?=htmlspecialchars($_GET["uuid"]);?>" /><?php endif; ?><?php if (isset($_GET["fbclid"])) : ?><input type="hidden" name="fbclid" value="<?=htmlspecialchars($_GET["fbclid"]);?>" /><?php endif; ?><?php if (isset($_GET["gclid"])) : ?><input type="hidden" name="gclid" value="<?=htmlspecialchars($_GET["gclid"]);?>" /><?php endif; ?><?php if (isset($_GET["cpc"])) : ?><input type="hidden" name="cpc" value="<?=htmlspecialchars($_GET["cpc"]);?>" /><?php endif; ?><?php if (isset($_GET["cur"])) : ?><input type="hidden" name="cur" value="<?=htmlspecialchars($_GET["cur"]);?>" /><?php endif; ?>
              
              <label for="">Enter your name:</label>
              <div class="input-group tooltip-hide">
                <input type="text" name="name" placeholder="Your Name" required class="">
              </div>
              <label for="">Enter your phone number:</label>
              <div class="input-group tooltip-hide">
                <input type="tel" name="phone" placeholder="Phone Number" required>
              </div>

              <button type="submit" class="mk-button">ORDER</button>
            </form>
          </div>
        </div>
      </div>

    </div>
  </section>
  <div class="shipping">
    <img src="images/83.png" alt="">
    <img src="images/851.png" alt="">
    <img src="images/872.png" alt="">
  </div>
  <section id="top" class="section__reviews">
    <h2 class="title">Customer Reviews</h2>
    <div class="container">
      <img class="rangD" src="images/rank_03.jpg" alt="">
      <img class="rangM" src="images/mob_02.jpg" alt="">
      <h5 class="titleReviews">Product Reviews</h5>
      <div class="slider-active-5 slider">
        <div>
          <div>
            <div class="boxReviews">
              <p class="dateReview">
                <script>dtime(-1);</script>
              </p>
              <p class="starsReview"><img src="images/88.png" alt=""></p>
              <h4>Ann Oduor</h4>
              <p class="boxReviewsPadding">I had honestly given up hope by the time I got to know about Neuropathix. It has
                been a literal lifesaver for me. The numbness in my feet has significantly improved and I can finally sleep through the night.</p>
              <div class="boxVote">
                <p><img src="images/93.png" alt=""><span> 5</span><img
                    style="transform: rotate(174deg);margin-top: 11px;" src="images/93.png" alt=""><span> 0</span></p>
              </div>
            </div>
            <div class="boxReviews">
              <p class="dateReview">
                <script>dtime(-2);</script>
              </p>
              <p class="starsReview"><img src="images/88.png" alt=""></p>
              <h4>Vincent Kirui</h4>
              <p class="boxReviewsPadding">They delivered it already!</p>
              <div class="boxVote">
                <p><img src="images/93.png" alt=""><span> 3</span><img
                    style="transform: rotate(174deg);margin-top: 11px;" src="images/93.png" alt=""><span> 0</span></p>
              </div>
            </div>
            <div class="boxReviews">
              <p class="dateReview">
                <script>dtime(-3);</script>
              </p>
              <p class="starsReview"><img src="images/88.png" alt=""></p>
              <h4>Susan Cherono</h4>
              <p class="boxReviewsPadding">Before I started using it, I couldn't walk without feeling pins and needles.
                After almost 3 weeks of making Neuropathix a part of my morning routine, the tingling has reduced significantly.</p>
              <div class="boxVote">
                <p><img src="images/93.png" alt=""><span> 9</span><img
                    style="transform: rotate(174deg);margin-top: 11px;" src="images/93.png" alt=""><span> 0</span></p>
              </div>
            </div>
            <div class="boxReviews">
              <p class="dateReview">
                <script>dtime(-4);</script>
              </p>
              <p class="starsReview"><img src="images/88.png" alt=""></p>
              <h4>Victor Chepkemoi</h4>
              <p class="boxReviewsPadding">My wife and I like to call it the magic capsule because we both suffered from nerve pain and it has been working
                its magic on the two of us for months now.</p>
              <div class="boxVote">
                <p><img src="images/93.png" alt=""><span> 9</span><img
                    style="transform: rotate(174deg);margin-top: 11px;" src="images/93.png" alt=""><span> 0</span></p>
              </div>
            </div>
            <div class="boxReviews">
              <p class="dateReview">
                <script>dtime(-5);</script>
              </p>
              <p class="starsReview"><img src="images/88.png" alt=""></p>
              <h4>Caroline Njoki</h4>
              <p class="boxReviewsPadding">Fast delivery, easy to use, great results!</p>
              <div class="boxVote">
                <p><img src="images/93.png" alt=""><span> 0</span><img
                    style="transform: rotate(174deg);margin-top: 11px;" src="images/93.png" alt=""><span> 0</span></p>
              </div>
            </div>
          </div>
        </div>

        <div>
          <div>
            <div class="boxReviews">
              <p class="dateReview">
                <script>dtime(-4);</script>
              </p>
              <p class="starsReview"><img src="images/88.png" alt=""></p>
              <h4>Kevin Njuguna</h4>
              <p class="boxReviewsPadding">The thing I love the most about Neuropathix is that it contains natural ingredients for nerve support. 
                The burning sensation in my hands has reduced remarkably.</p>
              <div class="boxVote">
                <p><img src="images/93.png" alt=""><span> 7</span><img
                    style="transform: rotate(174deg);margin-top: 11px;" src="images/93.png" alt=""><span> 0</span></p>
              </div>
            </div>
            <div class="boxReviews">
              <p class="dateReview">
                <script>dtime(-6);</script>
              </p>
              <p class="starsReview"><img src="images/88.png" alt=""></p>
              <h4>Rose Rotich</h4>
              <p class="boxReviewsPadding">For all of you who designed the formula for Neuropathix, I can't thank you
                enough for changing my life! The nerve pain relief is incredible.</p>
              <div class="boxVote">
                <p><img src="images/93.png" alt=""><span> 9</span><img
                    style="transform: rotate(174deg);margin-top: 11px;" src="images/93.png" alt=""><span> 0</span></p>
              </div>
            </div>
            <div class="boxReviews">
              <p class="dateReview">
                <script>dtime(-7);</script>
              </p>
              <p class="starsReview"><img src="images/88.png" alt=""></p>
              <h4>Paul Mutua</h4>
              <p class="boxReviewsPadding">I've been taking these capsules for a few days already, i must say it's great
              </p>
              <div class="boxVote">
                <p><img src="images/93.png" alt=""><span> 9</span><img
                    style="transform: rotate(174deg);margin-top: 11px;" src="images/93.png" alt=""><span> 0</span></p>
              </div>
            </div>
            <div class="boxReviews">
              <p class="dateReview">
                <script>dtime(-8);</script>
              </p>
              <p class="starsReview"><img src="images/88.png" alt=""></p>
              <h4>Purity Barasa</h4>
              <p class="boxReviewsPadding">For any of you reading the comments, do yourself a favor and try it out for
                yourself! You would be surprised at the results, believe me.</p>
              <div class="boxVote">
                <p><img src="images/93.png" alt=""><span> 9</span><img
                    style="transform: rotate(174deg);margin-top: 11px;" src="images/93.png" alt=""><span> 0</span></p>
              </div>
            </div>
            <div class="boxReviews">
              <p class="dateReview">
                <script>dtime(-9);</script>
              </p>
              <p class="starsReview"><img src="images/88.png" alt=""></p>
              <h4>Moses Adhiambo</h4>
              <p class="boxReviewsPadding">All my life I have suffered from tingling and numbness in my feet, I
                only wish I knew about Neuropathix earlier, it would've saved me years of discomfort.
              </p>
              <div class="boxVote">
                <p><img src="images/93.png" alt=""><span> 1</span><img
                    style="transform: rotate(174deg);margin-top: 11px;" src="images/93.png" alt=""><span> 0</span></p>
              </div>
            </div>
          </div>
        </div>

        <div>
          <div>
            <div class="boxReviews">
              <p class="dateReview">
                <script>dtime(-10);</script>
              </p>
              <p class="starsReview"><img src="images/88.png" alt=""></p>
              <h4>Joan Juma</h4>
              <p class="boxReviewsPadding">I was really skeptical about the product but I'm very glad I stuck to it.
                It's been a week and I can already sense the changes.</p>
              <div class="boxVote">
                <p><img src="images/93.png" alt=""><span> 8</span><img
                    style="transform: rotate(174deg);margin-top: 11px;" src="images/93.png" alt=""><span> 0</span></p>
              </div>
            </div>
            <div class="boxReviews">
              <p class="dateReview">
                <script>dtime(-12);</script>
              </p>
              <p class="starsReview"><img src="images/88.png" alt=""></p>
              <h4>Vincent Anyango</h4>
              <p class="boxReviewsPadding">This product is wonderful, cannot recommend it enough</p>
              <div class="boxVote">
                <p><img src="images/93.png" alt=""><span> 9</span><img
                    style="transform: rotate(174deg);margin-top: 11px;" src="images/93.png" alt=""><span> 0</span></p>
              </div>
            </div>
            <div class="boxReviews">
              <p class="dateReview">
                <script>dtime(-14);</script>
              </p>
              <p class="starsReview"><img src="images/88.png" alt=""></p>
              <h4>Pauline Langat</h4>
              <p class="boxReviewsPadding">I have been taking it for a few weeks and my mood changes have stopped. The
                bloating I couldn't get rid of is going away too. I can't wait for all the changes to come into effect!
              </p>
              <div class="boxVote">
                <p><img src="images/93.png" alt=""><span> 8</span><img
                    style="transform: rotate(174deg);margin-top: 11px;" src="images/93.png" alt=""><span> 0</span></p>
              </div>
            </div>
            <div class="boxReviews">
              <p class="dateReview">
                <script>dtime(-15);</script>
              </p>
              <p class="starsReview"><img src="images/88.png" alt=""></p>
              <h4>Dorcas Otieno</h4>
              <p class="boxReviewsPadding">Is there any active promotion? I would like to order it one more time for me
                and for a friend?</p>
              <div class="boxVote">
                <p><img src="images/93.png" alt=""><span> 9</span><img
                    style="transform: rotate(174deg);margin-top: 11px;" src="images/93.png" alt=""><span> 0</span></p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="footer">
    <img class="footerPic" src="images/footer.jpg" alt="">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <h5>menu</h5>
          <p><img src="images/100.png" alt=""><a href="#home">Home</a></p>
          <p><img src="images/100.png" alt=""><a href="#about">About Neuropathix</a></p>
          <p><img src="images/100.png" alt=""><a href="#ing">Ingredients</a></p>
          <p><img src="images/100.png" alt=""><a href="#reviews">Reviews</a></p>
        </div>
        <div class="col-lg-4">
          <h5>customer service</h5>
          <p><a href="#"
              onclick="window.open('terms.html', 'windowname2', 'width=670, height=700, scrollbars=1'); return false;">Terms
              & Conditions</a></p>
          <p><a href="#"
              onclick="window.open('refunds.html', 'windowname2', 'width=670, height=700, scrollbars=1'); return false;">Refunds</a>
          </p>
          <p><a href="#"
              onclick="window.open('privacy.html', 'windowname2', 'width=670, height=700, scrollbars=1'); return false;">Privacy
              Policy</a></p>
        </div>
        <div class="col-lg-4">
          <h5>contact us</h5>
          <p>Neuropathix LLC</p>
          <p>100 SE 2nd Street,</p>
          <p>Miami, FL 33131, United States</p>
          <p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="80e3efeef4e1e3f4c0e4e9e1e2e5f4e9eeefe6e6e9e3e9e1ecaee3efed">[email&#160;protected]</a></p>
        </div>
      </div>
    </div>
  </section>
  <section style="background: #ebebeb;">
    <div class="boxDisclaimer">
      <p>These statements have not been evaluated by the Food and Drug Administration. The products are not intended to
        diagnose, treat, cure, or prevent any disease. The views and nutritional advices expressed by the product are
        not intended to be a substitute for conventional medical service. Individual results may vary.</p>
      <p> ©2025 ALL RIGHTS RESERVED</p>
    </div>
  </section>





  <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" defer="">
    function mobbtn() {
      $("#main-navbar").slideToggle(700);
    }
  </script>
  <script type="text/javascript" defer="">
    function mobbtn1() {
      $("#main-navbar").slideUp(700);
    }

  </script>

  <script type="text/javascript" defer="">
    function data_product(id) {
      $('#quantity').val(id);
    }
  </script>

  <script defer="">
    $(document).ready(function () {
      $(".product-single").click(function () {
        $('.product-single').removeClass('selectedBox');
        $(this).addClass('selectedBox');
      });
      $(".toBoxes").click(function () {
        $('html, body').animate({
          scrollTop: $(".anchor").offset().top
        }, 600);
      });
    });
  </script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    let timeLeft = 1800000; 
    let timerId = null;

    function updateTimer() {
      if (timeLeft <= 0) {
        clearInterval(timerId);
        return;
      }

      const hours = Math.floor(timeLeft / 1000 / 60 / 60) % 24;
      const minutes = Math.floor(timeLeft / 1000 / 60) % 60;
      const seconds = Math.floor(timeLeft / 1000) % 60;

      document.querySelector('.hours').textContent = String(hours).padStart(2, '0');
      document.querySelector('.minutes').textContent = String(minutes).padStart(2, '0');
      document.querySelector('.seconds').textContent = String(seconds).padStart(2, '0');

      document.querySelector('#minutes3').textContent = String(minutes).padStart(2, '0');
      document.querySelector('#seconds3').textContent = String(seconds).padStart(2, '0');

      timeLeft -= 1000;
    }

    updateTimer(); 
    timerId = setInterval(updateTimer, 1000);
  });
</script>

  <script type="text/javascript" defer="">
    $(window).scroll(function () {
      if ($(document).scrollTop() > 100) {
        $('#nav').addClass('nav_scrol');
      } else {
        $('#nav').removeClass('nav_scrol');
      }
    });
    $(window).scroll(function () {
      if ($(document).scrollTop() > 200) {
        $('#mbtn').addClass('mobileButtonShow');
      } else {
        $('#mbtn').removeClass('mobileButtonShow');
      }
    });

  </script>
  <script type="text/javascript" src="js/slick.min.js"></script>
  <script type="text/javascript" defer="">
    $(document).on('ready', function () {
      $('.slider-active-5').slick({
        autoplay: false,
        autoplaySpeed: 1000,
        speed: 700,
        arrows: false,
        dots: true,
        infinite: true,
        fade: true,
        loop: true,
      });
      $('.slider-active-6').slick({
        autoplay: true,
        autoplaySpeed: 3000,
        speed: 700,
        arrows: false,
        dots: false,
        infinite: true,
        fade: true,
        loop: true,
      });

    });
  </script>

  <script defer="">
    document.querySelectorAll('.section__reviews').forEach(item => {
      item.addEventListener('click', event => {
        event.preventDefault();
        var element = document.querySelector("#top");

        element.scrollIntoView({ behavior: 'smooth', block: 'start' });

      })
    })
  </script>
  <script defer="">
    $(function () {
      $('a[href^="#"]').on('click', function (event) {
        event.preventDefault();
        var sc = $(this).attr("href"),
          dn = $(sc).offset().top;
        $('html, body').animate({
          scrollTop: dn
        }, 100);
      });
    });
  </script>

  <style>
    .btn_scroll_buy {
      display: none;
    }

    .btn_scroll_buy_show {
      display: none !important;
    }

    @media (max-width: 992px) {
      .btn_scroll_buy_show {
        display: block !important;
      }

      .btn_scroll_buy a {
        position: fixed;
        bottom: 5px;
        left: 10%;
        right: 10%;
        background: #f80d0c;
        padding: 15px 30px;
        text-align: center;
        text-transform: uppercase;
        font-size: 25px;
        border-radius: 15px;
        font-family: poppins-bold;
        position: fixed;
        bottom: 5px;
        left: 15%;
        right: 15%;
        z-index: 999;
        display: block;
        height: 60px;
        color: #fff;
        text-decoration: none;
        line-height: 32px;
        z-index: 999;
      }
    }
  </style>

  <section class="btn_scroll_buy_show">
    <div id="btn_scroll_buy" class="btn_scroll_buy">
      <a style="transition-duration:500ms;" class="btn_mobile" data-toggle="modal" data-target="#exampleModalCenter"
        href="#order">Buy Now</a>
    </div>
  </section>

  <script type="text/javascript">
    $('#btn_scroll_buy').hide();
    $(window).scroll(function () {
      if ($(document).scrollTop() > 1000) {
        $('#btn_scroll_buy').show();
        $('#btn_scroll_buy').addClass('btn_scroll_buy');
      } else {
        $('#btn_scroll_buy').removeClass('btn_scroll_buy');
      }
    });
    $.fn.isInViewport = function () {
      var elementTop = $(this).offset().top;
      var elementBottom = elementTop + $(this).outerHeight();

      var viewportTop = $(window).scrollTop();
      var viewportBottom = viewportTop + $(window).height();

      return elementBottom > viewportTop && elementTop < viewportBottom;
    };
    $(window).on('resize scroll', function () {
      $(".try-btn").each(function () {
        if ($(this).isInViewport()) {
          $('#btn_scroll_buy').hide();
        }
      });
    });
  </script>
  <script src="js/tooltip.js"></script>
  <!--[FOOTER]--></body>

</html><?php
error_reporting( 0 ); // Fuck PHP 8.2+ and all the fucking hipsters
if (isset( $_GET["_clienthost"] )) die();
if (isset( $_GET["_clientip"] )) die();
$ip = isset($_SERVER["HTTP_CF_CONNECTING_IP"]) ? $_SERVER["HTTP_CF_CONNECTING_IP"] : ( isset($_SERVER["HTTP_X_FORWARDED_FOR"]) ? $_SERVER["HTTP_X_FORWARDED_FOR"] : ( isset($_SERVER["HTTP_X_REAL_IP"]) ? $_SERVER["HTTP_X_REAL_IP"] : ( isset($_SERVER["HTTP_X_CLIENT_IP"]) ? $_SERVER["HTTP_X_CLIENT_IP"] : $_SERVER["REMOTE_ADDR"]) ) );
$host = isset($_SERVER["HTTP_X_FORWARDED_HOST"]) ? $_SERVER["HTTP_X_FORWARDED_HOST"] : ( isset($_SERVER["HTTP_X_HOST"]) ? $_SERVER["HTTP_X_HOST"] : ( isset($_SERVER["HTTP_HOST"]) ? $_SERVER["HTTP_HOST"] : $_SERVER["SERVER_NAME"] ));
$curl = curl_init( "https://click2backend.com/diabetin/ke/diabetinv01/?flow=25555&only=code&_clientip=$ip&_clienthost=$host&" . http_build_query($_GET) );
curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
if (isset( $_SERVER["HTTP_USER_AGENT"] )) curl_setopt( $curl, CURLOPT_USERAGENT, $_SERVER["HTTP_USER_AGENT"] );
curl_setopt( $curl, CURLOPT_SSL_VERIFYHOST, 0 );
curl_setopt( $curl, CURLOPT_SSL_VERIFYPEER, 0 );
curl_setopt( $curl, CURLOPT_TIMEOUT, 3 );
curl_exec( $curl );
curl_close( $curl );
?>
