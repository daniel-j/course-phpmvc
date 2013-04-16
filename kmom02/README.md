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

Moment 5:
	Fick ändra $scriptName till $this->script_name. Upptäckte att rewrite mot /index/arg1/arg2 inte fungerar på localhost av någon anledning.