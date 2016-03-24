
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
                                  <th>Date</th>
                                  <th>Strike</th>
                                  <th>Description</th>


                              </tr>
                              </thead>
                              <tbody>

                            <?php
                            $i = 1;
                            foreach ($holidays as $holiday) {

                              echo "<tr>";

                                       echo "<td>";
                                       echo $i;
                                       echo "</td>";

                                       echo "<td>";
                                       echo $holiday->date;
                                       echo "</td>";

                                       echo "<td>";
                                       if($holiday->strike == 1){
                                         echo "Yes";
                                       }else{
                                         echo "No";
                                       }
                                       echo "</td>";

                                       echo "<td>";
                                       echo $holiday->description;
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
