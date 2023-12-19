<?php
  include_once "noticiaBD.php";
  $id = $_GET['codigo'];
  $registro = buscarPorId($id);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once 'head.php'; ?>
        <title>Notícia</title>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <?php include_once 'menu.php'; ?>
        <section id="noticias">
            <div class="container px-5">
                <h1 class="display-6 lh-1 text-center mt-4"><? echo $registro['titulo']; ?></h1>
                <p class="lead fw-normal text-muted mb-5 resp text-center"><? echo $registro['subtitulo']; ?></p>
                <div class="row">
                  <p class="lead fw-normal text-muted mb-5 resp text-justify"><? echo html_entity_decode($registro['texto']); ?></p>
                </div>
            </div>
        </section>
        <?php include_once 'footer.php'; ?>
    </body>
</html>