DROP DATABASE IF EXISTS mydatabase;
CREATE DATABASE mydatabase;

USE mydatabase;

CREATE TABLE first_selection
(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    PRIMARY KEY (id)
);

INSERT INTO first_selection (name) VALUES ('apple');
INSERT INTO first_selection (name) VALUES ('banana');
INSERT INTO first_selection (name) VALUES ('orange');
INSERT INTO first_selection (name) VALUES ('grape');
INSERT INTO first_selection (name) VALUES ('mango');

CREATE TABLE  second_selection
(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    PRIMARY KEY (id)
);
