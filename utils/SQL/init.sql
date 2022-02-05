CREATE DATABASE roleplus;

USE roleplus;

CREATE TABLE accounts (
    id INT NOT NULL AUTO_INCREMENT ,
    username VARCHAR(255) NOT NULL ,
    password VARCHAR(1024) NOT NULL ,
    PRIMARY KEY (id)
) ENGINE = InnoDB;


CREATE TABLE simple_characters (
    id INT NOT NULL AUTO_INCREMENT ,
    ownerid INT NOT NULL,
    gender VARCHAR(2048) NULL,
    last_name VARCHAR(2048) NULL,
    first_name VARCHAR(2048) NULL,
    race VARCHAR(2048) NULL,
    age INT NULL,
    hobbies VARCHAR(2048) NULL,
    job VARCHAR(2048) NULL,
    power VARCHAR(2048) NULL,
    story TEXT NULL,
    image_url TEXT NULL,
    PRIMARY KEY (id),
    CONSTRAINT FOREIGN KEY (ownerid) REFERENCES accounts(id)

) ENGINE = InnoDB;

CREATE TABLE complete_characters (
    id INT NOT NULL ,
    ownerid INT NOT NULL ,
    gender VARCHAR(2048) NOT NULL ,
    last_name VARCHAR(2048) NOT NULL ,
    first_name VARCHAR(2048) NOT NULL ,
    race VARCHAR(2048) NULL ,
    age INT NOT NULL ,
    hobbies VARCHAR(2048) NOT NULL ,
    job VARCHAR(2048) NOT NULL ,
    power VARCHAR(2048) NOT NULL ,
    anecdote VARCHAR(2048) NOT NULL ,
    tastes VARCHAR(2048) NOT NULL ,
    strenghts TEXT NOT NULL ,
    weaknesses TEXT NOT NULL ,
    objects TEXT NOT NULL ,
    story TEXT NOT NULL,
    image_url TEXT NULL,
    PRIMARY KEY (id),
    CONSTRAINT FOREIGN KEY (ownerid) REFERENCES accounts(id)
) ENGINE = InnoDB;