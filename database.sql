CREATE DATABASE gestionTournoi;

CREATE TABLE jeux(
    idJeux VARCHAR(3) PRIMARY KEY,
    nomJeux VARCHAR(8),
    team BOOLEAN DEFAULT 0,
    player BOOLEAN DEFAULT 0
);

CREATE TABLE tournoi (
    idT VARCHAR(3) PRIMARY KEY,
    titreTournoi VARCHAR(20),
    typeJeux VARCHAR(3)REFERENCES jeux(idJeux)
);

CREATE TABLE matchJeux (
    idM VARCHAR(3) PRIMARY KEY,
    titreMatch VARCHAR(50),
    tournoiM VARCHAR(3) REFERENCES tournoi(idT),
    typeJeux VARCHAR(3) REFERENCES jeux(idJeux)
);

CREATE TABLE equipe (
    idEq VARCHAR(3) PRIMARY KEY,
    nomEquipe VARCHAR(20),
    typeJeux VARCHAR(3) REFERENCES jeux(idJeux)

);

CREATE TABLE joueur (
    idJoueur VARCHAR(3) PRIMARY KEY,
    nomJoueur VARCHAR(8),
    pnomJoueur VARCHAR(8),
    dateNaisJoueur DATE,
    telJoueur INT(8),
    equipeJ VARCHAR(3) REFERENCES equipe(idEq)
);