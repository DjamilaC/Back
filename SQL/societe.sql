
-- Lister tous les services :
SELECT service FROM employes;
 
-- Lister tous les salariés avec un salaire entre 1000-3000 :
SELECT*FROM employes WHERE salaire BETWEEN 1600 AND 3000.

-- Lister tous les salariée  avec un nom commençanty par la lettre "a" :
SELECT*FROM employes WHERE nom LIKE 'b%';

-- lister toutes les salariés :
SELECT nom, prenom FROM employes WHERE sexe = 'f';

-- Lister tous les salariés entrer dans l'entreprise avant le 01 janvier 1980 :
SELECT  nom, prenom FROM employes WHERE date_embauche <= '2007-06-01';
 
 -- AFFIcher toute les salariées embauché aven 1980-01-01 :
 SELECT nom, prenom, date_embauche FROM employes WHERE  date_embauche <= '2004-01-01';
 
-- Supprimer tous les salariés en CDI :
DELETE id_employes FROM employes WHERE status = 'cdi';

-- Afficher salariés pour chaque département(pas de doublon):
SELECT nom, prenom, service FROM employes ORDER BY service;
SELECT COUNT(nom), service FROM employes GROUP BY service;

-- Afficher manager pour chaque département (pas de doublon) :
-- Afficher les titres(pas de doublon):