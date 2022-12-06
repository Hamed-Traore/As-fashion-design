<?php

include('../controllers/cart_controller.php');
include('../settings/core.php');

/**
 * CODE FOR PAYMENT
 */
$ref=$_GET['reference'];

// echo $ref;
// echo $ref.' '.$booking_id.' '.$user_id;


  $curl = curl_init();

  

  curl_setopt_array($curl, array(

    CURLOPT_URL => "https://api.paystack.co/transaction/verify/".$ref,

    CURLOPT_RETURNTRANSFER => true,

    CURLOPT_ENCODING => "",

    CURLOPT_MAXREDIRS => 10,

    CURLOPT_TIMEOUT => 30,

    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,

    CURLOPT_CUSTOMREQUEST => "GET",

    CURLOPT_HTTPHEADER => array(

      "Authorization: Bearer sk_test_87b59dfe9652d4a35f8e821dd4a4dd9e5946491a",

      "Cache-Control: no-cache",

    ),

  ));

  $response = curl_exec($curl);
  $err = curl_error($curl);
  
  curl_close($curl);
  if ($err) {

    echo "cURL Error #:" . $err;

  } else {

    
    $result= json_decode($response);
    
    if($result->status==true){
        echo "payment successful";
        $invoice_no=mt_rand();
        $order_status='on hold';
        $order_date=date('Y-m-d');
        $order= add_order_controller($user_id,$invoice_no,$order_date,$order_status);
        // echo '<br>';
        // var_dump($order);
        // echo '<br>';
        // echo 'this is order id: '.$order;
        // echo '<br>';

        if ($order) {
            //save payment details
            $amt= $result->data->amount/100;
            $order_id=$order;
            $currency= 'GHS';
            $date=$result->data->paid_at;
            $payment= payment_controller($amt,$user_id,$order_id,$currency,$date);
            echo '<br>';
            // var_dump($payment);
            if ($payment) {
            // empty cart
            emptycard_controller($user_id);
            header("Location: ../view/customer_dashboard.php?msg= Payment was successfull");
            }else {
            echo 'payment failled';
            }
        }else {
            echo "Order failled 1";
        }

    }
    else{
        echo 'transaction failled';
    }

  }
  


?>