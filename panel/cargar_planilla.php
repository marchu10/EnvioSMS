
<!--TÍTULO -->
<div class="row nov">
  <div class="container-fluid"> 
<h4 class="titulo text-center display-4">Cargar Planilla</h4>
  </div>
</div>

<div class="container">
<div class="row">

<div class="col-6 offset-3">
<form action="procesar_foto.php" enctype="multipart/form-data" method="POST" class=" p-3">
<div class="form-group">
  <label class="frase2" for="nombre">Nombre</label>
  <input type="text" name="id" id="id" class="form-control" placeholder="Ingrese el nombre de la foto">
</div>

<div class="form-group">
  <label class="frase2" for="descripcion">Descripción</label>
  <textarea type="text" name="descripcion" id="descripcion" class="form-control" aria-describedby="help_descripcion"></textarea>
  <small id="help_descripcion" class="text-muted">Descripción breve de la foto.</small>
</div>

<div class="form-group">
  <label class="frase2" for="imagen">Foto</label>
  <!-- Si quiero subir mas de un archivo pongo el name como array y el atributo multiple -->
  <input type="file" accept="image/jpeg" class="form-control-file frase2" name="imagen" id="imagen" placeholder="" aria-describedby="help_imagen">
  <small id="help_imagen" class="form-text text-muted frase2">La imágen del producto debe ser en formato jpg y pesar menos de 2mb</small>
</div> 

<button type="submit" class="btn btn-primary">Cargar</button>
</form>
</div>
</div>



</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
</html>