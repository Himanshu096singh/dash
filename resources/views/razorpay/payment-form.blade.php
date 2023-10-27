<!DOCTYPE html>
<html>
<head>
    <title>Razorpay Payment Popup</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

<h1>Razorpay Payment</h1>
<div id="payment-response"></div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- Include the Razorpay JavaScript SDK -->
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    var options = {
        key: "{{ env('RAZORPAY_KEY') }}",
        amount: {{ $order->amount }},
        currency: 'USD',
        name: 'Heart Of Yoga',
        description: 'Payment for your product',
        order_id: '{{ $order->id }}',
        handler: function (response) {
            sendPaymentResponse(response)

            // Send the payment response to a controller method
            
        }
    };

    var rzp = new Razorpay(options);

    // Open the Razorpay popup when the button is clicked
    window.onload = function () {
        rzp.open();
    };
    
    function sendPaymentResponse(response) {
        console.log(response)


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "/handle-razorpay-response",
            type: "POST",
            data: { response: response },
            success: function (data) {
                console.log(data);
                $('#payment-response').html(data);
            },
            error: function (xhr, status, error) {
                console.error(error);
            }
        });

        console.log("ends")
    }

</script>

</body>
</html>