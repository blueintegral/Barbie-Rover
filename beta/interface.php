<?php


$verz="1.0";
$comPort = "/dev/ttyUSB0"; /*change to correct com port */

 
/* print out the debugging stuff 
$fp2 = fopen($comport, "r");
$i = 0;
while($fp2){
$incoming[$i] = $fp2[$i];
$i++;
}
fclose($fp2);
*/


if (isset($_POST["rcmd"])) {
	$rcmd = $_POST["rcmd"];
switch ($rcmd) {
    	 case Stop:
        $fp =fopen($comPort, "w");
                fwrite($fp, 1); /* this is the number that it will write */
                fclose($fp);
                break;
        case Slow:
        $fp =fopen($comPort, "w");
                fwrite($fp, 2); /* this is the number that it will write */
                fclose($fp);
                break;
        case Medium:
        $fp =fopen($comPort, "w");
                fwrite($fp, 3); /* this is the number that it will write */
                fclose($fp);
                break;
        case Fast:
        $fp =fopen($comPort, "w");
                fwrite($fp, 4); /* this is the number that it will write */
                fclose($fp);
                break;
        case Right:
        $fp =fopen($comPort, "w");
                fwrite($fp, 5); /* this is the number that it will write */
                fclose($fp);
                break;
        case Left:
        $fp =fopen($comPort, "w");
                fwrite($fp, 6); /* this is the number that it will write */
                fclose($fp);
                break;
        case Reverse_Slow:
        $fp =fopen($comPort, "w");
                fwrite($fp, 7); /* this is the number that it will write */
                fclose($fp);
                break;
        case Reverse_Fast:
        $fp =fopen($comPort, "w");
                fwrite($fp, 8); /* this is the number that it will write */
                fclose($fp);
                break;
        case Rocket_FW:
        $fp =fopen($comPort, "w");
                fwrite($fp, 9); /* this is the number that it will write */
                fclose($fp);
                break;
        case Rocket_BW:
        $fp =fopen($comPort, "w");
                fwrite($fp, a); /* this is the number that it will write */
                fclose($fp);
                break;
        case Rocket_Stop:
        $fp =fopen($comPort, "w");
                fwrite($fp, b); /* this is the number that it will write */
                fclose($fp);
                break;
        case Cam_Stop:
        $fp =fopen($comPort, "w");
                fwrite($fp, e); /* this is the number that it will write */
                fclose($fp);
                break;
        case Cam_Right:
        $fp =fopen($comPort, "w");
                fwrite($fp, c); /* this is the number that it will write */
                fclose($fp);
                break;
        case Cam_Left:
        $fp =fopen($comPort, "w");
                fwrite($fp, d); /* this is the number that it will write */
                fclose($fp);
                break;
	case Update_status:

	/* print out the debugging stuff */
	

	case Fire_Rocket:
	$fp =fopen($comPort, "w");
                fwrite($fp, f); /* this is the number that it will write */
                fclose($fp);
                break;

	case Rocket_Off:
	$fp =fopen($comPort, "w");
                fwrite($fp, g); /* this is the number that it will write */
                fclose($fp);
                break;
	default:
		die('Crap, something went wrong. The page just puked.');
	}

}
?>
<html>
<body>

<center><h1>Barbie Rover Control</h1><b>Version <?php echo $verz; ?></b></center>

<form method="post" action="<?php echo $PHP_SELF;?>">


<input type="submit" value="Left" name="rcmd">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="submit" value="Right" name="rcmd"><br/>
<br />


&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="submit" value="Stop" name="rcmd">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<input type="submit" value="Fire_Rocket" name="rcmd">
<input type="submit" value="Rocket_Off" name="rcmd">

<br/>
<br />

<input type="submit" value="Slow" name="rcmd">
<input type="submit" value="Medium" name="rcmd">
<input type="submit" value="Fast" name="rcmd">

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="submit" value="Rocket_FW" name="rcmd">
<input type="submit" value="Rocket_Stop" name="rcmd">
<input type="submit" value="Rocket_BW" name="rcmd">
<br />
<br />
<input type="submit" value="Reverse_Slow" name="rcmd">
<input type="submit" value="Reverse_Fast" name="rcmd">

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="submit" value="Cam_Right" name="rcmd">
<input type="submit" value="Cam_Stop" name="rcmd">
<input type="submit" value="Cam_Left" name="rcmd">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="submit" value="Update_status" name="rcmd">

<br />
<br />

Debugging info:
<br />
<textarea rows="4" cols="50"><?=$incoming; ?></textarea>

</form>
</body>
</html>

