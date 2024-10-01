<?php
  // SQL para contar la cantidad de usuarios registrados en la base de datos
  $sql_contar = "SELECT COUNT(*) FROM t_usuarios";
  $query_count = $pdo->prepare($sql_contar);
  $query_count->execute();
  $datos_count = $query_count->fetchAll(fetch_Style: PDO::FETCH_ASSOC);
  ?>