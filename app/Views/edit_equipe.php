<!DOCTYPE html>
<html>

<head>
  <title>Editar usuario</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    .container {
      max-width: 500px;
    }

    .error {
      display: block;
      padding-top: 5px;
      font-size: 14px;
      color: red;
    }
  </style>
</head>

<body>
  <div class="container mt-5">
    <form method="post" action="<?= site_url('/equipe-update') ?>">
      <input type="hidden" name="id" id="id" value="<?php echo $equipe_obj['id']; ?>">

      <div class="form-group">
        <label>Nome</label>
        <input type="text" name="name" class="form-control" value="<?php echo $equipe_obj['name']; ?>">
      </div>

      <div class="form-group">
        <label>Descrição</label>
        <input type="text" name="description" class="form-control" value="<?php echo $equipe_obj['description']; ?>">
      </div>

      <div class="form-group">
        <label>Usuario</label>
        <input type="text" name="users_id" class="form-control" value="<?php echo $equipe_obj['users_id']; ?>">
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-danger btn-block">Salvar</button>
      </div>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#update_equipe").length > 0) {
      $("#update_equipe").validate({
        rules: {
          name: {
            required: true,
          },
          description: {
            required: true,
            maxlength: 60,
            description: true,
          },
        },
        messages: {
          name: {
            required: "É necessario informar um nome!.",
          },
          description: {
            required: "É necessário informar um E-mail.",
            description: "O E-mail informado não é valido.",
            maxlength: "o e-mail nao deve ser maior do que 60 caracteres.",
          },
        },
      })
    }
  </script>
</body>

</html>