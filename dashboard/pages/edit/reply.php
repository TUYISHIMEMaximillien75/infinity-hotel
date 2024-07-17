<style>
.form {
    display: none;
    z-index: 9;
    position: fixed;
    top: 22%;
    right: 35%;

    width: 350px;
    height: 350px;
    background-color: white;
    color: black;
    border: 2px solid black;
    display: flex;
    flex-direction: column;
    gap: 20px;
    align-items: center;
    justify-content: center;
    padding: 5px;
    margin: 10px;
}

.form input,
button {
    width: 100%;
}

@media (max-width:900px) {
    .form {
        width: 380px;
        height: 380px;
        position: fixed;
        right: 25%;
        top: 20%;
    }

    .form input,
    button {
        width: 100%;

    }
}

@media (max-width:412px) {
    .form {
        width: 280px;
        height: 280px;
        position: fixed;
        right: 10%;
        height: auto;
        top: 20%;
    }
}
</style>
<?php 

if (isset($_GET['msg'])) {
    # code...
    $msg_id = $_GET['msg'];
    $logic = "SELECT * FROM `contact` WHERE message_id='$msg_id'";
    $last = mysqli_query($con, $logic);
    $final = mysqli_fetch_assoc($last);
    $email = $final['email'];
    $username = $final['name'];
    $message_id = $final['message_id'];

}
?>
<div class="form" id="myform">
    <form action="../php/editing/edits.php" method="post">
        <label for="recieverEmail">To</label>
        <br>
        <input type="" name="recieverEmail" value="<?php echo  $email; ?>" id="recieverEmail" readonly>
        <input type="" name="user" value="<?php echo  $username; ?>" id="recieverEmail" hidden>
        <input type="" name="message_id" value="<?php echo  $message_id; ?>" id="recieverEmail" hidden>
        <br>
        <label for="message">Message</label>
        <br>
        <textarea name="feedback_message" id="" cols="30" rows="5"></textarea>
        <br>
        <input type="submit" name="replay" class="btn btn-primary"
            style="margin: 10px; background: brown; border: none;" value="submit">
        <a href="?link=5&&pop=none" class="btn btn-red" style="margin-left: 30%;" type="button"
            onclick="closeForm()">Close</a>
    </form>
</div>