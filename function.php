<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>function</title>
  </head>
  <body>
    <h1>function</h1>
    <?php
    $str = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
    echo $str;
     ?>
     <h2>strlen()</h2>
     <p>문장의 글자수</p>
     <?php
      echo strlen($str)
      ?>

      <h2>nl2br</h2>
<p>줄바꾸기</p>
      <?php
        echo nl2br($str);

       ?>

  </body>
</html>
