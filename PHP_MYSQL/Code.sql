CREATE DATABASE eleves;
Use eleves;

CREATE TABLE eleves (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
    prenom varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
    datenaissance DATETIME NOT NULL,
    genre CHAR(1) NOT NULL,
    classe VARCHAR(255) NOT NULL,
    diplome_id varchar(45) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
    telephone VARCHAR(15) NOT NULL,
    adresse varchar(200) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
    code_postal decimal(10,0) DEFAULT NULL,
    email VARCHAR(255) NOT NULL,
    ville VARCHAR(255) NOT NULL,
    pays VARCHAR(255) NOT NULL
);

INSERT INTO eleves (nom, prenom, datenaissance, genre, classe, diplome_id, telephone, adresse, code_postal, email, ville, pays) VALUES
('maurens', 'Bruen', '1998-05-23 00:00:00', 'H', 'BTSIO', 1, '0694257369', '17 Rue de la Paix', '75002', 'maurensbruen@gmail.com', 'Paris', 'France');