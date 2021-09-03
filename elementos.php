<?php

    function imprimir($cantidad){
          echo '<a href="../home">'."volver".'</a>'; // ../ mala practica
          echo "<ul>";
          for($i = 1; $i<=$cantidad; $i++){
               echo "<li> $i </li>";
          }
          echo "</ul>";  
    }

    # elementos.php?cant=valor (url para llamar)
    # listar/:(valor) (nueva url semantica)


