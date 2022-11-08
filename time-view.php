<?php
    require 'dbcon.php';
?>

<!doctype html>
<html lang="pt-BR">
 <head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
​   <title>Detalhes do aluno</title>
</head>
<body>
​  <div class="container mt-5">
​       <div class="row">
           <div class="col-md-12">
               <div class="card">
                   <div class="card-header">
                       <h4>Dados do time
                           <a href="index.php" class="btn btn-danger float-end"><img src="./img/voltar.svg" alt="voltar"></a>
                       </h4>
                   </div>
                   <div class="card-body">
                       <?php
                       if(isset($_GET['idtime'])) {
                           $idtime = mysqli_real_escape_string($con, $_GET['idtime']);
                           $query = "SELECT * FROM tbtimes WHERE idtime='$idtime' ";
                           $query_run = mysqli_query($con, $query);
                           if(mysqli_num_rows($query_run) > 0) {
                               $time = mysqli_fetch_array($query_run);
                               ?>
                                  <div class="mb-3">
                                       <label>Time</label>
                                       <p class="form-control">
                                           <?=$time['time'];?>
                                       </p>
                                   </div>
                                   <div class="mb-3">
                                       <label>Pais</label>
                                       <p class="form-control">
                                           <?=$time['pais'];?>
                                       </p>
                                   </div>
                                   <div class="mb-3">
                                       <label>Número de Titulos</label>
                                       <p class="form-control">
                                           <?=$time['numtitulos'];?>
                                       </p>
                                   </div>

                                   <div class="mb-3">
                                       <label>Treinador</label>
                                       <p class="form-control">
                                           <?=$time['treinador'];?>
                                       </p>
                                   </div>

                                   <div class="mb-3">
                                       <label>Cor do Uniforme</label>
                                       <p class="form-control">
                                           <?=$time['coruniforme'];?>
                                       </p>
                                   </div>
​                               <?php
                           }
                           else
                           {
                              echo "<h4>Nenhum ID encontrado</h4>";
                           }
                       }
                       ?>
                   </div>
               </div>
           </div>
       </div>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
