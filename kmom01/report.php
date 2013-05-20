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

<h2>Kmom03: En gästbok i ditt MVC-ramverk</h2>
<h3>Vilken uppfattning fick du om CodeIgniter?
Gjorde du extrauppgiften och byggde din egna gästbok i CodeIgniter, hur kändes det?
Har du grepp om MVC-strukturen? Vad tycker du så här långt?
Studerade du något annat ramverk och läste dess manualer? Vilket och vad tyckte du om det?</h3>
<p>
	Jag tyckte CodeIgniter var lätt att komma igång med, och MVC-upplägget liknar Lydias.
	Att bygga gästboken var inga problem, följde guiden på dbwebb.
	Jag har fått grepp om hur MVC fungerar nu, när jag både provat CakePHP, CodeIgniter och Lydia.
	Jag har studerat CakePHP och CodeIgniter, och jag gillar CodeIgniter mer, man har mer kontroll av vad det är som händer. För mycket magi i CakePHP.
	<br>
	Den första delen var enkel, ändra lite basic-saker i strukturen med arv av CObject.
	<br>
	Andra delen var också enkel, men jag var tvungen att köra session_start() från CCloudChaser och fixade några andra variabler som inte fanns i tutorialen.
	<br>
	I den tredje delen så bytte man ut session mot en sqlite-databas. Stötte inte på några problem.
	<br>
	Följde instruktionerna för del fyra, gjorde den första modellen CMDatabase, inga problem uppstod.
	<br>
	Del fem var kort, bara lägga SQL-frågorna i en static-metod samt ett IHasSQL-interface.
	<br>
	Nu börjar det likna ett MVC-ramverk! Äntligen vyer!<br>

	Steg sju, info-meddelanden med sessions. Hade problem med att få det att funka. Till slut hittade jag i slutet på CObject metoden RedirectTo som fixar till det. Fick lägga in ett och-tecken i<br><code>CSession->PopulateFromSession(): \$this->data = &\$_SESSION[\$this->key];</code>. Följde tutorialen till punkt och pricka, men detta var inte med där.
	<br>
	I den sista delen så gjorde man en modell åt gästboken, strukturerat och bra! Hade problem med at mos bytte namnet på en variabel (formAction -> form_action), men annars flöt allt på bra.
</p>

<h2>Kmom04: Modeller för login, användare och grupper</h2>
<h3>Hur kändes det att jobba med CForm-klassen (den du valde)?
Har du några tankar kring hur man sparar lösenord?
Hur känns det att jobba i ramverket när det byggs ut efter hand?
Något som var extra utmanande med detta avsnitt av tutorialen?</h3>
<p>
	Jag tyckte att det var lätt att sätta sig in hur CForm fungerar, och att använda den (se min CForm playground).
	Att hasha och salta lösenord är bra, man ska aldrig spara sånt i klartext.
	Eftersom ramverket växer så snabbt så blir det svårt att hitta ibland. Hade ett problem med CreateLink, den gav fel url. Löste genom att kopiera mos's CRequest. Att bygga sitt eget ramverk istället för att följa Lydia skulle ta mig alldeles för lång tid.<br><br>


	Stötte på problem i första, fjärde och åttonde delen, massvis med metoder som saknades i t.ex. CRequest, CObject och CSession. Använde source.php på dbwebb för att hitta den saknade koden.
	Inga problem i andra eller tredje delen.
	Gjorde så att man inte kan komma till ACP utan att vara inloggad som admin (man blir redirectad till user annars).<br>

	I femte delen stötte på ett problem med sessions som jag inte lyckades att lösa, så jag lånade mos kod och fick det till slut att funka (på localhost).
	Den sjätte delen (CForm på loginsidan) gick utan problem då jag redan har använt CForm tidigare.
	Att implementera gravatar var jättelätt, har läst en del om det innan.
	Delen med lösenordshashning var lite svår att hänga med i tyckte jag, lite rörigt.
	Det var lätt att fixa validering i login-formuläret.<br><br>
	

	Överlag var tutorialen lätt att följa, och jag lärde mig en del under tiden. Detta var ett långt kursmoment, mycket som skulle in i ramverket.
</p>

<h2>Kmom05: Innehåll</h2>
<h3>Hur gick det när du byggde ut ramverket med stöd för innehåll?
Läste du materialet om XSS?</h3>
<p>
	Detta kursmoment gick bra, tyckte det var lätt att hänga med. Jag stötte inte på några större hinder. Undrar bara vad CCPage var till för? Funkar inte i mos exempel heller. Man får ett 404-meddelande. Jag har använt bb-code tidigera med stöd för fler taggar. Detta var dock i javascript åt mitt forum, och då kunde man få en förhandsgranskning av resultatet i realtid.<br>
	Jag kollade lite snabbt igenom materialet om XSS.<br><br>

	Del 1: Fick kopiera över CForm och CObject från dbwebb.se och source.php för att få in hidden m.m. och redirectToController med stöd för arguments. Fick fixa till inloggningsformuläret för det renderades dubbelt.<br>
	Del 2: Fick leta upp esc-funktionen, hittade den i themes/functions.php, sedan funkade det. Fick också leta upp makeClickable, i bootstrap.php.<br>
	Del 4: Mycket copy-paste här. CCPage fungerar fortfarande inte? Bra med olika filter! Även bbcode ska också ligga i bootstrap. Var även tvungen att ha time_diff() också. Nu funkar bbcode!<br>
	Del 5: Vad bra att HTML-koden rensas när man visar sidan, så att originalet finns i databasen. Fick uppdatera CCBlog så att filtret funkar där också.<br><br>
</p>

<h2>Kmom06: CSS-ramverk och grid layout</h2>
<h3>Vad tycker du om gridbaserad layout?
Vad tycker du om CSS-ramverk i allmänhet och vilka tidigare erfarenheter har du av dem?
Vad tycker du om LESS, lessphp och Semantic.gs?
Beskriv ditt grundtema, hur tänkte du när du gjorde det, gjorde du några utsvävningar?</h3>
<p>
	Jag har aldrig använt gridbaserad layout på det här sättet tidigare, så det är kul att lära sig nya saker.<br>
	Jag har heller aldrig använt CSS-ramverk tidigare, bara kikat lite på Twitter bootstrap. Webbdesign är inte min grej.<br>
	Jag älskar LESS, kommer aldrig använda vanlig CSS igen :D. lessphp funkar fint förutom att man inte kan ändra variabler utifrån en import. Semantic.gs verkar också praktisk att ha tillhanda.<br>
	Från början i kmom02 gjorde jag ett grundtema men jag fick anpassa om det till Lydias tema för att det inte skulle bli för svårt att följa tutorialen.
	</p>
	<p>
	Del 1: Det svårste i början var att anpassa mitt ramverks design till lydias design. Att lägga in stöd för lessphp var inga problem.<br>
	Del 2: Implementerade semantic.gs i ramverket. Kopierade lydias stilmall och mergade den med min. Boxarna ser inte exakt ut som i lydia, vet inte varför.<br>
	Del 3: Sådär, nu börjar ju det bli riktigt bra med regions och kodstrukturen tycker jag.<br>
	Del 4: Alldeles för mycket webbdesign i den här delen. Visst, det blir snyggt men det har inget med "phpmvc" att göra. Tyckte det var svårt att hänga med i delen.<br>
	Del 5: Min template/mitt tema skiljer sig från Lydias så det blev inte så mycket ändringar i den här delen.
</p>

<h2>Kmom07: CSS-ramverk och grid layout</h2>
<h3></h3>
<p>
	
	Del 1: Okej det gick ganska fort där, stötte inte på några problem förutom att jag var tvungen att göra så att CMModules ignorerar mappnamnen "." och "..".
	Del 2: 
</p>


EOD;

// Hand over to the template engine.
include(__DIR__."/theme/template.php");
