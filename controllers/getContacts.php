<?php 
include("../model/Contact.php");
include("../configurations/config.php");
$Contacts = Contact::getContacts();

for ($i=0; $i < count($Contacts); $i++) { 
    $nom = $Contacts[$i] -> getNom();
    $email = $Contacts[$i] ->getEmail();
    $adresse = $Contacts[$i] -> getAdresse();
    $description = $Contacts[$i] -> getDescription();
    $telephone =  $Contacts[$i] -> getTelephone();
    echo <<< _END

    <div class="contacts">
        <div class="items">
            <div class="contact-content flex">
                <div class="contact flex">
                    <div class="profile-default"> <img src="../imgs/default.png" alt=""></div>
                    <div class="tel-name">
                        <div class="name">$nom</div>
                        <div class="tel">$telephone</div> 
                    </div>
                </div>
                <div class="arrowdown"> <i class ="bi bi-chevron-down"></i> </div>
            </div>
            <div class="others">
                <div class="hidden-informations">
                    <div class="email">$email</div>
                    <div class="description">$description</div>
                    <div class="adresse">$adresse</div>
                </div>
            </div>
        </div>
    </div>
   
  
   
    _END;
  
}

