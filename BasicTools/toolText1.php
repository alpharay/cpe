<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<!--?php session_start();?-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <style type="text/css" title="currentStyle">
            @import "css/ddsmoothmenu.css";
            @import "media/css/demo_page.css";
            @import "media/css/demo_table_jui.css";
            @import "css/dark-hive/jquery-ui-1.7.2.custom.css";
            @import "css/validationEngine.jquery.css";
            @import "css/template.css";
            @import "css/ddsmoothmenu-v.css";
        </style>
        <script type="text/javascript" src="js/localdata.js"></script>
        <script type="text/javascript" src="js/tableFunctions.js"></script>
        <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.8.6.custom.min.js"></script>
        <!--link type="text/css" href="css/jquery-ui-1.8.6.custom.css" rel="Stylesheet" /-->


        <script src="js/jquery-1.4.min.js" type="text/javascript"></script>
        <!--script type="text/javascript" src="js/jquery-1.3.2.min.js"></script--><!-- COMMENTED B'COS IT OVERRIDES  THE NEWER js/jquery-1.4.2.min.js ABOVE-->
        <script type="text/javascript" language="javascript" src="media/js/jquery.dataTables.js"></script>
        <script src="js/jquery-ui-1.7.2.custom.min.js" type="text/javascript"></script>
        <script src="js/jquery.validationEngine-en.js" type="text/javascript"></script>
        <script src="js/jquery.validationEngine.js" type="text/javascript"></script>

        <script type="text/javascript" src="js/ddsmoothmenu.js"></script>
        
                <script>
            $(document).ready(function() {

                $("#formID").validationEngine()

            });
        </script>

        <style type="text/css">
            .toggler { width: 500px; height: 200px; }
            #button { padding: .5em 1em; text-decoration: none; }
            #effect { width: 240px; height: 135px; padding: 0px; position: relative; }
            #effect h3 { margin: 0; padding: 0.4em; text-align: center; }
            .ui-effects-transfer { border: 2px dotted gray; }
        </style>
        <script type="text/javascript">
            $(function() {

                //run the currently selected effect
                function runEffect(){
                    //get effect type from
                    var selectedEffect = $('#effectTypes').val();

                    //most effect types need no options passed by default
                    var options = {};
                    //check if it's scale, transfer, or size - they need options explicitly set
                    if(selectedEffect == 'scale'){  options = {percent: 100}; }
                    else if(selectedEffect == 'transfer'){ options = { to: "#button", className: 'ui-effects-transfer' }; }
                    else if(selectedEffect == 'size'){ options = { to: {width: 280,height: 185} }; }

                    //run the effect
                    $("#effect").show('drop',options,500,callback);
                    $("#infoHostel").show('blind',options,500,callback);
                    $("#menuHostel").show('blind',options,500,callback);
                    $("#menuEmployee").hide();
                };

                function runEffect2(){
                    //get effect type from
                    var selectedEffect = $('#effectTypes').val();

                    //most effect types need no options passed by default
                    var options = {};
                    //check if it's scale, transfer, or size - they need options explicitly set
                    if(selectedEffect == 'scale'){  options = {percent: 100}; }
                    else if(selectedEffect == 'transfer'){ options = { to: "#button", className: 'ui-effects-transfer' }; }
                    else if(selectedEffect == 'size'){ options = { to: {width: 280,height: 185} }; }

                    //run the effect
                    $("#effect2").show('drop',options,500,callback);
                    $("#infoHostel").hide();
                    $("#menuEmployee").show('blind',options,500,callback);
                    $("#menuHostel").hide();
                };

                //callback function to bring a hidden box back
                function callback(){
                    setTimeout(function(){
                        //$("#effect:visible").removeAttr('style').hide().fadeOut();
                    }, 1000);
                };

                //set effect from select menu value
                $("#Home").click(function() {
                    runEffect();
                    return false;
                });

                $("#Hostel_Setup").click(function() {
                    $("#effect2").hide();
                    runEffect();
                    return false;
;                });

                $("#Employee_Profile").click(function() {
                    $("#effect").hide();
                    runEffect2();
                    return false;
                });

                $("#Hostel_Task").click(function() {
                    runEffect();
                    return false;
                });

                $("#Complians_and").click(function() {
                    runEffect();
                    return false;
                });

                $("#Report").click(function() {
                    runEffect();
                    return false;
                });


                $("#effect").hide();
                $("#effect2").hide();
                $("#infoHostel").hide();
                $("#menuEmployee").hide();
                $("#menuHostel").hide();
            });
        </script>




        <script type="text/javascript" charset="utf-8">
            $(document).ready(function() {
                oTable = $('#example').dataTable({
                    "bJQueryUI": true,
                    "sPaginationType": "full_numbers"
                });
            } );
        </script>
        


       <!--script type="text/javascript">
            $(document).ready(function(){
                $("#item").autocomplete({

                    source: taken
                })
            });
        </script-->

        <script type="text/javascript">

            ddsmoothmenu.init({
                mainmenuid: "smoothmenu1", //menu DIV id
                orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
                classname: 'ddsmoothmenu', //class added to menu's outer DIV
                //customtheme: ["#1c5a80", "#18374a"],
                contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
            })

            ddsmoothmenu.init({
                mainmenuid: "smoothmenu2", //Menu DIV id
                orientation: 'v', //Horizontal or vertical menu: Set to "h" or "v"
                classname: 'ddsmoothmenu-v', //class added to menu's outer DIV
                contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
            })

        </script>
        <title></title>
    </head>
    <body>
        <?php
        require_once 'Table.php';
        $header=array("NO","QTY","ITEM","PRICE(GHC)","AMT(GHC)");
        $body=array(array("NO","QTY","ITEM","PRICE(GHC)","AMT(GHC)"),array("NO","QTY","ITEM","PRICE(GHC)","AMT(GHC)"));
        
        $tableTest =new Table();
        $tableTest->loadTable($header, $body);
        ?>
    </body>
</html>
