<?php
  include_once "noticiaBD.php";
  $registros = listar();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once 'head.php'; ?>
        <title>Notícias</title>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <?php include_once 'menu.php'; ?>
        <section id="noticias">
            <div class="container px-5">
                <h1 class="display-6 lh-1 mb-3 text-center mt-4">Notícias</h1>
                <div class="row">
                <?php	
                    foreach($registros as $registro){
                      echo '<div class="col-md-4">
                      <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                          <h5 class="card-title">'.$registro['titulo'].'</h5>
                          <p class="card-text text-muted">'.$registro['subtitulo'].'</p>
                          <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                              <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                            </div>
                            <small class="text-muted">'.$registro['dataHorario'].'</small>
                          </div>
                        </div>
                      </div>
                    </div>';
                    }
                    ?>
                </div>
            </div>
        </section>
        <?php include_once 'footer.php'; ?>
    </body>
</html>
