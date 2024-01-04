<?php
session_start();
include('includes/config.php');
?>




<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Form </title>
   </head>
   <style >
      body{
      background-color: skyblue;
      }
   </style>
   <body>
    
<?php 

$query=mysqli_query($con,"select products.*,orders.paymentMethod as paymethod,products.productPrice as price from orders join products on orders.productId=products.id where orders.paymentMethod='incomplete'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{?>
      <p id="demo"></p>
      <center>
         <div>
            <fieldset style="width: 400px; height: 300px; background-color: white;">
               <label style="padding-top: 200px;color:red;">Pay Online</label>
               <br>
               <div class = "myprice">
               <label style="padding-top: 200px;color:red;">Total Amount Ksh</label>
               <input class="input2" id = "demo2" readonly= "readonly" name="amount" value = "<?php echo $row['price']?>" style="margin-top: 60px;" >
               <br><br>
   </div>
               <div id="paypal-button-container"></div>
            </fieldset>
   </div>
      </center>
      </div>
      <?php } ?>

       <script src="https://www.paypal.com/sdk/js?client-id=ASImW0gAzs__VbM8vsXPJf44U0x7RA9vAL8OjAv1jptzIon977affUdGEYpcZZsG9LaUt1-6mO04dxrY&disable-funding=credit,card"></script>

 <script>
var value1 =document.getElementById("demo2").value;

var value2 = value1/140;
var value3 = value2.toFixed(2);
var value4= parseFloat(value3);
//document.write(value4)
       
paypal.Buttons({

style:{
    shape:'pill'
},
createOrder:function(data, actions){
    return actions.order.create({
        purchase_units:[{
            amount:{
                value:value4
            }
        }]
    });
},
onApprove:function(data, actions){
    return actions.order.capture().then(function(details){
        alert("Payment made successefully!")
        window.location.replace('http://localhost/sokoni/paypal-payment-success.php')
        

    })
//login emails for Business:sb-9zy2m28250560@business.example.com
//login emails for personal:sb-gopp4328250783@personal.example.com
},
onCancel:function(data){
    alert("Transactions got Cancelled!")
    window.location.replace('http://localhost/sokoni/pending-orders.php')
  
}
}).render('#paypal-button-container')
       </script> 
   </body>
</html>

