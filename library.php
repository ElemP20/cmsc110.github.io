<?php
$servername = "localhost";
$username = "root";
$password = "password";
$db_name = "mp2_110";

$conn = mysqli_connect($servername, $username, $password, $db_name);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$rsql = "SELECT * FROM prod_serv WHERE Category = 'romance' ";
$csql = "SELECT * FROM prod_serv WHERE Category = 'comedy' ";
$dsql = "SELECT * FROM prod_serv WHERE Category = 'drama' ";
$hsql = "SELECT * FROM prod_serv WHERE Category = 'horror' ";
$fsql = "SELECT * FROM prod_serv WHERE Category = 'fantasy' ";
$asql = "SELECT * FROM prod_serv WHERE Category = 'adventure' ";

$romance = mysqli_query($conn, $rsql);
$comedy = mysqli_query($conn, $csql);
$drama = mysqli_query($conn, $dsql);
$horror = mysqli_query($conn, $hsql);
$fantasy = mysqli_query($conn, $fsql);
$adventure = mysqli_query($conn, $asql);
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Library</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

        <link href="index.css" type="text/css" rel="stylesheet" />
    </head>
    
    <body class="container-fluid">
        <div id="library-container" class="container-fluid">
            <div id="library-content" class="row">
                <div class="col-1">
                    <button class="carousel-control-prev" data-bs-target="#library-carousel" data-bs-slide="prev">
                        <i class="bi bi-arrow-left-circle"></i>
                    </button>
                </div>

                <div class="col-10">
                    <div id="library-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">

                            <div id="romance-library" class="carousel-item active">
                                <div class="row">
                                    <div class="card">
                                        <h1>Enchanting Romance</h1>
                                        <h3>Love in Every Frame</h3>
                                    </div>
                                </div>

                                <div class="row">
                                    <?php
                                        while ($row = mysqli_fetch_assoc($romance)) 
                                        {
                                    ?>

                                    <div class="card col">
                                        <img  class="card-img-top" src="<?php echo $row['Image'] ?>" alt=" <?php echo $row['Name'] ?> photo">
                                        <div class="card-body">
                                            <h4 class="card-title"> <?php echo $row['Name'] ?> </h4>
                                            <p class="card-text"> <?php echo $row['Description'] ?> </p>
                                        </div>
                                        <div class="card-body">
                                            <span>
                                                <button class="btn btn-primary">Trailer</button>
                                                <button class="btn btn-primary">
                                                    Watch for Php <?php echo $row['Price_per_unit'] . ".00 " . $row['Basic_unit'] ?> 
                                                </button>
                                            </span>
                                        </div>
                                    </div>

                                    <?php
                                        }
                                    ?>
                                </div>
                            </div>

                            <div id="comedy-library" class="carousel-item">
                                <div class="row">
                                    <div class="card">
                                        <h1>Comedy Carnival</h1>
                                        <h3>Laughs That Last</h3>
                                    </div>
                                </div>

                                <div class="row">
                                    <?php
                                        while ($row = mysqli_fetch_assoc($comedy)) 
                                        {
                                    ?>

                                    <div class="card col">
                                        <img  class="card-img-top" src="<?php echo $row['Image'] ?>" alt=" <?php echo $row['Name'] ?> photo">
                                        <div class="card-body">
                                            <h4 class="card-title"> <?php echo $row['Name'] ?> </h4>
                                            <p class="card-text"> <?php echo $row['Description'] ?> </p>
                                        </div>
                                        <div class="card-body">
                                            <span>
                                                <button class="btn btn-primary">Trailer</button>
                                                <button class="btn btn-primary">
                                                    Watch for Php <?php echo $row['Price_per_unit'] . ".00 " . $row['Basic_unit'] ?> 
                                                </button>
                                            </span>
                                        </div>
                                    </div>

                                    <?php
                                        }
                                    ?>
                                </div>
                            </div>

                            <div id="drama-library" class="carousel-item">
                                <div class="row">
                                    <div class="card">
                                        <h1>Dramatic Chronicle</h1>
                                        <h3>Life's Unscripted Moments</h3>
                                    </div>
                                </div>

                                <div class="row">
                                    <?php
                                        while ($row = mysqli_fetch_assoc($drama)) 
                                        {
                                    ?>

                                    <div class="card col">
                                        <img  class="card-img-top" src="<?php echo $row['Image'] ?>" alt=" <?php echo $row['Name'] ?> photo">
                                        <div class="card-body">
                                            <h4 class="card-title"> <?php echo $row['Name'] ?> </h4>
                                            <p class="card-text"> <?php echo $row['Description'] ?> </p>
                                        </div>
                                        <div class="card-body">
                                            <span>
                                                <button class="btn btn-primary">Trailer</button>
                                                <button class="btn btn-primary">
                                                    Watch for Php <?php echo $row['Price_per_unit'] . ".00 " . $row['Basic_unit'] ?> 
                                                </button>
                                            </span>
                                        </div>
                                    </div>

                                    <?php
                                        }
                                    ?>
                                </div>
                            </div>

                            <div id="horror-library" class="carousel-item">
                                <div class="row">
                                    <div class="card">
                                        <h1>FearFlick Fiesta</h1>
                                        <h3>Face Your Fears, Frame by Frame</h3>
                                    </div>
                                </div>

                                <div class="row">
                                    <?php
                                        while ($row = mysqli_fetch_assoc($horror)) 
                                        {
                                    ?>

                                    <div class="card col">
                                        <img  class="card-img-top" src="<?php echo $row['Image'] ?>" alt=" <?php echo $row['Name'] ?> photo">
                                        <div class="card-body">
                                            <h4 class="card-title"> <?php echo $row['Name'] ?> </h4>
                                            <p class="card-text"> <?php echo $row['Description'] ?> </p>
                                        </div>
                                        <div class="card-body">
                                            <span>
                                                <button class="btn btn-primary">Trailer</button>
                                                <button class="btn btn-primary">
                                                    Watch for Php <?php echo $row['Price_per_unit'] . ".00 " . $row['Basic_unit'] ?> 
                                                </button>
                                            </span>
                                        </div>
                                    </div>

                                    <?php
                                        }
                                    ?>
                                </div>
                            </div>

                            <div id="fantasy-library" class="carousel-item">
                                <div class="row">
                                    <div class="card">
                                        <h1>Fantasia Odyssey</h1>
                                        <h3>Love in Every Frame</h3>
                                    </div>
                                </div>

                                <div class="row">
                                    <?php
                                        while ($row = mysqli_fetch_assoc($fantasy)) 
                                        {
                                    ?>

                                    <div class="card col">
                                        <img  class="card-img-top" src="<?php echo $row['Image'] ?>" alt=" <?php echo $row['Name'] ?> photo">
                                        <div class="card-body">
                                            <h4 class="card-title"> <?php echo $row['Name'] ?> </h4>
                                            <p class="card-text"> <?php echo $row['Description'] ?> </p>
                                        </div>
                                        <div class="card-body">
                                            <span>
                                                <button class="btn btn-primary">Trailer</button>
                                                <button class="btn btn-primary">
                                                    Watch for Php <?php echo $row['Price_per_unit'] . ".00 " . $row['Basic_unit'] ?> 
                                                </button>
                                            </span>
                                        </div>
                                    </div>

                                    <?php
                                        }
                                    ?>
                                </div>
                            </div>

                            <div id="adventure-library" class="carousel-item">
                                <div class="row">
                                    <div class="card">
                                        <h1>Thrilling Expeditions</h1>
                                        <h3>Uncharted Realms, Limitless Thrills</h3>
                                    </div>
                                </div>

                                <div class="row">
                                    <?php
                                        while ($row = mysqli_fetch_assoc($adventure)) 
                                        {
                                    ?>

                                    <div class="card col">
                                        <img  class="card-img-top" src="<?php echo $row['Image'] ?>" alt=" <?php echo $row['Name'] ?> photo">
                                        <div class="card-body">
                                            <h4 class="card-title"> <?php echo $row['Name'] ?> </h4>
                                            <p class="card-text"> <?php echo $row['Description'] ?> </p>
                                        </div>
                                        <div class="card-body">
                                            <span>
                                                <button class="btn btn-primary">Trailer</button>
                                                <button class="btn btn-primary">
                                                    Watch for Php <?php echo $row['Price_per_unit'] . ".00 " . $row['Basic_unit'] ?> 
                                                </button>
                                            </span>
                                        </div>
                                    </div>

                                    <?php
                                        }
                                    ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-1">
                    <button class="carousel-control-next" data-bs-target="#library-carousel" data-bs-slide="next">
                        <i class="bi bi-arrow-right-circle"></i>
                    </button>
                </div>
            </div>
        </div>

    </body>
</html>
