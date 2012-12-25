// JavaScript Document

$(document).ready(function(){
						   
						   
	/*------ home page login tab --------*/						   
		$(function() {    
			$("ul.tabs").tabs("div.panes > div");
			/*------ my info tab --------*/	
			
			/*------ report analyze tab --------*/	
			$("ul.profile_tabs").tabs("div.analyze_panel > div.analyze_report");
			/*------ report analyze tab --------*/	
			$("ul.report_tab").tabs("div.report_panel > div.report_analyze");
			/*------ report analyze tab --------*/	
			$("ul.mission_tab").tabs("div.mission_content > div.mission_main");
		});					   
						   
						   
	/*------ login page(signup hide and show) --------*/						   
						   
		$('.slide_down').live('click', function (e) {
				 e.stopPropagation();
				 e.preventDefault();
				 $(".slide_up").delay(1000).fadeIn(400);
				 $('.signup_content form').animate({'height': "460px",}, 800 );	
				 $(this).delay(900).fadeOut(200);
		});		
		$('.slide_up').live('click', function (e) {
				 e.stopPropagation();
				 e.preventDefault();
				 $(".slide_down").delay(1000).fadeIn(400);
				 $('.signup_content form').animate({'height': "1px",}, 800 );	
				 $(this).delay(900).fadeOut(200);
		});		
		
	
	  
						   
	
								   
				   
						   
						   
						   
						   
						   
						   
						   
						   
						   
						   
						   
						   
});