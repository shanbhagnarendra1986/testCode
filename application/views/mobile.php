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
<a href="" class="logo"><img src="<?php echo base_url(); ?>/images//logo.png" /></a>
<a href="login.html" class="login">Login</a>
<div class="nav">
   <ul>
        <li><a href="<?php echo site_url();?>" >Home</a></li>
       	<li><a href="healthnsure_for_me.html" >Is zoojoo.BE for me?</a></li>
        <li><a href="<?php echo site_url();?>/mobile" class="active">Mobile</a></li>
        <li><a href="http://blog.healthnsure.in/">Blog</a></li>
        <li><a href="work_withus.html">Work with us</a></li>
        <li><a href="did_you_know.html">Did you know?</a></li>
    </ul>    
</div><!-- end nav -->
</div><!-- end header wrapper -->
</div><!-- end header -->
<div class="breadcrumb">
<div class="content_wrapper">
<h1>Mobile</h1>
<span class="bar_mobile"></span>
</div>
</div><!-- end breadcrumb -->

<div class="page_content">
<div class="content_wrapper mobile">
<h1 class="common_head"><span>Hooray! </span>We know it is for you but why don't you find that yourself.</h1>
<div class="mobile_left">
    <ul>
    	<li>update your health info</li>
        <li>upload your reports</li>
        <li>analyse your results</li>
        <li>take various challenges</li>
    </ul>
    <p>from the convinience of your smartphone</p>
</div>
<div class="mobile_right">
<img src="<?php echo base_url(); ?>/images/mobile.jpg" />
<img src="<?php echo base_url(); ?>/images/available_on.png" class="on_available" />
</div>
<h2>Track your health in realtime. It powerful, and its just the beginning.</h2>
</div><!-- end mobile -->
</div><!--- end page_content -->

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
