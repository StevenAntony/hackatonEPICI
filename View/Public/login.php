<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login EPICI</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="http://localhost:2000/EPICI2019/hackatonEPICI/View/Assets/Lib/Star/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="http://localhost:2000/EPICI2019/hackatonEPICI/View/Assets/Lib/Star/vendors/iconfonts/ionicons/css/ionicons.css">
    <link rel="stylesheet" href="http://localhost:2000/EPICI2019/hackatonEPICI/View/Assets/Lib/Star/vendors/iconfonts/typicons/src/font/typicons.css">
    <link rel="stylesheet" href="http://localhost:2000/EPICI2019/hackatonEPICI/View/Assets/Lib/Star/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="http://localhost:2000/EPICI2019/hackatonEPICI/View/Assets/Lib/Star/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="http://localhost:2000/EPICI2019/hackatonEPICI/View/Assets/Lib/Star/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="http://localhost:2000/EPICI2019/hackatonEPICI/View/Assets/Lib/Star/vendors/css/shared/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="http://localhost:2000/EPICI2019/hackatonEPICI/View/Assets/Lib/Star/vendors/images/auth/epici.jpg" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
          <div class="row w-100">
            <div style="width: 100%;">
              <div class="col-lg-3 mx-auto">
                  <img style="height: 100%;width: 100%;" src="http://localhost:2000/EPICI2019/hackatonEPICI/View/Assets/Img/LOGO.png">
              </div>
            </div>
            
            <div class="col-lg-4 mx-auto">
              <div id="error">
              </div>
              <div class="auto-form-wrapper">
                <form action="#">
                  <div class="form-group">
                    <label class="label">Usuario</label>
                    <div class="input-group">
                      <input id="usuario" type="text" class="form-control" placeholder="Usuario">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="label">Contraseña</label>
                    <div class="input-group">
                      <input id="clave" type="password" class="form-control" placeholder="*********">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="button" class="btn btn-primary submit-btn btn-block" id="ingresar">Login</button>
                  </div>
                </form>
              </div>
              <p class="footer-text text-center">copyright © 2019 EPICI. All rights reserved.</p>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="http://localhost:2000/EPICI2019/hackatonEPICI/View/Assets/Lib/Star/vendors/js/vendor.bundle.base.js"></script>
    <script src="http://localhost:2000/EPICI2019/hackatonEPICI/View/Assets/Lib/Star/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="http://localhost:2000/EPICI2019/hackatonEPICI/View/Assets/Lib/Star/vendors/js/shared/off-canvas.js"></script>
    <script src="http://localhost:2000/EPICI2019/hackatonEPICI/View/Assets/Lib/Star/vendors/js/shared/misc.js"></script>
    <!-- endinject -->
    <script src="http://localhost:2000/EPICI2019/hackatonEPICI/View/Assets/Lib/jquery/jquery-3.4.1.min.js"></script>
    <script src="http://localhost:2000/EPICI2019/hackatonEPICI/View/Assets/js/ajaxLogin.js"></script>
  </body>
</html>