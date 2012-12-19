<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PagePainter
 *
 * @author cyberdex
 */
class PagePainter {
    //put your code here
    public function detailedCourseDscrptor($courseName='',$courseInfo='',$ReferenceBkAndMat=''){//for painting the page with course description info
     echo "   <h4 style='color:blue;'>{$courseName}</h4>  
{$courseInfo}<br/>
<i><b>Reference books and materials</b>  
{$ReferenceBkAndMat}</i><BR><BR>";
    }
}

?>
