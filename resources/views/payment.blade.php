<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
    }

    .floating-button {
        height: 55px;
        width: 55px;
            position: fixed;
            bottom: 30px; /* Adjust the bottom distance as per your preference */
            right: 40px; /* Adjust the right distance as per your preference */
            background-color: #2c1e7e; /* Set the background color of the button */
            color: #fff; /* Set the text color */
            padding: 15px 20px; /* Adjust the padding as per your button size */
            border-radius: 50%; /* Make the button round */
            text-decoration: none; /* Remove underline */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.8); /* Add a shadow effect */
            z-index: 9999; /* Ensure the button appears above other elements */
            transition: 0.6s ease;
        }
        .floating-button:hover {       
  opacity: 0.8; /* Reduce opacity on hover */
}
    .container {
    
      width: 70%;
      margin: 100px auto;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .header {
      text-align: center;
      margin-bottom: 20px;
    }

    .header h2 {

      color: #333;
      font-size: 24px;
      margin-top: 40px;
      margin-bottom: 70px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .form-group input[type="text"],
    .form-group input[type="number"] {
      width: 95%;
      padding: 10px;
      font-size: 16px;
      border-radius: 4px;
      border: 1px solid #ccc;
      margin-right: 10px;
    }

    .payment-options {
      margin-bottom: 20px;
    }

    .payment-option label {
      display: inline-block;
      margin-right: 10px;
    }

    .payment-option input[type="radio"] {
      display: none;
    }

    .payment-option .payment-label {
      display: inline-block;
      padding: 10px 20px;
      font-size: 16px;
      border-radius: 4px;
      border: 1px solid #ccc;
      cursor: pointer;
    }

    .payment-option .payment-label:hover {
      background-color: #f5f5f5;
    }

    .payment-option input[type="radio"]:checked + .payment-label {
      background-color: #007bff;
      color: #fff;
      border-color: #007bff;
    }

    .submit-btn {
      display: block;
      width: 100%;
      padding: 10px;
      background-color: #007bff;
      color: #fff;
      font-size: 16px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .submit-btn:hover {
      background-color: #0056b3;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="header">
      <h2>Payment Form</h2>
    </div>
    <form>
      <div class="form-group">
        <label for="transaction_id">Transaction ID</label>
        <input type="text" id="transaction_id" name="transaction_id" required>
      </div>
      <div class="form-group">
        <label for="customer_name">Customer Name</label>
        <input type="text" id="customer_name" name="customer_name" required>
      </div>
      <div class="form-group">
        <label for="mobile_number">Mobile Number</label>
        <input type="number" id="mobile_number" name="mobile_number" required>
      </div>
      <div class="payment-options">
        <label class="payment-option">
          <input type="radio" name="payment_option" value="bkash" required>
          <span class="payment-label">bKash</span>
        </label>
        <label class="payment-option">
          <input type="radio" name="payment_option" value="nagad" required>
          <span class="payment-label">Nagad</span>
        </label>
        <label class="payment-option">
          <input type="radio" name="payment_option" value="credit-card" required>
          <span class="payment-label">Credit Card</span>
        </label>
      </div>
      <button type="submit" class="submit-btn" value="Save">Make Payment</button>
    </form>
  </div>

  <a href="{{ route('dashboard') }}"> <button class="floating-button"><img src="images/dashboard.png" alt="" style="height: 15px; width: 15px;"></button></a>

</body>

</html>
