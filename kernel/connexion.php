<?php
//..
//Pattern Singleton pour la connexion

class Connexion
{
    protected static $pdo;

    private function __construct(){
        return;
    }

    public static function get(){
        if(!isset(self::$pdo))
        {
            try {
                // Créer la connexion
                self::$pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME,DB_USERNAME,DB_PASSWORD);
            
                //Configuration des options de PDO
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
                //Vous êtes maintenant connecté à la base de donnée
            
                //... Votre code pour exécuter des requêtes et effectuer des opérations
            
                
            } catch (PDOException $e) {
            
                // En cas d'erreur de la connexion, affichage du message d'erreur
                echo "Erreur de connexion : " . $e->getMessage();
            }
        }
        return self::$pdo;
    }

}




?>