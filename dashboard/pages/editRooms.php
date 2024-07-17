<div class="main-panel" style="">
    <div class="content-wrapper">
        <div class="row">
              <div class="col-md-10 grid-margin m-auto stretch-card">
                <div class="card">
                  <div class="card-body performane-indicator-card">
                    <form action="" method="post" id="form2">
                        <h1>Edit a room here</h1>
                        <div class="input">
                            <label for="room">Choose the room to be edited</label>
                            <br>
                            <select name="room" id="room" id="" required>
                              <option value=""></option>
                              <option value="">Single Room</option>
                              <option value="">Twin Room</option>
                              <option value="">King Room</option>
                              <option value="">Master Room</option>
                            </select>
                        </div>
                        <div class="input">
                            <label for="img1">Choose the room Image</label>
                            <br>
                            <input type="file" src="" alt="" id="img1" required name="img-one">
                            <br>
                            <br>
                        </div>
                    
                        <div class="input">
                            <label for="description">Type a room description</label>
                            <br>
                            <textarea name="description" id="description" cols="30" rows="10"></textarea>
                        </div>
                        <div class="input">
                            <label for="pricen">Type room price per night</label>
                            <br>
                            <input type="number" name="price" id="price" required placeholder="RWF">
                        </div>
                        <div class="input">
                            <input type="submit" value="Update room" name="submit">
                        </div>
                    </form>
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
</div>