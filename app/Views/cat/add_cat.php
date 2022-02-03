<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
    <form method="post" id="add_create" name="add_create" 
    action="<?= site_url('/submit-form') ?>">
      <div class="form-group">
        <label>Désignation de la catégorie</label>
        <input type="text" name="libelle" class="form-control">
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-success btn-block">Ajouter une nouvelle catégorie</button>
      </div>
    </form>
  </div>
</body>
</html>