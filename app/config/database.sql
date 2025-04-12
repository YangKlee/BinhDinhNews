create database BinhDinhNews
use BinhDinhNews

create table User_role(
	ROLE_ID varchar(10) primary key,
    ROLE_DESCRIPTION nvarchar(100)
);
create table UserData(
	UID int AUTO_INCREMENT primary key ,
    UserName varchar(100),
    PassWord varchar(255),
    FullName nvarchar(100),
    Email nvarchar(50),
    ROLE_ID varchar(10), foreign key (ROLE_ID) references User_Role(Role_ID)
);
create table StaffData(
	UID int primary key,
    foreign key (UID)  references UserData(UID),
    Alias nvarchar(100) 

);

create table Category(
	ID_CAT int auto_increment primary key,
    NAME_CAT nvarchar(100)
);
create table Article(
	ID_Art int auto_increment primary key,
	ID_CAT int , foreign key (ID_CAT)  references Category(ID_Cat),
    Time_modify datetime,
    StaffID int, foreign key (StaffID) references UserData(UID),
    Title nvarchar(1000),
    IS_Public bool
);

create table ViewArtData(
	UID int , foreign key (UID)  references UserData(UID),
	TimeView datetime,
    ID_Art int, foreign key (ID_Art) references Article(ID_Art)
);
