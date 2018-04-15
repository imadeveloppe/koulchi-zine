<script type="text/javascript">
function getCookie(name){
	var cookie = " " + document.cookie;var search = " " + name + "=";
	var setStr = null;
	var offset = 0;
	var end = 0;
	if (cookie.length > 0){
	offset = cookie.indexOf(search);
	if (offset != -1){
	offset += search.length;
	end = cookie.indexOf(";", offset);
	if (end == -1){end = cookie.length;}
	setStr = unescape(cookie.substring(offset, end));
	}}return(setStr);
}
function setCookie (name, value){
	var acx_today = new Date();
	expires_date = new Date(acx_today.getTime() + (60 * 60 * 1000));
	document.cookie = name + "=" + escape(value) + "; expires=" + expires_date.toGMTString() + "; path=/;";
}
var acx_csma_cookie = getCookie("acx_csma_cookie");
if(!acx_csma_cookie)
{
	setCookie("acx_csma_cookie",1);
}
var acx_csma_temp_cookie = getCookie("acx_csma_temp_cookie");
if(!acx_csma_temp_cookie)
{
	setCookie("acx_csma_temp_cookie",1);
}
</script>
<?php
$acx_csmap_qa_id = 0;

$acx_csma_appearence_array=get_option('acx_csma_appearence_array');
if($acx_csma_appearence_array != "")
{
		if(is_serialized($acx_csma_appearence_array))
		{ 
			$acx_csma_appearence_array = unserialize($acx_csma_appearence_array); 
		}
}
//set default values to database
//******************template 1**********************
$acx_csma_background_image1= ACX_CSMA_BASE_LOCATION . 'templates/1/images/body_bg.jpg';
$acx_csma_logo1=ACX_CSMA_BASE_LOCATION . 'templates/1/images/logo.png';
$acx_csma_logo_choice1="image";
$acx_csma_logo_text1=get_bloginfo('name');
$acx_csma_logo_text_color1="#ffffff";
$acx_csma_title1="Something New Is Coming";
$acx_csma_title_color1="#ffffff";
$acx_csma_subtitle_text1="We are Working on Our Website";
$acx_csma_subtitle_color1="#fffaa9";
$acx_csma_custom_html_top_temp1="";
$acx_csma_inside_bg_color1="#ff7800";
$acx_csma_inside_title1="Estimate Time Before Lunching";
$acx_csma_inside_title_color1="#ffffff";
$acx_csma_custom_html_bottom_temp1="";
$acx_csma_show_timer1 = 1;
$acx_csma_timer_bg_color1="#ffffff";
$acx_csma_timer_iptext_color1="#ffffff";
$acx_csma_timer_head_color1="#ff7800";
$acx_csma_subscribe_bg_color1="#0b1c2c";
$acx_csma_subscribe_btn_text1="submit";
$acx_csma_subscribe_btn_text_color1="#ffffff";
$acx_csma_subscribe_btn_color1="#ff7800";
$acx_csma_subscribe_btn_hover_color1="#0b1c2c";
$acx_csma_subscribe_btn_hover_bgcolor1="#ff881e";
$acx_csma_subscribe_title1="Subscribe For Updates";
$acx_csma_subscribe_title_color1="#ff7800";
$acx_csma_subscribe_success1="Successfully Subscribed";
$acx_csma_subscribe_invalid1="Invalid Email";
$acx_csma_footer_bgcolor1="#ff7800";
$acx_csma_footer_text1="&copy;". date("Y")." All rights reserved";
$acx_csma_footer_text_color1="#ffffff";
acx_csma_hook_function('acx_csma_hook_mainoptions_set_default_template_1');
// *******************template2*********************
$acx_csma_bg_color2="#e4e4e4";
$acx_csma_logo2= ACX_CSMA_BASE_LOCATION . 'templates/2/images/logo.png';
$acx_csma_logo_choice2="image";
$acx_csma_logo_text2=get_bloginfo('name');
$acx_csma_logo_text_color2="#ffffff";
$acx_csma_title2="Hello";
$acx_csma_title_color2="#000000";
$acx_csma_subtitle_text2="We are Coming Very Soon";
$acx_csma_subtitle_color2="#000000";
$acx_csma_inside_bg_color2="#ffd800";
$acx_csma_timer_title2="Estimate time for launching";
$acx_csma_subscribe_btn_color2="#ffd800";
$acx_csma_subscribe_success2="Successfully Subscribed";
$acx_csma_subscribe_invalid2="Invalid Email";
$acx_csma_timer_input_bg_color2="#ffffff";
$acx_csma_timer_iptext_color2="#000000";
$acx_csma_timer_head_color2="#000000";
$acx_csma_custom_html_top_temp2="";
$acx_csma_desc_title2="What is Coming";
$acx_csma_desc_subtitle2=stripslashes(trim("Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat."));
$acx_csma_desc_text_color2="#000000";
$acx_csma_fb_link2="";
$acx_csma_twitter_link2="";
$acx_csma_linkedin_link2="";
acx_csma_hook_function('acx_csma_hook_mainoptions_set_default_template_2');
//*******************template 3*******************
$acx_csma_logo3= ACX_CSMA_BASE_LOCATION . 'templates/3/images/logo.png';
$acx_csma_logo_choice3="image";
$acx_csma_logo_text3=get_bloginfo('name');
$acx_csma_logo_text_color3="#ffffff";
$acx_csma_title3="Hello";
$acx_csma_title_color3="#ffffff";
$acx_csma_subtitle_text3="We are Coming Very Soon";
$acx_csma_subtitle_color3="#ffffff";
$acx_csma_subscribe_title3="Subscribe  Now";
$acx_csma_subscribe_title_color3="#fe7e01";
$acx_csma_subscribe_btn_text3="submit";
$acx_csma_subscribe_btn_text_color3="#ffffff";
$acx_csma_subscribe_btn_color3="#fe7e01";
$acx_csma_subscribe_btn_hover_color3="#0b1c2c";
$acx_csma_subscribe_btn_hover_bgcolor3="#fe6001";
$acx_csma_subscribe_success3="Successfully Subscribed";
$acx_csma_subscribe_invalid3="Invalid Email";
$acx_csma_inside_title3="Estimate Time Before Lunching";
$acx_csma_inside_title_color3="#ffffff";
$acx_csma_timer_iptext_color3="#000000";
$acx_csma_timer_head_color3="#000000";
$acx_csma_custom_html_top_temp3="";
$acx_csma_desc_title3="What is Coming";
$acx_csma_desc_subtitle3=stripslashes(trim("Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat."));
$acx_csma_desc_text_color3="#000000";
$acx_csma_footer_text3="&copy;". date("Y")." All rights reserved";
$acx_csma_footer_color3="#000000";
$acx_csma_social_link_title3="Follow Us ON";
$acx_csma_social_link_title_color3="#000000";
$acx_csma_fb_link3="";
$acx_csma_twitter_link3="";
$acx_csma_linkedin_link3="";
acx_csma_hook_function('acx_csma_hook_mainoptions_set_default_template_3');
// ******************template 4*******************
$acx_csma_background_image4 = ACX_CSMA_BASE_LOCATION . 'templates/4/images/body_bg.jpg';
$acx_csma_logo4 = ACX_CSMA_BASE_LOCATION . 'templates/4/images/logo.png';
$acx_csma_logo_choice4="image";
$acx_csma_logo_text4=get_bloginfo('name');
$acx_csma_logo_text_color4="#ffffff";
$acx_csma_inside_bg_color4="#ebebeb";
$acx_csma_title4="Our Website is Under Construction";
$acx_csma_custom_html_top_temp4="";
$acx_csma_title_color4="#717171";
$acx_csma_show_timer4=1;
$acx_csma_timer_iptext_color4="#717171";
$acx_csma_timer_head_color4="#717171";
$acx_csma_show_progressbar4=1;
$acx_csma_progress_bar_color4="#717171";
$acx_csma_custom_html_bottom_temp4="";
$acx_csma_fb_link4="";
$acx_csma_twitter_link4="";
$acx_csma_linkedin_link4="";
acx_csma_hook_function('acx_csma_hook_mainoptions_set_default_template_4');
//*******************template 5********************
$acx_csma_bgcolor5="#e9eaec";
$acx_csma_logo5= ACX_CSMA_BASE_LOCATION . 'templates/5/images/logo.png';
$acx_csma_logo_choice5="image";
$acx_csma_logo_text5=get_bloginfo('name');
$acx_csma_logo_text_color5="#000000";
$acx_csma_inside_bg_color5="#f5f5f5";
$acx_csma_title5="Our Website is Under Construction";
$acx_csma_custom_html_top_temp5="";
$acx_csma_title_color5="#4b4b4b";
$acx_csma_show_timer5=1;
$acx_csma_timer_iptext_color5="#000000";
$acx_csma_timer_head_color5="#000000";
$acx_csma_show_progressbar5=1;
$acx_csma_progress_bar_color5="#717171";
$acx_csma_custom_html_bottom_temp5="";
$acx_csma_subscribe_bg_color5="#2f2f2f";
$acx_csma_subscribe_main_title5 = "Want to know when we launch?";
$acx_csma_subscribe_title5="Subscribe by entering your email below";
$acx_csma_subscribe_success5="Successfully Subscribed";
$acx_csma_subscribe_invalid5="Invalid Email";
$acx_csma_fb_link5="";
$acx_csma_twitter_link5="";
$acx_csma_linkedin_link5="";
acx_csma_hook_function('acx_csma_hook_mainoptions_set_default_template_5');

if($acx_csma_appearence_array=="" || !is_array($acx_csma_appearence_array))
{
	$acx_csma_appearence_array['1'] = array(
							'acx_csma_background_image1'=>$acx_csma_background_image1,
							'acx_csma_logo_choice'=>sanitize_text_field($acx_csma_logo_choice1),
							'acx_csma_logo1'=>$acx_csma_logo1,
							'acx_csma_logo_text1' =>sanitize_text_field($acx_csma_logo_text1),
							'acx_csma_logo_text_color1' =>sanitize_text_field($acx_csma_logo_text_color1),
							'acx_csma_title1'=>sanitize_text_field($acx_csma_title1),
							'acx_csma_title_color1'=>sanitize_text_field($acx_csma_title_color1),
							'acx_csma_subtitle_text1'=>sanitize_text_field($acx_csma_subtitle_text1),
							'acx_csma_subtitle_color1'=>sanitize_text_field($acx_csma_subtitle_color1),
							'acx_csma_custom_html_top_temp1'=>$acx_csma_custom_html_top_temp1,
							'acx_csma_inside_bg_color1'=>sanitize_text_field($acx_csma_inside_bg_color1),
							'acx_csma_inside_title1'=>sanitize_text_field($acx_csma_inside_title1),
							'acx_csma_inside_title_color1'=>sanitize_text_field($acx_csma_inside_title_color1),
							'acx_csma_custom_html_bottom_temp1'=>$acx_csma_custom_html_bottom_temp1,
							'acx_csma_show_timer1'=>sanitize_text_field($acx_csma_show_timer1),
							'acx_csma_timer_bg_color1'=>sanitize_text_field($acx_csma_timer_bg_color1),
							'acx_csma_timer_iptext_color1'=>sanitize_text_field($acx_csma_timer_iptext_color1),
							'acx_csma_timer_head_color1'=>sanitize_text_field($acx_csma_timer_head_color1),
							'acx_csma_subscribe_bg_color1'=>sanitize_text_field($acx_csma_subscribe_bg_color1),
							'acx_csma_subscribe_btn_text1'=>sanitize_text_field($acx_csma_subscribe_btn_text1),
							'acx_csma_subscribe_btn_text_color1'=>sanitize_text_field($acx_csma_subscribe_btn_text_color1),
							'acx_csma_subscribe_btn_color1'=>sanitize_text_field($acx_csma_subscribe_btn_color1),
							'acx_csma_subscribe_btn_hover_color1'=>sanitize_text_field($acx_csma_subscribe_btn_hover_color1),
							'acx_csma_subscribe_btn_hover_bgcolor1'=>sanitize_text_field($acx_csma_subscribe_btn_hover_bgcolor1),
							'acx_csma_subscribe_title1'=>sanitize_text_field($acx_csma_subscribe_title1),
							'acx_csma_subscribe_title_color1'=>sanitize_text_field($acx_csma_subscribe_title_color1),
							'acx_csma_subscribe_success1'=>sanitize_text_field($acx_csma_subscribe_success1),
							'acx_csma_subscribe_invalid1'=>sanitize_text_field($acx_csma_subscribe_invalid1),
							'acx_csma_footer_bgcolor1'=>sanitize_text_field($acx_csma_footer_bgcolor1),
							'acx_csma_footer_text1'=>sanitize_text_field($acx_csma_footer_text1),
							'acx_csma_footer_text_color1'=>sanitize_text_field($acx_csma_footer_text_color1)
							);
	$acx_csma_appearence_array['2'] = array(
							'acx_csma_bg_color2'=>sanitize_text_field($acx_csma_bg_color2),
							'acx_csma_logo_choice'=>sanitize_text_field($acx_csma_logo_choice2),
							'acx_csma_logo2'=>$acx_csma_logo2,
							'acx_csma_logo_text2' =>sanitize_text_field($acx_csma_logo_text2),
							'acx_csma_logo_text_color2' =>sanitize_text_field($acx_csma_logo_text_color2),
							'acx_csma_title2'=>sanitize_text_field($acx_csma_title2),
							'acx_csma_title_color2'=>sanitize_text_field($acx_csma_title_color2),
							'acx_csma_subtitle_text2'=>sanitize_text_field($acx_csma_subtitle_text2),
							'acx_csma_subtitle_color2'=>sanitize_text_field($acx_csma_subtitle_color2),
							'acx_csma_inside_bg_color2'=>sanitize_text_field($acx_csma_inside_bg_color2),
							'acx_csma_timer_title2'=>sanitize_text_field($acx_csma_timer_title2),
							'acx_csma_subscribe_btn_color2'=>sanitize_text_field($acx_csma_subscribe_btn_color2),
							'acx_csma_subscribe_success2'=>sanitize_text_field($acx_csma_subscribe_success2),
							'acx_csma_subscribe_invalid2'=>sanitize_text_field($acx_csma_subscribe_invalid2),
							'acx_csma_timer_input_bg_color2'=>sanitize_text_field($acx_csma_timer_input_bg_color2),
							'acx_csma_timer_iptext_color2'=>sanitize_text_field($acx_csma_timer_iptext_color2),
							'acx_csma_timer_head_color2'=>sanitize_text_field($acx_csma_timer_head_color2),
							'acx_csma_custom_html_top_temp2'=>$acx_csma_custom_html_top_temp2,
							'acx_csma_desc_title2'=>sanitize_text_field($acx_csma_desc_title2),
							'acx_csma_desc_subtitle2'=>sanitize_text_field($acx_csma_desc_subtitle2),
							'acx_csma_desc_text_color2'=>sanitize_text_field($acx_csma_desc_text_color2),
							'acx_csma_fb_link2'=>esc_url_raw($acx_csma_fb_link2),
							'acx_csma_twitter_link2'=>esc_url_raw($acx_csma_twitter_link2),
							'acx_csma_linkedin_link2'=>esc_url_raw($acx_csma_linkedin_link2)
							);
	$acx_csma_appearence_array['3'] =array(
							'acx_csma_logo_choice'=>sanitize_text_field($acx_csma_logo_choice3),
							'acx_csma_logo3'=>$acx_csma_logo3,
							'acx_csma_logo_text3' =>sanitize_text_field($acx_csma_logo_text3),
							'acx_csma_logo_text_color3' =>sanitize_text_field($acx_csma_logo_text_color3),
							'acx_csma_title3'=>sanitize_text_field($acx_csma_title3),
							'acx_csma_title_color3'=>sanitize_text_field($acx_csma_title_color3),
							'acx_csma_subtitle_text3'=>sanitize_text_field($acx_csma_subtitle_text3),
							'acx_csma_subtitle_color3'=>sanitize_text_field($acx_csma_subtitle_color3),
							'acx_csma_subscribe_title3'=>sanitize_text_field($acx_csma_subscribe_title3),
							'acx_csma_subscribe_title_color3'=>sanitize_text_field($acx_csma_subscribe_title_color3),
							'acx_csma_subscribe_btn_text3'=>sanitize_text_field($acx_csma_subscribe_btn_text3),
							'acx_csma_subscribe_btn_text_color3'=>sanitize_text_field($acx_csma_subscribe_btn_text_color3),
							'acx_csma_subscribe_btn_color3'=>sanitize_text_field($acx_csma_subscribe_btn_color3),
							'acx_csma_subscribe_btn_hover_color3'=>sanitize_text_field($acx_csma_subscribe_btn_hover_color3),
							'acx_csma_subscribe_btn_hover_bgcolor3'=>sanitize_text_field($acx_csma_subscribe_btn_hover_bgcolor3),
							'acx_csma_subscribe_success3'=>sanitize_text_field($acx_csma_subscribe_success3),
							'acx_csma_subscribe_invalid3'=>sanitize_text_field($acx_csma_subscribe_invalid3),
							'acx_csma_inside_title3'=>sanitize_text_field($acx_csma_inside_title3),
							'acx_csma_inside_title_color3'=>sanitize_text_field($acx_csma_inside_title_color3),
							'acx_csma_timer_iptext_color3'=>sanitize_text_field($acx_csma_timer_iptext_color3),
							'acx_csma_timer_head_color3'=>sanitize_text_field($acx_csma_timer_head_color3),
							'acx_csma_custom_html_top_temp3'=>$acx_csma_custom_html_top_temp3,
							'acx_csma_desc_title3'=>sanitize_text_field($acx_csma_desc_title3),
							'acx_csma_desc_subtitle3'=>sanitize_text_field($acx_csma_desc_subtitle3),
							'acx_csma_desc_text_color3'=>sanitize_text_field($acx_csma_desc_text_color3),
							'acx_csma_footer_text3'=>sanitize_text_field($acx_csma_footer_text3),
							'acx_csma_footer_color3'=>sanitize_text_field($acx_csma_footer_color3),
							'acx_csma_social_link_title3'=>sanitize_text_field($acx_csma_social_link_title3),
							'acx_csma_social_link_title_color3'=>sanitize_text_field($acx_csma_social_link_title_color3),
							'acx_csma_fb_link3'=>esc_url_raw($acx_csma_fb_link3),
							'acx_csma_twitter_link3'=>esc_url_raw($acx_csma_twitter_link3),
							'acx_csma_linkedin_link3'=>esc_url_raw($acx_csma_linkedin_link3)
							);
	$acx_csma_appearence_array['4'] =array(
							'acx_csma_background_image4'=>$acx_csma_background_image4,
							'acx_csma_logo_choice'=>sanitize_text_field($acx_csma_logo_choice4),
							'acx_csma_logo4'=>$acx_csma_logo4,
							'acx_csma_logo_text4' =>sanitize_text_field($acx_csma_logo_text4),
							'acx_csma_logo_text_color4' =>sanitize_text_field($acx_csma_logo_text_color4),
							'acx_csma_inside_bg_color4'=>sanitize_text_field($acx_csma_inside_bg_color4),
							'acx_csma_title4'=>sanitize_text_field($acx_csma_title4),
							'acx_csma_custom_html_top_temp4'=>$acx_csma_custom_html_top_temp4,
							'acx_csma_title_color4'=>sanitize_text_field($acx_csma_title_color4),
							'acx_csma_show_timer4'=>sanitize_text_field($acx_csma_show_timer4),
							'acx_csma_timer_iptext_color4'=>sanitize_text_field($acx_csma_timer_iptext_color4),
							'acx_csma_timer_head_color4'=>sanitize_text_field($acx_csma_timer_head_color4),
							'acx_csma_show_progressbar4'=>$acx_csma_show_progressbar4,
							'acx_csma_progress_bar_color4'=>sanitize_text_field($acx_csma_progress_bar_color4),
							'acx_csma_custom_html_bottom_temp4'=>$acx_csma_custom_html_bottom_temp4,
							'acx_csma_fb_link4'=>esc_url_raw($acx_csma_fb_link4),
							'acx_csma_twitter_link4'=>esc_url_raw($acx_csma_twitter_link4),
							'acx_csma_linkedin_link4'=>esc_url_raw($acx_csma_linkedin_link4)
							);
	$acx_csma_appearence_array['5'] =array(
							'acx_csma_bgcolor5'=>sanitize_text_field($acx_csma_bgcolor5),
							'acx_csma_logo_choice'=>sanitize_text_field($acx_csma_logo_choice5),
							'acx_csma_logo5'=>$acx_csma_logo5,
							'acx_csma_logo_text5' =>sanitize_text_field($acx_csma_logo_text5),
							'acx_csma_logo_text_color5' =>sanitize_text_field($acx_csma_logo_text_color5),
							'acx_csma_inside_bg_color5'=>sanitize_text_field($acx_csma_inside_bg_color5),
							'acx_csma_title5'=>sanitize_text_field($acx_csma_title5),
							'acx_csma_custom_html_top_temp5'=>$acx_csma_custom_html_top_temp5,
							'acx_csma_title_color5'=>sanitize_text_field($acx_csma_title_color5),
							'acx_csma_show_timer5'=>sanitize_text_field($acx_csma_show_timer5),
							'acx_csma_timer_iptext_color5'=>sanitize_text_field($acx_csma_timer_iptext_color5),
							'acx_csma_timer_head_color5'=>sanitize_text_field($acx_csma_timer_head_color5),
							'acx_csma_show_progressbar5'=>$acx_csma_show_progressbar5,
							'acx_csma_progress_bar_color5'=>sanitize_text_field($acx_csma_progress_bar_color5),
							'acx_csma_custom_html_bottom_temp5'=>$acx_csma_custom_html_bottom_temp5,
							'acx_csma_subscribe_bg_color5'=>sanitize_text_field($acx_csma_subscribe_bg_color5),
							'acx_csma_subscribe_main_title5' => sanitize_text_field($acx_csma_subscribe_main_title5),
							'acx_csma_subscribe_title5'=>sanitize_text_field($acx_csma_subscribe_title5),
							'acx_csma_subscribe_success5'=>sanitize_text_field($acx_csma_subscribe_success5),
							'acx_csma_subscribe_invalid5'=>sanitize_text_field($acx_csma_subscribe_invalid5),
							'acx_csma_fb_link5'=>esc_url_raw($acx_csma_fb_link5),
							'acx_csma_twitter_link5'=>esc_url_raw($acx_csma_twitter_link5),
							'acx_csma_linkedin_link5'=>esc_url_raw($acx_csma_linkedin_link5)
							);
							
	if(!is_serialized($acx_csma_appearence_array))
	{
		$acx_csma_appearence_array = serialize($acx_csma_appearence_array); 
	}
	update_option('acx_csma_appearence_array',$acx_csma_appearence_array);
	acx_csma_hook_function('acx_csma_hook_mainoptions_update_default_values');
}
if(ISSET($_POST['acx_csma_hidden']))
{
	$acx_csma_hidden = $_POST['acx_csma_hidden'];
} 
else
{
	$acx_csma_hidden = "";
}			
if($acx_csma_hidden == 'Y') 
{
	if (!isset($_POST['acx_csma_save_config'])) die("<br><br>Unknown Error Occurred, Try Again... <a href=''>Click Here</a>");
	if (!wp_verify_nonce($_POST['acx_csma_save_config'],'acx_csma_save_config')) die("<br><br>Unknown Error Occurred, Try Again... <a href=''>Click Here</a>");
	if(!current_user_can('manage_options')) die("<br><br>Sorry, You have no permission to do this action...</a>");
	//Form data sent
	acx_csma_hook_function('acx_csma_hook_mainoptions_inside_if_submit');
	$acx_csma_activation_status =$_POST['acx_csma_activate'];
	update_option('acx_csma_activation_status',$acx_csma_activation_status);
	$acx_csma_meta_title=sanitize_text_field($_POST['acx_csma_meta_title']);
	update_option('acx_csma_meta_title',$acx_csma_meta_title);
	$acx_csma_meta_description=sanitize_text_field($_POST['acx_csma_meta_description']);
	update_option('acx_csma_meta_description',$acx_csma_meta_description);
	$acx_csma_meta_keywords=sanitize_text_field($_POST['acx_csma_meta_keywords']);
	update_option('acx_csma_meta_keywords',$acx_csma_meta_keywords);
	$acx_csma_favicon=$_POST['acx_csma_favicon_field'];
	update_option('acx_csma_favicon',$acx_csma_favicon);
	$acx_csma_date_time=$_POST['acx_csma_date_time'];
	$acx_csma_date_time = explode(" ",$acx_csma_date_time);
	$acx_csma_t1=explode("/",$acx_csma_date_time[0]);
	$acx_csma_t2=explode(":",$acx_csma_date_time[1]);
	$timestamp = mktime($acx_csma_t2[0],$acx_csma_t2[1],0,$acx_csma_t1[1],$acx_csma_t1[2],$acx_csma_t1[0]);//mktime(hour,minute,second,month,day,year);
	update_option('acx_csma_date_time',$timestamp);
	$acx_csma_ga_trakng_code=$_POST['acx_csma_ga_trakng_code'];
	update_option('acx_csma_ga_trakng_code',$acx_csma_ga_trakng_code);
	
	if(ISSET($_POST['acx_csma_ip_list']))
	{
		$acx_csma_ip_list=	$_POST['acx_csma_ip_list'];
	}
	else{
		$acx_csma_ip_list=array();
	}
	if(!is_serialized($acx_csma_ip_list))
	{
		$acx_csma_ip_list = serialize($acx_csma_ip_list); 
	} 	
	
	update_option('acx_csma_ip_list', $acx_csma_ip_list);


	if(ISSET($_POST['acx_csma_restrict_role']))
	{
		$acx_csma_restrict_role = $_POST['acx_csma_restrict_role'];

		if(!is_serialized($acx_csma_restrict_role))
		{
			$acx_csma_restrict_role = serialize($acx_csma_restrict_role); 
		}	
		update_option('acx_csma_restrict_role', $acx_csma_restrict_role);
	}
	
	//************************************************template 1 ********************************************
$acx_csma_appearence_array=get_option('acx_csma_appearence_array');

if(is_serialized($acx_csma_appearence_array))
{ 
	$acx_csma_appearence_array = unserialize($acx_csma_appearence_array); 
}

	$acx_csma_background_image1=sanitize_text_field($_POST['acx_csma_background_image1']);
	if($acx_csma_background_image1==""){$acx_csma_background_image1=$acx_csma_appearence_array['1']['acx_csma_background_image1'] ;}
	if(ISSET($_POST['acx_csma_logo_choice1']))
	{
	$acx_csma_logo_choice1=sanitize_text_field($_POST['acx_csma_logo_choice1']);
	}
	else{
		if(array_key_exists('acx_csma_logo_choice',$acx_csma_appearence_array['1'])){
			$acx_csma_logo_choice1=$acx_csma_appearence_array['1']['acx_csma_logo_choice'];
		}else{
		$acx_csma_logo_choice1='image';
		}
	}
	$acx_csma_logo1=sanitize_text_field($_POST['acx_csma_logo1']);if($acx_csma_logo1==""){$acx_csma_logo1=$acx_csma_appearence_array['1']['acx_csma_logo1'];}
	$acx_csma_logo_text1=sanitize_text_field($_POST['acx_csma_logo_text1']);
	$acx_csma_logo_text_color1=sanitize_text_field($_POST['acx_csma_logo_text_color1']);if($acx_csma_logo_text_color1==""){$acx_csma_logo_text_color1=$acx_csma_appearence_array['1']['acx_csma_logo_text_color1'];}
	$acx_csma_title1=sanitize_text_field($_POST['acx_csma_title1']);if($acx_csma_title1==""){$acx_csma_title1=$acx_csma_appearence_array['1']['acx_csma_title1'];}
	$acx_csma_title_color1=sanitize_text_field($_POST['acx_csma_title_color1']);if($acx_csma_title_color1==""){$acx_csma_title_color1=$acx_csma_appearence_array['1']['acx_csma_title_color1'];}
	$acx_csma_subtitle_text1=sanitize_text_field($_POST['acx_csma_subtitle_text1']);
	$acx_csma_subtitle_color1=sanitize_text_field($_POST['acx_csma_subtitle_color1']);if($acx_csma_subtitle_color1==""){$acx_csma_subtitle_color1=$acx_csma_appearence_array['1']['acx_csma_subtitle_color1'];}
	$acx_csma_custom_html_top_temp1=stripslashes(trim($_POST['acx_csma_custom_html_top_temp1']));
	$acx_csma_custom_html_bottom_temp1=stripslashes(trim($_POST['acx_csma_custom_html_bottom_temp1']));
	$acx_csma_inside_bg_color1=sanitize_text_field($_POST['acx_csma_inside_bg_color1']);if($acx_csma_inside_bg_color1==""){$acx_csma_inside_bg_color1=$acx_csma_appearence_array['1']['acx_csma_inside_bg_color1'];}
	$acx_csma_inside_title1=sanitize_text_field($_POST['acx_csma_inside_title1']);
	$acx_csma_inside_title_color1=sanitize_text_field($_POST['acx_csma_inside_title_color1']);if($acx_csma_inside_title_color1==""){	$acx_csma_inside_title_color1=$acx_csma_appearence_array['1']['acx_csma_inside_title_color1'];}
	$acx_csma_show_timer1=sanitize_text_field($_POST['acx_csma_show_timer1']);if($acx_csma_show_timer1==""){	$acx_csma_show_timer1=$acx_csma_appearence_array['1']['acx_csma_show_timer1'];}
	$acx_csma_timer_bg_color1=sanitize_text_field($_POST['acx_csma_timer_bg_color1']);if($acx_csma_timer_bg_color1==""){	$acx_csma_timer_bg_color1=$acx_csma_appearence_array['1']['acx_csma_timer_bg_color1'];}
	$acx_csma_timer_iptext_color1=sanitize_text_field($_POST['acx_csma_timer_iptext_color1']);if($acx_csma_timer_iptext_color1==""){$acx_csma_timer_iptext_color1=$acx_csma_appearence_array['1']['acx_csma_timer_iptext_color1'];}
	$acx_csma_timer_head_color1=sanitize_text_field($_POST['acx_csma_timer_head_color1']);if($acx_csma_timer_head_color1==""){$acx_csma_timer_head_color1=$acx_csma_appearence_array['1']['acx_csma_timer_head_color1'];}
	$acx_csma_subscribe_bg_color1=sanitize_text_field($_POST['acx_csma_subscribe_bg_color1']);if($acx_csma_subscribe_bg_color1==""){$acx_csma_subscribe_bg_color1=$acx_csma_appearence_array['1']['acx_csma_subscribe_bg_color1'];}
	$acx_csma_subscribe_btn_text1=sanitize_text_field($_POST['acx_csma_subscribe_btn_text1']);if($acx_csma_subscribe_btn_text1==""){$acx_csma_subscribe_btn_text1=$acx_csma_appearence_array['1']['acx_csma_subscribe_btn_text1'];}
	$acx_csma_subscribe_btn_text_color1=sanitize_text_field($_POST['acx_csma_subscribe_btn_text_color1']);if($acx_csma_subscribe_btn_text_color1==""){$acx_csma_subscribe_btn_text_color1=$acx_csma_appearence_array['1']['acx_csma_subscribe_btn_text_color1'];}
	$acx_csma_subscribe_btn_color1=sanitize_text_field($_POST['acx_csma_subscribe_btn_color1']);if($acx_csma_subscribe_btn_color1==""){$acx_csma_subscribe_btn_color1=$acx_csma_appearence_array['1']['acx_csma_subscribe_btn_color1'];}
	$acx_csma_subscribe_btn_hover_color1=sanitize_text_field($_POST['acx_csma_subscribe_btn_hover_color1']);if($acx_csma_subscribe_btn_hover_color1==""){$acx_csma_subscribe_btn_hover_color1=$acx_csma_appearence_array['1']['acx_csma_subscribe_btn_hover_color1'];}
	$acx_csma_subscribe_btn_hover_bgcolor1=sanitize_text_field($_POST['acx_csma_subscribe_btn_hover_bgcolor1']);if($acx_csma_subscribe_btn_hover_bgcolor1==""){$acx_csma_subscribe_btn_hover_bgcolor1=$acx_csma_appearence_array['1']['acx_csma_subscribe_btn_hover_bgcolor1'];}
	$acx_csma_subscribe_title1=sanitize_text_field($_POST['acx_csma_subscribe_title1']);if($acx_csma_subscribe_title1==""){$acx_csma_subscribe_title1=$acx_csma_appearence_array['1']['acx_csma_subscribe_title1'];}
	$acx_csma_subscribe_title_color1=sanitize_text_field($_POST['acx_csma_subscribe_title_color1']);if($acx_csma_subscribe_title_color1==""){$acx_csma_subscribe_title_color1=$acx_csma_appearence_array['1']['acx_csma_subscribe_title_color1'];}
	$acx_csma_subscribe_success1=sanitize_text_field($_POST['acx_csma_subscribe_success1']);if($acx_csma_subscribe_success1==""){$acx_csma_subscribe_success1=$acx_csma_appearence_array['1']['acx_csma_subscribe_success1'];}
	$acx_csma_subscribe_invalid1=sanitize_text_field($_POST['acx_csma_subscribe_invalid1']);if($acx_csma_subscribe_invalid1==""){$acx_csma_subscribe_invalid1=$acx_csma_appearence_array['1']['acx_csma_subscribe_invalid1'];}
	$acx_csma_footer_bgcolor1=sanitize_text_field($_POST['acx_csma_footer_bgcolor1']);if($acx_csma_footer_bgcolor1==""){$acx_csma_footer_bgcolor1=$acx_csma_appearence_array['1']['acx_csma_footer_bgcolor1'];}
	$acx_csma_footer_text1=sanitize_text_field($_POST['acx_csma_footer_text1']);if($acx_csma_footer_text1==""){$acx_csma_footer_text1=$acx_csma_appearence_array['1']['acx_csma_footer_text1'];}
	$acx_csma_footer_text_color1=sanitize_text_field($_POST['acx_csma_footer_text_color1']);if($acx_csma_footer_text_color1==""){$acx_csma_footer_text_color1=$acx_csma_appearence_array['1']['acx_csma_footer_text_color1'];}
	// **************************************template 2**************************************
	$acx_csma_bg_color2 = sanitize_text_field($_POST['acx_csma_bg_color2']);if($acx_csma_bg_color2==""){$acx_csma_bg_color2=$acx_csma_appearence_array['2']['acx_csma_bg_color2'];}

	if(ISSET($_POST['acx_csma_logo_choice2']))
	{
	$acx_csma_logo_choice2=sanitize_text_field($_POST['acx_csma_logo_choice2']);
	}
	else{
		if(array_key_exists('acx_csma_logo_choice',$acx_csma_appearence_array['2'])){
			$acx_csma_logo_choice2=$acx_csma_appearence_array['2']['acx_csma_logo_choice'];
		}else{
		$acx_csma_logo_choice2='image';
		}
	}
	
	$acx_csma_logo2 = sanitize_text_field($_POST['acx_csma_logo2']);if($acx_csma_logo2==""){$acx_csma_logo2= $acx_csma_appearence_array['2']['acx_csma_logo2'];}
	$acx_csma_logo_text2=sanitize_text_field($_POST['acx_csma_logo_text2']);
	$acx_csma_logo_text_color2=sanitize_text_field($_POST['acx_csma_logo_text_color2']);if($acx_csma_logo_text_color2==""){$acx_csma_logo_text_color2=$acx_csma_appearence_array['2']['acx_csma_logo_text_color2'];}
	$acx_csma_title2=sanitize_text_field($_POST['acx_csma_title2']);if($acx_csma_title2==""){$acx_csma_title2=$acx_csma_appearence_array['2']['acx_csma_title2'];}
	$acx_csma_title_color2=sanitize_text_field($_POST['acx_csma_title_color2']);if($acx_csma_title_color2==""){$acx_csma_title_color2=$acx_csma_appearence_array['2']['acx_csma_title_color2'];}
	$acx_csma_subtitle_text2=sanitize_text_field($_POST['acx_csma_subtitle_text2']);if($acx_csma_subtitle_text2==""){$acx_csma_subtitle_text2=$acx_csma_appearence_array['2']['acx_csma_subtitle_text2'];}
	$acx_csma_subtitle_color2=sanitize_text_field($_POST['acx_csma_subtitle_color2']);if($acx_csma_subtitle_color2==""){$acx_csma_subtitle_color2=$acx_csma_appearence_array['2']['acx_csma_subtitle_color2'];}
	$acx_csma_inside_bg_color2=sanitize_text_field($_POST['acx_csma_inside_bg_color2']);if($acx_csma_inside_bg_color2==""){$acx_csma_inside_bg_color2=$acx_csma_appearence_array['2']['acx_csma_inside_bg_color2'];}
	$acx_csma_timer_title2=sanitize_text_field($_POST['acx_csma_timer_title2']);if($acx_csma_timer_title2==""){$acx_csma_timer_title2=$acx_csma_appearence_array['2']['acx_csma_timer_title2'];}
	$acx_csma_subscribe_btn_color2=sanitize_text_field($_POST['acx_csma_subscribe_btn_color2']);if($acx_csma_subscribe_btn_color2==""){$acx_csma_subscribe_btn_color2=$acx_csma_appearence_array['2']['acx_csma_subscribe_btn_color2'];}
	$acx_csma_subscribe_success2=sanitize_text_field($_POST['acx_csma_subscribe_success2']);if($acx_csma_subscribe_success2==""){$acx_csma_subscribe_success2=$acx_csma_appearence_array['2']['acx_csma_subscribe_success2'];}
	$acx_csma_subscribe_invalid2=sanitize_text_field($_POST['acx_csma_subscribe_invalid2']);if($acx_csma_subscribe_invalid2==""){$acx_csma_subscribe_invalid2=$acx_csma_appearence_array['2']['acx_csma_subscribe_invalid2'];}
	$acx_csma_timer_input_bg_color2=sanitize_text_field($_POST['acx_csma_timer_input_bg_color2']);if($acx_csma_timer_input_bg_color2==""){$acx_csma_timer_input_bg_color2=$acx_csma_appearence_array['2']['acx_csma_timer_input_bg_color2'];}
	$acx_csma_timer_iptext_color2=sanitize_text_field($_POST['acx_csma_timer_iptext_color2']);if($acx_csma_timer_iptext_color2==""){$acx_csma_timer_iptext_color2=$acx_csma_appearence_array['2']['acx_csma_timer_iptext_color2'];}
	$acx_csma_timer_head_color2=sanitize_text_field($_POST['acx_csma_timer_head_color2']);if($acx_csma_timer_head_color2==""){$acx_csma_timer_head_color2=$acx_csma_appearence_array['2']['acx_csma_timer_head_color2'];}
	$acx_csma_custom_html_top_temp2=stripslashes(trim($_POST['acx_csma_custom_html_top_temp2']));
	$acx_csma_desc_title2=sanitize_text_field($_POST['acx_csma_desc_title2']);
	$acx_csma_desc_subtitle2=stripslashes(trim($_POST['acx_csma_desc_subtitle2']));
	$acx_csma_desc_text_color2=sanitize_text_field($_POST['acx_csma_desc_text_color2']);if($acx_csma_desc_text_color2==""){$acx_csma_desc_text_color2=$acx_csma_appearence_array['2']['acx_csma_desc_text_color2'];}
	$acx_csma_fb_link2=esc_url_raw($_POST['acx_csma_fb_link2']);if($acx_csma_fb_link2==""){$acx_csma_fb_link2=$acx_csma_appearence_array['2']['acx_csma_fb_link2'];}
	$acx_csma_twitter_link2=esc_url_raw($_POST['acx_csma_twitter_link2']);if($acx_csma_twitter_link2==""){$acx_csma_twitter_link2=$acx_csma_appearence_array['2']['acx_csma_twitter_link2'];}
	$acx_csma_linkedin_link2=esc_url_raw($_POST['acx_csma_linkedin_link2']);if($acx_csma_linkedin_link2==""){$acx_csma_linkedin_link2=$acx_csma_appearence_array['2']['acx_csma_linkedin_link2'];}
	//***********************************template 3*************************
	if(ISSET($_POST['acx_csma_logo_choice3']))
	{
	$acx_csma_logo_choice3=sanitize_text_field($_POST['acx_csma_logo_choice3']);
	}
	else{
		if(array_key_exists('acx_csma_logo_choice',$acx_csma_appearence_array['3'])){
			$acx_csma_logo_choice3=$acx_csma_appearence_array['3']['acx_csma_logo_choice'];
		}else{
		$acx_csma_logo_choice3='image';
		}
	}
	
	$acx_csma_logo3=sanitize_text_field($_POST['acx_csma_logo3']);if($acx_csma_logo3==""){$acx_csma_logo3= $acx_csma_appearence_array['3']['acx_csma_logo3'];}
	$acx_csma_logo_text3=sanitize_text_field($_POST['acx_csma_logo_text3']);
	$acx_csma_logo_text_color3=sanitize_text_field($_POST['acx_csma_logo_text_color3']);if($acx_csma_logo_text_color3==""){$acx_csma_logo_text_color3=$acx_csma_appearence_array['3']['acx_csma_logo_text_color3'];}
	$acx_csma_title3=sanitize_text_field($_POST['acx_csma_title3']);if($acx_csma_title3==""){$acx_csma_title3=$acx_csma_appearence_array['3']['acx_csma_title3'];}
	$acx_csma_title_color3= sanitize_text_field($_POST['acx_csma_title_color3']);if($acx_csma_title_color3==""){$acx_csma_title_color3=$acx_csma_appearence_array['3']['acx_csma_title_color3'];}
	$acx_csma_subtitle_text3= sanitize_text_field($_POST['acx_csma_subtitle_text3']);if($acx_csma_subtitle_text3==""){$acx_csma_subtitle_text3=$acx_csma_appearence_array['3']['acx_csma_subtitle_text3'];}
	$acx_csma_subtitle_color3= sanitize_text_field($_POST['acx_csma_subtitle_color3']);if($acx_csma_subtitle_color3==""){$acx_csma_subtitle_color3=$acx_csma_appearence_array['3']['acx_csma_subtitle_color3'];}
	$acx_csma_subscribe_title3= sanitize_text_field($_POST['acx_csma_subscribe_title3']);if($acx_csma_subscribe_title3==""){$acx_csma_subscribe_title3=$acx_csma_appearence_array['3']['acx_csma_subscribe_title3'];}
	$acx_csma_subscribe_title_color3= sanitize_text_field($_POST['acx_csma_subscribe_title_color3']);if($acx_csma_subscribe_title_color3==""){$acx_csma_subscribe_title_color3=$acx_csma_appearence_array['3']['acx_csma_subscribe_title_color3'];}
	$acx_csma_subscribe_btn_text3=sanitize_text_field($_POST['acx_csma_subscribe_btn_text3']);if($acx_csma_subscribe_btn_text3==""){$acx_csma_subscribe_btn_text3=$acx_csma_appearence_array['3']['acx_csma_subscribe_btn_text3'];}
	$acx_csma_subscribe_btn_text_color3=sanitize_text_field($_POST['acx_csma_subscribe_btn_text_color3']);if($acx_csma_subscribe_btn_text_color3==""){$acx_csma_subscribe_btn_text_color3=$acx_csma_appearence_array['3']['acx_csma_subscribe_btn_text_color3'];}
	$acx_csma_subscribe_btn_color3=sanitize_text_field($_POST['acx_csma_subscribe_btn_color3']);if($acx_csma_subscribe_btn_color3==""){$acx_csma_subscribe_btn_color3=$acx_csma_appearence_array['3']['acx_csma_subscribe_btn_color3'];}
	$acx_csma_subscribe_btn_hover_color3=sanitize_text_field($_POST['acx_csma_subscribe_btn_hover_color3']);if($acx_csma_subscribe_btn_hover_color3==""){$acx_csma_subscribe_btn_hover_color3=$acx_csma_appearence_array['3']['acx_csma_subscribe_btn_hover_color3'];}
	$acx_csma_subscribe_btn_hover_bgcolor3=sanitize_text_field($_POST['acx_csma_subscribe_btn_hover_bgcolor3']);if($acx_csma_subscribe_btn_hover_bgcolor3==""){$acx_csma_subscribe_btn_hover_bgcolor3=$acx_csma_appearence_array['3']['acx_csma_subscribe_btn_hover_bgcolor3'];}
	$acx_csma_subscribe_success3=sanitize_text_field($_POST['acx_csma_subscribe_success3']);if($acx_csma_subscribe_success3==""){$acx_csma_subscribe_success3=$acx_csma_appearence_array['3']['acx_csma_subscribe_success3'];}
	$acx_csma_subscribe_invalid3=sanitize_text_field($_POST['acx_csma_subscribe_invalid3']);if($acx_csma_subscribe_invalid3==""){$acx_csma_subscribe_invalid3=$acx_csma_appearence_array['3']['acx_csma_subscribe_invalid3'];}
	$acx_csma_inside_title3= sanitize_text_field($_POST['acx_csma_inside_title3']);if($acx_csma_inside_title3==""){$acx_csma_inside_title3=$acx_csma_appearence_array['3']['acx_csma_inside_title3'];}
	$acx_csma_inside_title_color3= sanitize_text_field($_POST['acx_csma_inside_title_color3']);if($acx_csma_inside_title_color3==""){$acx_csma_inside_title_color3=$acx_csma_appearence_array['3']['acx_csma_inside_title_color3'];}
	$acx_csma_timer_iptext_color3= sanitize_text_field($_POST['acx_csma_timer_iptext_color3']);if($acx_csma_timer_iptext_color3==""){$acx_csma_timer_iptext_color3=$acx_csma_appearence_array['3']['acx_csma_timer_iptext_color3'];}
	$acx_csma_timer_head_color3= sanitize_text_field($_POST['acx_csma_timer_head_color3']);if($acx_csma_timer_head_color3==""){$acx_csma_timer_head_color3=$acx_csma_appearence_array['3']['acx_csma_timer_head_color3'];}
	$acx_csma_custom_html_top_temp3=stripslashes(trim($_POST['acx_csma_custom_html_top_temp3']));
	$acx_csma_desc_title3= sanitize_text_field($_POST['acx_csma_desc_title3']);
	$acx_csma_desc_subtitle3=stripslashes(trim($_POST['acx_csma_desc_subtitle3']));
	$acx_csma_desc_text_color3= sanitize_text_field($_POST['acx_csma_desc_text_color3']);if($acx_csma_desc_text_color3==""){$acx_csma_desc_text_color3=$acx_csma_appearence_array['3']['acx_csma_desc_text_color3'];}
	$acx_csma_footer_text3= sanitize_text_field($_POST['acx_csma_footer_text3']);if($acx_csma_footer_text3==""){$acx_csma_footer_text3=$acx_csma_appearence_array['3']['acx_csma_footer_text3'];}
	$acx_csma_footer_color3=sanitize_text_field($_POST['acx_csma_footer_color3']);if($acx_csma_footer_color3==""){$acx_csma_footer_color3=$acx_csma_appearence_array['3']['acx_csma_footer_color3'];}
	$acx_csma_social_link_title3=sanitize_text_field($_POST['acx_csma_social_link_title3']);if($acx_csma_social_link_title3==""){$acx_csma_social_link_title3=$acx_csma_appearence_array['3']['acx_csma_social_link_title3'];}
	$acx_csma_social_link_title_color3=sanitize_text_field($_POST['acx_csma_social_link_title_color3']);if($acx_csma_social_link_title_color3==""){$acx_csma_social_link_title_color3=$acx_csma_appearence_array['3']['acx_csma_social_link_title_color3'];}
	$acx_csma_fb_link3=esc_url_raw($_POST['acx_csma_fb_link3']);if($acx_csma_fb_link3==""){$acx_csma_fb_link3=$acx_csma_appearence_array['3']['acx_csma_fb_link3'];}
	$acx_csma_twitter_link3=esc_url_raw($_POST['acx_csma_twitter_link3']);if($acx_csma_twitter_link3==""){$acx_csma_twitter_link3=$acx_csma_appearence_array['3']['acx_csma_twitter_link3'];}
	$acx_csma_linkedin_link3=esc_url_raw($_POST['acx_csma_linkedin_link3']);if($acx_csma_linkedin_link3==""){$acx_csma_linkedin_link3=$acx_csma_appearence_array['3']['acx_csma_linkedin_link3'];}
	
	//********************************template 4***********************************
	$acx_csma_background_image4=sanitize_text_field($_POST['acx_csma_background_image4']);if($acx_csma_background_image4==""){$acx_csma_background_image4=$acx_csma_appearence_array['4']['acx_csma_background_image4'];}
	if(ISSET($_POST['acx_csma_logo_choice4']))
	{
	$acx_csma_logo_choice4=sanitize_text_field($_POST['acx_csma_logo_choice4']);
	}
	else{
		if(array_key_exists('acx_csma_logo_choice',$acx_csma_appearence_array['4'])){
			$acx_csma_logo_choice4=$acx_csma_appearence_array['4']['acx_csma_logo_choice'];
		}else{
		$acx_csma_logo_choice4='image';
		}
	}
	$acx_csma_logo4=sanitize_text_field($_POST['acx_csma_logo4']);if($acx_csma_logo4==""){$acx_csma_logo4=$acx_csma_appearence_array['4']['acx_csma_logo4'];}
	$acx_csma_logo_text4=$_POST['acx_csma_logo_text4'];
	$acx_csma_logo_text_color4=sanitize_text_field($_POST['acx_csma_logo_text_color4']);if($acx_csma_logo_text_color4==""){$acx_csma_logo_text_color4=$acx_csma_appearence_array['4']['acx_csma_logo_text_color4'];}
	$acx_csma_inside_bg_color4=sanitize_text_field($_POST['acx_csma_inside_bg_color4']);if($acx_csma_inside_bg_color4==""){$acx_csma_inside_bg_color4=$acx_csma_appearence_array['4']['acx_csma_inside_bg_color4'];}
	$acx_csma_title4=sanitize_text_field($_POST['acx_csma_title4']);if($acx_csma_title4==""){$acx_csma_title4=$acx_csma_appearence_array['4']['acx_csma_title4'];}
	$acx_csma_custom_html_top_temp4=stripslashes(trim($_POST['acx_csma_custom_html_top_temp4']));
	$acx_csma_title_color4=sanitize_text_field($_POST['acx_csma_title_color4']);if($acx_csma_title_color4==""){$acx_csma_title_color4=$acx_csma_appearence_array['4']['acx_csma_title_color4'];}
	$acx_csma_show_timer4=sanitize_text_field($_POST['acx_csma_show_timer4']);if($acx_csma_show_timer4==""){	$acx_csma_show_timer4=$acx_csma_appearence_array['1']['acx_csma_show_timer4'];}
	$acx_csma_timer_iptext_color4=sanitize_text_field($_POST['acx_csma_timer_iptext_color4']);if($acx_csma_timer_iptext_color4==""){$acx_csma_timer_iptext_color4=$acx_csma_appearence_array['4']['acx_csma_timer_iptext_color4'];;}
	$acx_csma_timer_head_color4=sanitize_text_field($_POST['acx_csma_timer_head_color4']);if($acx_csma_timer_head_color4==""){$acx_csma_timer_head_color4=$acx_csma_appearence_array['4']['acx_csma_timer_head_color4'];}
	$acx_csma_show_progressbar4=sanitize_text_field($_POST['acx_csma_show_progressbar4']);if($acx_csma_show_progressbar4==""){	$acx_csma_show_progressbar4=$acx_csma_appearence_array['1']['acx_csma_show_progressbar4'];}
	$acx_csma_progress_bar_color4=sanitize_text_field($_POST['acx_csma_progress_bar_color4']);if($acx_csma_progress_bar_color4==""){$acx_csma_progress_bar_color4=$acx_csma_appearence_array['4']['acx_csma_progress_bar_color4'];}
	$acx_csma_custom_html_bottom_temp4=stripslashes(trim($_POST['acx_csma_custom_html_bottom_temp4']));
	$acx_csma_fb_link4=esc_url_raw($_POST['acx_csma_fb_link4']);if($acx_csma_fb_link4==""){$acx_csma_fb_link4=$acx_csma_appearence_array['4']['acx_csma_fb_link4'];}
	$acx_csma_twitter_link4=esc_url_raw($_POST['acx_csma_twitter_link4']);if($acx_csma_twitter_link4==""){$acx_csma_twitter_link4=$acx_csma_appearence_array['4']['acx_csma_twitter_link4'];}
	$acx_csma_linkedin_link4=esc_url_raw($_POST['acx_csma_linkedin_link4']);if($acx_csma_linkedin_link4==""){$acx_csma_linkedin_link4=$acx_csma_appearence_array['4']['acx_csma_linkedin_link4'];}
	
	//********************************template5*********************************
	$acx_csma_bgcolor5=sanitize_text_field($_POST['acx_csma_bgcolor5']);if($acx_csma_bgcolor5==""){$acx_csma_bgcolor5=$acx_csma_appearence_array['5']['acx_csma_bgcolor5'];}
	if(ISSET($_POST['acx_csma_logo_choice5']))
	{
	$acx_csma_logo_choice5=sanitize_text_field($_POST['acx_csma_logo_choice5']);
	}
	else{
		if(array_key_exists('acx_csma_logo_choice',$acx_csma_appearence_array['5'])){
			$acx_csma_logo_choice5=$acx_csma_appearence_array['5']['acx_csma_logo_choice'];
		}else{
		$acx_csma_logo_choice5='image';
		}
	}
	$acx_csma_logo5=sanitize_text_field($_POST['acx_csma_logo5']);if($acx_csma_logo5==""){$acx_csma_logo5=$acx_csma_appearence_array['5']['acx_csma_logo5'];}
	$acx_csma_logo_text5=sanitize_text_field($_POST['acx_csma_logo_text5']);
	$acx_csma_logo_text_color5=sanitize_text_field($_POST['acx_csma_logo_text_color5']);if($acx_csma_logo_text_color5==""){$acx_csma_logo_text_color5=$acx_csma_appearence_array['5']['acx_csma_logo_text_color5'];}
	$acx_csma_inside_bg_color5=sanitize_text_field($_POST['acx_csma_inside_bg_color5']);if($acx_csma_inside_bg_color5==""){$acx_csma_inside_bg_color5=$acx_csma_appearence_array['5']['acx_csma_inside_bg_color5'];}
	$acx_csma_title5=sanitize_text_field($_POST['acx_csma_title5']);if($acx_csma_title5==""){$acx_csma_title5=$acx_csma_appearence_array['5']['acx_csma_title5'];}
	$acx_csma_title_color5=sanitize_text_field($_POST['acx_csma_title_color5']);if($acx_csma_title_color5==""){$acx_csma_title_color5=$acx_csma_appearence_array['5']['acx_csma_title_color5'];}
	$acx_csma_custom_html_top_temp5=stripslashes(trim($_POST['acx_csma_custom_html_top_temp5']));
	$acx_csma_show_timer5=sanitize_text_field($_POST['acx_csma_show_timer5']);if($acx_csma_show_timer5==""){$acx_csma_show_timer5=$acx_csma_show_timer5['5']['acx_csma_show_timer5'];}
	$acx_csma_timer_iptext_color5=sanitize_text_field($_POST['acx_csma_timer_iptext_color5']);if($acx_csma_timer_iptext_color5==""){$acx_csma_timer_iptext_color5=$acx_csma_appearence_array['5']['acx_csma_timer_iptext_color5'];}
	$acx_csma_timer_head_color5=sanitize_text_field($_POST['acx_csma_timer_head_color5']);if($acx_csma_timer_head_color5==""){$acx_csma_timer_head_color5=$acx_csma_appearence_array['5']['acx_csma_timer_head_color5'];}
	$acx_csma_show_progressbar5=sanitize_text_field($_POST['acx_csma_show_progressbar5']);if($acx_csma_show_progressbar5==""){$acx_csma_show_progressbar5=$acx_csma_appearence_array['5']['acx_csma_show_progressbar5'];}
	$acx_csma_progress_bar_color5=sanitize_text_field($_POST['acx_csma_progress_bar_color5']);if($acx_csma_progress_bar_color5==""){$acx_csma_progress_bar_color5=$acx_csma_appearence_array['5']['acx_csma_progress_bar_color5'];}
	$acx_csma_custom_html_bottom_temp5=stripslashes(trim($_POST['acx_csma_custom_html_bottom_temp5']));
	$acx_csma_subscribe_bg_color5=sanitize_text_field($_POST['acx_csma_subscribe_bg_color5']);if($acx_csma_subscribe_bg_color5==""){$acx_csma_subscribe_bg_color5=$acx_csma_appearence_array['5']['acx_csma_subscribe_bg_color5'];}
	
	$acx_csma_subscribe_main_title5=sanitize_text_field($_POST['acx_csma_subscribe_main_title5']);if($acx_csma_subscribe_main_title5==""){$acx_csma_subscribe_main_title5=$acx_csma_appearence_array['5']['acx_csma_subscribe_main_title5'];}
	
	$acx_csma_subscribe_title5=sanitize_text_field($_POST['acx_csma_subscribe_title5']);if($acx_csma_subscribe_title5==""){$acx_csma_subscribe_title5=$acx_csma_appearence_array['5']['acx_csma_subscribe_title5'];}
	$acx_csma_subscribe_success5=sanitize_text_field($_POST['acx_csma_subscribe_success5']);if($acx_csma_subscribe_success5==""){$acx_csma_subscribe_success5=$acx_csma_appearence_array['5']['acx_csma_subscribe_success5'];}
	$acx_csma_subscribe_invalid5=sanitize_text_field($_POST['acx_csma_subscribe_invalid5']);if($acx_csma_subscribe_invalid5==""){$acx_csma_subscribe_invalid5=$acx_csma_appearence_array['5']['acx_csma_subscribe_invalid5'];}
	$acx_csma_fb_link5=esc_url_raw($_POST['acx_csma_fb_link5']);if($acx_csma_fb_link5==""){$acx_csma_fb_link5=$acx_csma_appearence_array['5']['acx_csma_fb_link5'];}
	$acx_csma_twitter_link5=esc_url_raw($_POST['acx_csma_twitter_link5']);if($acx_csma_twitter_link5==""){$acx_csma_twitter_link5=$acx_csma_appearence_array['5']['acx_csma_twitter_link5'];}
	$acx_csma_linkedin_link5=esc_url_raw($_POST['acx_csma_linkedin_link5']);if($acx_csma_linkedin_link5==""){$acx_csma_linkedin_link5=$acx_csma_appearence_array['5']['acx_csma_linkedin_link5'];}
	
	$acx_csma_template=$_POST['acx_csma_template'];
	if($acx_csma_template==""){$acx_csma_template=1;}
	update_option('acx_csma_template',$acx_csma_template);
	$acx_csma_auto_launch=$_POST['acx_csma_auto_launch'];
	if($acx_csma_auto_launch==""){$acx_csma_auto_launch = 0;}
	update_option('acx_csma_auto_launch',$acx_csma_auto_launch);
	if($acx_csma_template == 0)
	{
		$acx_csma_custom_html_val = stripslashes(trim($_POST['acx_csma_custom_html_val']));
		// wp_filter_post_kses( $data )
		update_option('acx_csma_custom_html_val',$acx_csma_custom_html_val);
	}	
	else if($acx_csma_template==1)
	{
		$acx_csma_appearence_array=get_option('acx_csma_appearence_array');
		if(is_serialized($acx_csma_appearence_array ))
		{
			$acx_csma_appearence_array = unserialize($acx_csma_appearence_array); 
		}
			if (isset($acx_csma_appearence_array[$acx_csma_template]))
			{
				$acx_csma_appearence_array[$acx_csma_template] = 
										array(
							'acx_csma_background_image1'=>$acx_csma_background_image1,
							'acx_csma_logo_choice'=>$acx_csma_logo_choice1,
							'acx_csma_logo1'=>$acx_csma_logo1,
							'acx_csma_logo_text1' =>$acx_csma_logo_text1,
							'acx_csma_logo_text_color1' =>$acx_csma_logo_text_color1,
							'acx_csma_title1'=>$acx_csma_title1,
							'acx_csma_title_color1'=>$acx_csma_title_color1,
							'acx_csma_subtitle_text1'=>$acx_csma_subtitle_text1,
							'acx_csma_subtitle_color1'=>$acx_csma_subtitle_color1,
							'acx_csma_custom_html_top_temp1'=>$acx_csma_custom_html_top_temp1,
							'acx_csma_inside_bg_color1'=>$acx_csma_inside_bg_color1,
							'acx_csma_inside_title1'=>$acx_csma_inside_title1,
							'acx_csma_inside_title_color1'=>$acx_csma_inside_title_color1,
							'acx_csma_custom_html_bottom_temp1'=>$acx_csma_custom_html_bottom_temp1,
							'acx_csma_show_timer1'=>$acx_csma_show_timer1,
							'acx_csma_timer_bg_color1'=>$acx_csma_timer_bg_color1,
							'acx_csma_timer_iptext_color1'=>$acx_csma_timer_iptext_color1,
							'acx_csma_timer_head_color1'=>$acx_csma_timer_head_color1,
							'acx_csma_subscribe_bg_color1'=>$acx_csma_subscribe_bg_color1,
							'acx_csma_subscribe_btn_text1'=>$acx_csma_subscribe_btn_text1,
							'acx_csma_subscribe_btn_text_color1'=>$acx_csma_subscribe_btn_text_color1,
							'acx_csma_subscribe_btn_color1'=>$acx_csma_subscribe_btn_color1,
							'acx_csma_subscribe_btn_hover_color1'=>$acx_csma_subscribe_btn_hover_color1,
							'acx_csma_subscribe_btn_hover_bgcolor1'=>$acx_csma_subscribe_btn_hover_bgcolor1,
							'acx_csma_subscribe_title1'=>$acx_csma_subscribe_title1,
							'acx_csma_subscribe_title_color1'=>$acx_csma_subscribe_title_color1,
							'acx_csma_subscribe_success1'=>$acx_csma_subscribe_success1,
							'acx_csma_subscribe_invalid1'=>$acx_csma_subscribe_invalid1,
							'acx_csma_footer_bgcolor1'=>$acx_csma_footer_bgcolor1,
							'acx_csma_footer_text1'=>$acx_csma_footer_text1,
							'acx_csma_footer_text_color1'=>$acx_csma_footer_text_color1
											);
			}
		if(!is_serialized($acx_csma_appearence_array))
		{
			$acx_csma_appearence_array = serialize($acx_csma_appearence_array); 
		}
		update_option('acx_csma_appearence_array',$acx_csma_appearence_array);
	}
	else if($acx_csma_template==2)
	{
		$acx_csma_appearence_array=get_option('acx_csma_appearence_array');
		if(is_serialized($acx_csma_appearence_array ))
		{
			$acx_csma_appearence_array = unserialize($acx_csma_appearence_array); 
		}
			if (isset($acx_csma_appearence_array[$acx_csma_template]))
			{
				$acx_csma_appearence_array[$acx_csma_template] = 
						array(
							'acx_csma_bg_color2'=>$acx_csma_bg_color2,
							'acx_csma_logo_choice'=>$acx_csma_logo_choice2,
							'acx_csma_logo2'=>$acx_csma_logo2,
							'acx_csma_logo_text2' =>$acx_csma_logo_text2,
							'acx_csma_logo_text_color2' =>$acx_csma_logo_text_color2,
							'acx_csma_title2'=>$acx_csma_title2,
							'acx_csma_title_color2'=>$acx_csma_title_color2,
							'acx_csma_subtitle_text2'=>$acx_csma_subtitle_text2,
							'acx_csma_subtitle_color2'=>$acx_csma_subtitle_color2,
							'acx_csma_inside_bg_color2'=>$acx_csma_inside_bg_color2,
							'acx_csma_timer_title2'=>$acx_csma_timer_title2,
							'acx_csma_subscribe_btn_color2'=>$acx_csma_subscribe_btn_color2,
							'acx_csma_subscribe_success2'=>$acx_csma_subscribe_success2,
							'acx_csma_subscribe_invalid2'=>$acx_csma_subscribe_invalid2,
							'acx_csma_timer_input_bg_color2'=>$acx_csma_timer_input_bg_color2,
							'acx_csma_timer_iptext_color2'=>$acx_csma_timer_iptext_color2,
							'acx_csma_timer_head_color2'=>$acx_csma_timer_head_color2,
							'acx_csma_custom_html_top_temp2'=>$acx_csma_custom_html_top_temp2,
							'acx_csma_desc_title2'=>$acx_csma_desc_title2,
							'acx_csma_desc_subtitle2'=>$acx_csma_desc_subtitle2,
							'acx_csma_desc_text_color2'=>$acx_csma_desc_text_color2,
							'acx_csma_fb_link2'=>$acx_csma_fb_link2,
							'acx_csma_twitter_link2'=>$acx_csma_twitter_link2,
							'acx_csma_linkedin_link2'=>$acx_csma_linkedin_link2
							);
			}
		if(!is_serialized($acx_csma_appearence_array))
		{
			$acx_csma_appearence_array = serialize($acx_csma_appearence_array); 
		}
		update_option('acx_csma_appearence_array',$acx_csma_appearence_array);
	}
	else if($acx_csma_template==3)
	{
		$acx_csma_appearence_array=get_option('acx_csma_appearence_array');
		if(is_serialized($acx_csma_appearence_array ))
		{
			$acx_csma_appearence_array = unserialize($acx_csma_appearence_array); 
		}
			if (isset($acx_csma_appearence_array[$acx_csma_template]))
			{
				$acx_csma_appearence_array[$acx_csma_template] = 
						array(
							'acx_csma_logo_choice'=>$acx_csma_logo_choice3,
							'acx_csma_logo3'=>$acx_csma_logo3,
							'acx_csma_logo_text3' =>$acx_csma_logo_text3,
							'acx_csma_logo_text_color3' =>$acx_csma_logo_text_color3,
							'acx_csma_title3'=>$acx_csma_title3,
							'acx_csma_title_color3'=>$acx_csma_title_color3,
							'acx_csma_subtitle_text3'=>$acx_csma_subtitle_text3,
							'acx_csma_subtitle_color3'=>$acx_csma_subtitle_color3,
							'acx_csma_subscribe_title3'=>$acx_csma_subscribe_title3,
							'acx_csma_subscribe_title_color3'=>$acx_csma_subscribe_title_color3,
							'acx_csma_subscribe_btn_text3'=>$acx_csma_subscribe_btn_text3,
							'acx_csma_subscribe_btn_text_color3'=>$acx_csma_subscribe_btn_text_color3,
							'acx_csma_subscribe_btn_color3'=>$acx_csma_subscribe_btn_color3,
							'acx_csma_subscribe_btn_hover_color3'=>$acx_csma_subscribe_btn_hover_color3,
							'acx_csma_subscribe_btn_hover_bgcolor3'=>$acx_csma_subscribe_btn_hover_bgcolor3,
							'acx_csma_subscribe_success3'=>$acx_csma_subscribe_success3,
							'acx_csma_subscribe_invalid3'=>$acx_csma_subscribe_invalid3,
							'acx_csma_inside_title3'=>$acx_csma_inside_title3,
							'acx_csma_inside_title_color3'=>$acx_csma_inside_title_color3,
							'acx_csma_timer_iptext_color3'=>$acx_csma_timer_iptext_color3,
							'acx_csma_timer_head_color3'=>$acx_csma_timer_head_color3,
							'acx_csma_custom_html_top_temp3'=>$acx_csma_custom_html_top_temp3,
							'acx_csma_desc_title3'=>$acx_csma_desc_title3,
							'acx_csma_desc_subtitle3'=>$acx_csma_desc_subtitle3,
							'acx_csma_desc_text_color3'=>$acx_csma_desc_text_color3,
							'acx_csma_footer_text3'=>$acx_csma_footer_text3,
							'acx_csma_footer_color3'=>$acx_csma_footer_color3,
							'acx_csma_social_link_title3'=>$acx_csma_social_link_title3,
							'acx_csma_social_link_title_color3'=>$acx_csma_social_link_title_color3,
							'acx_csma_fb_link3'=>$acx_csma_fb_link3,
							'acx_csma_twitter_link3'=>$acx_csma_twitter_link3,
							'acx_csma_linkedin_link3'=>$acx_csma_linkedin_link3
						);
			}
		if(!is_serialized($acx_csma_appearence_array))
		{
			$acx_csma_appearence_array = serialize($acx_csma_appearence_array); 
		}
		update_option('acx_csma_appearence_array',$acx_csma_appearence_array);
	}
	else if($acx_csma_template==4)
	{
		$acx_csma_appearence_array=get_option('acx_csma_appearence_array');
		if(is_serialized($acx_csma_appearence_array ))
		{
			$acx_csma_appearence_array = unserialize($acx_csma_appearence_array); 
		}
			if (isset($acx_csma_appearence_array[$acx_csma_template]))
			{
				$acx_csma_appearence_array[$acx_csma_template] = 
						array(
							'acx_csma_background_image4'=>$acx_csma_background_image4,
							'acx_csma_logo_choice'=>$acx_csma_logo_choice4,
							'acx_csma_logo4'=>$acx_csma_logo4,
							'acx_csma_logo_text4' =>$acx_csma_logo_text4,
							'acx_csma_logo_text_color4' =>$acx_csma_logo_text_color4,
							'acx_csma_inside_bg_color4'=>$acx_csma_inside_bg_color4,
							'acx_csma_title4'=>$acx_csma_title4,
							'acx_csma_custom_html_top_temp4'=>$acx_csma_custom_html_top_temp4,
							'acx_csma_title_color4'=>$acx_csma_title_color4,
							'acx_csma_show_timer4'=>$acx_csma_show_timer4,
							'acx_csma_timer_iptext_color4'=>$acx_csma_timer_iptext_color4,
							'acx_csma_timer_head_color4'=>$acx_csma_timer_head_color4,
							'acx_csma_show_progressbar4'=>$acx_csma_show_progressbar4,
							'acx_csma_progress_bar_color4'=>$acx_csma_progress_bar_color4,
							'acx_csma_custom_html_bottom_temp4'=>$acx_csma_custom_html_bottom_temp4,
							'acx_csma_fb_link4'=>$acx_csma_fb_link4,
							'acx_csma_twitter_link4'=>$acx_csma_twitter_link4,
							'acx_csma_linkedin_link4'=>$acx_csma_linkedin_link4
							);
			}
		if(!is_serialized($acx_csma_appearence_array))
		{
			$acx_csma_appearence_array = serialize($acx_csma_appearence_array); 
		}
		update_option('acx_csma_appearence_array',$acx_csma_appearence_array);
	}
	else if($acx_csma_template==5)
	{
		$acx_csma_appearence_array=get_option('acx_csma_appearence_array');
		if(is_serialized($acx_csma_appearence_array ))
		{
			$acx_csma_appearence_array = unserialize($acx_csma_appearence_array); 
		}
			if (isset($acx_csma_appearence_array[$acx_csma_template]))
			{
				$acx_csma_appearence_array[$acx_csma_template]= 
					array(
							'acx_csma_bgcolor5'=>$acx_csma_bgcolor5,
							'acx_csma_logo_choice'=>$acx_csma_logo_choice5,
							'acx_csma_logo5'=>$acx_csma_logo5,
							'acx_csma_logo_text5' =>$acx_csma_logo_text5,
							'acx_csma_logo_text_color5' =>$acx_csma_logo_text_color5,
							'acx_csma_inside_bg_color5'=>$acx_csma_inside_bg_color5,
							'acx_csma_title5'=>$acx_csma_title5,
							'acx_csma_custom_html_top_temp5'=>$acx_csma_custom_html_top_temp5,
							'acx_csma_title_color5'=>$acx_csma_title_color5,
							'acx_csma_show_timer5'=>$acx_csma_show_timer5,
							'acx_csma_timer_iptext_color5'=>$acx_csma_timer_iptext_color5,
							'acx_csma_timer_head_color5'=>$acx_csma_timer_head_color5,
							'acx_csma_show_progressbar5'=>$acx_csma_show_progressbar5,
							'acx_csma_progress_bar_color5'=>$acx_csma_progress_bar_color5,
							'acx_csma_custom_html_bottom_temp5'=>$acx_csma_custom_html_bottom_temp5,
							'acx_csma_subscribe_bg_color5'=>$acx_csma_subscribe_bg_color5,
							'acx_csma_subscribe_main_title5' =>$acx_csma_subscribe_main_title5,
							'acx_csma_subscribe_title5'=>$acx_csma_subscribe_title5,
							'acx_csma_subscribe_success5'=>$acx_csma_subscribe_success5,
							'acx_csma_subscribe_invalid5'=>$acx_csma_subscribe_invalid5,
							'acx_csma_fb_link5'=>$acx_csma_fb_link5,
							'acx_csma_twitter_link5'=>$acx_csma_twitter_link5,
							'acx_csma_linkedin_link5'=>$acx_csma_linkedin_link5									
						);
			}
		if(!is_serialized($acx_csma_appearence_array))
		{
			$acx_csma_appearence_array = serialize($acx_csma_appearence_array); 
		}
		update_option('acx_csma_appearence_array',$acx_csma_appearence_array);
	}
?>
<div class="updated"><p><strong><?php _e('Coming Soon/Maintenance From Acurax Settings Saved!.'); ?></strong></p></div>
<script type="text/javascript">
 setTimeout(function(){
		jQuery('.updated').fadeOut('slow');
		
		}, 4000);

</script>
<?php
}
else
{
	acx_csma_hook_function('acx_csma_hook_mainoptions_inside_else_submit');
	// Normal page display
	$acx_csma_meta_title =get_option('acx_csma_meta_title');
	if($acx_csma_meta_title =="")
	{
		$acx_csma_meta_title ="Under Construction";
		update_option('acx_csma_meta_title',$acx_csma_meta_title);
	}
	$acx_csma_meta_description=get_option('acx_csma_meta_description');
	if($acx_csma_meta_description =="")
	{
		$acx_csma_meta_description ="";
		update_option('acx_csma_meta_description',$acx_csma_meta_description);
	}
	$acx_csma_meta_keywords=get_option('acx_csma_meta_keywords');
	if($acx_csma_meta_keywords =="")
	{
		$acx_csma_meta_keywords ="";
		update_option('acx_csma_meta_keywords',$acx_csma_meta_keywords);
	}
	
	$acx_csma_favicon=get_option('acx_csma_favicon');
	if($acx_csma_favicon =="")
	{
		$acx_csma_favicon = ACX_CSMA_BASE_LOCATION . 'images/favicon.png';
		update_option('acx_csma_favicon',$acx_csma_favicon);
	}
		$start_timestamp = current_time('timestamp');
		update_option('acx_csma_start_date_time',$start_timestamp);
		$acx_csma_date_time=get_option('acx_csma_date_time');
	if($acx_csma_date_time == "" || $acx_csma_date_time == '0')
	{
		$timestamp1=current_time('timestamp')+(60*60*24*30); // 30 days
		update_option('acx_csma_date_time',$timestamp1);
	}
	 $acx_csma_ga_trakng_code=get_option('acx_csma_ga_trakng_code');
	/* if($acx_csma_ga_trakng_code == "")
	{
		$acx_csma_ga_trakng_code = '';
		update_option('acx_csma_ga_trakng_code',$acx_csma_ga_trakng_code);
	} */
	
	$acx_csma_ip_list=get_option('acx_csma_ip_list');
	if($acx_csma_ip_list=="")
	{
		$acx_csma_ip_list=array();
	}
	else
	{	 
		if(is_serialized($acx_csma_ip_list))
		{
			$acx_csma_ip_list = unserialize($acx_csma_ip_list); 
		}	 
		if(!is_array($acx_csma_ip_list))
		{
			$acx_csma_ip_list = array();
		}
	}
	update_option('acx_csma_ip_list',$acx_csma_ip_list);
	$acx_csma_restrict_role=get_option('acx_csma_restrict_role');
	if($acx_csma_restrict_role=="")
	{
		$acx_csma_restrict_role=array("Administrator");
		if(!is_serialized($acx_csma_restrict_role ))
		{
			$acx_csma_restrict_role = serialize($acx_csma_restrict_role); 
		} 
		update_option('acx_csma_restrict_role',$acx_csma_restrict_role);
	}
	
	$acx_csma_appearence_array=get_option('acx_csma_appearence_array');
	if(is_serialized($acx_csma_appearence_array))
	{
		$acx_csma_appearence_array = unserialize($acx_csma_appearence_array); 
	} 
	$acx_csma_template = get_option('acx_csma_template');
	if($acx_csma_template=="")
	{
		$acx_csma_template="1";
		update_option('acx_csma_template',$acx_csma_template);
	}
	$acx_csma_activation_status =get_option('acx_csma_activation_status');
	if($acx_csma_activation_status=="")
	{
		$acx_csma_activation_status = "0";
		update_option('acx_csma_activation_status',$acx_csma_activation_status);
	}
	if(get_option('acx_csma_custom_html_val')=="")
	{
		$acx_csma_custom_html_val = "<html><head><title>Page Under Maintenance</title></head><body>Sorry, This page is under maintenance.</body></html>";
	$acx_csma_custom_html_val = trim($acx_csma_custom_html_val);
	update_option('acx_csma_custom_html_val',$acx_csma_custom_html_val);
	}
	$acx_csma_auto_launch=get_option('acx_csma_auto_launch'); 
	if($acx_csma_auto_launch=="")
	{
		$acx_csma_auto_launch = 0;
		update_option('acx_csma_auto_launch',$acx_csma_auto_launch);
	}
}
	if(ISSET($_POST['acx_csma_Submit']))
	{
		$acx_csmap_open_all_boxes_default = $_POST['acx_csmap_open_all_boxes_default'];
		update_option('acx_csmap_open_all_boxes_default',$acx_csmap_open_all_boxes_default);
	}
	else{
		$acx_csmap_open_all_boxes_default=get_option('acx_csmap_open_all_boxes_default');
		if($acx_csmap_open_all_boxes_default=="")
		{
			$acx_csmap_open_all_boxes_default = "yes";
			update_option('acx_csmap_open_all_boxes_default',$acx_csmap_open_all_boxes_default);
		}
		
	}
acx_csma_hook_function('acx_csma_hook_mainoptions_outside_if_submit');
?>
<div class="wrap">
<div style='background: white none repeat scroll 0% 0%; height: 100%; margin-top: 5px; border-radius: 15px; min-height: 450px; box-sizing: border-box; margin-left: auto; margin-right: auto; width: 98%; padding: 1%;display: table;'>
<?php acx_csma_hook_function('acx_csma_hook_mainoptions_above_title'); ?>
<?php echo "<h2 class='acx_csma_page_h2'>" . __( 'Acurax Coming Soon / Maintenance Options','acx_csma_config' ) . "</h2>"; ?>
	<form name="acx_csma_form" id="acx_csma_form"  method="post" action="<?php echo str_replace( '%7E', '~',$_SERVER['REQUEST_URI']); ?>"><hr/>
		<table>
		<tr>
		<td><input type="hidden" name="acx_csma_hidden" value="Y"/></td>
		</tr> 
		<tr>
		<td><a id="acx_csma_tab_1" class="acx_csma_tab" onclick="javascript:acx_csma_show_div(1);">General Settings</a></td>
	 	<td><a id="acx_csma_tab_2" class="acx_csma_tab" onclick="javascript:acx_csma_show_div(2);">Appearance Settings</a></td>
		<?php acx_csma_hook_function('acx_csma_hook_mainoptions_add_settings'); ?>
		</tr>
		</table><hr/>
		<div id="acx_csma_tab_block_1" class="acx_csma_tab_block acx_csma_general" style="margin-left:20px;">
			<table>
			<tr>
<?php $acx_csma_activation_status=get_option('acx_csma_activation_status'); 
?>
			<td><?php _e('Status:', 'acx_csma_config'); ?></td>
			<td><input type="radio" id="acx_csma_activate" name="acx_csma_activate"  value="1" <?php if($acx_csma_activation_status=="1"){echo "checked='checked'";}?> />&nbsp;<?php _e('Activate', 'acx_csma_config'); ?>&nbsp;&nbsp;&nbsp;<input type="radio" id="acx_csma_activate" name="acx_csma_activate"  value="0"<?php if($acx_csma_activation_status =="0"){echo "checked='checked'";}?>/>&nbsp;<?php _e('Deactivate', 'acx_csma_config'); ?></td></tr>
			<tr><td><p><?php _e("Page Meta Title: " ); ?></p></td>
			<td><input type="text" name="acx_csma_meta_title" value="<?php echo stripslashes(esc_attr(get_option('acx_csma_meta_title'))); ?>" size="20"/></td>
			</tr>
			<tr><td><p><?php _e("Page Meta Description: " ); ?></p></td>
			<td><input type="text" name="acx_csma_meta_description" value="<?php echo stripslashes(esc_attr(get_option('acx_csma_meta_description'))); ?>" size="20"/></td></tr>
			<tr><td><p><?php _e("Page Meta Keywords: " ); ?></p></td>
			<td><input type="text" name="acx_csma_meta_keywords" value="<?php echo stripslashes(esc_attr(get_option('acx_csma_meta_keywords'))); ?>" size="20"/></td></tr>
			<tr><td><?php _e("Upload Favicon: " ); ?></td>
			<td>
			<?php 
			$favicon_attach_id = get_option('acx_csma_favicon');
			$url = $favicon_attach_id;
			if(is_numeric($favicon_attach_id))
			{
				$fav_icon_attachment_url = parse_url( wp_get_attachment_url($favicon_attach_id) );
				$url    = $fav_icon_attachment_url [ 'scheme' ]  . '://' .rawurlencode( basename( $fav_icon_attachment_url[ 'host' ])). $fav_icon_attachment_url[ 'path' ];
			}
			?>
			<img id="acx_csma_favicon" src="<?php  echo $url; ?>" style="width:20px;height:auto;">
			<input type="hidden" id="acx_csma_favicon_field" name="acx_csma_favicon_field" value="<?php echo $favicon_attach_id; ?>" size="20">
				
			<a id="acx_csma_favicon_button" class="button">Pick a Favicon</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<span><?php _e("Recommended size 16 X 16 " ); ?> </span>
			</td>
			</tr>
			<tr><td><?php _e("Expected Date and Time to end Maintenance mode: " ); $format = "Y/m/d H:i"; ?></td>
			<td>
			<?php 
				$timestamp1=get_option('acx_csma_date_time');
			?>
			<input type="text" value="<?php  print date_i18n($format, $timestamp1); ?>" id="datetimepicker" name="acx_csma_date_time"/>&nbsp;&nbsp; Current Wordpress Time:
			<?php  print date_i18n($format, current_time('timestamp')); ?><br><br></td></tr>
			<tr>
			<td><?php _e("Would you like to end the maintenance mode automatically on the above specified time?: " ); ?></td>
			<?php $acx_csma_auto_launch=get_option('acx_csma_auto_launch'); 
			?>
			<td><input type="radio" id="acx_csma_auto_launch" name="acx_csma_auto_launch"  value="1" <?php if($acx_csma_auto_launch=="1"){echo "checked='checked'";}?> />&nbsp;<?php _e('YES', 'acx_csma_config'); ?>&nbsp;&nbsp;&nbsp;<input type="radio" id="acx_csma_auto_launch" name="acx_csma_auto_launch"  value="0"<?php if($acx_csma_auto_launch =="0"){echo "checked='checked'";}?>/>&nbsp;<?php _e('NO', 'acx_csma_config'); ?></td></tr>
			<tr>
			<td><?php _e("Google Analytics Tracking Code: " ); ?></td>
			<td><textarea id="acx_csma_ga_trakng_code" name="acx_csma_ga_trakng_code" placeholder="Google Analytics Tracking Code Here"><?php echo stripslashes($acx_csma_ga_trakng_code); ?></textarea></td>
			</tr>
			
			<tr><td><b><?php echo "<h4>" . __( 'Access Settings', 'acx_csma_config' ) . "</h4>"; ?></b></td></tr>
			</table>
			<table>
				<tr><td><?php _e("Do not show maintenance page for the following IPs:"); ?></td></tr>
				<tr>
				<td><p><?php $acx_csma_ip_list=get_option('acx_csma_ip_list');if(is_serialized($acx_csma_ip_list)){$acx_csma_ip_list=unserialize($acx_csma_ip_list);}?>
				<select name="acx_csma_ip_list[]" id="acx_csma_ip_list1" multiple>
				<?php foreach($acx_csma_ip_list as $key =>$value)
				{?>
				<option selected><?php echo $value; ?></option><?php }?>
				</select><br/><br/>
				<input type="text" name="acx_csma_txt_ip" id="acx_csma_txt_ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>"/>
				<input type="button" name="acx_csma_add_list" id="acx_csma_add_list"  class="button" value="add" onclick="acx_csma_addNewItem(acx_csma_ip_list1,acx_csma_txt_ip);"/>
				<input  type="button" name="acx_csma_del_list" id="acx_csma_del_list"  class="button" value="delete" onClick="acx_csma_removeItem(acx_csma_ip_list1);"/></p>
				</td></tr>
			</table>
	
			<table>
				<tr><td><?php _e("Do not show maintenance page for the following Roles:"); ?></td></tr>
<?php 
				$acx_csma_restrict_role=get_option('acx_csma_restrict_role');
				if($acx_csma_restrict_role =="")
				{
					$acx_csma_restrict_role=array();	
				}
				if(is_serialized($acx_csma_restrict_role))
				{
					$acx_csma_restrict_role = unserialize($acx_csma_restrict_role); 
				}
				// get all roles
				global $wp_roles;
				$roles = $wp_roles->get_names();
				foreach($roles as $role) 
				{ 
					if($role!="Administrator")
					{?>
						<tr><td><input type="checkbox" name="acx_csma_restrict_role[]" size="20" value="<?php echo $role; ?>"<?php if(is_array($acx_csma_restrict_role) && in_array($role,$acx_csma_restrict_role)){echo "checked='checked'"; }?>/><?php echo $role; ?></td><tr>
<?php   			}
				}?>
			</table>
			<?php acx_csma_hook_function('acx_csma_hook_mainoptions_below_general_settings'); ?>
		</div><!--acx_csma_tab_block_1-->
	<div id="acx_csma_tab_block_2" class="acx_csma_tab_block acx_csma_appearence" style="display:none;">
		<h3>Choose Your Template</h3>
	<div id="main">
	<?php $acx_csma_template = get_option('acx_csma_template'); ?>
	<div id="img_holder">
	<label for="acx_csma_template1">
    <img src="<?php echo ACX_CSMA_BASE_LOCATION . 'images/template1 .png'; ?>"></label><br /><input type="radio" name="acx_csma_template" id="acx_csma_template1" value="1" <?php if ($acx_csma_template=="1") {echo "checked=checked";}?> onclick="acx_csma_rdbtn_show_div(1);"/>Template 1 &nbsp;&nbsp;&nbsp;<a href="<?php echo get_site_url(); ?>?acx_csma_preview=1" target="_blank">Preview</a>
    </div> <!-- img_holder -->
    <div id="img_holder">
	<label for="acx_csma_template2">
    <img src="<?php echo ACX_CSMA_BASE_LOCATION . 'images/template2.png'; ?>"></label><br /><input type="radio" name="acx_csma_template" id="acx_csma_template2" value="2" <?php if ($acx_csma_template=="2") {echo "checked=checked";}?> onclick="acx_csma_rdbtn_show_div(2);"/>Template 2 &nbsp;&nbsp;&nbsp;<a href="<?php echo get_site_url(); ?>?acx_csma_preview=2" target="_blank">Preview</a>
    </div> <!-- img_holder -->
    <div id="img_holder">
	<label for="acx_csma_template3">
    <img src="<?php echo ACX_CSMA_BASE_LOCATION . 'images/template3.png'; ?>"></label><br /><input type="radio" name="acx_csma_template" id="acx_csma_template3" value="3" <?php if ($acx_csma_template=="3") {echo "checked=checked";}?> onclick="acx_csma_rdbtn_show_div(3);"/>Template 3 &nbsp;&nbsp;&nbsp;<a href="<?php echo get_site_url(); ?>?acx_csma_preview=3" target="_blank">Preview</a>
    </div> <!-- img_holder -->
    <div id="img_holder">
	<label for="acx_csma_template4">
    <img src="<?php echo ACX_CSMA_BASE_LOCATION . 'images/template4.png'; ?>"></label><br /><input type="radio" name="acx_csma_template" id="acx_csma_template4" value="4" <?php if ($acx_csma_template=="4") {echo "checked=checked";}?> onclick="acx_csma_rdbtn_show_div(4);"/>Template 4 &nbsp;&nbsp;&nbsp;<a href="<?php echo get_site_url(); ?>?acx_csma_preview=4" target="_blank" >Preview</a>
    </div> <!-- img_holder -->
    <div id="img_holder">
	<label for="acx_csma_template5">
    <img src="<?php echo ACX_CSMA_BASE_LOCATION . 'images/template5.png'; ?>"></label><br /><input type="radio" name="acx_csma_template" id="acx_csma_template5" value="5" <?php if ($acx_csma_template=="5") {echo "checked=checked";}?> onclick="acx_csma_rdbtn_show_div(5);"/>Template 5 &nbsp;&nbsp;&nbsp;<a href="<?php echo get_site_url(); ?>?acx_csma_preview=5" target="_blank">Preview</a>
    </div> <!-- img_holder -->
	<div id="img_holder">
	<label for="acx_csma_custom_template">
    <img src="<?php echo ACX_CSMA_BASE_LOCATION . 'images/html-img.png'; ?>"></label><br />
    <input type="radio" name="acx_csma_template" id="acx_csma_custom_template" value="0" <?php if ($acx_csma_template =="0") {echo "checked=checked";}?> onclick="acx_csma_rdbtn_show_div(0);"/>Custom Html &nbsp;&nbsp;&nbsp;<a href="<?php echo get_site_url(); ?>?acx_csma_preview=0" target="_blank">Preview</a>
    </div> <!-- img_holder -->
	<?php acx_csma_hook_function('acx_csma_hook_mainoptions_below_add_template'); ?>
</div> <!-- main -->



		<?php
		$acx_csma_appearence_array=get_option('acx_csma_appearence_array');
		if(is_serialized($acx_csma_appearence_array))
		{
			$acx_csma_appearence_array = unserialize($acx_csma_appearence_array); 
		}
?>
		<div id="acx_csma_template_1" style="display:none;" class="acx_csma_template_option_holder">
			<div id="acx_csma_1_p_q_and_a_h_main_holder">
				<!-- ################################ QUESTION AND ANSWER SET STARTS HERE #########################################-->
				<?php $acx_csmap_qa_id = $acx_csmap_qa_id+1; ?>
				<div id="acx_csmap_q_and_a_h" class="acx_csmap_q_and_a_h_common acx_csmap_q_and_a_h_<?php echo $acx_csmap_qa_id; ?>">
					<span class="acx_csma_q" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);">
					Background Settings
					</span>
						<span class="acx_csma_toggle acx_csma_toggle_<?php echo $acx_csmap_qa_id; ?> plus" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);"></span>
					<div id="acx_csmap_q_and_a" class="acx_csmap_q_and_a_common acx_csmap_q_and_a_<?php echo $acx_csmap_qa_id; ?>" style="display:none;">
						<div class="acx_csmap_q_and_a_inside">
							<label>Background Image:</label>
							<div class="acx_qa_field">
							<?php 
				$acx_csma_background_image1_id = $acx_csma_appearence_array['1']['acx_csma_background_image1'];
				$bg_image1_url  = $acx_csma_background_image1_id;
				if(is_numeric($acx_csma_background_image1_id))
				{
					$image1_attachment_url = parse_url( wp_get_attachment_url($acx_csma_background_image1_id) );
					$bg_image1_url    = $image1_attachment_url [ 'scheme' ]  . '://' .rawurlencode( basename( $image1_attachment_url[ 'host' ])). $image1_attachment_url[ 'path' ];
				} 
				?>
							
								<img id="custom_uploader_template_1_img_field_preview" src="<?php echo $bg_image1_url; ?>" style="width:100px;height:auto;">
								<input type="hidden" id="custom_uploader_template_1_img_field" name="acx_csma_background_image1" value="<?php echo $acx_csma_background_image1_id; ?>" size="20">
								
								<a id="acx_upload_button_img1" class="button">Choose Image</a>
								<a id="acx_upload_button_reset_img1" onclick="acx_csma_restore_default('custom_uploader_template_1_img_field_preview','<?php echo ACX_CSMA_BASE_LOCATION . 'templates/1/images/body_bg.jpg'; ?>','custom_uploader_template_1_img_field');" class="button">Reset To Default</a>
							</div> <!-- acx_qa_field --> 
						</div> <!-- acx_csmap_q_and_a_inside --> 
					</div> <!-- acx_csmap_q_and_a -->
				</div> <!-- acx_csmap_q_and_a_h -->
			<!-- ################################# QUESTION AND ANSWER SET ENDS HERE ############################################# -->
			<!-- ################################ QUESTION AND ANSWER SET STARTS HERE ############################################ -->
				<?php $acx_csmap_qa_id = $acx_csmap_qa_id+1; ?>
				<div id="acx_csmap_q_and_a_h" class="acx_csmap_q_and_a_h_common acx_csmap_q_and_a_h_<?php echo $acx_csmap_qa_id; ?>">
					<span class="acx_csma_q" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);">
					Logo Settings
					</span>
					<span class="acx_csma_toggle acx_csma_toggle_<?php echo $acx_csmap_qa_id; ?> plus" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);"></span>
					<div id="acx_csmap_q_and_a" class="acx_csmap_q_and_a_common acx_csmap_q_and_a_<?php echo $acx_csmap_qa_id; ?>" style="display:none;">
						<div class="acx_csmap_q_and_a_inside">
						<div class="acx_csma_logo_main" >
						<table cellspacing="10">
						<tr><td>
						
						<input type="radio" name="acx_csma_logo_choice1" class="acx_csma_logo"  id="acx_csma_logo_image1" value="image"  onclick="acx_csma_rdbtn_show_logo('image','1');" <?php if(array_key_exists('acx_csma_logo_choice',$acx_csma_appearence_array['1'])){if($acx_csma_appearence_array['1']['acx_csma_logo_choice'] == 'image' || $acx_csma_appearence_array['1']['acx_csma_logo_choice']==''){echo "checked='checked'";}} else{ echo "checked='checked'";} ?>/><p>Logo Image</p></td><td>
						<input type="radio" name="acx_csma_logo_choice1" class="acx_csma_logo"  id="acx_csma_logo_text1" value="text" onclick="acx_csma_rdbtn_show_logo('text','1');" <?php if(array_key_exists('acx_csma_logo_choice',$acx_csma_appearence_array['1'])){if($acx_csma_appearence_array['1']['acx_csma_logo_choice'] == 'text'){echo "checked='checked'";}}?>/><p>Logo Text</p></td></tr>
						</table>
						</div><!--acx_csma_logo_main -->
						<div id="acx_show_logo_image_1" class="acx_csma_logo_block acx_csma_logo_block_1">
						<?php 
					$acx_csma_logo1_id = $acx_csma_appearence_array['1']['acx_csma_logo1'];
					$logo1_url  = $acx_csma_logo1_id;
					if(is_numeric($acx_csma_logo1_id))
					{
						$logo1_attachment_url = parse_url( wp_get_attachment_url($acx_csma_logo1_id) );
						$logo1_url    = $logo1_attachment_url [ 'scheme' ]  . '://' .rawurlencode( basename( $logo1_attachment_url[ 'host' ])). $logo1_attachment_url[ 'path' ];
					} 
				/* 	echo "<pre>";
					print_r($acx_csma_appearence_array['1']);
					echo "</pre>"; */
						?>
							<label>
							Logo Image: <span id="acx_csma_span">(Recommended size 231x67)</span>
							</label>
							<div class="acx_qa_field">
								<img id="custom_uploader_template_1_logo_field_preview" src="<?php echo $logo1_url; ?>" style="width:100px;height:auto;">
								<input type="hidden" id="custom_uploader_template_1_logo_field" name="acx_csma_logo1" value="<?php echo $acx_csma_logo1_id; ?>" size="20"><a id="acx_upload_button_logo1" class="button">Pick a Logo</a>
								<a id="acx_upload_button_reset_logo1" onclick="acx_csma_restore_default('custom_uploader_template_1_logo_field_preview','<?php echo ACX_CSMA_BASE_LOCATION . 'templates/1/images/logo.png'; ?>','custom_uploader_template_1_logo_field');" class="button">Reset To Default</a>
							</div> <!-- acx_qa_field --> 
						</div> <!-- acx_show_logo_image-->
							<div id="acx_show_logo_text_1"  class="acx_csma_logo_block acx_csma_logo_block_1">
							<label>
							Logo Text:
							</label>
							<div class="acx_qa_field">
							<?php  if(is_array($acx_csma_appearence_array['1']) && array_key_exists('acx_csma_logo_text1',$acx_csma_appearence_array['1'])){$acx_csma_logo_text1=$acx_csma_appearence_array['1']['acx_csma_logo_text1'];
							if($acx_csma_logo_text1 == "")
							{
								$acx_csma_logo_text1=get_bloginfo('name');
							}}else{
								$acx_csma_logo_text1=get_bloginfo('name');
							}?>
							<input type="text" name="acx_csma_logo_text1" placeholder="Logo Text Here" value="<?php echo $acx_csma_logo_text1; ?>" size="20"/>
							</div> <!-- acx_qa_field -->
							<label>
							Logo Text Color: <a onclick="acx_csma_restore_default('','#ffffff','acx_csma_logo_text_color1');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
							<div class="acx_qa_field">
							<?php  if(is_array($acx_csma_appearence_array['1']) && array_key_exists('acx_csma_logo_text_color1',$acx_csma_appearence_array['1'])){$acx_csma_logo_text_color1=$acx_csma_appearence_array['1']['acx_csma_logo_text_color1'];
							if($acx_csma_logo_text_color1 == "")
							{
								$acx_csma_logo_text_color1="#ffffff";
							}}else{$acx_csma_logo_text_color1="#ffffff";;}?>
							<input type="text" name="acx_csma_logo_text_color1" id="acx_csma_logo_text_color1" onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_logo_text_color1; ?>" size="20" />
							<div style="position: absolute;" id="acx_csma_logo_text_color1_div"></div>
							</div> <!-- acx_qa_field --> 
							</div> <!--acx_show_logo_text -->
						</div> <!-- acx_csmap_q_and_a_inside -->
					</div> <!-- acx_csmap_q_and_a -->
				</div> <!-- acx_csmap_q_and_a_h -->
			<!-- ################################# QUESTION AND ANSWER SET ENDS HERE ############################################# -->
			<!-- ################################ QUESTION AND ANSWER SET STARTS HERE ############################################ -->
					<?php $acx_csmap_qa_id = $acx_csmap_qa_id+1; ?>
				<div id="acx_csmap_q_and_a_h" class="acx_csmap_q_and_a_h_common acx_csmap_q_and_a_h_<?php echo $acx_csmap_qa_id; ?>">
					<span class="acx_csma_q" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);">
					Configure Heading Under Logo </span>
					<span class="acx_csma_toggle acx_csma_toggle_<?php echo $acx_csmap_qa_id; ?> plus" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);"></span>
					<div id="acx_csmap_q_and_a" class="acx_csmap_q_and_a_common acx_csmap_q_and_a_<?php echo $acx_csmap_qa_id; ?>" style="display:none;">
						<div class="acx_csmap_q_and_a_inside">
							<label>
							Title Text: 
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_title1" id="acx_csma_title1" value="<?php echo $acx_csma_appearence_array['1']['acx_csma_title1']; ?>" size="20"/>
							</div> <!-- acx_qa_field --> 
							<label>
							Title Color: <a onclick="acx_csma_restore_default('','#ffffff','acx_csma_title_color1');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_title_color1" id="acx_csma_title_color1" onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_appearence_array['1']['acx_csma_title_color1']; ?>" size="20" />
							<div style="position: absolute;" id="acx_csma_title_color1_div"></div>
							</div> <!-- acx_qa_field --> 
							<label>
							Subtitle Text:
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_subtitle_text1" id="acx_csma_subtitle_text1" value="<?php echo $acx_csma_appearence_array['1']['acx_csma_subtitle_text1']; ?>" size="20"/>
							</div> <!-- acx_qa_field --> 
							<label>
							Subtitle Color:<a onclick="acx_csma_restore_default('','#fffaa9','acx_csma_subtitle_color1');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
							<div class="acx_qa_field">
								<input type="text" name="acx_csma_subtitle_color1" id="acx_csma_subtitle_color1" onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_appearence_array['1']['acx_csma_subtitle_color1']; ?>" size="20"/>
								<div style="position: absolute;" id="acx_csma_subtitle_color1_div"></div>
							</div> <!-- acx_qa_field --> 
						</div> <!-- acx_csmap_q_and_a_inside -->
					</div> <!-- acx_csmap_q_and_a -->
				</div> <!-- acx_csmap_q_and_a_h -->
			<!-- ################################# QUESTION AND ANSWER SET ENDS HERE ############################################# -->

			<!-- ################################ QUESTION AND ANSWER SET STARTS HERE ############################################ -->
					<?php $acx_csmap_qa_id = $acx_csmap_qa_id+1; ?>
				<div id="acx_csmap_q_and_a_h" class="acx_csmap_q_and_a_h_common acx_csmap_q_and_a_h_<?php echo $acx_csmap_qa_id; ?>">
					<span class="acx_csma_q" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);">
					Countdown Timer Heading & Custom HTML Settings </span>
					<span class="acx_csma_toggle acx_csma_toggle_<?php echo $acx_csmap_qa_id; ?> plus" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);"></span>
					<div id="acx_csmap_q_and_a" class="acx_csmap_q_and_a_common acx_csmap_q_and_a_<?php echo $acx_csmap_qa_id; ?>" style="display:none;">
						<div class="acx_csmap_q_and_a_inside">
							<label>
							Custom HTML Block Above Countdown Timer
							</label>
							<div class="acx_qa_field">
							<?php $acx_csma_custom_html_top_temp1 = $acx_csma_appearence_array['1']['acx_csma_custom_html_top_temp1']; ?>
							<textarea id="acx_csma_custom_html_top_temp1" name="acx_csma_custom_html_top_temp1" placeholder="HTML Code Here"><?php echo stripslashes($acx_csma_custom_html_top_temp1); ?></textarea>
							</div><!-- acx_qa_field -->
							<label>
							Background Color:<a onclick="acx_csma_restore_default('','#ff7800','acx_csma_inside_bg_color1');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_inside_bg_color1" id="acx_csma_inside_bg_color1" onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_appearence_array['1']['acx_csma_inside_bg_color1']; ?>" size="20"/>
							<div style="position: absolute;" id="acx_csma_inside_bg_color1_div"></div>
							</div> <!-- acx_qa_field -->
							<label>
							Title:
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_inside_title1" value="<?php echo stripslashes(esc_attr($acx_csma_appearence_array['1']['acx_csma_inside_title1'])); ?>" size="20"/>
							</div> <!-- acx_qa_field -->
							<label>
							Title Color:<a onclick="acx_csma_restore_default('','#ffffff','acx_csma_inside_title_color1');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_inside_title_color1" id="acx_csma_inside_title_color1" onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_appearence_array['1']['acx_csma_inside_title_color1']; ?>" size="20"/>
							<div style="position: absolute;" id="acx_csma_inside_title_color1_div"></div>
							</div> <!-- acx_qa_field -->
							<label>
							Custom HTML Block Below Countdown Timer
							</label>
							<div class="acx_qa_field">
							<?php $acx_csma_custom_html_bottom_temp1 =$acx_csma_appearence_array['1']['acx_csma_custom_html_bottom_temp1']; ?>
							<textarea id="acx_csma_custom_html_bottom_temp1" name="acx_csma_custom_html_bottom_temp1" placeholder="HTML Code Here"><?php echo stripslashes($acx_csma_custom_html_bottom_temp1); ?></textarea>
							</div><!-- acx_qa_field -->
						</div> <!-- acx_csmap_q_and_a_inside -->
					</div> <!-- acx_csmap_q_and_a -->
				</div> <!-- acx_csmap_q_and_a_h -->
			<!-- ################################# QUESTION AND ANSWER SET ENDS HERE ############################################# -->

			<!-- ################################ QUESTION AND ANSWER SET STARTS HERE ############################################ -->
					<?php $acx_csmap_qa_id = $acx_csmap_qa_id+1; ?>

				<div id="acx_csmap_q_and_a_h" class="acx_csmap_q_and_a_h_common acx_csmap_q_and_a_h_<?php echo $acx_csmap_qa_id; ?>">
					<span class="acx_csma_q" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);">
					Countdown Timer Settings
					</span>
					<span class="acx_csma_toggle acx_csma_toggle_<?php echo $acx_csmap_qa_id; ?> plus" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);"></span>
					<div id="acx_csmap_q_and_a" class="acx_csmap_q_and_a_common acx_csmap_q_and_a_<?php echo $acx_csmap_qa_id; ?>" style="display:none;">
						<div class="acx_csmap_q_and_a_inside">
						<label>
						Would you like to show Timer?
						</label>
						<div class="acx_qa_field">
						<select name="acx_csma_show_timer1">
						<option value="1" <?php if ($acx_csma_show_timer1 == "1") { echo 'selected="selected"'; } ?>>Yes </option>
						<option value="0" <?php if ($acx_csma_show_timer1 == "0") { echo 'selected="selected"'; } ?>>No</option>
						</select>	
						</div>
							<label>
							Background Color:<a onclick="acx_csma_restore_default('','#ffffff','acx_csma_timer_bg_color1');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_timer_bg_color1" id="acx_csma_timer_bg_color1" onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_appearence_array['1']['acx_csma_timer_bg_color1']; ?>" size="20"/></td>
							<td><div style="position: absolute;" id="acx_csma_timer_bg_color1_div"></div>
							</div> <!-- acx_qa_field --> 
							<label>
							Input text Color:<a onclick="acx_csma_restore_default('','#ffffff','acx_csma_timer_iptext_color1');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_timer_iptext_color1" id="acx_csma_timer_iptext_color1" onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_appearence_array['1']['acx_csma_timer_iptext_color1']; ?>" size="20"/>
							<div style="position: absolute;" id="acx_csma_timer_iptext_color1_div"></div>
							</div> <!-- acx_qa_field --> 
							<label>
							Heading Color:<a onclick="acx_csma_restore_default('','#ff7800','acx_csma_timer_head_color1');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_timer_head_color1" id="acx_csma_timer_head_color1"  onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_appearence_array['1']['acx_csma_timer_head_color1']; ?>" size="20"/>
							<div style="position: absolute;" id="acx_csma_timer_head_color1_div"></div>
							</div> <!-- acx_qa_field --> 
						</div> <!-- acx_csmap_q_and_a_inside --> 
					</div> <!-- acx_csmap_q_and_a --> 
				</div> <!-- acx_csmap_q_and_a_h -->
			<!-- ################################# QUESTION AND ANSWER SET ENDS HERE ############################################# -->

			<!-- ################################ QUESTION AND ANSWER SET STARTS HERE ############################################ -->
					<?php $acx_csmap_qa_id = $acx_csmap_qa_id+1; ?>

				<div id="acx_csmap_q_and_a_h" class="acx_csmap_q_and_a_h_common acx_csmap_q_and_a_h_<?php echo $acx_csmap_qa_id; ?>">
					<span class="acx_csma_q" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);">
					Subscription Form Settings
					</span>
					<span class="acx_csma_toggle acx_csma_toggle_<?php echo $acx_csmap_qa_id; ?> plus" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);"></span>
					<div id="acx_csmap_q_and_a" class="acx_csmap_q_and_a_common acx_csmap_q_and_a_<?php echo $acx_csmap_qa_id; ?>" style="display:none;">
						<div class="acx_csmap_q_and_a_inside">
							<label>
							Background Color:<a onclick="acx_csma_restore_default('','#0b1c2c','acx_csma_subscribe_bg_color1');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_subscribe_bg_color1"  id="acx_csma_subscribe_bg_color1" onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_appearence_array['1']['acx_csma_subscribe_bg_color1']; ?>"  size="20"/>
							<div style="position: absolute;" id="acx_csma_subscribe_bg_color1_div"></div>
							</div> <!-- acx_qa_field --> 
							<label>
							Button Text
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_subscribe_btn_text1"  value="<?php echo stripslashes(esc_attr($acx_csma_appearence_array['1']['acx_csma_subscribe_btn_text1'])); ?>" size="20"/>
							</div> <!-- acx_qa_field -->
							
							<label>
							Button Text Color:<a onclick="acx_csma_restore_default('','#ffffff','acx_csma_subscribe_btn_text_color1');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_subscribe_btn_text_color1"  id="acx_csma_subscribe_btn_text_color1" onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_appearence_array['1']['acx_csma_subscribe_btn_text_color1']; ?>" size="20"/>
							<div style="position: absolute;" id="acx_csma_subscribe_btn_text_color1_div"></div>
							</div> <!-- acx_qa_field --> 
							<label>
							Button Color:<a onclick="acx_csma_restore_default('','#ff7800','acx_csma_subscribe_btn_color1');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_subscribe_btn_color1"  id="acx_csma_subscribe_btn_color1" onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_appearence_array['1']['acx_csma_subscribe_btn_color1']; ?>" size="20"/>
							<div style="position: absolute;" id="acx_csma_subscribe_btn_color1_div"></div>
							</div> <!-- acx_qa_field --> 
							<label>
							Button  Hover Text Color:<a onclick="acx_csma_restore_default('','#0b1c2c','acx_csma_subscribe_btn_hover_color1');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_subscribe_btn_hover_color1"  id="acx_csma_subscribe_btn_hover_color1" onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_appearence_array['1']['acx_csma_subscribe_btn_hover_color1']; ?>" size="20"/>
							<div style="position: absolute;" id="acx_csma_subscribe_btn_hover_color1_div"></div>
							</div> <!-- acx_qa_field --> 
							<label>
							Button  Hover Background  Color:<a onclick="acx_csma_restore_default('','#ff881e','acx_csma_subscribe_btn_hover_bgcolor1');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_subscribe_btn_hover_bgcolor1"  id="acx_csma_subscribe_btn_hover_bgcolor1" onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_appearence_array['1']['acx_csma_subscribe_btn_hover_bgcolor1']; ?>" size="20"/>
							<div style="position: absolute;" id="acx_csma_subscribe_btn_hover_bgcolor1_div"></div>
							</div> <!-- acx_qa_field --> 						
							<label>
							Subscribe Title:
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_subscribe_title1"  value="<?php echo stripslashes(esc_attr($acx_csma_appearence_array['1']['acx_csma_subscribe_title1'])); ?>" size="20"/>
							</div> <!-- acx_qa_field -->
							<label>
							Subscribe Title Color:<a onclick="acx_csma_restore_default('','#ff7800','acx_csma_subscribe_title_color1');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_subscribe_title_color1"  id="acx_csma_subscribe_title_color1" onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_appearence_array['1']['acx_csma_subscribe_title_color1']; ?>" size="20"/>
							<div style="position: absolute;" id="acx_csma_subscribe_title_color1_div"></div>
							</div> <!-- acx_qa_field --> 
							<label>
							Subscribe Success Message:
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_subscribe_success1"  value="<?php echo stripslashes(esc_attr($acx_csma_appearence_array['1']['acx_csma_subscribe_success1'])); ?>" size="20"/>
							</div> <!-- acx_qa_field -->
							<label>
							Subscribe Invalid Message:
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_subscribe_invalid1"  value="<?php echo stripslashes(esc_attr($acx_csma_appearence_array['1']['acx_csma_subscribe_invalid1'])); ?>" size="20"/>
							</div> <!-- acx_qa_field -->
							
						</div> <!-- acx_csmap_q_and_a_inside -->
					</div> <!-- acx_csmap_q_and_a --> 
				</div> <!-- acx_csmap_q_and_a_h -->
			<!-- ################################# QUESTION AND ANSWER SET ENDS HERE ############################################# -->

			<!-- ################################ QUESTION AND ANSWER SET STARTS HERE ############################################ -->
					<?php $acx_csmap_qa_id = $acx_csmap_qa_id+1; ?>

				<div id="acx_csmap_q_and_a_h" class="acx_csmap_q_and_a_h_common acx_csmap_q_and_a_h_<?php echo $acx_csmap_qa_id; ?>">
					<span class="acx_csma_q" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);">
					Footer Settings
					</span>
					<span class="acx_csma_toggle acx_csma_toggle_<?php echo $acx_csmap_qa_id; ?> plus" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);"></span>
					<div id="acx_csmap_q_and_a" class="acx_csmap_q_and_a_common acx_csmap_q_and_a_<?php echo $acx_csmap_qa_id; ?>" style="display:none;">
						<div class="acx_csmap_q_and_a_inside">
						
							<label>
							Footer Background:<a onclick="acx_csma_restore_default('','#ff7800','acx_csma_footer_bgcolor1');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_footer_bgcolor1"  id="acx_csma_footer_bgcolor1" onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_appearence_array['1']['acx_csma_footer_bgcolor1']; ?>" size="20"/>
							<div style="position: absolute;" id="acx_csma_footer_bgcolor1_div"></div></div> <!-- acx_qa_field -->
							<label>
							Footer Text:
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_footer_text1" value="<?php echo stripslashes(esc_attr($acx_csma_appearence_array['1']['acx_csma_footer_text1'])); ?>" size="20"/>
							</div> <!-- acx_qa_field -->
							<label>
							Footer Text Color:<a onclick="acx_csma_restore_default('','#ffffff','acx_csma_footer_text_color1');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_footer_text_color1"  id="acx_csma_footer_text_color1" onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_appearence_array['1']['acx_csma_footer_text_color1']; ?>" size="20"/>
							<div style="position: absolute;" id="acx_csma_footer_text_color1_div"></div></div> <!-- acx_qa_field -->
						</div> <!-- acx_csmap_q_and_a_inside --> 
					</div> <!-- acx_csmap_q_and_a --> 
				</div> <!-- acx_csmap_q_and_a_h -->
			<!-- ################################# QUESTION AND ANSWER SET ENDS HERE ############################################-->
			</div> <!-- acx_csma_1_p_q_and_a_h_main_holder -->
		</div><!--acx_csma_template_1-->		

		<div id="acx_csma_template_2" style="display:none;" class="acx_csma_template_option_holder">
			<div id="acx_csma_2_p_q_and_a_h_main_holder">
			<!-- ################################ QUESTION AND ANSWER SET STARTS HERE ############################################-->
				<?php $acx_csmap_qa_id = $acx_csmap_qa_id+1; ?>
				<div id="acx_csmap_q_and_a_h" class="acx_csmap_q_and_a_h_common acx_csmap_q_and_a_h_<?php echo $acx_csmap_qa_id; ?>">
					<span class="acx_csma_q" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);">
					Background Settings
					</span>
					<span class="acx_csma_toggle acx_csma_toggle_<?php echo $acx_csmap_qa_id; ?> plus" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);"></span>
					<div id="acx_csmap_q_and_a" class="acx_csmap_q_and_a_common acx_csmap_q_and_a_<?php echo $acx_csmap_qa_id; ?>" style="display:none;">
						<div class="acx_csmap_q_and_a_inside">
							<label>Background Color:
							<a onclick="acx_csma_restore_default('','#e4e4e4','acx_csma_bg_color2');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_bg_color2"  id="acx_csma_bg_color2" value="<?php echo $acx_csma_appearence_array['2']['acx_csma_bg_color2']; ?>" onblur="acx_csma_validate(this.value);" size="20"/>
							<div style="position: absolute;" id="acx_csma_bg_color2_div"></div>
							</div> <!-- acx_qa_field --> 
						</div> <!-- acx_csmap_q_and_a_inside -->
					</div> <!-- acx_csmap_q_and_a -->
				 </div> <!-- acx_csmap_q_and_a_h -->

			<!-- ################################# QUESTION AND ANSWER SET ENDS HERE ############################################ -->

			<!-- ################################ QUESTION AND ANSWER SET STARTS HERE ########################################### -->
				<?php $acx_csmap_qa_id = $acx_csmap_qa_id+1; ?>
				<div id="acx_csmap_q_and_a_h" class="acx_csmap_q_and_a_h_common acx_csmap_q_and_a_h_<?php echo $acx_csmap_qa_id; ?>">
					<span class="acx_csma_q" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);">
					Logo Settings
					</span>
					<span class="acx_csma_toggle acx_csma_toggle_<?php echo $acx_csmap_qa_id; ?> plus" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);"></span>
					<div id="acx_csmap_q_and_a" class="acx_csmap_q_and_a_common acx_csmap_q_and_a_<?php echo $acx_csmap_qa_id; ?>" style="display:none;">
						<div class="acx_csmap_q_and_a_inside">
						<div class="acx_csma_logo_main">
						<table cellspacing="10">
						<tr><td>
						<input type="radio" name="acx_csma_logo_choice2" class="acx_csma_logo" id="acx_csma_logo_image2" value="image" onclick="acx_csma_rdbtn_show_logo('image','2');" <?php if(array_key_exists('acx_csma_logo_choice',$acx_csma_appearence_array['2'])){if($acx_csma_appearence_array['2']['acx_csma_logo_choice'] == 'image' || $acx_csma_appearence_array['2']['acx_csma_logo_choice']==''){echo "checked='checked'";}}else{ echo "checked='checked'";} ?>/>Logo Image</td><td>
						<input type="radio" name="acx_csma_logo_choice2" class="acx_csma_logo" id="acx_csma_logo_text2" value="text"  onclick="acx_csma_rdbtn_show_logo('text','2');" <?php if(array_key_exists('acx_csma_logo_choice',$acx_csma_appearence_array['2'])){if($acx_csma_appearence_array['2']['acx_csma_logo_choice'] == 'text'){echo "checked='checked'";}}?>/>Logo Text</td></tr></table>
						</div><!--acx_csma_logo_main -->
						<div id="acx_show_logo_image_2"  class="acx_csma_logo_block acx_csma_logo_block_2"  style="display:none;">
							<label>
							Logo:<span id="acx_csma_span">(Recommended size 99x27,Image must be png and transparent)</span>
							</label>
							<div class="acx_qa_field">
							<?php 
					$acx_csma_logo2_id = $acx_csma_appearence_array['2']['acx_csma_logo2'];
					$logo2_url  = $acx_csma_logo2_id;
					if(is_numeric($acx_csma_logo2_id))
					{
						$logo2_attachment_url = parse_url( wp_get_attachment_url($acx_csma_logo2_id) );
						$logo2_url    = $logo2_attachment_url [ 'scheme' ]  . '://' .rawurlencode( basename( $logo2_attachment_url[ 'host' ])). $logo2_attachment_url[ 'path' ];
					} 
				
						?>
							<img id="custom_uploader_template_2_logo_field_preview" src="<?php echo $logo2_url; ?>" style="width:100px;height:auto;">
							<input type="hidden" id="custom_uploader_template_2_logo_field" name="acx_csma_logo2" value="<?php echo $acx_csma_logo2_id; ?>" size="20"><a id="acx_upload_button_logo2" class="button">Pick a Logo</a>
							<a id="acx_upload_button_logo2" onclick="acx_csma_restore_default('custom_uploader_template_2_logo_field_preview','<?php echo ACX_CSMA_BASE_LOCATION . 'templates/2/images/logo.png'; ?>','custom_uploader_template_2_logo_field');" class="button">Reset To Default</a>
							</div> <!-- acx_qa_field --> 
						</div><!--acx_show_logo_image-->
							<div id="acx_show_logo_text_2"  class="acx_csma_logo_block acx_csma_logo_block_2"  style="display:none;">
							<label>
							Logo Text:
							</label>
							<div class="acx_qa_field">
							<?php  if(array_key_exists('acx_csma_logo_text2',$acx_csma_appearence_array['2'])){$acx_csma_logo_text2=$acx_csma_appearence_array['2']['acx_csma_logo_text2'];
							if($acx_csma_logo_text2 == "")
							{
								$acx_csma_logo_text2=get_bloginfo('name');
							}}else{
								$acx_csma_logo_text2=get_bloginfo('name');
							}?>
							<input type="text" name="acx_csma_logo_text2" placeholder="Logo Text Here" value="<?php echo stripslashes(esc_attr($acx_csma_logo_text2)); ?>" size="20"/>
							</div> <!-- acx_qa_field -->
							<label>
							Logo Text Color: <a onclick="acx_csma_restore_default('','#ffffff','acx_csma_logo_text_color2');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
						<div class="acx_qa_field">
							<?php  if(array_key_exists('acx_csma_logo_text_color2',$acx_csma_appearence_array['2'])){$acx_csma_logo_text_color2=$acx_csma_appearence_array['2']['acx_csma_logo_text_color2'];
							if($acx_csma_logo_text_color2 == "")
							{
								$acx_csma_logo_text_color2="#ffffff";
							}}$acx_csma_logo_text_color2="#ffffff"; ?>
							<input type="text" name="acx_csma_logo_text_color2" id="acx_csma_logo_text_color2" onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_logo_text_color2; ?>" size="20" />
							<div style="position: absolute;" id="acx_csma_logo_text_color2_div"></div>
							</div> <!-- acx_qa_field --> 
							</div> <!-- acx_show_logo_text -->
							
						</div> <!-- acx_csmap_q_and_a_inside -->
					</div> <!-- acx_csmap_q_and_a -->
				</div> <!-- acx_csmap_q_and_a_h -->
			<!-- ################################# QUESTION AND ANSWER SET ENDS HERE #############################################-->

			<!-- ################################ QUESTION AND ANSWER SET STARTS HERE ############################################-->
				<?php $acx_csmap_qa_id = $acx_csmap_qa_id+1; ?>
				<div id="acx_csmap_q_and_a_h" class="acx_csmap_q_and_a_h_common acx_csmap_q_and_a_h_<?php echo $acx_csmap_qa_id; ?>">
					<span class="acx_csma_q" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);">
					Heading and Subheading Settings</span>
					<span class="acx_csma_toggle acx_csma_toggle_<?php echo $acx_csmap_qa_id; ?> plus" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);"></span>
					<div id="acx_csmap_q_and_a" class="acx_csmap_q_and_a_common acx_csmap_q_and_a_<?php echo $acx_csmap_qa_id; ?>" style="display:none;">
						<div class="acx_csmap_q_and_a_inside">
							<label>
							Title Text : 
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_title2" id="acx_csma_title2" value="<?php echo stripslashes(esc_attr($acx_csma_appearence_array['2']['acx_csma_title2'])); ?>" size="20"/>
							</div> <!-- acx_qa_field --> 
							<label>
							Title Color: 
							<a onclick="acx_csma_restore_default('','#000000','acx_csma_title_color2');" class="acx_csmap_button_reset">[Reset To Default]</a>
				
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_title_color2" id="acx_csma_title_color2" value="<?php echo $acx_csma_appearence_array['2']['acx_csma_title_color2']; ?>" onblur="acx_csma_validate(this.value);" size="20"/>
							<div style="position: absolute;" id="acx_csma_title_color2_div"></div>
							</div> <!-- acx_qa_field --> 
							<label>
							Subtitle Text:
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_subtitle_text2" id="acx_csma_subtitle_text2" value="<?php echo stripslashes(esc_attr($acx_csma_appearence_array['2']['acx_csma_subtitle_text2'])); ?>"  size="20"/>
							</div> <!-- acx_qa_field --> 
							<label>
							Subtitle Color:
							<a onclick="acx_csma_restore_default('','#000000','acx_csma_subtitle_color2');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_subtitle_color2" id="acx_csma_subtitle_color2" onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_appearence_array['2']['acx_csma_subtitle_color2']; ?>" size="20"/>
							<div style="position: absolute;" id="acx_csma_subtitle_color2_div"></div>
							</div> <!-- acx_qa_field --> 
							<label>
							Background Color:<a onclick="acx_csma_restore_default('','#ffd800','acx_csma_inside_bg_color2');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_inside_bg_color2" id="acx_csma_inside_bg_color2" onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_appearence_array['2']['acx_csma_inside_bg_color2']; ?>" size="20"/>
							<div style="position: absolute;" id="acx_csma_inside_bg_color2_div"></div>
							</div> <!-- acx_qa_field -->
						</div> <!-- acx_csmap_q_and_a_inside -->
					</div> <!-- acx_csmap_q_and_a -->
				</div> <!-- acx_csmap_q_and_a_h -->
			<!-- ################################# QUESTION AND ANSWER SET ENDS HERE ############################################-->
	
			<!-- ################################ QUESTION AND ANSWER SET STARTS HERE ############################################-->
				<?php $acx_csmap_qa_id = $acx_csmap_qa_id+1; ?>
				<div id="acx_csmap_q_and_a_h" class="acx_csmap_q_and_a_h_common acx_csmap_q_and_a_h_<?php echo $acx_csmap_qa_id; ?>">
					<span class="acx_csma_q" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);">
					Countdown Timer, Subscription Form & Custom HTML Settings </span>
					<span class="acx_csma_toggle acx_csma_toggle_<?php echo $acx_csmap_qa_id; ?> plus" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);"></span>
					<div id="acx_csmap_q_and_a" class="acx_csmap_q_and_a_common acx_csmap_q_and_a_<?php echo $acx_csmap_qa_id; ?>" style="display:none;">
						<div class="acx_csmap_q_and_a_inside">
							<label>
							Timer Block Title
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_timer_title2" value="<?php echo stripslashes(esc_attr($acx_csma_appearence_array['2']['acx_csma_timer_title2'])); ?>" size="20"/>
							</div> <!-- acx_qa_field -->
							<label>
							Subscribe Button TextColor:<a onclick="acx_csma_restore_default('','#ffd800','acx_csma_subscribe_btn_color2');" class="acx_csmap_button_reset">[Reset To Default]</a>
							
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_subscribe_btn_color2"  id="acx_csma_subscribe_btn_color2" onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_appearence_array['2']['acx_csma_subscribe_btn_color2']; ?>" size="20"/>
							<div style="position: absolute;" id="acx_csma_subscribe_btn_color2_div"></div>
							</div> <!-- acx_qa_field --> 
							<label>
							Subscribe Success Message:
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_subscribe_success2"  value="<?php echo stripslashes(esc_attr($acx_csma_appearence_array['2']['acx_csma_subscribe_success2'])); ?>" size="20"/>
							</div> <!-- acx_qa_field -->
							<label>
							Subscribe Invalid Message:
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_subscribe_invalid2"  value="<?php echo stripslashes(esc_attr($acx_csma_appearence_array['2']['acx_csma_subscribe_invalid2'])); ?>" size="20"/>
							</div> <!-- acx_qa_field -->
							<label>
							Timer Input BackgroundColor:<a onclick="acx_csma_restore_default('','#ffffff','acx_csma_timer_input_bg_color2');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_timer_input_bg_color2" id="acx_csma_timer_input_bg_color2" onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_appearence_array['2']['acx_csma_timer_input_bg_color2']; ?>" size="20"/>
							<div style="position: absolute;" id="acx_csma_timer_input_bg_color2_div"></div>
							</div> <!-- acx_qa_field --> 
							<label>
							Input TextColor:<a onclick="acx_csma_restore_default('','#000000','acx_csma_timer_iptext_color2');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_timer_iptext_color2"  id="acx_csma_timer_iptext_color2" onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_appearence_array['2']['acx_csma_timer_iptext_color2']; ?>"  size="20"/>
							<div style="position: absolute;" id="acx_csma_timer_iptext_color2_div"></div>
							</div> <!-- acx_qa_field -->
							<label>
							Heading Color:<a onclick="acx_csma_restore_default('','#000000','acx_csma_timer_head_color2');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_timer_head_color2" id="acx_csma_timer_head_color2" onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_appearence_array['2']['acx_csma_timer_head_color2']; ?>" size="20"/>
							<div style="position: absolute;" id="acx_csma_timer_head_color2_div"></div>
							</div> <!-- acx_qa_field --> 
							<label>
							Custom HTML Block Above Description Block
							</label>
							<div class="acx_qa_field">
							<?php $acx_csma_custom_html_top_temp2 =$acx_csma_appearence_array['2']['acx_csma_custom_html_top_temp2']; ?>
							<textarea id="acx_csma_custom_html_top_temp2" name="acx_csma_custom_html_top_temp2" placeholder="HTML Code Here"><?php echo stripslashes($acx_csma_custom_html_top_temp2); ?></textarea>
							</div><!-- acx_qa_field -->
							<label>
							Description Title:
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_desc_title2"  id="acx_csma_desc_title2" value="<?php echo stripslashes(esc_attr($acx_csma_appearence_array['2']['acx_csma_desc_title2'])); ?>" size="20"/>
							</div> <!-- acx_qa_field --> 
							<label>
							Description Content:
							</label>
							<div class="acx_qa_field">
							<textarea name="acx_csma_desc_subtitle2"  id="acx_csma_desc_subtitle2"><?php echo stripslashes($acx_csma_appearence_array['2']['acx_csma_desc_subtitle2']); ?> </textarea>
							</div> <!-- acx_qa_field -->
							<label>
							Description TextColor:<a onclick="acx_csma_restore_default('','#000000','acx_csma_desc_text_color2');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_desc_text_color2"  id="acx_csma_desc_text_color2" onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_appearence_array['2']['acx_csma_desc_text_color2']; ?>" size="20"/>
							<div style="position: absolute;" id="acx_csma_desc_text_color2_div"></div>
							</div> <!-- acx_qa_field -->
						
							</div> <!-- acx_csmap_q_and_a_inside -->
					</div> <!-- acx_csmap_q_and_a -->
				</div> <!-- acx_csmap_q_and_a_h -->
			<!-- ################################# QUESTION AND ANSWER SET ENDS HERE ############################################-->
			<!-- ################################ QUESTION AND ANSWER SET STARTS HERE ########################################### -->
				<?php $acx_csmap_qa_id = $acx_csmap_qa_id+1; ?>
				<div id="acx_csmap_q_and_a_h" class="acx_csmap_q_and_a_h_common acx_csmap_q_and_a_h_<?php echo $acx_csmap_qa_id; ?>">
					<span class="acx_csma_q" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);">
					Social Media Settings
					</span>
					<span class="acx_csma_toggle acx_csma_toggle_<?php echo $acx_csmap_qa_id; ?> plus" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);"></span>
					<div id="acx_csmap_q_and_a" class="acx_csmap_q_and_a_common acx_csmap_q_and_a_<?php echo $acx_csmap_qa_id; ?>" style="display:none;">
						<div class="acx_csmap_q_and_a_inside">
							<label>
							Facebook Link
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_fb_link2"  id="acx_csma_fb_link2" value="<?php echo esc_url($acx_csma_appearence_array['2']['acx_csma_fb_link2']); ?>" size="20"/>
							</div> <!-- acx_qa_field -->
							<label>
							Twitter Link
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_twitter_link2"  id="acx_csma_twitter_link2" value="<?php echo esc_url($acx_csma_appearence_array['2']['acx_csma_twitter_link2']); ?>" size="20"/>
							</div> <!-- acx_qa_field -->
							<label>
							LinkedIn Link
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_linkedin_link2"  id="acx_csma_linkedin_link2" value="<?php echo esc_url($acx_csma_appearence_array['2']['acx_csma_linkedin_link2']); ?>" size="20"/>
							</div> <!-- acx_qa_field -->
						</div> <!-- acx_csmap_q_and_a_inside -->
					</div> <!-- acx_csmap_q_and_a -->
				</div> <!-- acx_csmap_q_and_a_h -->
			<!-- ################################# QUESTION AND ANSWER SET ENDS HERE #############################################-->

			</div> <!-- acx_csma_2_p_q_and_a_h_main_holder -->	
		</div><!--acx_csma_template_2-->

		<div id="acx_csma_template_3" style="display:none;" class="acx_csma_template_option_holder">
			<div id="acx_csma_3_p_q_and_a_h_main_holder">
			<!-- ################################ QUESTION AND ANSWER SET STARTS HERE ############################################-->
				<?php $acx_csmap_qa_id = $acx_csmap_qa_id+1; ?>

				<div id="acx_csmap_q_and_a_h" class="acx_csmap_q_and_a_h_common acx_csmap_q_and_a_h_<?php echo $acx_csmap_qa_id; ?>">
					<span class="acx_csma_q" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);">
					Logo Settings
					</span>
					<span class="acx_csma_toggle acx_csma_toggle_<?php echo $acx_csmap_qa_id; ?> plus" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);"></span>
						<div id="acx_csmap_q_and_a" class="acx_csmap_q_and_a_common acx_csmap_q_and_a_<?php echo $acx_csmap_qa_id; ?>" style="display:none;">
							<div class="acx_csmap_q_and_a_inside">
							<div class="acx_csma_logo_main">
							<table cellspacing="10">
						<tr><td>
						<input type="radio" name="acx_csma_logo_choice3" class="acx_csma_logo" id="acx_csma_logo_image3" value="image" onclick="acx_csma_rdbtn_show_logo('image','3');" <?php if(array_key_exists('acx_csma_logo_choice',$acx_csma_appearence_array['3'])){if($acx_csma_appearence_array['3']['acx_csma_logo_choice'] == 'image' || $acx_csma_appearence_array['3']['acx_csma_logo_choice']==''){echo "checked='checked'";}}else{ echo "checked='checked'";} ?>/>Logo Image</td><td>
						<input type="radio" name="acx_csma_logo_choice3" class="acx_csma_logo" id="acx_csma_logo_text3" value="text"  onclick="acx_csma_rdbtn_show_logo('text','3');" <?php if(array_key_exists('acx_csma_logo_choice',$acx_csma_appearence_array['3'])){ if($acx_csma_appearence_array['3']['acx_csma_logo_choice'] == 'text'){echo "checked='checked'";}}?>/>Logo Text</td></tr></table>
						</div><!--acx_csma_logo_main -->
						<div id="acx_show_logo_image_3"  class="acx_csma_logo_block acx_csma_logo_block_3"  style="display:none;">
							<label>
							Logo:<span id="acx_csma_span">(Recommended size 161x38)</span>
							</label>
							<div class="acx_qa_field">
							<?php 
					$acx_csma_logo3_id = $acx_csma_appearence_array['3']['acx_csma_logo3'];
					$logo3_url  = $acx_csma_logo3_id;
					if(is_numeric($acx_csma_logo3_id))
					{
						$logo3_attachment_url = parse_url( wp_get_attachment_url($acx_csma_logo3_id) );
						$logo3_url    = $logo3_attachment_url [ 'scheme' ]  . '://' .rawurlencode( basename( $logo3_attachment_url[ 'host' ])). $logo3_attachment_url[ 'path' ];
					} 
				
						?>
							
							<img id="custom_uploader_template_3_logo_field_preview" src="<?php echo $logo3_url; ?>" style="width:100px;height:auto;">
							<input type="hidden" id="custom_uploader_template_3_logo_field" name="acx_csma_logo3" value="<?php echo $acx_csma_logo3_id; ?>" size="20"><a id="acx_upload_button_logo3" class="button">Pick a Logo</a>
							<a id="acx_upload_button_reset_img1" onclick="acx_csma_restore_default('custom_uploader_template_3_logo_field_preview','<?php echo ACX_CSMA_BASE_LOCATION . 'templates/3/images/logo.png'; ?>','custom_uploader_template_3_logo_field');" class="button">Reset To Default</a>

							</div> <!-- acx_qa_field --> 
							</div><!--acx_show_logo_image -->
							<div id="acx_show_logo_text_3"  class="acx_csma_logo_block acx_csma_logo_block_3"  style="display:none;">
							<label>
							Logo Text:
							</label>
							<div class="acx_qa_field">
							<?php if(array_key_exists('acx_csma_logo_text3',$acx_csma_appearence_array['3'])){ $acx_csma_logo_text3=$acx_csma_appearence_array['3']['acx_csma_logo_text3'];
							if($acx_csma_logo_text3 == "")
							{
								$acx_csma_logo_text3=get_bloginfo('name');
							}}else{
								$acx_csma_logo_text3=get_bloginfo('name');
							}?>
							<input type="text" name="acx_csma_logo_text3" placeholder="Logo Text Here" value="<?php echo stripslashes(esc_attr($acx_csma_logo_text3)); ?>" size="20"/>
							</div> <!-- acx_qa_field -->
							<label>
							Logo Text Color: <a onclick="acx_csma_restore_default('','#ffffff','acx_csma_logo_text_color3');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
							<div class="acx_qa_field">
							<?php  if(array_key_exists('acx_csma_logo_text_color3',$acx_csma_appearence_array['3'])){$acx_csma_logo_text_color3=$acx_csma_appearence_array['3']['acx_csma_logo_text_color3'];
							if($acx_csma_logo_text_color3 == "")
							{
								$acx_csma_logo_text_color3="#ffffff";
							}
							}else{
								$acx_csma_logo_text_color3="#ffffff";
							}?>
							<input type="text" name="acx_csma_logo_text_color3" id="acx_csma_logo_text_color3" onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_logo_text_color3; ?>" size="20" />
							<div style="position: absolute;" id="acx_csma_logo_text_color3_div"></div>
							</div> <!-- acx_qa_field --> 
						</div><!--acx_show_logo_text -->
						</div> <!-- acx_csmap_q_and_a_inside --> 
					</div> <!-- acx_csmap_q_and_a --> 
				</div> <!-- acx_csmap_q_and_a_h -->
			<!-- ################################# QUESTION AND ANSWER SET ENDS HERE #############################################-->
			<!-- ################################ QUESTION AND ANSWER SET STARTS HERE ############################################-->
				<?php $acx_csmap_qa_id = $acx_csmap_qa_id+1; ?>

				<div id="acx_csmap_q_and_a_h" class="acx_csmap_q_and_a_h_common acx_csmap_q_and_a_h_<?php echo $acx_csmap_qa_id; ?>">
					<span class="acx_csma_q" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);">
					Heading and Subheading Settings - Left Side
					</span>
					<span class="acx_csma_toggle acx_csma_toggle_<?php echo $acx_csmap_qa_id; ?> plus" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);"></span>
					<div id="acx_csmap_q_and_a" class="acx_csmap_q_and_a_common acx_csmap_q_and_a_<?php echo $acx_csmap_qa_id; ?>" style="display:none;">
						<div class="acx_csmap_q_and_a_inside">
							<label>
							Title:
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_title3" value="<?php echo stripslashes(esc_attr($acx_csma_appearence_array['3']['acx_csma_title3'])); ?>" size="20"/>
							</div> <!-- acx_qa_field --> 
							<label>
							Title Color:<a onclick="acx_csma_restore_default('','#ffffff','acx_csma_title_color3');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_title_color3" id="acx_csma_title_color3" onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_appearence_array['3']['acx_csma_title_color3']; ?>" size="20" />
							<div style="position: absolute;" id="acx_csma_title_color3_div"></div>
							</div> <!-- acx_qa_field --> 
							<label>
							Sub Title:
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_subtitle_text3" value="<?php echo stripslashes(esc_attr($acx_csma_appearence_array['3']['acx_csma_subtitle_text3'])); ?>" size="20"/>
							</div> <!-- acx_qa_field --> 
							<label>
							SubTitle Color:<a onclick="acx_csma_restore_default('','#ffffff','acx_csma_subtitle_color3');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_subtitle_color3" id="acx_csma_subtitle_color3" onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_appearence_array['3']['acx_csma_subtitle_color3']; ?>" size="20" />
							<div style="position: absolute;" id="acx_csma_subtitle_color3_div"></div>
							</div> <!-- acx_qa_field --> 
						</div> <!-- acx_csmap_q_and_a_inside --> 
					</div> <!-- acx_csmap_q_and_a --> 
				</div> <!-- acx_csmap_q_and_a_h -->
			<!-- ################################# QUESTION AND ANSWER SET ENDS HERE #############################################-->
			<!-- ################################ QUESTION AND ANSWER SET STARTS HERE ############################################-->
				<?php $acx_csmap_qa_id = $acx_csmap_qa_id+1; ?>

				<div id="acx_csmap_q_and_a_h" class="acx_csmap_q_and_a_h_common acx_csmap_q_and_a_h_<?php echo $acx_csmap_qa_id; ?>">
					<span class="acx_csma_q" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);">
					Subscription Form Settings
					</span>
					<span class="acx_csma_toggle acx_csma_toggle_<?php echo $acx_csmap_qa_id; ?> plus" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);"></span>
					<div id="acx_csmap_q_and_a" class="acx_csmap_q_and_a_common acx_csmap_q_and_a_<?php echo $acx_csmap_qa_id; ?>" style="display:none;">
						<div class="acx_csmap_q_and_a_inside">
							
							<label>
							Title:
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_subscribe_title3" value="<?php echo stripslashes(esc_attr($acx_csma_appearence_array['3']['acx_csma_subscribe_title3'])); ?>"  size="20"/>
							</div> <!-- acx_qa_field --> 
							<label>
							Title Color:<a onclick="acx_csma_restore_default('','#fe7e01','acx_csma_subscribe_title_color3');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_subscribe_title_color3"  id="acx_csma_subscribe_title_color3" onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_appearence_array['3']['acx_csma_subscribe_title_color3']; ?>" size="20"/>
							<div style="position: absolute;" id="acx_csma_subscribe_title_color3_div"></div>
							</div> <!-- acx_qa_field --> 
							<label>
							Button Text
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_subscribe_btn_text3"  value="<?php echo stripslashes(esc_attr($acx_csma_appearence_array['3']['acx_csma_subscribe_btn_text3'])); ?>" size="20"/>
							</div> <!-- acx_qa_field -->
							<label>
							Button Text Color:<a onclick="acx_csma_restore_default('','#ffffff','acx_csma_subscribe_btn_text_color3');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_subscribe_btn_text_color3"  id="acx_csma_subscribe_btn_text_color3" onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_appearence_array['3']['acx_csma_subscribe_btn_text_color3']; ?>" size="20"/>
							<div style="position: absolute;" id="acx_csma_subscribe_btn_text_color3_div"></div>
							</div> <!-- acx_qa_field --> 
							<label>
							Button Color:<a onclick="acx_csma_restore_default('','#fe7e01','acx_csma_subscribe_btn_color3');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_subscribe_btn_color3"  id="acx_csma_subscribe_btn_color3" onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_appearence_array['3']['acx_csma_subscribe_btn_color3']; ?>" size="20"/>
							<div style="position: absolute;" id="acx_csma_subscribe_btn_color3_div"></div>
							</div> <!-- acx_qa_field --> 
							<label>
							Button  Hover Text Color:<a onclick="acx_csma_restore_default('','#0b1c2c','acx_csma_subscribe_btn_hover_color3');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_subscribe_btn_hover_color3"  id="acx_csma_subscribe_btn_hover_color3" onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_appearence_array['3']['acx_csma_subscribe_btn_hover_color3']; ?>" size="20"/>
							<div style="position: absolute;" id="acx_csma_subscribe_btn_hover_color3_div"></div>
							</div> <!-- acx_qa_field --> 
							<label>
							Button  Hover Background  Color:<a onclick="acx_csma_restore_default('','#fe6001','acx_csma_subscribe_btn_hover_bgcolor3');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_subscribe_btn_hover_bgcolor3"  id="acx_csma_subscribe_btn_hover_bgcolor3" onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_appearence_array['3']['acx_csma_subscribe_btn_hover_bgcolor3']; ?>" size="20"/>
							<div style="position: absolute;" id="acx_csma_subscribe_btn_hover_bgcolor3_div"></div>
							</div> <!-- acx_qa_field --> 	
							<label>
							Subscribe Success Message:
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_subscribe_success3"  value="<?php echo stripslashes(esc_attr($acx_csma_appearence_array['3']['acx_csma_subscribe_success3'])); ?>" size="20"/>
							</div> <!-- acx_qa_field -->
							<label>
							Subscribe Invalid Message:
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_subscribe_invalid3"  value="<?php echo stripslashes(esc_attr($acx_csma_appearence_array['3']['acx_csma_subscribe_invalid3'])); ?>" size="20"/>
							</div> <!-- acx_qa_field -->
						</div> <!-- acx_csmap_q_and_a_inside --> 
					</div> <!-- acx_csmap_q_and_a --> 
				</div> <!-- acx_csmap_q_and_a_h -->
			<!-- ################################# QUESTION AND ANSWER SET ENDS HERE #############################################-->
			<!-- ################################ QUESTION AND ANSWER SET STARTS HERE ############################################-->
					<?php $acx_csmap_qa_id = $acx_csmap_qa_id+1; ?>

				<div id="acx_csmap_q_and_a_h" class="acx_csmap_q_and_a_h_common acx_csmap_q_and_a_h_<?php echo $acx_csmap_qa_id; ?>">
					<span class="acx_csma_q" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);">
					Heading Settings - Right Side
					</span>
					<span class="acx_csma_toggle acx_csma_toggle_<?php echo $acx_csmap_qa_id; ?> plus" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);"></span>
					<div id="acx_csmap_q_and_a" class="acx_csmap_q_and_a_common acx_csmap_q_and_a_<?php echo $acx_csmap_qa_id; ?>" style="display:none;">
						<div class="acx_csmap_q_and_a_inside">
							<label>
							Title:
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_inside_title3" value="<?php echo stripslashes(esc_attr($acx_csma_appearence_array['3']['acx_csma_inside_title3'])); ?>"  size="20"/>
							</div> <!-- acx_qa_field --> 
							<label>
							Title Color:<a onclick="acx_csma_restore_default('','#ffffff','acx_csma_inside_title_color3');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_inside_title_color3" id="acx_csma_inside_title_color3" onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_appearence_array['3']['acx_csma_inside_title_color3']; ?>" size="20"/>
							<div style="position: absolute;" id="acx_csma_inside_title_color3_div"></div>
							</div> <!-- acx_qa_field --> 
						</div> <!-- acx_csmap_q_and_a_inside -->
					</div> <!-- acx_csmap_q_and_a --> 
				</div> <!-- acx_csmap_q_and_a_h -->
			<!-- ################################# QUESTION AND ANSWER SET ENDS HERE #############################################-->
			<!-- ################################ QUESTION AND ANSWER SET STARTS HERE ############################################-->
					<?php $acx_csmap_qa_id = $acx_csmap_qa_id+1; ?>

				<div id="acx_csmap_q_and_a_h" class="acx_csmap_q_and_a_h_common acx_csmap_q_and_a_h_<?php echo $acx_csmap_qa_id; ?>">
					<span class="acx_csma_q" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);">
					Right Side Content & Custom HTML Settings
					</span>
					<span class="acx_csma_toggle acx_csma_toggle_<?php echo $acx_csmap_qa_id; ?> plus" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);"></span>
					<div id="acx_csmap_q_and_a" class="acx_csmap_q_and_a_common acx_csmap_q_and_a_<?php echo $acx_csmap_qa_id; ?>" style="display:none;">
						<div class="acx_csmap_q_and_a_inside">
							<label>
							Input Text Color:<a onclick="acx_csma_restore_default('','#000000','acx_csma_timer_iptext_color3');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_timer_iptext_color3"  id="acx_csma_timer_iptext_color3" onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_appearence_array['3']['acx_csma_timer_iptext_color3']; ?>" size="20"/>
							<div style="position: absolute;" id="acx_csma_timer_iptext_color3_div"></div>
							</div> <!-- acx_qa_field --> 
							<label>
							Heading Color:<a onclick="acx_csma_restore_default('','#000000','acx_csma_timer_head_color3');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_timer_head_color3" id="acx_csma_timer_head_color3" onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_appearence_array['3']['acx_csma_timer_head_color3']; ?>"  size="20"/>
							<div style="position: absolute;" id="acx_csma_timer_head_color3_div"></div>
							</div> <!-- acx_qa_field --> 
							<label>
							Custom HTML Block Above Description Block
							</label>
							<div class="acx_qa_field">
							<?php $acx_csma_custom_html_top_temp3 =$acx_csma_appearence_array['3']['acx_csma_custom_html_top_temp3']; ?>
							<textarea id="acx_csma_custom_html_top_temp3" name="acx_csma_custom_html_top_temp3" placeholder="HTML Code Here"><?php echo stripslashes($acx_csma_custom_html_top_temp3); ?></textarea>
							</div><!-- acx_qa_field -->
							<label>
							Description Title:
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_desc_title3" value="<?php echo stripslashes(esc_attr($acx_csma_appearence_array['3']['acx_csma_desc_title3'])); ?>" size="20"/>
							</div> <!-- acx_qa_field --> 
							<label>
							Description Sub Title:
							</label>
							<div class="acx_qa_field">
							<textarea  name="acx_csma_desc_subtitle3" id="acx_csma_desc_subtitle3" ><?php echo stripslashes($acx_csma_appearence_array['3']['acx_csma_desc_subtitle3']); ?></textarea>
							</div> <!-- acx_qa_field --> 
							<label>
							Description Text Color:<a onclick="acx_csma_restore_default('','#000000','acx_csma_desc_text_color3');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_desc_text_color3"  id="acx_csma_desc_text_color3" onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_appearence_array['3']['acx_csma_desc_text_color3']; ?>" size="20"/>
							<div style="position: absolute;" id="acx_csma_desc_text_color3_div"></div>
							</div> <!-- acx_qa_field --> 
						</div> <!-- acx_csmap_q_and_a_inside --> 
					</div> <!-- acx_csmap_q_and_a --> 
				</div> <!-- acx_csmap_q_and_a_h -->
			<!-- ################################# QUESTION AND ANSWER SET ENDS HERE #############################################-->
			<!-- ################################ QUESTION AND ANSWER SET STARTS HERE ###########################################-->
					<?php $acx_csmap_qa_id = $acx_csmap_qa_id+1; ?>
				<div id="acx_csmap_q_and_a_h" class="acx_csmap_q_and_a_h_common acx_csmap_q_and_a_h_<?php echo $acx_csmap_qa_id; ?>">
					<span class="acx_csma_q" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);">
					Footer Settings
					</span>
					<span class="acx_csma_toggle acx_csma_toggle_<?php echo $acx_csmap_qa_id; ?> plus" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);"></span>
					<div id="acx_csmap_q_and_a" class="acx_csmap_q_and_a_common acx_csmap_q_and_a_<?php echo $acx_csmap_qa_id; ?>" style="display:none;">
						<div class="acx_csmap_q_and_a_inside">
							<label>
							Footer Text:
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_footer_text3" value="<?php echo stripslashes(esc_attr($acx_csma_appearence_array['3']['acx_csma_footer_text3'])); ?>" size="20"/>
							</div> <!-- acx_qa_field --> 
							<label>
							Footer Color:<a onclick="acx_csma_restore_default('','#000000','acx_csma_footer_color3');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_footer_color3"  id="acx_csma_footer_color3" onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_appearence_array['3']['acx_csma_footer_color3']; ?>"  size="20"/>
							<div style="position: absolute;" id="acx_csma_footer_color3_div"></div>
							</div> <!-- acx_qa_field --> 
							
							
						</div> <!-- acx_csmap_q_and_a_inside --> 
					</div> <!-- acx_csmap_q_and_a --> 
				</div> <!-- acx_csmap_q_and_a_h -->
			<!-- ################################# QUESTION AND ANSWER SET ENDS HERE ############################################ -->
			<!-- ################################ QUESTION AND ANSWER SET STARTS HERE ########################################### -->
				<?php $acx_csmap_qa_id = $acx_csmap_qa_id+1; ?>
				<div id="acx_csmap_q_and_a_h" class="acx_csmap_q_and_a_h_common acx_csmap_q_and_a_h_<?php echo $acx_csmap_qa_id; ?>">
					<span class="acx_csma_q" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);">
					Social Media Settings
					</span>
					<span class="acx_csma_toggle acx_csma_toggle_<?php echo $acx_csmap_qa_id; ?> plus" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);"></span>
					<div id="acx_csmap_q_and_a" class="acx_csmap_q_and_a_common acx_csmap_q_and_a_<?php echo $acx_csmap_qa_id; ?>" style="display:none;">
						<div class="acx_csmap_q_and_a_inside">
							<label>
							Social Media Text:
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_social_link_title3" value="<?php echo stripslashes(esc_attr($acx_csma_appearence_array['3']['acx_csma_social_link_title3'])); ?>" size="20"/>
							</div> <!-- acx_qa_field --> 
							<label>
							Social Media Text Color:<a onclick="acx_csma_restore_default('','#000000','acx_csma_social_link_title_color3');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_social_link_title_color3"  id="acx_csma_social_link_title_color3" onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_appearence_array['3']['acx_csma_social_link_title_color3']; ?>"  size="20"/>
							<div style="position: absolute;" id="acx_csma_social_link_title_color3_div"></div>
							</div> <!-- acx_qa_field --> 
							<label>
							Facebook Link:
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_fb_link3"  id="acx_csma_fb_link3" value="<?php echo esc_url($acx_csma_appearence_array['3']['acx_csma_fb_link3']); ?>" size="20"/>
							</div> <!-- acx_qa_field -->
							<label>
							Twitter Link:
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_twitter_link3"  id="acx_csma_twitter_link3" value="<?php echo esc_url($acx_csma_appearence_array['3']['acx_csma_twitter_link3']); ?>" size="20"/>
							</div> <!-- acx_qa_field -->
							<label>
							LinkedIn Link:
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_linkedin_link3"  id="acx_csma_linkedin_link3" value="<?php echo esc_url($acx_csma_appearence_array['3']['acx_csma_linkedin_link3']); ?>" size="20"/>
							</div> <!-- acx_qa_field -->
						</div> <!-- acx_csmap_q_and_a_inside -->
					</div> <!-- acx_csmap_q_and_a -->
				</div> <!-- acx_csmap_q_and_a_h -->
			<!-- ################################# QUESTION AND ANSWER SET ENDS HERE #############################################-->

			</div> <!-- acx_csma_3_p_q_and_a_h_main_holder -->
		</div><!--acx_csma_template_3-->			
						
		<div id="acx_csma_template_4" style="display:none;" class="acx_csma_template_option_holder">
			<div id="acx_csma_4_p_q_and_a_h_main_holder">
			<!-- ################################ QUESTION AND ANSWER SET STARTS HERE ###########################################-->
				<?php $acx_csmap_qa_id = $acx_csmap_qa_id+1; ?>

				<div id="acx_csmap_q_and_a_h" class="acx_csmap_q_and_a_h_common acx_csmap_q_and_a_h_<?php echo $acx_csmap_qa_id; ?>">
					<span class="acx_csma_q" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);">
					Background Settings
					</span>
					<span class="acx_csma_toggle acx_csma_toggle_<?php echo $acx_csmap_qa_id; ?> plus" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);"></span>
					<div id="acx_csmap_q_and_a" class="acx_csmap_q_and_a_common acx_csmap_q_and_a_<?php echo $acx_csmap_qa_id; ?>" style="display:none;">
						<div class="acx_csmap_q_and_a_inside">
							<label>
							Background Image:		
							</label>
							<div class="acx_qa_field">
							<?php 
					$acx_csma_bg4_id = $acx_csma_appearence_array['4']['acx_csma_background_image4'];
					$bg4_url  = $acx_csma_bg4_id;
					if(is_numeric($acx_csma_bg4_id))
					{
						$bg4_attachment_url = parse_url( wp_get_attachment_url($acx_csma_bg4_id) );
						$bg4_url    = $bg4_attachment_url [ 'scheme' ]  . '://' .rawurlencode( basename( $bg4_attachment_url[ 'host' ])). $bg4_attachment_url[ 'path' ];
					} 
				
						?>
							<img id="custom_uploader_template_4_img_field_preview" src="<?php echo $bg4_url; ?>" style="width:100px;height:auto;">
							<input type="hidden" id="custom_uploader_template_4_img_field" name="acx_csma_background_image4" value="<?php echo $acx_csma_bg4_id; ?>" size="20">
							<a id="acx_upload_button_img4" class="button">Choose Image</a>
							<a id="acx_upload_button_reset_img1" onclick="acx_csma_restore_default('custom_uploader_template_4_img_field_preview','<?php  echo ACX_CSMA_BASE_LOCATION . 'templates/4/images/body_bg.jpg'; ?>','custom_uploader_template_4_img_field');" class="button">Reset To Default</a>
							</div> <!-- acx_qa_field --> 
						</div> <!-- acx_csmap_q_and_a_inside -->
					</div> <!-- acx_csmap_q_and_a --> 
				</div> <!-- acx_csmap_q_and_a_h -->
			<!-- ################################# QUESTION AND ANSWER SET ENDS HERE ############################################ -->
			<!-- ################################ QUESTION AND ANSWER SET STARTS HERE ########################################### -->
				<?php $acx_csmap_qa_id = $acx_csmap_qa_id+1; ?>

				<div id="acx_csmap_q_and_a_h" class="acx_csmap_q_and_a_h_common acx_csmap_q_and_a_h_<?php echo $acx_csmap_qa_id; ?>">
					<span class="acx_csma_q" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);">
					Logo Settings
					</span>
					<span class="acx_csma_toggle acx_csma_toggle_<?php echo $acx_csmap_qa_id; ?> plus" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);"></span>
					<div id="acx_csmap_q_and_a" class="acx_csmap_q_and_a_common acx_csmap_q_and_a_<?php echo $acx_csmap_qa_id; ?>" style="display:none;">
						<div class="acx_csmap_q_and_a_inside">
						<div class="acx_csma_logo_main">
						<table cellspacing="10">
						<tr><td>
						<input type="radio" name="acx_csma_logo_choice4" class="acx_csma_logo" id="acx_csma_logo_image4" value="image" onclick="acx_csma_rdbtn_show_logo('image','4');" <?php  if(array_key_exists('acx_csma_logo_choice',$acx_csma_appearence_array['4'])){if($acx_csma_appearence_array['4']['acx_csma_logo_choice'] == 'image' || $acx_csma_appearence_array['4']['acx_csma_logo_choice']==''){echo "checked='checked'";}}else{ echo "checked='checked'";} ?>/>Logo Image</td><td>
						<input type="radio" name="acx_csma_logo_choice4" class="acx_csma_logo" id="acx_csma_logo_text4" value="text"  onclick="acx_csma_rdbtn_show_logo('text','4');" <?php if(array_key_exists('acx_csma_logo_choice',$acx_csma_appearence_array['4'])){if($acx_csma_appearence_array['4']['acx_csma_logo_choice'] == 'text'){echo "checked='checked'";}}?>/>Logo Text</td></tr></table>
						</div><!--acx_csma_logo_main -->
						<div id="acx_show_logo_image_4" class="acx_csma_logo_block acx_csma_logo_block_4"  style="display:none;">
							<label>
							Logo:<span id="acx_csma_span">(Recommended size 326x138)</span>
							</label>
							<div class="acx_qa_field">
							<?php 
					$acx_csma_logo4_id = $acx_csma_appearence_array['4']['acx_csma_logo4'];
					$logo4_url  = $acx_csma_logo4_id;
					if(is_numeric($acx_csma_logo4_id))
					{
						$logo4_attachment_url = parse_url( wp_get_attachment_url($acx_csma_logo4_id) );
						$logo4_url    = $logo4_attachment_url [ 'scheme' ]  . '://' .rawurlencode( basename( $logo4_attachment_url[ 'host' ])). $logo4_attachment_url[ 'path' ];
					} 
				
						?>
							
							<img id="custom_uploader_template_4_logo_field_preview" src="<?php echo $logo4_url; ?>" style="width:100px;height:auto;">
							<input type="hidden" id="custom_uploader_template_4_logo_field" name="acx_csma_logo4" value="<?php echo $acx_csma_logo4_id; ?>" size="20"><a id="acx_upload_button_logo4" class="button">Pick a Logo</a>
							<a id="acx_upload_button_reset_img1" onclick="acx_csma_restore_default('custom_uploader_template_4_logo_field_preview','<?php echo ACX_CSMA_BASE_LOCATION . 'templates/4/images/logo.png'; ?>','custom_uploader_template_4_logo_field');" class="button">Reset To Default</a>
							</div> <!-- acx_qa_field --> 
							</div><!--acx_show_logo_image-->
							<div id="acx_show_logo_text_4" class="acx_csma_logo_block acx_csma_logo_block_4"  style="display:none;">
							<label>
							Logo Text:
							</label>
							<div class="acx_qa_field">
							<?php if(array_key_exists('acx_csma_logo_text4',$acx_csma_appearence_array['4'])){ $acx_csma_logo_text4=$acx_csma_appearence_array['4']['acx_csma_logo_text4'];
							if($acx_csma_logo_text4 == "")
							{
								$acx_csma_logo_text4=get_bloginfo('name');
							}}
							else{
								$acx_csma_logo_text4=get_bloginfo('name');
							}?>
							<input type="text" name="acx_csma_logo_text4" placeholder="Logo Text Here" value="<?php echo stripslashes(esc_attr($acx_csma_logo_text4)); ?>" size="20"/>
							</div> <!-- acx_qa_field -->
							<label>
							Logo Text Color: <a onclick="acx_csma_restore_default('','#ffffff','acx_csma_logo_text_color4');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
							<div class="acx_qa_field">
							<?php if(array_key_exists('acx_csma_logo_text_color4',$acx_csma_appearence_array['4'])){ $acx_csma_logo_text_color4=$acx_csma_appearence_array['4']['acx_csma_logo_text_color4'];
							if($acx_csma_logo_text_color4 == "")
							{
								$acx_csma_logo_text_color4="#ffffff";
							}}else{
								$acx_csma_logo_text_color4="#ffffff";
							}?>
							<input type="text" name="acx_csma_logo_text_color4" id="acx_csma_logo_text_color4" onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_logo_text_color4; ?>" size="20" />
							<div style="position: absolute;" id="acx_csma_logo_text_color4_div"></div>
							</div> <!-- acx_qa_field --> 
							</div><!--acx_show_logo_text-->
						</div> <!-- acx_csmap_q_and_a_inside --> 
					</div> <!-- acx_csmap_q_and_a -->
				</div> <!-- acx_csmap_q_and_a_h -->
			<!-- ################################# QUESTION AND ANSWER SET ENDS HERE ############################################ -->
			<!-- ################################ QUESTION AND ANSWER SET STARTS HERE ########################################### -->
				<?php $acx_csmap_qa_id = $acx_csmap_qa_id+1; ?>
				<div id="acx_csmap_q_and_a_h" class="acx_csmap_q_and_a_h_common acx_csmap_q_and_a_h_<?php echo $acx_csmap_qa_id; ?>">
					<span class="acx_csma_q" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);">
					Main Heading & Custom HTML Settings
					</span>
					<span class="acx_csma_toggle acx_csma_toggle_<?php echo $acx_csmap_qa_id; ?> plus" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);"></span>
					<div id="acx_csmap_q_and_a" class="acx_csmap_q_and_a_common acx_csmap_q_and_a_<?php echo $acx_csmap_qa_id; ?>" style="display:none;">
						<div class="acx_csmap_q_and_a_inside">
							<label>
							Background Color:<a onclick="acx_csma_restore_default('','#ebebeb','acx_csma_inside_bg_color4');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_inside_bg_color4" id="acx_csma_inside_bg_color4" onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_appearence_array['4']['acx_csma_inside_bg_color4']; ?>" size="20"/>
							<div style="position: absolute;" id="acx_csma_inside_bg_color4_div"></div>
							</div> <!-- acx_qa_field --> 
							<label>
							Title Text:
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_title4" value="<?php echo stripslashes(esc_attr($acx_csma_appearence_array['4']['acx_csma_title4'])); ?>" size="20"/>
							</div> <!-- acx_qa_field -->
							<label>
							Custom HTML Block Above Countdown Timer
							</label>
							<div class="acx_qa_field">
							<?php $acx_csma_custom_html_top_temp4 =$acx_csma_appearence_array['4']['acx_csma_custom_html_top_temp4']; ?>
							<textarea id="acx_csma_custom_html_top_temp4" name="acx_csma_custom_html_top_temp4" placeholder="HTML Code Here"><?php echo stripslashes($acx_csma_custom_html_top_temp4); ?></textarea>
							</div><!-- acx_qa_field -->
							<label>
							Title Text color:<a onclick="acx_csma_restore_default('','#717171','acx_csma_title_color4');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_title_color4" id="acx_csma_title_color4" onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_appearence_array['4']['acx_csma_title_color4']; ?>" size="20"/>
							<div style="position: absolute;" id="acx_csma_title_color4_div"></div>
							</div> <!-- acx_qa_field -->
						</div> <!-- acx_csmap_q_and_a_inside --> 
					</div> <!-- acx_csmap_q_and_a --> 
				</div> <!-- acx_csmap_q_and_a_h -->
			<!-- ################################# QUESTION AND ANSWER SET ENDS HERE #############################################-->
			<!-- ################################ QUESTION AND ANSWER SET STARTS HERE ############################################-->
				<?php $acx_csmap_qa_id = $acx_csmap_qa_id+1; ?>

				<div id="acx_csmap_q_and_a_h" class="acx_csmap_q_and_a_h_common acx_csmap_q_and_a_h_<?php echo $acx_csmap_qa_id; ?>">
					<span class="acx_csma_q" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);">
					Countdown Timer, Progress Bar & Custom HTML Settings
					</span>
					<span class="acx_csma_toggle acx_csma_toggle_<?php echo $acx_csmap_qa_id; ?> plus" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);"></span>
					<div id="acx_csmap_q_and_a" class="acx_csmap_q_and_a_common acx_csmap_q_and_a_<?php echo $acx_csmap_qa_id; ?>" style="display:none;">
						<div class="acx_csmap_q_and_a_inside">
						<label>
						Would you like to show Timer?
						</label>
						<div class="acx_qa_field">
						<select name="acx_csma_show_timer4">
						<option value="1" <?php if ($acx_csma_show_timer4 == "1") { echo 'selected="selected"'; } ?>>Yes </option>
						<option value="0" <?php if ($acx_csma_show_timer4 == "0") { echo 'selected="selected"'; } ?>>No</option>
						</select>	
						</div>
							<label>
							Input Text Color:<a onclick="acx_csma_restore_default('','#717171','acx_csma_timer_iptext_color4');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_timer_iptext_color4"  id="acx_csma_timer_iptext_color4" onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_appearence_array['4']['acx_csma_timer_iptext_color4']; ?>" size="20"/>
							<div style="position: absolute;" id="acx_csma_timer_iptext_color4_div"></div>
							</div> <!-- acx_qa_field -->
							
							<label>
							Heading Color:<a onclick="acx_csma_restore_default('','#717171','acx_csma_timer_head_color4');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_timer_head_color4" id="acx_csma_timer_head_color4" onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_appearence_array['4']['acx_csma_timer_head_color4']; ?>" size="20"/>
							<div style="position: absolute;" id="acx_csma_timer_head_color4_div"></div>	
							</div> <!-- acx_qa_field -->
							<label>
							Would you like to show Progress Bar?
							</label>
							<div class="acx_qa_field">
							<select name="acx_csma_show_progressbar4">
							<option value="1" <?php if ($acx_csma_show_progressbar4 == "1") { echo 'selected="selected"'; } ?>>Yes </option>
							<option value="0" <?php if ($acx_csma_show_progressbar4 == "0") { echo 'selected="selected"'; } ?>>No</option>
							</select>	
							</div>
							<label>
							Progress Bar Color:<a onclick="acx_csma_restore_default('','#717171','acx_csma_progress_bar_color4');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_progress_bar_color4" id="acx_csma_progress_bar_color4" onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_appearence_array['4']['acx_csma_progress_bar_color4']; ?>" size="20"/>
							<div style="position: absolute;" id="acx_csma_progress_bar_color4_div"></div>	
							</div> <!-- acx_qa_field -->
							<label>
							Custom HTML Block Below Countdown Timer
							</label>
							<div class="acx_qa_field">
							<?php $acx_csma_custom_html_bottom_temp4 =$acx_csma_appearence_array['4']['acx_csma_custom_html_bottom_temp4']; ?>
							<textarea id="acx_csma_custom_html_bottom_temp4" name="acx_csma_custom_html_bottom_temp4" placeholder="HTML Code Here"><?php echo stripslashes($acx_csma_custom_html_bottom_temp4); ?></textarea>
							</div><!-- acx_qa_field -->
						</div> <!-- acx_csmap_q_and_a_inside --> 
					</div> <!-- acx_csmap_q_and_a --> 
				</div> <!-- acx_csmap_q_and_a_h -->
			<!-- ################################# QUESTION AND ANSWER SET ENDS HERE #############################################-->
			<!-- ################################ QUESTION AND ANSWER SET STARTS HERE ########################################### -->
				<?php $acx_csmap_qa_id = $acx_csmap_qa_id+1; ?>
				<div id="acx_csmap_q_and_a_h" class="acx_csmap_q_and_a_h_common acx_csmap_q_and_a_h_<?php echo $acx_csmap_qa_id; ?>">
					<span class="acx_csma_q" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);">
					Social Media Settings
					</span>
					<span class="acx_csma_toggle acx_csma_toggle_<?php echo $acx_csmap_qa_id; ?> plus" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);"></span>
					<div id="acx_csmap_q_and_a" class="acx_csmap_q_and_a_common acx_csmap_q_and_a_<?php echo $acx_csmap_qa_id; ?>" style="display:none;">
						<div class="acx_csmap_q_and_a_inside">
							<label>
							Facebook Link
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_fb_link4"  id="acx_csma_fb_link4" value="<?php echo esc_url($acx_csma_appearence_array['4']['acx_csma_fb_link4']); ?>" size="20"/>
							</div> <!-- acx_qa_field -->
							<label>
							Twitter Link
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_twitter_link4"  id="acx_csma_twitter_link4" value="<?php echo esc_url($acx_csma_appearence_array['4']['acx_csma_twitter_link4']); ?>" size="20"/>
							</div> <!-- acx_qa_field -->
							<label>
							LinkedIn Link
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_linkedin_link4"  id="acx_csma_linkedin_link4" value="<?php echo esc_url($acx_csma_appearence_array['4']['acx_csma_linkedin_link4']); ?>" size="20"/>
							</div> <!-- acx_qa_field -->
						</div> <!-- acx_csmap_q_and_a_inside -->
					</div> <!-- acx_csmap_q_and_a -->
				</div> <!-- acx_csmap_q_and_a_h -->
			<!-- ################################# QUESTION AND ANSWER SET ENDS HERE #############################################-->
			</div> <!-- acx_csma_4_p_q_and_a_h_main_holder -->
		</div><!--acx_csma_template_4-->
					
		<div id="acx_csma_template_5" style="display:none;" class="acx_csma_template_option_holder">
			<div id="acx_csma_5_p_q_and_a_h_main_holder">
			<!-- ################################ QUESTION AND ANSWER SET STARTS HERE ############################################-->
				<?php $acx_csmap_qa_id = $acx_csmap_qa_id+1; ?>

				<div id="acx_csmap_q_and_a_h" class="acx_csmap_q_and_a_h_common acx_csmap_q_and_a_h_<?php echo $acx_csmap_qa_id; ?>">
					<span class="acx_csma_q" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);">
					Background Settings
					</span>
					<span class="acx_csma_toggle acx_csma_toggle_<?php echo $acx_csmap_qa_id; ?> plus" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);"></span>
					<div id="acx_csmap_q_and_a" class="acx_csmap_q_and_a_common acx_csmap_q_and_a_<?php echo $acx_csmap_qa_id; ?>" style="display:none;">
						<div class="acx_csmap_q_and_a_inside">
							<label>
							Background Color:<a onclick="acx_csma_restore_default('','#e9eaec','acx_csma_bgcolor5');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_bgcolor5" id="acx_csma_bgcolor5" onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_appearence_array['5']['acx_csma_bgcolor5']; ?>" size="20"/>
							<div style="position: absolute;" id="acx_csma_bgcolor5_div"></div>
							</div> <!-- acx_qa_field --> 
						</div><!-- acx_csmap_q_and_a_inside --> 
					</div> <!-- acx_csmap_q_and_a -->
				</div> <!-- acx_csmap_q_and_a_h -->
			<!-- ################################# QUESTION AND ANSWER SET ENDS HERE #############################################-->
			<!-- ################################ QUESTION AND ANSWER SET STARTS HERE ############################################-->
				<?php $acx_csmap_qa_id = $acx_csmap_qa_id+1; ?>
				<div id="acx_csmap_q_and_a_h" class="acx_csmap_q_and_a_h_common acx_csmap_q_and_a_h_<?php echo $acx_csmap_qa_id; ?>">
					<span class="acx_csma_q" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);">
					Logo Settings 
					</span>
					<span class="acx_csma_toggle acx_csma_toggle_<?php echo $acx_csmap_qa_id; ?> plus" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);"></span>
					<div id="acx_csmap_q_and_a" class="acx_csmap_q_and_a_common acx_csmap_q_and_a_<?php echo $acx_csmap_qa_id; ?>" style="display:none;">
						<div class="acx_csmap_q_and_a_inside">
						<div class="acx_csma_logo_main">
						<table cellspacing="10">
						<tr><td>
						<input type="radio" name="acx_csma_logo_choice5" class="acx_csma_logo" id="acx_csma_logo_image5" value="image" onclick="acx_csma_rdbtn_show_logo('image','5');" <?php if(array_key_exists('acx_csma_logo_choice',$acx_csma_appearence_array['5'])){if($acx_csma_appearence_array['5']['acx_csma_logo_choice'] == 'image' || $acx_csma_appearence_array['5']['acx_csma_logo_choice']==''){echo "checked='checked'";}}else{ echo "checked='checked'";} ?>/>Logo Image</td><td>
						<input type="radio" name="acx_csma_logo_choice5" class="acx_csma_logo" id="acx_csma_logo_text5" value="text"  onclick="acx_csma_rdbtn_show_logo('text','5');" <?php if(array_key_exists('acx_csma_logo_choice',$acx_csma_appearence_array['5'])){if($acx_csma_appearence_array['5']['acx_csma_logo_choice'] == 'text'){echo "checked='checked'";}}?>/>Logo Text</td></tr></table>
						</div><!--acx_csma_logo_main -->
						<div id="acx_show_logo_image_5"  class="acx_csma_logo_block acx_csma_logo_block_5" style="display:none;">
							<label>
							Logo: <span id="acx_csma_span">(Recommended size 315x94)</span>
							</label>
							<div class="acx_qa_field">
							<?php 
					$acx_csma_logo5_id = $acx_csma_appearence_array['5']['acx_csma_logo5'];
					$logo5_url  = $acx_csma_logo5_id;
					if(is_numeric($acx_csma_logo5_id))
					{
						$logo5_attachment_url = parse_url( wp_get_attachment_url($acx_csma_logo5_id) );
						$logo5_url    = $logo5_attachment_url [ 'scheme' ]  . '://' .rawurlencode( basename( $logo5_attachment_url[ 'host' ])). $logo5_attachment_url[ 'path' ];
					} 
				
					?>
							<img id="custom_uploader_template_5_logo_field_preview" src="<?php echo $logo5_url; ?>" style="width:100px;height:auto;">
							<input type="hidden" id="custom_uploader_template_5_logo_field" name="acx_csma_logo5" value="<?php echo $acx_csma_logo5_id ; ?>" size="20"><a id="acx_upload_button_logo5" class="button">Pick a Logo</a>
							<a id="acx_upload_button_reset_img1" onclick="acx_csma_restore_default('custom_uploader_template_5_logo_field_preview','<?php echo ACX_CSMA_BASE_LOCATION . 'templates/5/images/logo.png'; ?>','custom_uploader_template_5_logo_field');" class="button">Reset To Default</a>
							</div> <!-- acx_qa_field -->
							</div> <!-- acx_show_logo_image -->
							<div id="acx_show_logo_text_5"  class="acx_csma_logo_block acx_csma_logo_block_5" style="display:none;">
							<label>
							Logo Text:
							</label>
							<div class="acx_qa_field">
							<?php  if(array_key_exists('acx_csma_logo_text5',$acx_csma_appearence_array['5'])){$acx_csma_logo_text5=$acx_csma_appearence_array['5']['acx_csma_logo_text5'];
							if($acx_csma_logo_text5 == "")
							{
								$acx_csma_logo_text5=get_bloginfo('name');
							}}else{
								$acx_csma_logo_text5=get_bloginfo('name');
							}?>
							<input type="text" name="acx_csma_logo_text5" placeholder="Logo Text Here" value="<?php echo stripslashes(esc_attr($acx_csma_logo_text5)); ?>" size="20"/>
							</div> <!-- acx_qa_field -->
							<label>
							Logo Text Color: <a onclick="acx_csma_restore_default('','#000000','acx_csma_logo_text_color5');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
							<div class="acx_qa_field">
							<?php  if(array_key_exists('acx_csma_logo_text_color5',$acx_csma_appearence_array['5'])){$acx_csma_logo_text_color5=$acx_csma_appearence_array['5']['acx_csma_logo_text_color5'];
							if($acx_csma_logo_text_color5 == "")
							{
								$acx_csma_logo_text_color5="#000000";
							}}$acx_csma_logo_text_color5="#000000"; ?>
							<input type="text" name="acx_csma_logo_text_color5" id="acx_csma_logo_text_color5" onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_logo_text_color5; ?>" size="20" />
							<div style="position: absolute;" id="acx_csma_logo_text_color5_div"></div>
							</div> <!-- acx_qa_field --> 
							</div> <!-- acx_show_logo_text -->
						</div><!-- acx_csmap_q_and_a_inside --> 
					</div> <!-- acx_csmap_q_and_a --> 
				</div> <!-- acx_csmap_q_and_a_h -->
			<!-- ################################# QUESTION AND ANSWER SET ENDS HERE #############################################-->
			<!-- ################################ QUESTION AND ANSWER SET STARTS HERE ############################################-->
				<?php $acx_csmap_qa_id = $acx_csmap_qa_id+1; ?>
				<div id="acx_csmap_q_and_a_h" class="acx_csmap_q_and_a_h_common acx_csmap_q_and_a_h_<?php echo $acx_csmap_qa_id; ?>">
					<span class="acx_csma_q" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);">
					Inner Block Background Settings
					</span>
					<span class="acx_csma_toggle acx_csma_toggle_<?php echo $acx_csmap_qa_id; ?> plus" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);"></span>
					<div id="acx_csmap_q_and_a" class="acx_csmap_q_and_a_common acx_csmap_q_and_a_<?php echo $acx_csmap_qa_id; ?>" style="display:none;">
						<div class="acx_csmap_q_and_a_inside">
							<label>
							Background Color:<a onclick="acx_csma_restore_default('','#f5f5f5','acx_csma_inside_bg_color5');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_inside_bg_color5" id="acx_csma_inside_bg_color5" onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_appearence_array['5']['acx_csma_inside_bg_color5']; ?>" size="20"/>
							<div style="position: absolute;" id="acx_csma_inside_bg_color5_div"></div>
							</div> <!-- acx_qa_field --> 
						</div><!-- acx_csmap_q_and_a_inside --> 
					</div> <!-- acx_csmap_q_and_a -->
				</div> <!-- acx_csmap_q_and_a_h -->
			<!-- ################################# QUESTION AND ANSWER SET ENDS HERE #############################################-->
			<!-- ################################ QUESTION AND ANSWER SET STARTS HERE ############################################-->
				<?php $acx_csmap_qa_id = $acx_csmap_qa_id+1; ?>
				<div id="acx_csmap_q_and_a_h" class="acx_csmap_q_and_a_h_common acx_csmap_q_and_a_h_<?php echo $acx_csmap_qa_id; ?>">
					<span class="acx_csma_q" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);">
					Main Heading Settings
					</span>
					<span class="acx_csma_toggle acx_csma_toggle_<?php echo $acx_csmap_qa_id; ?> plus" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);"></span>
					<div id="acx_csmap_q_and_a" class="acx_csmap_q_and_a_common acx_csmap_q_and_a_<?php echo $acx_csmap_qa_id; ?>" style="display:none;">
						<div class="acx_csmap_q_and_a_inside">
							<label>
							Title Text:	
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_title5" value="<?php echo stripslashes(esc_attr($acx_csma_appearence_array['5']['acx_csma_title5'])); ?>" size="20"/>
							</div> <!-- acx_qa_field --> 
							<label>
							Custom HTML Block Above Countdown Timer
							</label>
							<div class="acx_qa_field">
							<?php $acx_csma_custom_html_top_temp5 =$acx_csma_appearence_array['5']['acx_csma_custom_html_top_temp5']; ?>
							<textarea id="acx_csma_custom_html_top_temp5" name="acx_csma_custom_html_top_temp5" placeholder="HTML Code Here"><?php echo stripslashes($acx_csma_custom_html_top_temp5); ?></textarea>
							</div><!-- acx_qa_field -->
							<label>
							Title Text Color:<a onclick="acx_csma_restore_default('','#4b4b4b','acx_csma_title_color5');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_title_color5" id="acx_csma_title_color5" onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_appearence_array['5']['acx_csma_title_color5']; ?>" size="20"/>
							<div style="position: absolute;" id="acx_csma_title_color5_div"></div>
							</div> <!-- acx_qa_field --> 
						</div><!-- acx_csmap_q_and_a_inside --> 
					</div> <!-- acx_csmap_q_and_a --> 
				</div> <!-- acx_csmap_q_and_a_h -->
			<!-- ################################# QUESTION AND ANSWER SET ENDS HERE #############################################-->
			<!-- ################################ QUESTION AND ANSWER SET STARTS HERE ############################################-->
				<?php $acx_csmap_qa_id = $acx_csmap_qa_id+1; ?>
				<div id="acx_csmap_q_and_a_h" class="acx_csmap_q_and_a_h_common acx_csmap_q_and_a_h_<?php echo $acx_csmap_qa_id; ?>">
					<span class="acx_csma_q" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);">
					Countdown, Progress bar & Custom HTML Settings
					</span>
					<span class="acx_csma_toggle acx_csma_toggle_<?php echo $acx_csmap_qa_id; ?> plus" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);"></span>
					<div id="acx_csmap_q_and_a" class="acx_csmap_q_and_a_common acx_csmap_q_and_a_<?php echo $acx_csmap_qa_id; ?>" style="display:none;">
						<div class="acx_csmap_q_and_a_inside">
							<label>
							Would you like to show Timer?
							</label>
							<div class="acx_qa_field">
							<select name="acx_csma_show_timer5">
							<option value="1" <?php if ($acx_csma_show_timer5 == "1") { echo 'selected="selected"'; } ?>>Yes </option>
							<option value="0" <?php if ($acx_csma_show_timer5 == "0") { echo 'selected="selected"'; } ?>>No</option>
							</select>	
							</div>
							<label>
							Input Text Color:<a onclick="acx_csma_restore_default('','#000000','acx_csma_timer_iptext_color5');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_timer_iptext_color5"  id="acx_csma_timer_iptext_color5" onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_appearence_array['5']['acx_csma_timer_iptext_color5']; ?>" size="20"/>
							<div style="position: absolute;" id="acx_csma_timer_iptext_color5_div"></div>	
							</div> <!-- acx_qa_field --> 
							<label>
							Heading Color:<a onclick="acx_csma_restore_default('','#000000','acx_csma_timer_head_color5');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_timer_head_color5" id="acx_csma_timer_head_color5" onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_appearence_array['5']['acx_csma_timer_head_color5']; ?>" size="20"/>
							<div style="position: absolute;" id="acx_csma_timer_head_color5_div"></div>
							</div> <!-- acx_qa_field --> 
							<label>
							Would you like to show Progress Bar ?
							</label>
							<div class="acx_qa_field">
							<select name="acx_csma_show_progressbar5">
							<option value="1" <?php if ($acx_csma_show_progressbar5 == "1") { echo 'selected="selected"'; } ?>>Yes </option>
							<option value="0" <?php if ($acx_csma_show_progressbar5 == "0") { echo 'selected="selected"'; } ?>>No</option>
							</select>
							</div>
							<label>
							Progress Bar Color:<a onclick="acx_csma_restore_default('','#717171','acx_csma_progress_bar_color5');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_progress_bar_color5" id="acx_csma_progress_bar_color5" onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_appearence_array['5']['acx_csma_progress_bar_color5']; ?>" size="20"/>
							<div style="position: absolute;" id="acx_csma_progress_bar_color5_div"></div>
							</div> <!-- acx_qa_field -->
							<label>
							Custom HTML Block Below Countdown Timer
							</label>
							<div class="acx_qa_field">
							<?php $acx_csma_custom_html_bottom_temp5 =$acx_csma_appearence_array['5']['acx_csma_custom_html_bottom_temp5']; ?>
							<textarea id="acx_csma_custom_html_bottom_temp5" name="acx_csma_custom_html_bottom_temp5" placeholder="HTML Code Here"><?php echo stripslashes($acx_csma_custom_html_bottom_temp5); ?></textarea>
							</div><!-- acx_qa_field -->
						</div><!-- acx_csmap_q_and_a_inside --> 
					</div> <!-- acx_csmap_q_and_a --> 
				</div> <!-- acx_csmap_q_and_a_h -->
			<!-- ################################# QUESTION AND ANSWER SET ENDS HERE #############################################-->
			<!-- ################################ QUESTION AND ANSWER SET STARTS HERE ############################################-->
				<?php $acx_csmap_qa_id = $acx_csmap_qa_id+1; ?>
				<div id="acx_csmap_q_and_a_h" class="acx_csmap_q_and_a_h_common acx_csmap_q_and_a_h_<?php echo $acx_csmap_qa_id; ?>">
					<span class="acx_csma_q" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);">
					Subscription Form Settings
					</span>
					<span class="acx_csma_toggle acx_csma_toggle_<?php echo $acx_csmap_qa_id; ?> plus" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);"></span>
					<div id="acx_csmap_q_and_a" class="acx_csmap_q_and_a_common acx_csmap_q_and_a_<?php echo $acx_csmap_qa_id; ?>" style="display:none;">
						<div class="acx_csmap_q_and_a_inside">
							<label>
							Background Color:<a onclick="acx_csma_restore_default('','#2f2f2f','acx_csma_subscribe_bg_color5');" class="acx_csmap_button_reset">[Reset To Default]</a>
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_subscribe_bg_color5"  id="acx_csma_subscribe_bg_color5" onblur="acx_csma_validate(this.value);" value="<?php echo $acx_csma_appearence_array['5']['acx_csma_subscribe_bg_color5']; ?>" size="20"/>
							<div style="position: absolute;" id="acx_csma_subscribe_bg_color5_div"></div>
							</div> <!-- acx_qa_field --> 
							<label>
							Launch Title:
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_subscribe_main_title5" value="<?php echo stripslashes(esc_attr($acx_csma_appearence_array['5']['acx_csma_subscribe_main_title5'])); ?>" size="20"/>
							</div> <!-- acx_qa_field -->
							<label>
							Title:
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_subscribe_title5" value="<?php echo stripslashes(esc_attr($acx_csma_appearence_array['5']['acx_csma_subscribe_title5'])); ?>" size="20"/>
							</div> <!-- acx_qa_field -->
							<label>
							Subscribe Success Message:
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_subscribe_success5"  value="<?php echo stripslashes(esc_attr($acx_csma_appearence_array['5']['acx_csma_subscribe_success5'])); ?>" size="20"/>
							</div> <!-- acx_qa_field -->
							<label>
							Subscribe Invalid Message:
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_subscribe_invalid5"  value="<?php echo stripslashes(esc_attr($acx_csma_appearence_array['5']['acx_csma_subscribe_invalid5'])); ?>" size="20"/>
							</div> <!-- acx_qa_field -->					
						</div><!-- acx_csmap_q_and_a_inside --> 
					</div> <!-- acx_csmap_q_and_a --> 
				</div> <!-- acx_csmap_q_and_a_h -->
			<!-- ################################# QUESTION AND ANSWER SET ENDS HERE #############################################-->
			<!-- ################################ QUESTION AND ANSWER SET STARTS HERE ########################################### -->
				<?php $acx_csmap_qa_id = $acx_csmap_qa_id+1; ?>
				<div id="acx_csmap_q_and_a_h" class="acx_csmap_q_and_a_h_common acx_csmap_q_and_a_h_<?php echo $acx_csmap_qa_id; ?>">
					<span class="acx_csma_q" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);">
					Social Media Settings
					</span>
					<span class="acx_csma_toggle acx_csma_toggle_<?php echo $acx_csmap_qa_id; ?> plus" onclick="acx_csmap_easy_qa_toggle(<?php echo $acx_csmap_qa_id; ?>);"></span>
					<div id="acx_csmap_q_and_a" class="acx_csmap_q_and_a_common acx_csmap_q_and_a_<?php echo $acx_csmap_qa_id; ?>" style="display:none;">
						<div class="acx_csmap_q_and_a_inside">
							<label>
							Facebook Link
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_fb_link5"  id="acx_csma_fb_link5" value="<?php echo esc_url($acx_csma_appearence_array['5']['acx_csma_fb_link5']); ?>" size="20"/>
							</div> <!-- acx_qa_field -->
							<label>
							Twitter Link
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_twitter_link5"  id="acx_csma_twitter_link5" value="<?php echo esc_url($acx_csma_appearence_array['5']['acx_csma_twitter_link5']); ?>" size="20"/>
							</div> <!-- acx_qa_field -->
							<label>
							LinkedIn Link
							</label>
							<div class="acx_qa_field">
							<input type="text" name="acx_csma_linkedin_link5"  id="acx_csma_linkedin_link5" value="<?php echo esc_url($acx_csma_appearence_array['5']['acx_csma_linkedin_link5']); ?>" size="20"/>
							</div> <!-- acx_qa_field -->
						</div> <!-- acx_csmap_q_and_a_inside -->
					</div> <!-- acx_csmap_q_and_a -->
				</div> <!-- acx_csmap_q_and_a_h -->
			<!-- ################################# QUESTION AND ANSWER SET ENDS HERE #############################################-->

			</div> <!-- acx_csma_5_p_q_and_a_h_main_holder -->
		</div><!--acx_csma_template_5-->
		<?php acx_csma_hook_function('acx_csma_hook_mainoptions_below_appearence_settings'); ?>
		<div id="acx_csma_template_0" style="display:none;" class="acx_csma_template_option_holder">
		<table>
		<tr><td>
		<label>
		Custom HTML content
		</label></td>
		<td><?php $acx_csma_custom_html_val = get_option('acx_csma_custom_html_val'); ?>
		<textarea id="acx_csma_custom_html" name="acx_csma_custom_html_val" style="max-width: 80%; width: 500px; height: 180px;"><?php echo stripslashes($acx_csma_custom_html_val); ?></textarea>
		</td>
		</tr>
		</table>
		</div><!-- acx_csma_template_0-->
	</div><!--acx_csma_tab_block_2-->
	<table>
	<tr><td colspan="3"><p><a onclick="acx_csma_save_settings('acx_csma_ip_list1');" name="Submit"  id="Submit" class="button button-primary" style="margin-left:20px;"><?php _e('Save Settings','acx_csma_config'); ?></a></p>
		<input name="acx_csma_save_config" type="hidden" value="<?php echo wp_create_nonce('acx_csma_save_config'); ?>" />
	</td></tr>
	</table>
</form>

<div id="acx_csma_sidebar">
<?php acx_csma_hook_function('acx_csma_hook_sidebar_widget'); ?>
</div> <!-- acx_csma_sidebar -->



</div> </div><!-- class wrap-->
<?php 
if($acx_csma_template == "") { $acx_csma_template = "1"; }
if($acx_csma_template != "")
{
	?>
	<script type="text/javascript">
	jQuery(document).ready(function() 
	{
		acx_csma_rdbtn_show_div('<?php echo $acx_csma_template; ?>');
		
	});
	</script>
<?php
}?>
<script type="text/javascript">
//upload images and logos
jQuery(document).ready(function() 
{
	acx_csma_upload_images_template_loader("acx_csma_favicon_button","Choose Favicon","Choose Image","acx_csma_favicon_field","acx_csma_favicon");
	
	acx_csma_upload_images_template_loader("acx_upload_button_img1","Choose Background","Choose Image","custom_uploader_template_1_img_field","custom_uploader_template_1_img_field_preview");
	
	acx_csma_upload_images_template_loader("acx_upload_button_logo1","Choose Logo","Choose Image","custom_uploader_template_1_logo_field","custom_uploader_template_1_logo_field_preview");

	acx_csma_upload_images_template_loader("acx_upload_button_logo2","Choose Logo","Choose Image","custom_uploader_template_2_logo_field","custom_uploader_template_2_logo_field_preview");

	acx_csma_upload_images_template_loader("acx_upload_button_logo3","Choose Logo","Choose Image","custom_uploader_template_3_logo_field","custom_uploader_template_3_logo_field_preview");

	acx_csma_upload_images_template_loader("acx_upload_button_img4","Choose Background","Choose Image","custom_uploader_template_4_img_field","custom_uploader_template_4_img_field_preview");
	acx_csma_upload_images_template_loader("acx_upload_button_logo4","Choose Logo","Choose Image","custom_uploader_template_4_logo_field","custom_uploader_template_4_logo_field_preview");

	acx_csma_upload_images_template_loader("acx_upload_button_logo5","Choose Logo","Choose Image","custom_uploader_template_5_logo_field","custom_uploader_template_5_logo_field_preview");
});
//show logo div
function acx_csma_rdbtn_show_logo(value,id)
{
 	jQuery('.acx_csma_logo_block_'+id).removeClass('acx_csma_logo_active');
	jQuery('.acx_csma_logo_block_'+id).fadeOut();
	
	jQuery('#acx_show_logo_'+value+'_'+id).addClass('acx_csma_logo_active');
	jQuery('#acx_show_logo_'+value+'_'+id).fadeIn();
}

//form submit
function acx_csma_save_settings(acx_csma_selectbox_id)
{
	selectAll(acx_csma_selectbox_id,true);
	jQuery('#acx_csma_form').submit();
}
//validation of colors
function acx_csma_validate(acx_csma_validate_color)
{
	var acx_csma_validate_format = /^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/;
	if(acx_csma_validate_format.test(acx_csma_validate_color) == true)
	{
	return true;
	}
	else
	{
	alert("You have entered an invalid color!"); 
	return false;
	}
}

// script for tab 
function acx_csma_show_div(tab)  
{
	setCookie("acx_csma_cookie",tab);
	jQuery(".acx_csma_tab").removeClass("acx_csma_tab_active");
	jQuery(".acx_csma_tab_block").fadeOut();

	jQuery("#acx_csma_tab_"+tab).addClass("acx_csma_tab_active");
	jQuery("#acx_csma_tab_block_"+tab).fadeIn();
}
	
//add items to list box
function acx_csma_addNewItem(listBox,txtvalue) 
{
	var acx_csma_textbox_value = jQuery('#acx_csma_txt_ip').val();
	   
	var ipformat = /^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/;  //ipv4 format
	if(acx_csma_textbox_value.match(ipformat))
	{
		for(var x=0;x<listBox.options.length;x++)
		{
			if(listBox.options[x].value==acx_csma_textbox_value || listBox.options[x].text==acx_csma_textbox_value)
				{
					alert("IP is already Added!"); 
					return false;  
				}
		}
		jQuery('#acx_csma_ip_list1').append('<option selected value='+acx_csma_textbox_value+'>'+acx_csma_textbox_value+'</option>');
	}
	else
	{
		alert("You have entered an invalid IP address!"); 
		return false;  
	}
}
// remove items from listbox
function selectAll(selectBox,selectAll) { 
    // have we been passed an ID 
    if (typeof selectBox == "string") { 
        selectBox = document.getElementById(selectBox);
    } 
    // is the select box a multiple select box? 
    if (selectBox.type == "select-multiple") { 
        for (var i = 0; i < selectBox.options.length; i++) { 
             selectBox.options[i].selected = selectAll; 
        } 
    }
}
function acx_csma_removeItem(acx_csma_selectbox) 
{
	var i;
	for(i=acx_csma_selectbox.options.length-1;i>=0;i--)
	{
		if(acx_csma_selectbox.options[i].selected)
		acx_csma_selectbox.remove(i);
	}
	selectAll(acx_csma_selectbox,true);
}

// add date picker
jQuery('#datetimepicker').datetimepicker({
dayOfWeekStart : 1,
lang:'en',
minDate:"<?php $format = "Y/m/d"; echo date_i18n($format, (current_time('timestamp'))); ?>",
defaultTime: "<?php $format = "H:i"; echo date_i18n($format, current_time('timestamp')); ?>",
defaultDate: "<?php $format = "Y/m/d"; echo date_i18n($format, (current_time('timestamp'))); ?>",
allowBlank: false,
});
// show template div
function acx_csma_rdbtn_show_div(temp)
{
	setCookie("acx_csma_temp_cookie",temp);
	jQuery('.acx_csma_template_option_holder').removeClass('acx_csma_temp_active');
	jQuery('.acx_csma_template_option_holder').fadeOut();

	jQuery('#acx_csma_template_'+temp).addClass('acx_csma_temp_active');
	jQuery('#acx_csma_template_'+temp).fadeIn(); 
	
}
function acx_csmap_easy_qa_toggle(id)
{	var acx_csma_toggle_common = ".acx_csma_toggle";
	var acx_csma_toggle_id = ".acx_csma_toggle_"+id;
	var acx_csmap_q_and_a_common = ".acx_csmap_q_and_a_common";
	var acx_csmap_q_and_a_id = ".acx_csmap_q_and_a_"+id;
	//-----------------------------------------------------------
	if(jQuery(acx_csma_toggle_id).hasClass('minus'))
	{
		jQuery(acx_csma_toggle_id).removeClass('minus');
		jQuery(acx_csmap_q_and_a_id).removeClass('acx_open');
		jQuery(acx_csma_toggle_id).addClass('plus');
	} 
	else if(jQuery(acx_csma_toggle_id).hasClass('plus'))
	{
		jQuery(acx_csma_toggle_id).addClass('minus');
		jQuery(acx_csma_toggle_id).removeClass('plus');
		jQuery(acx_csmap_q_and_a_id).addClass('acx_open');
	}
} 
function acx_csma_restore_default(img_id,default_value,text_id,set_bg)
{
	
	if(set_bg!="")
	{
	var text_id_j="#"+text_id;
	jQuery(text_id_j).css('background',default_value);
	}
	if(img_id!="")
	{
	var acx_csma_bg_img_id=document.getElementById(img_id);
	acx_csma_bg_img_id.src = default_value; 
	}
	document.getElementById(text_id).value = default_value;
} 
jQuery(document).ready(function() 
{
	var acx_csma_cookie = getCookie("acx_csma_cookie");		
	acx_csma_show_div(acx_csma_cookie);
	var acx_csma_temp_cookie = getCookie("acx_csma_temp_cookie");	
	acx_csma_rdbtn_show_div(acx_csma_temp_cookie);
	<?php 
	foreach($acx_csma_appearence_array as $key =>$value)
		{ 
		if(array_key_exists('acx_csma_logo_choice',$acx_csma_appearence_array[$key]))
		{
			$acx_csma_logo_choice = $value['acx_csma_logo_choice'];
			if($acx_csma_logo_choice == "") { $acx_csma_logo_choice = "image"; }}else{
			$acx_csma_logo_choice = "image"; 
			}		?>
			acx_csma_rdbtn_show_logo('<?php echo $acx_csma_logo_choice; ?>','<?php echo $key; ?>');
<?php 	}	?>
});
function acx_csmap_easy_qa_expandall()
{<?php for ($i = 1; $i <= $acx_csmap_qa_id; $i++) { ?>
acx_csmap_easy_qa_toggle(<?php echo $i; ?>);
<?php } ?>
}

<?php if($acx_csmap_open_all_boxes_default == "yes")
{ ?>
acx_csmap_easy_qa_expandall();
<?php }?>
<?php acx_csma_hook_function('acx_csma_hook_mainoptions_below_javascript'); ?>
</script>