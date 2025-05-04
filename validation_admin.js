<!DOCTYPE html>
<html>
 
<head>
 <title>Admin Panel</title>
 <link rel="stylesheet" href="style_admin.css"> 
 <script>
    function validateTotalBookings() {
        var totalBookings = document.getElementById("total_bookings").value;
        var errorMessage = document.getElementById("totalBookingsError");
        if (totalBookings < 0) {
            errorMessage.innerHTML = "Total bookings cannot be negative.";
            return false;
        }
        errorMessage.innerHTML = "";
        return true;
    }

    function validatePayment(event) {
        var transactionID = document.getElementById("transaction_id").value;
        var errorMessage = document.getElementById("paymentError");
        if (transactionID.trim() === "") {
            errorMessage.innerHTML = "Transaction ID cannot be empty.";
            event.preventDefault();
            return false;
        }
        errorMessage.innerHTML = "";
        return true;
    }

    function validateCustomer(event) {
        var customerName = document.getElementById("name").value;
        var errorMessage = document.getElementById("customerError");
        if (customerName.trim() === "") {
            errorMessage.innerHTML = "Customer name cannot be empty.";
            event.preventDefault();
            return false;
        }
        errorMessage.innerHTML = "";
        return true;
    }

    function validateVehicle(event) {
        var ownerName = document.getElementById("owner").value;
        var errorMessage = document.getElementById("vehicleError");
        if (ownerName.trim() === "") {
            errorMessage.innerHTML = "Vehicle owner's name cannot be empty.";
            event.preventDefault();
            return false;
        }
        errorMessage.innerHTML = "";
        return true;
    }

    function validateServiceRequest(event) {
        var customerName = document.getElementById("customer").value;
        var errorMessage = document.getElementById("serviceError");
        if (customerName.trim() === "") {
            errorMessage.innerHTML = "Customer name for service request cannot be empty.";
            event.preventDefault();
            return false;
        }
        errorMessage.innerHTML = "";
        return true;
    }

    function validateForms(event) {
        var isValid = true;
        isValid &= validateTotalBookings();
        isValid &= validatePayment(event);
        isValid &= validateCustomer(event);
        isValid &= validateVehicle(event);
        isValid &= validateServiceRequest(event);
        return isValid;
    }
 </script>
</head>
 
<body>
 <h1>Admin Panel</h1>

 <fieldset>
 <legend>Dashboard</legend>
 <p>Overview of total registrations and service requests.</p>
 <label for="total_bookings">Total Bookings:</label>
 <input type="number" id="total_bookings" name="total_bookings" value="0" oninput="validateTotalBookings()">
 <div id="totalBookingsError" style="color: red;"></div>
 </fieldset>
 
 <fieldset>
 <legend>Payment Methods</legend>
 <form onsubmit="return validatePayment(event)">
 <label for="payment_type">Payment Type:</label>
 <select id="payment_type" name="payment_type">
  <option value="Credit Card">Credit Card</option>
  <option value="Debit Card">Debit Card</option>
  <option value="PayPal">PayPal</option>
  <option value="Bank Transfer">Bank Transfer</option>
  <option value="Cash">Cash</option>
 </select>
 
 <label for="transaction_id">Transaction ID:</label>
 <input type="text" id="transaction_id" name="transaction_id">
 <div id="paymentError" style="color: red;"></div>
 
 <button type="submit">Add Payment</button>
 </form>
 </fieldset>
 
 <fieldset>
 <legend>Manage Customers</legend>
 <form onsubmit="return validateCustomer(event)">
 <label for="name">Name:</label>
 <input type="text" id="name" name="name">
 <div id="customerError" style="color: red;"></div>
 
 <label for="email">Email:</label>
 <input type="email" id="email" name="email">
 
 <label for="phone">Phone:</label>
 <input type="tel" id="phone" name="phone">
 
 <button type="submit">Add Customer</button>
 </form>
 </fieldset>
 
 <fieldset>
 <legend>Manage Vehicles</legend>
 <form onsubmit="return validateVehicle(event)">
 <label for="owner">Owner Name:</label>
 <input type="text" id="owner" name="owner">
 <div id="vehicleError" style="color: red;"></div>

 <label for="brand">Car Brand:</label>
 <input type="text" id="brand" name="brand">
 
 <label for="license">License Number:</label>
 <input type="text" id="license" name="license">
 
 <button type="submit">Add Vehicle</button>
 </form>
 </fieldset>
 
 <fieldset>
 <legend>Service Requests</legend>
 <form onsubmit="return validateServiceRequest(event)">
 <label for="customer">Customer Name:</label>
 <input type="text" id="customer" name="customer">
 <div id="serviceError" style="color: red;"></div>

 <label for="vehicle">Vehicle:</label>
 <input type="text" id="vehicle" name="vehicle">
 
 <label for="status">Status:</label>
 <select id="status" name="status">
  <option value="Pending">Pending</option>
  <option value="Approved">Approved</option>
  <option value="Rejected">Rejected</option>
 </select>
 
 <button type="submit">Add Service Request</button>
 </form>
 </fieldset>
 
 <fieldset>
 <legend>Reports</legend>
 <form>
 <label for="report_type">Report Type:</label>
 <select id="report_type" name="report_type">
  <option value="customer">Customer Report</option>
  <option value="vehicle">Vehicle Report</option>
  <option value="service">Service Report</option>
 </select>

 <button type="submit">Generate Report</button>
 </form>
 <br>
 <p>This is a demo and under construction</p>
 <p>Creating by Kazi Roshid Ahammod Rohollah and Tonmoy Kumar Sarker</p>
 </fieldset>
</body>
 
</html>
