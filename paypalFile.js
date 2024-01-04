var value =document.getElementById("demo2").value;
 document.write(value);
document.write("yrgehhhhhg");
paypal.Buttons({

    style:{
        shape:'pill'
    },
    createOrder:function(data, actions){
        return actions.order.create({
            purchase_units:[{
                amount:{
                    value:'0.1'
                }
            }]
        });
    },
    onApprove:function(data, actions){
        return actions.order.capture().then(function(details){
            //window.location.replace('https://localhost/sokoni/success.php')
            alert("Payment made successefully!")

        })
 //login emails for Business:sb-9zy2m28250560@business.example.com
 //login emails for personal:sb-gopp4328250783@personal.example.com
    },
    onCancel:function(data){
       // window.location.replace('https://localhost/sokoni/cancel.php')
       alert("Transactions got Cancelled!")
    }
}).render('#paypal-button-container')