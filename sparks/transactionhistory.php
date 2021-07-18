<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Tokyo+Zoo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/ttstyle.css">
    <title>Transactions</title>
  </head>
  <body>
    <div class="theader">
      <ul>
        <li> <a href="about.html">About Us</a> </li>
        <li> <a href="#"><i class="fas fa-wallet"></i>&nbsp; Transactions</a> </li>
        <li> <a href="customer.php"><i class="fas fa-users"></i>&nbsp; Customers</a> </li>
        <li> <a href="index.html"><i class="fas fa-home"></i>&nbsp; Home</a> </li>
        <li><h1>r. t. bank</h1></li>
      </ul>
    </div>
    <div class="container"> 
       <table class="table table-hover table-dark table-striped table-condensed table-bordered">
        <thead>
            <tr>
                <th class="text-center">Sr.No</th>
                <th class="text-center">Sender Name</th>
                <th class="text-center">Receiver Name</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php
            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>
            <tr>
            <td class="text-center"><?php echo $rows['sno']; ?></td>
            <td class="text-center"><?php echo $rows['sender']; ?></td>
            <td class="text-center"><?php echo $rows['receiver']; ?></td>
            <td class="text-center"><?php echo $rows['balance']; ?> </td>
            <td class="text-center"><?php echo $rows['datetime']; ?> </td>
                
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
