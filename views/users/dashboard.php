<?php
// INCLUDE CONNECTION TO MYSQL DATABASE
require('../../backend/config/connection.php');

// INCLUDE USER SESSION AUTH AND DETAILS
require('../../backend/config/users/session.php');


$withdrawalTotal = mysqli_num_rows(mysqli_query($conection, "SELECT * FROM `withdrawal` WHERE `user_id`='$userLogin'"));

$DepositTotal = mysqli_num_rows(mysqli_query($conection, "SELECT * FROM `deposit` WHERE `user_id`='$userLogin'"));

$NotificationTotal = mysqli_num_rows(mysqli_query($conection, "SELECT * FROM `notification` WHERE `user_id`='$userLogin'"));







?>



<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Eazibolt - User Dashbard</title>
  <link rel="stylesheet" href="../../assets/css/main.css">
  <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="../../assets/images/favicon.ico" />
</head>

<body>
  <div class="container-scroller">
    <!-- <div class="row p-0 m-0 proBanner" id="proBanner">
      <div class="col-md-12 p-0 m-0">
        <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
          <div class="ps-lg-1">
            <div class="d-flex align-items-center justify-content-between">
              <p class="mb-0 font-weight-medium me-3 buy-now-text">Please Ensure To Verify Your Email</p>
              <a href="#" target="_blank" class="btn me-2 buy-now-btn border-0">Do It Now</a>
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <a href="#"><i class="mdi mdi-home me-3 text-white"></i></a>
            <button id="bannerClose" class="btn border-0 p-0">
              <i class="mdi mdi-close text-white me-0"></i>
            </button>
          </div>
        </div>
      </div>
    </div> -->
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <?php require('../../backend/components/users/navbar.php'); ?>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <?php require('../../backend/components/users/sidenav.php'); ?>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              <span class="page-title-icon bg-primary text-white me-2">
                <i class="mdi mdi-home"></i>
              </span> Dashboard
            </h3>
            <nav aria-label="breadcrumb">
              <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                  <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                </li>
              </ul>
            </nav>
          </div>
          <div class="row">
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card  bg-primary card-img-holder text-white">
                <div class="card-body">
                  <img src="../../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                  <h4 class="font-weight-normal mb-3">Balance Naria<i class="mdi mdi-naria mdi-24px float-right"></i>
                  </h4>
                  <h2 class="mb-5"># <?php echo number_format($balance)  ?></h2>
                  <!-- <h6 class="card-text">Increased by 60%</h6> -->
                </div>
              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-info card-img-holder text-white">
                <div class="card-body">
                  <img src="../../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                  <h4 class="font-weight-normal mb-3">Eazibolt Coin <i class="mdi mdi-coin mdi-24px float-right"></i>
                  </h4>
                  <h2 class="mb-5"><?php echo $EaziboltCoin ?></h2>
                </div>
              </div>
            </div>
            <!-- <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-success card-img-holder text-white">
                <!-- <div class="card-body">
                  <img src="../../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                  <h4 class="font-weight-normal mb-3">Visitors Online <i class="mdi mdi-diamond mdi-24px float-right"></i>
                  </h4>
                  <h2 class="mb-5">95,5741</h2>
                </div> -->
              </div>
            <!-- </div> --> 
          </div>
          <div class="row d-flex justify-content-center">
            <div style="display: none;" class="col-md-7 grid-margin stretch-card ">
              <div class="card">
                <div class="card-body">
                  <div class="clearfix">
                    <h4 class="card-title float-left">Visit And Sales Statistics</h4>
                    <div id="visit-sale-chart-legend" class="rounded-legend legend-horizontal legend-top-right float-right"></div>
                  </div>
                  <canvas id="visit-sale-chart" class="mt-4"></canvas>
                </div>
              </div>
            </div>
            <div class="col-md-9 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Traffic Sources</h4>
                  <canvas id="traffic-chart"></canvas>
                  <div id="traffic-chart-legend" class="rounded-legend legend-vertical legend-bottom-left pt-4"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Report Table</h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th> # </th>
                          <th> Deriver name </th>
                          <th> Subject </th>
                          <th> Status </th>
                          <th> Last Update </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php

                        $selectReport = mysqli_query($conection, "SELECT * FROM `reportdriver` WHERE `user_id`='$login_id'");
                        if (mysqli_num_rows($selectReport)) {
                          $count = 0;
                          while ($fetcgReport = mysqli_fetch_assoc($selectReport)) {
                            $count++;
                            if ($fetcgReport['caseStatus'] == 0) {
                              $text = 'Pending';
                            }

                        ?>


                            <tr>
                              <td><?php echo $count ?></td>
                              <td>
                                <img src="../../assets/images/faces/face1.jpg" class="me-2" alt="image"> David Grey
                              </td>
                              <td> <?php echo $fetcgReport['title']  ?> </td>
                              <td>
                                <label class="badge badge-gradient-danger"><?php echo $text ?></label>
                              </td>
                              <td> Dec 5, 2017 </td>
                            </tr>


                          <?php

                          }
                        } else { ?>

                          <caption>Empty Table</caption>
                        <?php
                        }

                        ?>


                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            
            <div class="col-12 col-md-9 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-white">Todo</h4>
                  <div class="add-items d-flex">
                    <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?">
                    <button class="add btn btn-gradient-primary font-weight-bold todo-list-add-btn" id="add-task">Add</button>
                  </div>
                  <div class="list-wrapper">
                    <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                      <li>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="checkbox" type="checkbox"> Meeting with Alisa </label>
                        </div>
                        <i class="remove mdi mdi-close-circle-outline"></i>
                      </li>
                      <li class="completed">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="checkbox" type="checkbox" checked> Call John </label>
                        </div>
                        <i class="remove mdi mdi-close-circle-outline"></i>
                      </li>
                      <li>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="checkbox" type="checkbox"> Create invoice </label>
                        </div>
                        <i class="remove mdi mdi-close-circle-outline"></i>
                      </li>
                      <li>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="checkbox" type="checkbox"> Print Statements </label>
                        </div>
                        <i class="remove mdi mdi-close-circle-outline"></i>
                      </li>
                      <li class="completed">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="checkbox" type="checkbox" checked> Prepare for presentation </label>
                        </div>
                        <i class="remove mdi mdi-close-circle-outline"></i>
                      </li>
                      <li>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="checkbox" type="checkbox"> Pick up kids from school </label>
                        </div>
                        <i class="remove mdi mdi-close-circle-outline"></i>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../../assets/vendors/chart.js/Chart.min.js"></script>
  <script src="../../assets/js/jquery.cookie.js" type="text/javascript"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../assets/js/off-canvas.js"></script>
  <script src="../../assets/js/hoverable-collapse.js"></script>
  <script src="../../assets/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <!-- <script src="../../assets/js/dashboard.js"></script> -->
  <script src="../../assets/js/todolist.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timeago/1.6.7/jquery.timeago.min.js" integrity="sha512-RlGrSmkje9EE/FXpJKWf0fvOlg4UULy/blvNsviBX9LFwMj/uewXVoanRbxTIRDXy/0A3fBQppTmJ/qOboJzmA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


  <script>
    jQuery(document).ready(function() {
      jQuery("time.timeago").timeago();
    });
  </script>
  <script>
    // DASHBOARD

    let withdrawalTotal = "<?php echo $withdrawalTotal ?>";
    let $DepositTotal = "<?php echo $DepositTotal ?>";
    let $NotificationTotal = "<?php echo $NotificationTotal ?>";
    (function($) {
      'use strict';
      $(function() {

        Chart.defaults.global.legend.labels.usePointStyle = true;

        if ($("#serviceSaleProgress").length) {
          var bar = new ProgressBar.Circle(serviceSaleProgress, {
            color: 'url(#gradient)',
            // This has to be the same size as the maximum width to
            // prevent clipping
            strokeWidth: 8,
            trailWidth: 8,
            easing: 'easeInOut',
            duration: 1400,
            text: {
              autoStyleContainer: false
            },
            from: {
              color: '#aaa',
              width: 6
            },
            to: {
              color: '#57c7d4',
              width: 6
            }
          });

          bar.animate(.65); // Number from 0.0 to 1.0
          bar.path.style.strokeLinecap = 'round';
          let linearGradient = '<defs><linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="0%" gradientUnits="userSpaceOnUse"><stop offset="20%" stop-color="#da8cff"/><stop offset="50%" stop-color="#9a55ff"/></linearGradient></defs>';
          bar.svg.insertAdjacentHTML('afterBegin', linearGradient);
        }
        if ($("#productSaleProgress").length) {
          var bar = new ProgressBar.Circle(productSaleProgress, {
            color: 'url(#productGradient)',
            // This has to be the same size as the maximum width to
            // prevent clipping
            strokeWidth: 8,
            trailWidth: 8,
            easing: 'easeInOut',
            duration: 1400,
            text: {
              autoStyleContainer: false
            },
            from: {
              color: '#aaa',
              width: 6
            },
            to: {
              color: '#57c7d4',
              width: 6
            }
          });

          bar.animate(.6); // Number from 0.0 to 1.0
          bar.path.style.strokeLinecap = 'round';
          let linearGradient = '<defs><linearGradient id="productGradient" x1="0%" y1="0%" x2="100%" y2="0%" gradientUnits="userSpaceOnUse"><stop offset="40%" stop-color="#36d7e8"/><stop offset="70%" stop-color="#b194fa"/></linearGradient></defs>';
          bar.svg.insertAdjacentHTML('afterBegin', linearGradient);
        }
        if ($("#points-chart").length) {
          var ctx = document.getElementById('points-chart').getContext("2d");

          var gradientStrokeViolet = ctx.createLinearGradient(0, 0, 0, 181);
          gradientStrokeViolet.addColorStop(0, 'rgba(218, 140, 255, 1)');
          gradientStrokeViolet.addColorStop(1, 'rgba(154, 85, 255, 1)');

          var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
              labels: [1, 2, 3, 4, 5, 6, 7, 8],
              datasets: [{
                  label: "North Zone",
                  borderColor: gradientStrokeViolet,
                  backgroundColor: gradientStrokeViolet,
                  hoverBackgroundColor: gradientStrokeViolet,
                  pointRadius: 0,
                  fill: false,
                  borderWidth: 1,
                  fill: 'origin',
                  data: [20, 40, 15, 35, 25, 50, 30, 20]
                },
                {
                  label: "South Zone",
                  borderColor: '#e9eaee',
                  backgroundColor: '#e9eaee',
                  hoverBackgroundColor: '#e9eaee',
                  pointRadius: 0,
                  fill: false,
                  borderWidth: 1,
                  fill: 'origin',
                  data: [40, 30, 20, 10, 50, 15, 35, 20]
                }
              ]
            },
            options: {
              legend: {
                display: false
              },
              scales: {
                yAxes: [{
                  ticks: {
                    display: false,
                    min: 0,
                    stepSize: 10
                  },
                  gridLines: {
                    drawBorder: false,
                    display: false
                  }
                }],
                xAxes: [{
                  gridLines: {
                    display: false,
                    drawBorder: false,
                    color: 'rgba(0,0,0,1)',
                    zeroLineColor: '#eeeeee'
                  },
                  ticks: {
                    padding: 20,
                    fontColor: "#9c9fa6",
                    autoSkip: true,
                  },
                  barPercentage: 0.7
                }]
              }
            },
            elements: {
              point: {
                radius: 0
              }
            }
          })
        }
        if ($("#events-chart").length) {
          var ctx = document.getElementById('events-chart').getContext("2d");

          var gradientStrokeBlue = ctx.createLinearGradient(0, 0, 0, 181);
          gradientStrokeBlue.addColorStop(0, 'rgba(54, 215, 232, 1)');
          gradientStrokeBlue.addColorStop(1, 'rgba(177, 148, 250, 1)');

          var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
              labels: [1, 2, 3, 4, 5, 6, 7, 8],
              datasets: [{
                  label: "Domestic",
                  borderColor: gradientStrokeBlue,
                  backgroundColor: gradientStrokeBlue,
                  hoverBackgroundColor: gradientStrokeBlue,
                  pointRadius: 0,
                  fill: false,
                  borderWidth: 1,
                  fill: 'origin',
                  data: [20, 40, 15, 35, 25, 50, 30, 20]
                },
                {
                  label: "International",
                  borderColor: '#e9eaee',
                  backgroundColor: '#e9eaee',
                  hoverBackgroundColor: '#e9eaee',
                  pointRadius: 0,
                  fill: false,
                  borderWidth: 1,
                  fill: 'origin',
                  data: [40, 30, 20, 10, 50, 15, 35, 20]
                }
              ]
            },
            options: {
              legend: {
                display: false
              },
              scales: {
                yAxes: [{
                  ticks: {
                    display: false,
                    min: 0,
                    stepSize: 10
                  },
                  gridLines: {
                    drawBorder: false,
                    display: false
                  }
                }],
                xAxes: [{
                  gridLines: {
                    display: false,
                    drawBorder: false,
                    color: 'rgba(0,0,0,1)',
                    zeroLineColor: '#eeeeee'
                  },
                  ticks: {
                    padding: 20,
                    fontColor: "#9c9fa6",
                    autoSkip: true,
                  },
                  barPercentage: 0.7
                }]
              }
            },
            elements: {
              point: {
                radius: 0
              }
            }
          })
        }
        if ($("#visit-sale-chart").length) {
          Chart.defaults.global.legend.labels.usePointStyle = true;
          var ctx = document.getElementById('visit-sale-chart').getContext("2d");

          var gradientStrokeViolet = ctx.createLinearGradient(0, 0, 0, 181);
          gradientStrokeViolet.addColorStop(0, 'rgba(218, 140, 255, 1)');
          gradientStrokeViolet.addColorStop(1, 'rgba(154, 85, 255, 1)');
          var gradientLegendViolet = 'linear-gradient(to right, rgba(218, 140, 255, 1), rgba(154, 85, 255, 1))';

          var gradientStrokeBlue = ctx.createLinearGradient(0, 0, 0, 360);
          gradientStrokeBlue.addColorStop(0, 'rgba(54, 215, 232, 1)');
          gradientStrokeBlue.addColorStop(1, 'rgba(177, 148, 250, 1)');
          var gradientLegendBlue = 'linear-gradient(to right, rgba(54, 215, 232, 1), rgba(177, 148, 250, 1))';

          var gradientStrokeRed = ctx.createLinearGradient(0, 0, 0, 300);
          gradientStrokeRed.addColorStop(0, 'rgba(255, 191, 150, 1)');
          gradientStrokeRed.addColorStop(1, 'rgba(254, 112, 150, 1)');
          var gradientLegendRed = 'linear-gradient(to right, rgba(255, 191, 150, 1), rgba(254, 112, 150, 1))';

          var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
              labels: ['JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG'],
              datasets: [{
                  label: "CHN",
                  borderColor: gradientStrokeViolet,
                  backgroundColor: gradientStrokeViolet,
                  hoverBackgroundColor: gradientStrokeViolet,
                  legendColor: gradientLegendViolet,
                  pointRadius: 0,
                  fill: false,
                  borderWidth: 1,
                  fill: 'origin',
                  data: [20, 40, 15, 35, 25, 50, 30, 20]
                },
                {
                  label: "USA",
                  borderColor: gradientStrokeRed,
                  backgroundColor: gradientStrokeRed,
                  hoverBackgroundColor: gradientStrokeRed,
                  legendColor: gradientLegendRed,
                  pointRadius: 0,
                  fill: false,
                  borderWidth: 1,
                  fill: 'origin',
                  data: [40, 30, 20, 10, 50, 15, 35, 40]
                },
                {
                  label: "UK",
                  borderColor: gradientStrokeBlue,
                  backgroundColor: gradientStrokeBlue,
                  hoverBackgroundColor: gradientStrokeBlue,
                  legendColor: gradientLegendBlue,
                  pointRadius: 0,
                  fill: false,
                  borderWidth: 1,
                  fill: 'origin',
                  data: [70, 10, 30, 40, 25, 50, 15, 30]
                }
              ]
            },
            options: {
              responsive: true,
              legend: false,
              legendCallback: function(chart) {
                var text = [];
                text.push('<ul>');
                for (var i = 0; i < chart.data.datasets.length; i++) {
                  text.push('<li><span class="legend-dots" style="background:' +
                    chart.data.datasets[i].legendColor +
                    '"></span>');
                  if (chart.data.datasets[i].label) {
                    text.push(chart.data.datasets[i].label);
                  }
                  text.push('</li>');
                }
                text.push('</ul>');
                return text.join('');
              },
              scales: {
                yAxes: [{
                  ticks: {
                    display: false,
                    min: 0,
                    stepSize: 20,
                    max: 80
                  },
                  gridLines: {
                    drawBorder: false,
                    color: 'rgba(235,237,242,1)',
                    zeroLineColor: 'rgba(235,237,242,1)'
                  }
                }],
                xAxes: [{
                  gridLines: {
                    display: false,
                    drawBorder: false,
                    color: 'rgba(0,0,0,1)',
                    zeroLineColor: 'rgba(235,237,242,1)'
                  },
                  ticks: {
                    padding: 20,
                    fontColor: "#9c9fa6",
                    autoSkip: true,
                  },
                  categoryPercentage: 0.5,
                  barPercentage: 0.5
                }]
              }
            },
            elements: {
              point: {
                radius: 0
              }
            }
          })
          $("#visit-sale-chart-legend").html(myChart.generateLegend());
        }
        if ($("#visit-sale-chart-dark").length) {
          Chart.defaults.global.legend.labels.usePointStyle = true;
          var ctx = document.getElementById('visit-sale-chart-dark').getContext("2d");

          var gradientStrokeViolet = ctx.createLinearGradient(0, 0, 0, 181);
          gradientStrokeViolet.addColorStop(0, 'rgba(218, 140, 255, 1)');
          gradientStrokeViolet.addColorStop(1, 'rgba(154, 85, 255, 1)');
          var gradientLegendViolet = 'linear-gradient(to right, rgba(218, 140, 255, 1), rgba(154, 85, 255, 1))';

          var gradientStrokeBlue = ctx.createLinearGradient(0, 0, 0, 360);
          gradientStrokeBlue.addColorStop(0, 'rgba(54, 215, 232, 1)');
          gradientStrokeBlue.addColorStop(1, 'rgba(177, 148, 250, 1)');
          var gradientLegendBlue = 'linear-gradient(to right, rgba(54, 215, 232, 1), rgba(177, 148, 250, 1))';

          var gradientStrokeRed = ctx.createLinearGradient(0, 0, 0, 300);
          gradientStrokeRed.addColorStop(0, 'rgba(255, 191, 150, 1)');
          gradientStrokeRed.addColorStop(1, 'rgba(254, 112, 150, 1)');
          var gradientLegendRed = 'linear-gradient(to right, rgba(255, 191, 150, 1), rgba(254, 112, 150, 1))';

          var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
              labels: ['JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG'],
              datasets: [{
                  label: "CHN",
                  borderColor: gradientStrokeViolet,
                  backgroundColor: gradientStrokeViolet,
                  hoverBackgroundColor: gradientStrokeViolet,
                  legendColor: gradientLegendViolet,
                  pointRadius: 0,
                  fill: false,
                  borderWidth: 1,
                  fill: 'origin',
                  data: [20, 40, 15, 35, 25, 50, 30, 20]
                },
                {
                  label: "USA",
                  borderColor: gradientStrokeRed,
                  backgroundColor: gradientStrokeRed,
                  hoverBackgroundColor: gradientStrokeRed,
                  legendColor: gradientLegendRed,
                  pointRadius: 0,
                  fill: false,
                  borderWidth: 1,
                  fill: 'origin',
                  data: [40, 30, 20, 10, 50, 15, 35, 40]
                },
                {
                  label: "UK",
                  borderColor: gradientStrokeBlue,
                  backgroundColor: gradientStrokeBlue,
                  hoverBackgroundColor: gradientStrokeBlue,
                  legendColor: gradientLegendBlue,
                  pointRadius: 0,
                  fill: false,
                  borderWidth: 1,
                  fill: 'origin',
                  data: [70, 10, 30, 40, 25, 50, 15, 30]
                }
              ]
            },
            options: {
              responsive: true,
              legend: false,
              legendCallback: function(chart) {
                var text = [];
                text.push('<ul>');
                for (var i = 0; i < chart.data.datasets.length; i++) {
                  text.push('<li><span class="legend-dots" style="background:' +
                    chart.data.datasets[i].legendColor +
                    '"></span>');
                  if (chart.data.datasets[i].label) {
                    text.push(chart.data.datasets[i].label);
                  }
                  text.push('</li>');
                }
                text.push('</ul>');
                return text.join('');
              },
              scales: {
                yAxes: [{
                  ticks: {
                    display: false,
                    min: 0,
                    stepSize: 20,
                    max: 80
                  },
                  gridLines: {
                    drawBorder: false,
                    color: '#322f2f',
                    zeroLineColor: '#322f2f'
                  }
                }],
                xAxes: [{
                  gridLines: {
                    display: false,
                    drawBorder: false,
                    color: 'rgba(0,0,0,1)',
                    zeroLineColor: 'rgba(235,237,242,1)'
                  },
                  ticks: {
                    padding: 20,
                    fontColor: "#9c9fa6",
                    autoSkip: true,
                  },
                  categoryPercentage: 0.5,
                  barPercentage: 0.5
                }]
              }
            },
            elements: {
              point: {
                radius: 0
              }
            }
          })
          $("#visit-sale-chart-legend-dark").html(myChart.generateLegend());
        }
        if ($("#traffic-chart").length) {
          var gradientStrokeBlue = ctx.createLinearGradient(0, 0, 0, 181);
          gradientStrokeBlue.addColorStop(0, 'rgba(54, 215, 232, 1)');
          gradientStrokeBlue.addColorStop(1, 'rgba(177, 148, 250, 1)');
          var gradientLegendBlue = 'linear-gradient(to right, rgba(54, 215, 232, 1), rgba(177, 148, 250, 1))';

          var gradientStrokeRed = ctx.createLinearGradient(0, 0, 0, 50);
          gradientStrokeRed.addColorStop(0, 'rgba(255, 191, 150, 1)');
          gradientStrokeRed.addColorStop(1, 'rgba(254, 112, 150, 1)');
          var gradientLegendRed = 'linear-gradient(to right, rgba(255, 191, 150, 1), rgba(254, 112, 150, 1))';

          var gradientStrokeGreen = ctx.createLinearGradient(0, 0, 0, 300);
          gradientStrokeGreen.addColorStop(0, 'rgba(6, 185, 157, 1)');
          gradientStrokeGreen.addColorStop(1, 'rgba(132, 217, 210, 1)');
          var gradientLegendGreen = 'linear-gradient(to right, rgba(6, 185, 157, 1), rgba(132, 217, 210, 1))';

          var trafficChartData = {
            datasets: [{
              data: [withdrawalTotal, $DepositTotal, $NotificationTotal],
              backgroundColor: [
                gradientStrokeBlue,
                gradientStrokeGreen,
                gradientStrokeRed
              ],
              hoverBackgroundColor: [
                gradientStrokeBlue,
                gradientStrokeGreen,
                gradientStrokeRed
              ],
              borderColor: [
                gradientStrokeBlue,
                gradientStrokeGreen,
                gradientStrokeRed
              ],
              legendColor: [
                gradientLegendBlue,
                gradientLegendGreen,
                gradientLegendRed
              ]
            }],

            // These labels appear in the legend and in the tooltips when hovering different arcs
            labels: [
              'Withdrawal',
              'Deposit',
              'Activity Log',
            ]
          };
          var trafficChartOptions = {
            responsive: true,
            animation: {
              animateScale: true,
              animateRotate: true
            },
            legend: false,
            legendCallback: function(chart) {
              var text = [];
              text.push('<ul>');
              for (var i = 0; i < trafficChartData.datasets[0].data.length; i++) {
                text.push('<li><span class="legend-dots" style="background:' +
                  trafficChartData.datasets[0].legendColor[i] +
                  '"></span>');
                if (trafficChartData.labels[i]) {
                  text.push(trafficChartData.labels[i]);
                }
                text.push('<span class="float-right">' + trafficChartData.datasets[0].data[i] + "%" + '</span>')
                text.push('</li>');
              }
              text.push('</ul>');
              return text.join('');
            }
          };
          var trafficChartCanvas = $("#traffic-chart").get(0).getContext("2d");
          var trafficChart = new Chart(trafficChartCanvas, {
            type: 'doughnut',
            data: trafficChartData,
            options: trafficChartOptions
          });
          $("#traffic-chart-legend").html(trafficChart.generateLegend());
        }
        if ($("#inline-datepicker").length) {
          $('#inline-datepicker').datepicker({
            enableOnReadonly: true,
            todayHighlight: true,
          });
        }
      });
    })(jQuery);
  </script>
</body>

</html>