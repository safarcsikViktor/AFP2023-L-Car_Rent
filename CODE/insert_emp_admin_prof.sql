insert into Employee(employee_id, first_name, last_name, work_since) 
  values(10000, 'Mária','Soós', date'2020-01-03');
insert into Employee(employee_id, first_name, middle_name, last_name, work_since, work_until) 
  values(10001, 'Ramóna', 'Anna', 'Szalai', date'2020-01-09', date'2023-02-10');
insert into Employee(employee_id, first_name, last_name, work_since) 
  values(10002, 'Dorián', 'Farkas', date'2020-10-09');
insert into Employee(employee_id, first_name, middle_name, last_name, work_since) 
  values(10003, 'László', 'Ferenc', 'Balogh', date'2021-04-25');
insert into Employee(employee_id, first_name, last_name, work_since) 
  values(10004, 'István', 'Hegedűs', date'2021-08-10');
insert into Employee(employee_id, first_name, last_name, work_since) 
  values(10005, 'Alexa', 'Dudás', date'2022-06-13');

COMMIT;

-- a jelszó minden felhasználónál "Teszt1_" SHA-512-vel

insert into Profile(profile_id, user_name, email_address, phone_number, date_of_registration, status, pwd, city, postcode, street, date_of_birth, first_name, last_name)
  values(30000, 'mihalynas', 'bendeguz@major.com', '+36482495679', date'2021-04-20', 'ACT', 'b89f4ac196492e1480531db8d2257e28b55cfa454ac875ca1600c1c023df49c7431ac1a445648bbce9a3a8aec59de18fcced7570469d6f2e1cf2c1d161029111', 'Enying', '6795', 'Benedek árok 4.', date'1981-01-25', 'Mihály', 'Jónás');
insert into Profile(profile_id, user_name, email_address, phone_number, date_of_registration, status, pwd, city, postcode, street, date_of_birth, first_name, last_name)
  values(30001,'bototh', 'thoth@hotmail.com', '+36300152536', date'2021-04-20', 'ACT','b89f4ac196492e1480531db8d2257e28b55cfa454ac875ca1600c1c023df49c7431ac1a445648bbce9a3a8aec59de18fcced7570469d6f2e1cf2c1d161029111','Budapest','1068','Borbély mélyút 78.', date'1970-05-21', 'Botond','Németh');
insert into Profile(profile_id, user_name, email_address, date_of_registration, status)
  values(30002,'endreago','varga.otto@szucs.org',date'2021-10-05','DEL');
insert into Profile(profile_id, user_name, email_address, date_of_registration, status, pwd)
  values(30003,'mihaos','dobos.mihaly@gmail.com',date'2021-10-06','ACT','b89f4ac196492e1480531db8d2257e28b55cfa454ac875ca1600c1c023df49c7431ac1a445648bbce9a3a8aec59de18fcced7570469d6f2e1cf2c1d161029111');
insert into Profile(profile_id, user_name, email_address, phone_number, date_of_registration, status, pwd, city, postcode, street, date_of_birth, first_name, last_name)
  values(30004,'emokepter','emokepeter@simon.com','+3651703989',date'2021-12-30','ACT','b89f4ac196492e1480531db8d2257e28b55cfa454ac875ca1600c1c023df49c7431ac1a445648bbce9a3a8aec59de18fcced7570469d6f2e1cf2c1d161029111','Budapest','1052','Lukács tere 68.', date'1964-10-12', 'Emőke','Péter');
insert into Profile(profile_id, user_name, email_address, date_of_registration, status)
  values(30005,'patrro','hsomogyi@hotmail.com',date'2022-01-04','DEL');
insert into Profile(profile_id, user_name, email_address, date_of_registration, status, pwd)
  values(30006,'matyzlo','gal.sandor@bodnar.com',date'2022-01-18','ACT','b89f4ac196492e1480531db8d2257e28b55cfa454ac875ca1600c1c023df49c7431ac1a445648bbce9a3a8aec59de18fcced7570469d6f2e1cf2c1d161029111');
insert into Profile(profile_id, user_name, email_address, date_of_registration, status, pwd)
  values(30007,'zsokasGYi','zsoka.somogyi@hotmail.com',date'2022-02-18','ACT','b89f4ac196492e1480531db8d2257e28b55cfa454ac875ca1600c1c023df49c7431ac1a445648bbce9a3a8aec59de18fcced7570469d6f2e1cf2c1d161029111');
insert into Profile(profile_id, user_name, email_address, date_of_registration, status, pwd)
  values(30008,'Sandor2','pasztor_sandor@barta.org',date'2022-02-26','ACT','b89f4ac196492e1480531db8d2257e28b55cfa454ac875ca1600c1c023df49c7431ac1a445648bbce9a3a8aec59de18fcced7570469d6f2e1cf2c1d161029111');
insert into Profile(profile_id, user_name, email_address, phone_number, date_of_registration, status, pwd, city, postcode, street, date_of_birth, first_name, last_name)
  values(30009,'balala','b.szalai@feher.com','+36511965477',date'2022-03-01','ACT','b89f4ac196492e1480531db8d2257e28b55cfa454ac875ca1600c1c023df49c7431ac1a445648bbce9a3a8aec59de18fcced7570469d6f2e1cf2c1d161029111','Zalaegerszeg','7324','Dobos körönd 49.', date'1992-06-13', 'Balázs','Szalai');
insert into Profile(profile_id, user_name, email_address, phone_number, date_of_registration, status, pwd, city, postcode, street, date_of_birth, first_name, last_name)
  values(30010,'lenaLalo','dorina78@hotmail.com','+36963369941',date'2022-03-02','ACT','b89f4ac196492e1480531db8d2257e28b55cfa454ac875ca1600c1c023df49c7431ac1a445648bbce9a3a8aec59de18fcced7570469d6f2e1cf2c1d161029111','Sopron','2041','Barta orom 70.', date'1978-02-05', 'Léna','László');
insert into Profile(profile_id, user_name, email_address, date_of_registration, status)
  values(30011,'misi26','mihaly.nagy@freemail.hu',date'2022-03-10','DEL');
insert into Profile(profile_id, user_name, email_address, date_of_registration, status, pwd)
  values(30012,'Pati33','patricia_nagy@fabian.com',date'2022-03-12','ACT','b89f4ac196492e1480531db8d2257e28b55cfa454ac875ca1600c1c023df49c7431ac1a445648bbce9a3a8aec59de18fcced7570469d6f2e1cf2c1d161029111');
insert into Profile(profile_id, user_name, email_address, phone_number, date_of_registration, status, pwd, city, postcode, street, date_of_birth, first_name, last_name)
  values(30013,'lakioli','lakatoso@yahoo.com','+36102179092',date'2022-03-20','ACT','b89f4ac196492e1480531db8d2257e28b55cfa454ac875ca1600c1c023df49c7431ac1a445648bbce9a3a8aec59de18fcced7570469d6f2e1cf2c1d161029111','Budapest','1079','Dorián lejtő 14.', date'2000-01-09', 'Olívia','Lakatos');
insert into Profile(profile_id, user_name, email_address, date_of_registration, status, pwd)
  values(30014,'Erni10','dorotty.orosz@hotmail.com',date'2022-06-21','ACT','b89f4ac196492e1480531db8d2257e28b55cfa454ac875ca1600c1c023df49c7431ac1a445648bbce9a3a8aec59de18fcced7570469d6f2e1cf2c1d161029111');

--ADMIN: dolgozó 
--USER: sima regisztrált felhasználó
--USER_2: regisztrált felhasználó, aki a további személyes adatait is megadta és tud autót bérelni

insert into Admin(admin_id, employee_id, permission_type, permission_start_date, permission_end_date)
  values(10000,10000,'ADMIN', date'2020-01-03', date'9999-12-31');
insert into Admin(admin_id, employee_id, permission_type, permission_start_date, permission_end_date)
  values(10001,10001,'ADMIN',date'2020-01-09', date'2023-02-10');
insert into Admin(admin_id, employee_id, permission_type, permission_start_date, permission_end_date)
  values(10002,10002,'ADMIN',date'2020-10-09', date'9999-12-31');
insert into Admin(admin_id, profile_id, permission_type, permission_start_date, permission_end_date)
  values(10003,30000,'USER_2', date'2021-04-20', date'9999-12-31');
insert into Admin(admin_id, profile_id, permission_type, permission_start_date, permission_end_date)
  values(10004, 30001,'USER_2', date'2021-04-20', date'9999-12-31');
insert into Admin(admin_id, employee_id, permission_type, permission_start_date, permission_end_date)
  values(10005,10003,'ADMIN',date'2021-04-25', date'9999-12-31');
insert into Admin(admin_id, employee_id, permission_type, permission_start_date, permission_end_date)
  values(10006,10004,'ADMIN',date'2022-06-13', date'9999-12-31');
insert into Admin(admin_id, profile_id, permission_type, permission_start_date, permission_end_date)
  values(10007,30002,'USER', date'2021-10-05', date '2022-10-02');
insert into Admin(admin_id, profile_id, permission_type, permission_start_date, permission_end_date)
  values(10008,30003,'USER_2', date'2021-10-06',date'9999-12-31' );
insert into Admin(admin_id, profile_id, permission_type, permission_start_date, permission_end_date)
  values(10009,30004,'USER_2', date'2021-12-30',date'9999-12-31' );
insert into Admin(admin_id, profile_id, permission_type, permission_start_date, permission_end_date)
  values(10010,30005, 'USER',date'2022-01-04',date'2022-02-10');
insert into Admin(admin_id, profile_id, permission_type, permission_start_date, permission_end_date)
  values(10011,30006,'USER',date'2022-01-18', date'9999-12-31' );
insert into Admin(admin_id, profile_id,  permission_type, permission_start_date, permission_end_date)
  values(10012,30007,'USER',date'2022-02-18', date'9999-12-31' );
insert into Admin(admin_id, profile_id,  permission_type, permission_start_date, permission_end_date)
  values(10013,30008,'USER',date'2022-02-26', date'9999-12-31' );
insert into Admin(admin_id, profile_id,  permission_type, permission_start_date, permission_end_date)
  values(10014,30009,'USER_2', date'2022-03-01',date'9999-12-31' );
insert into Admin(admin_id, profile_id, permission_type, permission_start_date, permission_end_date)
  values(10015,30010,'USER_2',date'2022-03-02',date'9999-12-31' );
insert into Admin(admin_id, profile_id,  permission_type, permission_start_date, permission_end_date)
  values(10016,30011,'USER', date'2022-03-10', date '2022-10-06');
insert into Admin(admin_id, profile_id,  permission_type, permission_start_date, permission_end_date)
  values(10017,30012,'USER',date'2022-03-12',date'9999-12-31');
insert into Admin(admin_id, profile_id,  permission_type, permission_start_date, permission_end_date)
  values(10018,30013,'USER_2',date'2022-03-20',date'9999-12-31');
insert into Admin(admin_id, employee_id, permission_type, permission_start_date, permission_end_date)
  values(10019,10005,'ADMIN',date'2022-06-13', date'9999-12-31');
insert into Admin(admin_id, profile_id, permission_type, permission_start_date, permission_end_date)
  values(10020,30014,'USER',date'2022-06-21', date'9999-12-31');

commit;