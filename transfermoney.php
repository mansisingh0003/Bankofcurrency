<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <style type="text/css">
      button{
        transition: 1.5s;
      }
      button:hover{
        background-color:#616C6F;
        color: white;
      }
      .footer {
	left: 0;
	bottom: 0;
	width: 100%;
	background-color: rgb(149, 207, 245);
	color: rgb(95, 88, 88);
    text-align: center;
    margin-top: 2px;
  }
  .bg-cover {
    background-size: cover !important;
  }
    </style>
</head>


<body class= "bg-cover" style="background: url(img/BG7.jpeg) ">
<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>

<?php
  include 'navbar.php';
?>

<div class="container">
        <h2 class="text-center pt-4" style="color : white;">-: TRANSFER MONEY :-</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="border-color:violet;">
                        <thead style="color : #ffbf00;">
                      
                            <tr>
                            <th scope="col" class="text-center py-2">ACCOUNT NO.</th>
                            <th scope="col" class="text-center py-2">NAME</th>
                            <th scope="col" class="text-center py-2">E-MAIL</th>
                            <th scope="col" class="text-center py-2">BALANCE</th>
                            <th scope="col" class="text-center py-2">TRANSFER MONEY</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <!-- <tr style="color : violet;"> -->
                    <tr style="color : white;">
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn" style="background-color : violet;">Transfer</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
         <footer class="footer">
        <p> &copy 2021 Bank of Currency- Made by Mansi Singh</p>
      </footer>
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>