<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BOOM  - Mountain Guide</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>css/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="<?php echo base_url();?>css/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="<?php echo base_url();?>css/css/creativee.min.css" rel="stylesheet">
	

</head>

<body>

   <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">MG</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="<?php echo base_url();?>">Home</a>
                    </li>
                   <li>
						<?php echo anchor('welcome/monutlist','Mountain List',['class'=>'page-scroll']);?>
                    </li>
                   <li>
						<?php echo anchor('welcome/eq','Equipment',['class'=>'page-scroll']);?>
                    </li>
					<li>
						<?php echo anchor('welcome/tutorial','Tutorial',['class'=>'page-scroll']);?>
                    </li>
					<li>
						<?php echo anchor('welcome/tnt','Tips & Trick',['class'=>'page-scroll']);?>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">MOUNTAIN LIST</h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Project One -->
		<?php foreach($ml as $mli):?>
        <div class="row">
            <div class="col-md-12">
                <?=img([
				'src'	=>'image/'.$mli->gambar,
				'style'	=>'max-width:100%; max-height:100%; height:450px; width:100%'
			  ])?>
            </div>
		</div>
		<br>
		<hr>
		<br>
			<div class="row">
                <div class="col-lg-12 text-center">
                <h2 class="section-heading"><?php echo $mli->judul?></h2>
				<br>
				<hr>
				</div>
				<div class="col-lg-12">
                <p class="text-muted text-justify"><?php echo nl2br($mli->details)?></p>
				</div>
            </div>
        
		<hr>
		<?php endforeach; ?>
        

        </div>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="bg-primary col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    
	
	
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

</html>
