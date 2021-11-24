<!doctype html>
<html lang="pt-br">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CRUD CodeIgniter</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <div class="d-flex justify-content-end">
        <a href="<?php echo site_url('/equipe-form') ?>" class="btn btn-success mb-2">Adicionar Usuario</a>
	</div>
  <div class="mt-3">
     <table class="table table-bordered">
       <thead>
          <tr>
             <th>ID</th>
             <th>Nome</th>
             <th>Descrição</th>
             <th>Usuario</th>
             <th>Ação</th>
          </tr>
       </thead>
       <tbody>
          <?php if($equipes): ?>
          <?php foreach($equipes as $equipe): ?>
          <tr>
             <td><?php echo $equipe['id']; ?></td>
             <td><?php echo $equipe['name']; ?></td>
             <td><?php echo $equipe['description']; ?></td>
             <td><?php echo $equipe['users_id']; ?></td>
             <td>
              <a href="<?php echo base_url('equipe-edit-view/'.$equipe['id']);?>" class="btn btn-primary btn-sm">Editar</a>
              <a href="<?php echo base_url('equipe-delete/'.$equipe['id']);?>" class="btn btn-danger btn-sm">Excluir</a>
              </td>
          </tr>
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
     </table>
  </div>
</div>
 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
      $('#equipes-list').DataTable();
  } );
</script>
</body>
</html>