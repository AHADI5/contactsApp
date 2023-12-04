<?php
class Contact {
    private $nom ;
    private $email ;
    private $adresse;
    private $telephone;
    private $description ;
  

    public function __construct($nom, $email, $adresse, $telephone, $description) {
        $this->nom = $nom;
        $this->email = $email;
        $this->adresse = $adresse;
        $this->telephone = $telephone;
        $this->description = $description;
       
    }

    public function registerContact ()  {
        global $connection;
        $resultat = false;
        $nom = $this->nom;
        $email = $this->email;
        $adresse = $this->adresse;
        $telephone = $this->telephone;
        $description = $this->description;
       
       
        $requette = 'INSERT INTO phone_book (nom, adresse,
         telephone,description, mail) VALUES (:nom, :adresse,
         :telephone,:description,:mail)';
        
        $statement = $connection->prepare($requette);
        $execution = $statement-> execute([
            'nom'=> $nom,
            'mail'=> $email,
            'adresse'=> $adresse,
            'telephone'=> $telephone,
            'description'=> $description,
        ]);

        if ($execution) {
            $result = true;
        }
    }

    public static function getContacts () {
        global $connection;
        $requette = 'SELECT * FROM phone_book';
        $statement = $connection -> prepare($requette);
        $execution = $statement->execute([]);
        $contacts = [];

        if ($execution) {
            while ($data = $statement -> fetch()) {
                $contact = new Contact($data["nom"],$data["mail"],
                $data["adresse"],$data["telephone"],
                $data["description"]);
                array_push($contacts, $contact);
            }
            return $contacts;
        } else {
            return [];
        }

     }


    public function getContactById ($id) {
        global $connection;
    }
    public function getNom() {          
        return $this->nom;  
    }
    public function getEmail() {    
        return $this->email;    
    }
    public function getAdresse() {
        return $this->adresse;
    }
    public function getTelephone() {
        return $this->telephone;
    }
    public function getDescription() {
        return $this->description;
    }


    


    

}