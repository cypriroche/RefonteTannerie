<?php
class Database {
	private $host;
	private $dbname;
	private $user;
	private $password;
	private $charset;
    private $conn;
	// Instance unique de la classe Database pour le singleton
	private static $instance = null;

	// fonction contruct
	private function __construct(string $host, string $dbname, string $user, string $password, string $charset) {
		$this->host = $host;
		$this->dbname = $dbname;
		$this->user = $user;
		$this->password = $password;
		$this->charset = $charset;
		// Connexion à la base de données avec PDO
        try{
            $this->conn = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset", $user, $password);
	    } catch (PDOException $e) {
            die("Erreur de connexion à la base de données : " . $e->getMessage());
        }
    }

	// Obtenir de l'instance unique
	public static function getInstance(string $host, string $dbname, string $user, string $password, string $charset) {
		if (self::$instance === null) {
			self::$instance = new Database($host, $dbname, $user, $password, $charset);
		}
		// evite la création de plusieurs instances
		return self::$instance;
	}	

    public function getConnection(){
        return $this->conn;
    }

	// Exécuter une requête SQL et retourner les résultats
	public function query(string $sql) {
		$resultat = $this->conn->prepare($sql);
		$resultat->execute();
		$data = $resultat->fetchAll(PDO::FETCH_ASSOC);
				return $data;
		$resultat->closeCursor();
	}

}
	
?>