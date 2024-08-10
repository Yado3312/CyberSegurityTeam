CREATE DATABASE pokemonOficial COLLATE SQL_Latin1_General_CP1_CI_AS;

USE pokemonOficial;

CREATE TABLE Pokemon(
	id INT PRIMARY KEY,
	name VARCHAR(100),
	type VARCHAR(50),
	hp FLOAT,
	damage INT
);

CREATE TABLE PokedexEnemies(
	idEnemy INT,
	idPokemon INT,
	HP FLOAT
);

CREATE TABLE TeamPlayer(
	IdPlayer INT,
	IdPokemon INT,
	HP FLOAT,
);