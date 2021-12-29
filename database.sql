CREATE DATABASE gestionTournoi;

CREATE TABLE joueur (
idJoueur VARCHAR(3) PRIMARY KEY,
nomJoueur VARCHAR(8),
pnomJoueur VARCHAR(8),
dateNaisJoueur DATE,
telJoueur int(8)
);

CREATE TABLE jeux(
idJeux VARCHAR(3) PRIMARY KEY,
nomJeux VARCHAR(8),
minNbr int,
maxNbr int
);

CREATE TABLE tournoi (
idT VARCHAR(3) PRIMARY KEY,
nomT VARCHAR(8),
typeJeux VARCHAR(8),

);