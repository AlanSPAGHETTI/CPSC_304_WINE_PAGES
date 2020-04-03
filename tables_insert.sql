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
VALUES (1001, "Harissa Gewurztraminer", "Large",  "Red");

INSERT INTO GRAPE
VALUES (1002, "Soccano Gewurztraminer", "Large",  "Red");

INSERT INTO GRAPE
VALUES (2001, "Grouse Pinot Noir",      "Large",  "Purple");

INSERT INTO GRAPE
VALUES (2002, "Napoli Pinot Noir",      "Large",  "Purple");

INSERT INTO GRAPE
VALUES (3001, "White Chardonnay",       "Medium", "Green");

INSERT INTO GRAPE
VALUES (3002, "Olive Chardonnay",       "Medium", "Green");

INSERT INTO GRAPE
VALUES (4001, "Haddock Zinfandel",      "Medium", "Black");

INSERT INTO GRAPE
VALUES (4002, "Planter Zinfandel",      "Medium", "Black");

INSERT INTO GRAPE
VALUES (5001, "Hogget Riesling",        "Small",  "Green");

INSERT INTO GRAPE
VALUES (5002, "Vindal Riesling",        "Small",  "Green");



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



INSERT INTO WINERY_BRANCH
VALUES (1001, "Canadian Branch", "1588 Brand Road", 1);

INSERT INTO WINERY_BRANCH
VALUES (1002, "American Branch", "1432 Levin Road", 1);

INSERT INTO WINERY_BRANCH
VALUES (2001, "British Branch", "842 Rue Levy", 2);

INSERT INTO WINERY_BRANCH
VALUES (2002, "Spanish Branch", "315 Ivy Levy", 2);

INSERT INTO WINERY_BRANCH
VALUES (3001, "Canadian Branch", "3785 Carlson Road", 3);

INSERT INTO WINERY_BRANCH
VALUES (3002, "American Branch", "9821 Jameson Road", 3);

INSERT INTO WINERY_BRANCH
VALUES (4001, "British Branch", "213 Bag Levy", 4);

INSERT INTO WINERY_BRANCH
VALUES (4002, "Spanish Branch", "876 Don Levy", 4);

INSERT INTO WINERY_BRANCH
VALUES (5001, "Canadian Branch", "7685 Tycos Road", 5);

INSERT INTO WINERY_BRANCH
VALUES (5002, "American Branch", "2554 Damer Road", 5);



# The following commands handles insertion of tertiary tables
INSERT INTO FAVORITE
VALUES (1001, 1, 1001, 1583798400);

INSERT INTO FAVORITE
VALUES (1002, 1, 1002, 1584230400);

INSERT INTO FAVORITE
VALUES (2001, 2, 1001, 1583798400);

INSERT INTO FAVORITE
VALUES (2002, 2, 1002, 1584230400);

INSERT INTO FAVORITE
VALUES (3001, 3, 1001, 1583798400);

INSERT INTO FAVORITE
VALUES (3002, 3, 1002, 1584230400);

INSERT INTO FAVORITE
VALUES (4001, 4, 2001, 1583798400);

INSERT INTO FAVORITE
VALUES (4002, 4, 2002, 1584230400);

INSERT INTO FAVORITE
VALUES (5001, 5, 2001, 1583798400);

INSERT INTO FAVORITE
VALUES (5002, 5, 2002, 1584230400);



INSERT INTO WINE
VALUES (1001, 1, "Great White Gewurztraminer", 2017, "32.99", "13.00");

INSERT INTO WINE
VALUES (1002, 1, "Great White Gewurztraminer", 2018, "32.99", "15.00");

INSERT INTO WINE
VALUES (2001, 2, "Regular Pinot Noir", 1950, "55.99", "14.30");

INSERT INTO WINE
VALUES (2002, 2, "Premium Pinot Noir", 1920, "75.99", "14.30");

INSERT INTO WINE
VALUES (3001, 3, "Two Sticks Chardonnay", 2016, "24.99", "14.50");

INSERT INTO WINE
VALUES (3002, 3, "Six Sticks Chardonnay", 2017, "26.99", "14.50");

INSERT INTO WINE
VALUES (4001, 4, "Calistoga Zinfandel", 2014, "40.99", "12.30");

INSERT INTO WINE
VALUES (4002, 4, "Montengro Zinfandel", 2015, "40.99", "12.30");

INSERT INTO WINE
VALUES (5001, 5, "Classic Riesling", 1995, "150.99", "13.10");

INSERT INTO WINE
VALUES (5002, 5, "Refined Riesling", 1996, "175.99", "13.10");



INSERT INTO WINE_BROWSED_BY
VALUES (1001, 1001, 1, 1583798400);

INSERT INTO WINE_BROWSED_BY
VALUES (1002, 1002, 1, 1584230400);

INSERT INTO WINE_BROWSED_BY
VALUES (2001, 1001, 2, 1583798400);

INSERT INTO WINE_BROWSED_BY
VALUES (2002, 1002, 2, 1584230400);

INSERT INTO WINE_BROWSED_BY
VALUES (3001, 1001, 3, 1583798400);

INSERT INTO WINE_BROWSED_BY
VALUES (3002, 1002, 3, 1584230400);

INSERT INTO WINE_BROWSED_BY
VALUES (4001, 2001, 4, 1583798400);

INSERT INTO WINE_BROWSED_BY
VALUES (4002, 2002, 4, 1584230400);

INSERT INTO WINE_BROWSED_BY
VALUES (5001, 2001, 5, 1583798400);

INSERT INTO WINE_BROWSED_BY
VALUES (5002, 2002, 5, 1584230400);
