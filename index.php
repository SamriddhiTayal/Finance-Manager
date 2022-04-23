<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>rupee</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="icon" href="images/rupee-symbol.png">
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
  
</head>

<body>
  <div class="header">
    <img src="images/rupee.png" alt="rupee" height=50px width=50px>
    <h1>Finance Manager</h1>
  </div>

  <div class="middle">


    <h3>Previous Income and Expenditure</h3>
    <ul id="list" class="list"></ul>
    <h3>New Transaction</h3>
    <form id="form">
      <div class="formLabel">
        <label for="label">Label</label>
        <input type="text" name="label" id="label" placeholder="Enter label of income or expense...." />
      </div>
      <div class="formLabel">
        <label for="amount">Amount </label>
        <input type="number" name="amount" id="amount" placeholder="Enter amount...">
      </div>
      <button class="btn">Transaction</button>
    </form>
    <center>
      <h4>BALANCE AMOUNT:</h4>
      <h2 id="balanceAmt">₹0.00</h2>
    </center>
    <div class="incomeExpense">
      <div>
        <h4>INCOME</h4>
        <p id="money-Add" class="money-Add">
          ₹0
        </p>
      </div>
      <div>
        <h4>EXPENDITURE</h4>
        <p id="money-Sub" class="money-Sub">
          ₹0
        </p>
      </div>
    </div>
  </div>
  <h3><i><b>Technology in News</i></b> </h3>
      <div class="floating">
        <div class="news">

          <p><img src="Images/attack.png" alt="" class="attack">
            <a href="https://www.bbc.com/news/technology-60500618">Cyber-attacks escalate against Ukrainian websites</a><br><br> <br>Many government and company websites go down in the largest cyber-attack since the crisis began.
          </p>
        </div>
        <div class="news">
          <p><img src="Images/hacker.png" alt="" class="hacker">
            <a href="https://www.bbc.com/news/business-60478725">Study: UK firms most likely to pay hacker ransoms</a><br> <br><br>
            And three-quarters of British firms have been victim of ransomware attacks says report.
          </p>
        </div>
      </div>
  <?php
    // $connection= mysqli_connect("localhost","root","", "finance");
    // $db="CREATE DATABASE finance";
    // $table=mysqli_query($connection,$db);
    // $transaction="CREATE TABLE `finance`.`transaction` ( `label` VARCHAR(30) NOT NULL , `amount` INT(4) NOT NULL )";
    // $transaction_table=mysqli_query($connection,$transaction);
    // if($transaction_table){
    //     echo"table created";
    // }
    // else{
    //     echo"failed to create table<br>";
    // }

    // if ($connection){
    //     echo "Database connected successfully <br>";
    // }
    // else{
    //     echo"Connection Failed<br>";
    // }
//    $signup=" CREATE TABLE `finance`.`signup` ( `username` VARCHAR(30) NOT NULL  , `emailid` VARCHAR(30) NOT NULL ,`password` VARCHAR(20) NOT NULL)";
//    $signup_table=mysqli_query($connection,$signup);
//    if($signup_table){
//        echo"signup details created <br>";

//    }
//    else{
//        echo"table creation failed";
// //    }
//  $label=$_POST['label'];
//  $amount=$_POST['amount'];
// $username=$_POST['username'];
// $emailid=$_POST['emailid];
// $password=$_POST['password'];

// $query2="INSERT INTO `signup` VALUES 
// `label` = '$label',
// `amount` = '$amount',;
// $details2=mysqli_query($connection,$query2);
// if($details2){
//     echo "Details inserted";
// }
// else{
//     echo"not inserted";
// }
// $query="INSERT INTO `transaction` VALUES 
// `username` = '$username',
// `emailid` = '$emailid',
// `password`='$password';
// $details=mysqli_query($connection,$query);
// if($details){
//     echo "Details inserted";
// }
// else{
//     echo"not inserted";
// }
?>

  <script src="index.js"></script>
</body>

</html>
