<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RegistrationForm
 *
 * @author cyberdex
 */
class RegistrationForm {

    //put your code here

    public function studentForm($redirectPage) {//the redirectPage is the one to receive the request
        echo "<div id='form-container'>";
        echo "<h1>Year Group Registration</h1>";


        echo "<form id='contact-form' name='contact-form' method='post' action='{$redirectPage}'>";
        echo "<table width='100%' border='0' cellspacing='0' cellpadding='5'>";
        echo "<tr>";
        echo "<td width='15%'><label for='name'>Name</label></td>";
        echo "<td width='70%'><input type='text' class='validate[required,custom[onlyLetter]]' name='name' id='name' value='' /></td>";
        echo "<td width='15%' id='errOffset'>&nbsp;</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td><label for='email'>Email</label></td>";
        echo "<td><input type='text' class='validate[required,custom[email]]' name='email' id='email' value='' /></td>";
        echo "<td>&nbsp;</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td valign='top'><label for='ID'>ID Number</label></td>";
        echo "<td><input type = 'text' name='ID' id='message' class='validate[required]' ><?php if(isset({$_SESSION['post']['ID']})) {$_SESSION['post']['ID']}?>"; 
        echo "</td>";
        echo "<td valign='top'>&nbsp;</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td valign='top'><label for='ID'>Phone Number</label></td>";
        echo "<td><input type = 'text' name='pnumber' id='message' class='validate[required]' ><?php if(isset({$_SESSION['post']['pnumber']})) {$_SESSION['post']['pnumber']}?>"; //{$_SESSION['post']['pnumber']}";
        echo "</td>";
        echo "<td valign='top'>&nbsp;</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td valign='top'><label for='ID'>Office Number</label></td>";
        echo "<td><input type = 'text' name='onumber' id='message' class='validate[required]' ><?php if(isset({$_SESSION['post']['onumber']})){$_SESSION['post']['onumber']}?>";
        echo "<td valign='top'>&nbsp;</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td valign='top'><label for='ID'>Place of Work</label></td>";
        echo "<td><input type = 'text' name='place' id='message' class='validate[required]' ></td><?php if(isset({$_SESSION['post']['place']})){$_SESSION['post']['place']}?>";
        echo "<td valign='top'>&nbsp;</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td valign='top'><label for='ID'>Date of Birth</label></td>";
        echo "<td><input type = 'text' name='dob' id='message' class='validate[required]' ><?php if(isset({$_SESSION['post']['dob']})){$_SESSION['post']['dob']}?><font color='red' size='1px'>*DD/MM/YEAR</font></td>";
        echo "<td valign='top'>&nbsp;</td>";
        echo "</tr>";
        
        //Combo box
        echo "<tr>";
        echo "<td><label for='subject'>Year Group</label></td>";
        echo "<td><select name='subject' id='subject'>";
        echo "<option value='' selected='selected'> - Choose -</option>";
        echo "<option value='Question'>2011</option>";
        echo "<option value='Business proposal'>2010</option>";
        echo "<option value='Advertisement'>2009</option>";
        echo "<option value='Complaint'>2008</option>";
        echo "</select>          </td>";
        echo "<td>&nbsp;</td>";
        echo "</tr>";
        
        
        echo "<td valign='top'><label for='Picture'>Picture</label></td>";
        echo "<td><input type = 'file' name='picture' id='pic'>"; //{$_SESSION['post']['ID']}";
        echo "</td>";
        echo "<td valign='top'>&nbsp;</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td valign='top'><label for='message'>Message</label></td>";
        echo "<td><textarea name='message' id='message' class='validate[required]' cols='35' rows='5'></textarea></td>";
        echo "<td valign='top'>&nbsp;</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td><label for='captcha'>{$_SESSION['n1']} + {$_SESSION['n2']}=</label></td>";
        echo "<td><input type='text' class='validate[required,custom[onlyNumber]]' name='captcha' id='captcha' /></td>";
        echo "<td valign='top'>&nbsp;</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td valign='top'>&nbsp;</td>";
        echo "<td colspan='2'><input type='submit' name='button' id='button' value='Submit' />";
        echo "<input type='reset' name='button2' id='button2' value='Reset' />";

        echo "        <img id='loading' src='img/ajax-load.gif' width='16' height='16' alt='loading' /></td>";
        echo "</tr>";
        echo "</table>";
        echo "</form>";
        //echo "$success";
        echo "</div>";
    }
 
  
}

?>
