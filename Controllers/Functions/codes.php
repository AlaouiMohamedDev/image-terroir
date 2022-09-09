<?php 

    require_once '../../Models/config.php';

    if(isset($_POST['query'])){
        $req="select * from codes where title like '%".$_POST['query']."%' and purchased=false";
    }
    else{
        $req="select * from codes where purchased=false";
    }
      
       $resultat=mysqli_query($connection,$req);
       $x='';

    while($row=mysqli_fetch_array($resultat)){
        $x.='<div class="col-sm-12 col-md-4 col-lg-3">
        <div class="content">
          <h1>'.$row["title"].'</h1>
          <span>'.$row['prix'].' DH / '.$row['durée'].'</span>
          <a onclick="buy('.$row['id'].','.$row['prix'].');">
            Acheter
            <i class="bx bx-cart-alt ms-2"></i>
          </a>
        </div>
      </div>';
    }
    if(mysqli_num_rows($resultat)>0){
        echo $x;
    }
    else{
      if(isset($_POST['query'])){
         echo '<div class="alert alert-warning py-2 p-3">Nothing found for '.$_POST['query'].'</div>';
      }
      else{
        echo '<div class="alert alert-warning py-2 p-3">Nothing to show for the moment </div>';
      }
       
    }
    