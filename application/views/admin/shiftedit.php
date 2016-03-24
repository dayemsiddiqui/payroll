
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
                    <section class="panel">
                          <header class="panel-heading">
                             Add Shift Details
                          </header>
                          <div class="panel-body">
                              <form class="form-horizontal " method="post" action="<?php echo base_url(); ?>index.php/leave/addshift">
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Start Time</label>
                                      <div class="col-sm-10">
                                          <input type="text" name="startTime" class="form-control">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">End Time</label>
                                      <div class="col-sm-10">
                                          <input type="text" name="endTime" class="form-control">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Shift</label>
                                      <div class="col-sm-10">
                                        <select name="shift" class="form-control m-bot15">
                                            <option value="day">Day</option>
                                            <option value="night">Night</option>
                                        </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Friday Time</label>
                                      <div class="col-sm-10">
                                          <input class="form-control" name="fridayTime" type="text" value="">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Lunch Start Time</label>
                                      <div class="col-sm-10">
                                          <input class="form-control" type="text" name="lunchStartTime">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Friday Lunch</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" name="fridayLunch" value="">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Lunch Duration</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" name="lunchDuration" value="">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Late Limit</label>
                                      <div class="col-lg-10">
                                          <input type="text" class="form-control" name="lateLimit" value="">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Late Allow</label>
                                      <div class="col-lg-10">
                                          <input type="text" class="form-control" name="lateAllow" value="">
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
