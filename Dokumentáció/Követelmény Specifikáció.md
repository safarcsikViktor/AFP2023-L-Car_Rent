# Követelmény Specifikáció

#### **Jelenlegi helyzet**

A megrendelő egy gyorsan fejlődő, autóbérléssel foglalkozó cég, ahol rövidebb, illetve hosszabb távra lehet különféle kategóriájú járműveket bérelni. Jelenleg 5 alkalmazottja van a vállalkozásnak:
-négy személy, akik az autókat bemutatják az érdeklődő bérlőknek,
-egy cégvezető, aki az anyagi dolgokkal foglalkozik, kiutalja a fizetéseket, rendszerezi a bevételeket, és pénzügyi terveket készít.
A cég jelenleg még nem rendelkezik weboldallal, de a későbbiekben mindenképp szeretnének létrehozni egy weboldalt a leendő ügyfeleik elérése érdekében. Egyelőre csak egy kis bérelt irodával rendelkeznek, ahonnan 3 autó bérelhető. Kizárólag közösségi oldalakon hirdetik magunkat, reklámra még nem költenek. Az érdeklődőkkel jobbára telefonon, esetleg emailben tartják a kapcsolatot. Az aktuális bérelhető járműveket a közösségi oldalakon, és egy katalógusban lehet megtekinteni a cég irodájában. További érdeklődés esetén a helyszínen meg tudják mutatni az érdeklődőnek az autót, amennyiben az, az adott időpontban nincs más részére bérbe adva. A nyilvántartás egyelőre Excel táblázatban valósul meg, minden személyes és pénzügyi adat ilyen formában van tárolva.

#### **Vágyálomrendszer**


#### **A rendszerre vonatkozó szabályok**

Bérbe vevő adatait a hatályos adatvédelmi előírások, a GDPR szabályzat alapján vagyunk kötelesek tárolni. Az elkészült honlapon szükséges megjeleníteni az Adatkezelési hozzájáruló nyilatkozatot.

A gépjárműkölcsönzés a 771 TEAOR kód alatt nyilvántartott, engedélyköteles tevékenység. Magyarországon a gépjármű bérbeadást a 2004. évi CVIII. törvény a gazdasági reklámtevékenységek általános szabályairól és az azokat módosító jogszabályok szabályozzák.

Az elkészített weboldal fejlesztése Laravel alapokon történjen. Az adatok tárolása relációs adatbázis kerüljön kialakításra.


#### **Jelenlegi üzleti folyamatok modellje**

Járműbérlési ajánlatok nyilvántartása: 
A bérelhető járművek részleteinek megérdeklődése a tulajdonostól, majd azok rögzítése táblázatos formában. Stock fotók vásárlása az elérhető gépjárművek illusztrálására, azok beillesztés egy sablon dokumentumba, a paraméterek átírása, majd dokumentum nyomtatása a katalógus részére.

A kibérelhető gépjármű díjának meghatározása: 
A gépkocsi igénybevételénél az árra vonatkozó szabályokat tekintve megkülönböztetünk magánszemélyeket és vállalkozókat. Az óradíj meghatározásánál szintén szerepet játszanak olyan tényezők, mint a gépkocsi vételára, modellje, gyártásiéve és a karbantartással járó költségek. A benzinár jövőbeli növekedése befolyásolhatja az óradíját.
Drágább gépjárműveknél kaució letételével biztosítja be a cég a szolgáltatást igénylő személy gondatlanságából keletkező károk esetén a javítással járó költségeket. Amennyiben a gépjármű sértetlen, ugyanolyan állapotban kerül a bérlés után visszaadásra, mint amikor azt a bérlő átvette, a kaució teljes összege visszaadásra kerül.

Ajánlatok meghirdetése:
Az elérhető gépjárművek fényképpel és árral ellátott meghirdetése kísérő szöveggel, különböző közösségi oldalakon (esetlegesen infuleszerek bevonásával) vagy cég ismertetése félperces figyelemfelkeltő, illetve lényegre törő rádiós hirdetések formájában.  A hirdetés mindkét változatának tartalmaznia kell a cég nevét és elérhetőségét. 

#### **Igényelt üzleti folyamatok**

•	Felhasználói fiók birtokában:
  Bejelentkezés: főoldal => bejelentkezés gomb => felhasználói azonosító és jelszó megadása
	Új ajánlatkérés: bejelentkezés felhasználói jogkörrel => menü => ajánlatkérés => új ajánlatkérés => adatok kitöltése => véglegesítés 
	Profil szerkesztése: bejelentkezés felhasználói jogkörrel => menü => Profil ikon => profiladatok szerkesztése => véglegesítés 
	Ajánlatkérés elvetése: bejelentkezés felhasználói jogkörrel => menü => ajánlatkérés => ajánlatkéréseim => ajánlatkérés törlése => véglegesítés
  
•	Admin fiók birtokában:
	Admin belépés: főoldal => bejelentkezés => admin azonosító és jelszó megadása
	Új jármű feltöltése: bejelentkezés adminisztrátori jogkörrel => menü => Járművek kezelése => új jármű felvitele => adatok kitöltése => véglegesítés
	Jármű adatok módosítása: bejelentkezés adminisztrátori jogkörrel => menü => járművek kezelése => hirdetés szerkesztése => adatok módosítása => véglegesítés
	Jármű törlése: bejelentkezés adminisztrátori jogkörrel => menü => járművek kezelése => jármű törlése => véglegesítés
	Elérhetőség deaktiválása: bejelentkezés adminisztrátori jogkörrel => menü => járművek kezelése => hirdetés szerkesztése => deaktiválás => véglegesítés

•	Felhasználói fiók nélkül:
	Regisztráció: főoldal => regisztráció gomb => adatok kitöltése => véglegesítés
	Keresés: a felhasználó a keresőmezőbe beírja a keresni kívánt kulcsszavakat => keresés => találatok megjelenítése
	Részletes keresés: a felhasználó a részletes keresés opciót választja ki => megadja a keresés specifikációit => keresés => találatok megjelenítése
	Információ a cégről: főoldal => rólunk


#### **Követelménylista**
KÓD - MEGNEVEZÉS
K1 - Regisztráció és bejelentkezési lehetőség jogosultsági szintekkel (Bérbeadó-Bérlő)
K2 - Egyszerűen értelmezhető, lényegre törő letisztult felület
K3 - Járművek adatai tárolása adatbázisban
K4 - Járművek böngészése szűrési opciókkal
K5 - Kép tárolási lehetőség a bérelhető járművekről
K6 - Adatbázisban rögzített jármű törlése, módosítása és új hozzáadása
K7 - Kiválasztott járműről információ lekérés (Foglalt -e, bérlési díj stb.)
K8 - Bérbe adott járművek nyomonkövetése a szükséges információkkal
K9 - Bérlők adatai tárolása adatbázisban
K10 - Járművek kártörténete és egyéb események nyomonkövetése


#### Fogalomtár

Gépjármű: gépjármű alatt értjük a cégünk által bérbadásra kínált személy- és haszongépjárműveket, motorokat egyaránt. A gépjárművek különböző meghatározott paraméterekkel rendelkeznek.

Műszaki paraméterek: Ide tartozik a motor típusa, teljesítménye, a kivitel, gyártási év, üzemanyag típus, hajtáslánc, tömeg, beltéri és kültéri adatok, üzemanyagfogyasztás, gumiabroncsok

Beltéri adatok: Ide tartozik az ülések száma, a csomagtartó mérete, valamint az utastér felszereltségének jellemzői (légzsák, klíma, vezetéstámogató rendszerek, egyéb kényelmi funkciók)

Kültéri adatok: ajtók száma, jármű színe, fényszóró fajtája.

Bérleti díj: A bérleti díj napidíjként kerül felszámításra és minden megkezdett 24 óra egy újabb napnak számít. A bérleti díj az üzemanyag költségét nem tartalmazza.

Biztosítások: Felelősség biztosítás (TPI), Önrész csökkentő törésbiztosítás (CDW) – Az önrész mértékéig csökkenti a bérlő
felelősségét káresemény esetén /casco biztosítás/, Lopásbiztosítás (TI) – Lopás esetén nyújt fedezetet

Önrész (Excess): Az az összeg, amelynek mértékéig a bérlő felelősséggel tartozik a bérautóban keletkezett kárért. 

Kár: Minden olyan kárért a bérlő tartozik felelősséggel – kivéve, ha az bizonyítottan a jármű műszaki meghibásodásából eredően következett be –, amely a szerződés kezdetén nem volt jelezve. Felelősségének összegszerű felső határa a szerződésben vállat önrésztől függ.





