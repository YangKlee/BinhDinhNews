create database BinhDinhNews
use BinhDinhNews

create table User_role(
	ROLE_ID varchar(10) primary key,
    ROLE_DESCRIPTION nvarchar(100)
);
create table UserData(
	UID nvarchar(10) primary key,
    UserName varchar(10),
    PassWord varchar(1000),
    FullName nvarchar(100),
    Email nvarchar(50),
    ROLE_ID varchar(10), foreign key (ROLE_ID) references User_Role(Role_ID)
);
create table StaffData(
	UID nvarchar(10) primary key,
    foreign key (UID)  references UserData(UID),
    Alias nvarchar(100) 

);

create table Category(
	ID_CAT varchar(10) primary key,
    NAME_CAT nvarchar(100)
);
create table Article(
	ID_Art varchar(100) primary key,
	ID_CAT varchar(10), foreign key (ID_CAT)  references Category(ID_Cat),
    Time_modify datetime,
    StaffID nvarchar(10), foreign key (StaffID) references UserData(UID),
    Title nvarchar(1000),
    IS_Public bool
);
create table Commment(
	ID_Cmt varchar(100),
	ID_Art varchar(100), foreign key (ID_Art) references Article(ID_Art),
    UID nvarchar(10) , foreign key (UID)  references UserData(UID),
    Time_cmt datetime,
    Content text
)
create table ViewArtData(
	UID nvarchar(10) , foreign key (UID)  references UserData(UID),
	TimeView datetime,
    ID_Art varchar(100), foreign key (ID_Art) references Article(ID_Art)
);
