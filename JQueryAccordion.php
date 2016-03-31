
<HTML>
<HEAD>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>

<TITLE>RSSTM - Really Simple Scheduling for Toastmasters - Under Development.</TITLE>
<STYLE>
body, input{
	font-family: Calibri, Arial;
}

#roleLabel { 
    float:left; 
    padding: 0 0 0 0; 
}

#roleHolder { 
    color: blue; 
    float:right; 
    padding: 0 0 0 0; 
}

#blueText { 
    color: blue; 
}


#buttonLabel { 
    color: #F2DF74;  
    padding: 0 0 0 0; 
    font-weight: bold;
}
#redText { 
    color: red;  
}

#dateText {
    color:#F2DF74;
}

#buttonStyle {   
 /*   width:100; 
    height:50; 
    */
    -webkit-border-radius: 11px; 
    -moz-border-radius: 11px;
    padding: 0 4 0 4; 
    background-color:SteelBlue;
    right:auto;
}

#DateStyle{
	display: block;
	background-color: SteelBlue;
	font-weight: bold;
	margin: 3px;
	cursor: pointer;
	padding: 9 9 9 9px;
	list-style: circle;
	-moz-border-radius: 20px;
	-webkit-border-radius: 20px;
	border-radius: 20px;
	height: 40px;
}

#accordion {
	list-style: none;
	padding: 0 0 0 0;
	width: 430px;
}
#accordion li{
	display: block;
	background-color: #FF9927;
	font-weight: bold;
	margin: 3px;
	cursor: pointer;
	padding: 9 9 9 9px;
	list-style: circle;
	-moz-border-radius: 20px;
	-webkit-border-radius: 20px;
	border-radius: 20px;
	height: 20px;
}

#accordion ul {
	list-style: none;
	padding: 0 0 0 0;
	display: none;
}
#accordion ul li{
	font-weight: normal;
	cursor: auto;
	background-color: #fff;
	padding: 0 0 0 10px;
}
#accordion a {
	text-decoration: none;
}
#accordion a:hover {
	text-decoration: underline;
}


</STYLE>
</HEAD>
<BODY>

	<table  border="0" align=center width=1095 background="./images/TM_Logo_banner.jpg" style="height:185px;">
		<tr>
			<td width=20% style="height: 160px;"></td>
			<td valign=center width=80% style="line-height:92%; font-family:Trebuchet MS, Arial,Helvetica,sans-serif; font-size:200%; font-weight:bold; text-align: center; color:#F2DF74;vertical-align:middle; padding:10px;">
			RSSTM - Really Simple Scheduling for Toastmasters
			</td>
		</tr>
	</table>

<center><H1>Work in progress.</H1></center>
<center style=" color:blue"><b>Design Goals:</b><br>
Scheduling so simple it reminds you of "pen and paper".<br>
Generate a new agenda template from a plain text file. <br>
Uncluttered panoramic display of as many as six weeks of scheduling. <br>
<b>Input template totally independant of the Output template.</b> <br>
Print directly into Toastmasters branding agenda template without "cutting and pasting". <br>
Output generated using "Smarty.net" <br>
Intended to be developed as an "open source" project. Details later. <br>
Based on HTML5, PHP, JQuery, Javascript and MySQL. <br>


<span id="redText"><b><br>
For best view, requires latest versions of Internet Explorer, FireFox, Chrome and Safari browsers. <br></b>
</span>

<span id="blueText">
<b>*  Hoover with your mouse over roles and buttons for details  * <br>
*  Click on roles to reveal additional features  * </b><br><br>
</span>
</center>

<?php
echo '<center>';
echo '<button type="button" onclick="GetFeedback()"><h3>We appreciate your comments. Please click here for any feedback.</h3></button>';
echo '</center>';
 ?>


<?php include  './Classes/UserClass.php' ; ?>

<?php
include  './Functions/Utilities.php' ; 
?>
<center>
<table border="0" bordercolor="red">

<?php include  './AgendaTemplate/AgendaFile.php' ; ?>

<?php include  './AgendaTemplate/AgendaFile.php' ; ?>

<?php include  './AgendaTemplate/AgendaFile.php' ; ?>

<?php include  './AgendaTemplate/AgendaFile.php' ; ?>

</table>
<?php
echo '<br>';
// echo '<a href="http://test.rsstm.org/html-contact-form-captcha/html-contact-form.php" target="_blank"><b>We appreciate your Feedback.</b></a>';

// echo '<a href="http://test.rsstm.org/rsstmTesting/Smarty-3.1.12/demo/index.php" ><b>Smarty Demo</b></a>';

echo '<button type="button" onclick="GetFeedback()"><h3>We appreciate your comments. Please click here for any feedback.</h3></button>';

?>

</center>
<table width="100%"> 
<td valign="bottom" height="300px"><p></p><p></p><p></p><p></p><p></p><p></p>
<center style="color:blue">Copyright (c) 2012 - 2013 www.RSSTM.org - (Really Simple Scheduling for Toastmasters). All rights reserved. </center>
<center style="color:blue">Toastmasters International, the Toastmasters International logo and all other Toastmasters International trademarks and copyrights are the sole property of Toastmasters International and may be used only by permission. The information on this website is for the sole use of Toastmasters' members, for Toastmasters business only. It is not to be used for solicitation and distribution of non-Toastmasters material or information. </center>

</td>
</table>

</BODY>
<script>
function GetFeedback()
{
window.open("http://test.rsstm.org/html-contact-form-captcha/html-contact-form.php", "Feedback Window", "height=600, width=400,location=no,resizable=no,left=100,top=100")
}
</script>
<script>
$("#accordion > li").click(function(){

	if(false == $(this).next().is(':visible')) {
		$('#accordion > ul').slideUp(300);
	}
	$(this).next().slideToggle(300);
});

$('#accordion > ul:eq(0)').show();

</script>
</HTML>