<?php
  include "api.php";
?>
<html>
  <head>
    <title>Film Review</title>
    <style>
      body{
        background-color: #f4f6f9;
      }
      .header{
        width: 60%;
        height: 20px;
        position: relative;
        text-align: center;
        left: 20%;
      }
      .topten{
        width: 60%;
        position: relative;
        display: flex;
        
        flex-direction: row;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid rgba(0,0,0,0.125);
        border-radius: 0.25rem;

        top: 50%;
        left: 20%;
        margin: 2px;
        padding: 4px;
        
        flex-wrap: nowrap;
        overflow-x: auto;
      }
      .content{
        width: 60%;
        position: relative;
        top: 50%;
        left: 20%;
        margin: 2px;
        display: grid;
        grid-template-columns: repeat(2, auto);
        grid-auto-rows: auto;
      }
      .card{
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        max-width: 200px;
        height: 380px;
        margin: 10px;
        text-align: center;
        font-family: arial;
        float: left;
        margin-left: 4px;
        margin-bottom: 4px;
        background-color: white;
        flex: 0 0 auto;
      }
      .price{
        color: grey;
        font-size: 12px;
      }
      .judul{
        padding-top: 0px;
        height: 60px;
        position: relative;
      }
      .ranking{
        margin-left: 38%;
        text-align: center;
        padding: 5px;
        position: relative;
        border: 1px solid;
        border-radius: 30px;
        width: 30px;
        background-color: black;
        color: white;
      }
      .gambar{
        position: relative;
      }
      .card button{
        border: none;
        outline: 0;
        padding: 10px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 12px;
      }
      .card button:hover{
        opacity: 0.7;
      }
      .card2{
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        max-width: 400px;
        margin: 4px;
        text-align: center;
        font-family: arial;
        float: left;
        background-color: white;
        flex: 0 0 auto;
      }
      .card2 button{
        border: none;
        outline: 0;
        padding: 10px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 12px;
      }
      .card2 button:hover{
        opacity: 0.7;
      }
      .kiri{
        float: left;
        height: 50%;
        width: 50%;
      }
      .kanan{
        height: 50%;
        width: 50%;
        float: right;
      }

    </style>
  </head>
  <body>
    <div class="header">
      <h3>Rank Film Review</h3>
    </div>
    <div class="topten">
      <?php
      foreach($topten_data as $topten){
      ?>
        <div class="card">
          <div class="gambar">        
            <a href="detail.php?fulltitle=<?php echo $topten->fullTitle; ?>&year=<?php echo $topten->year; ?>&image=<?php echo $topten->image; ?>&rank=<?php echo $topten->rank; ?>&crew=<?php echo $topten->crew; ?>&imdbrating=<?php echo $topten->imDbRating; ?>"><img src="<?php echo $topten->image; ?>" style="width:100%; height:70%;"></a>
          </div>
          <br>
          <div class="judul">
            <b><?php echo $topten->title." (".$topten->imDbRating.")"; ?></b>
          </div>
          <div class="ranking">
            <?php echo $topten->rank; ?>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
    <div class="content">
      <?php 
      $no = 0;
      foreach($toptwenty_data as $twenty){
        if($no=$no+1){
      ?>
        <div class="card2">
          <?php 
          if($no % 2 == 0){
          ?>
            <div class="kiri">
              <br>
              <div class="ranking"><?php echo $twenty->rank; ?></div>
              <h4><?php echo $twenty->title." (".$twenty->imDbRating.")"; ?></h4>
              <?php echo $twenty->crew; ?>
            </div>
            <div class="kanan">
              <a href="detail.php?fulltitle=<?php echo $twenty->fullTitle; ?>&year=<?php echo $twenty->year; ?>&image=<?php echo $twenty->image; ?>&rank=<?php echo $twenty->rank; ?>&crew=<?php echo $twenty->crew; ?>&imdbrating=<?php echo $twenty->imDbRating; ?>"><img src="<?php echo $twenty->image; ?>" style="width:100%"></a>
            </div>
          <?php
          } else {
          ?>
            <div class="kiri">
            <a href="detail.php?fulltitle=<?php echo $twenty->fullTitle; ?>&year=<?php echo $twenty->year; ?>&image=<?php echo $twenty->image; ?>&rank=<?php echo $twenty->rank; ?>&crew=<?php echo $twenty->crew; ?>&imdbrating=<?php echo $twenty->imDbRating; ?>"><img src="<?php echo $twenty->image; ?>" style="width:100%"></a>
            </div>
            <div class="kanan">
              <br>
              <div class="ranking"><?php echo $twenty->rank; ?></div>
              <h4><?php echo $twenty->title." (".$twenty->imDbRating.")"; ?></h4>
              <?php echo $twenty->crew; ?>
            </div>
          <?php
          }
          ?>
        </div>
      <?php
        }
      }
      ?>
    </div>
  </body>
</html>