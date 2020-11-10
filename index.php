<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>LIGHTS</title>
    <!--jQuery and jQuery UI JS and CSS-->
    <script src="https://code.jquery.com/jquery-2.2.3.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/black-tie/jquery-ui.css" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="includes/style.css" />
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <!--Better touch screen functionality for p hone-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
    <!-- custom JS -->
	<script src="html5kellycolorpicker.js"></script>
    <link href="common.css" rel="stylesheet">
</head>

<?php
session_start();





$czerwony = $_SESSION['czerwony'];
$zielony = $_SESSION['zielony'];
$niebieski = $_SESSION['niebieski'];


?>




<body>
<center>

    <div class="container" id="content">
	
        <div class="row">
            <div class="col-xs-8">
                <div class="col-xs-12">
					<div class="col-xs-7">
					
                        <div class="row noline">
						
                            <div class="col-xs-4">
                                <div id="red"></div><span id="redNum">1</span> </div>
                            <div class="col-xs-4">
                                <div id="green"></div><span id="greenNum">1</span> </div>
                            <div class="col-xs-4">
                                <div id="blue"></div><span id="blueNum">1</span> </div>
                        </div>
						
                        <div id="swatch" class="ui-widget-content ui-corner-all"></div>
						<button id="submitColor">Zmien kolor</button>

                        <br/>
                    </div>
					
                    <div class="col-xs-5">
                        <button class="defaultColors" data-color="white" id="whiteDef"></button>
                        <button class="defaultColors" data-color="black" id="blackDef"></button>
                        <button class="defaultColors" data-color="red" id="redDef"></button>
                        <button class="defaultColors" data-color="green" id="greenDef"></button>
                        <button class="defaultColors" data-color="blue" id="blueDef"></button>
                        <button class="defaultColors" data-color="yellow" id="yellowDef"></button>                                               
                    </div>



                    <!--Code currently not working - enhancement for the future-->
                </div>
            </div>
                        <span id="presets">Custom Color:</span>
                        <br/>

						<form action="/action_page.php" method="post">
						<input class="defaultColors" style=".defaultColors{height:85px; width: 85px}" type="color" name="favcolor" value="#ff0000" onchange="readRGB(this.value)">
						</form>
					<br/>

			
			
<div id="test">


Główny zasilacz jest:
<br>
	<?php
session_start();





$czerwony = $_SESSION['czerwony'];
$zielony = $_SESSION['zielony'];
$niebieski = $_SESSION['niebieski'];
$switch1 = $_SESSION['switch1'];
$switch = $_SESSION['switch'];




if ( $switch == 1 ) {
	
	echo"ON";
						if (isset($_POST['button3'])) 
						{ 
							$_SESSION['switch'] = 0;
							$output1 = exec('python3 relay.py ' . 2 . ' ' . 1 . ' 2>&1');
							echo $output1 . '<br />'; 
								

						}?> 					
						<form action="" method="post">
							<button id="switchOff" type="submit" onclick = "refreshTest"  name="button3"><img src="https://i.pinimg.com/originals/6c/63/28/6c63287f5f575632996b62d4e73f0b18.png" width="85" height="80" border="0" alt="Pi-Hole"></button>
						</form> 
						<?php
	
	
}else if ( $switch == 0 ) 
{
	
	echo "OFF";
						if (isset($_POST['button2'])) 
						{ 
							$_SESSION['switch'] = 1;
							$output1 = exec('python3 relay.py ' . 2 . ' ' . 0 . ' 2>&1');
							echo $output1 . '<br />'; 
						}?>
						<form action="" method="post">
							<button id="switchON" type="submit" onclick = "refreshTest" name="button2"><img src="https://pngimage.net/wp-content/uploads/2018/05/button-on-off-png-6.png" width="85" height="80" border="0" alt="Pi-Hole"></button>		
						</form>
<?php
}
if ( $switch1 == 1 ) {
	
	echo"ON";
						if (isset($_POST['button4'])) 
						{ 
							$_SESSION['switch1'] = 0;
							$output1 = exec('python3 relay.py ' . 0 . ' ' . 1 . ' 2>&1');
							echo $output1 . '<br />'; 
						}?> 					
						<form action="" method="post">
							<button id="switchOff" type="submit" onclick = "refreshTest" name="button4"><img src="https://i.pinimg.com/originals/6c/63/28/6c63287f5f575632996b62d4e73f0b18.png" width="85" height="80" border="0" alt="Pi-Hole"></button>
						</form> 
						<?php
	
	
}else if ( $switch1 == 0 ) 
{
	
	echo "OFF";
						if (isset($_POST['button5'])) 
						{ 
							$_SESSION['switch1'] = 1;
							$output1 = exec('python3 relay.py ' . 0 . ' ' . 0 . ' 2>&1');
							echo $output1 . '<br />'; 
							#$contents4 = file_get_contents($url4); 
						}?>
						<form action="" method="post">
							<button id="switchON" type="submit" onclick = "refreshTest" name="button5"><img src="https://pngimage.net/wp-content/uploads/2018/05/button-on-off-png-6.png" width="85" height="80" border="0" alt="Pi-Hole"></button>		
						</form>
						<?php
}?>	




		


		</div>
	</div>	
</div>
	
							
	

	
	
	

<script>
var auto_refresh = setInterval(
function () {
    $('#test').load(' #test');
}, 500);




</script>

<script>


	function readRGB(color){
	if (color.length == 0) {
		document.getElementById("txtHint").innerHTML = "";
		return;
	}
	else {
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 400) {
				document.getElementById("txtHint").innerHTML = this.responseText;
			}
		};
		temp = encodeURIComponent(color);
		xmlhttp.open("GET", "action_page.php?q=" + temp, true);
		xmlhttp.send();
		}
	}
</script>
<script>

/*
	Author: Nazmus Nasir
	Website: https://www.EasyProgramming.net
*/



$(document).ready(function () {
    $(function() {
        function hexFromRGB(r, g, b) {
          var hex = [
            r.toString( 16 ),
            g.toString( 16 ),
            b.toString( 16 )
          ];
          $.each( hex, function( nr, val ) {
            if ( val.length === 1 ) {
              hex[ nr ] = "0" + val;
            }
          });
          return hex.join( "" ).toUpperCase();
        }
        function refreshSwatch() {
          var red = $( "#red" ).slider( "value" ),
            green = $( "#green" ).slider( "value" ),
            blue = $( "#blue" ).slider( "value" ),
            hex = hexFromRGB( red, green, blue );
          $( "#swatch" ).css( "background-color", "#" + hex );
            $("#redNum").text(red);
            $("#greenNum").text(green);
            $("#blueNum").text(blue);
        }

        $( "#red, #green, #blue" ).slider({
          orientation: "vertical",
          range: "min",
          max: 255,
          value: 255,
          slide: refreshSwatch,
          change: refreshSwatch
        });

        $( "#red" ).slider( "value",<?php echo"$czerwony" ?> );
        $( "#green" ).slider( "value", <?php echo"$zielony" ?> );
        $( "#blue" ).slider( "value", <?php echo"$niebieski" ?> );
  });

    $("#submitColor").on("click",function(){
        var param = {
            "red" : $("#redNum").text(),
            "green" : $("#greenNum").text(),
            "blue" : $("#blueNum").text()
        };		
		
        $.ajax({
            url: "rgb.php",
            method: "GET",
            data: param,
            success: function(data){
                console.log(data);
            }
        });
    });
    
    // default color breakdown - can add more
    $(".defaultColors").on("click",function(){
        var color = $(this).data("color");
        switch(color){
            case "red":
                $("#redNum").text(255);
                $("#greenNum").text(0);
                $("#blueNum").text(0);
                $( "#red" ).slider( "value", 255 );
                $( "#green" ).slider( "value", 0 );
                $( "#blue" ).slider( "value", 0 );
            break;
            case "blue":
                $("#redNum").text(0);
                $("#greenNum").text(0);
                $("#blueNum").text(255);
                $( "#red" ).slider( "value", 0 );
                $( "#green" ).slider( "value", 0 );
                $( "#blue" ).slider( "value", 255 );
            break;
            case "green":
                $("#redNum").text(0);
                $("#greenNum").text(255);
                $("#blueNum").text(0);
                $( "#red" ).slider( "value", 0 );
                $( "#green" ).slider( "value", 255 );
                $( "#blue" ).slider( "value", 0 );
            break;
            case "yellow":
                $("#redNum").text(255);
                $("#greenNum").text(255);
                $("#blueNum").text(0);
                $( "#red" ).slider( "value", 255 );
                $( "#green" ).slider( "value", 255 );
                $( "#blue" ).slider( "value", 0 );
            break;
            case "orange":
                $("#redNum").text(255);
                $("#greenNum").text(165);
                $("#blueNum").text(0);
                $( "#red" ).slider( "value", 255 );
                $( "#green" ).slider( "value", 165 );
                $( "#blue" ).slider( "value", 0 );
            break;
            case "cyan":
                $("#redNum").text(0);
                $("#greenNum").text(255);
                $("#blueNum").text(255);
                $( "#red" ).slider( "value", 0 );
                $( "#green" ).slider( "value", 255 );
                $( "#blue" ).slider( "value", 255 );
            break;
            case "yellowgreen":
                $("#redNum").text(154);
                $("#greenNum").text(205);
                $("#blueNum").text(50);
                $( "#red" ).slider( "value", 154 );
                $( "#green" ).slider( "value", 205 );
                $( "#blue" ).slider( "value", 50 );
            break;
            case "magenta":
                $("#redNum").text(255);
                $("#greenNum").text(0);
                $("#blueNum").text(255);
                $( "#red" ).slider( "value", 255 );
                $( "#green" ).slider( "value", 0 );
                $( "#blue" ).slider( "value", 255 );
            break;
            case "white":
                $("#redNum").text(255);
                $("#greenNum").text(255);
                $("#blueNum").text(255);
                $( "#red" ).slider( "value", 255 );
                $( "#green" ).slider( "value", 255 );
                $( "#blue" ).slider( "value", 255 );
            break;
            case "black":
                $("#redNum").text(0);
                $("#greenNum").text(0);
                $("#blueNum").text(0);
                $( "#red" ).slider( "value", 0 );
                $( "#green" ).slider( "value", 0 );
                $( "#blue" ).slider( "value", 0 );
            break;
        }
        $("#submitColor").trigger("click");
    });
});




</script>

		
</body>

</html>
