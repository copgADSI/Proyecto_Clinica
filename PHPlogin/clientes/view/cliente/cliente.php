<h1 class="page-header">SISTEMA DE CITAS MÉDICAS</h1>

    <a class="btn btn-primary pull-right" href="?c=cliente&a=Crud">Agregar</a>
<br><br><br>

<table class="table  table-striped  table-hover" id="tabla">
    <thead>
        <tr>
        <th style="width:120px; background-color: #5DACCD; color:#fff">Tratamiento</th>
            <th style="width:180px; background-color: #5DACCD; color:#fff">Estado</th>
            <th style=" background-color: #5DACCD; color:#fff">Hora</th>
            <th style=" background-color: #5DACCD; color:#fff">Fecha</th>
            <th style="width:120px; background-color: #5DACCD; color:#fff">id</th>
            <th style="width:120px; background-color: #5DACCD; color:#fff">idDoctor</th>
            <th style="width:120px; background-color: #5DACCD; color:#fff">idMedico_Consultorio</th>

            <th style="width:60px; background-color: #5DACCD; color:#fff"></th>
            <th style="width:60px; background-color: #5DACCD; color:#fff"></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
         <td><?php echo $r->Tratamiento; ?></td>
            <td><?php echo $r->Estado; ?></td>
            <td><?php echo $r->Hora; ?></td>
            <td><?php echo $r->Fecha; ?></td>
            <td><?php echo $r->id; ?></td>
            <td><?php echo $r->idDoctor; ?></td>
            <td><?php echo $r->idMedico_Consultorio; ?></td>

            <td>
                <a  class="btn btn-warning" href="?c=cliente&a=Crud&id=<?php echo $r->idcita; ?>">Editar</a>
            </td>
            <td>
                <a  class="btn btn-danger" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=cliente&a=Eliminar&id=<?php echo $r->idcita; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

</body>
<script  src="assets/js/datatable.js">

</script>


</html>
