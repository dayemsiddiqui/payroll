
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
                             Employee Details
                          </header>
                          <div class="panel-body">
                              <form class="form-horizontal " method="post" action="<?php echo base_url(); ?>index.php/profile/addemployee">
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Name</label>
                                      <div class="col-sm-10">
                                          <input type="text" name="name" class="form-control">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Father Name</label>
                                      <div class="col-sm-10">
                                          <input type="text" name="father_name" class="form-control">
                                          <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Gender</label>
                                      <div class="col-sm-10">
                                        <select name="gender" class="form-control m-bot15">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">CNIC</label>
                                      <div class="col-sm-10">
                                          <input class="form-control" name="cnic" type="text" value="This is focused...">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Date Of Birth</label>
                                      <div class="col-sm-10">
                                          <input class="form-control" type="text" name="dob">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Identity Mark</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" name="identity_mark" value="">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Address</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" name="address" value="">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Mobile No</label>
                                      <div class="col-lg-10">
                                          <input type="text" class="form-control" name="mobileNo" value="">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Telephone No</label>
                                      <div class="col-lg-10">
                                          <input type="text" class="form-control" name="telephoneNo" value="">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Email</label>
                                      <div class="col-lg-10">
                                          <input type="email" class="form-control" name="email" value="">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Basic Salary</label>
                                      <div class="col-lg-10">
                                      <input type="text" class="form-control" name="basic_salary" value="">
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Duty Hour</label>
                                      <div class="col-lg-10">
                                          <input type="text" class="form-control" name="duty_hour" value="">
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Department</label>
                                      <div class="col-lg-10">
                                        <select name="department_id" class="form-control m-bot15">
                                          <?php
                                            foreach ($departments as $row) {
                                              echo "<option value='$row->department_id'>$row->department_name</option>";
                                            }
                                           ?>


                                        </select>

                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Designation</label>
                                      <div class="col-lg-10">
                                        <select name="department_id" class="form-control m-bot15">
                                          <?php
                                            foreach ($designations as $row) {
                                              echo "<option value='$row->designation_id'>$row->designation_name</option>";
                                            }
                                           ?>
                                        </select>
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
