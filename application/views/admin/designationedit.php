
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-user-md"></i> Profile</h3>
					<!-- <ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_documents_alt"></i>Pages</li>
						<li><i class="fa fa-user-md"></i>Profile</li>
					</ol> -->
				</div>
			</div>
              <div class="row">
                <!-- profile-widget -->
                <div class="col-lg-12">
                    <div class="profile-widget profile-widget-info">
                          <div class="panel-body">
                            <div class="col-lg-2 col-sm-2">
                              <h4>Jenifer Smith</h4>
                              <div class="follow-ava">
                                  <img src="<?php echo base_url(); ?>static/img/profile-widget-avatar.jpg" alt="">
                              </div>
                              <h6>Administrator</h6>
                            </div>
                            <div class="col-lg-4 col-sm-4 follow-info">
                                <p>Hello I’m Jenifer Smith, a leading expert in interactive and creative design.</p>
                                <p>@jenifersmith</p>
								<p><i class="fa fa-twitter">jenifertweet</i></p>
                                <h6>
                                    <span><i class="icon_clock_alt"></i>11:05 AM</span>
                                    <span><i class="icon_calendar"></i>25.10.13</span>
                                    <span><i class="icon_pin_alt"></i>NY</span>
                                </h6>
                            </div>
                            <div class="col-lg-2 col-sm-6 follow-info weather-category">
                                      <ul>
                                          <li class="active">

                                              <i class="fa fa-comments fa-2x"> </i><br>

											  Contrary to popular belief, Lorem Ipsum is not simply
                                          </li>

                                      </ul>
                            </div>
							<div class="col-lg-2 col-sm-6 follow-info weather-category">
                                      <ul>
                                          <li class="active">

                                              <i class="fa fa-bell fa-2x"> </i><br>

											  Contrary to popular belief, Lorem Ipsum is not simply
                                          </li>

                                      </ul>
                            </div>
							<div class="col-lg-2 col-sm-6 follow-info weather-category">
                                      <ul>
                                          <li class="active">

                                              <i class="fa fa-tachometer fa-2x"> </i><br>

											  Contrary to popular belief, Lorem Ipsum is not simply
                                          </li>

                                      </ul>
                            </div>
                          </div>
                    </div>
                    <section class="panel">
                          <header class="panel-heading">
                             Designation Details
                          </header>
                          <div class="panel-body">
                              <form method="post" action="<?php echo base_url(); ?>index.php/profile/adddesignation">
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Designation Name</label>
                                      <div class="col-sm-10">
                                          <input type="text" name="designation_name" class="form-control">
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <!-- <label class="col-lg-2 control-label">Designation</label> -->
                                      <div class="col-lg-10 col-lg-offset-2">
                                          <input type="submit" class="form-control" name="submit" value="Save">
                                      </div>
                                  </div>



                              </form>
                          </div>
                      </section>
                </div>
              </div>
          </section>
      </section>
      <!--main content end-->
