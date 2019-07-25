
        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="card ">
                  <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons"></i>
                    </div>
                    <h4 class="card-title">Global Passengers by Top Locations</h4>
                  </div>
                  <div class="card-body ">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="table-responsive table-sales">
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img src="./assets/img/flags/US.png"> </div>
                                </td>
                                <td>USA</td>
                                <td class="text-right">
                                  2.920
                                </td>
                                <td class="text-right">
                                  23.23%
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img src="./assets/img/flags/JAPAN.png"> </div>
                                </td>
                                <td>Japan</td>
                                <td class="text-right">
                                  1.300
                                </td>
                                <td class="text-right">
                                  17%
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img src="./assets/img/flags/AU.png"> </div>
                                </td>
                                <td>Australia</td>
                                <td class="text-right">
                                  760
                                </td>
                                <td class="text-right">
                                  10.35%
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img src="./assets/img/flags/GB.png"> </div>
                                </td>
                                <td>United Kingdom</td>
                                <td class="text-right">
                                  690
                                </td>
                                <td class="text-right">
                                  7.87%
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img src="./assets/img/flags/RO.png"> </div>
                                </td>
                                <td>Romania</td>
                                <td class="text-right">
                                  600
                                </td>
                                <td class="text-right">
                                  5.94%
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img src="./assets/img/flags/BR.png"> </div>
                                </td>
                                <td>Brasil</td>
                                <td class="text-right">
                                  550
                                </td>
                                <td class="text-right">
                                  4.34%
                                </td>
                              </tr>
                            </tbody>
                          </table>
                          </div>
                          </div>
                          <div class="col-md-6 ml-auto mr-auto">
                            <div id="worldMap" style="height: 300px;"></div>
                          </div>
                          </div>
                          </div>
                          </div>
                          </div>
                        </div>
                        <!-- <button type="button" class="btn btn-round btn-default dropdown-toggle btn-link" data-toggle="dropdown">
7 days
</button> -->
                        <div class="row">
                          <div class="col-md-4">
                            <div class="card card-chart">
                              <div class="card-header card-header-rose" data-header-animation="true">
                                <div class="ct-chart" id="websiteViewsChart"></div>
                              </div>
                              <div class="card-body">
                                <div class="card-actions">
                                  <button type="button" class="btn btn-danger btn-link fix-broken-card">
                                    <i class="material-icons">build</i> Fix Header!
                                  </button>
                                  
                                </div>
                                <h4 class="card-title">Website Views</h4>
                                <p class="card-category">Last Campaign Performance</p>
                              </div>
                              <div class="card-footer">
                                <div class="stats">
                                  <i class="material-icons">access_time</i> campaign sent 2 days ago
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="card card-chart">
                              <div class="card-header card-header-success" data-header-animation="true">
                                <div class="ct-chart" id="dailySalesChart"></div>
                              </div>
                              <div class="card-body">
                                <div class="card-actions">
                                  <button type="button" class="btn btn-danger btn-link fix-broken-card">
                                    <i class="material-icons">build</i> Fix Header!
                                  </button>
                                  
                                </div>
                                <h4 class="card-title">Usage status</h4>
                                <p class="card-category">
                                  <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today usage status.</p>
                              </div>
                              <div class="card-footer">
                                <div class="stats">
                                  <i class="material-icons">access_time</i> updated 4 minutes ago
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="card card-chart">
                              <div class="card-header card-header-info" data-header-animation="true">
                                <div class="ct-chart" id="completedTasksChart"></div>
                              </div>
                              <div class="card-body">
                                <div class="card-actions">
                                  <button type="button" class="btn btn-danger btn-link fix-broken-card">
                                    <i class="material-icons">build</i> Fix Header!
                                  </button>
                                  
                                </div>
                                <h4 class="card-title">Completed Tasks</h4>
                                <p class="card-category">Last Campaign Performance</p>
                              </div>
                              <div class="card-footer">
                                <div class="stats">
                                  <i class="material-icons">access_time</i> campaign sent 2 days ago
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                              <div class="card-header card-header-warning card-header-icon">
                                <div class="card-icon">
                                  <i class="material-icons">weekend</i>
                                </div>
                                <p class="card-category">All Locations</p>
                                <h3 class="card-title"><?=find("home",1)['allsite'];?></h3>
                              </div>
                              <div class="card-footer">
                                <div class="stats">
                                  <i class="material-icons text-danger">warning</i>
                                  <a href="https://itaiwan.gov.tw/hotspotQuery.php" target="_blank">Get Detail Space...</a>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                              <div class="card-header card-header-success card-header-icon">
                                <div class="card-icon">
                                  <i class="material-icons">store</i>
                                </div>
                                <p class="card-category">Station Sites</p>
                                <h3 class="card-title"><?=find("home",1)['stationsite'];?></h3>
                              </div>
                              <div class="card-footer">
                                <div class="stats">
                                  <i class="material-icons">date_range</i> Last 24 Hours
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                              <div class="card-header card-header-rose card-header-icon">
                                <div class="card-icon">
                                  <i class="material-icons">equalizer</i>
                                </div>
                                <p class="card-category">Website Visits</p>
                                <h3 class="card-title"><?=find("total",1)['total'];?></h3>
                              </div>
                              <div class="card-footer">
                                <div class="stats">
                                  <i class="material-icons">local_offer</i> Tracked from MySQL
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                              <div class="card-header card-header-info card-header-icon">
                                <div class="card-icon">
                                  <i class="fab fa-twitter"></i>
                                </div>
                                <p class="card-category">Followers</p>
                                <h3 class="card-title">0</h3>
                              </div>
                              <div class="card-footer">
                                <div class="stats">
                                  <i class="material-icons">update</i> Just Updated
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <h3>Features</h3>
                        <br>
                        <div class="row">
                          <div class="col-md-4">
                            <div class="card card-product">
                              <div class="card-header card-header-image" data-header-animation="true">
                                <a href="#pablo">
                                  <img class="img" src="./assets/img/taiwan01.jpg">
                                </a>
                              </div>
                              <div class="card-body">
                                <div class="card-actions text-center">
                                  <button type="button" class="btn btn-danger btn-link fix-broken-card">
                                    <i class="material-icons">build</i> Fix Header!
                                  </button>
                                  
                                </div>
                                <h4 class="card-title">
                                  <a href="#pablo">Easy for regeister</a>
                                </h4>
                                <div class="card-description">
                                <ol style="text-align:left;">
                                  <li>Visit the registtation page <a href="https://itaiwan.gov.tw/en/regist_01.php" target="_blank">(Click Here!)</a></li>
                                  <li>Enter mobile phone number</li>
                                  <li>Key in verification code</li>
                                </ol>
                                </div>
                              </div>
                              <div class="card-footer">
                                <div class="price">
                                  <h4></h4>
                                </div>
                                <div class="stats">
                                  <p class="card-category"><i class="material-icons">place</i> Taipei, Taiwan</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="card card-product">
                              <div class="card-header card-header-image" data-header-animation="true">
                                <a href="#pablo">
                                  <img class="img" src="./assets/img/card-3.jpg">
                                </a>
                              </div>
                              <div class="card-body">
                                <div class="card-actions text-center">
                                  <button type="button" class="btn btn-danger btn-link fix-broken-card">
                                    <i class="material-icons">build</i> Fix Header!
                                  </button>
                                  
                                </div>
                                <h4 class="card-title">
                                  <a href="#pablo">More than 5,000 WiFi hotspots</a>
                                </h4>
                                <div class="card-description">
                                You can search for hotspots by map or by condition and from the nationwide hotspot distribution map.
                                </div>
                              </div>
                              <div class="card-footer">
                                <div class="price">
                                  <h4></h4>
                                </div>
                                <div class="stats">
                                  <p class="card-category"><i class="material-icons">place</i> Taichung, Taiwan</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="card card-product">
                              <div class="card-header card-header-image" data-header-animation="true">
                                <a href="#pablo">
                                  <img class="img" src="./assets/img/taiwan02.jpg">
                                </a>
                              </div>
                              <div class="card-body">
                                <div class="card-actions text-center">
                                  <button type="button" class="btn btn-danger btn-link fix-broken-card">
                                    <i class="material-icons">build</i> Fix Header!
                                  </button>
                                  
                                </div>
                                <h4 class="card-title">
                                  <a href="#pablo">User-friendly</a>
                                </h4>
                                <div class="card-description">
                                Except for the hotspots in railway stations and rest area national highways, which are available 24 hours a day.
                                </div>
                              </div>
                              <div class="card-footer">
                                <div class="price">
                                  <h4></h4>
                                </div>
                                <div class="stats">
                                  <p class="card-category"><i class="material-icons">place</i> Taipei, Taiwan</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  