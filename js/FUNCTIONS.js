//	FUNCTIONS.js

var var_data = 0;
var numTiles = 0;

// echo "<script>(function(){setTableFocus(0);})();</script>";
function setTableFocus(count) {
    var flinkText = 't' + count;
    document.getElementById(flinkText).focus();
}

function doSomething() {
    var getBETA = document.createElement('div');
    getBETA.setAttribute('id', 'r' + numTiles);
    getBETA.className = "result";
    document.getElementById("t" + numTiles).appendChild(getBETA);
    document.getElementById("r" + numTiles).innerHTML = "numTiles: " + numTiles;
    $.ajax({
        url: 'BETA.php',
        data: {PHP_numTiles: numTiles},
        data: {var_PHP_data: var_data},
        success: function (data) {
            var x = "#r" + ( numTiles - 2 );
            $(x).html(data);
        }
    });
    numTiles++;
    var_data--;
}

function generateTile() {
    var tile = document.createElement('div');
    tile.style.width = "96%";
    tile.setAttribute('id', 't' + numTiles);
    tile.className = "tile";
    tile.style.border = "7px solid #000000";
    document.getElementById("mCSB_1_container").appendChild(tile);
    doSomething();
}

function timeline() {
    // var set setInterval(func,int);
    // function dieSet ()
    // 		{
    // 			var die = clearInterval(set);
    // 		}
    var buildTiles = setInterval(generateTile, 500);
    var stopBuild = setTimeout(function () {
        endGen()
    }, 4600);

    function endGen() {
        clearTimeout(buildTiles);
    }
}

function myFunction() {
    var myFunc = document.createElement('p');
    myFunc.setAttribute('id', 'demo');
    myFunc.className = "demo";
    document.body.appendChild(myFunc);
    document.getElementById("demo").innerHTML = "Execute";
}

function checkRows() {
    $.ajax({
        // Count number of rows in DATA_PROBE
        url: 'GAMMA.php',
        data: {GAMMA_PHP_data: GAMMA_PROBE},
        success: function (data) {
            $("#UPSILON").html(data);
        }
    });
}

function getSize(myWidth, myHeight) {
    var myWidth = 0, myHeight = 0;
    if (typeof( window.innerWidth ) == 'number') {
        //Non-IE
        myWidth = window.innerWidth;
        myHeight = window.innerHeight;
    } else if (document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight )) {
        //IE 6+ in 'standards compliant mode'
        myWidth = document.documentElement.clientWidth;
        myHeight = document.documentElement.clientHeight;
    } else if (document.body && ( document.body.clientWidth || document.body.clientHeight )) {
        //IE 4 compatible
        myWidth = document.body.clientWidth;
        myHeight = document.body.clientHeight;
    }
    //	  window.alert( 'Width = ' + myWidth );
    //	  window.alert( 'Height = ' + myHeight );
}

function getSize() {
    var myWidth = 0, myHeight = 0;
    if (typeof( window.innerWidth ) == 'number') {
        //Non-IE
        myWidth = window.innerWidth;
        myHeight = window.innerHeight;
    } else if (document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight )) {
        //IE 6+ in 'standards compliant mode'
        myWidth = document.documentElement.clientWidth;
        myHeight = document.documentElement.clientHeight;
    } else if (document.body && ( document.body.clientWidth || document.body.clientHeight )) {
        //IE 4 compatible
        myWidth = document.body.clientWidth;
        myHeight = document.body.clientHeight;
    }
    window.alert('Width = ' + myWidth);
    window.alert('Height = ' + myHeight);
}

function hideMenu() {
    document.getElementById("MENU").style.display = "none";
}

function checkScreen() {
    var winWidth;
    var winHeight;
    getSize(winWidth, winHeight);
    if (winWidth > winHeight) {
        document.getElementById("t0").style.height = "20%";
    }
    if (winWidth < winHeight) {
        document.getElementById("t0").style.height = "10%";
    }
}
	