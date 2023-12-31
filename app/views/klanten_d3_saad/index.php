<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="../public/css/style.css">
  </head>
  <body>
  <h3 style="margin-right: 1rem; color: green; text-decoration: underline;">Overzicht Klanten</h3>
   <form action="<?= URLROOT ?>/klanten_d3_saad/index" method="post" style="float: right;">
    <select style="margin-right: 1rem;" aria-label="Default select example" name="postcode">
      <option selected>Selecteer Postcode</option>
      <option value="5271TH">5271TH</option>
      <option value="5271ZE">5271ZE</option>
      <option value="5271TJ">5271TJ</option>
      <option value="5271ZH">5271ZH</option>
    </select>
    <button style="margin-right: 1rem;" type="submit" class="btn btn-secondary">Toon Klanten</button>
  </form>
    <!-- Table with Bootstrap classes -->
    <table class="table table-bordered table-white" style="margin: 1rem;">
      <thead>
        <tr>
          <th>Naam Gezin</th>
          <th>Vertegenwoordiger</th>
          <th>E-mailadres</th>
          <th>Mobiel</th>
          <th>Adres</th>
          <th>Woonplaats</th>
          <th>Klant details</th>
        </tr>
      </thead>
      <tbody>
        <?= $data['rows']; ?>
      </tbody>
    </table>
    <!-- End table with Bootstrap classes -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <a href="<?= URLROOT; ?>/landingpages/index"><button style="float: right; margin-right: 1rem; margin-bottom: 1rem;" type="button" class="btn btn-primary">Home</button></a>
  </body>
</html>
