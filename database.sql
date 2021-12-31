CREATE DATABASE gestionTournoi;

CREATE TABLE jeux(
idJeux VARCHAR(3) PRIMARY KEY,
nomJeux VARCHAR(8),
minNbr INT DEFAULT 1,
maxNbr INT DEFAULT 1
);

CREATE TABLE tournoi (
idT VARCHAR(3) PRIMARY KEY,
titreTournoi VARCHAR(20),
typeJeux VARCHAR(3),
CONSTRAINT fk_jeuxT FOREIGN KEY typeJeux REFERENCES jeux(idJeux)
);

CREATE TABLE match (
idM VARCHAR(3) PRIMARY KEY,
titreMatch VARCHAR(50),
tournoiM VARCHAR(3),
typeJeux VARCHAR(3),
CONSTRAINT fk_jeuxM FOREIGN KEY typeJeux REFERENCES jeux(idJeux),
CONSTRAINT fk_tournoiM FOREIGN KEY tournoiM REFERENCES tournoi(idT)
);

CREATE TABLE equipe (
    idEq VARCHAR(3) PRIMARY KEY,
    nomEquipe VARCHAR(20),
    typeJeux VARCHAR(3),
CONSTRAINT fk_jeuxE FOREIGN KEY typeJeux REFERENCES jeux(idJeux),
);

CREATE TABLE joueur (
idJoueur VARCHAR(3) PRIMARY KEY,
nomJoueur VARCHAR(8),
pnomJoueur VARCHAR(8),
dateNaisJoueur DATE,
telJoueur INT(8),
equipeJ VARCHAR(3),
CONSTRAINT fk_equipeJ FOREIGN KEY equipeJ REFERENCES equipe(idEq)
);