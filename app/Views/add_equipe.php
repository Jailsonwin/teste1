<!DOCTYPE html>
<html>

<head>
  <title>Codeigniter 4 Add Equipe</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    .container {
      max-width: 500px;
    }
  </style>
</head>

<body>
  <div class="container mt-5">
    <form method="post" id="add_create" name="add_create" 
    action="<?= site_url('/equipe-submit-form') ?>">
    
      <div class="form-group">
        <label>Nome</label>
        <input type="text" name="name" class="form-control">
      </div>

      <div class="form-group">
        <label>E-mail</label>
        <input type="text" name="description" class="form-control">
      </div>

      <div class="form-group">
        <label>users_id</label>
        <input type="int" name="users_id" class="form-control">
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Salvar</button>
      </div>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
</body>

</html>