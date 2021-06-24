<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta charset="UTF-8">
<html>
<head>   
<?php
if (isset($_GET["layout"])) {
	$layout = intval($_GET["layout"]);
} else {
	$layout = 1;
}
if (($layout < 1) OR ($layout > 40)) $layout = 1;
?>
<title>Layout n°<?=$layout?></title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<meta name="generator" content="HAPedit 3.1">
</head>
<body>
<script type="text/javascript" src="js/filler.js"></script>
<style type="text/css">
html,body{margin:0;padding:0}
body{font: 76% arial,sans-serif; background: #ddd;}
p{margin:0 10px 10px}
#content a, #navigation a, #extra a {display:block;color: #981793;padding:10px}
div#header h1{margin:0;
 padding-left:10px;background: #EEE;color: #79B30B}
 div#header h2{margin:0;text-align: end;
 padding-right:10px;background: #EEE;color: #79B30B}
#header img {vertical-align: top; padding: .25em 2em .25em 0;}
div#content p{line-height:1.4}
div#navigation{background:#B9CAFF}
div#extra{background:#FF8539}
div#footer{background: #333;color: #FFF}
div#footer p{margin:0;padding:5px 10px}
div#content{background: #fff;}
@media screen and (min-width: 1160px) {
	.layoutchoser {
		position: fixed;
		bottom: 0;
		width: 100%;
		padding: 1em 1em 0 1em;
	}
}
.layoutchoser img { padding: 1em .5em; }
.layoutchoser a { position:relative; }
.layoutchoser .legend { position: absolute; top:-1em; right:0; background: #00000080; color: #fff; padding: 0.25em 1em;}



/* Mode mobile ici sans media queries */
	div#container {
	display: grid;
	}

	div#header, div#footer{
	}

	div#navigation{
	}

	div#wrapper{
	display: grid;
	}

	div#extra{
	}

@media screen and (min-width: 768px) {
/* un switch avec 2 types de cas  pour ipad*/
<?php 
switch ($layout){
	case 1:
	case 3:
	case 5:
	case 7:
	case 9:
	case 11:
	case 13:
	case 15:
	case 18:
	case 19:
	case 20:
	case 21:
	case 22:
	case 23:
	case 24:
	case 25:
	case 26:
	case 27:
	case 29:
	case 30:
	case 31:
	case 32:
	case 33:
	case 34:
	case 35:
	case 36:
	case 37:
	case 38:
	case 38:
	case 39:
?>
	div#container {
	grid-template-columns: 50% 50%;
	}

	div#header, div#footer{
	grid-column-start: 1;
	grid-column-end: span 2;
	}

	div#navigation{
	grid-column-start: 1;
	grid-row-start: 3;
	}

	div#wrapper{
	grid-column-start: 1;
	grid-column-end: span 2;
	grid-row-start: 2;
	}

	div#extra{
	grid-column-start: 2;
	grid-row-start: 3;
	}
<?php
	break;
	case 2:
	case 4:
	case 6:
	case 8:
	case 10:
	case 12:
	case 14:
	case 16:
	case 17:
	case 28:
	case 40:
?>
	div#container {
	grid-template-columns: 50% 50%;
	}

	div#header, div#footer{
	grid-column-start: 1;
	grid-column-end: span 2;
	}

	div#navigation{
	grid-column-start: 2;
	grid-row-start: 3;
	}

	div#wrapper{
	grid-column-start: 1;
	grid-column-end: span 2;
	grid-row-start: 2;
	}

	div#extra{
	grid-column-start: 1;
	grid-row-start: 3;
	}
<?php
	break;
	}
?>
}


@media screen and (min-width: 1160px) {
/* ce switch pour desktop */
<?php
switch ($layout) {
case 1: 
?> 
   
	div#container {
	grid-template-columns: 1fr 2fr 1fr;
	}

	div#header, div#footer{
	grid-column-start: 1;
	grid-column-end: span 3;
	}

	div#navigation{
	grid-column-start: 1;
	grid-row-start: 2;
	}

	div#wrapper{
	grid-column-start: 2;
	grid-column-end: span 1;
	grid-row-start: 2;
	}

	div#extra{
	grid-column-start: 3;
	grid-row-start: 2;
	}
   
   <?php
   break;
case 2:
	?>
	
		div#container {
	grid-template-columns: 1fr 2fr 1fr;
	}

	div#header, div#footer{
	grid-column-start: 1;
	grid-column-end: span 3;
	}

	div#navigation{
	grid-column-start: 3;
	grid-row-start: 2;
	}

	div#wrapper{
	grid-column-start: 2;
	grid-column-end: span 1;
	grid-row-start: 2;
	}

	div#extra{
	grid-column-start: 1;
	grid-row-start: 2;
	}
	
	<?php
	break;
case 3:
	?>
	
	div#container {

	grid-template-columns: 2fr 1fr 1fr;
	}

	div#header, div#footer{
	grid-column-start: 1;
	grid-column-end: span 3;
	}

	div#navigation{
	grid-column-start: 2;
	grid-row-start: 2;
	}

	div#wrapper{
	grid-column-start: 1;
	grid-column-end: span 1;
	grid-row-start: 2;
	}

	div#extra{
	grid-column-start: 3;
	grid-row-start: 2;
	}

	<?php
	break;
case 4:
	?>
	
	div#container {
	grid-template-columns: 2fr 1fr 1fr;
	}

	div#header, div#footer{
	grid-column-start: 1;
	grid-column-end: span 3;
	}

	div#navigation{
	grid-column-start: 3;
	grid-row-start: 2;
	}

	div#wrapper{
	grid-column-start: 1;
	grid-column-end: span 1;
	grid-row-start: 2;
	}

	div#extra{
	grid-column-start: 2;
	grid-row-start: 2;
	}

	
	<?php
	break;
case 5:
	?>
	
	div#container {
	grid-template-columns: 1fr 1fr 2fr;
	}

	div#header, div#footer{
	grid-column-start: 1;
	grid-column-end: span 3;
	}

	div#navigation{
	grid-row-start: 2;
	}

	div#wrapper{
	grid-column-start: 3;
	grid-row-start: 2;
	}

	div#extra{
	grid-column-start: 2;
	grid-row-start: 2;
	}

	
	<?php
	break;
case 6:
	?>
	
	div#container {
	grid-template-columns: 1fr 1fr 2fr;
	}

	div#header, div#footer{
	grid-column-start: 1;
	grid-column-end: span 3;
	}

	div#navigation{
	grid-column-start: 2;
	grid-row-start: 2;
	}

	div#wrapper{
	display:grid;
	grid-column-start: 3;
	grid-row-start: 2;
	}

	div#extra{
	grid-column-start: 1;
	grid-row-start: 2;
	}
	
	<?php
	break;
case 7:
	?>
	
	div#container {
	grid-template-columns: auto 240px 1fr 240px auto;
	width: 1160px;
	margin: 0 auto;
	}

	div#header, div#footer{
	grid-column-start: 2;
	grid-column-end: span 3;
	}

	div#navigation{
	grid-column-start: 2;
	grid-row-start: 2;
	}

	div#wrapper{
	grid-column-start: 3;
	grid-column-end: span 1;
	grid-row-start: 2;
	}

	div#extra{
	grid-column-start: 4;
	grid-row-start: 2;
	}
	
	<?php
	break;
case 8:
	?>
	
	div#container {
	grid-template-columns: auto 240px 1fr 240px auto;
	width: 1160px;
	margin: 0 auto;
	}
	
	div#header, div#footer{
	grid-column-start: 2;
	grid-column-end: span 3;
	}
	
	div#navigation{
	grid-column-start: 4;
	grid-row-start: 2;
	}
	
	div#wrapper{
	grid-column-start: 3;
	grid-column-end: span 1;
	grid-row-start: 2;
	}
	
	div#extra{
	grid-column-start: 2;
	grid-row-start: 2;
	}
	
	<?php
	break;
case 9:
	?>
	
	div#container {
	grid-template-columns: auto 1fr 240px 240px auto;
	width: 1160px;
	margin: 0 auto;
	}
	
	div#header, div#footer{
	grid-column-start: 2;
	grid-column-end: span 3;
	}
	
	div#navigation{
	grid-column-start: 3;
	grid-row-start: 2;
	}
	
	div#wrapper{
	grid-column-start: 2;
	grid-column-end: span 1;
	grid-row-start: 2;
	}
	
	div#extra{
	grid-column-start: 4;
	grid-row-start: 2;
	}
	
	<?php
	break;
case 10:
	?>
	
	div#container {
	grid-template-columns: auto 1fr 240px 240px auto;
	width: 1160px;
	margin: 0 auto;
	}
	
	div#header, div#footer{
	grid-column-start: 2;
	grid-column-end: span 3;
	}
	
	div#navigation{
	grid-column-start: 4;
	grid-row-start: 2;
	}
	
	div#wrapper{
	grid-column-start: 2;
	grid-column-end: span 1;
	grid-row-start: 2;
	}
	
	div#extra{
	grid-column-start: 3;
	grid-row-start: 2;
	}
	
	<?php
	break;
case 11:
	?>
	
	div#container {
	grid-template-columns: auto 240px 240px 1fr auto;
	width: 1160px;
	margin: 0 auto;
	}
	
	div#header, div#footer{
	grid-column-start: 2;
	grid-column-end: span 3;
	}
	
	div#navigation{
	grid-column-start: 2;
	grid-row-start: 2;
	}
	
	div#wrapper{
	grid-column-start: 4;
	grid-column-end: span 1;
	grid-row-start: 2;
	}
	
	div#extra{
	grid-column-start: 3;
	grid-row-start: 2;
	}
	
	<?php
	break;
case 12:
	?>
	
	div#container {
	grid-template-columns: auto 240px 240px 1fr auto;
	width: 1160px;
	margin: 0 auto;
	}
	
	div#header, div#footer{
	grid-column-start: 2;
	grid-column-end: span 3;
	}
	
	div#navigation{
	grid-column-start: 3;
	grid-row-start: 2;
	}
	
	div#wrapper{
	grid-column-start: 4;
	grid-column-end: span 1;
	grid-row-start: 2;
	}
	
	div#extra{
	grid-column-start: 2;
	grid-row-start: 2;
	}
	
	<?php
	break;
case 13:
	?>
	
	div#container {
	grid-template-columns: 240px 1fr 240px;
	}
	
	div#header, div#footer{
	grid-column-start: 1;
	grid-column-end: span 3;
	}
	
	div#navigation{
	grid-column-start: 1;
	grid-row-start: 2;
	}
	
	div#wrapper{
	grid-column-start: 2;
	grid-column-end: span 1;
	grid-row-start: 2;
	}
	
	div#extra{
	grid-column-start: 3;
	grid-row-start: 2;
	}
	
	<?php
	break;
case 14:
	?>
	
	div#container {
	grid-template-columns: 240px 1fr 240px;
	}
	
	div#header, div#footer{
	grid-column-start: 1;
	grid-column-end: span 3;
	}
	
	div#navigation{
	grid-column-start: 3;
	grid-row-start: 2;
	}
	
	div#wrapper{
	grid-column-start: 2;
	grid-column-end: span 1;
	grid-row-start: 2;
	}
	
	div#extra{
	grid-column-start: 1;
	grid-row-start: 2;
	}
	
	<?php
	break;
case 15:
	?>
	
	div#container {
	grid-template-columns: 1fr 240px 240px;
	}
	
	div#header, div#footer{
	grid-column-start: 1;
	grid-column-end: span 3;
	}
	
	div#navigation{
	grid-column-start: 2;
	grid-row-start: 2;
	}
	
	div#wrapper{
	grid-column-start: 1;
	grid-column-end: span 1;
	grid-row-start: 2;
	}
	
	div#extra{
	grid-column-start: 3;
	grid-row-start: 2;
	}
	
	<?php
	break;
case 16:
	?>
	
	div#container {
	grid-template-columns: 1fr 240px 240px;
	}
	
	div#header, div#footer{
	grid-column-start: 1;
	grid-column-end: span 3;
	}
	
	div#navigation{
	grid-column-start: 3;
	grid-row-start: 2;
	}
	
	div#wrapper{
	grid-column-start: 1;
	grid-column-end: span 1;
	grid-row-start: 2;
	}
	
	div#extra{
	grid-column-start: 2;
	grid-row-start: 2;
	}
	
	<?php
	break;
case 17:
	?>
	
	div#container {
	grid-template-columns: 240px 240px 1fr;
	}
	
	div#header, div#footer{
	grid-column-start: 1;
	grid-column-end: span 3;
	}
	
	div#navigation{
	grid-column-start: 2;
	grid-row-start: 2;
	}
	
	div#wrapper{
	grid-column-start: 3;
	grid-row-start: 2;
	}
	
	div#extra{
	grid-column-start: 1;
	grid-row-start: 2;
	}
	
	<?php
	break;
case 18:
	?>
	
	div#container {
	grid-template-columns: 240px 240px 1fr;
	}
	
	div#header, div#footer{
	grid-column-start: 1;
	grid-column-end: span 3;
	}
	
	div#navigation{
	grid-column-start: 1;
	grid-row-start: 2;
	}
	
	div#wrapper{
	grid-column-start: 3;
	grid-row-start: 2;
	}
	
	div#extra{
	grid-column-start: 2;
	grid-row-start: 2;
	}
	
	<?php
	break;
case 19:
	?>
	
	div#container {
	grid-template-columns: 240px 2fr 1fr;
	}
	
	div#header, div#footer{
	grid-column-start: 1;
	grid-column-end: span 3;
	}
	
	div#navigation{
	grid-column-start: 1;
	grid-row-start: 2;
	}
	
	div#wrapper{
	grid-column-start: 2;
	grid-column-end: span 1;
	grid-row-start: 2;
	}
	
	div#extra{
	grid-column-start: 3;
	grid-row-start: 2;
	}
	
	<?php
	break;
case 20:
	?>
	
	div#container {
	grid-template-columns: 1fr 2fr 240px;
	}
	
	div#header, div#footer{
	grid-column-start: 1;
	grid-column-end: span 3;
	}
	
	div#navigation{
	grid-column-start: 1;
	grid-row-start: 2;
	}
	
	div#wrapper{
	grid-column-start: 2;
	grid-column-end: span 1;
	grid-row-start: 2;
	}
	
	div#extra{
	grid-column-start: 3;
	grid-row-start: 2;
	}
	
	<?php
	break;
case 21:
	?>
	
	div#container {
	grid-template-columns: 2fr 240px 1fr;
	}
	
	div#header, div#footer{
	grid-column-start: 1;
	grid-column-end: span 3;
	}
	
	div#navigation{
	grid-column-start: 2;
	grid-row-start: 2;
	}
	
	div#wrapper{
	grid-column-start: 1;
	grid-column-end: span 1;
	grid-row-start: 2;
	}
	
	div#extra{
	grid-column-start: 3;
	grid-row-start: 2;
	}
	
	<?php
	break;
case 22:
	?>
	
	div#container {
	grid-template-columns: 2fr 1fr 240px;
	}
	
	div#header, div#footer{
	grid-column-start: 1;
	grid-column-end: span 3;
	}
	
	div#navigation{
	grid-column-start: 2;
	grid-row-start: 2;
	}
	
	div#wrapper{
	grid-column-start: 1;
	grid-column-end: span 1;
	grid-row-start: 2;
	}
	
	div#extra{
	grid-column-start: 3;
	grid-row-start: 2;
	}
	
	<?php
	break;
case 23:
	?>
	
	div#container {
	grid-template-columns: 1fr 240px;
	grid-template-rows: auto auto 1fr auto;
	}

	div#header, div#footer{
	grid-column-start: 1;
	grid-column-end: span 2;
	}

	div#navigation{
	grid-column-start: 2;
	grid-row-start: 2;
	}

	div#wrapper{
	grid-column-start: 1;
	grid-column-end: span 1;
	grid-row-start: 2;
	grid-row-end: span 2;
	}

	div#extra{
	grid-column-start: 2;
	grid-row-start: 3;
	}
	
	<?php
	break;
case 24:
	?>
	
	div#container {
	grid-template-columns: 240px 1fr;
	grid-template-rows: auto auto 1fr auto;
	}

	div#header, div#footer{
	grid-column-start: 1;
	grid-column-end: span 2;
	}

	div#navigation{
	grid-column-start: 1;
	grid-row-start: 2;
	}

	div#wrapper{
	grid-column-start: 2;
	grid-row-start: 2;
	grid-row-end: span 2;
	}

	div#extra{
	grid-column-start: 1;
	grid-row-start: 3;
	}
	
	<?php
	break;
case 25:
	?>
	
	div#container {
	grid-template-columns: 2fr 1fr;
	grid-template-rows: auto auto 1fr auto;
	}

	div#header, div#footer{
	grid-column-start: 1;
	grid-column-end: span 2;
	}

	div#navigation{
	grid-column-start: 2;
	grid-row-start: 2;
	grid-auto-rows: auto;
	}

	div#wrapper{
	grid-column-start: 1;
	grid-column-end: span 1;
	grid-row-start: 2;
	grid-row-end: span 2;
	}

	div#extra{
	grid-column-start: 2;
	grid-row-start: 3;
	}
	
	<?php
	break;
case 26:
	?>
	
	div#container {
	grid-template-columns: 1fr 2fr;
	grid-template-rows: auto auto 1fr auto;
	}

	div#header, div#footer{
	grid-column-start: 1;
	grid-column-end: span 2;
	}

	div#navigation{
	grid-column-start: 1;
	grid-row-start: 2;
	}

	div#wrapper{
	grid-column-start: 2;
	grid-row-start: 2;
	grid-row-end: span 2;
	}

	div#extra{
	grid-column-start: 1;
	grid-row-start: 3;
	}
	
	<?php
	break;
case 27:
	?>
	
	div#container {
	grid-template-columns: 1fr 1fr;
	}

	div#header, div#footer{
	grid-column-start: 1;
	grid-column-end: span 2;
	}

	div#navigation{
	grid-column-start: 1;
	grid-row-start: 3;
	}

	div#wrapper{
	grid-column-start: 1;
	grid-column-end: span 2;
	grid-row-start: 2;
	}

	div#extra{
	grid-column-start: 2;
	grid-row-start: 3;
	}
	
	<?php
	break;
case 28:
	?>
	
	div#container {
	grid-template-columns: 1fr 1fr;
	}

	div#header, div#footer{
	grid-column-start: 1;
	grid-column-end: span 2;
	}

	div#navigation{
	grid-column-start: 2;
	grid-row-start: 3;
	}

	div#wrapper{
	grid-column-start: 1;
	grid-column-end: span 2;
	grid-row-start: 2;
	}

	div#extra{
	grid-column-start: 1;
	grid-row-start: 3;
	}
	
	<?php
	break;
case 29:
	?>
	
	div#container {
	grid-template-columns: 1fr 2fr;
	}

	div#header, div#footer{
	grid-column-start: 1;
	grid-column-end: span 2;
	}

	div#navigation{
	grid-column-start: 1;
	grid-row-start: 2;
	}

	div#wrapper{
	grid-column-start: 2;
	grid-row-start: 2;
	}

	div#extra{
	grid-column-start: 1;
	grid-column-end: span 2;
	grid-row-start: 3;
	}
	
	<?php
	break;
case 30:
	?>
	
	
	div#container {
	grid-template-columns: 2fr 1fr;
	}

	div#header, div#footer{
	grid-column-start: 1;
	grid-column-end: span 2;
	}

	div#navigation{
	grid-column-start: 2;
	grid-row-start: 2;
	}

	div#wrapper{
	grid-column-start: 1;
	grid-column-end: span 1;
	grid-row-start: 2;
	}

	div#extra{
	grid-column-start: 1;
	grid-column-end: span 2;
	grid-row-start: 3;
	}
	
	<?php
	break;
case 31:
	?>
	
	div#container {
	grid-template-columns: 240px 1fr;
	}

	div#header, div#footer{
	grid-column-start: 1;
	grid-column-end: span 2;
	}

	div#navigation{
	grid-column-start: 1;
	grid-row-start: 2;
	}

	div#wrapper{
	grid-column-start: 2;
	grid-row-start: 2;
	}

	div#extra{
	grid-column-start: 1;
	grid-column-end: span 2;
	grid-row-start: 3;
	}
	
	<?php
	break;
case 32:
	?>
	
	div#container {
	grid-template-columns: 1fr 240px;
	}

	div#header, div#footer{
	grid-column-start: 1;
	grid-column-end: span 2;
	}

	div#navigation{
	grid-column-start: 2;
	grid-row-start: 2;
	}

	div#wrapper{
	grid-column-start: 1;
	grid-column-end: span 1;
	grid-row-start: 2;
	}

	div#extra{
	grid-column-start: 1;
	grid-column-end: span 2;
	grid-row-start: 3;
	}
	
	<?php
	break;
case 33:
	?>
	
	div#container {
	grid-template-columns: auto 1fr 240px auto;
	max-width: 1160px;
	margin: 0 auto;
	grid-template-rows: auto auto 1fr auto;
	}

	div#header, div#footer{
	grid-column-start: 2;
	grid-column-end: span 2;
	}

	div#navigation{
	grid-column-start: 3;
	grid-row-start: 2;
	}

	div#wrapper{
	grid-column-start: 2;
	grid-column-end: span 1;
	grid-row-start: 2;
	grid-row-end: span 2;
	}

	div#extra{
	grid-column-start: 3;
	grid-row-start: 3;
	}
	
	<?php
	break;
case 34:
	?>
	
	div#container {
	grid-template-columns: auto 240px 1fr auto;
	max-width: 1160px;
	margin: 0 auto;
	grid-template-rows: auto auto 1fr auto;
	}
	
	div#header, div#footer{
	grid-column-start: 2;
	grid-column-end: span 2;
	}
	
	div#navigation{
	grid-column-start: 2;
	grid-row-start: 2;
	}
	
	div#wrapper{
	grid-column-start: 3;
	grid-column-end: span 1;
	grid-row-start: 2;
	grid-row-end: span 2;
	}
	
	div#extra{
	grid-column-start: 2;
	grid-row-start: 3;
	}
	
	<?php
	break;
case 35:
	?>
	
	div#container {
	grid-template-columns: auto 1fr 240px auto;
	max-width: 1160px;
	margin: 0 auto;
	}
	
	div#header, div#footer{
	grid-column-start: 2;
	grid-column-end: span 2;
	}
	
	div#navigation{
	grid-column-start: 3;
	grid-row-start: 2;
	grid-row-end: span 2;
	}
	
	div#wrapper{
	grid-column-start: 2;
	grid-column-end: span 1;
	grid-row-start: 2;
	}
	
	div#extra{
	grid-column-start: 2;
	grid-row-start: 3;
	}
	
	<?php
	break;
case 36:
	?>
	
	div#container {
	grid-template-columns: auto 240px 1fr auto;
	max-width: 1160px;
	margin: 0 auto;
	}
	
	div#header, div#footer{
	grid-column-start: 2;
	grid-column-end: span 2;
	}
	
	div#navigation{
	grid-column-start: 2;
	grid-row-start: 2;
	grid-row-end: span 2;
	}
	
	div#wrapper{
	grid-column-start: 3;
	grid-column-end: span 1;
	grid-row-start: 2;
	}
	
	div#extra{
	grid-column-start: 3;
	grid-row-start: 3;
	}
	
	<?php
	break;
case 37:
	?>
	
	div#container {
	grid-template-columns: auto 1fr 240px auto;
	max-width: 1160px;
	margin: 0 auto;
	}
	
	div#header, div#footer{
	grid-column-start: 2;
	grid-column-end: span 2;
	}
	
	div#navigation{
	grid-column-start: 3;
	grid-row-start: 2;
	}
	
	div#wrapper{
	grid-column-start: 2;
	grid-column-end: span 1;
	grid-row-start: 2;
	}
	
	div#extra{
	grid-column-start: 2;
	grid-column-end: span 2;
	grid-row-start: 3;
	}
	
	<?php
	break;
case 38:
	?>
	
	div#container {
	grid-template-columns: auto 240px 1fr auto;
	max-width: 1160px;
	margin: 0 auto;
	}
	
	div#header, div#footer{
	grid-column-start: 2;
	grid-column-end: span 2;
	}
	
	div#navigation{
	grid-column-start: 2;
	grid-row-start: 2;
	}
	
	div#wrapper{
	grid-column-start: 3;
	grid-column-end: span 1;
	grid-row-start: 2;
	}
	
	div#extra{
	grid-column-start: 2;
	grid-column-end: span 2;
	grid-row-start: 3;
	}
	
	<?php
	break;
case 39:
	?>
	
	div#container {
	grid-template-columns: auto 1fr 1fr auto;
	max-width: 1160px;
	margin: 0 auto;
	}
	
	div#header, div#footer{
	grid-column-start: 2;
	grid-column-end: span 2;
	}
	
	div#navigation{
	grid-column-start: 2;
	grid-row-start: 3;
	}
	
	div#wrapper{
	grid-column-start: 2;
	grid-column-end: span 2;
	grid-row-start: 2;
	}
	
	div#extra{
	grid-column-start: 3;
	grid-row-start: 3;
	}
	
	<?php
	break;
case 40:
	?>
	
	div#container {
	grid-template-columns: auto 1fr 1fr auto;
	max-width: 1160px;
	margin: 0 auto;
	}
	
	div#header, div#footer{
	grid-column-start: 2;
	grid-column-end: span 2;
	}
	
	div#navigation{
	grid-column-start: 3;
	grid-row-start: 3;
	}
	
	div#wrapper{
	grid-column-start: 2;
	grid-column-end: span 2;
	grid-row-start: 2;
	}
	
	div#extra{
	grid-column-start: 2;
	grid-row-start: 3;
	}
	
	<?php
	break;
}
?>
} /*fermeture de la mediaqueries 1160px */
</style>
<div id="container">
<div id="header"><h1><img src='images/layout0<?php echo str_pad($layout, 2, '0', STR_PAD_LEFT) ?>.gif' />Layout n°<?=$layout?></h1><h2>Retour à la <a href="./">page d'accueil</a></h2></div>
<div id="wrapper">
<div id="content">
<p><strong>1) Content here.</strong> column long long column very long fill fill fill long text text column text silly very make long very fill silly make make long make text fill very long text column silly silly very column long very column filler fill long make filler long silly very long silly silly silly long filler make column filler make silly long long fill very.</p>
<p>very make make fill silly long long filler column long make silly silly column filler fill fill very filler text fill filler column make fill make text very make make very fill fill long make very filler column very long very filler silly very make filler silly make make column column </p>
<p>fill long make long text very make long fill column make text very silly column filler silly text fill text filler filler filler make make make make text filler fill column filler make silly make text text fill make very filler column very </p>
<p>column text long column make silly long text filler silly very very very long filler fill very fill silly very make make filler text filler text make silly text text long fill fill make text fill long text very silly long long filler filler fill silly long make column make silly long column long make very </p>
</div>
</div>
<div id="navigation">
<p><strong>2) Navigation here.</strong> long long fill filler very fill column column silly filler very filler fill fill filler text fill very silly fill text filler silly silly filler fill very make fill column text column very very column fill fill very silly column silly silly fill fill long filler </p>
</div>
<div id="extra">
<p><strong>3) More stuff here.</strong> very text make long silly make text very very text make long filler very make column make silly column fill silly column long make silly filler column filler silly long long column fill silly column very </p>
</div>
<div id="footer">
<h1>Choose the layout</h1>
</div>
</div>
<div class="layoutchoser">
<?php
for ($layout = 1; $layout <= 40; $layout++) {
	echo "<a href='" . $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] 
     . explode('?', $_SERVER['REQUEST_URI'], 2)[0] . "?layout=$layout'><img src='images/layout0" . str_pad($layout, 2, '0', STR_PAD_LEFT) . ".gif' title='$layout' alt='$layout' /><span class='legend'>$layout</span></a>";
}
?>
</div>

<script type="text/javascript">AddFillerLink("content","navigation","extra")</script>
</body>
</html>

