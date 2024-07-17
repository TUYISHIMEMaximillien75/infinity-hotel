<div class="main-panel" style="">
    <div class="content-wrapper">
        <div class="row">
              <div class="col-md-12 grid-margin m-auto stretch-card">
                <div class="card">
                  <div class="card-body performane-indicator-card">
                    <div class="nav">
                      <nav>
                        <ul class="nav">
                          <li class="nav-item">
                            <a href="?link=2&&edit=0" class="nav-link a">
                              Homepage
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="?link=2&&edit=1" class="nav-link a">
                              About Us
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="?link=2&&edit=2" class="nav-link a">
                              Contact Us
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="?link=2&&edit=3" class="nav-link a">
                              Hero sections
                            </a>
                          </li>
                        </ul>
                      </nav>
                    </div>
                    <div class="edit">
                      <?php

                        if (isset($_GET['edit'])) {
                        
                          $edit = $_GET['edit'];

                        if($edit == 2){
                          require("./pages/edit/contacts.php");
                        }
                        elseif($edit == 1){
                          require("./pages/edit/about.php");
                        }
                        elseif($edit == 0){
                          require("./pages/edit/home.php");
                        }
                        elseif($edit == 3){
                          require("./pages/edit/heros.php");
                        }
                        // elseif($edit == 0){
                        //   require("");
                        // }
                        }
                        

                      ?>
                    </div>
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