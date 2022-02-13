<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Register</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
    <body>
        <main> 
            <section>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-4">
                        <?php 
                            if (isset($field)) 
                            {
                                echo '<div class="alert alert-danger" role="alert">'.$field.' is required</div>';
                            }; 
                            if (isset($confirm)) 
                            {
                                echo '<div class="alert alert-danger" role="alert">'.$confirm.'</div>';
                            }; 
                            if (isset($exists)) 
                            {
                                echo '<div class="alert alert-danger" role="alert">'.$exists.'</div>';
                            }; 
                        ?>
                           <h1 class="mb-1 mt-4 text-center">Sign up</h1>
                            <form action="/register/success" method="post">
                            <div class="form-group mb-2">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label>Confirm password</label>
                                    <input type="password" name="cpassword" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary btn-block mt-4" value="Sign Up">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>