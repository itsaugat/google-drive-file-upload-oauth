<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>OAuth 2.0 | Google Drive API</title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/my-login.css">
</head>
<body class="my-login-page">
  <section class="h-100">
    <div class="container h-100">
      <div class="row">
        <div class="col-md-6">
          <div class="row justify-content-md-center h-100">
            <div class="card-wrapper">
              <div class="card fat" style="margin-top:200px">
                <div class="card-body">
                  <h3 style="text-align: center;"> Welcome !! </h3>
                  <p style="margin-top:20px;font-size: 15px;"> This web application demonstrates the use of Google API Client Library for PHP to implement OAuth 2.0 authorization to access Google Drive API. OAuth 2.0 allows users to share specific data with an application while keeping their usernames, passwords, and other information private. This application uses OAuth 2.0 to obtain permission from users to select a file and store it directly in their Google Drives. This application uses <span style="font-weight: 700;"> Authorization Code </span> grant type. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row justify-content-md-center h-100">
            <div class="card-wrapper" style="margin:auto">
              <div class="brand">
                <img src="img/logo.png">
              </div>
              <div class="card fat">
                <div class="card-body">
                  <h4 class="card-title">Upload File To Google Drive</h4>
                  <form method="post" action="callback.php">
                    <div class="form-group no-margin">
                      <button type="submit" class="btn btn-primary btn-block">
                        Upload
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer">
        Copyright &copy; Google Drive File Upload Using OAuth 2.0
      </div>
    </div>
  </section>

  <script src="js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>