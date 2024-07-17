<div class="left">
    <div class="contact-center">
        <div class="contact-center-left">
            <h2>Paragraph</h2>
            <img src="../images/img_4.jpg" width="360px" alt="">
            <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae labore aspernatur cumque inventore voluptatibus odit doloribus! Ducimus, animi perferendis repellat. Ducimus harum alias quas, quibusdam provident ea sed, sapiente quo.
            Ullam cumque eveniet, fugiat quas maiores, non modi eos deleniti minima, nesciunt assumenda sequi vitae culpa labore nulla! Cumque vero, magnam ab optio quidem debitis dignissimos nihil nesciunt vitae impedit!
            </p>
        </div>
    </div>
</div>
<div class="right">
     <div class="contact-center-right">
            <form action="../php/editing/edits.php" method="post">
                 <h4>Change Header</h4>
                <input type="text" placeholder="header" value="Paragraph" name="contact_h">
                <input type="submit" value="Change" name="h_contact">
            </form>
            <form action="../php/editing/edits.php" method="post" enctype="multipart/form-data">
                <h4>Change Image</h4>
                <input type="file" id="" name="contact_img">
                <input type="submit" value="Change" name="img_contact">
            </form>
            <form action="../php/editing/edits.php" method="post">    
                <h4>Change Paragraph</h4>
                <textarea id="" cols="30" rows="10" name="contact_p"></textarea>
                <input type="submit" value="Change" name="p_contact">
            </form>
        </div>
</div>