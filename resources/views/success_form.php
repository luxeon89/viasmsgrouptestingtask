<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Successfull</title>
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
                            if (isset($name)) 
                            {
                                echo '<h1 class="mb-1 mt-4 text-center">Hello, '.$name.'! You are now registered!</h1>';
                            }; 
                        ?>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>