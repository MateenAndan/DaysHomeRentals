drop database if exists homerents;
create database homerents;
use homerents;

create table Landlord(
Landlord_id int(10) AUTO_INCREMENT,
pname varchar(30) NOT NULL,
gender enum('Male','Female') NOT NULL,
email varchar(50),
`password` varchar(100) NOT NULL, 
contact bigint(10) NOT NULL,
PRIMARY KEY(Landlord_id)
);
insert into Landlord(pname,gender,email,`password`,contact) values('Alhassan Andani', 'Male', 'alhasan@gmail.com', '827ccb0eea8aaasfs6c4c34a16891f84e7b','0543554340');

CREATE TABLE tenant(
  Tenant_id int(10) AUTO_INCREMENT,
  pname varchar(100) NOT NULL,
  gender enum('Male','Female') NOT NULL,
  email varchar(100),
  `password` varchar(100) NOT NULL,
  contact bigint(10) NOT NULL,
  nationality varchar(50) NOT NULL,
  PRIMARY KEY (Tenant_id)
);
insert into tenant(pname,gender,email,`password`,contact,nationality) values('Denzel Owoo', 'Male', 'denzel@gmail.com', '827ccb0eea8afafs6c4c34a16891f84e7b','0240248083','Ghanaian');

create table addProperty(
PropertyId int(10) AUTO_INCREMENT ,
Landlord_id int(10),
location varchar(30),
category enum ('House','Apartment'),
houseNo int,
rooms int(10),
kitchen enum ('Yes','No'),
lroom enum ('Yes','No'),
bathrooms int(10),
pdescription varchar(100),
price decimal(6,2),
primary key (PropertyId),
foreign key(Landlord_id) references Landlord(Landlord_id)
);
insert into addProperty(location,category,houseNo,rooms,kitchen,lroom,bathrooms,pdescription,price) values ( 'Laterbiokoshie', 'House','205','4','Yes','Yes','3','Simple and Elegant',300.0);


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


create table Ratings(
Tenant_id int unique not null,
StarRating decimal(2,1),
check(1<=StarRating<=5),
Comments varchar(200),
foreign key(Tenant_id) references tenant(Tenant_id)
);
-- insert into Ratings values('300',4,'Really comfortable stay');

 
-- index
-- create index property_ID ON addProperty(PropertyId);
-- create index totalPrice on Payment(tprice);
-- create index person_name on person(pname);
-- create index room_number on Accomodation(rooms);


-- querires
-- Retrieve the total prices that are above GHS 6000
-- SELECT COUNT(tprice)
-- FROM Payment
-- WHERE tprice > 6000;


-- Retrieve the best star ratings (4-5 ratings) and their comments.
-- SELECT StarRating, Comments
-- FROM Ratings
-- WHERE StarRating IN(4, 4.5, 5)
-- ORDER BY StarRating DESC;


-- Retrieve the Reports that corresponds and the Reservation made
-- SELECT Reports.PropertyID, Reports.report, Reservation.Reservation_id
-- FROM Reports
-- INNER JOIN Reservation ON Reports.PropertyID = Reservation.PropertyID
-- ORDER BY Tenant_id;


-- Retrieve the Tenant name and ID
-- SELECT DISTINCT person.pname, tenant.Tenant_id
-- FROM tenant
-- INNER JOIN person ON tenant.pid= person.pid
-- ORDER BY person.pname;


-- Retrieve the property id corresponding to the customer.
-- SELECT Reservation.PropertyId, Reservation.Tenant_id,person.pname
-- FROM Reservation, person
-- WHERE person.pname in 
-- (SELECT person.pname from person
-- ORDER BY person.pname ASC);


-- Retrieve accomodations with less than 4 rooms
-- SELECT COUNT(rooms)
-- FROM Accomodation
-- WHERE rooms < 4;