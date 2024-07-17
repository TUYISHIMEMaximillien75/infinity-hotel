<?php
include "../php/logics2.php";
?>
<div class="left">
    <div class="contact-center">
        <div class="contact-center-left">
            <h2><?php echo $about_h;?></h2>
            <img src="../images/<?php echo $about_img;?> " width="360px" alt="">
            <p>
            <?php echo $about_p;?>  
            </p>
        </div>
    </div>
</div>
<div class="right">
     <div class="contact-center-right">
            <form action="../php/editing/edits.php" method="post">
                 <h4>Change Header</h4>
                <input type="text" placeholder="header" name="about_h" value=<?php echo $about_h;?>">
                <input type="submit" value="Change" name="h_about">
            </form>
            <form action="../php/editing/edits.php" method="post" enctype="multipart/form-data">
                <h4>Change Image</h4>
                <input type="file" name="about_img" id="">
                <input type="submit" value="Change" name="img_about">
            </form>
            <form action="../php/editing/edits.php" method="post">    
                <h4>Change Paragraph</h4>
                <textarea name="about_p" id="" cols="30" rows="10"><?php echo $about_p;?></textarea>
                <input type="submit" value="Change" name="p_about">
            </form>
        </div>
</div>