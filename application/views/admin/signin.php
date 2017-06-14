
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin - Falcon Admin</title>

    <link rel="stylesheet" type="text/css" href="<?php echo $base?>bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $base?>font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $base?>css/local.css" />

    <script type="text/javascript" src="<?php echo  $base; ?>js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="<?php echo  $base; ?>bootstrap/js/bootstrap.min.js"></script>   

</head>
<body>

    <div id="wrapper" style="padding: 0px 200px;" >
       

        <div id="page-wrapper">

            <div class="row">

                <div class="col-lg-12 text-center v-center">

                    <h1>Sign In</h1>
                    <p class="lead">Enter your admin name and password to sign-in</p>

                    <br>
                    <br>
                    <br>

                    <form class="col-lg-12" id="ad_sign_in" action="/Auth/login" method="post">
                        <input class="form-control input-lg minput" title="Confidential signup."
                                placeholder="Enter your admin name" type="text" 
                                style="width: 340px; text-align: center; margin: 20px auto;" name="ad_name">
                        <input class="form-control input-lg minput" title="Confidential signup."
                                placeholder="Enter your admin password" type="password" 
                                style="width: 340px; text-align: center; margin: 20px auto;" name="ad_pwd">

                        <!--<div class="input-group" style="width: 340px; text-align: center; margin: 0 auto;">
                            <input class="form-control input-lg" title="Confidential signup."
                                placeholder="Enter your email address" type="text">
                        </div>-->
                         <span class="btn">
                                <input type="submit"  class="btn btn-lg btn-primary" value='Login'>
                    </form>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="text-center">
                <h1>Follow us</h1>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center v-center" style="font-size: 39pt;">
                    <a href="<?php echo $base?>#"><span class="avatar"><i class="fa fa-google-plus"></i></span></a>
                    <a href="<?php echo $base?>#"><span class="avatar"><i class="fa fa-linkedin"></i></span></a>
                    <a href="<?php echo $base?>#"><span class="avatar"><i class="fa fa-facebook"></i></span></a>
                    <a href="<?php echo $base?>#"><span class="avatar"><i class="fa fa-github"></i></span></a>
                </div>

            </div>
            <!-- /.row -->

        </div>
        <!-- /#page-wrapper -->
    </div>    
</body>
</html>
