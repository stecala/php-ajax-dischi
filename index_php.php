<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- my css -->
    <link rel="stylesheet" href="./style/style.css">
    <title>Document</title>
</head>
<body>
    <?php
       include __DIR__ . '/db/db.php';
    ?>
    <header>
    
    </header>
    <main>
        <div class="container-lg ">
            <div class="row my-margin">
                <?php foreach( $albums as $album){ ?> 
                    <div class="col-2 card pt-3 m-2">
                        <div class="row">
                            <div class="col-12 img-container">
                                <img src="<?php echo $album['poster'] ?>" alt=" <?php echo $album['title'] ?> poster " >
                            </div>
                            <div class="col-12 pt-3 text-center text-white">
                                <h4>
                                    <?php echo $album['title'] ?>
                                </h4>
                            </div>
                            <div class="col-12 text-center pt-3 ">
                                <h6>
                                    <?php echo $album['author'] ?>
                                </h6>
                            </div>
                            <div class="col-12 pt-1 text-center">
                                <h6>
                                    <?php echo $album['year'] ?>    
                                </h6>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>
</html>