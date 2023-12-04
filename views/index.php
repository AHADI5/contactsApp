<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carnet D'adresse</title>
    <link rel="stylesheet" href="../style/index.css">
    <link rel="stylesheet" href="../bootstrap-icons/bootstrap-icons.css">
</head>
<body>
    <div class="title flex"><h3>Phone Book</h3></div>
    <div class="phone-book flex">
       
        <form action="" method="post">
            <div class="informations">
                <div class="nom"> <input type="text" name="nom" id="nom"  placeholder="Name"></div>
                <div class="adresse"><input type="text" name="adresse" id="adresse" placeholder="Adress"></div>
                <div class="telephone"><input type="tel" name="numero" id="numero" placeholder="Phone"></div>
                <div class="description">  <textarea name="description" id="description" cols="30" rows="2"></textarea></div>
                <div class="mail"> <input type="email" name="mail" id="mail" placeholder="E-mail"></div>
            </div>
            <div class="action">
                <button type="submit">Enregistrer</button>
              
            </div>
        </form>

        <div class="phone-contacts flex" >
        
        </div>
       
    </div>

   
    <script src="../js/contact.js"></script>
    <script src="../js/contactsEvents.js"></script>
</body>
</html>
