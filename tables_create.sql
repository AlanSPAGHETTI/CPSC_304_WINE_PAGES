# The following commands handles creation of primary tables
CREATE TABLE CUSTOMER
(
    CustomerID      INT          NOT NULL,
    CustomerName    VARCHAR(255) NOT NULL,
    CustomerAddress VARCHAR(255) NOT NULL,
    CustomerAge     INT          NOT NULL,
    PRIMARY KEY (CustomerID)
);

CREATE TABLE GRAPE
(
    GrapeID    INT          NOT NULL,
    GrapeName  VARCHAR(255) NOT NULL,
    GrapeSize  VARCHAR(255) NOT NULL,
    GrapeColor VARCHAR(255) NOT NULL,
    PRIMARY KEY (GrapeID)
);

CREATE TABLE STORAGE
(
    StorageID      INT          NOT NULL,
    StorageName    VARCHAR(255) NOT NULL,
    StorageAddress VARCHAR(255) NOT NULL,
    RackNumber     INT,
    AisleNumber    INT,
    PRIMARY KEY (StorageID)
);

CREATE TABLE QUALITY
(
    QualityID     INT          NOT NULL,
    QualityName   VARCHAR(255) NOT NULL,
    QualityAroma  VARCHAR(255) NOT NULL,
    QualityColor  VARCHAR(255) NOT NULL,
    QualityFlavor VARCHAR(255) NOT NULL,
    PRIMARY KEY (QualityID)
);

CREATE TABLE WINERY
(
    WineryID   INT          PRIMARY KEY AUTO_INCREMENT,
    WineryName VARCHAR(255) NOT NULL
);

# The following commands handles creation of secondary tables
CREATE TABLE WINERY_REP
(
    WineryRepID   INT          PRIMARY KEY AUTO_INCREMENT,
    WineryRepName VARCHAR(255) NOT NULL,
    WineryID      INT          REFERENCES WINERY(WineryID) NOT NULL ON DELETE RESTRICT
);

CREATE TABLE WINERY_BRANCH
(
    WineryBranchID      INT          PRIMARY KEY AUTO_INCREMENT,
    WineryBranchName    VARCHAR(255) NOT NULL,
    WineryBranchAddress VARCHAR(255) NOT NULL,
    WineryID            INT          REFERENCES WINERY(WineryID) NOT NULL ON DELETE RESTRICT
);

# The following commands handles creation of tertiary tables
CREATE TABLE FAVORITE
(
    FavoriteID INT PRIMARY KEY AUTO_INCREMENT,
    CustomerID INT REFERENCES CUSTOMER(CustomerID) NOT NULL ON DELETE RESTRICT,
    WineID     INT REFERENCES Wine(WineID)         NOT NULL ON DELETE RESTRICT,
    DateAdded  INT NOT NULL
);

CREATE TABLE WINE
(
    WineID   INT          PRIMARY KEY AUTO_INCREMENT,
    WineryID INT          REFERENCES WINERY(WineryID) NOT NULL ON DELETE RESTRICT,
    WineName VARCHAR(255) NOT NULL,
    WineYear INT          NOT NULL,
    WineCost DECIMAL(5,2) NOT NULL,
    WineABV  DECIMAL(5,2) NOT NULL
);

CREATE TABLE WINE_BROWSED_BY
(
    WineBrowsedByID INT PRIMARY KEY AUTO_INCREMENT,
    WineID          INT REFERENCES Wine(WineID)         NOT NULL ON DELETE RESTRICT,
    CustomerID      INT REFERENCES CUSTOMER(CustomerID) NOT NULL ON DELETE RESTRICT,
    LastVisited     INT NOT NULL
);

CREATE TABLE WINE_MADE_FROM
(
    WineMadeFromID INT PRIMARY KEY AUTO_INCREMENT,
    WineID         INT REFERENCES WINE(WineID)   NOT NULL ON DELETE RESTRICT,
    GrapeID        INT REFERENCES GRAPE(GrapeID) NOT NULL ON DELETE RESTRICT
);

CREATE TABLE WINE_STORED_AT
(
    WineStoredAtID INT PRIMARY KEY AUTO_INCREMENT,
    WineID         INT REFERENCES WINE(WineID)       NOT NULL ON DELETE RESTRICT,
    StorageID      INT REFERENCES STORAGE(StorageID) NOT NULL ON DELETE RESTRICT
);

CREATE TABLE WINE_HAS_QUALITY
(
    WineHasQualityID INT PRIMARY KEY AUTO_INCREMENT,
    WineID           INT REFERENCES WINE(WineID)       NOT NULL ON DELETE RESTRICT,
    QualityID        INT REFERENCES QUALITY(QualityID) NOT NULL ON DELETE RESTRICT
);
