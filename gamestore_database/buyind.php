<?php

require_once ("../new/buyphp/component.php");
require_once ("../new/buyphp/operation.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Games</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" 
    integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" href="buystyl.css">

</head>
<body>

<main>
<header>
<div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-12">
                    <div class="btn-group">
                        <button class="btn border dropdown-toggle my-md-4 my-2" data-toggle="dropdown"
                            area-haspopup="true" area-expanded="false">DATABASE</button>
                        <div class="dropdown-menu">
                            <a href="gmeind.php" class="dropdown-item">Games</a>
                            <a href="buyind.php" class="dropdown-item">Buyers</a>
                            <a href="selind.php" class="dropdown-item">Sellers</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12 text-center">
                    <a class="navbar-brand" href="#"><h1 style="color:white"><i class="fas fa-gamepad"></i> Game Details</h1></a>
                </div>
                <div class="col-md-4 col-12 text-right">
                    <p class="my-md-4 header-links">
                        <a href="index.php" class="px-2">Home </a>|
                        <a href="login.php" class="px-2">Logout</a>
                          
                    </p>
                </div>
            </div>
        </div>
  </header>

    <div class="container text-center">
    
        

        <div class="d-flex justify-content-center">
            <form action="" method="post" class="w-50">
                <div class="pt-2">
                    <?php inputElement("<i class='fas fa-id-badge'></i>","ID", "buy_id",setID()); ?>
                </div>
                <div class="pt-2">
                    <?php inputElement("<i class='fas fa-signature'></i>","name", "buy_name",""); ?>
                </div>
                
                <div class="row pt-2">
                    <div class="col">
                        <?php inputElement("<i class='fas fa-cube'></i>","abc@xyz", "buy_mail",""); ?>
                    </div>
                    <div class="col">
                        <?php inputElement("<i class='fas fa-archway'></i>","gameid", "game_id",""); ?>
                    </div>
                    
                </div>
                <div class="d-flex justify-content-center">
                
                        <?php buttonElement("btn-create","btn btn-success","<i class='fas fa-plus'></i>","create","data-toggle='tooltip' data-placement='bottom' title='Create'"); ?>
                        <?php buttonElement("btn-read","btn btn-primary","<i class='fas fa-sync'></i>","read","data-toggle='tooltip' data-placement='bottom' title='Read'"); ?>
                        <?php buttonElement("btn-update","btn btn-light border","<i class='fas fa-pen-alt'></i>","update","data-toggle='tooltip' data-placement='bottom' title='Update'"); ?>
                        <?php buttonElement("btn-delete","btn btn-danger","<i class='fas fa-trash-alt'></i>","delete","data-toggle='tooltip' data-placement='bottom' title='Delete'"); ?>
                        <?php deleteBtn();?>
                </div>
            </form>
        </div>

        <!-- Bootstrap table  -->
        
        <div class = "d-flex justify-content-right">
        <div class="d-flex table-data ">
        
            <table class="table table-striped table-dark">
            
                <thead  class="thead-dark">
                
                    <tr>
                        <th>ID</th>
                        <th>Buyer name</th>
                        <th>Email/Phone</th>
                        <th>Game id</th>
                        
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody id="tbody">
                   <?php


                   if(isset($_POST['read'])){
                       $result = getData();

                       if($result){

                           while ($row = mysqli_fetch_assoc($result)){ ?>

                               <tr>
                                   <td data-id="<?php echo $row['id']; ?>"><?php echo $row['id']; ?></td>
                                   <td data-id="<?php echo $row['id']; ?>"><?php echo $row['buy_name']; ?></td>
                                   <td data-id="<?php echo $row['id']; ?>"><?php echo $row['buy_mail']; ?></td>
                                   <td data-id="<?php echo $row['id']; ?>"><?php echo $row['game_id']; ?></td>
                                   
                                   
                                   <td ><i class="fas fa-edit btnedit" data-id="<?php echo $row['id']; ?>"></i></td>
                               </tr>

                   <?php
                           }

                       }
                   }


                   ?>
                </tbody>
            </table>
        </div>
        </div>
        

    </div>
    
</main>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   

<script src="../new/buyphp/main.js"></script>
</body>
</html>