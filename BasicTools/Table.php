<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Table
 *
 * @author cyberdex
 */
class Table {
    //put your code here
     function loadTable($header, $body){
         
               echo "<div id='container'>";
                    echo "<div class='demo_jui'>";
                    echo "<table cellpadding='0' cellspacing='0' border='0' class='display' id='example'>";
                    echo "<thead>";
                    echo "<tr>";
                            for($i=0;$i<sizeof($header);$i++){                                   
                                    echo "<th class='center'>{$header[$i]}</th>";
                            }
                              echo "<th class='center'></th>";
                              echo "<th class='center'></th>";
                    echo "</tr>";
                    echo "</thead>";
                    echo "<tbody>";
                            for($i=0;$i<sizeof($body);$i++){
                                    echo "<tr class='gradeB'>";
                                    for($j=0;$j<sizeof($body[$i]);$j++){
                                            echo "<td class='center' name='identity{$j}'>{$body[$i][$j]}</td>" ;
                                    }
                                     echo "<td class='center'><form id ='edit' action=''><input type='hidden' name ='edit' id='edit' value='{$body[$i][0]}'/><input type='hidden' value='Edit' /></form></td>";
                                     echo "<td class='center'><form id ='delete' action='Delete.jsp'><input type='hidden' name ='delete' id='delete' value='{$body[$i][$j]}'/><input type='submit' value='Delete' /></form></td>";
                                     echo "</tr>";
                                    
                            }
                    echo "</tbody>";                   
                    echo "</table>";
                    echo "</div>";
                    echo "</div>";
    }
}

?>
