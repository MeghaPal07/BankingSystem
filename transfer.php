<html>
<body bgcolor="#8c92ac">
<?php
$connection=mysqli_connect("sql106.epizy.com","epiz_30024289","3KXYWcEmyhWVG");
$db=mysqli_select_db($connection,'epiz_30024289_bank');

if (isset($_POST['transferfund'])) {
    $from_account_num = mysqli_real_escape_string($connection,$_POST['fromaccount']);
    $to_account_num = mysqli_real_escape_string($connection,$_POST['toaccount']);
    $transfer_amount = mysqli_real_escape_string($connection,$_POST['amount']);

    //search for account existance and balance
    $search = "SELECT * FROM bank WHERE acc=$from_account_num LIMIT 1";
    $search_result = mysqli_query($connection,$search);
    $row = mysqli_num_rows($search_result);
    $result = mysqli_fetch_assoc($search_result);
    
    #if account is found
    if ($row > 0) {
        //Check for insufficient balance or 0 balance
        if (($result['bal'] == 0) OR ($result['bal'] <= $transfer_amount)) {
            echo "<script> alert('Insufficient Balance!'); </script>";
            redirectPage();
        }else {
            #Send if sufficient money is present
            $find_to_account = "SELECT * FROM bank WHERE acc=$to_account_num LIMIT 1"; 
            $search_acc = mysqli_query($connection,$find_to_account);
            $to_result = mysqli_fetch_assoc($search_acc);

            #if we get values successfully
            if ($to_result) {
                #adding money
                $total_amount_after_add = $to_result['bal'] + $transfer_amount;
                 #funds are added query
                 $add_fund = "UPDATE bank SET bal=$total_amount_after_add WHERE acc=$to_account_num";
                 $done_adding_fund = mysqli_query($connection,$add_fund);
                #subtracting money
                $total_amount_after_subtract = $result['bal'] - $transfer_amount;
                #funds are subtracted query
                $subtract_fund = "UPDATE bank SET bal=$total_amount_after_subtract WHERE acc=$from_account_num ";
                $done_subtracting_fund = mysqli_query($connection,$subtract_fund);
                //ADD RECORD TO THE TRANSACTION HISTORY TABLE
                date_default_timezone_set('Asia/Kolkata');
                $current_time = date("Y-m-d");
                $add_trans_record = "INSERT INTO  transaction_history (`from_account`, `to_account`, `transfer_amount`, `date`) VALUES ('$from_account_num', '$to_account_num', '$transfer_amount', '$current_time')";
                mysqli_query($connection,$add_trans_record);

                //IF FUND ADDED SUCCESSFULLY
                if ($done_adding_fund && $done_subtracting_fund) {
                    echo "<script> alert('Fund Transfered Successfully!'); </script>";


                    
                    
                }else{
                    echo "<script>alert('Fund Transfered Failed!');</script>";
                    
                }
            }
        }
    }else{
        #if account is not found
        echo "<script>alert('Customer Not Found!');</script>";
        
    }
}//end of submit button
?>
<h3><a href="customer6.php">Customer list</a></h3>
</body>
</html>