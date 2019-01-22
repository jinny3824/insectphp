<?php
        require_once('lib/print.php');
        require_once('view/top.php');
?>

<a href="index_create.php">Create</a>
        
        <?php if(isset($_GET['title'])) { ?>
      <a href="index_update.php?title=<?=$_GET['title']?>">update</a>
    <?php } ?>
    
    
    
    <form action="index_update_process.php"method="post">
    <input type="hidden"name="old_tit"value="<?=$_GET['title']?>">    
    <p><input type="text"name="tit"placeholder="Title" value="<?php title2(); ?>"></p>
        <p><textarea name="desc"cols="30" rows="10"><?php desc(); ?></textarea></p>
        <p><input type="submit"value="update"></p>
        </form>
       
       
        <?php require_once('view/bottom.php');?>