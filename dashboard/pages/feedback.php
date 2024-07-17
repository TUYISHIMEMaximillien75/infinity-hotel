<!-- Nav link for this [age copy in the index page of the dashboard in the nav ul -->
<!--  -->

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div stlye=" display:flex; flex-wrap: wrap; overflow-y: auto;"
                        class="card-body performane-indicator-card">
                        <?php
                      while ($row6 = mysqli_fetch_assoc($res6)) {
                        # code...
                        $name = $row6['name'];
                        $phone = $row6['phone'];
                        $email = $row6['email'];
                        $message = $row6['message'];
                        $message_id = $row6['message_id'];
                        $date = $row6['date'];

                    ?>  
                        <span id="<?php echo $message_id ?>"></span>
                        <div class="block"
                            style="background-color: var(--secondary); color: var(--primary); max-height: 40vh;  "
                            class="col-md-5 p-5 m-auto ">

                            <div class="blocks">
                                <div class="value">
                                    <h2>Names</h1>
                                        <p><?php echo $name;?> </p>
                                </div>
                                <div class="value">
                                    <h6>Date Sent</h1>
                                        <p><?php echo $date;?></p>
                                </div>
                            </div>
                            <div class="blocks">
                                <div class="value">
                                    <h6>Phone</h1>
                                        <p><?php echo $phone;?></p>
                                </div>
                                <div class="value">
                                    <h6>Email</h1>
                                        <p><?php echo $email;?></p>
                                </div>
                            </div>

                            <div class="blocks">
                                <div class="value">
                                    <h6>Message</h1>
                                        <p><?php echo $message;?></p>
                                </div>
                            </div>
                            <div class="blocks">
                                <a id="reply" href="?link=5&&pop=answer&&msg=<?php echo $message_id ?>" onclick="openForm()">Reply</a>
                                <a id="delete" href="edit/delete.php" class="btn btn-danger">Delete</a>
                            </div>
                            <style>
                            #reply {
                                background: #fff;
                                color: brown;
                                font-weight: bold;
                            }
                            #delete:hover {
                                background: #991106;
                                color: brown;
                                font-weight: bold;
                            }
                            </style>
                            <?php
                        if (isset($_GET['pop'])) {
                          # code...
                          $pop = $_GET['pop'];

                          if ($pop=='answer') {
                            # code...
                            include 'edit/reply.php';
                          }
                        }
                        ?>


                        </div>
                        <?php
                    }
                    ?>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    block here 
                  </div>
                </div>
              </div> -->
        </div>
    </div>
</div>