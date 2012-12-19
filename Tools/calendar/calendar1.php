<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
<?
echo "";
require_once 'calendarIncluder.php';
?> 
    </head>
    <body>
        <?php
        require_once 'calendar.php';
        echo "<br/>";
        $cal=new calendar();
        $cal->showCalendar();
        ?>
    </body>
</html>
