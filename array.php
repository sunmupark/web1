<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Array</title>
  </head>
  <body>
    <h1>Array</h1>
    <?php

      $coworkers = array('egoing', 'leezche', 'godori', 'hongildong');
      echo $coworkers[1].'<br>';
      echo $coworkers[3].'<br>';
      var_dump(count($coworkers));
      array_push($coworkers,'angellina');
      var_dump($coworkers);
     ?>
  </body>
</html>
