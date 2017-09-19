<head>
<!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>css/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="<?php echo base_url();?>css/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="<?php echo base_url();?>css/css/creativee.min.css" rel="stylesheet"></head>
<body>
<nav  id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
				   <li>
						<?php echo anchor('admin/ml','Mountain List',['class'=>'page-scroll']);?>
                    </li>
                   <li>
						<?php echo anchor('admin/eq','Equipment',['class'=>'page-scroll']);?>
                    </li>
					<li>
						<?php echo anchor('admin/tutor','Tutorial',['class'=>'page-scroll']);?>
                    </li>
					<li>
						<?php echo anchor('admin/tnt','Tips & Trick',['class'=>'page-scroll']);?>
                    </li>
					<?php if($this->session->userdata('username')) : ?>
					<li>
						<span style="line-height:50px;">
							<?php echo 'Welcome '.$this->session->userdata('username');?>
						</span>
					</li>
					<li>
						<?php echo anchor('login/logout','Logout');?>
					</li>
				  <?php endif; ?>
					
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
           
	    	 <!-- jQuery -->
	 <!-- jQuery -->
    <script src="<?php echo base_url();?>css/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>css/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="<?php echo base_url();?>css/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="<?php echo base_url();?>css/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="<?php echo base_url();?>css/js/creative.min.js"></script>

	</body>