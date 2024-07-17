 
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card ">
                    <div stlye=" display:flex; flex-wrap: wrap;" class="card-body performane-indicator-card">
                        <?php
                    while ($row1 = mysqli_fetch_assoc($res4)) {
                        # code...
                        $b_names = $row1['b_names'];
                        $email = $row1['email'];
                        $phone = $row1['phone'];
                        $guests = $row1['guests'];
                        $n_room = $row1['n_room'];
                        $t_room = $row1['t_room'];
                        $dater = $row1['dater'];
                        $timer = $row1['timer'];
                        $a_date = $row1['a_date'];
                        $d_date = $row1['d_date'];
                        $u_id = $row1['u_id'];
                        $note = $row1['note'];
                    ?>
                        <div class="block" class="col-md-5 p-5 m-auto ">

                        <div class="blocks">
                                <div class="value">
                                    <h2>Names</h1>
                                        <p><?php echo $b_names; ?></p>
                                </div>
                                <div class="value">
                                    <h6>Date Applied</h1>
                                        <p><?php echo $dater." at ".$timer; ?></p>
                                </div>
                            </div>
                            <div class="blocks">
                                <div class="value">
                                    <h6>Email</h1>
                                        <p><?php echo $email; ?></p>
                                </div>
                                <div class="value">
                                    <h6>Entry Date</h1>
                                        <p><?php echo $a_date; ?></p>
                                </div>
                            </div>

                            <div class="blocks">
                                <div class="value">
                                    <h6>Phone number</h1>
                                        <p><?php echo $phone; ?></p>
                                </div>
                                <div class="value">
                                    <h6>Exit Date</h1>
                                        <p><?php echo $d_date; ?></p>
                                </div>
                            </div>

                            <div class="blocks">
                                <div class="value">
                                    <h6>Guests</h1>
                                        <p><?php echo $guests; ?></p>
                                </div>
                                <div class="value">
                                    <h6>Room type</h1>
                                        <p><?php echo $t_room; ?></p>
                                </div>
                            </div>
                            <div class="blocks">
                                <div class="value">
                                    <h6>Rooms booked</h1>
                                        <p><?php echo $n_room; ?></p>
                                </div>
                                <div class="value">
                                    <h6>Number of rooms</h1>
                                        <p>2</p>
                                </div>
                            </div>
                            <div class="blocks">
                                <a href="../php/booknow.php?confrim=received&&u_id=<?php echo $u_id?>">Recieved</a>
                                <a href="?deleteid=1">Delete</a>
                            </div>
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
                    <!-- block here 
                  </div>
                </div>
              </div> -->
        </div>
    </div>
</div>