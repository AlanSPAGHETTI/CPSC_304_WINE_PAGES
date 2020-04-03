# The following commands handles insertion of primary tables
INSERT INTO CUSTOMER
VALUES (1, "Chloe Brown",     "2048 Adelaide St, Toronto",        25);

INSERT INTO CUSTOMER
VALUES (2, "Jessica Jones",   "3018 Roger Street, Port Alberni",  32);

INSERT INTO CUSTOMER
VALUES (3, "Sophie Martinez", "1795 Victoria Park Ave, Toronto",  27);

INSERT INTO CUSTOMER
VALUES (4, "James P Downey",  "4832 Tchesinkut Lake Rd, Chicago", 45);

INSERT INTO CUSTOMER
VALUES (5, "Anton S Newton",  "691 Haaglund Rd, Texas",           65);



INSERT INTO GRAPE
VALUES (1, "Gewurztraminer", "Large",  "Red");

INSERT INTO GRAPE
VALUES (2, "Pinot Noir",     "Large",  "Purple");

INSERT INTO GRAPE
VALUES (3, "Chardonnay",     "Medium", "Green");

INSERT INTO GRAPE
VALUES (4, "Zinfandel",      "Medium", "Black");

INSERT INTO GRAPE
VALUES (5, "Riesling",       "Small",  "Green");



INSERT INTO STORAGE
VALUES (1, "BC Liquor",         "3313 Shrum Lane",   NULL, 10);

INSERT INTO STORAGE
VALUES (2, "Wines and More",    "1945 Fender Road",  NULL, 20);

INSERT INTO STORAGE
VALUES (3, "Oak Bay Warehouse", "5205 Lakeshore Rd", 300, NULL);

INSERT INTO STORAGE
VALUES (4, "Durell Warehouse",  "1429 Tubbs Lane",   400, NULL);

INSERT INTO STORAGE
VALUES (5, "Chateau Warehouse", "50 Pender Street",  500, NULL);



INSERT INTO QUALITY
VALUES (1, "Gewurztraminer", "Lychee and Grapefruit", "Gold",    "Lychee and Pineapple");

INSERT INTO QUALITY
VALUES (2, "Pinot Noir",     "Cherry and Raspberry",  "Crimson", "Cherry and Vanilla");

INSERT INTO QUALITY
VALUES (3, "Chardonnay",     "Apple and Lemon",       "Gold",    "Apple and Pineapple");

INSERT INTO QUALITY
VALUES (4, "Zinfandel",      "Licorice and Smoke",    "Red",     "Blueberry and Black Pepper");

INSERT INTO QUALITY
VALUES (5, "Riesling",       "Honey and Ginger",      "Yellow",  "Lemon and Pineapple");



INSERT INTO WINERY
VALUES (1, "St. Hubertus & Oak Bay Estate");

INSERT INTO WINERY
VALUES (2, "Gehringer Brothers Estate");

INSERT INTO WINERY
VALUES (3, "King Estate Suppliers");

INSERT INTO WINERY
VALUES (4, "The Durell Vineyard");

INSERT INTO WINERY
VALUES (5, "Chateau Montelena Estate");



# The following commands handles insertion of secondary tables
INSERT INTO WINERY_REP
VALUES (1001, "Brandon Hubertus", 1);

INSERT INTO WINERY_REP
VALUES (1002, "Jackson Hubertus", 1);

INSERT INTO WINERY_REP
VALUES (2001, "John Gehringer", 2);

INSERT INTO WINERY_REP
VALUES (2002, "Alan Gehringer", 2);

INSERT INTO WINERY_REP
VALUES (3001, "Steve King", 3);

INSERT INTO WINERY_REP
VALUES (3002, "April King", 3);

INSERT INTO WINERY_REP
VALUES (4001, "Bob Durell", 4);

INSERT INTO WINERY_REP
VALUES (4002, "Tim Durell", 4);

INSERT INTO WINERY_REP
VALUES (5001, "Jessica Montelena", 5);

INSERT INTO WINERY_REP
VALUES (5002, "Britany Montelena", 5);
