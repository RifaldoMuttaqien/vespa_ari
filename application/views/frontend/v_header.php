<head>
    <title>Vespa</title>
</head>

<body>

    <head>
        <title>Portfolio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="icon" href="<?php echo base_url(); ?>assets_frontend/img/logo.png">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets_frontend/assets/css/bootstrap.css">
        <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets_frontend/assets/css/style.css">
        <script src="<?php echo base_url(); ?>assets_frontend/assets/jquery/jquery-2.1.1.js"></script>
        <script src="<?php echo base_url(); ?>assets_frontend/assets/jquery/popper.min.js"></script>
        <script src="<?php echo base_url(); ?>assets_frontend/assets/js/bootstrap.js"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script> -->
    </head>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <div class="container">

            <a class="navbar-brand" href="#">
                <img class="logo" src="<?php echo base_url(); ?>assets_frontend/img/logo.png">
            </a>

            <h1>Vespa</h1>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href=" #index" class="index">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#collection" class="collection">Collection</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="about">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#contact" class="contact">Contact</a>
                    </li>
                </ul>

            </div>

        </div>
    </nav><br>

    <div class="jumbroton text-center">
        <div class="container">

            <div class="row">
                <div class="col-sm-4">
                    <div class="card-body1">
                        <h1>Let's go araound the city using a Vespa</h1>
                        <button class="btn btn-danger" id="btn-start">Get Start</button>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card-body2">
                        <img class="left-vespa" src="<?php echo base_url(); ?>assets_frontend/img/vespa.png">
                    </div>
                </div>
            </div>

        </div>
    </div>

    <br><br><br>
    <hr>
    <div class="container" id="collection">


        <?php foreach ($kategori as $k) { ?>
            <div class="row">
                <div class="col-sm-4">
                    <!-- <div class="card"> -->
                    <div class="card-body3">
                        <img src="<?php echo base_url(); ?>assets_frontend/img/vespa1.jpg">

                        <h5 class="card-title"><?php echo $k->kategori_nama;  ?></h5>
                        <?php foreach ($artikel as $a) { ?>
                            <p class="card-text"><?php echo $a->artikel_judul ?></p>


                        <?php } ?>
                    </div>
                    <!-- </div> -->
                </div>
            <?php } ?>

            <?php foreach ($kategori as $k) { ?>
                <div class="row">
                    <div class="col-sm-10">
                        <!-- <div class="card"> -->
                        <div class="card-body3">

                            <img src="<?php echo base_url(); ?>assets_frontend/img/vespa2.jpg">

                            <h5 class="card-title"><?php echo $k->kategori_nama; ?></h5>
                            <?php foreach ($artikel as $a) { ?>
                                <p class="card-text"><?php echo $a->artikel_judul ?></p>


                            <?php } ?>
                        </div>
                        <!-- </div> -->
                    </div>
                <?php } ?>




                </div>

            </div>

            <hr>

            <div class="container" id="about">

                <div class="row">

                    <div class="col-md-6">
                        <!-- <div class="card"> -->
                        <div class="card-body6">
                            <img src="<?php echo base_url(); ?>assets_frontend/image15.png">
                        </div>
                        <!-- </div> -->
                    </div>

                    <div class="col-md-4">
                        <!-- <div class="card"> -->
                        <div class="card-body7">
                            <h1 class="card-title">About</h1><br>
                            <p class="card-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <!-- </div> -->
                    </div>
                </div>

            </div>

            <hr>

            <div class="container" id="contact">

                <div class="row">

                    <div class="col-md-6">
                        <!-- <div class="card"> -->
                        <div class="card-body6">
                            <img src="<?php echo base_url(); ?>assets_frontend/image15.png">
                        </div>
                        <!-- </div> -->
                    </div>

                    <div class="col-md-6">
                        <!-- <div class="card-body8"> -->
                        <div class="card-body8">
                            <h1 class="card-title">Contact</h1><br>
                            <form class="form-group">
                                <h3>SAY SOMETHING</h3>
                                <input type="text" name=text"" class="form-control" placeholder="Name"><br>
                                <input type="text" name=text"" class="form-control" placeholder="Email"><br>
                                <textarea class="form-control" placeholder="Message"></textarea><br>
                                <button class="btn btn-danger" id="send">Send</button>
                            </form>
                        </div>
                        <!-- </div> -->
                    </div>

                </div>

            </div>

            <hr>



</body>