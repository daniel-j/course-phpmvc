<?php
/**
 * An empty page to show off how it looks.
 */
include("config.php");

// Create the data array which is to be used in the template file.
$data['title'] = "Om mig";
$data['meta_description'] = "PHP MVC COURSE";
$data['main'] = <<<EOD

<h1>Me-sidan</h1>

<p>Jag har programmerat JavaScript/HTML/CSS i åtta år och PHP/MySQL i fem.
På senare tid har jag även använt Node.JS (javascript på servern) och de nya HTML5-API:erna samt CSS3 och ES5.
Under kursens gång hoppas jag bli bättre på PHP och SQLite.</p>

<p>
	Jag kör Ubuntu 12.04 på min laptop, Google Chrome som standardwebbläsare och jag skriver kod i Sublime Text 2.
	Jag har alltid gillat att hålla på med datorer.
	Jag började programmera när jag var 9 år, då var det Lego Mindstroms RCX som gällde, i en grafisk miljö med block man fick bygga ihop som blev program som körs på roboten.
</p>
<p>
	Sedan köpte jag en bok om JavaScript i en second hand-butik.
	Jag kollade i den och det verkade interresant.
	Den var på svenska och hade väldigt bra steg för steg instruktioner.
	HTML kunde jag inte sedan innan, utan det lärde jag mig på vägen.
	<br/>
	CSS lärde jag mig först genom DHTML från exempel i boken, <code>position:&nbsp;absolute;</code> och sånt.
	På den tiden körde jag Netscape Navigator, och när den försvann bytte jag till Mozilla Firefox.
	<br/>
	Jag fick en gammal dator skänkt till mig, som jag gjorde om till webbserver.
	Då körde den Novells SuSE Linux Enterprise 10, men idag kör den Ubuntu Desktop 10.04.
	Ja, jag använder den fortfarande!
	På den tiden fick jag kompilera Apache, PHP och MySQL för hand, då det inte fanns något förkompilerat för SuSE.
	<br/>
	Sedan bestämde jag mig för att lära mig PHP. Jag hade sett många coola sidor på webben som var byggda med PHP, såsom gästböcker, forum, inloggningssysmtem m.m.
	Jag laddade ner en PDF-guide och skrev ut den. Sedan kom det webbsidor på löpande band (nja)!
</p>
<p>
	Idag följer jag utvecklingen HTML5 med glädje, jag älskar att använda de nya API:erna som finns tillgängliga i webbläsarna.
	Det började med 2D Canvas och HTML5 Audio, jag började göra 2D spel (The Legend of Zelda, Jazz Jackrabbit 2, 2D Minecraft) m.m.
	Kolla gärna på några av sakerna på <a href="http://djazz.mine.nu/">min sajt</a>.
</p>
<p>
	Jag studerar Webbprogrammering för att jag vill skapa kontakter, nya vänner och träffa andra likasinnade som är intresserade av datorer och webben.
	Jag försog att jag inte kommer att lära mig mycket om HTML/CSS/PHP, men C++ och att arbeta i projekt (samt andra kurser) är bra att kunna.
</p>
EOD;

// Hand over to the template engine.
include(__DIR__."/theme/template.php");
