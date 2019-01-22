<?php
       require_once('lib/print.php');
       require_once('view/top.php');
?>

<a href="index_create.php">Create</a>

    <form action="index_create_process.php"method="post">
        <p><input type="text"name="tit"placeholder="Title"></p>
        <p><textarea name="desc"cols="30" rows="10"></textarea></p>
        <p><input type="submit"value="create"></p>
        </form>


    
   
        <?php require_once('view/bottom.php');?>