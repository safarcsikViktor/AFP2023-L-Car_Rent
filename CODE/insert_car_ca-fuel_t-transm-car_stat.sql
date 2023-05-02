-- Gépjármű kategóriák insertjei
INSERT INTO `car_category` (`car_category`, `car_category_description`) VALUES 
('M1', ' Személyszállító gépkocsik, a gépjárművezető ülésén kívül legfeljebb nyolc ülőhellyel.'),
('M2', 'Személyszállító gépkocsik, a gépjárművezető ülésén kívül több mint nyolc ülőhellyel és legfeljebb 5 t műszakilag megengedett legnagyobb össztömeggel.'),
('M3', 'Személyszállító gépkocsik, a gépjárművezető ülésén kívül több mint nyolc ülőhellyel és több mint 5 t műszakilag megengedett legnagyobb össztömeggel.'), 
('N1', 'Áruszállító gépkocsik, legfeljebb 3,5 t műszakilag megengedett legnagyobb össztömeggel.'), 
('N2', 'Áruszállító gépkocsik, több mint 3,5 t, de legfeljebb 12 t műszakilag megengedett legnagyobb össztömeggel.'), 
('N3', 'Áruszállító gépkocsik, több mint 12 t műszakilag megengedett legnagyobb össztömeggel.\r\n'), 
('L1', 'Kétkerekű járművek legfeljebb 45 km/ó tervezési sebességgel amelyben a motor: - hengerűrtartalma legfeljebb 50 cm3 belső égésű motor esetében, 
 vagy legnagyobb folyamatos névleges teljesítménye legfeljebb 4 kW elektromos motor esetében'), 
('L2', 'Háromkerekű járművek, legfeljebb 45 km/ó tervezési sebességgel amelyben a motor:\r\n- hengerűrtartalma legfeljebb 50 cm3, 
 ha szikragyújtású, vagy\r\n- legnagyobb hasznos teljesítménye legfeljebb 4 kW egyéb belső égésű motor esetében,
 vagy\r\n- legnagyobb folyamatos névleges teljesítménye legfeljebb 4 kW, elektromos motor esetében'), 
('L3', 'Motorkerékpár 50 cm3 és 45 km/h felett'), 
('L4', 'Motorkerékpár, oldalkocsis 50 cm3 és 45 km/h felett'), 
('L5', 'háromkerekű tricikli, azaz három szimmetrikus elrendezésű kerékkel rendelkező jármű, 
 amennyiben 50 cm3-nél nagyobb hengerűrtartalmú belső égésű motorral vannak ellátva és/vagy a tervezési sebességük nagyobb, mint 45 km/ó');
 
-- Gépjámű státuszok insertjei
  
INSERT INTO `car_status` (`status_id`, `status_description`) VALUES
('e', 'Elérhető'),
('f', 'Foglalt'),
('m', 'Megsérült'),
('s', 'Szervíz alatt');

-- Üzemanyagok insertjei

INSERT INTO `fuel_type` (`fuel_type_id`, `fuel_type_description`) VALUES
('b', 'Benzin - Üzemanyag belső égésű motorokhoz, amely ásványolajból készül. Színtelen, szagával petróleumra emlékeztető, gyorsan párolgó anyag.'),
('d', 'Dízel - Kőolaj származékkal működő (gép); ezzel kapcsolatos (anyag)'),
('e', 'Elektromos - Az EV rövidítés azokat a járműveket jelenti, melyek meghajtása elektromos áramot használ. '),
('h', 'Hibrid - A belső égésű motor és a villanymotor kombinációja jelenik meg benne.');


-- Váltók insertjei





