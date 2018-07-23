
            <!DOCTYPE html>
            <?php 
                require_once 'E:\Xampp\htdocs\material\core\init.php';
            ?>
            <html lang="en">
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta http-equiv="x-ua-compatible" content="ie=edge">
                <title>Material Design Bootstrap</title>
                <!-- Font Awesome -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                <!-- Bootstrap core CSS -->
                <link href="css/bootstrap.min.css" rel="stylesheet">
                <!-- Material Design Bootstrap -->
                <link href="css/mdb.min.css" rel="stylesheet">
                
                <link href="css/custom-css.css" rel="stylesheet">
            
            </head>
            <?php 
            //require the core class
        
            //get the valaues 
            if(Input::exists()){
                $validate = new Validate();
                $validation = $validate->check($_POST,array(
                    'username'=> array(
                        'required'=> true,
                        'min'=>2,
                        'max'=>20,
                        'unique'=>'users'

                    ),
                    'RegNo'=> array(
                        'required'=> true,
                        'min'=>15,
                    ),
                    'emailAdd'=> array(
                        'required'=> true,
                    ),
                    'passwd'=> array(
                        'required'=> true,
                    ),
                    'confirmpassd'=> array(
                        'required'=>true,
                        'mathes'=>'passwd'
                    ),
                ));
                if($validation->passed()){
                    //registration successful

                }else{
                  print_r($validation->error());
                }
            }
            ?>

            <body class="container d-flex h-80 " style="padding-top: 10px;padding-bottom: 10px;padding-left:10px;padding-right:10px">
                    <div class=" card col-12 col-sm-5 col-md-4card justify-content-center align-items-center container  " style="height: 70%;">
                            <h4 class="card-title" id="logheader">Sign Up</h4>
                                    <div class="card-body ;">
                                    
                                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
                                        
                                
                                            <!-- Material input text -->
                                            <div class="md-form">
                                                <i class="fa fa-user prefix grey-text"></i>
                                                <input type="text" id="username" name ="username" class="form-control">
                                                <label for="username" class="font-weight-light" value ="">User name</label>
                                            </div>
                                            <div class="md-form">
                                                <i class="fa fa-user prefix grey-text"></i>
                                                <input type="text" id="RegNo" name="username" class="form-control">
                                                <label for="RegNo" class="font-weight-light">Registration No</label>
                                            </div>
                                
                                            <!-- Material input email -->
                                            <div class="md-form">
                                                <i class="fa fa-envelope prefix grey-text"></i>
                                                <input type="email" id="emailAdd" class="form-control">
                                                <label for="emailAdd" class="font-weight-light">Your email</label>
                                            </div>
                                            <!-- Material input password -->
                                            <div class="md-form">
                                                <i class="fa fa-lock prefix grey-text"></i>
                                                <input type="password" id="passwd" class="form-control">
                                                <label for="passwd" class="font-weight-light">Your password</label>
                                            </div>
                                            <div class="md-form">
                                                    <i class="fa fa-lock prefix grey-text"></i>
                                                    <input type="password" id="confirmpassd" class="form-control">
                                                    <label for="confirmpassd" class="font-weight-light">Confirm  password</label>
                                                </div>
                                
                                            <div class="text-center py-4 mt-3">
                                                <button class="btn float-left btn-elegant" type="submit">Register</button>
                                            
                                                <a href="logIn.html" class="card-link">Already a menber?Login</a>

                                            </div>
                                            
                                        </form>
                                        <!-- Material form register -->
                                
                                    </div>
                                    <!-- Card body -->
                                
                                </div>
                            

                                <!-- Card -->

                <!-- SCRIPTS -->
                <!-- JQuery -->
                <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
                <!-- Bootstrap tooltips -->
                <script type="text/javascript" src="js/popper.min.js"></script>
                <!-- Bootstrap core JavaScript -->
                <script type="text/javascript" src="js/bootstrap.min.js"></script>
                <!-- MDB core JavaScript -->
                <script type="text/javascript" src="js/mdb.min.js"></script>
            </body>

            </html>
