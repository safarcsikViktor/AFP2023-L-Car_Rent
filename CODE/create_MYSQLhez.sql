CREATE TABLE admin (
    admin_id              NUMERIC NOT NULL  COMMENT "A tábla egyedi azonosítója",
    profile_id            NUMERIC COMMENT "Regisztrált felhasználó egyedi azonosítója",
    employee_id           NUMERIC COMMENT "Munkaválló egyedi azonosítója",
    permission_type       VARCHAR(10) NOT NULL COMMENT "Engedély típusa",
    permission_start_date DATE NOT NULL COMMENT "Engedély kezdete",
    permission_end_date   DATE NOT NULL COMMENT "Engedély lejárata"
) COMMENT "A táblában a jogosultsági szintek adatait tároljuk.";

ALTER TABLE admin ADD CONSTRAINT admin_pk PRIMARY KEY ( admin_id );

CREATE TABLE car (
    car_id NUMERIC NOT NULL COMMENT "Gépjármű egyedi azonosítója",
    status CHAR(1) NOT NULL COMMENT "Gépjármű aktuális státusza",
    photo  BLOB COMMENT "Fénykép"
) COMMENT "A táblában a gépjármű azonosító adatait és elérhetőségét tároljuk.";

ALTER TABLE car ADD CONSTRAINT car_pk PRIMARY KEY ( car_id );

CREATE TABLE car_category (
    car_category             VARCHAR(2) NOT NULL COMMENT "Gépjármű típusa (B, P, ...)",
    car_category_description VARCHAR(150) NOT NULL COMMENT "Gépjármű típus leírása"
) COMMENT "Nyilvántartott gépjármű típusok megnevezése";

ALTER TABLE car_category ADD CONSTRAINT car_category_pk PRIMARY KEY ( car_category );

CREATE TABLE car_description (
    car_id             NUMERIC NOT NULL COMMENT "Gépjármű egyedi azonosítója",
    manufacturing_year NUMERIC NOT NULL COMMENT "Gyártási év",
    car_description    VARCHAR(150) NOT NULL COMMENT "Gépjármű típusának leírása",
    car_category       VARCHAR(2) NOT NULL COMMENT "Gépjármű típusának megnevezése",
    transmission_type  VARCHAR(2) NOT NULL COMMENT "Sebességváltó típusa",
    fuel_type          CHAR(1) NOT NULL COMMENT "Üzemanyag típusa",
    engine_power       NUMERIC COMMENT "Motor teljesítménye",
    air_conditining    VARCHAR(1) COMMENT "Légkondícionáló",
    gps                VARCHAR(1) COMMENT "GPS",
    NUMERIC_of_doors    NUMERIC COMMENT "Ajtók száma",
    NUMERIC_of_seats    NUMERIC COMMENT "Ülések száma",
    packages           VARCHAR(20) COMMENT "Elhelyezhető csomagok",
    rental_fee         NUMERIC COMMENT "Bérleti díj összege / nap"
) COMMENT "A bérlehető gépjárművek részletes adatait tartjuk nyilván a táblában";

ALTER TABLE car_description ADD CONSTRAINT car_description_pk PRIMARY KEY ( car_id );

CREATE TABLE car_status (
    status_id          CHAR(1) NOT NULL COMMENT "Autó státuszok azonosítója",
    status_description VARCHAR(100) NOT NULL COMMENT "Autó státuszok leírása (elérhető/ bérelhető, megsérült, szervíz alatt, bérlés alatt)"
)COMMENT "Nyilvántartott státuszok";

ALTER TABLE car_status ADD CONSTRAINT car_status_pk PRIMARY KEY ( status_id );

CREATE TABLE employee (
    employee_id NUMERIC NOT NULL COMMENT "Munkavállaó egyedi azonosítója",
    first_name  NVARCHAR(100) NOT NULL COMMENT "Munkavállaló keresztneve",
    middle_name NVARCHAR(100) COMMENT "Munkavállaló középső neve",
    last_name   NVARCHAR(100) NOT NULL COMMENT "Munkavállaló vezetékneve",
    work_since  DATE NOT NULL COMMENT "Munkavállalás kezdete",
    work_until  DATE COMMENT "Munkavállalás vége"
) COMMENT "A tábla a munkavállalók adatait tartalmazza";

ALTER TABLE employee ADD CONSTRAINT employee_pk PRIMARY KEY ( employee_id );

CREATE TABLE fuel_type (
    fuel_type_id          CHAR(1) NOT NULL COMMENT "Üzemeanyagtípus (benzin, dízel, hibrid, elektromos) azonosítója",
    fuel_type_description VARCHAR(150) NOT NULL COMMENT "Üzemanyagtípus megnevezése"
) COMMENT "Nyilvántartott üzemanyagtípusok megnevezése";

ALTER TABLE fuel_type ADD CONSTRAINT fuel_type_pk PRIMARY KEY ( fuel_type_id );

CREATE TABLE history (
    car_id      NUMERIC NOT NULL COMMENT "Gépjármű egyedi azonosítója",
    contract_id VARCHAR(20) NOT NULL COMMENT "Bérleti szerződés egyedi azonosítója",
    date_from   DATE NOT NULL COMMENT "Szerződés kezdete",
    date_to     DATE NOT NULL COMMENT "Szerződés vége dátum",
    incident_id NUMERIC COMMENT "Káresemény azonosítója"
) COMMENT "Gépjármű bérlések historikus adatait tároljuk a táblában.";

ALTER TABLE history ADD CONSTRAINT history_pk PRIMARY KEY ( car_id,
                                                            contract_id );

CREATE TABLE incidents (
    incident_id          NUMERIC NOT NULL COMMENT "A tábla egyedi azonosítója",
    car_id               NUMERIC NOT NULL COMMENT "Az autó egyedi azonosítója",
    incident_description VARCHAR(500) COMMENT "Káresemény leírása",
    contract_id          VARCHAR(20) COMMENT "Bérleti szerződés egyei azonosítója, amely szerződés időtartama alatt a káresemény történt.",
    damage_value         NUMERIC COMMENT "Kár mértéke (Forint)"
) COMMENT "A bérleti szerződés hatálya alatt keletkezett károk adatait tároljuk a táblában.";


ALTER TABLE incidents ADD CONSTRAINT incidents_pk PRIMARY KEY ( incident_id );

CREATE TABLE profile (
    profile_id           NUMERIC NOT NULL COMMENT "Regisztrált felhasználó egyedi azonosítója",
    user_name            VARCHAR(100) NOT NULL COMMENT "Felhasználónév",
    email_address        VARCHAR(100) NOT NULL COMMENT "Regisztráció során megadott email cím",
    phone_NUMERIC        VARCHAR(100) COMMENT "Telefonszám",
    date_of_registration DATE NOT NULL COMMENT "Regisztráció időpontja",
    status               VARCHAR(5) COMMENT "Regisztrált profil státusza",
    pwd                  VARCHAR(500) COMMENT "Jelszó (titkosítottan tárolt)",
    city                 VARCHAR(150) COMMENT "Város",
    postcode             VARCHAR(15) COMMENT "Irányítószám",
    street               VARCHAR(200) COMMENT "Utca, házszám és további címadatok",
    date_of_birth        DATE COMMENT "Születési dátum",
    first_name           VARCHAR(100) COMMENT "Keresztnév",
    last_name            VARCHAR(100) COMMENT "Vezetéknév"
) COMMENT "A táblában a regisztrált felhasználók adatait tároljuk. Regisztráció során csak a felhasználónév, email cím, jelszó és a regisztráció dátuma kerül kitöltésre. A többi mezőt abban az esetben töltjük, amikor az első autóbérlés megtörténik.";

ALTER TABLE profile ADD CONSTRAINT profile_pk PRIMARY KEY ( profile_id );

CREATE TABLE profile_x_contract_x_car (
    profile_id  NUMERIC NOT NULL COMMENT "Regisztrált felhasználó egyedi azonosítója",
    car_id      NUMERIC NOT NULL COMMENT "Bérelt autó egyedi azonosítója",
    contract_id VARCHAR(20) NOT NULL COMMENT "Szerződés egyedi azonosítója"
)COMMENT "A táblában a regisztrált felhasználók adatait kötjük össze a bérlési adatokkal." ;

ALTER TABLE profile_x_contract_x_car ADD CONSTRAINT profile_x_contract_x_car_pk PRIMARY KEY ( profile_id,
                                                                                              contract_id );

CREATE TABLE transmission (
    transmission_type_id          VARCHAR(2) NOT NULL COMMENT "Sebességváltó típus azonosítója",
    transmission_type_description VARCHAR(150) NOT NULL COMMENT "Sebességváltó fajta (automata, kézi) leírása"
)COMMENT "Nyilvántartott sebességváltó fajták";


ALTER TABLE transmission ADD CONSTRAINT transmission_pk PRIMARY KEY ( transmission_type_id );

ALTER TABLE admin
    ADD CONSTRAINT admin_employee_fk FOREIGN KEY ( employee_id )
        REFERENCES employee ( employee_id );

ALTER TABLE admin
    ADD CONSTRAINT admin_profile_fk FOREIGN KEY ( profile_id )
        REFERENCES profile ( profile_id );

ALTER TABLE car_description
    ADD CONSTRAINT car_desc_car_category_fk FOREIGN KEY ( car_category )
        REFERENCES car_category ( car_category );

ALTER TABLE car_description
    ADD CONSTRAINT car_desc_car_fk FOREIGN KEY ( car_id )
        REFERENCES car ( car_id );

ALTER TABLE car_description
    ADD CONSTRAINT car_desc_fuel_type_fk FOREIGN KEY ( fuel_type )
        REFERENCES fuel_type ( fuel_type_id );

ALTER TABLE car_description
    ADD CONSTRAINT car_desc_transmission_fk FOREIGN KEY ( transmission_type )
        REFERENCES transmission ( transmission_type_id );

ALTER TABLE car
    ADD CONSTRAINT car_status_fk FOREIGN KEY ( status )
        REFERENCES car_status ( status_id );

ALTER TABLE history
    ADD CONSTRAINT history_car_fk FOREIGN KEY ( car_id )
        REFERENCES car ( car_id );

ALTER TABLE incidents
    ADD CONSTRAINT incident_car_fk FOREIGN KEY ( car_id )
        REFERENCES car ( car_id );

ALTER TABLE profile_x_contract_x_car
    ADD CONSTRAINT pcc_car_fk FOREIGN KEY ( car_id )
        REFERENCES car ( car_id );

ALTER TABLE profile_x_contract_x_car
    ADD CONSTRAINT pcc_profile_fk FOREIGN KEY ( profile_id )
        REFERENCES profile ( profile_id );
