PHPMVC - kmom02
===============

Notes
-----

Moment 1, Skicka alla requester till index.php:
	Detta var en enkel del och jag kom igång snabbt. Jag måste köra olika .htaccess-filer på studentservern och localhost, då man inte behöver RewriteBase på localhost i mitt fall.
	Jag valde namnet Cloudchaser för att jag tycker det låter coolt och idag pratar man ju mycket om "molnet" på webben.


Moment 2, Lydia: Grundstrukturen i index.php:
	Koperade in mos kod och bytte ut allt som heter Lydia till Cloudchaser. Bytte även ut lite require mot require_once. Denna delen var lätt att följa och förstå.

Moment 3, Lydia: Frontcontroller route:
	Skrev egen kod för att hantera controller-länkar, som mos rekommenderade. Reflection i PHP har jag aldrig använt innan, undrar hur andra MVC-ramverk gör?

Moment 4, Lydia: Theme Engine Render:
	Jag modifierade default-templaten så att den hämtar language och character_encoding från config. 

Moment 5, Lydia: Vilken är webbplatsens base_url?
	Fick ändra $scriptName till $this->script_name. Upptäckte att rewrite mot /index/arg1/arg2 inte fungerar på localhost av någon anledning.

Moment 6, Lydia: Låt ramverket skapa interna länkar:
	Var tvungen att ta bort $cc->data['main'] från themes/core/functions.php då den skrev över min developer-controller. Gjorde en create_url() för mos har ingen, fast det står det i tutorialen, jag har inte lyckats hitta den i alla fall. Gjorde min egna CreateLink som skapar A-taggar från en lokal länk (använder CreateUrl) och en länktext.

Moment 7, Lydia: Städa och publicera koden på github:
	Har aldrig använt taggar förut på github.