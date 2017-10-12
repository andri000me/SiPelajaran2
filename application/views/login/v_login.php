<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <!-- Bootstrap core CSS -->

    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo base_url();?>assets/fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/icheck/flat/green.css" rel="stylesheet">


    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>

    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body style="background:#F7F7F7;">

    <div class="">
        <a class="hiddenanchor" id="toregister"></a>
        <a class="hiddenanchor" id="tologin"></a>

        <div id="wrapper">
            <div id="login" class="animate form">
                <section class="login_content">
                    <form action="<?php echo base_url();?>login/check_login" method="post">
                        <br><img width="150px" src="<?php echo base_url(); ?>assets/images/uploads/ilkom.png"></i>

                        <div> </br>
                       <table class="table table-bordered">
              <tr><td>Username</td><td>  
                      <div>
                          <input type="text" name="username" required="" placeholder="Username" required=""class="form-control">
                   
                  </div></td></tr>
              <tr><td>Password</td><td> <div>
                          <input type="password" name="password" placeholder="Password" required="" class="form-control"></div></td></tr>
                       
                             </table>   
                        <div>
                            <button type="submit" class="btn btn-default">Login</button>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">


                            <div>
                                <p>Fakultas Ilmu Komputer </p>
                            </div>
                        </div>

                    </form>
                    <!-- form -->
                </section>
                <!-- content -->
            </div>
        </div>
    </div>
<?php echo $this->session->flashdata("alert");?>
</body>

</html>
