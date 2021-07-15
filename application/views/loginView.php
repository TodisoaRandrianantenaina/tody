<html>
    <head>
        <title> TODY  </title>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')  ;?>">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav> <br/><br/>

        <?php echo $title;?>


        <form action="http://localhost/tody/loginControl/authLogin" method="POST">
            
              <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <div class="card border-primary mb-3" >
                        <div class="card-header">Login</div>
                        <div class="card-body">
                            <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input name="pass" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <div class="row">
                                        <div class="col-4"></div>
                                        <div class="col-4">
                                        <button type="submit" class="btn btn-outline-primary btn-block ">Valider</button> 
                                        </div>
                                        <div class="col-4"></div>
                                    </div>
                                
                            </div>
                        </div>
                    </div>
                <div class="col-4"></div>   
            </div>
        </form>
    </body>
</html>