<style>
body {
    background-color: #f7f3e9;
}

.form-container {
    max-width: 500px;
    margin: 50px auto;
    padding: 30px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.form-header {
    background-color: #8c6c42;
    color: #fff;
    padding: 15px;
    border-radius: 10px 10px 0 0;
    text-align: center;
}

.form-group label {
    color: #5c4732;
}

.btn-brown {
    background-color: #8c6c42;
    border: none;
    color: #fff;
}

.btn-brown:hover {
    background-color: #6e5334;
}
</style>
<div class="main-panel" style="">
  <div class="content-wrapper">
    <div class="row">
        <div class="col-md-10 grid-margin m-auto stretch-card">
            <div class="card">
                <div class="card-body performane-indicator-card">

                    <div class="form-contFainer">
                        <div class="form-header">
                            <h4 class="text-light">Add New Hotel Room</h4>
                        </div>
                        <form action="../php/editing/edits.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="roomNumber">Room Number</label>
                                <input type="text" class="form-control" id="roomNumber"
                                    placeholder="Enter room number" name="room_no">
                            </div>
                            <div class="form-group">
                                <label for="roomType">Room Type</label>
                                <select class="form-control" id="roomType" name="room_type">
                                    <option value="single room">SINGLE ROOM</option>
                                    <option value="twin room">TWIN ROOM</option>
                                    <option value="standard room">STANDARD ROOM</option>
                                    <option value="king room">KING ROOM</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="price">Price per Night</label>
                                <input type="number" name="room_price" class="form-control" id="price" placeholder="Enter price">
                            </div>
                            <div class="form-group">
                                <label for="roomImages">Room Images</label>
                                <input type="file" name="room_image" class="form-control-file" id="roomImages">
                            </div>
 
                            <div class="form-group">
                                <label for="numberOfBeds">Number of Beds</label>
                                <input type="number" name="n_beds" class="form-control" id="numberOfBeds"
                                    placeholder="Enter number of beds">
                            </div>
                            <div class="form-group">
                                <label for="roomSize">Room Size (ft)</label>
                                <input type="number" name="size" class="form-control" id="roomSize"
                                    placeholder="Enter room size in fts">
                            </div>
                            <div class="form-group">
                                <label for="numberOfPeople">Max Number of People</label>
                                <input type="number" name="n_pp" class="form-control" id="numberOfPeople"
                                    placeholder="Enter maximum number of people">
                            </div>
                            <div class="form-group">
                                <label for="numberOfPeople">Description of room</label>
                                <textarea type="number" name="desc" class="form-control" id="desc"
                                    placeholder="Enter Some description for that room"></textarea>
                            </div>
                            <button type="submit" class="btn btn-brown btn-block" name="add_room">Add Room</button>
                        </form>

                    </div>

                    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

                </div>

                
            </div>
        </div>

        <!-- <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                
              </div>
            </div>
          </div> -->
    </div>
</div>

<div class="content-wrapper">
  <div class="row">
      <div class="col-md-10 grid-margin m-auto stretch-card">
          <div class="card">
              <div class="card-body performane-indicator-card">
                <section class="site-section">
                  <div class="container">
                    <span id="rooms"></span>
                    <div class="row">
                      <?php
                      $querys = "SELECT * FROM `rooms` ORDER BY id DESC";
                      $outs = mysqli_query($con, $querys);
                        while ($rows = mysqli_fetch_assoc($outs)) {
                          # code...
                          $room_image = $rows['room_image'];
            
                          $room_no = $rows['room_no'];
                          $room_type = $rows['room_type'];
            
                          $size = $rows['size'];
                          $pp = $rows['pp'];
            
                          $desc = $rows['des'];
            
                          $room_price = $rows['room_price'];
                          $room_id = $rows['room_id'];
            
                          $dater = $rows['dater'];
                          $timer = $rows['timer']; 
                      ?>
                      <div class="col-md-4 mb-4">
                        <div class="media d-block room mb-0">
                      <span id="roomid<?php echo $room_id;?>"></span>

                          <figure>
                            <img src="../images/rooms/<?php echo $room_image;?>" alt="Generic placeholder image" class="img-fluid" style="height: 15rem; width: 23rem;">
                            <div class="overlap-text">
                              <span>
                                Featured Room 
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span>
                              </span>
                            </div>
                          </figure>
                          <div class="media-body">
                            <h3 class="mt-0"><a href="booknow.php?room_id=<?php echo $room_id;?>#Reservation"><?php echo $room_type;?></a></h3>
                            <ul class="room-specs">
                              <li><span class="ion-ios-people-outline"></span> <?php echo $pp;?> Guests</li>
                              <li><span class="ion-ios-crop"></span> <?php echo $size;?> ft <sup>2</sup></li>
                            </ul>
                            <p><?php echo $desc;?></p>
                            <div class="btns" style="display: flex; gap: 0.5rem; width: 80%; flex-direction: column; margin-left: 20%">
                            <p><a href="?link=3&&update_room_id=<?php echo $rofom_id;?>#update_room" class="btn btn-dark btn-sm">Update</a></p>
                            <p><a href="?link=3&&delete_room=<?php echo $room_id;?>#roomid<?php echo $room_id;?>" class="btn btn-danger btn-sm">Delete</a></p>
                            </div>
                          </div>
                        </div>
                      </div>
                          <?php
            
                        }

                        if (isset($_GET['delete_room'])) {
                            # code...
                            $room_id = $_GET['delete_room'];

                        ?>

                        <div class="delete">
                            <p>Are you sure you want to delete this room <?php echo
                            $room_id;?><a href="?link=3#roomid<?php echo $room_id;?>" class="close">&times;</a></p>
                            <p><a href="../php/editing/edits.php?delete_room=<?php echo
                            $room_id;?>" class="btn btn-danger btn-sm">Delete</a></p>
                        </div>
                        <style>
                            .delete{
                                position: fixed;
                                top: 50%;
                                left: 50%;
                                transform: translate(-50%, -50%);
                                background-color: #f0f0f0;
                                padding: 1rem;
                                width: 30%;
                                
                            }
                        </style>

                       <?php
                        }

                       ?>
                    </div>
                  </div>
                </section>
            

                  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
                  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

              </div>

              
          </div>
      </div>

      <!-- <div class="col-md-4 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              
            </div>
          </div>
        </div> -->
  </div>
  
<?php
  if (isset($_GET['update_room_id'])) {
    # code...

    $room_id = $_GET['update_room_id'];
    $queryt = "SELECT * FROM `rooms` WHERE room_id='$room_id' ORDER BY id DESC ";

    $outt = mysqli_query($con, $queryt);
    $rowt = mysqli_fetch_assoc($outt);

    $room_image = $rowt['room_image'];
    $beds = $rowt['beds'];
            
    $room_no = $rowt['room_no'];
    $room_type = $rowt['room_type'];

    $size = $rowt['size'];
    $pp = $rowt['pp'];

    $desc = $rowt['des'];

    $room_price = $rowt['room_price'];
    $room_id = $rowt['room_id'];

    $dater = $rowt['dater'];
    $timer = $rowt['timer'];
?>
<span id="update_room"  ></span>
 
  <div class="content-wrapper">
    <div class="row">
        <div class="col-md-10 grid-margin m-auto stretch-card">
            <div class="card">
                <div class="card-body performane-indicator-card">

                    <div class="form-contFainer" >
                        <div class="form-header">
                            <h4 class="text-light" >Update Hotel Room</h4>
                        </div>
                        <form action="../php/editing/edits.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="$real_room_id" value="<?php echo $room_id;?>">
                            <div class="form-group">
                                <label for="roomNumber">Room Number</label>
                                <input type="text" class="form-control" id="roomNumber"
                                    placeholder="Enter room number" name="room_no" value="<?php echo $room_no; ?>">
                            </div>
                            <div class="form-group">
                                <label for="roomType">Room Type</label>
                                <select class="form-control" id="roomType" name="room_type">
                                    <option value="<?php echo $room_type; ?>"><?php echo $room_type; ?></option>
                                    <option value="single room">SINGLE ROOM</option>
                                    <option value="twin room">TWIN ROOM</option>
                                    <option value="standard room">STANDARD ROOM</option>
                                    <option value="king room">KING ROOM</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="price">Price per Night</label>
                                <input type="number" name="room_price" class="form-control" value="<?php echo $room_price; ?>" id="price" placeholder="Enter price">
                            </div>
                            <div class="form-group">
                                <label for="roomImages">Room Images</label>
                                <img src="../images/rooms/<?php echo $room_image; ?>" width="500"    class="form-control-file" id="roomImages">
                            </div><br>
                            <div class="form-group">
                                <label for="numberOfBeds">choose new image</label>
                                <input type="file" name="room_image" value="<?php echo $beds; ?>" class="form-control-file" id="numberOfBeds"
                                    placeholder="Enter number of beds">
                            </div>
                            <div class="form-group">
                                <label for="numberOfBeds">Number of Beds</label>
                                <input type="number" name="n_beds" value="<?php echo $beds; ?>" class="form-control" id="numberOfBeds"
                                    placeholder="Enter number of beds">
                            </div>
                            <div class="form-group">
                                <label for="roomSize">Room Size (ft)</label>
                                <input type="number" name="size" value="<?php echo $size; ?>" class="form-control" id="roomSize"
                                    placeholder="Enter room size in fts">
                            </div>
                            <div class="form-group">
                                <label for="numberOfPeople">Max Number of People</label>
                                <input type="number" name="n_pp" value="<?php echo $pp; ?>" class="form-control" id="numberOfPeople"
                                    placeholder="Enter maximum number of people">
                            </div>
                            <div class="form-group">
                                <label for="numberOfPeople">Description of room</label>
                                <textarea type="number" name="desc" class="form-control" id="desc"
                                    placeholder="Enter Some description for that room"><?php echo $desc; ?></textarea>
                            </div>
                            <button type="submit" class="btn btn-brown btn-block" name="update_room">Update Room</button>
                        </form>

                    </div>

                    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

                </div>

                
            </div>
        </div>

        <!-- <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                
              </div>
            </div>
          </div> -->
    </div>

</div>
<?php
}

  ?>
</div>
</div>