# Arbetsprov frontend
I arbetsprovet tittar vi på hur du löser frontend-relaterade problem med fokus på HTML, CSS och Javascript, men också på PHP för att skriva ut data. Vi kollar också om du hänger med på övriga punkter, såsom syntax och kommentarer.

Här är dokumentation över utvecklingsreglerna hos oss: [Utvecklingsregler](https://wgrsecure.se/docs/coding-style/)

Börja med att skapa en fork av detta repo för att du ska få en kopia av koden men i ett eget repo på din användare på GitHub. Gå sedan in på ditt repo kopiera urlen till ditt repo. Använd sedan valfri terminal för att klona ditt repo och börja jobba med koden i en kodeditor.

**Exempel:**
```
git clone https://github.com/din-användare/ditt-repo.git
```
**Om du inte har en installerad lokal server eller plugin, kan du följa guiden nedan:**

* Installera Node.js på din dator. Du kan ladda ned och installera det från Node.js officiella webbplats.
* När Node.js är installerat, kan du använda npm för att installera paket som hjälper dig att köra en lokal server. Ett populärt exempel är http-server.
* Öppna projektet via din kodeditor eller valfri terminal.
* Kör följande kommando i terminalen för att installera http-server:
```
npm install -g http-server
```
* Navigera till katalogen där dina filer finns i terminalen och starta servern genom att köra:
```
http-server
```
Detta kommer starta en server och ge dig en URL som vanligtvis ser ut som http://127.0.0.1:8080 eller http://localhost:8080.
* Öppna en webbläsare och skriv in URL:en som http-server gav dig för att se dina filer via localhost.

Utför ändringarna i filerna och när du känner dig klar gör en commit och push.
```
git add .
git commit -m "Commit message"
git push 
git push --set-upstream origin förnamn-efternamn-arbetsprov
```
För att vi ska kunna se ditt repo behöver du göra det publikt eller bjuda in användare wgrgh som collaborator i repot.

**Filer:**

Designen hittar du i mappen designskiss. Du öppnar den med PhotoShop, har du inte tillgång till PhotoShop kan du använda https://www.photopea.com/.

Du kan då använda den bifogade JPG-filen som referensbild istället för PSD:en. Teckensnitten som används är "Martel Sans" och "Cormorant Garamond" vilka båda hittas på Google Fonts.

Koden är baserad på MVC-modellen.

**Uppgifter:**

1. Utgå från den befintliga filstrukturen i filmappen och bygg en responsiv sida av den bifogade PSD-filen. En stor del av den HTML som behövs är redan skriven, men ändra eller lägg till som du känner behövs.

3. Uppdatera sökfunktionen i js/scripts.js så att det inte spelar någon roll om du söker med stora bokstäver eller inte.

4. Gör så att det går att söka på produkternas namn eller färg i samma sökruta.

5. I klassen “WGR_ExamplePageModel” finns en metod för att hämta data för en produkt givet ett visst id. Använd denna metod för att hämta data för produkten med id = 2. Visa sedan denna produkt i en popup-ruta (modal) vid klick på knappen ”Shoppa nu”, med en statisk köpknapp.

När du är klar återkoppla till personen du fått arbetsprovet ifrån.

Lycka till!
