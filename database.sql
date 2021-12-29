CREATE DATABASE gestionTournoi;

CREATE TABLE joueur (
idJ VARCHAR(3) PRIMARY KEY,
nomJ VARCHAR(8),
pnomJ VARCHAR(8),
dateNaisJ DATE,
telJ int(8)
);

CREATE TABLE tournoi (
idT VARCHAR(3) PRIMARY KEY,
nomT VARCHAR(8),
typeJeux VARCHAR(8),
minNbr int,
maxNbr int,
);