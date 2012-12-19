<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of tableGenerator
 *
 * @author cyberdex
 */
class tableGenerator {
    //put your code
    private $thScopeCss='';
    private $thClassCss='';
    
 public function tableGenerator($thScopeCss='col',$thClassCss='rounded-company'){
  $this->thScopeCss=$thScopeCss;
  $this->thClassCss=$thClassCss;
 }   
 
 public function createtableHeaders($headers){
  $heading=$headers;
  echo "<thead><tr>";
  for($i=0;$i<sizeof($heading);$i++){
   echo "<th scope='{$this->thScopeCss}'  class='{$this->thClassCss}'>$heading[$i]</th>";  
  }
  echo "</thead></tr>";
 }
 
 public function createtableData($tableData){
     echo "<tbody>";
     for($d=0;$d<sizeof($tableData);$d++){
        echo "<tr>";
        for($e=0;$e<sizeof($tableData[$d]);$e++){
            echo "<td>{$tableData[$d][$e]}</td>";
        }
        echo "</tr>";
     }
     echo "</tbody>";      
 }

 public function generateTable1($headers,$tableData){
   echo "
<head>
    <style type='text/css'>
    @import url('/cpe/Tools/tableCreator/style.css');
    </style>
    </head>       

<table id='hor-minimalist-a' summary='Employee Pay Sheet'>";
    $this->createtableHeaders($headers);
    $this->createtableData($tableData);
   
echo "</table></body>";
    }   
    
    public function generateTable2($headers,$tableData){
   echo "
<head>
    <style type='text/css'>
    @import url('/cpe/Tools/tableCreator/style.css');
    </style>
    </head>       

<table id='hor-minimalist-b' summary='Employee Pay Sheet'>";
   $this->createtableHeaders($headers);
   $this->createtableData($tableData);
echo "</table></body>";
    }
    
    public function generateTable3($headers,$tableData){
   echo "
<head>
    <style type='text/css'>
    @import url('/cpe/Tools/tableCreator/style.css');
    </style>
    </head>       

<table id='ver-minimalist' summary='Most Favorite Movies'>";
    $this->createtableHeaders($headers);
    $this->createtableData($tableData);
echo "</table></body>";
    }
    
public function generateTable4($headers,$tableData){
   echo "
<head>
    <style type='text/css'>
    @import url('/cpe/Tools/tableCreator/style.css');
    </style>
    </head>       

<table id='box-table-a' summary='Employee Pay Sheet'>";
     $this->createtableHeaders($headers);
    $this->createtableData($tableData);
echo "</table></body>";
    }    
    
public function generateTable5($headers,$tableData){
   echo "
<head>
    <style type='text/css'>
    @import url('/cpe/Tools/tableCreator/style.css');
    </style>
    </head>       

<table id='box-table-b' summary='Most Favorit Movies'>";
    $this->createtableHeaders($headers);
    $this->createtableData($tableData);
echo "</table></body>";
    }    
    
public function generateTable6($headers,$tableData){
   echo "
<head>
    <style type='text/css'>
    @import url('/cpe/Tools/tableCreator/style.css');
    </style>
    </head>       

<table id='hor-zebra' summary='Employee Pay Sheet'>";
    $this->createtableHeaders($headers);
    $this->createtableData($tableData);
echo "</table></body>";
    }    
    
public function generateTable7($headers,$tableData){
   echo "
<head>
    <style type='text/css'>
    @import url('/cpe/Tools/tableCreator/style.css');
    </style>
    </head>       

<table id='ver-zebra' summary='Most Favorite Movies'>
    <colgroup>
    	<col class='vzebra-odd' />
    	<col class='vzebra-even' />
    	<col class='vzebra-odd' />
        <col class='vzebra-even' />
    </colgroup>
    <thead>
    	<tr>
        	<th scope='col' id='vzebra-comedy'>Comedy</th>
            <th scope='col' id='vzebra-adventure'>Adventure</th>
            <th scope='col' id='vzebra-action'>Action</th>
            <th scope='col' id='vzebra-children'>Children</th>
        </tr>
    </thead>";   
   $this->createtableData($tableData);
echo "</table></body>";
    }    
    
public function generateTable8($headers,$tableData){
   echo "
<head>
    <style type='text/css'>
    @import url('/cpe/Tools/tableCreator/style.css');
    </style>
    </head>       

<table id='one-column-emphasis' summary='2007 Major IT Companies' Profit'>
    <colgroup>
    	<col class='oce-first' />
    </colgroup>";    
    $this->createtableHeaders($headers);
    $this->createtableData($tableData);
echo "</table></body>";
    }    
    
public function generateTable9($headers,$tableData){
   echo "
<head>
    <style type='text/css'>
    @import url('/cpe/Tools/tableCreator/style.css');
    </style>
    </head>       

<table id='newspaper-a' summary='2007 Major IT Companies' Profit'>";
    $this->createtableHeaders($headers);
    $this->createtableData($tableData);
echo "</table></body>";
    }    
    
public function generateTable10($headers,$tableData){
   echo "
<head>
    <style type='text/css'>
    @import url('/cpe/Tools/tableCreator/style.css');
    </style>
    </head>       

<table id='newspaper-b' summary='2007 Major IT Companies' Profit'>";
    $this->createtableHeaders($headers);
  echo"<tfoot>
    	<tr>
        	<td colspan='5'><em>''</em></td>
        </tr>
    </tfoot>";
    $this->createtableData($tableData);
echo "</table></body>";
    }    
    
public function generateTable11($headers,$tableData){
   echo "
<head>
    <style type='text/css'>
    @import url('/cpe/Tools/tableCreator/style.css');
    </style>
    </head>       

<table id='newspaper-c' summary='Personal Movie Rating'>";
    $this->createtableHeaders($headers);
    $this->createtableData($tableData);
echo "</table></body>";
    }    
    
public function generateTable12($headers,$tableData){
   echo "
<head>
    <style type='text/css'>
    @import url('/cpe/Tools/tableCreator/style.css');
    </style>
    </head>       

<table id='rounded-corner' summary='2007 Major IT Companies' Profit'>";   
    $this->createtableHeaders($headers);//set the $thClassCss variable in the constructor to rounded-company if this table is to be used
  echo"      <tfoot>
    	<tr>
        	<td colspan='4' class='rounded-foot-left'><em>''</em></td>
        	<td class='rounded-foot-right'>&nbsp;</td>
        </tr>
    </tfoot>";
    $this->createtableData($tableData);
echo "</table></body>";//<th scope='col' class='rounded-q1'>Q1</th>
    }    
    
public function generateTable13($headers,$tableData){
   echo "
<head>
    <style type='text/css'>
    @import url('/cpe/Tools/tableCreator/style.css');
    </style>
    </head>       

<table id='background-image' summary='Meeting Results'>";
    $this->createtableHeaders($headers);
 echo" <tfoot>
    	<tr>
        	<td colspan='4'></td>
        </tr>
    </tfoot>";
   $this->createtableData($tableData);
echo "</table></body>";
    }    
    
 public function generateTable14($headers,$tableData){
   echo "
<head>
    <style type='text/css'>
    @import url('/cpe/Tools/tableCreator/style.css');
    </style>
    </head>       

<table id='gradient-style' summary='Meeting Results'>";
   $this->createtableHeaders($headers);
   echo " <tfoot>
    	<tr>
        	<td colspan='4'>''</td>
        </tr>
    </tfoot>";
    $this->createtableData($tableData);
echo "</table></body>";
    }
    
    public function generateTable15($headers,$tableData){
   echo "
<head>
    <style type='text/css'>
    @import url('/cpe/Tools/tableCreator/style.css');
    </style>
    </head>       

<table id='pattern-style-a' summary='Meeting Results'>";
  $this->createtableHeaders($headers);
   $this->createtableData($tableData);
echo "</table></body>";
    }
    
    public function generateTable16($headers,$tableData){
echo "
    <head>
    <style type='text/css'>
    @import url('/cpe/Tools/tableCreator/style.css');
    </style>
    </head>
    
<body>
    <table id='pattern-style-b' summary='Meeting Results'>";
    $this->createtableHeaders($headers);
    $this->createtableData($tableData);
echo "</table></body>";

}

}

?>
