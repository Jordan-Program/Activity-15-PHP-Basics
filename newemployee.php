<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 15 PHP Basics</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
          rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
          crossorigin="anonymous">
</head>
<body>
    <div class="d-flex flex-column align-content-center justify-content-center min-vh-100">
        <h1 class="text-center">
            <?php 
                echo "Hello " . $_POST['employeeName']
            ?>
        </h1>
        <div class="row p-0 m-0 d-flex flex-column align-content-center justify-content-center">
            <div class="col text-center">
                <a class="btn bg-black text-light mt-2" href="index.php">Go back</a>
            </div>
        </div>
    </div>
</body>
</html>