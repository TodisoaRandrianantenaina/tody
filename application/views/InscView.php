<html>
    <head>
        <title>inscription</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')  ;?>">
    </head>
    <body>
    <form action=" http://127.127.0.1/tody/loginControl/authInsc" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input name="email"  type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name="pass"  type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>

              <div class="form-group">
                <label class="col-form-label" for="inputDefault">Nom</label>
                <input name="nom"type="text" class="form-control" placeholder="Nom" id="inputDefault">
            </div>
            
                                    <div class="row">
                                        <div class="col-4"></div>
                                        <div class="col-4">
                                        <button type="submit" class="btn btn-outline-primary btn-block ">Valider</button> 
                                        </div>
                                        <div class="col-4"></div>
                                    </div>

    </form>

    </body>
</html>