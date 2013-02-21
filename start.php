<?php

// WordPress Downloader is released under the GPL Version 2, June 1991
// http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
// Copyright 2012 Dr.Abhishek Ghosh, http://thecustomizewindows.com/
// Version 1.0

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>WordPress Downloader</title>
	<style>
		html{background:#f7f7f7;}body{color:#333;font-family:"Lucida Grande",Verdana,Arial,"Bitstream Vera Sans",sans-serif;}#body{background:#fff;margin:2em auto 0 auto;width:700px;padding:1em 2em;-moz-border-radius:11px;-khtml-border-radius:11px;-webkit-border-radius:11px;border-radius:11px;border:1px solid #dfdfdf;}a{color:#2583ad;text-decoration:none;}a:hover{color:#d54e21;}h1{clear:both;color:#666;font:24px Georgia,"Times New Roman",Times,serif;margin:5px 0 0 -4px;padding:0;padding-bottom:7px;}h2{font-size:16px;}p,li{padding-bottom:2px;font-size:12px;line-height:18px;}code{font-size:13px;}ul,ol{padding:5px 5px 5px 22px;}#logo{margin:6px 0 14px 0;border-bottom:none;}.step{margin:20px 0 15px;}.step,th{text-align:left;padding:0;}.submit input,.button,.button-secondary{font-family:"Lucida Grande",Verdana,Arial,"Bitstream Vera Sans",sans-serif;text-decoration:none;font-size:14px!important;line-height:16px;padding:6px 12px;cursor:pointer;border:1px solid #bbb;color:#464646;-moz-border-radius:15px;-khtml-border-radius:15px;-webkit-border-radius:15px;border-radius:15px;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;-khtml-box-sizing:content-box;box-sizing:content-box;}.button:hover,.button-secondary:hover,.submit input:hover{color:#000;border-color:#666;}.button,.submit input,.button-secondary{background-color:#f2f2f2;}.button:active,.submit input:active,.button-secondary:active{background-color:#eee;}.form-table{border-collapse:collapse;margin-top:1em;width:100%;}.form-table td{margin-bottom:9px;padding:10px;border-bottom:8px solid #fff;font-size:12px;}.form-table th{font-size:13px;text-align:left;padding:16px 10px 10px 10px;border-bottom:8px solid #fff;width:110px;vertical-align:top;}.form-table tr{background:#f3f3f3;}.form-table code{line-height:18px;font-size:18px;}.form-table p{margin:4px 0 0 0;font-size:11px;}.form-table input{line-height:20px;font-size:15px;padding:2px;}#error-page{margin-top:50px;}#error-page p{font-size:12px;line-height:18px;margin:25px 0 20px;}#error-page code{font-family:Consolas,Monaco,Courier,monospace;}label{color:#666;font-weight:bold;display:block;margin-bottom:3px;}span{font-size:11px;color:#999;}.message{background-color:#fff;padding:10px 20px;-moz-border-radius:7px;-khtml-border-radius:7px;-webkit-border-radius:7px;border-radius:7px;}.message.success {background-color:#cfc;color:green;}.message.error{background-color:#fcc;border:0;color:red;}#footer{width:700px;margin:10px auto 0;font-size:11px;text-align:center;color:#ccc;}
	</style>

</head>
<body>

	<div id="body">

	<h1>WordPress Server Compatibillity Checking Tool</h1>	

<div class="explaintext">
    <h2>Note for System Requirements</h2>
<p>This is an script which check WordPress Server Compatibillity for optimal functioning. Without some WordPress will not run. You are suggested to check the <a href="http://wordpress.org/about/requirements/" target="blank" rel="nofollow">WordPress Official Webpage for the latest requirements</a>.</p>
<p>We have created this script for testing a typical Linux-Apache-MySQL-PHP (LAMP) server to run WordPress smoothly. This is however will not work properly for Nginx. The first four (04) points are must to be fulfilled for proper WordPress installation. You can ask at WordPress Forum or <a href="http://thecustomizewindows.com/contact-us/">contact us</a> in case you are getting too many errors.</p>
</br>  
</div>
<table style="width:600px;">
        <?php
            echo '<tr><td style="padding-right:10px;" align="right">PHP Version:</td>';
            if (strnatcmp(phpversion(),'5.2.0') >= 0) {
                echo '<td class="textok" style="padding-left:10px;">'.phpversion().' <img style="margin-left:10px;" img src="ok.png" /></td></tr>';
            } else {
                echo '<td class="textno" style="padding-left:10px;">'.phpversion().' <img style="margin-left:10px;" img src="no.png" /> <span style="margin-left:10px;color:black">>= 5.2.0 required</span></td></tr>';
            }

            if(function_exists('apache_get_modules')) {
                echo '<tr><td style="padding-right:10px;" align="right">Apache mod_rewrite:</td>';
                $apache_modules = apache_get_modules();
                if(array_search('mod_rewrite', $apache_modules) !== false) {
                    echo '<td class="textok" style="padding-left:10px;">Enabled <img style="margin-left:10px;" img src="ok.png" /></td></tr>';
                } else {
                    echo '<td class="textno" style="padding-left:10px;">Not enabled <img style="margin-left:10px;" img src="no.png" /></td></tr>';
                }
            }

            echo '<tr><td style="padding-right:10px;" align="right">GD extension:</td>';
            if(function_exists('gd_info')) {
                
                echo '<td class="textok" style="padding-left:10px;">Installed <img style="margin-left:10px;" img src="ok.png" /></td></tr>';
            } else {
                echo '<td class="textno" style="padding-left:10px;">Not Installed <img style="margin-left:10px;" img src="no.png" /></td></tr>';
            }

            echo '<tr><td style="padding-right:10px;" align="right">Mysql extension:</td>';
            if(function_exists('mysql_connect')) {
                echo '<td class="textok" style="padding-left:10px;">Installed <img style="margin-left:10px;" img src="ok.png" /></td></tr>';
            } else {
                echo '<td class="textno" style="padding-left:10px;">Not Installed <img style="margin-left:10px;" img src="no.png" /></td></tr>';
                
            }
                
            echo '<tr><td style="padding-right:10px;" align="right">php.ini display_errors:</td>';
            if(ini_get('display_errors')) {
                echo '<td class="textok" style="padding-left:10px;">disabled <img style="margin-left:10px;" img src="ok.png" /></td></tr>';
            } else {
                echo '<td class="textoptional" style="padding-left:10px;">Enabled (Recommended to be disabled)</td></tr>';
            }

            echo '<tr><td style="padding-right:10px;" align="right">php.ini memory_limit:</td>';
            if(return_bytes(ini_get('memory_limit')) >= 268435456) {
                echo '<td class="textok" style="padding-left:10px;">'.ini_get('memory_limit').' <img style="margin-left:10px;" img src="ok.png" /></td></tr>';
            } else {
                echo '<td class="textoptional" style="padding-left:10px;">'.ini_get('memory_limit').' (Recommended at least 64Mb)</td></tr>';
            }

            echo '<tr><td style="padding-right:10px;" align="right">php.ini allow_url_fopen:</td>';
            if(ini_get('allow_url_fopen')) {
                echo '<td class="textok" style="padding-left:10px;">Enabled <img style="margin-left:10px;" img src="ok.png" /></td></tr>';
            } else {
                echo '<td class="textno" style="padding-left:10px;">Disabled <img style="margin-left:10px;" img src="no.png" /></td></tr>';
            }

            echo '<tr><td style="padding-right:10px;" align="right">php.ini safe_mode:</td>';
            if(!ini_get('safe_mode')) {
                echo '<td class="textok" style="padding-left:10px;">Disabled <img style="margin-left:10px;" img src="ok.png" /></td></tr>';
            } else {
                echo '<td class="textno" style="padding-left:10px;">Enabled <img style="margin-left:10px;" img src="no.png" /></td></tr>';
            }

            echo '<tr><td style="padding-right:10px;" align="right">php.ini short_open_tag:</td>';
            if(ini_get('short_open_tag')) {
                echo '<td class="textok" style="padding-left:10px;">Enabled <img style="margin-left:10px;" img src="ok.png" /></td></tr>';
            } else {
                echo '<td class="textno" style="padding-left:10px;">Disabled <img style="margin-left:10px;" img src="no.png" /></td></tr>';
            }

            echo '<tr><td style="padding-right:10px;" align="right">php.ini file_uploads:</td>';
            if(ini_get('file_uploads')) {
                echo '<td class="textok" style="padding-left:10px;">Enabled <img style="margin-left:10px;" img src="ok.png" /></td></tr>';
            } else {
                echo '<td class="textno" style="padding-left:10px;">Disabled <img style="margin-left:10px;" img src="no.png" /></td></tr>';
            }
            
            echo '<tr><td style="padding-right:10px;" align="right">exiftool:</td>';
            $exiftool = shell_exec('exiftool -ver');
            if($exiftool) {
                echo '<td class="textok" style="padding-left:10px;">Installed <img style="margin-left:10px;" img src="ok.png" /></td></tr>';
            }  else {
                echo '<td class="textno" style="padding-left:10px;">Disabled <img style="margin-left:10px;" img src="no.png" /></td></tr>';
            } 

            $zip = shell_exec('zip -v');

            echo '<tr><td style="padding-right:10px;" align="right">zip:</td>';
            if($zip) {
                echo '<td class="textok" style="padding-left:10px;">Installed <img style="margin-left:10px;" img src="ok.png" /></td></tr>';
            } else {
                echo '<td class="textno" style="padding-left:10px;">Disabled <img style="margin-left:10px;" img src="no.png" /></td></tr>';
            } 
            $unzip = shell_exec('unzip -v');

            echo '<tr><td style="padding-right:10px;" align="right">unzip:</td>';
            if($unzip) {
                echo '<td class="textok" style="padding-left:10px;">Installed <img style="margin-left:10px;" img src="ok.png" /></td></tr>';
            }
             else {
                echo '<td class="textno" style="padding-left:10px;">Disabled <img style="margin-left:10px;" img src="no.png" /></td></tr>';
            }
        ?>
</table>

<p>You are free to continue with the installation even if there are some missing requirements in your server. However,
if you want a full experience in your WordPress, it is strongly recommended to have all the requirements installed
before proceeding.</p>
<p>If you proceed with any element in red or orange, you can expect random failures in your WordPress Installation and data loss.</p>

	<form method="post" action="installer.php">

		<p class="submit"><input type="submit" name="submit" value="Next Step!"/></p>

	</form>

<?php

function return_bytes($val) {
    $val = trim($val);
    $last = strtolower($val[strlen($val)-1]);
    switch($last) {
        case 'g':
            $val *= 1024;
        case 'm':
            $val *= 1024;
        case 'k':
            $val *= 1024;
    }

    return $val;
}

?>

	</div>

	<div id="footer"><a href="http://thecustomizewindows.com/">The Customize Windows</a></div>

</body>
</html>
