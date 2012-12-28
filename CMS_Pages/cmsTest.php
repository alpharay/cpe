
<?php ob_start();?>
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link href="css1/cmsCss.css" media="all" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="header"><h1>Cms Test</h1></div>
        <div id="main">
            <!--form enctype="">
                
            </form-->
            <table id="structure">
                <tr>
                    <td id="navigation"> 
                        &nbsp;
                    </td>
                    <td id="page">
                        <h2>Cms Menu</h2>
                        <p>Welcome to this Staff Menu</p>
                        <ul>
                            <li><a href="cmsTest.php">Manage CMS</a></li>
                            <li><a href="cmsTest.php">Add the Staff</a></li>
                            <li><a href="cmsTest.php">Logout</a></li>
                        </ul>
                    </td>
                </tr>
            </table>
        </div>
        <div id="footer"></div>
        <!--?php
        // put your code here
        ?-->
    </body>
</html>
<?php ob_end_flush();?>