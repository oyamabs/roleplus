CREATE DATABASE IF NOT EXISTS roleplus;

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
    gender TEXT NULL,
    last_name TEXT NOT NULL,
    first_name TEXT NOT NULL,
    race TEXT NULL,
    age INT NULL,
    hobbies TEXT NULL,
    job TEXT NULL,
    power TEXT NULL,
    story TEXT NULL,
    image_url TEXT NULL,
    PRIMARY KEY (id),
    CONSTRAINT FOREIGN KEY (ownerid) REFERENCES accounts(id)
) ENGINE = InnoDB;

CREATE TABLE complete_characters (
    id INT NOT NULL ,
    ownerid INT NOT NULL ,
    gender TEXT NOT NULL ,
    last_name TEXT NOT NULL ,
    first_name TEXT NOT NULL ,
    race TEXT NULL ,
    age INT NULL ,
    hobbies TEXT NULL ,
    job TEXT NULL ,
    power TEXT NULL ,
    anecdote TEXT NULL ,
    tastes TEXT NULL ,
    strenghts TEXT NULL ,
    weaknesses TEXT NULL ,
    objects TEXT NULL ,
    story TEXT NULL,
    image_url TEXT NULL,
    PRIMARY KEY (id),
    CONSTRAINT FOREIGN KEY (ownerid) REFERENCES accounts(id)
) ENGINE = InnoDB;