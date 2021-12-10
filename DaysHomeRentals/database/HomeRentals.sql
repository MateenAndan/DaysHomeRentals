drop database if exists Home_Rentals_13732023;
create database Home_Rentals_13732023;
use Home_Rentals_13732023;

create table person(
pid int unique not null,
pname varchar(30),
gender enum('Male','Female'),
email varchar(50) unique,
`password` varchar(20),
contact varchar(20)
);
-- insert into person values(000, 'Alhassan Andani', 'Male', 'alhasan@gmail.com', '0543554340');
-- insert into person values(111, 'Denzel Owoo', 'Male', 'denzel@gmail.com', '0240248082');
-- insert into person values(222, 'Leonie Tawia', 'Female', 'leonie@gmail.com', '0244333120');
-- insert into person values(333, 'Araba Morrison', 'Female', 'araba@gmail.com', '0209005096');
-- insert into person values(444, 'Evenlyn Tagoe', 'Female', 'evelyn@gmail.com', '05069005096');
-- insert into person values(555, 'Gerald Akita', 'Male', 'gerald@gmail.com', '0209152765');
-- insert into person values(660, 'Yoofi Barimah', 'Male', 'yoofi@gmail.com', '0205061214');
-- insert into person values(777, 'Aseye Semenyo', 'Female', 'aseye@gmail.com', '0543534043');
-- insert into person values(888, 'Steven Attipoe', 'Male', 'steven@gmail.com', '05069065096');
-- insert into person values(999, 'Papa Offori Asante', 'Male', 'papa@gmail.com', '02069005896');
-- insert into person values(0001, 'Jason Allotey', 'Male', 'jason@gmail.com', '+447908028878');
-- insert into person values(1111, 'Natasha Romans', 'Female', 'natasha@gmail.com', '+147908028878');
-- insert into person values(2222, 'Naa Lamile Dove', 'Female', 'naa@gmail.com', '0553126806');
-- insert into person values(3333, 'Santan David', 'Male', 'david@gmail.com', '+44790502878');
-- insert into person values(4444, 'Drake Graham', 'Male', 'drizzy@gmail.com', '+12078028878');
-- insert into person values(5555, 'VanEss Ennu', 'Male', 'ennu@gmail.com', '0201012098');
-- insert into person values(6600, 'Russ Millions', 'Male', 'russ@gmail.com', '+447928728878');
-- insert into person values(7777, 'Tion Wayne', 'Male', 'tion@gmail.com', '+447690020878');
-- insert into person values(8888, 'Megan Stalley', 'Female', 'megan@gmail.com', '+123479080288');
-- insert into person values(9999, 'Mateen Andan', 'Male', 'mateen@gmail.com', '0543534340');



create table Landlord(
Landlord_id int unique not null,
pid int unique not null,
primary key (Landlord_id),
foreign key(pid) references person(pid)
);
insert into Landlord values(100,000);
-- insert into Landlord values(110,111);
-- insert into Landlord values(120,222);
-- insert into Landlord values(130,333);
-- insert into Landlord values(140,444);
-- insert into Landlord values(150,555);
-- insert into Landlord values(160,660);
-- insert into Landlord values(170,777);
-- insert into Landlord values(180,888);
-- insert into Landlord values(190,999);



create table addProperty(
PropertyId int unique not null,
Landlord_id int unique not null,
location varchar(30),
houseNo int,
price decimal(6,2),
pdescription varchar(100),
primary key(PropertyId),
foreign key(Landlord_id) references Landlord(Landlord_id)
);
insert into addProperty values (200,100, 'Laterbiokoshie', 201, 500.00, 'Simple and Elegant');
-- insert into addProperty values (210,110, 'Dansoman', 421, 500.00, 'Classy and affordable');
-- insert into addProperty values (220,120, 'Gbawe', 267, 200.00, 'You would love it!');
-- insert into addProperty values (230,130, 'Airport City', 209, 1500.00, 'Accra is too hot. Our place is cool');
-- insert into addProperty values (240,140, 'Legon', 274, 2000.00, 'Find your peace');
-- insert into addProperty values (250,150, 'Tema', 108, 3400.00, 'In Tema and need a place to rest? Check us out!');
-- insert into addProperty values (260,160, 'Airport City', 418, 5500.00, 'Simply the best');
-- insert into addProperty values (270,170, 'Dansoman', 062, 500.00, 'Sleep, Wakeup, Repeat');
-- insert into addProperty values (280,180, 'Achimota', 185, 800.00, 'Need a place to rest, look no further');
-- insert into addProperty values (290,190, 'Trasaco Valley', 385, 9500.00, 'To rest all your troubles');


create table tenant(
Tenant_id int unique not null,
pid int unique not null,
nationality varchar(30),
primary key (Tenant_id),
foreign key(pid) references person(pid)
);
-- insert into tenant values(300, 0000, 'British');
-- insert into tenant values(310, 1111, 'American');
-- insert into tenant values(320, 2222, 'Ghanaian');
-- insert into tenant values(330, 3333, 'British');
-- insert into tenant values(340, 4444, 'Canadian');
-- insert into tenant values(350, 5555, 'Ghanaian');
-- insert into tenant values(360, 6600, 'British');
-- insert into tenant values(370, 7777, 'British');
-- insert into tenant values(380, 8888, 'American');
-- insert into tenant values(390, 9999, 'Ghanaian');


create table Reservation(
PropertyId int unique not null,
Tenant_id int unique not null,
Reservation_id int unique not null,
date_in date,
date_out date,
rprice decimal(10,2),
primary key (Reservation_id),
foreign key(PropertyId) references addProperty(PropertyId),
foreign key(Tenant_id) references tenant(Tenant_id)
);
-- insert into Reservation values (200,300,400,'2021-06-30', '2021-07-12',6000);
-- insert into Reservation values (210,310,410,'2021-01-01', '2021-01-15',7000);
-- insert into Reservation values (220,320,420,'2021-02-02', '2021-02-17',2800);
-- insert into Reservation values (230,330,430,'2021-01-10', '2021-01-21',15000);
-- insert into Reservation values (240,340,440,'2021-07-5', '2021-07-15',18000);
-- insert into Reservation values (250,350,450,'2021-11-30', '2021-12-06',27200);
-- insert into Reservation values (260,360,460,'2021-12-02', '2021-12-12',60500);
-- insert into Reservation values (270,370,470,'2021-03-5', '2021-03-17',5500);
-- insert into Reservation values (280,380,480,'2021-10-12', '2021-10-20',5600);
-- insert into Reservation values (290,390,490,'2021-10-01', '2021-11-01',285000);


create table Category(
PropertyId int unique not null,
propertyType enum ('House','Apartment'),
foreign key(PropertyId) references addProperty(PropertyId)
);
-- insert into Category values (200,'House');
-- insert into Category values (210,'House');
-- insert into Category values (220,'House');
-- insert into Category values (230,'Apartment');
-- insert into Category values (240,'House');
-- insert into Category values (250,'House');
-- insert into Category values (260,'Apartment');
-- insert into Category values (270,'Apartment');
-- insert into Category values (280,'Apartment');
-- insert into Category values (290,'House');


create table Accomodation(
PropertyId int unique not null,
rooms int,
kitchen enum ('Yes','No'),
lroom enum ('Yes','No'),
bathrooms int,
foreign key(PropertyId) references addProperty(PropertyId)
);
-- insert into Accomodation values (200, 2, 'Yes','Yes',3);
-- insert into Accomodation values (210, 2, 'Yes','Yes',3);
-- insert into Accomodation values (220, 1, 'Yes','No',1);
-- insert into Accomodation values (230, 3, 'Yes','Yes',4);
-- insert into Accomodation values (240, 3, 'Yes','Yes',4);
-- insert into Accomodation values (250, 4, 'Yes','Yes',5);
-- insert into Accomodation values (260, 3, 'Yes','Yes',4);
-- insert into Accomodation values (270, 2, 'Yes','No',2);
-- insert into Accomodation values (280, 3, 'Yes','Yes',4);
-- insert into Accomodation values (290, 6, 'Yes','Yes',8);


create table Payment(
PaymentID int unique not null,
Tenant_id int unique not null,
Reservation_id int unique not null,
tprice decimal (10,2),
pdate date,
primary key(PaymentID),
foreign key(Reservation_id) references Reservation(Reservation_id),
foreign key(Tenant_id) references tenant(Tenant_id)
);
-- insert into Payment values(500,300,400,6000, '2021-06-30');
-- insert into Payment values(510,310,410,7000, '2021-01-01');
-- insert into Payment values(520,320,420,2800, '2021-02-02');
-- insert into Payment values(530,330,430,15000, '2021-01-21');
-- insert into Payment values(540,340,440,18000, '2021-07-5');
-- insert into Payment values(550,350,450,27200, '2021-11-30');
-- insert into Payment values(560,360,460,60500, '2021-12-02');
-- insert into Payment values(570,370,470,5500, '2021-03-5');
-- insert into Payment values(580,380,480,5600, '2021-10-12');
-- insert into Payment values(590,390,490,285000, '2021-10-01');


create table Ratings(
Tenant_id int unique not null,
StarRating decimal(2,1),
check(1<=StarRating<=5),
Comments varchar(200),
foreign key(Tenant_id) references tenant(Tenant_id)
);
-- insert into Ratings values(300,4,'Really comfortable stay');
-- insert into Ratings values(310,3.5,'Alright');
-- insert into Ratings values(320,3,'Really uncomfortable stay');
-- insert into Ratings values(330,4.5,'Comfortable');
-- insert into Ratings values(340,5,'Excellent place. Had a really good stay');
-- insert into Ratings values(350,4.5,'Would recommend to anyone');
-- insert into Ratings values(360,4.5,'Enjoyed my stay');
-- insert into Ratings values(370,3.5,'Too small to stay in');
-- insert into Ratings values(380,4.5,'N/A');
-- insert into Ratings values(390,5,'Life changing experience!!!');


create table Reports(
PropertyId int unique not null,
report varchar(100),
foreign key(PropertyId) references addProperty(PropertyId)
);
-- insert into Reports values(200,'N/A');
-- insert into Reports values(210,'The Refrigerator did not cool well.');
-- insert into Reports values(220,'I saw rats!!!');
-- insert into Reports values(230,'N/A');
-- insert into Reports values(240,'N/A');
-- insert into Reports values(250,'One window broke');
-- insert into Reports values(260,'N/A');
-- insert into Reports values(270,'The bed makes noises');
-- insert into Reports values(280,'N/A');
-- insert into Reports values(290,'N/A');

 
-- index
create index property_ID ON addProperty(PropertyId);
create index totalPrice on Payment(tprice);
create index person_name on person(pname);
create index room_number on Accomodation(rooms);



-- querires

-- Retrieve the total prices that are above GHS 6000
SELECT COUNT(tprice)
FROM Payment
WHERE tprice > 6000;


-- Retrieve the best star ratings (4-5 ratings) and their comments.
SELECT StarRating, Comments
FROM Ratings
WHERE StarRating IN(4, 4.5, 5)
ORDER BY StarRating DESC;


-- Retrieve the Reports that corresponds and the Reservation made
SELECT Reports.PropertyID, Reports.report, Reservation.Reservation_id
FROM Reports
INNER JOIN Reservation ON Reports.PropertyID = Reservation.PropertyID
ORDER BY Tenant_id;


-- Retrieve the Tenant name and ID
SELECT DISTINCT person.pname, tenant.Tenant_id
FROM tenant
INNER JOIN person ON tenant.pid= person.pid
ORDER BY person.pname;


-- Retrieve the property id corresponding to the customer.
SELECT Reservation.PropertyId, Reservation.Tenant_id,person.pname
FROM Reservation, person
WHERE person.pname in 
(SELECT person.pname from person
ORDER BY person.pname ASC);


-- Retrieve accomodations with less than 4 rooms
SELECT COUNT(rooms)
FROM Accomodation
WHERE rooms < 4;



































