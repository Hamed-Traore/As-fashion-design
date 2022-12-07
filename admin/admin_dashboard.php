<?php
include('../settings/core.php');
include ('../controllers/product_controller.php');

  

?>
<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="/assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Dashboard - Analytics | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon/logo.ico">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item active">
              <a href="admin_dashboard.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="product_list.php" class="menu-link ">
                <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                <div data-i18n="Analytics">Products</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="customers_list.php" class="menu-link ">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Analytics">Customers</div>
              </a>
            </li>
            <!-- <li class="menu-item">
              <a
                href="../actions/Logout.php"
                target="_blank"
                class="menu-link"
              >
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div data-i18n="Documentation">Logout</div>
              </a>
            </li> -->
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder=""
                    aria-label="Search..."
                  />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <!-- <li class="nav-item lh-1 me-3">
                  <a
                    class="github-button"
                    href="https://github.com/themeselection/sneat-html-admin-template-free"
                    data-icon="octicon-star"
                    data-size="large"
                    data-show-count="true"
                    aria-label="Star themeselection/sneat-html-admin-template-free on GitHub"
                    >Star</a
                  >
                </li> -->

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="assets/img/users.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <!-- <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div> -->
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block"><?php echo $_SESSION['last_name'] ?></span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <!-- <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li> -->
                    <li>
                      <a class="dropdown-item" href="settings.php">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">Profie settings</span>
                      </a>
                    </li>
                    <!-- <li>
                      <a class="dropdown-item" href="#">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                          <span class="flex-grow-1 align-middle">Billing</span>
                          <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                        </span>
                      </a>
                    </li> -->
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="../actions/Logout.php">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <!-- Summary -->
              <div class="row">
                <!-- <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                          <img
                            src="assets/img/icons/unicons/chart-success.png"
                            alt="chart success"
                            class="rounded"
                          />
                        </div>
                        <div class="dropdown">
                          <button
                            class="btn p-0"
                            type="button"
                            id="cardOpt3"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                            <a class="dropdown-item" href="javascript:void(0);">View More</a>
                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                          </div>
                        </div>
                      </div>
                      <span class="fw-semibold d-block mb-1">Profit</span>
                      <h3 class="card-title mb-2">$12,628</h3>
                      <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                    </div>
                  </div>
                </div> -->
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                          <img
                            src="assets/img/icons/unicons/wallet-info.png"
                            alt="Credit Card"
                            class="rounded"
                          />
                        </div>
                        <div class="dropdown">
                          <button
                            class="btn p-0"
                            type="button"
                            id="cardOpt6"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                            <a class="dropdown-item" href="javascript:void(0);">View More</a>
                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                          </div>
                        </div>
                      </div>
                      <span>Sales</span>
                      <h3 class="card-title text-nowrap mb-1">Ghc 
                        <?php
                          $sales=array();
                          $payments= get_all_payments_controller();
                          foreach ($payments as $payment) {
                            $sales[]=$payment['amt'];
                        }
                        echo array_sum($sales);
                          ?>
                      </h3>
                      <!-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> -->
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                          <img
                            src="assets/img/dress.png"
                            alt="chart success"
                            class="rounded"
                          />
                        </div>
                        <div class="dropdown">
                          <button
                            class="btn p-0"
                            type="button"
                            id="cardOpt3"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                            <a class="dropdown-item" href="Product_list.html">View More</a>
                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                          </div>
                        </div>
                      </div>
                      <span class="fw-semibold d-block mb-1">Quantity of products</span>
                      <h3 class="card-title mb-2">
                      <?php
                          $product_num='';
                          $products= select_all_product();
                          foreach ($products as $product) {
                            $product_num++;
                        }
                        echo $product_num;
                          ?>
                      </h3>
                      <!-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small> -->
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                          <img
                            src="assets/img/users.png"
                            alt="chart success"
                            class="rounded"
                          />
                        </div>
                        <div class="dropdown">
                          <button
                            class="btn p-0"
                            type="button"
                            id="cardOpt3"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                            <a class="dropdown-item" href="customers_list.html">View More</a>
                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                          </div>
                        </div>
                      </div>
                      <span class="fw-semibold d-block mb-1">Number of users</span>
                      <h3 class="card-title mb-2">
                      <?php
                        
                        $users=select_all_users_ctr();
                          $user_num='';
                          foreach ($users as $user) {
                            $user_num++;
                        }
                        echo $user_num;
                          ?>
                      </h3>
                      <!-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small> -->
                    </div>
                  </div>
                </div>
              </div>
              <hr class="my-3">
              <!-- Tables -->
                <!-- Products -->
                <div class="row">
                  <div class="card">
                    <div class="row">
                      <div class="col-9"><h5 class="card-header">Recently added products</h5></div>
                      <div class=" card-header col">
                      
                        <div class="btn-group">
                          <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            New Product
                          </button>
                          <div class="dropdown-menu dropdown-menu-end w-px-300">
                            <form class="p-4" action="../actions/product_process.php" method="post" enctype="multipart/form-data">
                              <div class="mb-3">
                                <label for="product_name" class="form-label">Product name</label>
                                <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Name" required>
                              </div>
                              <div class="mb-3">
                                <label for="price">Selling price</label>
                                <input type="number" min="0.00" class="form-control" id="price" name="price" placeholder="price" value="" required>
                              </div>
                              <div class="mb-3">
                                <label for="exampleDropdownFormEmail1" class="form-label">Category</label>
                                <select id="product_cat" name="product_cat" class="form-control" required>
                                  <option selected value="">select a category</option>
                                  <option value="1">Male</option>
                                  <option value="2">Female</option>
                                </select>
                              </div>
                              <div class="mb-3">
                                <label for="product_keyword" class="form-label">Product keyword</label>
                                <input type="text" class="form-control" id="product_keyword" name="product_keyword" placeholder="Ex: kente, dress..." required>
                              </div>
                              <div class="mb-3">
                                <label for="product_desc" class="form-label">Description</label>
                                <textarea class="form-control" name="product_desc" id="product_desc" cols="30" rows="5"placeholder="Enter new description" required></textarea>
                              </div>
                              <div class="mb-3">
                                <label for="product_img">Product Image</label>
                                <input type="file" class="form-control" id="product_img" name="product_img" accept="image/*" title="Upload image">
                              </div>
                              <input type="hidden" name="adding_date" value="<?php echo date('Y-m-d'); ?>">
                              <button type="submit" name="add_product" class="btn btn-danger">Add</button>
                            </form>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="table-responsive text-nowrap">
                      <table class="table table-sm">
                        <thead>
                          <tr>
                            <th>Product name</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Sales</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                        <?php 
                        foreach ($products as $product) {
                          echo'
                          <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>'.$product['product_name'].'</strong></td>
                            <td>'.$product['price'].' ghc</td>
                            <td>
                              <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="" data-bs-original-title="Lilian Fuller">
                                  <img src="'.$product['product_img'].'" alt="Avatar" class="rounded-circle">
                                </li>
                              </ul>
                            </td>
                            <td><span class="badge bg-label-primary me-1">Active</span></td>
                            <td>
                              <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                  <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu" style="">
                                
                                  <a class="dropdown-item" href="?'.$product['product_id'].'"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                  <a class="dropdown-item" href="?'.$product['product_id'].'"><i class="bx bx-trash me-1"></i> Delete</a>
                                </div>
                              </div>
                            </td>
                          </tr>';
                        } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <hr class="my-3">
                <!-- Orders -->
                <div class="row">
                  <div class="card">
                    <h5 class="card-header">Pending orders</h5>
                    <div class="table-responsive text-nowrap">
                      <table class="table table-sm">
                        <thead>
                          <tr>
                            <th>Client Name</th>
                            <th>Product name</th>
                            <th>Price</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                          </tr>
                        </thead><input type="hidden" name="id" value="">
                        <tbody class="table-border-bottom-0">
                          <?php
                          $orders=select_all_orders_ctr();
                          foreach ($orders as $order) {
                            echo'
                            <tr>
                              <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>'.$order['first_name'].' '.$order['last_name'].'</strong></td>
                              <td>'.$order['product_name'].'</td>
                              <td>'.$order['price'].'</td>
                              <td><span class="badge bg-label-primary me-1">'.$order['payment_date'].'</span></td>
                              <td><span class="badge bg-label-primary me-1">'.$order['order_status'].'</span></td>
                              <td>
                              <div class="btn-group">
                                  <a type="button" class="" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="bx bx-edit-alt me-1"></i>status
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-end w-px-300">
                                    <form class="p-4" action="../actions/product_process.php" method="post" enctype="multipart/form-data">
                                      <div class="mb-3">
                                        <input type="hidden" name="order_id" value="'.$order['order_id'].'">
                                        <label for="exampleDropdownFormEmail1" class="form-label">Category</label>
                                        <select id="product_cat" name="order_status" class="form-control" required>
                                          <option selected value="">Select new status</option>
                                          <option value="in progress">in progress</option>
                                          <option value="completed">completed</option>
                                          <option value="canceld">canceld</option>
                                          <option value="on hold">on hold</option>
                                        </select>
                                        <button type="submit" name="update_status" class="btn btn-danger">update</button>
                                      </div>
                                    </form>
                                  </div>
                              </div>
                                <a  href="../functions/delete.php?action=delete_order&order_id='.$order['order_id'].'"><i class="bx bx-trash me-1"></i> Delete</a>
                              </td>
                            </tr>';
                          }
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <hr class="my-3">

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with ❤️ by
                  <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
                </div>
                <div>
                  <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                  <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                  <a
                    href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                    target="_blank"
                    class="footer-link me-4"
                    >Documentation</a
                  >

                  <a
                    href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                    target="_blank"
                    class="footer-link me-4"
                    >Support</a
                  >
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <div class="buy-now">
      <a
        href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/"
        target="_blank"
        class="btn btn-danger btn-buy-now"
        >Upgrade to Pro</a
      >
    </div>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>
    <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>

