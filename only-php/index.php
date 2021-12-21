<?php
require_once __DIR__ . '/scripts/database.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="../css/main.css">
    <title>Only PHP</title>
</head>
<body>
    <header>
        <div class='logo-container'>
            <img src="../img/logo.png" alt="logo">
        </div>
    </header>
    <main>
        <div class="container py-5">
            <div class="row">
                <?php foreach ($database as $disc) :?>
                    <div class='col-4 text-center'>
                        <div class="my-card">
                            <img src="<?php echo $disc['poster']?>" alt="">
                            <div class="description mt-4">
                                <h6><?php echo $disc['title']?></h6>
                                <span><?php echo $disc['author']?></span>
                                <h6><?php echo $disc['year']?></h6>
                                <span><?php echo $disc['genre']?></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </main>
</body>

</html>