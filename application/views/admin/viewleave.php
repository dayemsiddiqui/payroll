
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
                             Employee Leave Details
                          </header>
                          <table class="table">
                              <thead>
                              <tr>

                                  <th>#</th>
                                  <th>Employee Name</th>
                                  <th>Casual</th>
                                  <th>Sick</th>
                                  <th>Earn</th>

                              </tr>
                              </thead>
                              <tbody>

                            <?php
                            $i = 1;
                            foreach ($leaves as $leave) {

                              echo "<tr>";

                                       echo "<td>";
                                       echo $i;
                                       echo "</td>";

                                       echo "<td>";
                                       echo $leave->Name;
                                       echo "</td>";

                                       echo "<td>";
                                       echo $leave->casual;
                                       echo "</td>";

                                       echo "<td>";
                                       echo $leave->sick;
                                       echo "</td>";

                                       echo "<td>";
                                       echo $leave->earn;
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
