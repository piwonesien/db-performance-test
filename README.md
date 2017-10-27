# db-performance-test
Beispiel dafür, dass man eine Datenbank nicht komplett in den RAM legen muss um performante Ergebnisse zu kriegen.

In diesem Test wurde eine SQLite Datenbank mit über 2 Millionen Datensätzen befüllt. Diese wird über ein PHP Script geöffnet und ein SQL-Statement abgefragt. Jedes Ergebnis erhält danach noch einen individuellen Score zwischen 0 und 100. Die neu berechnete Ergebnisliste wird nun mit Zeit/ Anzahl der Ergebnisse in ein JSON Objekt gepackt und als JSON verschickt. 

## Ausprobieren
Dieses Skript kann von jedem ausprobiert werden, dazu einfach die Database.zip Datei extrahieren und die darin enthaltene Datenbank in das selbe Verzeichnis legen wie die index.php. Dann Apache starten und die index.php öffnen. 

## Warum PHP?
PHP ist in erster Linie bekannt dafür besonders langsam zu sein. Meine Überlegung war deshalb zu zeigen, dass wenn man selbst in einer der langsamsten Sprachen ein schnelles Ergebnis erhält es keinen Grund gibt warum es in C# nicht schneller sein sollte.

## Ergebnisse:
Auf meiner Apache-Maschine benötigt Apache (XAMPP) bei einer solchen Abfrage etwa 20-40MB RAM. Die Anfrage dauert zwischen 0,2 bis 0,5 Sekunden.
