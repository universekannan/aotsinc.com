<?php
    

    $fromAddress = "blessings@jesusfamilyministry.com";
    $toAddress = "jesusjoseph@yahoo.com";
    $EmailSubject = "From Joseph Subject";
    $emailMessage = "<b>From Joseph Email Body";

	$emailMessage = "<table cellspacing=\"1\" bgcolor=\"#669900\"><tr><td bgcolor=\"#EEFFCD\"><table bgcolor=\"#FFFFFF\"><tr><td><table width=500 border=0><tr><td colspan=2 align=center><a target=\"_blank\" href=\"http://www.tamilchristians.info\"><img border=0 src=\"http://aotsinc.com/aotsinc/images/logo.png\" /></a></td></tr>";

	$emailMessage = $emailMessage . "<tr><td align=center colspan=2><b><font color=\"#669900\" size=2>இன்றய இறை வார்த்தை</font></b></td></tr>";

	$emailMessage = $emailMessage . "<tr><td colspan=2 height=1 bgcolor=\"#669900\"></td></tr>";

	$emailMessage = $emailMessage . "<tr><td width=110><b><font color=\"#669900\" size=1>கத்தோலிக்க திருவிவிலியம்: </font></b></td><td><font color=\"#669900\" size=1></font></td></tr>";
	$emailMessage = $emailMessage . "<tr><td></td><td align=right><font color=\"#669900\" size=1></font></td></tr>";
	
	$emailMessage = $emailMessage . "<tr><td colspan=2 height=10></td></tr>";

	$emailMessage = $emailMessage . "<tr><td><b><font color=\"#669900\" size=1>பிரிவினைச் <br />சபை பைபிள்: </font></b></td><td><font color=\"#669900\" size=1></font></td></tr>";
	$emailMessage = $emailMessage . "<tr><td></td><td align=right><font color=\"#669900\" size=1> . $str_word_verse . </font></td></tr>";

	$emailMessage = $emailMessage . "<tr><td colspan=2 height=10></td></tr>";

	$emailMessage = $emailMessage . "<tr><td><b><font color=\"#669900\" size=2>Catholic Bible: </font></b></td><td><font color=\"#669900\" size=2></td></tr>";
	$emailMessage = $emailMessage . "<tr><td></td><td align=right><font color=\"#669900\" size=2></font></td></tr>";

	$emailMessage = $emailMessage . "<tr><td colspan=2 height=10></td></tr>";

	$emailMessage = $emailMessage . "<tr><td><b><font color=\"#669900\" size=2>Protestant Bible: </font></b></td><td><font color=\"#669900\" size=2></font></td></tr>";
	$emailMessage = $emailMessage . "<tr><td></td><td align=right><font color=\"#669900\" size=2></font></td></tr>";

	$emailMessage = $emailMessage . "<tr><td colspan=2 height=10></td></tr>";
	$emailMessage = $emailMessage . "<tr><td colspan=2 height=1 bgcolor=\"#669900\"></td></tr>";
	$emailMessage = $emailMessage . "<tr><td colspan=2 height=10></td></tr>";

	$emailMessage = $emailMessage . "<tr><td><b><font size=1 color=\"#669900\">திருவசன கருத்து: </font></b></td><td align=right><font color=\"#669900\" size=2></font></td></tr>";

	$emailMessage = $emailMessage . "<tr><td colspan=2 height=10></td></tr>";

	$emailMessage = $emailMessage . "<tr><td><b><font size=2 color=\"#669900\">Verse Category: </font></b></td><td align=right><font color=\"#669900\" size=2></font></td></tr>";
	
	$emailMessage = $emailMessage . "<tr><td colspan=2 height=10></td></tr>";

	$emailMessage = $emailMessage . "<tr><td align=center COLSPAN=2 align=center><font color=\"#669900\"><b>To view and share the BIBLE VERSE <a target=\"_blank\" href=\"http://www.tamilchristians.info/daily-bible-words/view-bible-words.php?wid=$str_word_id\"><img border=0 src=\"http://www.tamilchristians.info/admin/images/click-here.gif\" /></a></font></b></td><td></td></tr>";

	$emailMessage = $emailMessage . "<tr><td colspan=2 height=10></td></tr>";
	$emailMessage = $emailMessage . "<tr><td colspan=2 height=1 bgcolor=\"#669900\"></td></tr>";

	$emailMessage = $emailMessage . "<tr><td colspan=2 align=center><font size=1 color=\"#FF0000\">if you want to unsubscribe please reply to this email with subject as UNSUBSCRIBE or <a style=\"color:Red\" href=\"http://www.tamilchristians.info/daily-bible-words/unsubscribe-daily-words.php\">click here</a></font></b></td></tr>";
	
	$emailMessage = $emailMessage . "</table>";

    $headers="";

	$headers .= "From: ".$fromAddress."\r\n";
	$headers .= "Content-type: text/html; charset=ISO-8859-1";

	if (mail($toAddress,$EmailSubject,$emailMessage,$headers))
	{
		echo "true";
	}
	else
	{
		echo "false";
	}

?>