<h1>Klant wijzigen</h1>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
<form action="<?= URLROOT; ?>/klanten/wijzig" method="post">
  <div class="mb-3">
         <label for="naam">Naam</label>
         <input type="text" class="form-control" id="naam" name="naam" value="<?= $data['naam']; ?>">
     </div>
     <div class="form-group">
         <label for="adres">Adres</label>
         <input type="text" class="form-control" id="adres" name="adres" value="<?= $data['adres']; ?>">
     </div>
     <div class="form-group">
         <label for="emailadres">Emailadres</label>
         <input type="text" class="form-control" id="emailadres" name="emailadres" value="<?= $data['emailadres']; ?>">
     </div>
     <div class="form-group">
         <label for="telefoonnummer">Telefoonnummer</label>
         <input type="text" class="form-control" id="telefoonnummer" name="telefoonnummer" value="<?= $data['telefoonnummer']; ?>">
     </div>
     <div class="form-group">
         <label for="AantalKinderen">Aantal Kinderen</label>
         <input type="number" class="form-control" id="AantalKinderen" name="AantalKinderen" value="<?= $data['AantalKinderen']; ?>">
     </div>
     <div class="form-group">
         <label for="AantalVolwassenen">Aantal Volwassenen</label>
         <input type="number" class="form-control" id="AantalVolwassenen" name="AantalVolwassenen" value="<?= $data['AantalVolwassenen']; ?>">
     </div>
     <div class="form-group">
         <label for="AantalBaby">Aantal Baby</label>
         <input type="number" class="form-control" id="AantalBaby" name="AantalBaby" value="<?= $data['AantalBaby']; ?>">
     </div>
        <input type="hidden" name="id" value="<?= $data['id']; ?>">
     <br> 
     
  <button type="submit" class="btn btn-success">Opslaan</button>
  <button type="button" class="btn btn-primary" onclick="window.location.href='<?= URLROOT ?>/'">Home</button>
  <button type="button" class="btn btn-warning"onclick="window.location.href='<?= URLROOT ?>/klanten/index'">Terug</button>
</form>


    


     