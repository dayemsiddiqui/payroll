
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
                             Overtime Details
                          </header>
                          <table class="table">
                              <thead>
                              <tr>

                                  <th>#</th>
                                  <th>Employee</th>
                                  <th>Overtime Hour</th>
                                  <th>Timeout</th>
                                  <th>Remarks</th>
                                  <th>date</th>
                              </tr>
                              </thead>
                              <tbody>

                            <?php
                            $i = 1;
                            foreach ($overtimes as $overtime) {

                              echo "<tr>";

                                       echo "<td>";
                                       echo $i;
                                       echo "</td>";

                                       echo "<td>";
                                       echo $overtime->Name;
                                       echo "</td>";

                                       echo "<td>";
                                       echo $overtime->overTime_hour;
                                       echo "</td>";

                                       echo "<td>";
                                       echo $overtime->timeout;
                                       echo "</td>";

                                       echo "<td>";
                                       echo $overtime->remarks;
                                       echo "</td>";

                                       echo "<td>";
                                       echo $overtime->date;
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
