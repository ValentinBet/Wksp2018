<?php
/**
 * Created by PhpStorm.
 * User: Betrancourt Valentin
 */

class Database
{
    private $connection;
    public function __construct()
    {
        // Initialisation de la base de donnée en PDO et création des tables

        $dbHost = "mysql-dacy.alwaysdata.net";
        $dbBd = "dacy_bdd";
        $dbPass = "root";
        $dbLogin = "dacy";
        $url = 'mysql:host=' . $dbHost . ';dbname=' . $dbBd;
        $this->connection = new PDO($url, $dbLogin, $dbPass);
        $this->createDataBase();
    }
    private function createDatabase()
    {
        $this->connection->exec(' USE dacy_bdd;
                        
                        CREATE TABLE IF NOT EXISTS users (
							pseudo VARCHAR(20) NOT NULL,
							password VARCHAR(50) NOT NULL,
							nom VARCHAR(20) NOT NULL,
							prenom VARCHAR(20) NOT NULL,
							email VARCHAR(40) NULL,
							PRIMARY KEY (pseudo)
						);
		
		                CREATE TABLE IF NOT EXISTS produit (
		                    id int(5) NOT NULL,
		                    nom VARCHAR(40) NOT NULL,
		                    url VARCHAR(50) NULL,
		                    PRIMARY KEY (id)
		                );
	');
    }
}