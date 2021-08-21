<?php
    $fulltitle = $_GET['fulltitle'];
    $year = $_GET['year'];
    $image = $_GET['image'];
    $rank = $_GET['rank'];
    $crew = $_GET['crew'];
    $rating = $_GET['imdbrating'];
?>
<html>
    <head>
        <title>Detail Film</title>
        <style>
            body{
                background-color: #f4f6f9;
            }
            img{
                border-radius: 8px;
                width: 95%;
                height: 97%;
            }
            .content{
                position: relative;
                margin-left: 10%;
                margin-right: 10%;
                padding: 10px;
                width: 80%;
                height: 100%;
                background-color: #fff;
                border: 1px solid #9fa4aa;
                border-radius: 10px;
            }
            .gambar{
                float: left;
                position: absolute;
                width: 50%;
                height: 100%;
            }
            .detail{
                margin-left: 10px;
                float: right;
                position: relative;
                width: 50%;
                height: 100%;
            }
        </style>
    </head>
    <body>
        <div class="content">
            <div class="gambar"><img src="<?php echo $image; ?>"></div>
            <div class="detail">
                <h3>Rank : </h3>
                <?php echo $rank; ?>
                <h3>Full Title : </h3> 
                <?php echo $fulltitle; ?>
                <h3>Year : </h3>
                <?php echo $year; ?>
                <h3>Crew : </h3>
                <?php echo $crew; ?>
                <h3>Rating : </h3>
                <?php echo $rating; ?>
                <h3>Back : </h3>
                <a href="index.php">Back to index</a>
            </div>
        </div>
    </body>
</html>