------------------------------------------------------------------------------
-- PROGRAMME: INSERTION DES DONNÉES										     -
-- ÉQUIPE: GABRIEL BOMBARDIER, JUSTIN DUGAS                                  -
-- RÉALISÉ PAR: GABRIEL BOMBARDIER                                           -
-- PROJET: B-63 PROJET FINAL                                                 -
------------------------------------------------------------------------------


-- INSERTION DES CATÉGORIES
INSERT INTO TAB_CATEGORIE(nom) VALUES ('Sentir Bon');
INSERT INTO TAB_CATEGORIE(nom) VALUES ('Animaux');
INSERT INTO TAB_CATEGORIE(nom) VALUES ('Informatique');
INSERT INTO TAB_CATEGORIE(nom) VALUES ('Musique');
INSERT INTO TAB_CATEGORIE(nom) VALUES ('Nourriture');
INSERT INTO TAB_CATEGORIE(nom) VALUES ('Pieces Voitures');
INSERT INTO TAB_CATEGORIE(nom) VALUES ('Pieces Motos');

--INSERTION DES ARTICLES
INSERT INTO TAB_ARTICLE(ID_CAT,NOM,ART_DESCRIPTION,PRIX_BASE,PRIX_COURANT,EN_RABAIS) VALUES ((SELECT ID_CAT FROM TAB_CATEGORIE WHERE NOM = 'Animaux'),'Cheval', 'Un tres beau cheval propre', 800, 800, 'N');
INSERT INTO TAB_ARTICLE(ID_CAT,NOM,ART_DESCRIPTION,PRIX_BASE,PRIX_COURANT,EN_RABAIS) VALUES ((SELECT ID_CAT FROM TAB_CATEGORIE WHERE NOM = 'Animaux'),'Justin', 'Un tres beau Justin propre', 200000, 200000, 'N');
INSERT INTO TAB_ARTICLE(ID_CAT,NOM,ART_DESCRIPTION,PRIX_BASE,PRIX_COURANT,EN_RABAIS) VALUES ((SELECT ID_CAT FROM TAB_CATEGORIE WHERE NOM = 'Animaux'),'Leviathan', 'Un tres beau Leviathan propre', 150000, 150000, 'N');
INSERT INTO TAB_ARTICLE(ID_CAT,NOM,ART_DESCRIPTION,PRIX_BASE,PRIX_COURANT,EN_RABAIS) VALUES ((SELECT ID_CAT FROM TAB_CATEGORIE WHERE NOM = 'Animaux'),'Chat', 'Un tres beau Chat propre', 25, 25, 'N');
INSERT INTO TAB_ARTICLE(ID_CAT,NOM,ART_DESCRIPTION,PRIX_BASE,PRIX_COURANT,EN_RABAIS) VALUES ((SELECT ID_CAT FROM TAB_CATEGORIE WHERE NOM = 'Animaux'),'Souris', 'Un tres beau Souris propre', 10, 15, 'N');
INSERT INTO TAB_ARTICLE(ID_CAT,NOM,ART_DESCRIPTION,PRIX_BASE,PRIX_COURANT,EN_RABAIS) VALUES ((SELECT ID_CAT FROM TAB_CATEGORIE WHERE NOM = 'Animaux'),'Tortue', 'Un tres beau Tortue propre', 210, 210, 'N');
INSERT INTO TAB_ARTICLE(ID_CAT,NOM,ART_DESCRIPTION,PRIX_BASE,PRIX_COURANT,EN_RABAIS) VALUES ((SELECT ID_CAT FROM TAB_CATEGORIE WHERE NOM = 'Nourriture'),'Pomme', 'Un tres beau Pomme propre', 5, 6, 'N');
INSERT INTO TAB_ARTICLE(ID_CAT,NOM,ART_DESCRIPTION,PRIX_BASE,PRIX_COURANT,EN_RABAIS) VALUES ((SELECT ID_CAT FROM TAB_CATEGORIE WHERE NOM = 'Pieces Voitures'),'Shaft', 'Un tres beau Shaft propre', 1200, 1200, 'N');
INSERT INTO TAB_ARTICLE(ID_CAT,NOM,ART_DESCRIPTION,PRIX_BASE,PRIX_COURANT,EN_RABAIS) VALUES ((SELECT ID_CAT FROM TAB_CATEGORIE WHERE NOM = 'Pieces Voitures'),'Lumiere', 'Un tres beau Lumiere propre', 250, 250, 'N');
INSERT INTO TAB_ARTICLE(ID_CAT,NOM,ART_DESCRIPTION,PRIX_BASE,PRIX_COURANT,EN_RABAIS) VALUES ((SELECT ID_CAT FROM TAB_CATEGORIE WHERE NOM = 'Informatique'),'Ecran', 'Un tres beau Ecran propre', 120, 120, 'N');
INSERT INTO TAB_ARTICLE(ID_CAT,NOM,ART_DESCRIPTION,PRIX_BASE,PRIX_COURANT,EN_RABAIS) VALUES ((SELECT ID_CAT FROM TAB_CATEGORIE WHERE NOM = 'Informatique'),'Clavier', 'Un tres beau Clavier propre', 60, 70, 'N');