# The following commands handles creation of primary tables
CREATE TABLE CUSTOMER
(
    CustomerID      INT          PRIMARY KEY AUTO_INCREMENT,
    CustomerName    VARCHAR(255) NOT NULL,
    CustomerAddress VARCHAR(255) NOT NULL,
    CustomerAge     INT          NOT NULL
);

CREATE TABLE GRAPE
(
    GrapeID    INT          PRIMARY KEY AUTO_INCREMENT,
    GrapeName  VARCHAR(255) NOT NULL,
    GrapeSize  VARCHAR(255) NOT NULL,
    GrapeColor VARCHAR(255) NOT NULL
);

CREATE TABLE STORAGE
(
    StorageID      INT          PRIMARY KEY AUTO_INCREMENT,
    StorageName    VARCHAR(255) NOT NULL,
    StorageAddress VARCHAR(255) NOT NULL,
    RackNumber     INT,
    AisleNumber    INT
);

CREATE TABLE QUALITY
(
    QualityID     INT          PRIMARY KEY AUTO_INCREMENT,
    QualityName   VARCHAR(255) NOT NULL,
    QualityAroma  VARCHAR(255) NOT NULL,
    QualityColor  VARCHAR(255) NOT NULL,
    QualityFlavor VARCHAR(255) NOT NULL
);

CREATE TABLE WINERY
(
    WineryID   INT          PRIMARY KEY AUTO_INCREMENT,
    WineryName VARCHAR(255) NOT NULL
);
