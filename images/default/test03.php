<?php
$doc = new DOMDocument();
$doc->loadHTML("


<html><head>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script>
//------------------------------------------------------------------------------------>
	var circleCount = 1;
	var tileCount = 1;
	var divCount = 0;
//------------------------------------------------------------>
function works () {
	alert("here we go");
//	$('#tile0').load("buildMe0.html");

}/*
function screwFirefox () {
	var firefoxSucks = document.createElement('div');
	var tile = 'tile';
  	firefoxSucks.setAttribute('id','tile');
	firefoxSucks.className = 'tile';
	var winWidth = $(window).width();
 	firefoxSucks.style.width = winWidth;
 	firefoxSucks.style.height = "2500px";
//	startTile.style.background = "#FFFFFF";
  	firefoxSucks.style.border = "5px solid #000000";
// 	startTile.style.float = "right";
	document.body.appendChild(firefoxSucks);
}*/
//------------------------------------------------------------------------------ createCircle
function createCircle(){
	var newdiv = document.createElement('div');
	var divIdName = 'div'+divCount;
  	newdiv.setAttribute('id',divIdName);
	var equilateralCircle = Math.floor((Math.random() * 200));
	newdiv.style.width = equilateralCircle;
	newdiv.style.height = equilateralCircle;
	var winWidth = $(window).width();
	var winHeight = $(window).height() / 2;
 	newdiv.style.left = Math.floor(Math.random() * winWidth - 50 );
 	newdiv.style.top = Math.floor(Math.random() * winHeight - 50 );
 	newdiv.style.position = "fixed";
	newdiv.style.background = "#FFFFFF";
  	newdiv.style.border = "3px solid #000000";
 	newdiv.style.borderRadius = "50%";
 	newdiv.style.zIndex = "-1";
	document.body.appendChild(newdiv);
    $('div#div'+divCount).
	animate({"width":"-=30px","height":"-=30px","marginLeft":"+=10px","marginTop":"+=10px"},'slow')
   .animate({"width": "+=30px","height": "+=30px","marginLeft":"-=10px","marginTop":"-=10px"},'slow')
   	divCount++;}
//-------------------------------------------------------------------------------------------- startPage Tile
function startTile(){
	var startTile = document.createElement('div');
	var tile = 'tile';
  	startTile.setAttribute('id','tile'+tileCount);
	startTile.className = 'tile';
	var winWidth = $(window).width();
 	startTile.style.width = winWidth;
 	startTile.style.height = "2500px";
//	startTile.style.background = "#FFFFFF";
//  	startTile.style.border = "5px solid #000000";
// 	startTile.style.float = "right";
	document.body.appendChild(startTile);
//	divCreate();
	applyJava();
	tileCount++;
}
//------------------------------------------------------------------ find XY of page Resize and Aggregate
function findXY () {
	var winWidth = $(window).width();
	var winHeight = $(window).height();
	console.log("winWidth = "+winWidth+"winHeight = "+winHeight);
	console.log($(document).height())
	console.log($(window).scrollTop())
		$(".tile").css("width",$(window).width() - 25);
	if  ($(window).scrollTop() > ($(document).height() - 1000)){
		startTile();
//		works();

//		$.getScript("tile0.js");
//		$.getScript("tile1.js");
//		$("#div0").load().appendChild($.getScript("tile0.js"););
//		$("#div0").load().appendChild($.getScript("tile1.js"););
//			$("#tile1").load("tile0.js");s
//			$("#tile1").load("tile1.js");
		};

}
//---------------------------------------------------------------------------------------------------------------------- time line
function execute(){
	var startFindXY = setInterval(findXY,100);
	var startBackgroundCircle = setInterval(createCircle,100);
	var killBackgroundCircle = setTimeout(endGenorate,14000);
function endGenorate(){
	clearTimeout(startBackgroundCircle);}}
//--------------------------------------------------------------------------------- divCreate
function divCreate(){
	var div = document.createElement('div');
	var newDivId = 'div'+divCount;
  	div.setAttribute('id',newDivId);
	div.className = "div";
	var tile0 = document.getElementById("#tile0");
	document.getElementById("tile0").appendChild(div);
   	divCount++;

}
//---------------------------------------------------------------------------------------------------------------------------------
function applyJava () {

	if ( tileCount == 1 ) {
	var tree = document.createElement('img');
	tree.setAttribute('src','trees0.png');
	tree.setAttribute('height', '600px');
	tree.setAttribute('width', '100%');
	tree.style.marginTop = "-50px";
	document.getElementById("tile1").appendChild(tree);

	var obj = document.createElement('object');
    obj.setAttribute('name', 'object0');
    obj.setAttribute('data', 'groupBoardAPI.html');
    obj.setAttribute('height', '900');
	obj.setAttribute('width', '1000');
	obj.style.overflow = "hidden";
	document.getElementById("tile1").appendChild(obj);
	
	var war = document.createElement('object');
    war.setAttribute('name', 'object1');
    war.setAttribute('data', 'warNewsUpdate.html');
    war.setAttribute('height', '1105');
//	war.setAttribute('width', '600');
	war.style.overflow = "hidden";
	war.style.width = "60%";
	war.style.float = "left";
	document.getElementById("tile1").appendChild(war);
	
	var defense = document.createElement('object');
    defense.setAttribute('name', 'object2');
    defense.setAttribute('data', 'defenseNews.html');
    defense.setAttribute('height', '1000');
	defense.style.overflow = "hidden";
	defense.style.width = "37%";
	defense.style.float = "right";
	document.getElementById("tile1").appendChild(defense);
	
	}	else if ( tileCount == 2) {
	
	var tree1 = document.createElement('img');
	tree1.setAttribute('src','trees1.png');
	tree1.setAttribute('height', '600px');
	tree1.setAttribute('width', '100%');
	tree1.style.marginTop = "100px";
	document.getElementById("tile2").appendChild(tree1);
	
	var cnbcNews = document.createElement('object');
    cnbcNews.setAttribute('name', 'object3');
    cnbcNews.setAttribute('data', 'cnbcNews.html');
	cnbcNews.setAttribute('width', '1000');
    cnbcNews.setAttribute('height', '1860');
	document.getElementById("tile2").appendChild(cnbcNews);
	
	}	else if ( tileCount == 3 ) {
	
	var tree2 = document.createElement('img');
	tree2.setAttribute('src','trees4.png');
	tree2.setAttribute('height', '600px');
	tree2.setAttribute('width', '100%');
	tree2.style.marginTop = "250px";
	document.getElementById("tile3").appendChild(tree2);
	
	var stockWidget = document.createElement('object');
    stockWidget.setAttribute('name', 'object4');
    stockWidget.setAttribute('data', 'stockWidget.html');
	stockWidget.setAttribute('width', '1110');
    stockWidget.setAttribute('height', '615');
	document.getElementById("tile3").appendChild(stockWidget);
	
	var marketUpdate = document.createElement('object');
    marketUpdate.setAttribute('name', 'object5');
    marketUpdate.setAttribute('data', 'marketUpdate.html');
	marketUpdate.setAttribute('width', '1260');
    marketUpdate.setAttribute('height', '1010');
	document.getElementById("tile3").appendChild(marketUpdate);
	
	}	else if ( tileCount == 4 ) {
	
	var marketRss = document.createElement('object');
    marketRss.setAttribute('name', 'object6');
    marketRss.setAttribute('data', 'marketRss.html');
	marketRss.setAttribute('width', '1100');
    marketRss.setAttribute('height', '610');
	document.getElementById("tile4").appendChild(marketRss);	
	
	var tree3 = document.createElement('img');
	tree3.setAttribute('src','trees5.png');
	tree3.setAttribute('height', '600px');
	tree3.setAttribute('width', '100%');
	document.getElementById("tile4").appendChild(tree3);
	
	}	else if ( tileCount > 4 ) {
		
	var endless = document.createElement('object');
    endless.setAttribute('name', 'object6');
    endless.setAttribute('data', 'endless.html');
	endless.setAttribute('width', '1350');
    endless.setAttribute('height', '2400');
	document.getElementById("tile"+tileCount).appendChild(endless);
	
		}
	
	}
//------------------------------------------------------------------------------------------------ window load
	window.onload= function () {
//		startTile();
		execute();
//		screwFirefox ();
//		divCreate();
//		applyJava();
		}//------------------------------------------------------ Social
$(document).ready(function(){
	var i = 0;
	$("#gmail").mouseover(function(){ $("#gmailDiv").css("display","block"); $("#gmail").css("height","70"); $("#gmail").css("width","70"); });
	$("#gmailDiv").mouseover(function(){ $("#gmailDiv").css("display","block"); i = 1; $("#gmail").css("height","70"); $("#gmail").css("width","70"); });
	$("#gmailDiv").mouseout(function(){ $("#gmailDiv").css("display","none"); i = 0; $("#gmail").css("height","60"); $("#gmail").css("width","60"); });
	$("#gmail").mouseout(function(){ if ( i == 0) { $("#gmailDiv").css("display","none"); $("#gmail").css("height","60"); $("#gmail").css("width","60"); }	});	
			});
$(document).ready(function(){
	var i = 0;
	$("#skype").mouseover(function(){ $("#skypeDiv").css("display","block"); $("#skype").css("height","70"); $("#skype").css("width","70"); });
	$("#skypeDiv").mouseover(function(){ $("#skypeDiv").css("display","block"); i = 1; $("#skype").css("height","70"); $("#skype").css("width","70"); });
	$("#skypeDiv").mouseout(function(){ $("#skypeDiv").css("display","none"); i = 0; $("#skype").css("height","60"); $("#skype").css("width","60"); });
	$("#skype").mouseout(function(){ if ( i == 0) { $("#skypeDiv").css("display","none"); $("#skype").css("height","60"); $("#skype").css("width","60"); }	});	
			});
$(document).ready(function(){
	var i = 0;
	$("#kik").mouseover(function(){ $("#kikDiv").css("display","block"); $("#kik").css("height","70"); $("#kik").css("width","70"); });
	$("#kikDiv").mouseover(function(){ $("#kikDiv").css("display","block"); i = 1; $("#kik").css("height","70"); $("#kik").css("width","70"); });
	$("#kikDiv").mouseout(function(){ $("#kikDiv").css("display","none"); i = 0; $("#kik").css("height","60"); $("#kik").css("width","60"); });
	$("#kik").mouseout(function(){ if ( i == 0) { $("#kikDiv").css("display","none"); $("#kik").css("height","60"); $("#kik").css("width","60"); }	});	
			});
$(document).ready(function(){
	$("#instagram").mouseover(function(){ $("#instagram").css("height","80"); $("#instagram").css("width","80"); });
	$("#instagram").mouseout(function(){ $("#instagram").css("height","60"); $("#instagram").css("width","60"); });
		});
$(document).ready(function(){
	$("#tumblr").mouseover(function(){ $("#tumblr").css("height","80"); $("#tumblr").css("width","80"); });
	$("#tumblr").mouseout(function(){ $("#tumblr").css("height","60"); $("#tumblr").css("width","60"); });
		});
$(document).ready(function(){
	$("#facebook").mouseover(function(){ $("#facebook").css("height","80"); $("#facebook").css("width","80"); });
	$("#facebook").mouseout(function(){ $("#facebook").css("height","60"); $("#facebook").css("width","60"); });
		});
$(document).ready(function(){
	$("#twitter").mouseover(function(){ $("#twitter").css("height","80"); $("#twitter").css("width","80"); });
	$("#twitter").mouseout(function(){ $("#twitter").css("height","60"); $("#twitter").css("width","60"); });
		});
$(document).ready(function(){
	$("#groupboardIco").mouseover(function(){ $("#groupboardIco").css("height","110"); $("#groupboardIco").css("width","115"); });
	$("#groupboardIco").mouseout(function(){ $("#groupboardIco").css("height","92"); $("#groupboardIco").css("width","99"); });
		});
$(document).ready(function(){
	$("#queekyIco").mouseover(function(){ $("#queekyIco").css("height","100"); $("#queekyIco").css("width","150"); });
	$("#queekyIco").mouseout(function(){ $("#queekyIco").css("height","76"); $("#queekyIco").css("width","132"); });
		});		
				</script><script>
//------------------------------------------------------------------------------------ Google Api

	function initialize() {
        var map_canvas = document.getElementById('map_canvas');
        var map_options = { center: new google.maps.LatLng(33.061262, -96.7366254), zoom: 9, mapTypeId: google.maps.MapTypeId.ROADMAP}
        var map = new google.maps.Map(map_canvas, map_options) }
      google.maps.event.addDomListener(window, 'load', initialize);</script>
<link rel="stylesheet" type="text/css" href="startCss.css">
</head><body>
<!----------------------------------------------------------------------------------------------------------------------BuildMePlease?-------->
		<div id="gmailDiv" style="z-index:1000;position:absolute;display:none;border:3px solid #000000;height:60px;width:300px;border-radius:60px;margin-top:230;margin-left:350px;background-color:#FFFFFF;">
	<p style="font-size:125%;text-align:center;">" Holman57@gmail.com "</p>
			</div>
		<div id="skypeDiv" style="z-index:1000;display:none;position:absolute;border:3px solid #000000;height:60px;width:200px;border-radius:60px;margin-top:280;margin-left:350px;background-color:#FFFFFF;">
	<p style="font-size:125%;text-align:center;">" bedlam000 "</p>
			</div>
		<div id="kikDiv" style="z-index:1000;display:none;position:absolute;border:3px solid #000000;height:60px;width:200px;border-radius:60px;margin-top:330;margin-left:350px;background-color:#FFFFFF;">
	<p style="font-size:125%;text-align:center;">" Bedlam00 "</p>
			</div>
	<div style="margin-top:230px;height:180px;width:60px;position:absolute;margin-left:300px;z-index:500;border:3px solid #000000;border-radius:20px;">
	<image id="gmail" src="gmailLogo.png" width="60" height="60">
	<image id="skype" src="skypeLogo.png" width="60" height="60">
	<image id="kik" src="kikLogo.png" width="60" height="60">
					</div>
	<div style="margin-top:665px;height:60px;width:280px;position:absolute;margin-left:-10px;z-index:9999;border:3px solid #000000;border-radius:20px;background-color:FFFFFF;">
	<image id="instagram" src="instagramLogo.png" width="60" height="60" onclick="location.href='http://www.instagram.com/bedlam00'">
	<image id="tumblr" src="tumblrLogo.png" width="60" height="60" onclick="location.href='http://holman57.tumblr.com'">
	<image id="facebook" src="facebookLogo.png" width="60" height="60" onclick="location.href='http://www.facebook.com/luke.holman.7528'">
	<image id="twitter" src="twitterLogo.png" width="60" height="60" onclick="location.href='http://www.twitter.com/luke_holman57'">
				</div>
<!----------------------------------------------------------------------->
	<div class="tree">					</div>
	<div class="Luke"><image src="Luke.png" width="320" height="300">				</div>
<!---------------------------------------------------------------------------------------------->
	<div class="content1" style="overflow:hidden;">
	<div class="blog click" id="blog"><p>Blog</p></div>
	<div class="project click" id="project"><p>Projects</p></div>
    <div class="profile click" id="profile"><p>Profile</p></div><p>
	<p style="text-align: right;"><p style="margin-top:-20px;">Hi! my name is <font size="6">Luke Holman</font></p>
	<p style="text-align:right; font-size:20;width:140px;margin-left:260px;">I like people so let's talk</p>
		<p style="text-align:left; font-size:20;">&emsp;&emsp;Email me ["  Holman57@gmail.com "]<br/>
	&emsp; I love technology, It's so exciting growing up in the time I was born. I spend most of my free time submerging my-self into the abyss that is the internet. I love to draw and create. I do a lot of freehand drawing on my tablet. If you ever want to draw with me let's get it hooked up.
	<image id="queekyIco" src="queekyLogo.png" width="132" height="76" style="float:right;" onclick="location.href='http://www.queeky.com'"><image id="groupboardIco" src="groupboard.png" width="99" height="92" style="float:right;" onclick="location.href='http://www.groupboard.com/demo'"><br /><br /></p><p style="width:80%;">
		&emsp;I've done web design, server/network installation, and anything geeky really. Worked for family, friends, associates, random people gained through word of mouth doing off ball under the table technical work. Repairs, installations, Coding, and over the phone consultations. I've been building a portfolio, Lately I've been hooked on web design.</p><image src="gmailLogo.png" width="100" height="100"><image src="gmailLogo.png" width="100" height="100"><image src="gmailLogo.png" width="100" height="100">
			<p style="width:50%;">I'm going to school for computer science and I'd love to correspond with anyone interested in computer science. I've been formally trained in the Adobe Creative Suite. Photoshop, Illustrator, InDesign, Dreamweaver, balh, I love graphic design. I've been studying JavaScript, JQuery, PHP, mySQL, JSON, CSS, HTML5, XML, blah I love to build applications. My interests are ever changing as with the tide of change itself.</p><image src="gmailLogo.png" width="100" height="100"><image src="gmailLogo.png" width="100" height="100"><image src="gmailLogo.png" width="100" height="100"><image src="gmailLogo.png" width="100" height="100"><image src="gmailLogo.png" width="100" height="100"><image src="gmailLogo.png" width="100" height="100"><image src="gmailLogo.png" width="100" height="100"><image src="gmailLogo.png" width="100" height="100"><image src="gmailLogo.png" width="100" height="100"><image src="gmailLogo.png" width="100" height="100"><image src="gmailLogo.png" width="100" height="100"><image src="gmailLogo.png" width="100" height="100">
									</div>
<!------------------------------------------------------------------------------------------------------------------>
<div class="right1">
	<script type="text/javascript" >
	document.write('<script type="text/javascript" src="' + ('https:' == document.location.protocol ? 'https://' : 'http://') + 'feed.mikle.com/js/rssmikle.js"><\/script>');
		</script>
<!-- start feedwind code --><script type="text/javascript">document.write('<script type="text/javascript" src="' + ('https:' == document.location.protocol ? 'https://' : 'http://') + 'feed.mikle.com/js/rssmikle.js"><\/script>');</script><script type="text/javascript">(function() {var params = {rssmikle_url: "http://holman57.tumblr.com/rss",rssmikle_frame_width: "450",rssmikle_frame_height: "850",rssmikle_target: "_blank",rssmikle_font: "Arial, Helvetica, sans-serif",rssmikle_font_size: "12",rssmikle_border: "off",responsive: "off",rssmikle_css_url: "",text_align: "left",text_align2: "left",corner: "on",autoscroll: "on",scrolldirection: "up",scrollstep: "3",mcspeed: "20",sort: "Off",rssmikle_title: "on",rssmikle_title_sentence: "Holman57@tumblr",rssmikle_title_link: "",rssmikle_title_bgcolor: "#000000",rssmikle_title_color: "#FFFFFF",rssmikle_title_bgimage: "",rssmikle_item_bgcolor: "#FFFFFF",rssmikle_item_bgimage: "",rssmikle_item_title_length: "55",rssmikle_item_title_color: "#000205",rssmikle_item_border_bottom: "on",rssmikle_item_description: "on",rssmikle_item_description_length: "150",rssmikle_item_description_color: "#000000",rssmikle_item_date: "gl1",rssmikle_timezone: "Etc/GMT",datetime_format: "%b %e, %Y %l:%M:%S %p",rssmikle_item_description_tag: "on_flexcroll",rssmikle_item_description_image_scaling: "off",article_num: "15",rssmikle_item_podcast: "off"};feedwind_show_widget_iframe(params);})();</script>
						</div>
<!---------------------------------------------------------------------------------------->
	<div class="right0">
		<image src="cloudIco.png" width="80" height="80" id="warpCloud" style="left:-100;">
        <button type="button" id="heyCloud" name="heyCloud" value="heyCloud" class="heyCloud">Talk to Cloud</button>
		<div style="background-color:#FFFFFF;width:100px;height:100px;border-radius:50%;margin-top:-60px;margin-left:-20px;"></div>
		<div style="background-color:#FFFFFF;width:150px;height:150px;border-radius:50%;margin-top:-160px;margin-left:20px;"></div>
		<div style="background-color:#FFFFFF;width:70px;height:70px;border-radius:50%;margin-top:-140px;margin-left:-10px;"></div>
								</div>
<!------------------------------------------------------------------------------------------------------------>
		<div class="left1">
		<a class="twitter-timeline" href="https://twitter.com/luke_holman57" data-widget-id="472506061211959297">Tweets by @luke_holman57</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
						</div>
<!-------------------------------------------->
			<div class="right2">
   <image src="skylineDallas.png" id="skyline"><sup>I'm From</sup>North Dallas
   <p><sub><b>Age:</b></sub> 24 years old<br /> Computer Science <sub><b>:Major</b></sub><br>
	<sub><b>School:</b></sub> <a href="http://www.collin.edu">Collin College</a><br>
	 Graphic and Web Design <sub><b>:Strengths</b></sub><br />
	<sub><b>Interests:</b></sub> Science, Technology, and Art<br>
	&emsp;<sub><b>Seeking:</b></sub> Internship and Contract Jobs</p>
	<div id="map_canvas" style="height:80%;"></div><p>
							</div>
<!------------------------------------------------------------------------------------>
	<div class="left2">
		<iframe src="http://www.intagme.com/in/?u=YmVkbGFtMDB8c2x8MzAwfDJ8M3x8eWVzfDV8dW5kZWZpbmVkfHllcw==" allowTransparency="true" 		frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:315px; height: 315px" ></iframe>			</div>
<!----------------------------------------------------------------------------------------------->
	<div class="left7" style="float:left;margin-top:10px;width:100%;"><script src="http://www.reddit.com/.embed?limit=7"  type="text/javascript"></script>	</div>
<!---------------------------------------------------->
   <div class="left3" style="float:right;">
    <script type="text/javascript">document.write('<script type="text/javascript" src="' + ('https:' == document.location.protocol ? 'https://' : 'http://') + 'feed.mikle.com/js/rssmikle.js"><\/script>');</script><script type="text/javascript">(function() {var params = {rssmikle_url: "http://computerluke.blogspot.com/feeds/posts/default?alt=rss",rssmikle_frame_width: "679",rssmikle_frame_height: "450",rssmikle_target: "_top",rssmikle_font: "Arial, Helvetica, sans-serif",rssmikle_font_size: "12",rssmikle_border: "on",responsive: "off",rssmikle_css_url: "",text_align: "left",text_align2: "left",corner: "on",autoscroll: "on",scrolldirection: "up",scrollstep: "10",mcspeed: "20",sort: "Off",rssmikle_title: "on",rssmikle_title_sentence: "computerluke@blogspot",rssmikle_title_link: "",rssmikle_title_bgcolor: "#FFFFFF",rssmikle_title_color: "#000000",rssmikle_title_bgimage: "",rssmikle_item_bgcolor: "#FFFFFF",rssmikle_item_bgimage: "",rssmikle_item_title_length: "55",rssmikle_item_title_color: "#000000",rssmikle_item_border_bottom: "on",rssmikle_item_description: "on",rssmikle_item_description_length: "150",rssmikle_item_description_color: "#666666",rssmikle_item_date: "gl1",rssmikle_timezone: "Etc/GMT",datetime_format: "%b %e, %Y %l:%M:%S %p",rssmikle_item_description_tag: "on_flexcroll",rssmikle_item_description_image_scaling: "on",article_num: "15",rssmikle_item_podcast: "off"};feedwind_show_widget_iframe(params);})();</script>
					</div>
<!---------------------------------------------------------------->
	

	<div class="right3" style="padding:50px;">
	
		<div style="float:left;width:50%;">
	<script type="text/javascript">document.write('<script type="text/javascript" src="' + ('https:' == document.location.protocol ? 'https://' : 'http://') + 'feed.mikle.com/js/rssmikle.js"><\/script>');</script><script type="text/javascript">(function() {var params = {rssmikle_url: "http://digg.com/tag/news.rss",rssmikle_frame_width: "100%",rssmikle_frame_height: "600",rssmikle_target: "_blank",rssmikle_font: "Arial, Helvetica, sans-serif",rssmikle_font_size: "20",rssmikle_border: "off",responsive: "off",rssmikle_css_url: "",text_align: "left",text_align2: "center",corner: "on",autoscroll: "on",scrolldirection: "down",scrollstep: "3",mcspeed: "20",sort: "Off",rssmikle_title: "on",rssmikle_title_sentence: "",rssmikle_title_link: "",rssmikle_title_bgcolor: "#000000",rssmikle_title_color: "#FFFFFF",rssmikle_title_bgimage: "",rssmikle_item_bgcolor: "#FFFFFF",rssmikle_item_bgimage: "",rssmikle_item_title_length: "55",rssmikle_item_title_color: "#000000",rssmikle_item_border_bottom: "on",rssmikle_item_description: "on",rssmikle_item_description_length: "150",rssmikle_item_description_color: "#000000",rssmikle_item_date: "gl1",rssmikle_timezone: "Etc/GMT",datetime_format: "%b %e, %Y %l:%M:%S %p",rssmikle_item_description_tag: "on_flexcroll",rssmikle_item_description_image_scaling: "off",article_num: "15",rssmikle_item_podcast: "off"};feedwind_show_widget_iframe(params);})();</script> </div>

			<!-- Top tumblr --><iframe style="margin:0;padding:0;float:right;" width="45%"  scrolling="no" FRAMEBORDER="0" height="550" src=" http://rebloggy.com/top/all/today/iframe   "></iframe><br />
					</div>
					
</body></html>






");
echo $doc->saveHTML();
?>