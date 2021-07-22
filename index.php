
<?php
function print_title(){
  if(isset($_GET['id'])){
  echo $_GET['id'];
  }else{
  echo "Welcome";
  }
}

function print_description(){
  if(isset($_GET['id'])){
    echo file_get_contents("data/".$_GET['id']);
  }else{
    echo"Hello, PHP";
  }
}

function print_list(){

  $list = scandir('./data');
  $i = 0;
  while ($i < count($list)) {
    if($list[$i] != '.'){
      if($list[$i] != '..'){
        ?>
        <li><a href="index.php?id=<?=$list[$i]?>"><?=$list[$i]?></a> </li>
        <!--<li><a href="#?id=<? ?>"><? ?></a> </li> -->
        <?php
      }
    }
    $i = $i + 1;
  }


}

?>





<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
      <?php
      print_title();
       ?>


    </title>
  </head>
  <body>
    <h1><a href="index.php">WEB</a></h1>
    <!--
    <ol>
      <li><a href="index.php?id=HTML">HTML</a> </li>
      <li><a href="index.php?id=CSS">CSS</a> </li>
      <li><a href="index.php?id=JavaScript">JavaScript</a> </li>
      <li><a href="index.php?id=MySQL">MySQL</a> </li>
      <li><a href="index.php?id=PHP">PHP</a> </li>
    </ol>
     -->



     <ol>
       <?php
        print_list();
        ?>
     </ol>

<!--

    <h2>
      <?php
      echo $_GET['id'];
      ?>
    </h2>
-->
  <h2>
    <?php
      print_title();
      ?>
  </h2>
<!--

    <P>
      <?php
       echo file_get_contents("data/".$_GET['id']);
       ?>
    </p>
 -->
      <?php
        print_description();
      ?>

  </body>
</html>
