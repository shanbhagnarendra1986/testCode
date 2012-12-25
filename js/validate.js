function trim(str)
   {
     s = str.replace(/^(\s)*/, '');
     s = s.replace(/(\s)*$/, '');
     return s;
   }

/*Check Security Code Beginning*/
var security_code;
function fixedSize(valudx){
security_code=valudx;
}
/*Check Security Code End*/

/*Check terms  Beginning*/
function chk_status(){
document.getElementById('disp').style.display='block';
}
/*Check terms End */
	
/*Check Signup Validation Beginning*/

function validateReg(form) 
{
var namef   	 =	trim(form.fname.value.substring(0,1));
var namel   	 =	trim(form.lname.value.substring(0,1));
var emails		=	trim(form.email.value);
var remails     =   trim(form.remail.value);
var pwd   		=	trim(form.pass.value.substring(0,1));
var cpwd  		=	trim(form.cpass.value.substring(0,1));
/*---------------Check first name----------------- */
if(namef == ""){
	
  inlineMsg('fname','Please Enter the Firstname',2);
  document.getElementById('fname').select();
  document.getElementById('fname').focus();
  return false;
  }
  name_check=/^[a-zA-Z]+$/;
 if(name_check.test(document.getElementById('fname').value)==false){
	  inlineMsg('fname','First Name Should not contain Numeric or Special characters',2);
  document.getElementById('fname').select();
  document.getElementById('fname').focus();
  return false;
  }
  /*---------------Check Last name----------------- */  
  if(namel == ""){
  inlineMsg('lname','Please Enter the Lastname',2);
  document.getElementById('lname').select();
  document.getElementById('lname').focus();
  return false;
  }
  if(name_check.test(document.getElementById('lname').value)==false){
	  inlineMsg('lname','Last Name Should not contain Numeric or Special characters',2);
  document.getElementById('lname').select();
  document.getElementById('lname').focus();
  return false;
  }
  /*---------------Check Email----------------- */
  if(emails == ""){
  inlineMsg('email','Please Enter Email Address',2);
  document.getElementById('email').select();
  document.getElementById('email').focus();
  return false;
  }
  email_check = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;	
  if(email_check.test(document.getElementById('email').value)==false){
	inlineMsg('email','Please Enter Correct Email',2);
    document.getElementById('email').select();
    document.getElementById('email').focus();
	return false;
	} 
  if(remails== ""){
	 inlineMsg('remail','Please Enter Email Address',2);
  document.getElementById('remail').select();
  document.getElementById('remail').focus();
  return false;
  }
  if(email_check.test(document.getElementById('remail').value)==false){
	inlineMsg('remail','Please Enter Correct Email',2);
    document.getElementById('remail').select();
    document.getElementById('remail').focus();
	return false;
	}
  if(document.getElementById('email').value!=document.getElementById('remail').value){
	
  inlineMsg('remail','Please Correct Confirm Email',2);
  document.getElementById('remail').select();
  document.getElementById('remail').focus();
  return false;
  }
	 
	
 if(pwd == ""){
  inlineMsg('pass','Please Enter the Password',2);
  document.getElementById('pass').select();
  document.getElementById('pass').focus();
  return false;
  }
  pwd_check=/^[0-9a-zA-Z]+$/;
  if(pwd_check.test(document.getElementById('pass').value)==false){
	inlineMsg('pass','Password Should not contain Special characters',2);
    document.getElementById('pass').select();
    document.getElementById('pass').focus();
	return false;
	}
 if(document.getElementById('pass').value.length < 6){
  inlineMsg('pass','Please Enter Password more than six character',2);
  document.getElementById('pass').select();
  document.getElementById('pass').focus();
  return false;
  }
  
  
 if(cpwd == ""){
  inlineMsg('cpass','Please Enter the Confirm Password',2);
  document.getElementById('cpass').select();
  document.getElementById('cpass').focus();
  return false;
  } 
 if(document.getElementById('pass').value!=document.getElementById('cpass').value){
	
  inlineMsg('cpass','Please Correct Confirm Password',2);
  document.getElementById('cpass').select();
  document.getElementById('cpass').focus();
  return false;
  }
/*if(namef == ""){
  inlineMsg('fname','Please Enter the Firstname',2);
  document.getElementById('fname').select();
  document.getElementById('fname').focus();
  return false;
  }
 else if(!isNaN(namef)){
  inlineMsg('fname','Firstname should not be numeric.',2);
  document.getElementById("fname").focus();
  return false;
  }
  if(namel == ""){
  inlineMsg('fname','Please Enter the Lastname.',2);
  document.getElementById('lname').select();
  document.getElementById('lname').focus();
  return false;
  }
 else if(!isNaN(namel)){
  inlineMsg('lname','Lastname Should not be numeric.',2);
  document.getElementById("lname").focus();
  return false;
  }*/
}
//signup validation Ends here
//Contact us form fields validation starts here
function validateContact(form)
{
	var contname    =trim(form.name.value);
	var contemail   =trim(form.email.value);
	var contsub     =trim(form.subj.value);
	var contmes     =trim(form.message.value);
	 if(contname == ""){
	  inlineMsg('name','Please Enter the Name',2);
	  document.getElementById('name').select();
	  document.getElementById('name').focus();
	  return false;
 	 }
	 name_check=/^[a-zA-Z]+$/;
 if(name_check.test(document.getElementById('name').value)==false){
	  inlineMsg('name','Name Should not contain Numeric or Special characters',2);
  document.getElementById('name').select();
  document.getElementById('name').focus();
  return false;
  }
	 if(contemail == ""){
	  inlineMsg('email','Please Enter Email Id',2);
	  document.getElementById('email').select();
	  document.getElementById('email').focus();
	  return false;
 	 }
	 email_check = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;	
  	if(email_check.test(document.getElementById('email').value)==false){
	inlineMsg('email','Please enter Correct Email',2);
    document.getElementById('email').select();
    document.getElementById('email').focus();
	return false;
	} 
	 if(contsub == ""){
	  inlineMsg('subj','Please Enter Subject',2);
	  document.getElementById('subj').select();
	  document.getElementById('subj').focus();
	  return false;
 	 }
	 if(contmes== ""){
	  inlineMsg('message','Please Enter Message',2);
	  document.getElementById('message').select();
	  document.getElementById('message').focus();
	  return false;
 	 }
}
//Contact us form fields validation Ends here
//Login form fields validation starts here
function validateLog(form) 
{
var logemail		=	trim(form.emailid.value);
var logpwd   		=	trim(form.pass1.value.substring(0,1));


 if(logemail == ""){
  inlineMsg('emailid','Please Enter Email Id',2);
  document.getElementById('emailid').select();
  document.getElementById('emailid').focus();
  return false;
  }
  email_check = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;	
 if(email_check.test(document.getElementById('emailid').value)==false){
	inlineMsg('emailid','Please Enter Correct Email',2);
    document.getElementById('emailid').select();
    document.getElementById('emailid').focus();
	return false;
	} 
	
 if(logpwd == ""){
  inlineMsg('pass1','Please Enter the Password',2);
  document.getElementById('pass1').select();
  document.getElementById('pass1').focus();
  return false;
  }
}
//login form fields validation Ends here
//Forgot Password form fields validation starts here
function validateFor(form) 
{
	var forpwd   		=	trim(form.forpwd.value.substring(0,1));


 if(forpwd == ""){
  inlineMsg('forpwd','Please Enter Email Id',2);
  document.getElementById('forpwd').select();
  document.getElementById('forpwd').focus();
  return false;
  }
  email_check = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;	
 if(email_check.test(document.getElementById('forpwd').value)==false){
	inlineMsg('forpwd','Please Enter Correct Email',2);
    document.getElementById('forpwd').select();
    document.getElementById('forpwd').focus();
	return false;
	} 
}
//Forgot Password form fields validation Ends here
//Upload video form fields validation starts here
function validatevideo(form) 
{
var vtitle		=	trim(form.title.value);
var vdescription   		=	trim(form.description.value.substring(0,1));
var vtag  		=	trim(form.tag.value.substring(0,1));
var vcategory   	 =	trim(form.category.value);
if(vtitle == ""){
  inlineMsg('title','Please enter the Title',2);
  document.getElementById('title').select();
  document.getElementById('title').focus();
  return false;
  }
 
  if(vdescription == ""){
  inlineMsg('description','Please enter the description',2);
  document.getElementById('description').select();
  document.getElementById('description').focus();
  return false;
  }
  if(vcategory == 0){
  inlineMsg('category','Please select the Category',2);
  return false;	  
  } 

 if(vtag == ""){
  inlineMsg('tag','Please enter Tag',2);
  document.getElementById('tag').select();
  document.getElementById('tag').focus();
  return false;
  }
  	var ext = document.getElementById("video_upload").value;
	ext1=ext.split(".");
	ext=ext1[ext1.length-1];
	ext = ext.toLowerCase();
	
	b=document.upvideo.video_upload; 
	
	/*if(document.getElementById("video").value=="")
	{
		document.getElementById('video_error').innerHTML ="Select a video.";
		return false;
	
	}
	
	else */
	if(document.getElementById("video_upload").value!="")
	{
		
		varRe=new Array(/\.avi$/i,/\.wmv$/i,/\.mov$/i,/\.asf$/i,/\.mpg$/i,/\.mpeg$/i,/\.mp4$/i,/\.mpe$/i,/\.mov$/i,/\.flv$/i);
		var validVD=0;
		for(i=0;i<varRe.length;i++)
		{ 
			if(varRe[i].test(b.value)==true)
			{ 
				validVD=1; 
				break; 
			} 
		}
		
		if(validVD==0) 
		{ 
			inlineMsg('video_upload','Upload file should be in video format',2);
  			document.getElementById('video_upload').select();
  			document.getElementById('video_upload').focus();
 			return false;
		
		}
		

	}

	

}
//Upload video form fields validation Ends here

function validateblogcomment(form) 
{
	
var blogcom		=	trim(form.blog_comment.value);

if(blogcom == ""){
	
  inlineMsg('blog_comment','Please Enter the Comments.',2);
  document.getElementById('blog_comment').select();
  document.getElementById('blog_comment').focus();
  return false;
  }
 
}
function blogvalidation(form) 
{
var btit	=	trim(form.btitle.value);
var bdesc=	trim(form.bdescription.value);
if(btit == "")
{
  inlineMsg('btitle','Please enter the Title',2);
  document.getElementById('btitle').select();
  document.getElementById('btitle').focus();
  return false;
  }
 
  if(bdesc == "")
  {
  inlineMsg('bdescription','Please enter the description',2);
  document.getElementById('bdescription').select();
  document.getElementById('bdescription').focus();
  return false;
  }
}

var MSGTIMER = 20;
var MSGSPEED = 10;
var MSGOFFSET = 3;
var MSGHIDE = 3;

// build out the divs, set attributes and call the fade function //
function inlineMsg(target,string,autohide) {
  var msg;
  var msgcontent;
  if(!document.getElementById('msg')) {
    msg = document.createElement('div');
    msg.id = 'msg';
    msgcontent = document.createElement('div');
    msgcontent.id = 'msgcontent';
    document.body.appendChild(msg);
    msg.appendChild(msgcontent);
    msg.style.filter = 'alpha(opacity=0)';
    msg.style.opacity = 0;
    msg.alpha = 0;
  } else {
    msg = document.getElementById('msg');
    msgcontent = document.getElementById('msgcontent');
  }
  msgcontent.innerHTML = string;
  msg.style.display = 'block';
  var msgheight = msg.offsetHeight;
  var targetdiv = document.getElementById(target);
  targetdiv.focus();
  var targetheight = targetdiv.offsetHeight;
  var targetwidth = targetdiv.offsetWidth;
  var topposition = topPosition(targetdiv) - ((msgheight - targetheight) / 2);
  var leftposition = leftPosition(targetdiv) + targetwidth + MSGOFFSET;
  msg.style.top = topposition + 'px';
  msg.style.left = leftposition + 'px';
  clearInterval(msg.timer);
  msg.timer = setInterval("fadeMsg(1)", MSGTIMER);
  if(!autohide) {
    autohide = MSGHIDE;  
  }
  window.setTimeout("hideMsg()", (autohide * 1000));
}

// hide the form alert //
function hideMsg(msg) {
  var msg = document.getElementById('msg');
  if(!msg.timer) {
    msg.timer = setInterval("fadeMsg(0)", MSGTIMER);
  }
}

// face the message box //
function fadeMsg(flag) {
  if(flag == null) {
    flag = 1;
  }
  var msg = document.getElementById('msg');
  var value;
  if(flag == 1) {
    value = msg.alpha + MSGSPEED;
  } else {
    value = msg.alpha - MSGSPEED;
  }
  msg.alpha = value;
  msg.style.opacity = (value / 100);
  msg.style.filter = 'alpha(opacity=' + value + ')';
  if(value >= 99) {
    clearInterval(msg.timer);
    msg.timer = null;
  } else if(value <= 1) {
    msg.style.display = "none";
    clearInterval(msg.timer);
  }
}

// calculate the position of the element in relation to the left of the browser //
function leftPosition(target) {
  var left = 0;
  if(target.offsetParent) {
    while(1) {
      left += target.offsetLeft;
      if(!target.offsetParent) {
        break;
      }
      target = target.offsetParent;
    }
  } else if(target.x) {
    left += target.x;
  }
 // return left-parseInt(500);
  return left;
}

// calculate the position of the element in relation to the top of the browser window //
function topPosition(target) {
  var top = 0;
  if(target.offsetParent) {
    while(1) {
      top += target.offsetTop;
      if(!target.offsetParent) {
        break;
      }
      target = target.offsetParent;
    }
  } else if(target.y) {
    top += target.y;
  }
  return top;
}

// preload the arrow //
if(document.images) {
  arrow = new Image(7,80); 
  
  arrow.src = "images/msg_arrow.gif"; 
}
