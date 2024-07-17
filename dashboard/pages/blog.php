<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">

            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <h1 class="px-5 py-2">My latest blogs 
                      <!-- <span style="
                      float: right; margin-right: 10%; color: #fff; background: brown; width: 6%; text-align: center;height: 2.3rem;border-radius: 2.3rem; cursor: pointer;
                      " id="add_blog"><b>&plus;</b></span> -->
                      </h1>
                    
                    <div class="card-body" style="display:flex; flex-wrap:wrap; gap: 20px;">

                        <!-- these are the blogs -->
                        <div class="col-md-4">
                            <div class="post-entry">
                                <img src="../images/img_3.jpg" alt="Image placeholder" class="img-fluid">
                                <div class="body-text">
                                    <div class="category">Rooms</div>
                                    <h3 class="mb-3"><a href="blog-single.html">New Rooms</a></h3>
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum
                                        deserunt illo quis similique dolore voluptatem culpa voluptas rerum, dolor
                                        totam.</p>
                                    <!-- <p><a href="#" class="btn btn-primary btn-outline-primary btn-sm">Read More</a></p> -->
                                </div>
                            </div>
                        </div>
                        <!-- these a re the blogs -->
                        <!-- these are the blogs -->
                        <div class="col-md-4">
                            <div class="post-entry">
                                <img src="../images/img_3.jpg" alt="Image placeholder" class="img-fluid">
                                <div class="body-text">
                                    <div class="category">Rooms</div>
                                    <h3 class="mb-3"><a href="blog-single.html">New Rooms</a></h3>
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum
                                        deserunt illo quis similique dolore voluptatem culpa voluptas rerum, dolor
                                        totam.</p>
                                    <!-- <p><a href="#" class="btn btn-primary btn-outline-primary btn-sm">Read More</a></p> -->
                                </div>
                            </div>
                        </div>
                        <!-- these a re the blogs -->
                    </div>
                </div>
            </div>
 
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                  <div class="card-body performane-indicator-card">
                      <h2>Create a blog here</h2>
                      <form action="../php/editing/edits.php" method="post" class="blog" enctype="multipart/form-data">
                          <div class="input">
                              <label for="title">Title</label>
                              <input id="title" type="text" name="title" id="">
                          </div>
                          <div class="input">
                            <label for="">Introduction</label>
                            <textarea name="intro" id="" cols="30" rows="10" required></textarea>
                        </div>
                          <div class="input">
                              <label for="">Add an image 1</label>
                              <input type="file" name="image" id="">
                          </div>
                          <div class="input">
                              <label for="">Add an image 2</label>
                              <input type="file" name="image1" id="">
                          </div>
                          <div class="input">
                              <label for="">Add an image 3</label>
                              <input type="file" name="image2" id="">
                          </div>
                          <div class="input">
                              <label for="">Add a description of the blog</label>
                              <textarea name="desc" id="" cols="30" rows="10"></textarea>
                          </div>
                          <div class="input">
                            <label for="">Add categoly</label>
                              <input type="text" name="categoly" id="" required>
                        </div>
                          <button type="submit" class="add_blog" name="add_blog" style="background: brown; color: #fff; border: none; font-weight: bold; width: 40%; padding: 0.4rem; border-radius: 0.4rem; margin-left: auto;box-shadow: 1px 4px 6px black;">Add blog</button>
                      </form>
                  </div>
              </div>
          </div>
        </div>
    </div>
</div>