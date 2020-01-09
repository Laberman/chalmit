<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CHALMIT INDONESIA :: LABERMAN</title>
    <link href="Styles/min-css/bootstrap.css" rel="stylesheet">
    <link href="Styles/min-css/main.css" rel="stylesheet">
    <script src="Scripts/libs/angular.min.js"></script>
</head>
<body>

    <div class="container">
        <div class="header clearfix">
            <nav class="subheader">
                <img style="float: left; margin: 0 10px 3px 0;" src="Images/logo.png" />
                <div style="display: inline-block; ">
                    <div><h3>LABERMAN</h3></div> 
                    <div>Oil, Gas and Industrial Equipment</div>
                </div>
            </nav>
        </div>
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="/">Home</a></li>
                        <li><a href="aboutus.htm">About Us</a></li>
                        <li><a href="product.htm">Products</a></li>
                        <li><a href="services.htm">Services</a></li>
                        <li class="active"><a href="#">Contact Us</a></li>
                    </ul>
                </div><!-- /.nav-collapse -->
            </div><!-- /.container -->
        </nav><!-- /.navbar -->
        <div class="row contactUsRow">

            <div class="col-sm-9 contactus">
                <div class="blog-post">
                    <div class="jumbotron contact">
                        <h3>Contact Us</h3>
                    </div>

                    <form name="frmContactUs" class="form-horizontal" ng-submit="submit()">
                        <div class="form-group">
                            <label for="txtName" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="txtName" ng-model="formData.txtName" placeholder="Type your name here.">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="txtEmail" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="txtEmail" ng-model="formData.txtEmail" placeholder="Type your email." required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="txtSubject" class="col-sm-2 control-label">Subject</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="txtSubject" ng-model="formData.txtSubject" placeholder="Type the subject">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="txtMessage" class="col-sm-2 control-label">Message</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="txtMessage" ng-model="formData.txtMessage" placeholder="Your message or other information" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10 buttonSection">
                                <button type="submit" class="btn btn-info">Send Message</button>
                                <button type="reset" class="btn btn-info">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-sm-3 contact-sidebar">
                <div class="sidebar-module sidebar-module-inset">
                    <h4>Contact Info</h4>

                    <span>PHONE</span>
                    <p>+(62-21) 586 3633 (Hunting)</p>

                    <span>FAX</span>
                    <p>+(62-21) 584 4911</p>

                    <span>EMAIL</span>
                    <p>info@biz-softwares.com</p>

                    <span>ADDRESS</span>
                    <p>info@biz-softwares.com</p>

                    <span>EMAIL</span>
                    <p>Perkantoran Taman Meruya Blok M No. 80 <br/>Jl. Batu Mulia, Meruya Ilir, Jakarta 11620</p>

                    <span>HOURS</span>
                    <p>9am-6pm : Monday-Friday</p>
                </div>
            </div><!-- /.contact-sidebar -->

        </div><!-- /.row -->

        <hr>

        <footer>
            <p>&copy; Laberman 2015</p>
            <div class="address">
                <p>Perkantoran Taman Meruya Blok M No. 80</p>
                <p>Jl. Batu Mulia, Meruya Ilir, Jakarta 11620</p>
                <p>Phone: +(62-21) 586 3633 (Hunting)</p>
                <p>Fax: +(62-21) 584 4911</p>
                <p>Email: <a href="mailto:laberman@cbn.net.id" title="Email us">laberman@cbn.net.id</a></p>
                <p>Website: <a href="http://www.chalmitindonesia.com" title="Our website">www.chalmitindonesia.com</a></p>
            </div>
        </footer>

    </div><!--/.container-->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="Scripts/libs/js/bootstrap.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
