var total = document.getElementById('orderTotal').value;
window.alert(total)
paypal.Buttons({
    style: {
        color: 'blue',
        shape: 'pill'
    },
    createOrder: function (data, actions) {
        return actions.order.create({
            purchase_units: [{
                amount: {
                    value: '0.1'
                }
            }]
        });
    },
    onApprove: function (data, actions) {
        return actions.order.capture().then(function (details) {
            console.log(details)
            // window.location.replace("success.php")
            window.alert('Payment Success')
        })
    },
    onCancel: function (data) {
        // window.location.replace("Oncancel.php")
        window.alert('Payment Cancelled')
    }
}).render('#paypal-payment-button');