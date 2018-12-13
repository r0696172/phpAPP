CREATE DATABASE docenten;
USE docenten;

CREATE TABLE IF NOT EXISTS docenten
(docid int NOT NULL,
naam varchar(50) NOT NULL,
voornaam varchar(50) NOT NULL);

INSERT INTO docenten (docid, naam, voornaam) VALUES 
(1, 'Jan', 'Jannsen'),
(2, 'Ann','Hannes'),
(3, 'Bart', 'Portier'),
(4, 'Filippo', 'Bagnoli');