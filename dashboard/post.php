<?php 
require 'header.php';
require 'navbar.php';
?>
    <div class="container-fluid">
      <div class="row">
        <?php require 'sidebar.php'; ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="sub-header">Nuevo Post</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-9 col-sm-offset-3 col-md-7 col-md-offset-2 main">
          <form enctype="multipart/form-data" action="../functions/article/insert.php" method="POST">
            <div class="form-group">
              <label for="title">Título</label>
              <input type="text" name="title" class="form-control" id="title" placeholder="Nuevo Título">
            </div>
            <label for="categorie">Categoría</label>
            <select name="categorie_id" class="form-control" id="Categoría">
              <option value="0">Elige una categoría</option>
            </select>
            <br>
            <label for="content">Contenido</label>
            <textarea  name="content" class="form-control" rows="3" id="content"></textarea>
            <div class="form-group">
            <br>
              <label for="exampleInputFile">File input</label>
              <input name="user-file" type="file" id="exampleInputFile">
              <p class="help-block">Example block-level help text here.</p>
            </div>
            <button name="submit" type="submit" class="btn btn-default">Submit</button>
          </form>
        </div>
        <div class="col-md-2 main">
          <form action="../functions/registroCategoria.php"" method="POST">
            <div class="form-group">
            <label for="new_categorie">Agregar Nueva Categoria</label>
              <input type="text" class="form-control" id="new_categorie" placeholder="Nueva categoria" name="categoria">
            </div>
            <button type='submit' id="submit_categorie" class="btn btn-default btn-block">Guardar</button>
          </form>
        </div>
      </div>
    </div>
<?php require 'footer.php'; ?>