<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Tokyo+Zoo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/cstyle.css">
    <title>Customers</title>
  </head>

  <body>
    <?php
      include 'config.php';
      $sql = "SELECT * FROM users";
      $result = mysqli_query($conn,$sql);
    ?>
    <div class="header">
      <ul>
        <li> <a href="about.html">About Us</a> </li>
        <li> <a href="transactionhistory.php"><i class="fas fa-wallet"></i>&nbsp; Transactions</a> </li>
        <li> <a href="#"><i class="fas fa-users"></i>&nbsp; Customers</a> </li>
        <li> <a href="index.html"><i class="fas fa-home"></i>&nbsp; Home</a> </li>
        <li><h1>r. t. bank</h1></li>
      </ul>
    </div>
    <div class="tables">
      <table class="table table-hover table-dark">
        <thead>
          <tr>
            <th class="text-center">Sr.No</th>
            <th class="text-center">Customer Name</th>
            <th class="text-center">Email ID</th>
            <th class="text-center">Balance Amount</th>
            <th class="text-center">Transfer Money</th>
          </tr>
        </thead>
        <tbody>
        <?php 
              while($rows=mysqli_fetch_assoc($result)){
        ?>
          <tr>
            
            <td class="text-center"><?php echo $rows['id'] ?></td>
            <td class="text-center"><?php echo $rows['name'] ?></td>
            <td class="text-center"><?php echo $rows['email'] ?></td>
            <td class="text-center"><?php echo $rows['balance'] ?></td>
            <td class="text-center"><a href="transaction.php?id= <?php echo $rows['id'] ;?>"><button type="button" class="transbtn"><b>Transfer</b></button> </td>

          </tr>
        <?php
              }
        ?>
        </tbody>
      </table>
    </div>


    <div class="footer">
      Made with &nbsp;💜 &nbsp; By Riya Thapliyal
    </div>
    
  </body>
</html>
