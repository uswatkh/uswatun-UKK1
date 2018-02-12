<!DOCTYPE html>
<html lang="en">
<head>
<title>AirLines</title>
<meta charset="utf-8">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css" media="all">
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.5.2.js" ></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/cufon-yui.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/cufon-replace.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/Cabin_400.font.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/tabs.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.jqtransform.js" ></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/atooltip.jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/script.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<style type="text/css">.main, .tabs ul.nav a, .content, .button1, .box1, .top { behavior:url("../js/PIE.htc")}</style>
<![endif]-->
</head>
<body id="page1">
<div class="main">
  <!--header -->
  <header>
    <div class="wrapper">
      <h1><a href="index.html" id="logo">AirLines</a></h1>
      <span id="slogan">Fast, Frequent &amp; Safe Flights</span> 
      <nav id="top_nav">
        <ul>
          <li><a href="index.html" class="nav1">Home</a></li>
          <li><a href="#" class="nav2">Sitemap</a></li>
          <li><a href="contacts.html" class="nav3">Contact</a></li>
        </ul>
      </nav>
    </div>
    <nav>
      <ul id="menu">
        <li id="menu_active"><a href="index.html"><span><span>About</span></span></a></li>
        <li><a href="<?php echo base_url(); ?>assets/offers.html"><span><span>Offers</span></span></a></li>
        <li><a href="<?php echo base_url(); ?>assets/book.html"><span><span>Book</span></span></a></li>
        <li><a href="<?php echo base_url(); ?>assets/services.html"><span><span>Services</span></span></a></li>
        <li><a href="<?php echo base_url(); ?>assets/safety.html"><span><span>Safety</span></span></a></li>
        <li class="end"><a href="<?php echo base_url(); ?>assets/contacts.html"><span><span>Contacts</span></span></a></li>
      </ul>
    </nav>
  </header>
  <!-- / header -->
  <!--content -->
  <section id="content">
    <div class="for_banners">
      <article class="col1">
        <div class="tabs">
          <ul class="nav">
            <li class="selected"><a href="#Flight">Flight</a></li>
            <li><a href="#Hotel">Hotel</a></li>
            <li class="end"><a href="#Rental">Rental</a></li>
          </ul>
          <div class="content">
            <div class="tab-content" id="Flight">
              <form id="form_1" action="#" method="post">
                <div>
                  <div class="radio">
                    <div class="wrapper">
                      <input type="radio" name="name1" checked>
                      <span class="left">Standard</span>
                      <input type="radio" name="name1">
                      <span class="left">World Map</span> </div>
                  </div>
                  <div class="row"> <span class="left">From</span>
                    <input type="text" class="input">
                  </div>
                  <div class="row"> <span class="left">To</span>
                    <input type="text" class="input">
                  </div>
                  <div class="wrapper">
                    <div class="col1">
                      <div class="row"> <span class="left">Outbound</span>
                        <input type="text" class="input1" value="03.05.2011"  onblur="if(this.value=='') this.value='03.05.2011'" onFocus="if(this.value =='03.05.2011' ) this.value=''">
                      </div>
                      <div class="row"> <span class="left">Return</span>
                        <input type="text" class="input1" value="10.05.2011"  onblur="if(this.value=='') this.value='10.05.2011'" onFocus="if(this.value =='10.05.2011' ) this.value=''">
                      </div>
                    </div>
                    <input type="text" class="input1 marg_top1" value="+/- 0 Days"  onblur="if(this.value=='') this.value='+/- 0 Days'" onFocus="if(this.value =='+/- 0 Days' ) this.value=''">
                  </div>
                  <div class="row"> <span class="left">Adults</span>
                    <input type="text" class="input2" value="2"  onblur="if(this.value=='') this.value='2'" onFocus="if(this.value =='2' ) this.value=''">
                  </div>
                  <div class="row"> <span class="left">Children</span>
                    <input type="text" class="input2" value="0"  onblur="if(this.value=='') this.value='0'" onFocus="if(this.value =='0' ) this.value=''">
                    <span class="pad_left1">(0-11 years)</span> </div>
                  <div class="wrapper"> <span class="right relative"><a href="#" class="button1"><strong>Search</strong></a></span> <a href="#" class="link1">More Options</a> </div>
                </div>
              </form>
            </div>
            <div class="tab-content" id="Hotel">
              <form id="form_2" action="#" method="post">
                <div>
                  <div class="radio">
                    <div class="wrapper">
                      <input type="checkbox" checked>
                      Our Partners </div>
                  </div>
                  <div class="row"> <span class="left">Location</span>
                    <input type="text" class="input">
                  </div>
                  <div class="row"> <span class="left">Check-in </span>
                    <input type="text" class="input1" value="03.05.2011"  onblur="if(this.value=='') this.value='03.05.2011'" onFocus="if(this.value =='03.05.2011' ) this.value=''">
                    <a href="#" class="help"></a> </div>
                  <div class="row"> <span class="left">Check-out </span>
                    <input type="text" class="input1" value="10.05.2011"  onblur="if(this.value=='') this.value='10.05.2011'" onFocus="if(this.value =='10.05.2011' ) this.value=''">
                    <a href="#" class="help"></a> </div>
                  <div class="row"> <span class="left">Rooms</span>
                    <input type="text" class="input2" value="1"  onblur="if(this.value=='') this.value='1'" onFocus="if(this.value =='1' ) this.value=''">
                    <a href="#" class="help"></a> </div>
                  <div class="row"> <span class="left">Adults</span>
                    <input type="text" class="input2" value="2"  onblur="if(this.value=='') this.value='2'" onFocus="if(this.value =='2' ) this.value=''">
                  </div>
                  <div class="row"> <span class="left">Children</span>
                    <input type="text" class="input2" value="0"  onblur="if(this.value=='') this.value='0'" onFocus="if(this.value =='0' ) this.value=''">
                    <span class="pad_left1">(0-11 years)</span> </div>
                  <div class="wrapper"> <span class="right relative"><a href="#" class="button1"><strong>Search</strong></a></span> <a href="#" class="link1">More Options</a> </div>
                </div>
              </form>
            </div>
            <div class="tab-content" id="Rental">
              <form id="form_3" action="#" method="post">
                <div>
                  <div class="radio">
                    <div class="wrapper">
                      <input type="radio" name="name2" checked>
                      <span class="left">Avis</span>
                      <input type="radio" name="name2">
                      <span class="left">Europcar</span> </div>
                  </div>
                  <div class="row"> <span class="left">Rental location</span>
                    <input type="text" class="input">
                  </div>
                  <div class="row"> <span class="left">Pick-up</span>
                    <input type="text" class="input1" value="03.05.2011"  onblur="if(this.value=='') this.value='03.05.2011'" onFocus="if(this.value =='03.05.2011' ) this.value=''">
                    <input type="text" class="input2" value="12:00"  onblur="if(this.value=='') this.value='12:00'" onFocus="if(this.value =='12:00' ) this.value=''">
                  </div>
                  <div class="row"> <span class="left">Return</span>
                    <input type="text" class="input1" value="10.05.2011"  onblur="if(this.value=='') this.value='10.05.2011'" onFocus="if(this.value =='10.05.2011' ) this.value=''">
                    <input type="text" class="input2" value="12:00"  onblur="if(this.value=='') this.value='12:00'" onFocus="if(this.value =='12:00' ) this.value=''">
                  </div>
                  <div class="row_select"> <span class="left">Miles &amp; More</span>
                    <select>
                      <option>no membership</option>
                    </select>
                  </div>
                  <div class="row_select">
                    <div class="pad_left1"> Country of residence<br>
                      <div class="select1">
                        <select>
                          <option>&nbsp;</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="wrapper"> <span class="right relative"><a href="#" class="button1"><strong>Search</strong></a></span> </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </article>

</script>
</body>
</html>