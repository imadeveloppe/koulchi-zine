<?php
$acx_csma_meta_title =get_option('acx_csma_meta_title');
$acx_csma_meta_description=get_option('acx_csma_meta_description');
$acx_csma_meta_keywords=get_option('acx_csma_meta_keywords');
	$favicon_attach_id = get_option('acx_csma_favicon');
			$acx_csma_favicon = $favicon_attach_id;
			if(is_numeric($favicon_attach_id))
			{
				$fav_icon_attachment_url = parse_url( wp_get_attachment_url($favicon_attach_id) );
				$acx_csma_favicon    = $fav_icon_attachment_url [ 'scheme' ]  . '://' .rawurlencode( basename( $fav_icon_attachment_url[ 'host' ])). $fav_icon_attachment_url[ 'path' ];
			}
$acx_csma_start_date_time=get_option('acx_csma_start_date_time');
$acx_csma_date_time=get_option('acx_csma_date_time');
$acx_csma_appearence_array_5=get_option('acx_csma_appearence_array');
if(is_serialized($acx_csma_appearence_array_5 ))
{
	$acx_csma_appearence_array_5 = unserialize($acx_csma_appearence_array_5); 
}
	$acx_csma_timestamp=current_time('timestamp');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
if($acx_csma_meta_title!="")
{
?>
<title><?php echo stripslashes($acx_csma_meta_title); ?></title>
<?php
}
if($acx_csma_meta_description!="")
{
?>
<meta name="description" content="<?php echo stripslashes($acx_csma_meta_description); ?>">
<?php
}
if($acx_csma_meta_keywords!="")
{
?>
<meta name="keywords" content="<?php echo stripslashes($acx_csma_meta_keywords); ?>">
<?php
}
?>
<link href="<?php echo plugins_url('style.css', __FILE__); ?>" rel="stylesheet" type="text/css" />
<link rel="icon" href="<?php echo esc_url($acx_csma_favicon); ?>"  type="image/png">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<?php echo stripslashes(get_option('acx_csma_ga_trakng_code')); ?>
</head>

<body style="background:<?php echo $acx_csma_appearence_array_5['5']['acx_csma_bgcolor5']; ?>">
<?php if(array_key_exists('acx_csma_logo_choice',$acx_csma_appearence_array_5['5'])){ if($acx_csma_appearence_array_5['5']['acx_csma_logo_choice']=="text")
{
$new_class="text_logo";
} else
{
$new_class="";
}}else
{
$new_class="";
}
?>
	<div class="wrapper <?php echo $new_class; ?>"> 
		<div class="canvas1000"> 
			<div id="header"> 
			
				<?php if(array_key_exists('acx_csma_logo_choice',$acx_csma_appearence_array_5['5'])){ if($acx_csma_appearence_array_5['5']['acx_csma_logo_choice']=="image" || $acx_csma_appearence_array_5['5']['acx_csma_logo_choice']==""){ 
				$acx_csma_logo5_id = $acx_csma_appearence_array_5['5']['acx_csma_logo5'];
					$logo5_url  = $acx_csma_logo5_id;
					if(is_numeric($acx_csma_logo5_id))
					{
						$logo5_attachment_url = parse_url( wp_get_attachment_url($acx_csma_logo5_id) );
						$logo5_url    = $logo5_attachment_url [ 'scheme' ]  . '://' .rawurlencode( basename( $logo5_attachment_url[ 'host' ])). $logo5_attachment_url[ 'path' ];
					}
				?>
			<img src="<?php echo $logo5_url; ?>" alt="Logo"> 
			<?php } else if($acx_csma_appearence_array_5['5']['acx_csma_logo_choice']=="text")
			{?>
				<div class="logo_text" style="color:<?php  echo $acx_csma_appearence_array_5['5']['acx_csma_logo_text_color5']; ?>"><?php echo $acx_csma_appearence_array_5['5']['acx_csma_logo_text5']; ?></div>
				<?php } } ?>
			</div><!-- header -->	
			<div class="inline_block mg_top" style="background:<?php echo $acx_csma_appearence_array_5['5']['acx_csma_inside_bg_color5']; ?>"> 
				<h2 style="color:<?php echo $acx_csma_appearence_array_5['5']['acx_csma_title_color5']; ?>"><?php echo $acx_csma_appearence_array_5['5']['acx_csma_title5']; ?></h2>
				
				
				<?php
				$acx_csma_custom_html_top_temp5 = $acx_csma_appearence_array_5['5']['acx_csma_custom_html_top_temp5'];
				if($acx_csma_custom_html_top_temp5 != "") { ?>
				<div class="acx_csma_content_div acx_csma_top acx_csma_top_5">
				<?php echo $acx_csma_custom_html_top_temp5; ?>
				</div>
				<?php } ?>
				
				<?php if($acx_csma_appearence_array_5['5']['acx_csma_show_timer5']==1)
				{?>
				<div class="inline_block timer_holder"> 
	<!-- Start: The Countdown -->
		<div class="custom-container">

		<ul id="countdown" class="count_down">
			<li>
			<div class="weeks" id="week" style="color:<?php echo $acx_csma_appearence_array_5['5']['acx_csma_timer_iptext_color5']; ?>">00</div>
			<div class="textWeeks" id="names" style="color:<?php echo $acx_csma_appearence_array_5['5']['acx_csma_timer_head_color5']; ?>">Weeks</div>
			</li>

			<li>
			<div class="days" id="day" style="color:<?php echo $acx_csma_appearence_array_5['5']['acx_csma_timer_iptext_color5']; ?>">00</div>
			<div class="textDays" id="names" style="color:<?php echo $acx_csma_appearence_array_5['5']['acx_csma_timer_head_color5']; ?>">Days</div>
			</li>

			<li>
			<div class="hours" id="hour" style="color:<?php echo $acx_csma_appearence_array_5['5']['acx_csma_timer_iptext_color5']; ?>">00</div>
			<div class="textHours" id="names" style="color:<?php echo $acx_csma_appearence_array_5['5']['acx_csma_timer_head_color5']; ?>">Hours</div>
			</li>

			<li>
			<div class="minutes" id="minute" style="color:<?php echo $acx_csma_appearence_array_5['5']['acx_csma_timer_iptext_color5']; ?>">00</div>
			<div class="textMinutes" id="names" style="color:<?php echo $acx_csma_appearence_array_5['5']['acx_csma_timer_head_color5']; ?>">Minutes</div>
			</li>
			
			<li>
			<div class="seconds" id="second" style="color:<?php echo $acx_csma_appearence_array_5['5']['acx_csma_timer_iptext_color5']; ?>">00</div>
			<div class="textSeconds" id="names" style="color:<?php echo $acx_csma_appearence_array_5['5']['acx_csma_timer_head_color5']; ?>">Seconds</div>
			</li>

		</ul> <!-- /#countdown -->

		 </div> <!-- /.custom-container -->
      <!-- End: The Countdown -->	
				</div><!-- timer_holder -->
				<?php
				}?>
				<?php  if($acx_csma_appearence_array_5['5']['acx_csma_show_progressbar5']==1)
				{?>
				<div class="pre_loader" style="border: 1px solid <?php echo $acx_csma_appearence_array_5['5']['acx_csma_progress_bar_color5']; ?>"> 	
				<div class="pre_loader_inside" id="pre_loader_inside" style="background:green;position:absolute;top: 0; left: 0; width:0%; height:inherit;">
				</div><!-- pre_loader_inside -->
				<div class="pre_loader_text" id="pre_loader_text" style=" z-index:10px;top: 0; left: 0; width: 100%; height: 100%; color: black; font-weight: bold; text-align: center;position:absolute;">0%</div><!-- pre_loader_text -->
				</div><!-- pre_loader -->
				<?php }?>
				<?php
				$acx_csma_custom_html_bottom_temp5 = $acx_csma_appearence_array_5['5']['acx_csma_custom_html_bottom_temp5'];
				if($acx_csma_custom_html_bottom_temp5 != "") { ?>
				<div class="acx_csma_content_div acx_csma_bottom acx_csma_bottom_5">
				<?php echo $acx_csma_custom_html_bottom_temp5; ?>
				</div>
				<?php } ?>
				
				<h3><?php echo $acx_csma_appearence_array_5['5']['acx_csma_subscribe_main_title5']; ?> <br/> <?php echo $acx_csma_appearence_array_5['5']['acx_csma_subscribe_title5']; ?></h3>			
				
			</div><!-- inline_block -->
			<div class="footer" style="background:<?php echo $acx_csma_appearence_array_5['5']['acx_csma_subscribe_bg_color5']; ?>"> 
				<form name="acx_csma_form" method="post" action="<?php echo str_replace( '%7E', '~',$_SERVER['REQUEST_URI']); ?>">  
				<div id="acx_csma_success"  name="acx_csma_success"style="display:none;color:white;" ><?php echo $acx_csma_appearence_array_5['5']['acx_csma_subscribe_success5']; ?></div>
				<div id="acx_csma_invalid" name="acx_csma_invalid"style="display:none;color:white;" ><?php echo $acx_csma_appearence_array_5['5']['acx_csma_subscribe_invalid5']; ?></div>
				<div id="acx_csma_error" style="color:white;"></div>
				<input type="text" id="acx_csma_name_hidden" name="acx_csma_name_hidden" value="" placeholder="Enter Your Name Here"/>
				<input type="hidden" id="acx_csma_email" name="email" placeholder="Enter your e-mail address" > 
				<input type="button" value="NEXT" id="acx_csma_submit" onclick="acx_csma_validate_email();" class="submit">
				<div class="scmi"> 
				<ul>
				<?php if($acx_csma_appearence_array_5['5']['acx_csma_fb_link5']!="")
					{
					?>
					<li><a href="<?php echo esc_url($acx_csma_appearence_array_5['5']['acx_csma_fb_link5']); ?>"><img src="<?php echo plugins_url('images/facebook.png', __FILE__); ?>" alt="Logo"></a></li>
					<?php
					}
					if($acx_csma_appearence_array_5['5']['acx_csma_twitter_link5']!="")
					{
					?>
					<li><a href="<?php echo esc_url($acx_csma_appearence_array_5['5']['acx_csma_twitter_link5']); ?>"><img src="<?php echo plugins_url('images/twitter.png', __FILE__); ?>" alt="Logo"></a></li>
					<?php
					}
					if($acx_csma_appearence_array_5['5']['acx_csma_linkedin_link5']!="")
					{?>
					<li style="margin-right: 0;"><a href="<?php echo esc_url($acx_csma_appearence_array_5['5']['acx_csma_linkedin_link5']); ?>"><img src="<?php echo plugins_url('images/linkedin.png', __FILE__); ?>" alt="Logo"></a></li>
					<?php
					}?>
					
				</ul>
				</div><!-- scmi -->	
			</div><!-- footer -->
		</div><!-- canvas1000 -->
	</div><!-- wrapper -->
<script>
var acx_csma_form_status=1;
function acx_csma_validate_email()
{
	var acx_csma_name_hidden=document.getElementById('acx_csma_name_hidden').value;
	if(acx_csma_form_status== 1)
	{
	if(acx_csma_name_hidden=="")
	{
		alert('ERROR : Please Enter Your Name !');
		acx_csma_form_status=1;
		return false;
	}
	else{
	document.getElementById('acx_csma_name_hidden').type = 'hidden';
	document.getElementById('acx_csma_email').type = 'email';
	
	document.getElementById('acx_csma_submit').value="Subscribe";
	acx_csma_form_status=2;
	return false;
	}
	}
	else if(acx_csma_form_status==2)
	{
		var acx_csma_email = document.getElementById('acx_csma_email').value;
	var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
	if (acx_csma_email=='') 
	{
	    alert('Please Enter Email Address !');
		return false;
	}
	else if (!expr.test(acx_csma_email)) 
	{
		document.getElementById('acx_csma_email').value="";
		document.getElementById('acx_csma_name_hidden').value="";
		jQuery("#acx_csma_email").hide();
		jQuery("#acx_csma_submit").hide();
		jQuery("#acx_csma_invalid").show();
		return false;
	}
	else 
	{
	var acx_load="<div id='acx_csma_loading'><div class='load_1'></div></div>";
	jQuery('body').append(acx_load);
	
	var timestamp =  Math.floor(<?php echo current_time('timestamp'); ?>);
	var ip="<?php  echo $_SERVER['REMOTE_ADDR']; ?>";
	var acx_csma_ajaxurl ="<?php echo admin_url('admin-ajax.php'); ?>";
	var order = 'name='+acx_csma_name_hidden+'&email='+acx_csma_email+'&ip='+ip+'&timestamp='+timestamp+'&action=acx_csma_subscribe_email'+'&acx_csma_subscribe_es=<?php echo wp_create_nonce('acx_csma_subscribe_es'); ?>';
		jQuery.post(acx_csma_ajaxurl, order, function(theResponse)
		{
			jQuery("#acx_csma_loading").remove();
			if(theResponse == "success")
			{
			document.getElementById('acx_csma_email').value="";
			document.getElementById('acx_csma_name_hidden').value="";
			jQuery("#acx_csma_email").hide();
			jQuery("#acx_csma_submit").hide();
			jQuery("#acx_csma_success").show();
			}  
			else{
			document.getElementById('acx_csma_email').value="";
			document.getElementById('acx_csma_name_hidden').value="";
			jQuery("#acx_csma_email").hide();
			jQuery("#acx_csma_submit").hide();
			jQuery("#acx_csma_error").html("Email Already Exists !!");
			}  
		});
	}
	}
}

<?php if($acx_csma_appearence_array_5['5']['acx_csma_show_progressbar5']==1)
{
	if($acx_csma_timestamp < $acx_csma_date_time)
	{?>
	var current_spu = Math.floor(<?php echo current_time('timestamp'); ?>);		
	var startTime=<?php echo $acx_csma_start_date_time; ?>;
	var maxTime =<?php echo $acx_csma_date_time; ?>;
  
	showProgressUpdate();
   function updateProgress(percentage) {
	
    jQuery('#pre_loader_inside').css("width", percentage + "%");
    jQuery('#pre_loader_text').text(percentage + "%");
	}

	function showProgressUpdate() {
	 current_spu = (current_spu+1);
		var perc = Math.round(((current_spu-startTime) / (maxTime-startTime)) * 100);
			
		  if (perc <= 100) {
		 
		   updateProgress(perc);
		   setTimeout(showProgressUpdate, 1000);
		  }
	}
	<?php }

}
if($acx_csma_appearence_array_5['5']['acx_csma_show_timer5']==1)
{
if($acx_csma_timestamp < $acx_csma_date_time)
{	?>
var start_date = <?php echo $acx_csma_start_date_time; ?>;
var end_date =<?php echo $acx_csma_date_time; ?>;
var current = Math.floor(<?php echo current_time('timestamp'); ?>);

updateCounter();
function updateCounter()
{
	if(current < end_date)
	{
	current = current+1;
	seconds = (end_date - current);
	
	weeks=Math.floor(seconds / (60 *60 * 24*7)); 
	seconds -= weeks * 60 * 60 * 24* 7; 
		
	days = Math.floor(seconds / (60 * 60 * 24)); 
	seconds -= days * 60 * 60 * 24; 
	
	hours = Math.floor(seconds / (60 * 60));
	seconds -= hours * 60 * 60;
	
	minutes = Math.floor(seconds / 60);
	seconds -= minutes * 60;
	
		document.getElementById("second").innerHTML = seconds;
		document.getElementById("minute").innerHTML = minutes;
		document.getElementById("hour").innerHTML = hours;
		document.getElementById("week").innerHTML = weeks;
	    document.getElementById("day").innerHTML = days;
		setTimeout( function(){ 
    updateCounter(); 
		}, 1000 );
	}
}
	<?php }
}?>
</script>
	</body>
	</html>
