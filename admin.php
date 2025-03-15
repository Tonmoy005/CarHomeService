<!DOCTYPE html>
<html>
 
<head>
  <title>Admin Panel</title>
</head>
 
<body>
  <h1>Admin Panel</h1>
  <fieldset>
    <legend>Dashboard</legend>
    <p>Overview of total registrations and service requests.</p>
    <label for="total_bookings">Total Bookings:</label>
    <input type="number" id="total_bookings" name="total_bookings" readonly value="0">
  </fieldset>
 
  <fieldset>
    <legend>Payment Methods</legend>
    <form>
      <label for="payment_type">Payment Type:</label>
      <select id="payment_type" name="payment_type" required>
        <option value="Credit Card">Credit Card</option>
        <option value="Debit Card">Debit Card</option>
        <option value="PayPal">PayPal</option>
        <option value="Bank Transfer">Bank Transfer</option>
        <option value="Cash">Cash</option>
      </select>
 
      <label for="transaction_id">Transaction ID:</label>
      <input type="text" id="transaction_id" name="transaction_id" required>
 
      <button type="submit">Add Payment</button>
    </form>
  </fieldset>
 
  <fieldset>
    <legend>Manage Customers</legend>
    <form>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
 
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
 
      <label for="phone">Phone:</label>
      <input type="tel" id="phone" name="phone" required>
 
      <button type="submit">Add Customer</button>
    </form>
  </fieldset>
 
  <fieldset>
    <legend>Manage Vehicles</legend>
    <form>
      <label for="owner">Owner Name:</label>
      <input type="text" id="owner" name="owner" required>
 
      <label for="brand">Car Brand:</label>
      <input type="text" id="brand" name="brand" required>
 
      <label for="license">License Number:</label>
      <input type="text" id="license" name="license" required>
 
      <button type="submit">Add Vehicle</button>
    </form>
  </fieldset>
 
  <fieldset>
    <legend>Service Requests</legend>
    <form>
      <label for="customer">Customer Name:</label>
      <input type="text" id="customer" name="customer" required>
 
      <label for="vehicle">Vehicle:</label>
      <input type="text" id="vehicle" name="vehicle" required>
 
      <label for="status">Status:</label>
      <select id="status" name="status" required>
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
      <select id="report_type" name="report_type" required>
        <option value="customer">Customer Report</option>
        <option value="vehicle">Vehicle Report</option>
        <option value="service">Service Report</option>
      </select>
 
      <button type="submit">Generate Report</button>
    </form>
    <br>
    <p>This is a demo and under construction</p>
    <p>Creating by Kazi Roshid Ahammod Rohollah and Tonmoy sarker </p>
  </fieldset>
</body>
 
</html>