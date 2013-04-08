<?php
/**
 * An empty page to show off how it looks.
 */
include("config.php");

// Create the data array which is to be used in the template file.
$data['title'] = "Redovisning";
$data['meta_description'] = "PHP MVC COURSE";
$data['main'] = <<<EOD

<h1>Redovisning</h1>

<h2>Kmom01: En boilerplate</h2>
<h3>
	Vilken utvecklingsmiljö använder du?
	Vad tycker du om boilerplate-konceptet i allmänhet och HTML5Boilerplate i synnerhet?
	Hur tänkte du och gick tillväga när du gjorde din me-sida med HTML5Boilerplate?
	Vad fann du extra intressant med HTML5Boilerplate?
</h3>
<p>
	Jag kör Ubuntu, Google Chrome och Sublime Text 2.
	Jag gillar boilerplate-konceptet, då det mesta man behöver redans finns tillgängligt, t.ex. normalize.css, index.html, vanliga js-verktyg och Apache-specifika inställningar.
	Jag har använt HTML5Boilerplate tidigare i ett projekt åt IKEA (<a href="http://tekstilstipend.no/">tekstilstipend.no</a>) så att sidan skulle se likadant ut i alla webbläsare, och vara redo för HTML5.
	När jag började med kursmomentet började jag med att göra ett github-repository för kursen (se länk i menyn). Sedan laddade jag ner HTML5Boilerplate och lade in det i kmom01-mappen.
	<br>
	Tidigare hade jag aldrig riktigt satt mig in i vad som kom med boilerplate:n, så jag läste lite mer om den på dess hemsida och dbwebb. Sedan kollade jag igenom mos:s exempelkod, och lånade några delar t.ex. template-delen.
	Jag använder den senaste versionen av HTML5Boilerplate, jag kopierade inte den från mos:s sida, utan modifierade den och gjorde min egen sidstruktur.
	<br>
	Att göra själva me-sidan var inget speciellt med boilerplate jämfört med en vanlig sida, förutom att det redan fanns massa CSS man får ta hänsyn till. Till exempel så har h1, h2, h3.. annan stil än vad jag är van vid, samt att body har en line-height på 1.4.
	En sak jag gillar med HTML5Boilerplate är att stöd för Google Chrome Frame finns inbyggt, samt massa andra IE-specifika fixar. Gillar även att stöd för ios-web-apps finns out-of-the-box, med meta-taggar och touch-icons.
	Men själva boilerplate:n i sig använder sig inte mycket av HTML5, förutom en CSS-shim för HTML5-element, så de funkar någorlunda i äldre webbläsare.
</p>
EOD;

// Hand over to the template engine.
include(__DIR__."/theme/template.php");
