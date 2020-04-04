# The following commands handles creation of primary tables
CREATE TABLE CUSTOMER
(
    CustomerID      INT          NOT NULL AUTO_INCREMENT,
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
    WineryID   INT          NOT NULL,
    WineryName VARCHAR(255) NOT NULL,
    PRIMARY KEY (WineryID)
);

# The following commands handles creation of secondary tables
CREATE TABLE WINERY_REP
(
    WineryRepID   INT          NOT NULL,
    WineryRepName VARCHAR(255) NOT NULL,
    WineryID      INT          NOT NULL REFERENCES WINERY(WineryID) ON DELETE RESTRICT,
    PRIMARY KEY (WineryRepID)
);

CREATE TABLE WINERY_BRANCH
(
    WineryBranchID      INT          NOT NULL,
    WineryBranchName    VARCHAR(255) NOT NULL,
    WineryBranchAddress VARCHAR(255) NOT NULL,
    WineryID            INT          NOT NULL REFERENCES WINERY(WineryID) ON DELETE RESTRICT,
    PRIMARY KEY (WineryBranchID)
);

# The following commands handles creation of tertiary tables
CREATE TABLE FAVORITE
(
    FavoriteID INT NOT NULL,
    CustomerID INT NOT NULL REFERENCES CUSTOMER(CustomerID) ON DELETE RESTRICT,
    WineID     INT NOT NULL REFERENCES Wine(WineID)         ON DELETE RESTRICT,
    DateAdded  INT NOT NULL,
    PRIMARY KEY (FavoriteID)
);

CREATE TABLE WINE
(
    WineID   INT          NOT NULL,
    WineryID INT          NOT NULL REFERENCES WINERY(WineryID) ON DELETE RESTRICT,
    WineName VARCHAR(255) NOT NULL,
    WineYear INT          NOT NULL,
    WineCost DECIMAL(5,2) NOT NULL,
    WineABV  DECIMAL(5,2) NOT NULL,
    PRIMARY KEY (WineID)
);

CREATE TABLE WINE_BROWSED_BY
(
    WineBrowsedByID INT NOT NULL,
    WineID          INT NOT NULL REFERENCES Wine(WineID)         ON DELETE RESTRICT,
    CustomerID      INT NOT NULL REFERENCES CUSTOMER(CustomerID) ON DELETE RESTRICT,
    LastVisited     INT NOT NULL,
    PRIMARY KEY (WineBrowsedByID)
);

CREATE TABLE WINE_MADE_FROM
(
    WineMadeFromID INT NOT NULL,
    WineID         INT NOT NULL REFERENCES WINE(WineID)   ON DELETE RESTRICT,
    GrapeID        INT NOT NULL REFERENCES GRAPE(GrapeID) ON DELETE RESTRICT,
    PRIMARY KEY (WineMadeFromID)
);

CREATE TABLE WINE_STORED_AT
(
    WineStoredAtID INT NOT NULL,
    WineID         INT NOT NULL REFERENCES WINE(WineID)       ON DELETE RESTRICT,
    StorageID      INT NOT NULL REFERENCES STORAGE(StorageID) ON DELETE RESTRICT,
    PRIMARY KEY (WineStoredAtID)
);

CREATE TABLE WINE_HAS_QUALITY
(
    WineHasQualityID INT NOT NULL,
    WineID           INT NOT NULL REFERENCES WINE(WineID)       ON DELETE RESTRICT,
    QualityID        INT NOT NULL REFERENCES QUALITY(QualityID) ON DELETE RESTRICT,
    PRIMARY KEY (WineHasQualityID)
);
