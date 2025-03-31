create database BinhDinhNews_Demo11111
use BinhDinhNews_Demo11111

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
    Alias nvarchar(100) ,
    Public_article int
);

create table Category(
	ID_CAT varchar(10) primary key,
    NAME_CAT nvarchar(100),
    total_visits int
);
create table Article(
	ID_Art varchar(100) primary key,
    Time_Public datetime,
    Time_modify datetime not null,
    StaffID nvarchar(10), foreign key (StaffID) references UserData(UID),
    ViewArt int,
    Title nvarchar(1000),
	ID_CAT varchar(10), foreign key (ID_CAT)  references Category(ID_Cat),
    IS_Public bool
);
create table Commment(
	ID_Cmt varchar(100),
	ID_Art varchar(100), foreign key (ID_Art) references Article(ID_Art),
    UID nvarchar(10) , foreign key (UID)  references UserData(UID),
    Time_cmt datetime,
    Content text
)
create table ViewData(
	TimeView datetime,
    ID_Art varchar(100), foreign key (ID_Art) references Article(ID_Art)
);
