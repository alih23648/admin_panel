<?php include 'header.php'; ?>
<?php include 'siderbar.php'; ?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="mail-w3agile">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-3 com-w3ls">
                    <section class="panel">
                        <div class="panel-body">
                            <a href="mail_compose.html" class="btn btn-compose">
                                Compose Mail
                            </a>
                            <ul class="nav nav-pills nav-stacked mail-nav">
                                <li class="active"><a href="mail.html"> <i class="fa fa-inbox"></i> Inbox <span class="label label-danger pull-right inbox-notification">4</span></a></li>
                                <li><a href="#"> <i class="fa fa-envelope-o"></i> Send Mail</a></li>
                                <li><a href="#"> <i class="fa fa-certificate"></i> Important</a></li>
                                <li><a href="#"> <i class="fa fa-file-text-o"></i> Drafts <span class="label label-info pull-right inbox-notification">1</span></a></a></li>
                                <li><a href="#"> <i class="fa fa-trash-o"></i> Trash</a></li>
                            </ul>
                        </div>
                    </section>


                </div>
                <div class="col-sm-9 mail-w3agile">
                    <section class="panel">
                        <header class="panel-heading wht-bg">
                            <h4 class="gen-case">Inbox
                                <form action="#" class="pull-right mail-src-position">
                                    <div class="input-append">
                                        <input type="text" class="form-control " placeholder="Search Mail">
                                    </div>
                                </form>
                            </h4>
                        </header>
                        <div class="panel-body minimal">
                            <div class="mail-option">
                                <div class="chk-all">
                                    <div class="pull-left mail-checkbox ">
                                        <input type="checkbox" class="">
                                    </div>

                                    <div class="btn-group">
                                        <a data-toggle="dropdown" href="#" class="btn mini all">
                                            All
                                            <i class="fa fa-angle-down "></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <!-- <li><a href="#"> None</a></li> -->
                                            <li><a href="#"> Read</a></li>
                                            <li><a href="#"> Unread</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="btn-group">
                                    <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
                                        <i class=" fa fa-refresh"></i>
                                    </a>
                                </div>
                                <div class="btn-group hidden-phone">
                                    <a data-toggle="dropdown" href="#" class="btn mini blue">
                                        More
                                        <i class="fa fa-angle-down "></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                                        <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                                    </ul>
                                </div>
                                <!-- <div class="btn-group">
                                <a data-toggle="dropdown" href="#" class="btn mini blue">
                                    Move to
                                    <i class="fa fa-angle-down "></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                                    <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                                </ul>
                            </div> -->

                                <ul class="unstyled inbox-pagination">
                                    <li><span>1-10 of 50</span></li>
                                    <li>
                                        <a class="np-btn" href="#"><i class="fa fa-angle-left  pagination-left"></i></a>
                                    </li>
                                    <li>
                                        <a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="table-inbox-wrap ">
                                <table class="table table-inbox table-hover">
                                    <tbody>
                                        <tr class="unread">
                                            <td class="inbox-small-cells">
                                                <input type="checkbox" class="mail-checkbox">
                                            </td>
                                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                            <td class="view-message  dont-show"><a href="#">ABC Company</a></td>
                                            <td class="view-message "><a href="#">Lorem ipsum dolor imit set.</a></td>
                                            <td class="view-message  inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                            <td class="view-message  text-right">12.10 AM</td>
                                        </tr>
                                        <tr class="unread">
                                            <td class="inbox-small-cells">
                                                <input type="checkbox" class="mail-checkbox">
                                            </td>
                                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                            <td class="view-message dont-show"><a href="#">Mr Bean</a></td>
                                            <td class="view-message"><a href="#">Hi Bro, Lorem ipsum dolor imit</a></td>
                                            <td class="view-message inbox-small-cells"></td>
                                            <td class="view-message text-right">Jan 11</td>
                                        </tr>
                                        <tr class="unread">
                                            <td class="inbox-small-cells">
                                                <input type="checkbox" class="mail-checkbox">
                                            </td>
                                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                            <td class="view-message dont-show"><a href="#">Jonathan Smith</a></td>
                                            <td class="view-message"><a href="#">Lorem ipsum dolor sit amet</a></td>
                                            <td class="view-message inbox-small-cells"></td>
                                            <td class="view-message text-right">March 15</td>
                                        </tr>
                                        <tr class="">
                                            <td class="inbox-small-cells">
                                                <input type="checkbox" class="mail-checkbox">
                                            </td>
                                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                            <td class="view-message dont-show"><a href="#">File 4</a></td>
                                            <td class="view-message"><a href="#">Dolor sit amet, consectetuer adipiscing</a></td>
                                            <td class="view-message inbox-small-cells"></td>
                                            <td class="view-message text-right">June 01</td>
                                        </tr>
                                        <tr class="">
                                            <td class="inbox-small-cells">
                                                <input type="checkbox" class="mail-checkbox">
                                            </td>
                                            <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                            <td class="view-message dont-show"><a href="#">Tasi man <span class="label label-danger pull-right">urgent</span></a></td>
                                            <td class="view-message"><a href="#">Lorem ipsum dolor sit amet</a></td>
                                            <td class="view-message inbox-small-cells"></td>
                                            <td class="view-message text-right">May 2</td>
                                        </tr>

                                    </tbody>
                                </table>

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