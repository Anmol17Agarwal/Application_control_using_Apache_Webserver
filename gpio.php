<html>
<head>
<meta name="viewport" content="width=device-width" />
<title>Appliance Control</title>
</head>
        <body><b><center>
        <br></br>
        HOME APPLIANCE CONTROL
        <br></br>
        <br></br>
        <form method="get" action="gpio.php">
                <input type="submit" value="LIGHT ON" name="lon">
                <input type="submit" value="LIGHT OFF" name="loff">
        </form>
        <?php
        $setmode21 = shell_exec("/usr/local/bin/gpio -g mode 21 out");
        if(isset($_GET['lon'])){
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 21 1");
                echo "Lights Turned On";
        }
        else if(isset($_GET['loff'])){
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 21 0");
                echo "Lights Turned Off";
        }
        ?>
        </b></center></body>
</html>
