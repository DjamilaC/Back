 -- Connexion à la BDD --
 mysql -u root -p

-- Afficher les BDD --
SHOW DATABASES;

-- Créer une BDD --
CREATE DATABASE nom_de_la_BDD;

-- Sélectionner une BDD --
USE nom_de_la_BDD;
-- Type de donnés(INT, VARCHAR, TEXT, FLOAT...)
CREATE TABLE fruit (id_fruit INT(3),nom VARCHAR(60), origine VARCHAR(), calibre INT(1), prix FLOAT, categorie VARCHAR(20));

-- Insertion dans la BDD --
INSERT INTO nom_de_la_TABLE ('1', 'pomme', 'france', '5', '12.5', 'Golden');

-- Supprimer une ligne de la table avec une condition --
DELETE FROM nom_de_la_TABLE WHERE condition;
DELETE FROM nom_de_la_table;

-- Mettre à jour une colonne d'une table --
UPDATE nom_de_la_table SET nom_colonne condition;

-- Mettre a jour plusieurs colonnes d'une table ---
UPDATE nom_de_la_table SET nom_colonne , nom_de_la_colonne WHERE 'condition';
ex: UPDATE fruit SET origine= 'Espagne', calibre ='4', prix ='3.99' WHERE id_fruit= '2';

--- Ajouter une colonne a une table ---
ALTER TABLE nom_de_la_table ADD nom_de_la_colonne;

---Modifier le nom d'une colonne---
ALTER TABLE nom_de_la_table CHANGE ancien_nom_de_la_colonne nouveau_nom_de_la_colonne VARCHAR(valeur)

--- Operateur de comparaison ---
= :Egale
<> :Pas Egale
!= :Pas Egale
> :Superieur
< :Inferieur
>= :Superieur ou égale à
<= :Inferieur ou égale à
IN :Liste de plusieur valeurs possibles
BEETWEEN : recherche des valeurs comprises dans un interval donné (utile pour les nombres ou dates)
LIKE : recherche en specifiant le debut, le milieu ou la fin d'un mot
IS NULL :valeur est nulle
IS NOT NULL : valeur n'est pas nulle

-- Selectionner des données entre (BETWEEN) un interval (fonctionne dans une requête utilisant WHERE) --
SELECT * FROM   bonbons where id_bonbon BETWEEN 2 AND 6;

 ---------------Exercice---------------------
 afficher les données dans l'ordre decroissant
 SELECT prenom FROM stagiaires where yeux = 'marron' ORDER BY id_stagiaire DESC;

 -- Selectionner des données entre (BETWEEN) un interval (fonctionne dans une requete utilisant WHERE) ---
ex: SELECT * FROM bonbons WHERE id_bonbon BETWEEN 3 and 6

-- AFFicher les données par rapport à une valeur --
SELECT nom_colonne FROM nom_de_la_table WHERE nom_colonne ='valeur';
ex:  SELECT prenom FROM stagiaires WHERE yeux = 'marron';

autre : SELECT * FROM stagiaires WHERE yeux = 'marron';

-- Afficher les données dans un ordre défini --
SELECT * FROM stagiaires WHERE yeux= 'marron' ORDER BY prenom;

-- Afficher les données dans l'ordre décroissant --
SELECT * FROM stagiaires WHERE yeux= 'marron' ORDER BY prenom DESC;

-- Afficher Tous les stagiaires dont le prénom commencent par L --
SELECT * FROM stagiaires WHERE prenom LIKE 'L%';

-- Afficher ls stagiaires dont le prénom se terminent par n --
SELECT * FROM stagiaires WHERE prenom LIKE '%N';

-- Afficher les stagiaires dont le prénom contient un a --
SELECT * FROM stagiaires WHERE prenom LIKE '%a%';

-- Afficher les stagiaires dont le prénom commence par J et qui contient un 'a' et se terminent par 'n'
SELECT * FROM stagiaires WHERE prenom LIKE 'J%a%n';

-- Afficher un nombre limité de données---
SELECT*FROM stagiaires LIMIT 2;

--Afficher un nombre limité de données en sautant des lignes--
SELECT*FROM stagiaires LIMIT 1,2;
(Le premier chiffre aprés LIMIT représente l'offset donc le nombre de ligne ignoré. le second chiffre corerspond aux nombres de données à afficher).

