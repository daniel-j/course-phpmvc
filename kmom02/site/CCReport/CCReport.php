<?php
/**
* Standard controller layout.
* 
* @package CloudchaseCore
*/
class CCReport implements IController {

   /**
    * Implementing interface IController. All controllers must have an index action.
    */
   public function Index() {   
      global $cc;
      $cc->data['title'] = "Redovisning";
      $cc->data['main'] = <<<EQD
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

<h2>Kmom02: Grunden till ett MVC-ramverk</h2>
<h3>Namnge ditt ramverk och ge en förklaring till namnet.
Vilken är din uppfattning om grundstrukturen i Lydia?
Gjorde du några avsteg från tutorialen om Lydia? Något eget eller annorlunda?
Vad det utmanande att hänga med i tutorialen?
Hittade du ytterligare någon MVC-tutorial som du kan rekommendera?</h3>
<p>
	Detta var ett roligt kursmoment där man verkligen får insyn i koden bakom Lydia. Innan denna kursen hade jag ingen aning om vad MVC är eller hur det fungerar. Nu när jag har prövat CakePHP, CodeIgniter och Lydia och har mer förståelse om hur det hänger ihop.
	Jag valde namnet Cloudchaser för att jag tycker det låter coolt, och idag pratar man ju mycket om "molnet" när man pratar om webben. Namnet kommer från en karaktär med samma namn i My Little Pony: Friendship is Magic.
	<br>
	Jag tycker Lydia att Lydia är bra strukturerat, det är lätt att hitta vart man ska lägga saker. Tycker inte att kontrollerna ligger i src-mappen, även om de "kommer med" ramverket, jag tycker att de ska ligga i site-mappen. CRequest blir lätt rörig, samt om man har avancerade kontroller. Mycket av det som ligger i kontrollerna borde ligga i egna templatefiler (vyer, views).
	<br>
	Kursmomentet började med att man skulle få igång mod_rewrite på studentservern, och det hade jag inga problem med. Man för tänka på att inte ha samma .htaccess-fil lokalt då de har olika RewriteBase.
	Jag följde mos tutorial steg för steg och jag stötte inte på några större problem, förutom att jag fick lite problem med autoload av klasser. Det visade sig att jag hade glömt lägga klassen i en mapp med samma mapp.
	Jag har modifierat en del av koden från Lydiatutorialen, t.ex. så gjorde jag min egen funktion i CRequest för att mappa om ingångslänkar från de olika formaten. Jag modifierade default-templaten så att den hämtar language och character_encoding från config. Fick ändra \$scriptName till \$this->script_name i CRequest. Gjorde en egen create_url(), för jag hittade inte den i tutorialen. Gjorde min egna CreateLink som skapar A-taggar från en lokal länk (använder CreateUrl) och en länktext. Lade till ytterligare en kontroller, för redovisningar. Temat/template har en funktion som skapar huvudmenyn.
	<br>
	Tyckte inte det var svårt att hänga med i tutorialen. Ibland fick man en utmaning att koda själv, och det gillar jag.
	<br>
	Jag har bara kollat på CakePHP's tutorial för att bygga en blogg, och den går igenom det bra steg för steg och det är lätt att komma igång.
</p>
EQD;
   }

}