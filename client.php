<?php

if (!isset($_COOKIE["name"])) {
    header("Location: error.html");
    return;
}

// get the name from cookie
$name = $_COOKIE["name"];

print "<?xml version=\"1.0\" encoding=\"utf-8\"?>";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Add Message Page</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <script type="text/javascript">
        //<![CDATA[
        function load() {
            var name = "<?php print $name; ?>";
            setTimeout("document.getElementById('msg').focus()",100);
        }

        function setMsgColor(color) {
            document.getElementById("textcolor").value = color;
        }
        //]]>
        </script>
    </head>

    <body style="text-align: left" onload="load()">
        <form action="add_message.php" method="post">
            <table border="0" cellspacing="5" cellpadding="0">
                <tr>
                    <td>What is your message?</td>
                </tr>
                <tr>
                    <td><input class="text" type="text" name="message" id="msg" style= "width: 780px" /></td>
                </tr>
                <tr>
                    <td><input class="button" type="submit" value="Send Your Message" style="width: 200px" /></td>
                </tr>
                <tr>
                    <div class="colorChooser">
                        <div class="chooseColorText"><p>Choose your color:</p></div>
                        <div class="colorBoxes">
                            <div class="colorBox colorBox-style colorBox-effect" onclick="setMsgColor('white')" style="background-color:white;"></div>
                            <div class="colorBox colorBox-style colorBox-effect" onclick="setMsgColor('#33ffff')" style="background-color:#33ffff;"></div>
                            <div class="colorBox colorBox-style colorBox-effect" onclick="setMsgColor('#ab3fdd')" style="background-color:#ab3fdd;"></div>
                            <div class="colorBox colorBox-style colorBox-effect" onclick="setMsgColor('#ae163e')" style="background-color:#ae163e;"></div>
                            <div class="colorBox colorBox-style colorBox-effect" onclick="setMsgColor('#ffa500')" style="background-color:#ffa500;"></div>
                            <div class="colorBox colorBox-style colorBox-effect" onclick="setMsgColor('#00ff00')" style="background-color:#00ff00;"></div>
                        </div>
                    </div>
                     <input type="hidden" name="textcolor" id="textcolor" value="white" />
                </tr>
            </table>
        </form>
        
        <!--logout button-->


    </body>
</html>
