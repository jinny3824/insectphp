<?php
    require_once('lib/print.php');
    require_once('view/top.php');
?>
<a href="index_create.php">Create</a>
        <?php 
        if(isset($_GET['title'])) { ?>
      <a href="index_update.php?title=<?=$_GET['title']?>">update</a>
      <form action="index_delete.php" method="post">
        <input type="hidden" name="tit" value="<?=$_GET['title']?>">
        <input type="submit" value="delete">
      </form>
    
      <?php } ?>
    
    
    
    
        <h2>
   <?php title2();?>
    </h2>

    <p>
    <?php desc();?>
    </p>
<?php require_once('view/bottom.php');?>