
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
                             Holiday Details
                          </header>
                          <table class="table">
                              <thead>
                              <tr>

                                  <th>#</th>
                                  <th>Shift</th>
                                  <th>Start Time</th>
                                  <th>End Time</th>
                                  <th>Friday Time</th>
                                  <th>Lunch Time</th>
                                  <th>Friday Lunch Time</th>
                                  <th>Lunch Duration</th>
                                  <th>Late Limit</th>
                                  <th>Late Allow</th>


                              </tr>
                              </thead>
                              <tbody>

                            <?php
                            $i = 1;
                            foreach ($shifts as $shift) {

                              echo "<tr>";

                                       echo "<td>";
                                       echo $i;
                                       echo "</td>";

                                       echo "<td>";
                                       echo $shift->shift;
                                       echo "</td>";

                                       echo "<td>";
                                       echo $shift->startTime;
                                       echo "</td>";

                                       echo "<td>";
                                       echo $shift->endTime;
                                       echo "</td>";

                                       echo "<td>";
                                       echo $shift->fridayTime;
                                       echo "</td>";

                                       echo "<td>";
                                       echo $shift->lunchStartTime;
                                       echo "</td>";

                                       echo "<td>";
                                       echo $shift->fridayLunch;
                                       echo "</td>";

                                       echo "<td>";
                                       echo $shift->lunchDuration;
                                       echo "</td>";

                                       echo "<td>";
                                       echo $shift->lateLimit;
                                       echo "</td>";

                                       echo "<td>";
                                       echo $shift->lateAllow;
                                       echo "</td>";




                              echo "</tr>";
                              $i = $i + 1;
                            }

                              ?>


                              </tbody>
                          </table>
                      </section>
                </div>
              </div>
          </section>
      </section>
      <!--main content end-->
