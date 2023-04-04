
# Rendszerterv



### 1. A rendszer célja

### 2. Projektterv

####    2.1 Projekt szerepkörök

####    2.2 Ütemterv

####    2.3 Projekt mérföldkövek

### 3. Üzleti folyamatok modellje

#### 			3.1 Üzleti szereplők

#### 			3.2 Üzleti folyamatok

#### 			3.3 Üzleti entitások

### 4. Követelmények

#### 4.1 Funkcionális követelmények

#### 4.2 Nem funkcionális követelmények 

-	**Termék követelmények:**

    -   Az oldal a kéréseket adatbáziskapcsolat kiépítésétől függetlenül 1000ms-on belül képes végrehajtani
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
    <img src="https://user-images.githubusercontent.com/83767448/229857729-6e90a60d-7b6e-4817-aa04-9ad55767f2a3.png">
</p>

<p align="center">
    <img src="https://user-images.githubusercontent.com/83767448/229856749-8a1a24a3-a921-423a-8ab4-345845bf115e.png">
</p>
    


### 6. Fizikai környezet

### 7. Absztrakt domain modell

### 8. Architekturális terv

### 9. Adatbázisterv

### 10. Implementációs terv

### 11. Tesztterv

#### 11.1. Tesztesetek a megadott követelménylista alapján

#### 11.2. Egyéb teszteseket

### 12. Telepítési terv

### 13. Karbantartási terv
