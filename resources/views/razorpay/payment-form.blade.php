<!DOCTYPE html>
<html>
<head>
    <title>Razorpay Payment Popup</title>
</head>
<body>

<h1>Razorpay Payment Popup</h1>

<button id="openRazorpayPopup">Open Razorpay Popup</button>
<div id="payment-response"> </div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<!-- Include the Razorpay JavaScript SDK -->
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    var options = {
        key: "{{ env('RAZORPAY_KEY') }}",
        amount: {{ $order->amount }},
        currency: 'INR',
        name: 'Your Company Name',
        description: 'Payment for your product',
        order_id: '{{ $order->id }}',
        handler: function (response) {
            console.log(response);

            // Send the payment response to a controller method
            $.ajax({
                url: '{{ route("handle-razorpay-response") }}',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    response: response
                },
                success: function (data) {
                    console.log(data);
                    // Update the view with the response from the controller
                    $('#payment-response').html(data);
                }
            });
        }
    };

    var rzp = new Razorpay(options);

    // Open the Razorpay popup when the button is clicked
    window.onload = function () {
        rzp.open();
    };
    
    function sendPaymentResponse(response) {
        // Send the payment response to a controller method
        $.ajax({
            url: '{{ route("handle-razorpay-response") }}',
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                response: response
            },
            success: function (data) {
                console.log("response"+data)
                // Update the view with the response from the controller
                $('#payment-response').html(data);
            }
        });
    }

</script>

</body>
</html>