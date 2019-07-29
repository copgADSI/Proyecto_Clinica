<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
<h1 class="page-header">
    <?php echo $cliente->id != null ? $cliente->Name : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=cliente">PACIENTE</a></li>
  <li class="active"><?php echo $cliente->id != null ? $cliente->Name : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-alumno" action="?c=cliente&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $cliente->id; ?>" />
      <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="Name" value="<?php echo $cliente->Name; ?>" class="form-control" placeholder="Ingrese su Nombre" required>
    </div>

    <div class="form-group">
        <label>Apellido</label>
        <input type="text" name="Lastname" value="<?php echo $cliente->Lastname; ?>" class="form-control" placeholder="Ingrese su Apellido" required>
    </div>

    <div class="form-group">
        <label>Documento</label>
        <input type="text" name="Document" value="<?php echo $cliente->Document; ?>" class="form-control" placeholder="Ingrese su Documento" required>
    </div>

    <div class="form-group">
        <label>GÉNERO</label>
        <input type="text" name="Genero" value="<?php echo $cliente->Genero; ?>" class="form-control" placeholder="Ingrese su Género" required>
    </div>
     <div class="form-group">
        <label>TELÉFONO</label>
        <input type="text" name="Telefono" value="<?php echo $cliente->Telefono; ?>" class="form-control" placeholder="Ingrese su teléfono" required>
    </div>
    <div class="form-group">
       <label>Email</label>
       <input type="text" name="Email" value="<?php echo $cliente->Email; ?>" class="form-control" placeholder="Ingrese su Email" required>
   </div><div class="form-group">
      <label>Password</label>
      <input type="text" name="Password" value="<?php echo $cliente->Password; ?>" class="form-control" placeholder="Ingrese su Password" required>
  </div>


    <hr />

    <div class="text-right">
        <button class="btn btn-primary">REALIZAR CITA</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>
