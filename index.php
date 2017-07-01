<?php
error_reporting(0);
function is_firefox() {
	$agent = '';
	// old php user agent can be found here
	if (!empty($HTTP_USER_AGENT))
		$agent = $HTTP_USER_AGENT;
	// newer versions of php do have useragent here.
	if (empty($agent) && !empty($_SERVER["HTTP_USER_AGENT"]))
		$agent = $_SERVER["HTTP_USER_AGENT"];
	if (!empty($agent) && preg_match("/firefox/si", $agent))
		return true;
	return false;
}

function is_windows() {
	$agent = '';
	// old php user agent can be found here
	if (!empty($HTTP_USER_AGENT))
		$agent = $HTTP_USER_AGENT;
	// newer versions of php do have useragent here.
	if (empty($agent) && !empty($_SERVER["HTTP_USER_AGENT"]))
		$agent = $_SERVER["HTTP_USER_AGENT"];
	if (!empty($agent) && preg_match("/windows/si", $agent))
		return true;
	return false;
}

## get current theme name

//$current_theme_url= $_GET['url_value'];
$current_theme = $_GET['theme'];
$theme_found = false;

## build theme data array

$theme_array = array (
array ("id" => "Flayz",
       "url" => "http://designingmedia.com/html/flayz/",
	   "preview" => "http://designingmedia.com/html/fbar/screen/flayz.png",
	   "type" => "HTML5",
	   "type_color" => "ec6334",
	   "ddn" => "http://themeforest.net/user/designingmedia/portfolio?ref=designingmedia"
	  ),
array ("id" => "Shopen",
       "url" => "http://designingmedia.com/html/shopen/",
	   "preview" => "http://designingmedia.com/html/fbar/screen/shopen.png",
	   "type" => "HTML5",
	   "type_color" => "ec6334",
	   "ddn" => "http://themeforest.net/item/shopen-creative-corporate-html5-website-template/6051483?ref=designingmedia"
	  ),
array ("id" => "Shopen-WP",
       "url" => "http://designingmedia.com/wordpress/shopen/",
	   "preview" => "http://designingmedia.com/html/fbar/screen/shopen-wordpress.png",
	   "type" => "WordPress",
	   "type_color" => "288aad",
	   "ddn" => "http://themeforest.net/item/shopen-responsive-woocommerce-wordpress-theme/6125337?ref=designingmedia"
	  ),
array ("id" => "Magfolio",
       "url" => "http://designingmedia.com/html/magfolio/",
	   "preview" => "http://designingmedia.com/html/fbar/screen/magfolio.png",
	   "type" => "HTML5",
	   "type_color" => "ec6334",
	   "ddn" => "http://themeforest.net/item/magfolio-responsive-magazine-blog-site-template/5869866?ref=designingmedia"
	  ),
array ("id" => "Magfolio-WP",
       "url" => "http://designingmedia.com/wordpress/magfolio/",
	   "preview" => "http://designingmedia.com/html/fbar/screen/magfolio-wordpress.png",
	   "type" => "WordPress",
	   "type_color" => "288aad",
	   "ddn" => "http://themeforest.net/item/magfolio-wp-woocommerce-portfolio-blog-theme/5938719?ref=designingmedia"
	  ),
array ("id" => "Bistro",
       "url" => "http://designingmedia.com/html/bistro/",
	   "preview" => "http://designingmedia.com/html/fbar/screen/bistro.png",
	   "type" => "HTML5",
	   "type_color" => "ec6334",
	   "ddn" => "http://themeforest.net/item/bistro-store-responsive-ecommerce-template/5020751?ref=designingmedia"
	  ),
array ("id" => "Bistro-WP",
       "url" => "http://www.titleto.com/demo/bistro/wp/",
	   "preview" => "http://designingmedia.com/html/fbar/screen/bistro-wordpress.png",
	   "type" => "WordPress",
	   "type_color" => "288aad",
	   "ddn" => "http://themeforest.net/item/bistro-store-ecommerce-wordpress-theme-/5534797?ref=designingmedia"
	  ),
array ("id" => "Aplus",
       "url" => "http://designingmedia.com/html/aplus/",
	   "preview" => "http://designingmedia.com/html/fbar/screen/aplus.png",
	   "type" => "HTML5",
	   "type_color" => "ec6334",
	   "ddn" => "http://themeforest.net/item/aplus-multi-purpose-html5-website-template/5157081?ref=designingmedia"
	  ),
array ("id" => "Aplus-Joomla",
       "url" => "http://demo.shinetheme.com/aplus/",
	   "preview" => "http://designingmedia.com/html/fbar/screen/aplus-joomla.png",
	   "type" => "Joomla",
	   "type_color" => "f2b600",
	   "ddn" => "http://themeforest.net/item/aplus-responsive-multipurpose-joomla-template/6118332?ref=designingmedia"
	  ),
array ("id" => "FSwit",
       "url" => "http://designingmedia.com/html/fswit/",
	   "preview" => "http://designingmedia.com/html/fbar/screen/fswit.png",
	   "type" => "jQuery",
	   "type_color" => "0f1c2e",
	   "ddn" => "http://codecanyon.net/item/fswit-jquery-style-switcher/5069105?ref=designingmedia"
	  ),
);

if (!$redirect) :
## get current theme data
foreach ($theme_array as $i => $theme) :

	if ($theme['id'] == $current_theme) :
	
		$current_theme_name = ucfirst($theme['id']);
		$current_theme_url = $theme['url'];
		$current_theme_purchase_url = $theme['ddn'];
		
		$theme_found = true;
	
	endif;
endforeach;

if ($theme_found == false) :
$current_theme_name = $theme_array[0]['id'];
	$current_theme_url = $theme_array[0]['url'];
	$current_theme_purchase_url = $theme_array[0]['ddn'];
endif;
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Designing Media Works | Item : <?php if ($theme_found == false) : echo $current_theme_name; else: echo $current_theme_name; endif; ?></title>

<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

<!-- CSS Style -->
<link rel="stylesheet" href="style.css"> 
 
<!-- Favicons -->
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

<!-- Used Fonts -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700" rel="stylesheet" type="text/css">

<!-- JavaScript -->
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>

<script >
	var theme_list_open=false;
		$(document).ready(function(){function e(){var e=$("#switcher")
		.height();$("#iframe")
		.attr("height",
		$(window).height()-e+"px")}
		IS_IPAD=navigator.userAgent.match(/iPad/i)!=null;
		$(window).resize(function(){e()}).resize();
			$("#theme_select").click(function(){if(theme_list_open==true){
			$(".center ul li ul").hide();theme_list_open=false}else{
			$(".center ul li ul").show();theme_list_open=true}return false});
			$("#theme_list ul li a").click(function(){var e=$(this).attr("rel").split(",");
			$("li.purchase a").attr("href",e[1]);
			$("li.remove_frame a").attr("href",e[0]);
			$("#iframe").attr("src",e[0]);
			window.location.href = "?theme="+e[2]+""
			$("li.close a").attr("src",e[0]);
			$("#theme_list a#theme_select").text($(this).text());
			$(".center ul li ul").hide();theme_list_open=false;return false});
			$("#header-bar").hide();clicked="desktop";var t={desktop:"100%",tabletlandscape:1040,tabletportrait:788,mobilelandscape:500,mobileportrait:340,placebo:0};jQuery(".responsive a").on("click",function(){var e=jQuery(this);for(device in t){console.log(device);console.log(t[device]);if(e.hasClass(device)){clicked=device;jQuery("#iframe").width(t[device]);if(clicked==device){jQuery(".responsive a").removeClass("active");e.addClass("active")}}}return false});if(IS_IPAD){
			$("#iframe").css("padding-bottom","60px")
		}}
	)
</script>

<?php 

?>
</head>

<body>

    <div id="switcher">
		<div class="center">
            <div class="logo">
                <a href="http://designingmedia.com" target="_blank" title="Designing Media Works"><img src="images/logo.png" alt="Designing Media Themes" /></a>
            </div>
            				
                <ul>
                    <li id="theme_list"><a id="theme_select" href="#">
					<?php 
						if ($theme_found == false) : echo "Select a theme..."; else: echo $current_theme_name; endif; ?></a>
				<ul>
				<?php ?>
                   <?php
                    foreach ($theme_array as $i => $theme) :
                    echo '<li class="button_a">
					<a href="#" rel="' . $theme['url'] . ',' . $theme['ddn'] . ','.$theme['id'].'">' .
                       $_SESSION['currentthemename']= ucfirst($theme['id']) .' <span style="background:#'.$theme['type_color'].'">'.$theme['type'].'</span></a>';
                        if(isset($theme['preview'])){
                        echo '<img alt="" class="preview" src="';
                        if(strpos($theme['preview'], 'http://') === false){
                        echo 'product_previews/'.$theme['preview'];
                        }
                        else echo $theme['preview'];
                        echo '">';
						$_SESSION['currentthemename'] =$theme['url'];
						$current_theme=$_SESSION['currentthemename'];
						}
						echo '</li>';
						endforeach;
                    ?>
                </ul>
                    </li>	
                </ul>
                <div class="responsive">
                    <a href="#" class="desktop active" title="View Desktop Version"></a> 
                    <a href="#" class="tabletlandscape" title="View Tablet Landscape (1024x768)"></a> 
                    <a href="#" class="tabletportrait" title="View Tablet Portrait (768x1024)"></a> 
                    <a href="#" class="mobilelandscape" title="View Mobile Landscape (480x320)"></a>
                    <a href="#" class="mobileportrait" title="View Mobile Portrait (320x480)"></a>
                </div>
                
                <div class="share">
                    <ul>
                        <li><a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo $current_theme_purchase_url; ?>" data-dnt="true">Tweet</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></li>
                        <li><iframe src="//www.facebook.com/plugins/like.php?href=<?php echo $current_theme_purchase_url; ?>&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=false&amp;font=arial&amp;colorscheme=light&amp;action=like&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;" allowTransparency="true"></iframe></li>
                        <li><div class="g-plusone" data-size="medium"></div></li>
                    </ul>
                </div>
                
                <ul class="links">
                    <li class="purchase" rel="<?php echo $current_theme_purchase_url; ?>">
                    	<a href="<?php echo $current_theme_purchase_url; ?>"><img src="images/purchase.png" alt="Web Design Tunes Themes" /> Purchase</a>
                    </li>		
                    <li class="close" rel="<?php echo $current_theme_url; ?>">
                    	<a href="<?php echo $current_theme_url; ?>"><img src="images/cross.png" alt="Web Design Tunes Themes" /> Close</a>
                    </li>		
                </ul>
        </div>
    </div>
    <iframe id="iframe" src="<?php echo $current_theme_url; ?>" frameborder="0" width="100%"></iframe>

    <!-- Place this tag after the last +1 button tag. -->
    <script type="text/javascript">
      (function() {
        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
        po.src = 'https://apis.google.com/js/plusone.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
      })();
    </script>

</body>
</html>
<?php
endif;
?>



