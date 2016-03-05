<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
        <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
        <title>Material Me | Administrator</title>

        <?php echo $_style;?>

    </head>

    <body>
        <!-- Start Page Loading -->
        <!-- <div id="loader-wrapper">
            <div id="loader"></div>        
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div> -->
        <!-- End Page Loading -->

        <?php echo $_header;?>

        <!-- START MAIN -->
        <div id="main">
            <!-- START WRAPPER -->
            <div class="wrapper">

                <?php echo $_left;?>

                <!-- //////////////////////////////////////////////////////////////////////////// -->

                <!-- START CONTENT -->
                <section id="content">

                    <!--start container-->
                    <div class="container">

                        <?php echo $_content;?>

                    </div>
                    <!--end container-->
                </section>
                <!-- END CONTENT -->

                <!-- //////////////////////////////////////////////////////////////////////////// -->
                
                <?php echo $_right;?>

            </div>
            <!-- END WRAPPER -->

        </div>
        <!-- END MAIN -->

        <?php echo $_footer;?>
        
        <?php echo $_script;?>
    </body>
</html>