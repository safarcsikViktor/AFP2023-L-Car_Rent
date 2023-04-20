
# Rendszerterv



### 1. A rendszer célja

A cél egy olyan reszponzív weboldal létrehozása, melyet pc-ről, tabletről és okostelefonról is könnyűszerrel el lehet érni. Egy gépjárműveket bérelhető weboldalról van szó, a megbízó erre a felületre szeretné áttelepíteni az eddig papír alapon vagy táblázatok formájában létező rendszerét, adatbázisát. A weboldalra látogatók szabadon megtekinthetik az adatbázisban szereplő autókat, szűréseket végezhetnek rajtuk a kereső funkció segítségével, és felvehetik a kapcsolatot az bérbeadó céggel. Lehetőség van regisztrációra is. A regisztrált felhasználók láthatják az eddig kibérelt járműveket.

További funkciókat lehet elérni regisztrált bérlő és admin szerepkörrel rendelkező felhasználóknak. Járművet bérelni csak regisztráció után lehetséges, ahol el tudja menteni a rendszerben a bérléshez szükséges adatokat. Az admin ugyebár gyakorlatilag szabadon megtehet bármit a weboldalon, az egész oldalt megváltoztathatja, ezért az ő jogosultságait felesleges részletezni.

Az oldalnak nem célja felhasználói profilokat létrehozni, minden felhasználó csak az elenyésző mennyiségű saját adatait nézheti meg és módosíthatja szükség esetén. Nem célja semmiféle jogi tanácsadást nyújtania.

### 2. Projektterv

####    2.1 Projekt szerepkörök
   A projektet a senior projektvezető fogja össze, a projektben további 4 személy dolgozik. A projekten dolgozó személyek a feladatokat rendszeresen online megbeszélések keretében osztják fel egymás között, a projekt előrehaladását Kanban módszerrel követjük nyomon (Trello). A projektben dolgozó emberek egyformán felelősek a feladatkörükhöz tartozó dokumentáció elkészítéséért és a programozási feladatok helyes elvégézésért is. A projektben részt vevő személyek pontos listája az alábbi:
   
|Szerepkör|Név|Feladatok|
|:----------------------------:|:---------------------------------------------:|--------------------------------------------------------------------------|
|Projektvezető|Safarcsik Viktor|projekt irányítása, határidők felügyelete, projekt haladásának biztosítása|
|Projekt munkatárs|Nyíri Tímea|dokumentáció készítése, programozás, tesztelés|
|Projekt munkatárs|Horváth Krisztián|dokumentáció készítése, programozás, tesztelés|
|Projekt munkatárs|Czinege Genovéva|dokumentáció készítése, programozás, tesztelés|
|Projekt munkatárs|Tóth Levente|dokumentáció készítése, programozás, tesztelés|

####    2.2 Ütemterv

A szükségletek felmérése és a projekt dokumentáció elkészítése a projekt első nagy fázisa, mely szintén két nagyobb egységre bontható: a Funkcionális specifikáció és a Rendszerterv elkészítésére. Ezen dokumentumok elkészítését követi a programozás fázis, majd a tesztelés, hibajavítás. A dokumentációkészítés nem zárul le véglegesen a Rendszertervvel, hanem a projekt egészét végigkíséri.

A projekt időbeli előrehaladását az alábbi Gantt-diagramm szemlélteti:

![CarRent](https://user-images.githubusercontent.com/48880572/229902903-7b8631e5-71bc-4946-86b1-83fdb8c648aa.png)

####    2.3 Projekt mérföldkövek

   - I. Projekt kezdeti dokumentáció elkészítése - Funkcionális specifikáció, Rendszerterv
   - II. Rendszertervnek megfelelő programozási feladatok
   - III. Elkészült fejlesztés teszetelés, hibajavítás
   - IV. Projekt lezárása

### 3. Üzleti folyamatok modellje

#### 			3.1 Üzleti szereplők

​Látogató: Szabadon böngészheti a bérelhető autók adatait, szűréseket végezhet a keresővel, kinagyíthatja a fotókat, elolvashatja a Rólunk szekciót, valamint regisztrálhat.

​Tag: A fentebb felsoroltakon kívül elmenthet magának hirdetéseket, bérelhet autót.

​Admin: A fentebb felsoroltakon kívül admin jogosultsági körrel ruházhat fel felhasználókat, valamint el is veheti ezeket a jogokat, és bármikor törölheti bárkinek az accountját. A weboldal szerkesztéséhez is kizárólagos joga van.

#### 			3.2 Üzleti folyamatok

   - Autók böngészése

     Bárki szabadon megteheti, regisztráció nélkül. A főoldalon egy egyszerűsített kereső fogadja a látogatót, melynek igény szerinti kitöltése után, a Keresés gombra kattintva egy új lap töltődik be, ahol fel vannak sorolva a keresési feltételeknek eleget tevő autók. Ha további szűréseket szeretne végezni, akkor a főoldalon a kereső alsó sarkában található Részletes kereső linkre kattint. Ekkor betölt egy új oldal, ahol sokkal több opciót lehet megadni a keresett ingatlannal kapcsolatosan. Amennyiben a látogató további információt szeretne egy, a felsorolásban szereplő ingatlanról, annak szövegére kattintva megtekintheti az ingatlan részletes adatlapját.

   - Regisztráció

     A főoldalon a felső menüsorban a Regisztráció gombra kattintva betöltődik egy egyszerű regisztrációs űrlap. Itt meg kell adni egy érvényes email címet és egy hozzá tartozó jelszót, majd a Regisztráció gombra kattintva be is fejezhetjük a folyamatot.

   - Felhasználó adatainak megváltoztatása

     A regisztrált és bejelentkezett tagok bármikor módosíthatják az adataikat. Bejelentkezés után a felső menüsorban megjelenik az adott felhasználó email címe. Erre rákattintva megjelenik a felhasználó adatlapja, ahol átírhatja bármely adatát, majd az Elfogad gombra kattintva véglegesítheti a módosításokat.

   - Bármely hirdetés módosítása/törlése

     Ez a lehetőség kizárólag admin jogosultsággal érhető el. Bármely gépjármű adatlapjára navigálva az említett felhasználók találnak egy Adatlap szerkesztése gombot, melyre rákattintva a fentebb részletezett módon végezhető el az adatok módosítása vagy a hirdetés törlése.

#### 			3.3 Üzleti entitások

   - gépjármű
   - bérlő
   - bérbeadó

### 4. Követelmények

#### 4.1 Funkcionális követelmények

- A felhasználó bejelentkezés nélkül képes használni az oldal bizonyos funkcióit. Tehát a keresést, részletes keresését, az oldal tulajdonosairól szóló "rólunk" részét, a regisztrációs menüt és a bejelentkezési menüt. Ezeknek megfelelően szükséges az oldalon történő navigálást és megjelenést kezelni. 

  A keresés és a részletes keresés során az oldal az adatbázisban tárolt adatokat tárolt eljárások és lekérdezések segítségével szűrve kapja meg. Így a felhasználó a teljes adatbázisban vagy az adatbázis egy részhalmazában képes keresni.

  A regisztrációnál és a bejelentkezésnél az oldal szintén adatbáziskapcsolatot használ a felhasználó azonosítására vagy a felhasználói fiók létrehozására. Minden felhasználó számára egyedi azonosító(id) generálódik, amely alapján a felhasználó később azonosításra kerül. Mind a regisztráció és a bejelentkezés esetében az adatokat ellenőrizve továbbítja az oldal az adatbázis felé, ezzel elkerülve az esetleges hibák előfordulását. 

- A bejelentkezett felhasználó számára az oldalon megjelennek az új funkciók. Ilyen a felhasználói fiók szerkesztése és a foglalás törlése.

  A felhasználói fiók szerkesztésekor az adatbázisban a felhasználót leíró adatokat lehet megváltoztatni. Ehhez a megváltoztatni kívánt adatokat szükséges megadni. A bevitt adatok ellenőrzésre kerülnek, ezután az adatbázissal kerül kiépítésre a kapcsolat és a megadott adatok az adatbázisban is megváltoztatásra kerülnek.

  Új hirdetés feladásakor az adatbázisban egy új rekord kerül rögzítésre, amelynél egyedi azonosító(id) generálódik a hirdetés azonosítása érdekében, és az adminisztrátor által megadott adatok az adatbázisban rögzítésre kerülnek.

  A hirdetés szerkesztésekor, törlésekor, aktiválásakor/deaktiválásakor először az adatbáziskapcsolat megtörténik az adminisztrátor azonosítója alapján majd megjelenik az összes feladott hirdetés. Ezután van lehetőség szerkeszteni, törölni, deaktiválni. 

  A törlés és az aktiválás/deaktiválás egy gomb segítségével történik, amelyre rákattintva a hirdetés véglegesen törlésre kerül az adatbázisból vagy a rekord aktív mezőjének értéke változik meg.

  A hirdetés szerkesztése során az oldal az adatokat ellenőrzötten továbbítja az adatbázis számára, ahol a rekord megadott adatai változnak meg.


  A hirdetés szerkesztése során az oldal az adatokat ellenőrzötten továbbítja az adatbázis számára, ahol a rekord megadott adatai változnak meg. 

#### 4.2 Nem funkcionális követelmények 

-	**Termék követelmények:**

    - Az oldal a kéréseket adatbáziskapcsolat kiépítésétől függetlenül 1000ms-on belül képes végrehajtani
    - Az adatbázisban a felhasználó csak a saját adatait képes megváltoztatni és a foglalásait törölni.
    - Az adatbázissal történő kommunikáció, amennyiben lehetséges tárolt eljárásokon keresztül történjen.
    - A szoftver mérete nem haladja meg az 1GB-ot.
    - Az oldal könnyen kezelhető legyen kisebb informatikai ismeretekkel rendelkezők számára is. Legyen átlátható és esztétikus. 

-	**Szervezeti követelmények:**

    -	A szoftver a szerződésben meghatározott időpontig, az előzetesen meghatározott követelményeknek megfelelő állapotban átadásra kerül. Ellenkező esetben a szerződésben feltüntetett kötbér megfizetése terheli a fejlesztő céget.
    -	A program az előzetesen meghatározott rendszereken használható és a megadott gépekre telepítésre kerül.

-	**Külső követelmények:**

    -	A szoftverfejlesztő cég szakemberei és a megrendelő a kapcsolattartást az előzetesen meghatározott gyakorisággal folytatja. Amennyiben a fejlesztés előrehaladása érdekében szükséges további konzultáció, azt időpontegyeztetés után szükséges beiktatni.
    -	A felhasználók nem szerezhetnek tudomást a többi felhasználó adatairól.
    -	A szoftverfejlesztő cég munkatársainak a jóváhagyott etikai kódex alapján kell viselkedniük.


### 5. Funkcionális terv

A rendszerünkben két csoportot különböztetünk meg. Az egyik csoport az ügyfelek, akik gépjárművet szeretnének bérelni, esetleg tájékozódni az elérhető hirdetésekkel és változásokkal kapcsolatban. Másik nagy csoport a hirdetéseket kezelő munkatársak, akik ebben segítséget nyújtanak az ügyfeleknek. Értelemszerűen az utóbbi csoport nagyobb felhasználó jogosultságokkal rendelkezik, például módosíthatja a feltöltött hirdetés adatait, illetve törölheti akár az ügyfeleket vagy a hirdetéseket is.

Rendszerhasználati esetek és lefutásaik:

<p align="center">
    <img src="https://user-images.githubusercontent.com/83767448/229844788-fa96d968-c6df-4378-b5b2-e3cdc2150525.png">
</p>

<p align="center">
    <img src="https://user-images.githubusercontent.com/83767448/229853350-d6c9d783-68c6-4b45-b506-caabafe64f35.png">
</p>

<p align="center">
    <img src="https://user-images.githubusercontent.com/83767448/229905387-9ef27f5d-809b-4d7f-b0a0-b4574754a3da.png">
</p>

<p align="center">
    <img src="https://user-images.githubusercontent.com/83767448/229857729-6e90a60d-7b6e-4817-aa04-9ad55767f2a3.png">
</p>

<p align="center" >
    <img src="https://user-images.githubusercontent.com/83767448/229856749-8a1a24a3-a921-423a-8ab4-345845bf115e.png">
</p>
    


### 6. Fizikai környezet
- Hardver és hálózati topológia:
  - Az alkalmazás web platformra készül
  - Interneten keresztül bárki elérheti a weboldalt egy böngészőn keresztül
  - Szerver-kliens topológia

- Fizikai alrendszerek:
  - Webszerver: 80-as porton elérhető HTTP szolgáltatás
  - Adatbázis: MySQL
  - Kliens gép: internethozzáféréssel, megfelelő böngészővel és kellő hardverrel rendelkező eszköz

- Fejlesztői eszközök:
  - Visual Studio Code
  - 
  - 
  - 

### 7. Absztrakt domain modell

A projekt során létrehozandó terméknek alkalmasnak kell lennie a cég munkatársaihoz tartozó adatok tárolására, valamint érdeklődők adatainak tárolására is, akik felhasználóként regisztrációt hozthatnak létre, böngészhetik a felületet és ajánlatot kérhetnek. Ehhez tárolni kell a cég által bérbeadandó autók adatait is, aktuális státuszukat (bérelt, elérhető, szervzíz alatt, stb), valamint az esetlegesen az autóban keletkezett károk adatait is.

A gépkocsik adatait a cég munkatársai tudják módosítani, új kocsikat felvinni, illetve korábbiakat törölni. Bizonyos gépjármű adatok megadása kötelező, más adatok megadása opcionális.

Lehetőséget kell biztosítani érdeklődő felhasználók regisztrációjára, a regisztráció során megadott adatokat, valamint a bérlések adatait tárolni kell és visszakereshető formában biztosítani kell a kapcsolatot a gépjármű és a felhasználó között.

Szintén visszakövethető formában kell tárolni a gépjárművek státuszváltozásait, mikor, meddig, ki által volt kibérelve, milyen károk keletkeztek benne, mikor volt szervizelve, milyen aktuális felszereltséggel és műszaki állapottal rendelkezik a jármű.

<p align="center" >
    <img src="https://user-images.githubusercontent.com/85219194/231386158-0832c4ab-2d61-42d0-8792-084dca2be88e.png">
</p>


### 8. Architekturális terv

A rendszer működéséhez szükség van egy adatbázis szerverre. Erre a célra egy MySql adatbázis lett létrehozva. A weboldal és az adatbázis közötti kommunikáció PDO segítségével történik.

Webes felületen lehet elérni a felhasználói interfészt, ami webszerveren keresztül kommunikál az adatbázissal. A weboldal internetes kapcsolattal érhető el a felhasználó eszközéről.

A rendszer biztonsági funkciójaihoz tartozik az, hogy a weboldal rendelkezik adminisztrációs fiókkal. Az admin fiókból lehetséges kezelni a felhasználók hirdetéseit.

<p align="center" >
    <img src="https://user-images.githubusercontent.com/85219194/231390924-72bb1892-45b3-46f8-8a97-371287091837.png">
</p>


### 9. Adatbázisterv

Az adatbázisban tároljuk a dolgozók, a regisztrált felhasználók, a bérelhető autók, a bérleti szerződések és a káresemények adatait. Az adatbázis csillagsémának megfelelően került kialakításra.

<p align="center" >
    <img src="https://user-images.githubusercontent.com/85219194/233439213-b6128957-f2f4-45ab-a71d-9a9f60f9d9ca.JPG">
</p>


### 10. Implementációs terv

### 11. Tesztterv

A tesztelés során törekszünk a Funkcionális Specifikációban elfogadott követelménylista alapján összeállítani a teszteseteket, és a meghatározott követelmények tesztelését a lehetőleg legszélesebb körben lefedni.

A projektmunkatársak egyaránt végeznek teszteléseket is a fejlesztés mellett. A tesztelés eredményeit a tesztjegyzőkönyvben szükséges dokumentálni minden tesztesethez kapcsolódóan egy külön lapon. A tesztjegyzőkönyv sablonja a Rendszerterv mellékleteihez van csatolva, ott van lehetőség a letöltésére.


<p align="center">
    <img width="500px" height="650px" src="https://user-images.githubusercontent.com/83767448/231597205-e8aae607-c438-4de7-953a-48319c3a76ea.png">
</p>

A tesztelés a fejlesztés során is használt környezetben történik. A fejlesztői teszteket a programozás során a programozó automatikusan elvégzi, erről külön tesztjegyzőkönyv készítésére nincs szükség. A prototípus teszteket, integrációs teszteket a projektmunkatársak a megadott feladatmegosztás szerint végzik el, és az eredményt minden esetben dokumentálják a megadott tesztjegyzőkönyv sablon kitöltésével.

#### 11.1. Tesztesetek a megadott követelménylista alapján

| Teszteset száma | Teszteset leírása | Elvárt eredmény |
|:---------------:|:-----------------:|-----------------|
|1.1.|Regisztráció és bejelentkezési lehetőség jogosultsági szintekkel (Bérbeadó-Bérlő)|A felhasználó szerepkörének megfelelően tudja használni a weboldalt|
|1.2.|Profilba belépés - sikeres|Helyesen megadott bejelentkezési adatok után sikeresen be lehessen lépni a saját Profil oldalra|
|1.3.|Profilba belépés - sikertelen|Helytelen felhasználónév esetén hibaüzenetet adjon|
|1.4.|Profilba belépés - sikertelen|Helytelen jelszó esetén hibaüzenetet adjon|
|2.1.|Navigálás az oldal menüpontjai között|Minden menüpont a helyes aloldara mutasson, a navigáció során hibaüzenet ne jelenjen meg|
|2.2.|Egymással összeillő, kellemes színek a weboldalon|A megrendelő által elvárt kinézete legyen az oldalnak|
|2.3.|Halvány, kellemes színek a weboldalon|A megrendelő által elvárt kinézete legyen az oldalnak|
|3.1.|Meghirdetett gépjárművek lista nézetben|A hirdetések lista nézetben, egymás alatt, görgethetően jelenjenek meg|
|3.2.|A hirdetések adatai relációs adatbázisban legyenek tárolva|A Rendszertervben megadott adatmodell szerint kerüljenek tárolásra az adatok|
|3.3.|A hirdetések adatai relációs adatbázisban legyenek tárolva - új hirdetés|Új hirdetések adatai beíródjanak az adattáblákba|
|4.1.|Böngészés szűrési opciókkal|Böngészés szűrési opciókkal elérhető regisztrált, illetven nem regisztrált felhasználók számára is,a szűrés végrehajtásához kulcsszavak használata szükséges|
|5.1|Hirdetés feladása - kötelezően töltendő adatok|A kötelezően töltendő adatokkal együtt fogadja csak el a hirdetésfeladást|
|5.2.|Hirdetés feladása - képfeltöltés|Képfeltöltés és képaláírás megfelelően megjelenjen a hirdetés oldalán|
|6.1.|Adatbázisban rögzített jármű törlése |A hirdetést vagy járműadatot admin jogusultsággal lehessen törölni.|
|6.2.|Adatbázisban rögzített jármű módosítása|A hirdetést vagy járműadatot admin jogusultsággal lehessen módosítani.|
|7.1.|Kiválasztott járműről információ lekérés|Gépjárműről olyan információkat lekérni mint például a gyári adatok, bérlési díj vagy azt, hogy rendelkezésre áll-e még bárkinek joga van.|
|8.1.|Bérlők adatai tárolása adatbázisban|A Rendszertervben megadott adatmodell szerint kerüljenek tárolásra az adatok |
|8.2.|Bérlők adatmódosítása|A felhasználóknak van joguk a saját profiladataikat szerkeszteni|
|8.3.|Foglalás lemondása|A felhasználó törölheti a foglalását|
|9.1.|Járművek kártörténete és egyéb események nyomon követése|A Rendszertervben megadott adatmodell szerint kerüljenek tárolásra a kártörténeti és karbantartási adatok|

#### 11.2. Egyéb teszteseket
- 11.1. Terheléses teszt
- 11.2. Biztonsági teszt a szenzitív adatok tárolására

### 12. Telepítési terv
Kliens: Modern böngésző telepítése és állandó stabil internetkapcsolat szükséges a weboldal használatba vételéhez.

Szerver: Apache-PHP-MySQL struktúrát támogató tárhelyre lesz szükség.

### 13. Karbantartási terv
A karbantartási terv részeként magába foglalja a weboldalról készült rendszeres biztonsági mentést aminek segítségével meghibásodás esetén az utolsó működőképes állapot visszaállítására lehetőség legyen.
Továbbá ide tartozik a bejelentések során érkezett hibák kijavítása, illetve az általános átvizsgálás során észlelt hibák javítása és a felmerülő új igények implementálása is.
