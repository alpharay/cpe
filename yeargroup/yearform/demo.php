<?php

session_name("fancyform");
session_start();


$_SESSION['n1'] = rand(1,20);
$_SESSION['n2'] = rand(1,20);
$_SESSION['expect'] = $_SESSION['n1']+$_SESSION['n2'];


$str='';
if(isset($_SESSION['errStr']))
{       
	$str='<div class="error">'.$_SESSION['errStr'].'</div>';
	unset($_SESSION['errStr']);
}else{echo "Nope1";}

$success='';
if(isset($_SESSION['sent']))
{
        ///echo $_GET['email'];
	$success='<h1>Thank you!</h1>';
	
	$css='<style type="text/css">#contact-form{display:none;}</style>';
	
	unset($_SESSION['sent']);
}else{echo "Nope2";}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register Year Group</title>

<link rel="stylesheet" type="text/css" href="jqtransformplugin/jqtransform.css" />
<link rel="stylesheet" type="text/css" href="formValidator/validationEngine.jquery.css" />
<link rel="stylesheet" type="text/css" href="demo.css" />

<?if(isset($css)) echo "$css";?>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="jqtransformplugin/jquery.jqtransform.js"></script>
<script type="text/javascript" src="formValidator/jquery.validationEngine.js"></script>

<script type="text/javascript" src="script.js"></script>

</head>

<body>

<div id="main-container">

	<div id="form-container">
    <h1>Year Group Registration</h1>

    
    <form id="contact-form" name="contact-form" method="post" action="submit.php">
      <table width="100%" border="0" cellspacing="0" cellpadding="5">
        <tr>
          <td width="15%"><label for="name">Name</label></td>
          <td width="70%"><input type="text" class="validate[required,custom[onlyLetter]]" name="name" id="name" value="" /></td>
          <td width="15%" id="errOffset">&nbsp;</td>
        </tr>
        <tr>
          <td><label for="email">Email</label></td>
          <td><input type="text" class="validate[required,custom[email]]" name="email" id="email" value="" /></td>
          <td>&nbsp;</td>
        </tr>
         <tr>
          <td valign="top"><label for="ID">ID Number</label></td>
          <td><input type = "text" name="ID" id="message" class="validate[required]" /><?php if(isset($_SESSION['post']['ID']))echo $_SESSION['post']['ID']?></td>
          <td valign="top">&nbsp;</td>
        </tr>
         <tr>
          <td valign="top"><label for="ID">Phone Number</label></td>
          <td><input type = "text" name="pnumber" id="message" class="validate[required]" /><?php if(isset($_SESSION['post']['pnumber']))echo $_SESSION['post']['pnumber']?></td>
          <td valign="top">&nbsp;</td>
        </tr>
         <tr>
          <td valign="top"><label for="ID">Office Number</label></td>
          <td><input type = "text" name="onumber" id="message" class="validate[required]" /><?php if(isset($_SESSION['post']['onumber']))echo $_SESSION['post']['onumber']?></td>
          <td valign="top">&nbsp;</td>
        </tr>
         <tr>
          <td valign="top"><label for="ID">Place of Work</label></td>
          <td><input type = "text" name="place" id="message" class="validate[required]" /><?php if(isset($_SESSION['post']['place']))echo $_SESSION['post']['place']?></td>
          <td valign="top">&nbsp;</td>
        </tr>
         <tr>
          <td valign="top"><label for="ID">Date of Birth</label></td>
          <td><input type = "text" name="dob" id="message" class="validate[required]" /><?php if(isset($_SESSION['post']['dob'])) echo $_SESSION['post']['dob']?><font color="red" size='1px'>*DD/MM/YEAR</font></td>
          <td valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td><label for="subject">Year Group</label></td>
          <td><select name="subject" id="subject">
            <option value="" selected="selected"> - Choose -</option>
            <option value="Question">2011</option>
            <option value="Business proposal">2010</option>
            <option value="Advertisement">2009</option>
            <option value="Complaint">2008</option>
          </select>          </td>
          <td>&nbsp;</td>
        </tr>
          <tr>
        <td valign="top"><label for="Picture">Picture</label></td>
          <td><input type = "file" name="picture" id="pic"/><!--?=$_SESSION['post']['ID']?--></td>
          <td valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td valign="top"><label for="message">Message</label></td>
          <td><textarea name="message" id="message" class="validate[required]" cols="35" rows="5"></textarea></td><!--?=$_SESSION['post']['message']?variable to use here-->
          <td valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td><label for="captcha"><?=$_SESSION['n1']?> + <?=$_SESSION['n2']?> =</label></td>
          <td><input type="text" class="validate[required,custom[onlyNumber]]" name="captcha" id="captcha" /></td>
          <td valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td valign="top">&nbsp;</td>
          <td colspan="2"><input type="submit" name="button" id="button" value="Submit" />
          <input type="reset" name="button2" id="button2" value="Reset" />
          
          <?=$str?>          <img id="loading" src="img/ajax-load.gif" width="16" height="16" alt="loading" /></td>
        </tr>
      </table>
      </form>
      <?=$success?>
    </div>

</div>

</body>
</html>
