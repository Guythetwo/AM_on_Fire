CREATE TABLE student(
    Student_Id INT(11) PRIMARY KEY AUTO_INCREMENT,
    First_Name VARCHAR(45),
    Last_Name VARCHAR(45),
    Gender VARCHAR(10) CHECK (Gender IN ("Male","Female")),
    DOB DATE,
    Home_Address VARCHAR(45),
    Telephone_Number VARCHAR(10),
    Email VARCHAR(255),
    Date_Joined DATE,
    Average_Grade DECIMAL(10,1),
    Comments VARCHAR(200)
);

CREATE TABLE parent(
    Parent_id INT(11) PRIMARY KEY AUTO_INCREMENT,
    First_Name VARCHAR(45),
    Last_Name VARCHAR(45),
    Contact_Number VARCHAR(45),
	Home_Address VARCHAR(45),
    DOB DATE,
    Email VARCHAR(255),
    Comments VARCHAR(200)
);

CREATE TABLE family(
    Family_Id int(11) PRIMARY KEY AUTO_INCREMENT,
    Student_Id int(11) REFERENCES student(Student_Id),
    Parent_Id int(11) REFERENCES parent(Parent_Id)
);

insert into student (First_Name, Last_Name, Gender, DOB) values ('john', 'doe', 'Male', '2005-12-7');
insert into parent (First_Name, Last_Name, DOB) values ('john', 'dad', '2005-12-7');
insert into family (Student_Id, Parent_Id) values (1, 1);

#docker-compose up