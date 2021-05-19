CREATE DATABASE JongerenKansrijker;

USE JongerenKansrijker;

CREATE TABLE activiteit(
    activiteitcode VARCHAR(3),
    activiteit VARCHAR(40),
    PRIMARY KEY (activiteitcode)
);

CREATE TABLE jongere(
    jongerecode VARCHAR(5),
    roepnaam VARCHAR(20),
    tussenvoegsel VARCHAR(7),
    achternaam VARCHAR(25),
    inschrijfdatum DATE,
    PRIMARY KEY (jongerecode)
);

CREATE TABLE instituut(
    instituutcode VARCHAR(5),
    instituut VARCHAR(40),
    instituuttelefoon VARCHAR(11),
    PRIMARY KEY (instituutcode)
);

CREATE TABLE jongereinstituut(
    jongerecode VARCHAR(5),
    instituutcode VARCHAR(5),
    startdatum DATE,
    FOREIGN KEY(jongerecode) REFERENCES jongere(jongerecode),
    FOREIGN KEY(instituutcode) REFERENCES instituut(instituutcode)
);

CREATE TABLE jongereactiviteit(
    jongerecode VARCHAR(5),
    activiteitcode VARCHAR(3),
    startdatum DATE,
    afgerond TINYINT(1),
    FOREIGN KEY(jongerecode) REFERENCES jongere(jongerecode),
    FOREIGN KEY(activiteitcode) REFERENCES activiteit(activiteitcode)
);