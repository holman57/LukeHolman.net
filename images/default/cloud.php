.<!doctype html><html><head><meta charset="utf-8">
<title>-Cloud-</title>
<link href="../Javascript/cloudCss.css" rel="stylesheet" type="text/css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
///-------__---_-Hello_how-are-you-?-
/////---___-------__--this-is-cloud---------_-----
	var winWidth = $(window).width();
	var winHeight = $(window).height();
	var interfaceWidth = $(window).width();
	var interfaceHeight = $(window).height();
	var centerWidth = winWidth/4;
	var centerHeight = winHeight/4;
//---------------------------------------------------- every step
function timeline() {//------------> Timer Logic Flaw ---------------->
	var startInterface = setInterval(findXY,100);
	var cloudFindAxis = setInterval(findCloudAxis,100);
	var startCloud = setInterval(createCloud,100);
	var killCloud = setTimeout(dieCloud,3000);
	function dieCloud (){
		var endCloud = clearInterval(startCloud)};
	var motionCloud = setInterval(animateCloud,1000);
}
//------------------------------------------------------------ interface
function generateInterface(){
	var divInterface = document.createElement('div');
	var interface = 'interface';
  	divInterface.setAttribute('id','interface');
	divInterface.className = "interface";
	var centerInterfaceWidth = interfaceWidth/2;
	var centerInterfaceHeight = interfaceHeight/2;
	divInterface.style.width = centerInterfaceWidth;
	divInterface.style.height = centerInterfaceHeight;
	var winWidth = $(window).width();
	var winHeight = $(window).height();
	var centerWidth = winWidth/2;
	var centerHeight = winHeight/2;
 	divInterface.style.left = centerWidth;
 	divInterface.style.top = centerHeight;
 	divInterface.style.position = "fixed";
//	divInterface.style.background = "#FFFFFF";
  	divInterface.style.border = "3px solid #000000";
 	divInterface.style.borderRadius = "50px";
 	divInterface.style.zIndex = "-1";
	document.body.appendChild(divInterface); 
}
//--------------------------------------------------------------------> work progress
function generateFillCloud(){
	var divFillCloud = document.createElement('div');
	var fillCloud = 'fillCloud';
  	divFillCloud.setAttribute('id','fillCloud');
	divFillCloud.className = "fillCloud";
	var centerInterfaceWidth = interfaceWidth/2;
	var centerInterfaceHeight = interfaceHeight/2;
	divFillCloud.style.width = centerInterfaceWidth;
	divFillCloud.style.height = centerInterfaceHeight;
	var winWidth = $(window).width();
	var winHeight = $(window).height();
	var centerWidth = winWidth/3;
	var centerHeight = winHeight/3;
 	divFillCloud.style.left = centerWidth;
 	divFillCloud.style.top = centerHeight;
 	divFillCloud.style.position = "fixed";
	divFillCloud.style.background = "#FFFFFF";
 	divFillCloud.style.marginTop = "3px";
	divFillCloud.style.marginLeft = "3px";
 // 	divFillCloud.style.border = "3px solid #000000";
 	divFillCloud.style.borderRadius = "50px";
 	divFillCloud.style.zIndex = "1000";
	document.body.appendChild(divFillCloud); 
}
//------------------------------------------------------ find XY --
function findXY(){
	var winWidth = $(document).width();
	var winHeight = $(document).height();
	var centerWidth = winWidth/4;
	var centerHeight = winHeight/4;
	document.getElementById('interface').style.left = centerWidth;
	document.getElementById('interface').style.top = centerHeight;
	document.getElementById('fillCloud').style.left = centerWidth;
	document.getElementById('fillCloud').style.top = centerHeight;	
	var interfaceWidth = $(document).width();
	var interfaceHeight = $(document).height();
	var centerInterfaceWidth = interfaceWidth/2;
	var centerInterfaceHeight = interfaceHeight/2;
	document.getElementById('interface').style.width = centerInterfaceWidth;
	document.getElementById('interface').style.height = centerInterfaceHeight;
	document.getElementById('fillCloud').style.width = centerInterfaceWidth;
	document.getElementById('fillCloud').style.height = centerInterfaceHeight;
}
//--------------------------------------------------------------- Cloud
function createCloud(){
	var newCloud = document.createElement('div');
	var divIdName = 'circle0';
  	newCloud.setAttribute('id',divIdName);
	newCloud.className = 'circle0';
	var equilateralCircle = Math.floor(100+(Math.random() * 100));
	newCloud.style.width = equilateralCircle;
	newCloud.style.height = equilateralCircle;
	var winWidth = $(window).width();
	var winHeight = $(window).height();
	var centerWidth = winWidth/4;
	var centerHeight = winHeight/4;
	newCloud.style.left = ( (centerWidth*2) * Math.random() + (centerHeight*.1) )-125;
 	newCloud.style.top = ( (centerHeight*2) * Math.random() + (centerWidth*.1) )-125;
 	newCloud.style.position = "absolute";
	newCloud.style.background = "#FFFFFF";
  	newCloud.style.border = "3px solid #000000";
 	newCloud.style.borderRadius = "50%";
 	newCloud.style.zIndex = "500";
	var insideInterface = document.getElementById('interface');
	$('#interface').append(newCloud); 
    $('div#circle0').animate({"width":"-=30px","height":"-=30px","marginLeft":"+=10px","marginTop":"+=10px"},'slow')
   					.animate({"width": "+=30px","height": "+=30px","marginLeft":"-=10px","marginTop":"-=10px"},'slow')
}
//----------------------------------------------- animate clouds continusly
function animateCloud() {
    $('div#circle0').animate({"width":"-=30px","height":"-=30px","marginLeft":"+=10px","marginTop":"+=10px"},'slow')
   					.animate({"width": "+=30px","height": "+=30px","marginLeft":"-=10px","marginTop":"-=10px"},'slow')
}
//---------------------------------------------------------------------- cloud find axis
function findCloudAxis() {
	var winWidth = $(document).width();
	var winHeight = $(document).height();
	var centerWidth = winWidth/4;
	var centerHeight = winHeight/4;
	var getInterface = document.getElementById('interface');
	var dragCloud = document.getElementById('circle0');
	dragCloud.style.left = ( (centerWidth*2) * Math.random() + (centerHeight*.1) )-125;
 	dragCloud.style.top = ( (centerHeight*2) * Math.random() + (centerWidth*.1) )-125;
	getInterface.appendChild(dragCloud);
	var equilateralCircle = Math.floor(100+(Math.random() * 100));
	newCloud.style.width = equilateralCircle;
	newCloud.style.height = equilateralCircle;
	document.getElementById('div#interfacecircle0').style.top = ( centerHeight) ;	
	var interfaceWidth = $(document).width();
	var interfaceHeight = $(document).height();
	var centerInterfaceWidth = interfaceWidth/2;
	var centerInterfaceHeight = interfaceHeight/2;
	document.getElementById('div#interfacecircle0').style.width = (centerInterfaceWidth);
	document.getElementById('div#interfacecircle0').style.height = (centerInterfaceHeight);
}
//-------------------------------------
function bringPhp() {
	$.ajax({url: "firstPage.php"}).done(function( html ) {
		$("#fillCloud").append(html);
	});
}
//--------------------------------------------------------------
function makeFrame () {
	var obj = document.createElement('object');
    obj.setAttribute('name', 'object0');
    obj.setAttribute('data', 'demoForm.php');
    obj.setAttribute('height', '100%');
	obj.setAttribute('width', '100%');
	obj.style.overflow = "hidden";
	document.getElementById("fillCloud").appendChild(obj);
}
//---------------------------------------------------- on page ready
	$(document).ready(function() { 
		generateInterface(); 
		timeline();
		generateFillCloud();
		makeFrame();
//		bringPhp();
	})
//--------------------------------------------------------------



</script>


</head>

<body>

</body>
</html>
