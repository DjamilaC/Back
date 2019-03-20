-- Exercice: Créé une base de données magasin
CREATE DATABASE magasin;
USE magasin;

-- Créé une table produit qui contient les colonnes suivantes:
-- id -> INT PRIMARY KEY AUTO_INCREMENT NOT NULL
-- nom_produit -> débrouillez-vous
-- catégorie_produit -> débrouillez-vous
-- reference_produit -> débrouillez-vous
-- prix_produit -> débrouillez-vous
-- stock_produit -> débrouillez-vous
-- date_ajout -> débrouillez-vous
CREATE TABLE produit (id_produit INT(3) PRIMARY KEY AUTO_INCREMENT NOT NULL, nom_produit VARCHAR(20), categorie_produit VARCHAR(20), reference_produit INT(6), prix_produit FLOAT, stock_produit VARCHAR(20), date_ajout DATE);

-- Insérer au moins 20 produits
INSERT INTO produit ( nom_produit, categorie_produit, reference_produit, prix_produit, stock_produit, date_ajout) VALUES ('Televiseur', 'electromenager', '0001', '300', 'disponible', '20-01-2018');

INSERT INTO produit ( nom_produit, categorie_produit, reference_produit, prix_produit, stock_produit, date_ajout) VALUES ('Aspirateur', 'electromenager', '0002', '200', 'disponible', '20-02-2018');

INSERT INTO produit ( nom_produit, categorie_produit, reference_produit, prix_produit, stock_produit, date_ajout) VALUES ('Lave_linge', 'electromenager', '0003', '500', 'disponible', '20-03-2018');

INSERT INTO produit ( nom_produit, categorie_produit, reference_produit, prix_produit, stock_produit, date_ajout) VALUES ('Lave_vaisselle', 'electromenager', '0004', '450', 'disponible', '20-04-2018');

INSERT INTO produit ( nom_produit, categorie_produit, reference_produit, prix_produit, stock_produit, date_ajout) VALUES ('Micro_ondes', 'electromenager', '0005', '150', 'disponible', '20-05-2018');

-- Afficher tous les produits classé du plus récent au plus ancien
SELECT*FROM produit ORDER BY date_ajout DESC;

-- Afficher les 10 premiers produits
SELECT*FROM produit LIMIT 3;

-- Afficher les 10 derniers produits
SELECT*FROM produit LIMIT 2,3;

-- Ajouter une colonne date_vente
ALTER TABLE produit ADD date_vente DATE;

-- Afficher les produits entre 2 date de vente
SELECT*FROM produit where date_ajout BETWEEN  '2018-02-20' AND date_ajout = '2018-05-20';

-- Afficher les 10 derniers produits
-- Afficher les 10 produits du milieu
SELECT*FROM produit LIMIT 1,3;
-- Afficher les produits commencent par une lettre spécifique
SELECT*FROM produit WHERE nom_produit LIKE 'L%';