<?php 
echo '<?xml version="1.0" encoding="UTF-8" ?>';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>GIGRA GAME | Browsergame | Weltraum | Strategie </title>
		<!--link type="text/css" href="/jquery-ui/css/ui-darkness/jquery-ui-1.8.16.custom.css" rel="stylesheet"/-->
		<link type="text/css" href="style.css" rel="stylesheet"/>
		<script type="text/javascript" src="/jquery-ui/js/jquery-1.6.2.min.js"></script>
		<script type="text/javascript" src="/jquery-ui/js/jquery.corner.js"></script>
		<!--script type="text/javascript" src="/jquery-ui/js/jquery-ui-1.8.16.custom.min.js"></script-->
		<meta name="description" content="Gigra ist ein kostenloses Browsergame das im Weltraum Spielt in dem man mit vielen echten Gegnern Handeln und K&auml;mpfen kann" />
		<meta name="keywords" content="Gigra, Browsergame, XNova, stytex.de" />

<!--		<script type="text/javascript" src="js/custom.js"></script> -->

</head>
<body>

	<div id="body">
		<!--header start-->
		
		<div id="header">
			<a href="http://www.gigra-game.de"><img src="./logo.png" alt="Gigra Logo"/></a>
		</div>
		
		<!--header ende-->
		<!--menu start-->
		<div id="menu">
		<ul class="button-list">
	
				 <li><a href="#" class='button' onclick="$('.hiddencontent').css('display','none');$('#about').css('display','inline');">&Uuml;ber das Spiel</a></li>
				
				 <!-- <li><a href="#" class='button' onclick="$('.hiddencontent').css('display','none');$('#news').css('display','inline');">News</a></li> -->
				
				 <li><a href="#" class='button' onclick="$('.hiddencontent').css('display','none');$('#registrieren').css('display','inline');">Registrieren</a></li>
				
				 <!-- <li><a href="#" class='button' onclick="$('.hiddencontent').css('display','none');$('#images').css('display','inline');">Screenshots</a></li> -->
				
				 <!-- <li><a href="http://www.gigra-game.de/forum/" class='button' target="_blank">Forum</a></li> -->
				
				 <li><a href="#" class='button' onclick="$('.hiddencontent').css('display','none');$('#impressum').css('display','inline');">Impressum</a></li>

</ul>
		</div>
		<!--menu ende-->
		<!--main start-->
		<div id="main">
			<!--login start-->
			<div id="login">
				<form method="post" action="http://uni1.gigra-game.de/login.php">
					<input type="hidden" value="y" name="i"/>
					<label for="name">Benutzername:</label>
					<input type="text" maxlength="115" size="15" value="" name="name" id="name"/><br/>
				
					<label for="pw">Passwort:</label>
					<input type="password" maxlength="40" size="15" name="pw" id="pw"/><br/>
					<!--
					<label for="code">Zahlencode in das Feld &uuml;bertragen:</label>
					<img width="67" height="18" alt="Code" src="http://betauni.gigra.stytex.de/captcha.php"/>
					<input id="code" type="text" style="width: 69px;" autocomplete="off" name="code"><br/>
					-->
					<label for="runde">Universum´s Auswahl:</label>
					<select name="runde" id="runde">
						<option value="1" selected="selected">Uni1 (was davon zu retten war)</option>
					</select><br/>
					
					<label for="submit"></label>
					<input type="submit" value="Login" name="submit" id="submit"/><br/>
					
					<a href="http://uni1.gigra-game.de/pwvergessen.php?runde=1">Passwort vergessen</a>
				</form>
			</div>
			<!--login ende-->
			<!--content start-->
			<div id="content">
				<div id="about" class="hiddencontent">
					<h1>Gigra-Game Browsergame</h1>
					<!-- <span class="warning"></span> -->
					<p>
					Gigra ist ein kostenloses Browsergame das im Weltraum Spielt in dem man mit vielen echten Gegnern Handeln und K&auml;mpfen kann.<br/>
					Zum Spielen brauchst du nur einen <b class="jqtt" id="jqtt1">Webbrowser</b>.
				
					<br />
					Duch Funktionen wie das <b>A</b>llianz <b>K</b>ampf <b>S</b>ystem kann man auch gemeinsam gegen st&auml;rkere Gegner k&auml;mpfen.<br/>
					</p>
					<p>
					Waren das nicht gute Zeiten?<br />
					Damals als es noch Gigra gab?<br />
					Wir waren einer der erfolgreichsten OGame Alternativen <br />und sind bis heute noch in als solche gelistet,<br />
					doch gibt es uns nicht mehr so wirklich.<br />
					<b>Gigra soll wieder leben!</b><br />
					Ich habe meinen Quellcode von 2013 aus meinen Archiven gegraben mit einer alten Datenbank. Aus nostalgischen Gr&uuml;nden betreibe ich das Projekt
 					erst einmal weiter. Es ist nicht mit gr&ouml;&szlig;eren Entwicklungen zu rechnen, jedoch kann hier wieder frei gespielt werden. 
					Der Quelltext von Gigra ist <a href="https://github.com/xetys/gigra-game-4">open-source</a> und kann frei genutzt werden. Sinnvolle &Auml;nderungen am Code durch
					Pull Requests werden hier aktualisiert. Somit kann jeder der programmieren kann, dieses Spiel weiterentwickeln. Da die eigentliche Datenbank den offenen Entwicklern vorenthalten ist,
					ist es jedem Entwickler gestattet, das Spiel selbst zu spielen. Kurz gesagt: willst du was verbessern? Tu es auf der GitHub Repo, ich merge es wenn es gut ist.

					Ansonsten viel Spa&szlig;
					<a href="http://uni1.gigra-game.de">Zum Spiel</a><br />
					<!-- <a href="http://forum.gigra-game.de">Das Forum(aufger&auml;umt, neu versioniert)</a><br /> -->
					<i>-scrippi 2011</i>
					</p>
					
					<div id="jqtt1t" class="jqttt" >IE6 oder neuer<br/> Firefox 4 oder neuer<br/>Opera 11 oder neuer<br/>Safari f&uuml;r IPhone/IPod<br/>...</div>
				</div>
				
				<div id="news" class="hiddencontent">


				</div>
				
				<div id="registrieren" class="hiddencontent">
					<h1>Registrieren</h1>
					<form method="post" action="http://uni1.gigra-game.de/register.php"><input type="hidden" value="y" name="i"/>
					<label for="runde"> Universum´s Auswahl: </label><select name="runde">
						<option value="1">Universum 1</option>
					</select><br/>
					<label for="ln">Benutzername:</label><input type="text" size="30" maxlength="15" name="ln" id="ln"/><br/>
					
					<label for="pname">Name ihres ersten Planeten:</label><input type="text" size="20" maxlength="20" id="pname" name="pname"/><br/>
					
					<label for="mail1">E-mail Addresse:</label><input type="text" size="30" maxlength="100" id="mail1" name="m1"/><br/>
					
					<label for="mail2">E-mail (zur Kontrolle):</label><input type="text" size="30" maxlength="100" id="mail2" name="m2"/><br/>
					
					<label for="agb">Ich akzeptiere die <a target="agb" href="http://uni1.gigra-game.de/agb.htm">Nutzungsbedingungen</a>:</label> <input type="checkbox" name="agb" id="agb"/><br/>
					
					<label for="submit"></label><input type="submit" value="Anmelden" name="submit"/>
					</form>
										<table style="margin: 0 auto;padding-left: 25px;color: #CCC;">
  <tbody><tr>
    <td>
      <center><span style="font-size: 16px;"><u><i><b>Nutzungsbedingungen / Regeln / AGB's</b></i></u></span></center>
<br>
<br>
<b>01. Datenschutz</b><br>
Der Spieler erklärt sich ausdrücklich mit der Anmeldung einverstanden, dass der Spielebetreiber von Gigra-Game.de sämtliche vom Spieler angegeben persönlichen Daten für die Dauer der Nutzung speichert.<br>
<br>
Das Spiel verwendet Cookies, die dazu dienen, das Zugriffsverhalten der Spieler zuvereinfachen.<br>
Die IP-Adresse wird gespeichert und kann (auch zum Schutz des Spielers) durch die Gigra-Game.de Leitung eingesehen werden!<br>
Dies dient vor allem dem Schutz des Spielers vor Fremdnutzung durch Dritte.<br>
<br>
Sämtliche Daten werden darüber hinaus vertraulich behandelt und nicht an Dritte weitergegeben!<br>
Ausgenommen hiervon sind offizielle Behörden bei einer Strafverfolgung.<br>
<br>
<br>
<b>02. Accounts</b><br>
1). Alle Accounts, inklusive den dazugehörigen Ressourcen, Schiffen etc. sind virtuelle Gegenstände im Spiel. Der Nutzer erwirbt kein Eigentum oder sonstiges Recht am Account. Sämtliche Rechte verbleiben beim Betreiber. Eine Übertragung von Verwertungs- oder sonstigen Rechten auf den Nutzer findet nicht statt. Bei verlussten der Ressourcen, Schiffen etc giebts kein ersatz.<br>
<br>
2). Ein Account darf nur alleine gespielt werden. Sitten ist nicht erlaubt. In absoluten Ausnahmefällen kann mit einem Admin Kontakt aufgenommen werden!<br>
<br>
<br>
<b>03. Multi <span style="font-size: 10px;">(besitzen von mehren Accounts)</span></b><br>
Das Führen mehrerer Accounts ist grundsätzlich verboten.<br>
Ist die Gigra-Game.de Leitung davon überzeugt, das es sich bei Accounts um sogenannte Multiaccounts handelt, kann das zur Sperrung aller Accounts des Spielers führen!<br>
<br>
<br>
<b>04. Pushen</b><br>
Kein Spieler darf einem anderen Spieler mutwillig Ressourcen überlassen / übergeben.<br>
Dies gilt sowohl für die Bereitstellung als auch für die Lieferung von Ressourcen!<br>
<br>
<br>
<b>05. Bashen</b><br>
Mehr als 3 Angriffe innerhalb von 24 Stunden auf den gleichen Planeten zählen als Bashen und sind verboten.<br>
<br>
Befinden sich die Parteien im Krieg, so sind weitere Angriffe erlaubt. Der Krieg muss mindestens 12 Stunden vor weiteren Angriffen im Forum erklärt werden.<br>
<br>
<br>
<b>06. Script's</b><br>
Benutzung von Tools und Manipulationen des Spielablaufs, automatische Scripte oder Programme, die das Spiel in jeglicher Hinsicht beeinflussen, sind verboten.<br>
<br>
<br>
<b>07. Bugusing</b><br>
Von Bugusing spricht man, wer durch das absichtliche Ausnutzen von Fehlern (Bugs) in dem Spiel bzw. Programmierung sich einen Vorteil verschafft.<br>
Absichtliches Bugusing ist verboten und wird geahndet.<br>
<br>
<br>
<b>08. Eroberung/Zerstörung von Planeten</b><br>
Das Erobern/Zerstören von Planeten aktiver Spieler ist untersagt. Lediglich Planeten inaktiver Spieler sind uneingeschränkt erober-/zerstörbar. Folglich dürfen die Schiffstypen "Invasionseinheit"
nicht unter dem Befehl "Invasion starten" und "Lunares Sternschiff" nicht unter dem Befehl "Planet zerstören" zu Koordinaten aktiver Spieler entsandt werden! Erlaubt der angegriffene Spieler aber offiziell die Eroberung/Zerstörung, findet diese Regel selbstverständlich keine Anwendung. In allen anderen Fällen muss eine gültige Kriegserklärung vorliegen.<br>
<br>
<br>
<b>09. Drohungen / Beleidigungen</b><br>
- Jegliche Drohungen sind grundsätzlich zu unterlassen!<br>
Wird ein Mitspieler bedroht, ist dies unverzüglich einem Admin zu melden.<br>
- Beleidigungen und Spammen sind verboten. <span style="font-size: 10px;">(<b>InGame</b> sowie <b>Forum</b>)</span><br>
<br>
<br>
<b>10. Verstösse gegen die obigen Regeln</b><br>
Verstösse gegen die oben genannten Regeln, werden je nach schwere mit einer Sperre von mind. 1 Tag bis hin zu einem vollständigen Ausschluss aus dem Spiel geahndet.<br>
Der sperrende Admin ist der zuständige Ansprechpartner für seine Sperrungen!<br>
Gründe zu Sperren sind nur vom Betroffenen beim Admin zu erfragen zu erfragen.<br>
<br>
<br>
<b>11. Haftung</b><br>
Gigra-Game.de übernimmt grundsätzlich keine Haftung für Schäden, die durch die Benutzung von Gigra-Game.de entstanden sind. Eine Haftung ist ausgeschlossen mit Ausnahme von Schäden, die durch Vorsatz und grobe Fahrlässigkeit entstehen sowie sämtlichen Schäden an Leben und Gesundheit. Diesbezüglich wird ausdrücklich darauf hingewiesen, dass übermäßige Teilnahme an Computerspielen z.T. erhebliche Gesundheitsrisiken birgt.<br>
<br>
<br>
<b>12. Premium Account</b><br>
Der Premium Account ist nicht übertragbar.<br>
<br>
<br>
<b>13. Änderungsklausel</b><br>
Der Betreiber behält sich das Recht vor, diese Nutzungsbedingungen jederzeit zu ändern oder zu erweitern.<br>
<br>
<b>Stand: 24. November 2011</b><br>
</td>
    </tr>
</tbody></table>
					
				</div>
			<!-- 	 
				<div id="images" class="hiddencontent">
					<h1>Bilder</h1>
					<br/>
<div id="slideshow">

<figure tabindex="0">
   <img src="screenshots/screen_1.jpg" alt="Gigra- Übersicht" />
   <figcaption></figcaption>
</figure>
<span></span>

<figure tabindex="0">
   <img src="screenshots/screen_2.jpg" alt="Gigra- Highrscore" />
   <figcaption></figcaption>
</figure>
<span></span>

<figure tabindex="0">
   <img src="screenshots/screen_3.jpg" alt="Gigra- Erfahrungspunkte" />
   <figcaption></figcaption>
</figure>
<span></span>

<figure tabindex="0">
   <img src="screenshots/screen_4.jpg" alt="Gigra- Spielerinformationen" />
   <figcaption></figcaption>
</figure>
<span></span>

</div>

		
				</div>
				-->
				<div id="impressum" class="hiddencontent">
					<h1>Impressum</h1>
					
					Gigra Game ist ein Projekt von stytex.de<br />
					Inhaber: David Steiman<br />
					<!-- Hauptniederlassung: Bahnhofstraße 110D, 13127 Berlin<br /> -->
					E-Mail: adinatbust - gmail und den Rest kann man sich denken. Spamschutz. <br />
					Hinweis: stytex.de und Gigra Game stellen eine Plattform zur Verf&uuml;gung, in deren Spieler Inhalte verwalten, f&uuml;r deren auschlie&szlig;lich diese selbst verantwortlich
					sind. stytex tr&auml;gt keine Verantwortung f&uuml;r gesetzeswidrige Eintr&auml;ge innerhalb des Spiels, so lange es kein fester Bestandteil des Spieles ist(z.B.: Geb&auml;udetexte,
					Beschreibungen, Systemnachrichten o.&Auml;)
					<br /><br />
					<!-- Desweiteren l&auml;uft die Entwicklung auf Grundlage einer geschlossenen und eigenen Gamesoftware. Es werden keine OpenSource-Elemente (ausgenommen von JavaScript Libraries wie jQuery) -->
					<!-- verwendet. Daher besteht kein Anspruch auf die Software. -->
					<!-- <br /><br /> -->
					Derzeit vertreibt Gigra Game keine kostenpflichtigen Bestandteile des Spiels. S&auml;mtlicher Funktionsumfang ist kostenlos. Aus diesem Grund behalten wir uns vor, keine Angabe einer Ust-ID
					auszustellen, da es kein Einkommen gibt. Sollte sich dieser Umstand &auml;ndern, so werden alle steuerechtlich relevanten Daten auf dieser Ansicht erscheinden.
				</div>
			</div>
			<!--content ende-->
		</div>
		<!--main ende-->
		<div id="footer"><a href='http://stytex.de'>stytex.de</a> &copy; 2018</div>
		<div id="fb-root"></div>
		<script type="text/javascript">
		<!--
		(function(d, s, id) { 
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) {return;}
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/de_DE/all.js#xfbml=1&appId=230519123679584";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
		//-->
		</script>
		<div class="fb-like-box" data-href="http://www.facebook.com/pages/Gigra-Game/127988533974927" data-width="500" data-colorscheme="dark" data-show-faces="true" data-stream="false" data-header="false"></div>
	</div>

	<script type="text/javascript">
	<!--
		$(".jqtt").mousemove(
		function (e) {
			var i = "#" + $(".jqtt").hover().attr("id") ;
			var j = i + "t";
			/*$(j).css("left", (e.pageX+10) + "px");*/
			/*$(j).css("top", (e.pageY+10) + "px");*/
			$(j).css("left", (e.clientX+10) + "px");
			$(j).css("top", (e.clientY+10) + "px");
			$(j).css("display","block");
			$(i).mouseout(
				function(){
					$(j).css("display","none");
				}
			);
		});
		
		$("#menu").corner("15px");
		$("#main").corner("10px");
		$("#login").corner("10px");
		$(".jqttt").corner("10px");
		$(".hiddencontent").css("display", "none");
		$("#about").css("display","inline");
		//-->
	</script>
	<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-3172175-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
