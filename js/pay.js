
const paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener("submit", payWithPaystack, false);
function payWithPaystack(e) {
  e.preventDefault();

  let handler = PaystackPop.setup({
    key: 'pk_test_82e3976028166f3bd4530c66c892c21fd94e985b', // Replace with your public key
    email: document.getElementById("email-address").value,
    amount: document.getElementById("amount").value * 100,
    currency: 'GHS',
    ref: ''+Math.floor(Math.random() * 100000000  + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
      alert('Transaction was not completed, window closed.');
    },

    callback: function(response){
      // last_id =document.getElementById("last_id").value;
      // user_id =document.getElementById("user_id").value;
       //this happens after the payment is completed successfully
      //  let message = "Payment complete! Reference:" + response.reference;
      //  alert(message);
       // Make an AJAX call to your server with the reference to verify the transaction
       window.location = "../actions/process_payment.php?reference="+ response.reference;
      // $.ajax({
      //   url: 'processing.php/verify_transaction?reference='+ response.reference,
      //   method: 'get',
      //   success: function (response) {
      //     // the transaction status is in response.data.status
      //     alert(response);
      //   }
      // });
    }
  });

  handler.openIframe();
}