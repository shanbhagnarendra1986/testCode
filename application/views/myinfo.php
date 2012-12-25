<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to HealthNSure</title>
<?php echo link_tag('css/healthnsure_style.css'); ?>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.7.1.min.js"></script>
<script src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>
<script src="<?php echo base_url(); ?>js/jquery.screwdefaultbuttonsV2.js"></script>
<?php echo link_tag('css/jquery.selectbox.css'); ?>

</head>

<body>
<div class="wrapper">
<div class="header">
<div class="header_wrapper">
<a href="" class="logo"><img src="<?php echo base_url(); ?>images/logo.png" /></a>
<a href="login.html" class="login">Logout</a>
<span class="username">Welcome User Name</span>
<div class="nav">
    <ul>
        <li><a href="getstarted.html">Mission</a></li>
        <li><a href="myinfo.html" class="active">My Info</a></li>
        <li><a href="report.html" >Report Vault</a></li>        
        <li><a href="analyze.html" >Analyze</a></li>        
    </ul>    
</div><!-- end nav -->
</div><!-- end header wrapper -->
</div><!-- end header -->
<div class="breadcrumb">
<div class="content_wrapper">
<h1>My Info</h1>
<span class="bar_info"></span>
<div class="pro_complete">
<img src="<?php echo base_url(); ?>/images/pro_complete_1.png" />
<p>Your account is <label>0%</label> <br />updated</p>
</div>
</div>
</div><!-- end breadcrumb -->

<div class="page_content">
<div class="content_wrapper">
<div class="myinfo">

<ul class="profile_tabs">
	<li><a href="#">Contact Info</a></li>
	<li><a href="#">Personal Details</a></li>	
    <li><a href="#">Family History</a></li>	
    <li><a href="#">Lifestyle History</a></li>	
</ul>
<div class="profile_panel">
<script src="<?php echo base_url();?>js/jquery.selectbox-0.2.js"></script>
<script type="text/javascript">
		$(function () {
			$("form select").selectbox();
			$("ul.profile_tabs").tabs("div.profile_panel > div.profile_details");
			
		
		/*------- my info family details accordin*/
		$('.open_form').live('click',function(){
				
				$('.family_info form').slideDown(800);
				$(this).removeClass('open_form');
				$(this).addClass('close_form');					
		});
		$('.close_form').live('click',function(){
				
				$('.family_info form').slideUp(800);
				$(this).removeClass('close_form');
				$(this).addClass('open_form');					
		});
			
		});
//validation		
		function validateForm(formName){
		//alert(formName);
//		    alert($("#first_name").val());

		return false;
		}
  $(document).ready(function(){
$("#mobile").val("ASasASasAS")
 // alert($("#mobile").val());

  });

		</script>
	<div class="profile_details">  
	<?php //print_r($country_list); ?>
    <p class="info_txt">Your contact information will help us to validate your account and send you important informations.</p>
    <form method=post action='myinfo' name='myform'>
   
    <label>First Name</label><input type="text" name="first_name" value="<?php echo $first_name;?>" class="required" /><span class=    "valid_error">Enter your name</span>
    <label>Last Name</label><input type="text" name="last_name" value="<?php echo $last_name;?>" class="required" />
    <label>Mobile</label><input type="text" name="mobile" value="<?php echo $mobile;?>" class="required" />
    <label>Address</label><input type="text" name="address" value="<?php echo $address;?>" class="required" />
    <label>City</label><input type="text" name="city" value="<?php echo $city;?>" class="required" />
    <label>Country</label><select name="country" id="country" value="<?php echo $country;?>" class="required" />
	<option value="">Select your country</option>
	<?php foreach ($country_list as $_country){ ?>
	<?php $_sel=$country_sel==$_country->virtuemart_country_id?"selected":""; ?>
	<option value="<?php echo $_country->virtuemart_country_id;?>" <?php echo $_sel;?>><?php echo $_country->country_name; ?></option>
	<?php } ?>
	</select>
		
    <label>State</label><select name="state" id="state" ><option>Select your State</option>
	<?php foreach ($state_list as $_state){ ?>
	<?php $_selState=$state_sel==$_state->virtuemart_state_id?"selected":""; ?>
	<option value="<?php echo $_state->virtuemart_state_id;?>" <?php echo $_selState;?>><?php echo $_state->state_name; ?></option>
	<?php } ?>
	</select>
    <label>Pin/Zip Code</label><input type="text" id="pincode" name="pincode" value="<?php echo $pincode;?>" />
    
    <span class="divider_form"></span><input type="submit"  name="contact_info" value="Update" />
    </form>
	</div><!---- end contact info onclick="return validateForm('myform')"-->
    
    
	
	<div class="profile_details personal_info">  
    <p class="info_txt">Your personal details helps in understanding your results in their context as there are many parameters whose    safe boundries change with your weight, age etc</p>
    <form method=post action='myinfo' name='myform1'>
    <label>Date Of Birth</label>
	<!--<select name="date" id="date"><option>Date</option>
    <option value="<?php echo $dob_dropdown_day;?>" ></option></select>
    <select name="month" id="month"><option>Month</option>
	<option value="<?php echo $dob_dropdown_month;?>" ></option></select>
	<select name="year" id="year"><option>Year</option>
	<option value="<?php echo $dob_dropdown_year;?>" ></option></select>-->
	<?php echo $dob_dropdown_day;?>
	<?php echo $dob_dropdown_month;?>
    <?php echo $dob_dropdown_year;?>	
    <label>Weight</label><input type="text" name='weight' value="<?php echo $weight;?>"/><span class="value_in">Kg</span>
    <label>Height</label><input type="text" name='height' value="<?php echo $height;?>"/><span class="value_in">cm</span>   
    <span class="divider_form"></span><input type="submit" name="personal_info" value="Update" />
    </form>
	</div><!---- end personal info -->
	
	
    
     <div class="profile_details family_info">  
    <p class="info_txt">Your family history hold key to understanding the risks that you are genetically suseptable to. This Information    along with your current reports can provide insights into your interventions.</p>
    <div class="add_details"><p>Add Known and prediagnosed medical conditions of you and your family.</p><span class="open_form"></span>    </div>
    <form>   
    <label>Relation</label>
	<select><option>Select Relation</option>
	<?php echo $relation_dropdown;?>   
    <label>Condition Diagnosed</label><select><option>Select Condition</option></select>
    <label>Age of Diagnosis</label><input type="text" />   
    <span class="divider_form"></span><input type="submit" value="Add" /><input type="submit" value="Cancel" class="cancel" />
    </form>
    <ul class="info_exist">
		<li><p>Known contion of Diabetes diagnosed for Father at age 52. </p><input type="submit" value="Update" /></li>
        <li><p>Known contion of XXXX diagnosed for YYYYY at age ZZ.</p><input type="submit" value="Update" /></li>
	</ul>
	</div><!---- end family info -->

<div class="profile_details life_history">
<p class="info_txt">Your lifestyle history hold key to understanding the risks that you are genetically suseptable to. This Information along with your current reports can provide insights into your interventions.</p>
<script type="text/javascript">
		$(function(){
		
			$('input:radio').screwDefaultButtons({
				image: 'url("<?php echo base_url(); ?>images/radio_1.png")',
				width: 34,
				height: 34
			});		
		});
	</script>
    <form method=post action='myinfo' name='personal_history'>
	<ul>
	<li>Exercise <span></span></li>
    <li>Alcohol <span></span></li>
    <li>Smoking <span></span></li>
</ul>
<ul>
	<li><input type="radio"  name="exercise" value="Heavy" <?php echo($lh_radio_option['exercise']=='Heavy'?'checked':''); ?> /><label>Heavy</label></li>
    <li><input type="radio"  name="alcohol" value="Ocassionally" <?php echo($lh_radio_option['alcohol']=='Ocassionally'?'checked':''); ?> /><label>Ocassionally</label></li>
    <li><input type="radio"  name="smoking" value="< 5 per day" <?php echo($lh_radio_option['smoking']=='< 5 per day'?'checked':''); ?> /><label>< 5 per day</label></li>
</ul>
<ul>
	<li><input type="radio"  name="exercise" value="Moderate" <?php echo($lh_radio_option['exercise']=='Moderate'?'checked':''); ?> /><label>Moderate</label></li>
    <li><input type="radio"  name="alcohol" value="2 glasses per day" <?php echo($lh_radio_option['alcohol']=='2 glasses per day'?'checked':''); ?> /><label>< 2 glasses per day</label></li>
    <li><input type="radio"  name="smoking" value="5 to 10 per day" <?php echo($lh_radio_option['smoking']=='5 to 10 per day'?'checked':''); ?> /><label>5 to 10 per day</label></li>
</ul>
<ul>
	<li><input type="radio"  name="exercise" value="Light" <?php echo($lh_radio_option['exercise']=='Light'?'checked':''); ?> /><label>Light</label></li>
    <li><input type="radio"  name="alcohol" value="> 2 glasses per day" <?php echo($lh_radio_option['alcohol']=='> 2 glasses per day'?'checked':''); ?> /><label>> 2 glasses per day</label></li>
    <li><input type="radio"  name="smoking" value="> 10 per day" <?php echo($lh_radio_option['smoking']=='> 10 per day'?'checked':''); ?> /><label>> 10 per day</label></li>
</ul>
<ul>
	<li><input type="radio"  name="exercise" value="Never" <?php echo($lh_radio_option['exercise']=='Never'?'checked':''); ?> /><label>Never</label></li>
    <li><input type="radio"  name="alcohol" value="Never" <?php echo($lh_radio_option['alcohol']=='Never'?'checked':''); ?>/><label>Never</label></li>
    <li><input type="radio"  name="smoking" value="Never" <?php echo($lh_radio_option['smoking']=='Never'?'checked':''); ?>/><label>Never</label></li>
</ul>




<span class="divider_form"></span>
<input type="submit" value="Update" name="personal_history" />

</form>
</div>

</div>



</div>
</div><!-- end work -->
</div><!--- end page_content -->

<div class="footer">
<div class="footer_wrapper">
<div class="copy_right">
<a href=""><img src="<?php echo base_url(); ?>images/logo_footer.png" /></a>
<p>Copyright &copy; 2012 zoojoo.BE. All rights reserved</p>
</div>
<div class="footer_divider"><img src="<?php echo base_url(); ?>images/footer_divider.png"></div>
<ul>
	<li><a href="">Home</a></li>
    <li><a href="">Is zoojoo.BE for me?</a></li>
    <li><a href="">Did you know?</a></li>    
</ul>
<div class="footer_divider"><img src="<?php echo base_url(); ?>images/footer_divider.png" /></div>
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

