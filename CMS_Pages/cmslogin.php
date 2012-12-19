
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
        <?php 
        //THINGS THAT WOULD BE NEEDED TO BE REQUIRED ONCE
        require_once '../ServiceObjects/FacultyStaffOrMemService.php';
        require_once '../ServiceObjects/Cleaner.php';
       
        $sqlCleaner=new Cleaner();
        if(isset($_POST['username'])&&isset($_POST['password'])){
        $username=$sqlCleaner->mysql_prep($_POST['username']);
        $password=$sqlCleaner->mysql_prep($_POST['password']);}       
        ?>
    </head>
    <body>
        <div id="header"><h1>Login Page</h1></div>
        <div id="main">
            <table id="structure">
                <tr>
                    <td id="navigation"> 
                        &nbsp;
                    </td>
                    <td id="page">
                        <h2>Staff Login</h2>
                        <!--p>Welcome to this Staff Menu</p>
                        <ul>
                            <li><a href="cmsTest.php">Manage CMS</a></li>
                            <li><a href="cmsTest.php">Add the Staff</a></li>
                            <li><a href="cmsTest.php">Logout</a></li>
                        </ul-->
                        <?php 
                        $facultyMem = new FacultyStaffOrMemService();
                        $details= $facultyMem->getAll();
                        for ($i=0; $i<sizeof($details);$i++){
                            //do whatever with what is returned from the database
                        }
                        ?>
                        <form action="staffPage.php" method="post">
                            <b>Username</b><input name="username" type="textbox"/>&nbsp;
                            <b>Password</b><input name="password" type="password"/>
                        <input type="submit" name="Submit" value="submit" />
                        </form>
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