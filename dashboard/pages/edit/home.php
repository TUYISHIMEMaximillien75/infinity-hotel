<?php
include "../php/logics2.php";
?>
<div class="left">
    <div class="contact-center">
        <div class="contact-center-left">
            <h2><?php echo $header_text;?></h2>
            <img src="../images/<?php echo $header_img;?>" width="360px" alt="">
            <p> 
                <?php echo $header_p;?>
            </p>
        </div>
    </div>
</div>
<div class="right">
     <div class="contact-center-right">
            <form action="../php/editing/edits.php" method="post">
                 <h4>Change Header</h4>
                <input type="text" placeholder="header" name="headertext" value="<?php echo $header_text;?>">
                <input type="submit" value="Change" name="changeheader">
            </form>
            <form action="../php/editing/edits.php" enctype="multipart/form-data" method="post">
                <h4>Change Image</h4>
                <input type="file" name="image" id="">
                <input type="submit" value="Change" name="changeimg">
            </form>
            <form action="../php/editing/edits.php" method="post">    
                <h4>Change Paragraph</h4>
                <textarea name="paragraph" id="" cols="30" rows="10"><?php echo $header_p;?></textarea>
                <input type="submit" value="Change" name="changep">
            </form>
        </div>
</div>