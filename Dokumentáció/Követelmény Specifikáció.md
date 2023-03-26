# Követelmény Specifikáció

#### **Jelenlegi helyzet**


#### **Vágyálomrendszer**


#### **A rendszerre vonatkozó szabályok**

Bérbe vevő adatait a hatályos adatvédelmi előírások, a GDPR szabályzat alapján vagyunk kötelesek tárolni. Az elkészült honlapon szükséges megjeleníteni az Adatkezelési hozzájáruló nyilatkozatot.

A gépjárműkölcsönzés a 771 TEAOR kód alatt nyilvántartott, engedélyköteles tevékenység. Magyarországon a gépjármű bérbeadást a 2004. évi CVIII. törvény a gazdasági reklámtevékenységek általános szabályairól és az azokat módosító jogszabályok szabályozzák.

Az elkészített weboldal fejlesztése Laravel alapokon történjen. Az adatok tárolása relációs adatbázis kerüljön kialakításra.


#### **Jelenlegi üzleti folyamatok modellje**


#### **Igényelt üzleti folyamatok**



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





