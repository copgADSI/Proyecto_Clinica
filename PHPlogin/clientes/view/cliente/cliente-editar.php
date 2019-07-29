<h1 class="page-header">
    <?php echo $cliente->idcita != null ? $cliente->Tratamiento : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=cliente">Tratamiento</a></li>
  <li class="active"><?php echo $cliente->idcita != null ? $cliente->Tratamiento : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-alumno" action="?c=cliente&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idcita" value="<?php echo $cliente->idcita; ?>" />
      <div class="form-group">
        <label>Tratamiento</label>
        <input type="text" name="Tratamiento" value="<?php echo $cliente->Tratamiento; ?>" class="form-control" placeholder="Ingrese Tratamiento" required>
    </div>

    <div class="form-group">
        <label>Estado</label>
        <input type="text" name="Estado" value="<?php echo $cliente->Estado; ?>" class="form-control" placeholder="Ingrese Estado" required>
    </div>

    <div class="form-group">
        <label>Hora</label>
        <input type="text" name="Hora" value="<?php echo $cliente->Hora; ?>" class="form-control" placeholder="Ingrese Hora" required>
    </div>

    <div class="form-group">
        <label>Fecha</label>
        <input type="text" name="Fecha" value="<?php echo $cliente->Fecha; ?>" class="form-control" placeholder="Ingrese Fecha" required>
    </div>
     <div class="form-group">
        <label>Paciente</label>
        <input type="text" name="id" value="<?php echo $cliente->id; ?>" class="form-control" placeholder="Ingrese Paciente" required>
    </div>
    <div class="form-group">
       <label>Doctor</label>
       <input type="text" name="idDoctor" value="<?php echo $cliente->idDoctor; ?>" class="form-control" placeholder="Ingrese Doctor" required>
   </div>
   <div class="form-group">
      <label>Consultorio</label>
      <input type="text" name="idMedico_Consultorio" value="<?php echo $cliente->idMedico_Consultorio; ?>" class="form-control" placeholder="Ingrese Consultorio" required>
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
