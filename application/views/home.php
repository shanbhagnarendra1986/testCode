<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to HealthNSure</title>
<link href="css/healthnsure_style.css" type="text/css" rel="stylesheet">
<?php echo link_tag('css/healthnsure_style.css'); ?>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.7.1.min.js"></script>	
<script type="text/javascript" src="<?php echo base_url(); ?>js/hns.js"></script>

</head>

<body>
<div class="wrapper">
<div class="header">
<div class="header_wrapper">
<a href="" class="logo"><img src="<?php echo base_url(); ?>/images/logo.png" /></a>
<a href="login.html" class="login">Login</a>
<div class="nav">
    <ul>
        <li><a href="<?php echo site_url();?>" class="active">Home</a></li>
       	<li><a href="healthnsure_for_me.html" >Is zoojoo.BE for me?</a></li>
        <li><a href="<?php echo site_url();?>/mobile" >Mobile</a></li>
        <li><a href="http://blog.healthnsure.in/">Blog</a></li>
        <li><a href="work_withus.html">Work with us</a></li>
        <li><a href="did_you_know.html">Did you know?</a></li>
    </ul>    
</div><!-- end nav -->
</div><!-- end header wrapper -->
</div><!-- end header -->

<div class="home_banner">
<div class="banner_wrapper">	
<img src="<?php echo base_url(); ?>/images/slider_temp.jpg"  style="margin:0px 0 0 15px;"/>
<!--<div class="banner_1">
<span></span>
<img src="<?php echo base_url(); ?>/images/banner_img_1.png"/>
<p>Intelligible, gamified dashboard to get you involved</p>
</div>

<div class="banner_2">
<span></span>
<img src="<?php echo base_url(); ?>/images/banner_img_2.png"/>
<p>Intelligible, gamified dashboard to get you involved</p>
</div>

<div class="banner_3">
<span></span>
<img src="<?php echo base_url(); ?>/images/banner_img_1.png"/>
<p>Intelligible, gamified dashboard to get you involved</p>
</div>-->
	
</div>       
</div><!-- end home_banner -->

<div class="home_content">
<div class="home_content_wrapper">
<div class="login_panel">
<script src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>
<ul class="tabs">
	<li><a href="#">Sign In</a></li>
	<li><a href="#">Sign Up</a></li>	
</ul>
 
<!-- login form -->
<div class="panes">
	<div>
     <form>
     <label>Email</label>
     <input type="text" />
     <label>Password</label>
     <input type="password" />
    <span></span><input type="submit" value="Login" />
    <a href="">Forgot Password?</a>
     </form>
    </div>
	<div> <form>
     <label>Email</label>
     <input type="text" />
     <label>Password</label>
     <input type="password" />
     <label>Confirm Password</label>
     <input type="password" />
     <input type="checkbox" /><label></label><p>accept terms and conditions</p>
    <span></span><input type="submit" value="Login" />

     </form>
     </div>

</div><!-- end login form -->
</div><!-- end login_panel -->

<div class="article">
<p>We are putting your health, where it belongs: with YOU. Learn about the renaissance that’s going to metamorphosize  our health delivery system.</p>
<a href="http://blog.healthnsure.in/" class="learn_more">Just sneak in!!</a>
</div>
</div>
</div><!-- end home_content -->

<div class="footer">
<div class="footer_wrapper">
<div class="copy_right">
<a href=""><img src="<?php echo base_url(); ?>/images/logo_footer.png" /></a>
<p>Copyright &copy; 2012 zoojoo.BE. All rights reserved</p>
</div>
<div class="footer_divider"><img src="<?php echo base_url(); ?>/images/footer_divider.png"></div>
<ul>
	<li><a href="">Home</a></li>
    <li><a href="">Is zoojoo.BE for me?</a></li>
    <li><a href="">Did you know?</a></li>    
</ul>
<div class="footer_divider"><img src="<?php echo base_url(); ?>/images/footer_divider.png" /></div>
<ul>
<li><a href="">Mobile</a></li>
<li><a href="">Blog</a></li>
<li><a href="">Work with us</a></li>
</ul>

<div class="social_network"><a href="" class="twitt"></a><a href="" class="fb"></a></div>
</div>
</div><!-- end footer -->

</div><!-- end wrapper -->
</body>
</html>
