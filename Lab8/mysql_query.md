mysql -u root -p 


CREATE DATABASE gces;
SHOW DATABASES;
USE gces;
CREATE TABLE student (
    Id INT NOT NULL ,
    Name VARCHAR(30) NOT NULL,
    Address VARCHAR(50) NOT NULL,
    Phone_Number BIGINT NOT NULL,
    Bio VARCHAR(200)
);



CREATE TABLE users (
    Id INT NOT NULL ,
    Username VARCHAR(15) NOT NULL UNIQUE,
    Password VARCHAR(100) NOT NULL ,
    Email VARCHAR(40) NOT NULL UNIQUE
 );


 CREATE TABLE addresses (
    Id INT NOT NULL , 
    User_Id INT NOT NULL ,
    Country VARCHAR(15) NOT NULL,
    State VARCHAR(15),
    District VARCHAR(20) NOT NULL,
    Address1 VARCHAR(50),
    Address2 VARCHAR(50)
 );


 SHOW TABLES;
 DESCRIBE addresses;
 DESCRIBE users;
 DESCRIBE student;


ALTER TABLE student
RENAME TO students;


 INSERT INTO students ( Id, Name, Address, Phone_Number, Bio )
 VALUES ( 1, 'prabin gurung', 'Lamachaur-16', 9863375678, 'sportsman' );

 INSERT INTO students ( Id, Name, Address, Phone_Number, Bio )
 VALUES ( 2, 'Bibek baniya', 'Hansapur', 9866009581, 'hacker' );

 INSERT INTO students ( Id, Name, Address, Phone_Number, Bio )
 VALUES ( 3, 'nishan pun', 'Lamachaur-19', 9866010874, 'gamer' );

 INSERT INTO students ( Id, Name, Address, Phone_Number, Bio )
 VALUES ( 4, 'Sumin Gurung', 'Lamachaur-19', 9816649863, 'guitarist' );



 INSERT INTO users ( Id, Username, Password, Email )
 VALUES ( 1, 'Pra', MD5('PRABIN'), 'prabin@gmail.com' );

 INSERT INTO users ( Id, Username, Password, Email )
 VALUES ( 2, 'BiB', MD5('BIBEK'), 'bibek@gmail.com' );

 INSERT INTO users ( Id, Username, Password, Email )
 VALUES ( 3, 'nis', MD5('NISHAN'), 'nishan@yahoo.com' );


 INSERT INTO users ( Id, Username, Password, Email )
 VALUES ( 4, 'Sum', MD5('SUMIN'), 'rockstar666@gmail.com' );



 INSERT INTO addresses ( Id, User_Id, Country, State, District, Address1, Address2 )
 VALUES ( 1, 1, 'Nepal', '', 'Kaski', 'Baniyathar', 'Lamachaur' );

 INSERT INTO addresses ( Id, User_Id, Country, State, District, Address1, Address2 )
 VALUES ( 2, 2, 'Nepal', '', 'Kaski', 'Hansapur', 'Bindabasini' );

 INSERT INTO addresses ( Id, User_Id, Country, State, District, Address1, Address2 )
 VALUES ( 3, 3, 'Nepal', '', 'Kaski', 'Bhaktipath', 'Lamachaur' );


 INSERT INTO addresses ( Id, User_Id, Country, State, District, Address1, Address2 )
 VALUES ( 6, 6, 'Nepal', '', 'Kaski', 'Bhaktipath', 'Ghachowk' );


 SELECT Name FROM students WHERE Name LIKE 'A%';


 UPDATE students 
 SET Address = 'Lamachaur-19,Bhaktipath'
 WHERE ID = 1;


 DELETE FROM students WHERE Id = 1 ;

 DELETE FROM students WHERE Id = 2 ;
 