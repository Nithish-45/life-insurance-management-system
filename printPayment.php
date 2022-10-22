<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=cover, initial-scale=1.0">
    <title>Document</title>
    <style>
        .btn{
	    background-color: #4CAF50;
	    float: center;
	    color:white;
	    text-decoration:none;	
        
       }
      .main33{
        display:flex;
        justify-content: center;
        /* text-align: center; */
        justify-self: center;
        
      }b{
        text-align: left;
        
      }
      p{
        text-align: right;
      }
        
    </style>
</head>
<body>
   <center>
    <h1><b>PAYMENT RECEIPT</b></h1><br>
    </center>
  <div class="container col s12" >
    
  <?php
	
  include'connection.php';
    
    
    $id = "";
    if($_SERVER["REQUEST_METHOD"] == "GET"){
      
      $recipt_no = $_GET["recipt_no"];
    }
      
    
    $sql = "SELECT recipt_no, client_id,month, amount, due, fine, agent_id from payment where recipt_no='$recipt_no'";
    $result = $conn->query($sql);
    $row=mysqli_fetch_assoc($result);
$rcp=$row['recipt_no'];
$aid=$row['agent_id'];
$cid=$row['client_id'];
$due=$row['due'];
$fn=$row['fine'];
$amn=$row['amount'];
$mnt=$row['month'];





    
    
  
    
  ?><div class="main33">

    <div class="card" style="width: 30rem;">
      <ul class="list-group list-group-flush">
    <li class="list-group-item"><b>Receipt No  :</b><p><?php echo $rcp ; ?></p></li>
    <li class="list-group-item"><b>Agent ID   :</b><p><?php echo $aid; ?></h3></p> </li>
    <li class="list-group-item"><b>Client ID  :</b><p><?php echo $cid; ?></p> </li>
    <li class="list-group-item"><b>Due  :</b><p><?php echo $due; ?> </p></li>
    <li class="list-group-item"><b>Fine  :</b><p><?php echo $fn; ?></p></li>
    <li class="list-group-item"><b>Amount  :</b> <p><?php echo $amn ; ?></p></li>
    <li class="list-group-item"><b>Month  :</b><p><?php echo $mnt ; ?></p></li>
  </ul>
</div>

</div>







 
  <center>
  <div>







  <br>
      <button class="btn" onclick="window.print()" align=""> 
      <a class="btn"><b>PRINT PAYMENT</b></a>


  </div>
  </center>
    </div>
</body>
</html>