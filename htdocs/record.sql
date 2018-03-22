
CREATE TABLE STUDENT (
StudentNo INT NOT NULL,
fName VARCHAR(10) NOT NULL,
lName VARCHAR(10) NOT NULL,
address VARCHAR(20) NOT NULL,
date_of_birth DATE NOT NULL,
sex VARCHAR(6) NOT NULL,
degree VARCHAR(5) NOT NULL,
nationality VARCHAR(10) NOT NULL,
spl_req VARCHAR(20),
PRIMARY KEY (StudentNo)
);


CREATE TABLE Flat(
flatNo int NOT NULL,
faddr VARCHAR(20) NOT NULL,
no_of_rooms INT NOT NULL,
PRIMARY KEY (flatNo)
);


CREATE TABLE Room(
roomNo int NOT NULL,
rent INT NOT NULL,
flatNo int NOT NULL,
PRIMARY KEY (roomNo),
FOREIGN KEY (flatNo) REFERENCES Flat(flatNo) ON DELETE CASCADE
);




CREATE TABLE Staff(
staffid int NOT NULL,
fName VARCHAR(20) NOT NULL,
lName VARCHAR(20),
addr VARCHAR(20) NOT NULL,
position VARCHAR(10) NOT NULL,
PRIMARY KEY (staffid)
);


CREATE TABLE Lease(
leaseNo int NOT NULL,
length int NOT NULL,
StudentNo INT NOT NULL,
roomNo int NOT NULL,
checkin DATE NOT NULL,
checkout DATE NOT NULL,
PRIMARY KEY (leaseNo),
FOREIGN KEY (StudentNo) REFERENCES STUDENT(StudentNo) ON DELETE CASCADE ON UPDATE CASCADE,
FOREIGN KEY (roomNo) REFERENCES Room(roomNo) ON DELETE CASCADE ON UPDATE CASCADE
);


CREATE TABLE Invoice(
invNo int NOT NULL,
payment int NOT NULL,
payment_date DATE NOT NULL,
payment_type VARCHAR(10) NOT NULL,
leaseNo int NOT NULL,
PRIMARY KEY (invNo),
FOREIGN KEY (leaseNo) REFERENCES Lease(leaseNo) ON DELETE CASCADE
);


CREATE TABLE Inspection(
date_of_insp DATE NOT NULL,
remarks VARCHAR(20) NOT NULL,
flatNo int NOT NULL,
staffid int NOT NULL,
FOREIGN KEY (flatNo) REFERENCES Flat(flatNo) ON DELETE CASCADE,
FOREIGN KEY (staffid) REFERENCES Staff(staffid) ON DELETE CASCADE ON UPDATE CASCADE
);


CREATE TABLE Service(
serviceNo int NOT NULL,
staffid int NOT NULL,
PRIMARY KEY (serviceNo),
FOREIGN KEY (staffid) REFERENCES Staff(staffid) ON DELETE CASCADE ON UPDATE CASCADE
);


CREATE TABLE Guardian(
StudentNo INT NOT NULL,
name VARCHAR(20) NOT NULL,
gaddr VARCHAR(20)NOT NULL,
tel_no VARCHAR(15) NOT NULL,
FOREIGN KEY (StudentNo) REFERENCES STUDENT(StudentNo) ON DELETE CASCADE
);



INSERT INTO STUDENT (StudentNo, fName, lName, address, date_of_birth, sex, degree, nationality) VALUES (100, 'John', 'Murphy', '2, Roebuck Castle', '1993-01-23', 'Male', 'BSc', 'Ireland');
INSERT INTO STUDENT (StudentNo, fName, lName, address, date_of_birth, sex, degree, nationality) VALUES (101, 'Jennifer', 'Neary', '25, St Patricks Park', '1992-02-02', 'Female', 'BA', 'Ireland');
INSERT INTO STUDENT (StudentNo, fName, lName, address, date_of_birth, sex, degree, nationality) VALUES (102, 'Xiang', 'Yao', '45, Belfield Downs', '1988-12-23', 'Male', 'MSc', 'China');
INSERT INTO STUDENT (StudentNo, fName, lName, address, date_of_birth, sex, degree, nationality) VALUES (103, 'Ram', 'Nathan', '23, Woodbine Avenue', '1994-03-03', 'Male', 'BE', 'India');
INSERT INTO STUDENT (StudentNo, fName, lName, address, date_of_birth, sex, degree, nationality) VALUES (104, 'Sebastian', 'Gallardo', '11, Mount Merrion Av', '1987-04-13', 'Male', 'MBA', 'France');
INSERT INTO STUDENT (StudentNo, fName, lName, address, date_of_birth, sex, degree, nationality) VALUES (105, 'Ania', 'Borges', '67, Booterstown Road', '1994-08-09', 'Female', 'BA', 'Brazil');
INSERT INTO STUDENT (StudentNo, fName, lName, address, date_of_birth, sex, degree, nationality, spl_req) VALUES (106, 'Francesca', 'Spencer', '55, Stradbrook Park', '1993-09-05', 'Female', 'BA', 'Poland','wheel chair access');
INSERT INTO STUDENT (StudentNo, fName, lName, address, date_of_birth, sex, degree, nationality) VALUES (107, 'Chenzhui', 'Li', '9, Avoca Avenue', '1994-11-19', 'Female', 'MSc', 'China');
INSERT INTO STUDENT (StudentNo, fName, lName, address, date_of_birth, sex, degree, nationality) VALUES (108, 'Rahul', 'Kumar', '27, Arlington Plaza', '1989-08-15', 'Male', 'PhD', 'India');
INSERT INTO STUDENT (StudentNo, fName, lName, address, date_of_birth, sex, degree, nationality) VALUES (109, 'Eric', 'Wallner', '43, Muckross House', '1990-03-31', 'Male', 'BA', 'Germany');
INSERT INTO STUDENT (StudentNo, fName, lName, address, date_of_birth, sex, degree, nationality) VALUES (110, 'Orla', 'Fitz', '2, Roebuck Castle', '1993-01-23', 'Male', 'BSc', 'Ireland');


INSERT INTO Flat (flatNo, faddr, no_of_rooms) VALUES (1, '2,Mount Merrion',4);
INSERT INTO Flat (flatNo, faddr, no_of_rooms) VALUES (2, '3,Mount Merrion',5);
INSERT INTO Flat (flatNo, faddr, no_of_rooms) VALUES (3, '3,Mount Merrion',5);
INSERT INTO Flat (flatNo, faddr, no_of_rooms) VALUES (4, '3,Mount Merrion',5);
INSERT INTO Flat (flatNo, faddr, no_of_rooms) VALUES (5, '2,Mount Merrion',4);
INSERT INTO Flat (flatNo, faddr, no_of_rooms) VALUES (6, '2,Mount Merrion',4);
INSERT INTO Flat (flatNo, faddr, no_of_rooms) VALUES (7, '2,Mount Merrion',4);
INSERT INTO Flat (flatNo, faddr, no_of_rooms) VALUES (8, '5,Mount Merrion',6);
INSERT INTO Flat (flatNo, faddr, no_of_rooms) VALUES (9, '5,Mount Merrion',6);
INSERT INTO Flat (flatNo, faddr, no_of_rooms) VALUES (10, '5,Mount Merrion',6);


INSERT INTO Room (roomNo, rent, flatNo) VALUES (21, 500, 2);
INSERT INTO Room (roomNo, rent, flatNo) VALUES (22, 500, 2);
INSERT INTO Room (roomNo, rent, flatNo) VALUES (11, 600, 1);
INSERT INTO Room (roomNo, rent, flatNo) VALUES (12, 600, 5);
INSERT INTO Room (roomNo, rent, flatNo) VALUES (13, 600, 1);
INSERT INTO Room (roomNo, rent, flatNo) VALUES (23, 500, 4);
INSERT INTO Room (roomNo, rent, flatNo) VALUES (31, 450, 9);
INSERT INTO Room (roomNo, rent, flatNo) VALUES (32, 450, 10);
INSERT INTO Room (roomNo, rent, flatNo) VALUES (33, 450, 8);
INSERT INTO Room (roomNo, rent, flatNo) VALUES (24, 500, 4);




INSERT INTO Staff (staffid, fname, lname, addr, position) VALUES (201, 'Gavin', 'Conor', 'B 201', 'Manager');
INSERT INTO Staff (staffid, fname, lname, addr, position) VALUES (202, 'Brendan', 'Murphy', 'A 101', 'Accountant');
INSERT INTO Staff (staffid, fname, lname, addr, position) VALUES (203, 'Gerry', 'Bowen', 'A 102','Security');
INSERT INTO Staff (staffid, fname, lname, addr, position) VALUES (204, 'Fiona','Blake','C 103','Doctor');
INSERT INTO Staff (staffid, fname, lname, addr, position) VALUES (205, 'Gareth','Burke','C 101','Admin');
INSERT INTO Staff (staffid, fname, lname, addr, position) VALUES (206, 'Neil', 'Green','B 202','Cook');
INSERT INTO Staff (staffid, fname, lname, addr, position) VALUES (207, 'Mark', 'Simpson', 'B 203', 'Manager');
INSERT INTO Staff (staffid, fname, lname, addr, position) VALUES (208, 'Ashley', 'Spencer', 'C 104','Gardener');
INSERT INTO Staff (staffid, fname, lname, addr, position) VALUES (209, 'Ramnik', 'Singh','A 103','Security');
INSERT INTO Staff (staffid, fname, lname, addr, position) VALUES (210, 'Eric', 'Shups', 'C 102','Cook');


INSERT INTO Lease (leaseNo, length, studentNo, roomNo, checkin, checkout) VALUES (1,30,100,11,'2014-09-01','2014-10-01');
INSERT INTO Lease (leaseNo, length, studentNo, roomNo, checkin, checkout) VALUES (2,60,101,21,'2014-09-01','2014-11-01');
INSERT INTO Lease (leaseNo, length, studentNo, roomNo, checkin, checkout) VALUES (3,30,102,31,'2015-01-01','2015-02-01');
INSERT INTO Lease (leaseNo, length, studentNo, roomNo, checkin, checkout) VALUES (4,60,103,12,'2015-01-01','2015-03-01');
INSERT INTO Lease (leaseNo, length, studentNo, roomNo, checkin, checkout) VALUES (5,90,104,22,'2014-09-01','2014-12-01');
INSERT INTO Lease (leaseNo, length, studentNo, roomNo, checkin, checkout) VALUES (6,90,105,23,'2014-09-01','2014-12-01');
INSERT INTO Lease (leaseNo, length, studentNo, roomNo, checkin, checkout) VALUES (7,90,106,13,'2014-09-01','2014-12-01');
INSERT INTO Lease (leaseNo, length, studentNo, roomNo, checkin, checkout) VALUES (8,120,107,32,'2015-01-01','2015-05-01');
INSERT INTO Lease (leaseNo, length, studentNo, roomNo, checkin, checkout) VALUES (9,30,108,33,'2014-09-01','2014-10-01');
INSERT INTO Lease (leaseNo, length, studentNo, roomNo, checkin, checkout) VALUES (10,30,109,24,'2014-03-01','2014-04-01');


INSERT INTO Invoice (invNo, payment,payment_date,payment_type,leaseNo) VALUES (141,600,'2014-10-01','Cash',1);
INSERT INTO Invoice (invNo, payment,payment_date,payment_type,leaseNo) VALUES (142,1000,'2014-11-01','Cheque',2);
INSERT INTO Invoice (invNo, payment,payment_date,payment_type,leaseNo) VALUES (143,1250,'2015-02-01','Cash',3);
INSERT INTO Invoice (invNo, payment,payment_date,payment_type,leaseNo) VALUES (144,1200,'2015-03-01','Card',4);
INSERT INTO Invoice (invNo, payment,payment_date,payment_type,leaseNo) VALUES (145,1500,'2014-12-01','Cash',5);
INSERT INTO Invoice (invNo, payment,payment_date,payment_type,leaseNo) VALUES (146,1500,'2014-12-01','Card',6);
INSERT INTO Invoice (invNo, payment,payment_date,payment_type,leaseNo) VALUES (147,1800,'2014-12-01','Card',7);
INSERT INTO Invoice (invNo, payment,payment_date,payment_type,leaseNo) VALUES (148,1800,'2015-05-01','Cheque',8);
INSERT INTO Invoice (invNo, payment,payment_date,payment_type,leaseNo) VALUES (149,450,'2014-10-01','Cheque',9);
INSERT INTO Invoice (invNo, payment,payment_date,payment_type,leaseNo) VALUES (150,500,'2014-04-01','Cash',10);


INSERT INTO Inspection (flatNo, date_of_insp, remarks, staffid) VALUES (1,'2014-10-15','Clean','201');
INSERT INTO Inspection (flatNo, date_of_insp, remarks, staffid) VALUES (2,'2014-10-15','Dirty','201');
INSERT INTO Inspection (flatNo, date_of_insp, remarks, staffid) VALUES (3,'2015-04-15','Smelly','205');
INSERT INTO Inspection (flatNo, date_of_insp, remarks, staffid) VALUES (4,'2014-10-15','Wash','205');
INSERT INTO Inspection (flatNo, date_of_insp, remarks, staffid) VALUES (5,'2014-10-15','Dirty','201');
INSERT INTO Inspection (flatNo, date_of_insp, remarks, staffid) VALUES (6,'2014-10-01','Clean','207');
INSERT INTO Inspection (flatNo, date_of_insp, remarks, staffid) VALUES (7,'2014-10-25','Clean','201');
INSERT INTO Inspection (flatNo, date_of_insp, remarks, staffid) VALUES (8,'2015-04-15','Smelly','205');
INSERT INTO Inspection (flatNo, date_of_insp, remarks, staffid) VALUES (9,'2015-03-05','Clean','207');
INSERT INTO Inspection (flatNo, date_of_insp, remarks, staffid) VALUES (10,'2014-10-15','Wash','207');

INSERT INTO Service (serviceNo, staffid) VALUES (301,201);
INSERT INTO Service (serviceNo, staffid) VALUES (302,201);
INSERT INTO Service (serviceNo, staffid) VALUES (303,205);
INSERT INTO Service (serviceNo, staffid) VALUES (304,207);
INSERT INTO Service (serviceNo, staffid) VALUES (305,201);
INSERT INTO Service (serviceNo, staffid) VALUES (306,201);
INSERT INTO Service (serviceNo, staffid) VALUES (307,205);
INSERT INTO Service (serviceNo, staffid) VALUES (308,207);
INSERT INTO Service (serviceNo, staffid) VALUES (309,205);
INSERT INTO Service (serviceNo, staffid) VALUES (310,207);


INSERT INTO Guardian (studentNo, name,gaddr,tel_no) VALUES (100, 'Teddy','2, Roebuck Castle', '0860371353');
INSERT INTO Guardian (studentNo, name,gaddr,tel_no) VALUES (101,'Peter','28, St Patricks Park','01234532');
INSERT INTO Guardian (studentNo, name,gaddr,tel_no) VALUES (102,'John','24, Stradbrook Park','014324634');
INSERT INTO Guardian (studentNo, name,gaddr,tel_no) VALUES (103,'Fiona','34,Fosters Av','01343434');
INSERT INTO Guardian (studentNo, name,gaddr,tel_no) VALUES (104, 'James', '43, Georges Street','083023423');
INSERT INTO Guardian (studentNo, name,gaddr,tel_no) VALUES (105,'Gerald','21, Avoca Avenue','0870342123');
INSERT INTO Guardian (studentNo, name,gaddr,tel_no) VALUES (106,'Hazel','28, St Patricks Park','0860123213');
INSERT INTO Guardian (studentNo, name,gaddr,tel_no) VALUES (107,'Brendan','2, The Gallops', '012432311');
INSERT INTO Guardian (studentNo, name,gaddr,tel_no) VALUES (108,'Oonagh','23, Delgany Cottages','02422424');
INSERT INTO Guardian (studentNo, name,gaddr,tel_no) VALUES (109,'Emma','12, Diagonal Alley','0234241');
INSERT INTO Guardian (studentNo, name,gaddr,tel_no) VALUES (110,'Rupert','45, Leaky Cauldron','01345214');

