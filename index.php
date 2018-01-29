<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
                                                                                                            crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="icon" href="assets/images/favicon.ico" />
        <title>Webforce3 Pizza</title>
    </head>


    <body>

        <!-- main header -->
<?php
include('includes/header.html');
?>
        <!-- end main header -->

        <!-- main content -->
        <div class="main-content">
            <!-- featured -->
            <div class="featured">
                <div class="message">
                    <div class="container text-center">
                        <h3>Une bonne pizza</h3>
                        <h3>Pour bien coder</h3>
                        <button type="button" class="btn btn-warning" href="views/pizza.html">Mangez cette pizza</button>
                    </div>
                </div>
            </div>

            <!-- nos pizzas -->
<?php
include('includes/list-pizza.html');
?>
            <!-- main content: salad -->
                    </div>
                    <!-- end main content -->

                    <!-- main footer -->
<?php
include('includes/footer.html');
?>
                    <!-- end main footer -->

    </body>
</html>
