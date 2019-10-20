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
	
	var defense = document.createElement('object');
    defense.setAttribute('name', 'object7');
    defense.setAttribute('data', 'trend0.html');
    defense.setAttribute('height', '2300');
	defense.style.overflow = "hidden";
	defense.style.width = "100%";
	defense.style.float = "left";
	document.getElementById("tile1").appendChild(defense);
	
	}	else if ( tileCount == 2) {
	
	var tree = document.createElement('img');
	tree.setAttribute('src','earth0.png');
	tree.setAttribute('height', '600px');
	tree.setAttribute('width', '1600px');
	tree.style.marginTop = "-250px";
	tree.style.marginLeft = "-20px";
	document.getElementById("tile2").appendChild(tree);
	
	var defense = document.createElement('object');
    defense.setAttribute('name', 'object8');
    defense.setAttribute('data', 'trend1.html');
    defense.setAttribute('height', '2500');
	defense.style.overflow = "hidden";
	defense.style.width = "100%";
	defense.style.float = "left";
	document.getElementById("tile2").appendChild(defense);
	
	}	else if ( tileCount == 3) {
	
	var tree = document.createElement('img');
	tree.setAttribute('src','trees0.png');
	tree.setAttribute('height', '600px');
	tree.setAttribute('width', '100%');
	tree.style.marginTop = "-50px";
	document.getElementById("tile3").appendChild(tree);

	var obj = document.createElement('object');
    obj.setAttribute('name', 'object0');
    obj.setAttribute('data', 'groupBoardAPI.html');
    obj.setAttribute('height', '900');
	obj.setAttribute('width', '1000');
	obj.style.overflow = "hidden";
	document.getElementById("tile3").appendChild(obj);
	
	var war = document.createElement('object');
    war.setAttribute('name', 'object1');
    war.setAttribute('data', 'warNewsUpdate.html');
    war.setAttribute('height', '1105');
//	war.setAttribute('width', '600');
	war.style.overflow = "hidden";
	war.style.width = "60%";
	war.style.float = "left";
	document.getElementById("tile3").appendChild(war);
	
	var defense = document.createElement('object');
    defense.setAttribute('name', 'object2');
    defense.setAttribute('data', 'defenseNews.html');
    defense.setAttribute('height', '1000');
	defense.style.overflow = "hidden";
	defense.style.width = "37%";
	defense.style.float = "right";
	document.getElementById("tile3").appendChild(defense);
	
	}	else if ( tileCount == 4) {
	
	var tree1 = document.createElement('img');
	tree1.setAttribute('src','trees1.png');
	tree1.setAttribute('height', '600px');
	tree1.setAttribute('width', '100%');
	tree1.style.marginTop = "100px";
	document.getElementById("tile4").appendChild(tree1);
	
	var cnbcNews = document.createElement('object');
    cnbcNews.setAttribute('name', 'object3');
    cnbcNews.setAttribute('data', 'cnbcNews.html');
	cnbcNews.setAttribute('width', '1000');
    cnbcNews.setAttribute('height', '1860');
	document.getElementById("tile4").appendChild(cnbcNews);
	
	}	else if ( tileCount == 5 ) {
	
	var tree2 = document.createElement('img');
	tree2.setAttribute('src','trees4.png');
	tree2.setAttribute('height', '600px');
	tree2.setAttribute('width', '100%');
	tree2.style.marginTop = "250px";
	document.getElementById("tile5").appendChild(tree2);
	
	var stockWidget = document.createElement('object');
    stockWidget.setAttribute('name', 'object4');
    stockWidget.setAttribute('data', 'stockWidget.html');
	stockWidget.setAttribute('width', '1110');
    stockWidget.setAttribute('height', '615');
	document.getElementById("tile5").appendChild(stockWidget);
	
	var marketUpdate = document.createElement('object');
    marketUpdate.setAttribute('name', 'object5');
    marketUpdate.setAttribute('data', 'marketUpdate.html');
	marketUpdate.setAttribute('width', '1260');
    marketUpdate.setAttribute('height', '1010');
	document.getElementById("tile5").appendChild(marketUpdate);
	
	}	else if ( tileCount == 6 ) {
	
	var marketRss = document.createElement('object');
    marketRss.setAttribute('name', 'object6');
    marketRss.setAttribute('data', 'marketRss.html');
	marketRss.setAttribute('width', '1100');
    marketRss.setAttribute('height', '610');
	document.getElementById("tile6").appendChild(marketRss);	
	
	var tree3 = document.createElement('img');
	tree3.setAttribute('src','trees5.png');
	tree3.setAttribute('height', '600px');
	tree3.setAttribute('width', '100%');
	document.getElementById("tile6").appendChild(tree3);
	
	}	else if ( tileCount > 6 ) {
		
	var endless = document.createElement('object');
    endless.setAttribute('name', 'object6');
    endless.setAttribute('data', 'endless.html');
	endless.setAttribute('width', '1350');
    endless.setAttribute('height', '2400');
	document.getElementById("tile"+tileCount).appendChild(endless);
	
		}
	
	}
//------------------------ Button Click
	var DOM = function (id) { return document.getElementById(id); }
	function linkCloud (){window.location = 'cloud.php'}
//------------------------------------------------------------------------------------------------ window load
	window.onload= function () {
//		startTile();
		execute();
//		screwFirefox ();
//		divCreate();
//		applyJava();
	DOM("heyCloud").onclick=linkCloud;
	
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