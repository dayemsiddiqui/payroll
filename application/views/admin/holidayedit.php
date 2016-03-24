
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
                             Add Holiday
                          </header>
                          <div class="panel-body">
                              <form class="form-horizontal " method="post" action="<?php echo base_url(); ?>index.php/leave/addholiday">

                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Strike</label>
                                      <div class="col-sm-10">
                                        <select name="strike" class="form-control m-bot15">
                                            <option value='1'>Yes</option>
                                            <option value='0'>No</option>

                                        </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Description</label>
                                      <div class="col-sm-10">
                                          <input class="form-control" name="description" type="text" value="">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Date</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" name="date" value="">
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
