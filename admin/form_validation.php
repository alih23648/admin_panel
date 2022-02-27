<?php include 'header.php'; ?>
<?php include 'siderbar.php'; ?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="form-w3layouts">
            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <div class="row">
                            <div class="col-lg-12">
                                <section class="panel">
                                    <header class="panel-heading">
                                    Please Fill This Form Validation
                                        <span class="tools pull-right">
                                            <a class="fa fa-chevron-down" href="javascript:;"></a>
                                            <a class="fa fa-cog" href="javascript:;"></a>
                                            <a class="fa fa-times" href="javascript:;"></a>
                                        </span>
                                    </header>
                                    <div class="panel-body">
                                        <div class="form">
                                            <form class="cmxform form-horizontal " id="signupForm" method="get" action="" novalidate="novalidate">
                                                <div class="form-group ">
                                                    <label for="firstname" class="control-label col-lg-3">Firstname</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class=" form-control" id="firstname" name="firstname" placeholder="Enter First Name">
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="lastname" class="control-label col-lg-3">Lastname</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class=" form-control" id="lastname" name="lastname">
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="username" class="control-label col-lg-3">Email</label>
                                                    <div class="col-lg-6">
                                                        <input type="mail" class="form-control " id="email" name="name">
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="username" class="control-label col-lg-3">Address</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control " id="Address" name="name">
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="username" class="control-label col-lg-3">CNIC</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control " id="CNIC" name="name">
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="password" class="control-label col-lg-3">Password</label>
                                                    <div class="col-lg-6">
                                                        <input type="password" class="form-control " id="password" name="password">
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="confirm_password" class="control-label col-lg-3">Confirm Password</label>
                                                    <div class="col-lg-6">
                                                        <input type="password" class="form-control " id="confirm_password" name="confirm_password">
                                                    </div>
                                                </div>

                                                <div class="form-group ">
                                                    <label for="agree" class="control-label col-lg-3 col-sm-3">Agree to Our Policy</label>
                                                    <div class="col-lg-6 col-sm-9">
                                                        <input type="checkbox" style="width: 20px" class="checkbox form-control" id="agree" name="agree">
                                                    </div>
                                                </div>
        
                                                <div class="form-group">
                                                    <div class="col-lg-offset-3 col-lg-6">
                                                        <button class="btn btn-primary" type="submit">Save</button>
                                                        <button class="btn btn-default" type="button">Cancel</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <!-- page end-->
                </div>
    </section>
    <!-- footer -->
    <?php include 'footer.php';  ?>
    <!-- / footer -->
</section>

<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>

</html>