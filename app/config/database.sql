-- Tạo cơ sở dữ liệu
CREATE DATABASE BinhDinhNews;
USE BinhDinhNews;

-- Bảng phân quyền người dùng
CREATE TABLE User_role (
    ROLE_ID VARCHAR(10) PRIMARY KEY,
    ROLE_DESCRIPTION NVARCHAR(100)
);

-- Bảng dữ liệu người dùng
CREATE TABLE UserData (
    UserID INT AUTO_INCREMENT PRIMARY KEY,
    UserName VARCHAR(100),
    PassWord VARCHAR(255),
    Email NVARCHAR(50),
    ROLE_ID VARCHAR(10),
    FOREIGN KEY (ROLE_ID) REFERENCES User_role(ROLE_ID)
);

-- Bảng tác giả
CREATE TABLE AuthorData (
    AuthorID INT PRIMARY KEY,
    FOREIGN KEY (AuthorID) REFERENCES UserData(UserID),
    CCCD VARCHAR(100),
    FullName NVARCHAR(100) NOT NULL,
    Phones VARCHAR(10),
    Alias NVARCHAR(100),
    Organzation NVARCHAR(255),
    NumOfAricle INT DEFAULT 0
);

-- Bảng nhân viên
CREATE TABLE StaffData (
    UserID INT PRIMARY KEY,
    FOREIGN KEY (UserID) REFERENCES UserData(UserID),
    FullName NVARCHAR(100) NOT NULL,
    Phones VARCHAR(10)
);

-- Bảng danh mục
CREATE TABLE Category (
    CategoryID INT AUTO_INCREMENT PRIMARY KEY,
    CategoryName NVARCHAR(255)
);

-- Bảng bài viết
CREATE TABLE Article (
    ArticleID INT AUTO_INCREMENT PRIMARY KEY,
    CategoryID INT,
    FOREIGN KEY (CategoryID) REFERENCES Category(CategoryID),
    Time_modify DATETIME DEFAULT CURRENT_TIMESTAMP,
    AuthorID INT,
    FOREIGN KEY (AuthorID) REFERENCES AuthorData(AuthorID),
    AuthorGuestName NVARCHAR(255),
    Title NVARCHAR(1000),
    Tags NVARCHAR(255),
    MainImage NVARCHAR(100),
    ListImage NVARCHAR(255),
    ArticleStatus INT DEFAULT 0
    -- 0: nháp, 1: chờ duyệt, 2: đã đăng, -1: đã hủy
);

-- Bảng bình luận
CREATE TABLE Comment (
    CommentID INT AUTO_INCREMENT PRIMARY KEY,
    ArticleID INT,
    FOREIGN KEY (ArticleID) REFERENCES Article(ArticleID),
    UserID INT,
    FOREIGN KEY (UserID) REFERENCES UserData(UserID),
    Timer DATETIME DEFAULT CURRENT_TIMESTAMP,
    Content NVARCHAR(1000)
);