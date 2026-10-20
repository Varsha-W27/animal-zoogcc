<style>
/* style.css */

/* General styles */
body {
    font-family: 'Roboto', sans-serif;
    background: url('background.jpg') no-repeat center center fixed;
    background-size: cover;
    color: #333;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    max-width: 600px;
    margin: 20px;
    padding: 20px;
    background-color: rgba(255, 255, 255, 0.9);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    text-align: center;
}

h1 {
    font-size: 2em;
    color: #37474f;
    margin-bottom: 20px;
}

h2 {
    font-size: 1.5em;
    color: #37474f;
    margin-bottom: 20px;
}

.payment-form {
    padding: 20px;
    text-align: left;
}

.payment-method {
    margin-bottom: 20px;
}

.payment-method label, .payment-details label {
    font-size: 1.1em;
    margin-bottom: 5px;
    color: #37474f;
}

.payment-method select, .payment-details input[type="text"], .payment-details select {
    width: calc(100% - 20px);
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 1em;
    color: #37474f;
}

input[type="submit"] {
    width: 100%;
    padding: 15px;
    background-color: #1e88e5;
    color: #ffffff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 1.2em;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #1565c0;
}

.payment-details {
    margin-top: 10px;
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <link rel="stylesheet" href="sto.css" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Payment Gateway</h1>
        <div class="payment-form">
            <h2>Select Payment Method</h2>
            <form action="#" method="post">
                <div class="payment-method">
                    <label for="payment_method">Payment Method:</label>
                    <select id="payment_method" name="payment_method" onchange="showDetails(this.value)">
                        <option value="">Select</option>
                        <option value="upi">UPI</option>
                        <option value="net_banking">Net Banking</option>
                        <option value="debit_card">Debit Card</option>
                    </select>
                </div>

                <!-- UPI Payment Details -->
                <div id="upi_details" class="payment-details" style="display:none;">
                    <label for="upi_id">Enter UPI ID:</label>
                    <input type="text" id="upi_id" name="upi_id" placeholder="example@upi">
                </div>

                <!-- Net Banking Payment Details -->
                <div id="net_banking_details" class="payment-details" style="display:none;">
                    <label for="bank_name">Select Bank:</label>
                    <select id="bank_name" name="bank_name">
                        <option value="bank1">Bank 1</option>
                        <option value="bank2">Bank 2</option>
                        <option value="bank3">Bank 3</option>
                    </select>
                </div>

                <!-- Debit Card Payment Details -->
                <div id="debit_card_details" class="payment-details" style="display:none;">
                    <label for="card_number">Card Number:</label>
                    <input type="text" id="card_number" name="card_number" placeholder="1234 5678 9123 4567">
                    <label for="expiry_date">Expiry Date:</label>
                    <input type="text" id="expiry_date" name="expiry_date" placeholder="MM/YY">
                    <label for="cvv">CVV:</label>
                    <input type="text" id="cvv" name="cvv" placeholder="123">
                </div>

                <input type="submit" value="Pay Now">
            </form>
        </div>
    </div>
    <script>
        function showDetails(paymentMethod) {
            document.getElementById('upi_details').style.display = paymentMethod === 'upi' ? 'block' : 'none';
            document.getElementById('net_banking_details').style.display = paymentMethod === 'net_banking' ? 'block' : 'none';
            document.getElementById('debit_card_details').style.display = paymentMethod === 'debit_card' ? 'block' : 'none';
        }
    </script>
</body>
</html>