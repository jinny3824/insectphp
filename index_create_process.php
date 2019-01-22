<?PHP
  file_put_contents('ins_data/'.$_POST['tit'],$_POST['desc']);  
  header("Location:/indexinsect.php?title=".$_POST['tit']);

?>