<!DOCTYPE html>
<html>

<head>
    <title>Registration Form</title>
</head>

<body>
    <h2>Register</h2>
    <form method="POST" action="" autocomplete="on">
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" autocomplete="on" novalidate>

        <fieldset>
            <legend>Register</legend>
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" ><br><br>

            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" ><br><br>

            <label for="father_name">Father's Name:</label>
            <input type="text" id="father_name" name="father_name" ><br><br>

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required autocomplete="bday"><br><br>

            <label>Gender:</label>
            <input type="radio" id="male" name="gender" value="Male" > <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="Female"> <label for="female">Female</label><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email"><br><br>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" ><br><br>
        </fieldset>

        <fieldset>
            <legend>Address</legend>
            <label for="post_office">Post Office:</label>
            <input type="text" id="post_office" name="post_office" ><br><br>

            <label for="postal_code">Postal Code:</label>
            <input type="text" id="postal_code" name="postal_code"><br><br>

            <label for="thana">Thana:</label>
            <select id="thana" name="thana" required>
                <option value="">Select Thana</option>
                <option value="Monohardi">Monohardi</option>
                <option value="Shibpur">Shibpur</option>
                <option value="Narsingdi Sadar">Narsingdi Sadar</option>
                <option value="Madhobdi">Madhobdi</option>
            </select><br><br>

            <label for="district">District:</label>
            <select id="district" name="district" required>
                <option value="">Select District</option>
                <option value="Narsingdi">Narsingdi</option>
                <option value="Narayanganj">Narayanganj</option>
                <option value="Dhaka">Dhaka</option>
                <option value="Gazipur">Gazipur</option>
            </select><br><br>

            <label for="division">Division:</label>
            <select id="division" name="division" required>
                <option value="">Select Division</option>
                <option value="Dhaka">Dhaka</option>
                <option value="Barishal">Barishal</option>
                <option value="Chattagram">Chattagram</option>
                <option value="Khulna">Khulna</option>
                <option value="Rajshahi">Rajshahi</option>
                <option value="Rangpur">Rangpur</option>
            </select><br><br>

            <label for="current_address">Current Address:</label>
            <input type="text" id="current_address" name="current_address" ><br><br>

            <label for="permanent_address">Permanent Address:</label>
            <input type="text" id="permanent_address" name="permanent_address" ><br><br>
        </fieldset>

        <fieldset>
            <legend>Vehicle</legend>
            <label for="car_brand">Car Brand:</label>
            <select id="car_brand" name="car_brand" required>
                <option value="">Select Car Brand</option>
                <option value="Toyota">Toyota</option>
                <option value="Volkswagen">Volkswagen</option>
                <option value="Mercedes-Benz">Mercedes-Benz</option>
                <option value="BMW">BMW</option>
                <option value="Ford">Ford</option>
                <option value="General Motors (GM)">General Motors (GM)</option>
                <option value="Honda">Honda</option>
                <option value="Tesla">Tesla</option>
            </select><br><br>

            <label for="license_number">License Number:</label>
            <input type="text" id="license_number" name="license_number"><br><br>

            <label for="car_one_color">Car One Color:</label>
            <select id="car_one_color" name="car_one_color" >
                <option value="">Select Color</option>
                <option value="White">White</option>
                <option value="Black">Black</option>
                <option value="Gray">Gray</option>
                <option value="Silver">Silver</option>
                <option value="Blue">Blue</option>
                <option value="Red">Red</option>
            </select><br><br>

            <label for="car_service_count">How many cars do you need to service?</label>
            <input type="number" id="car_service_count" name="car_service_count" min="1" required><br><br>

            <p>Note: After submitting this form, our service provider will call you.</p>
            <p> Thank you for taking our service.</p>
        </fieldset>

        <button type="submit"><b>Submit</b></button>
    </form>
</body>

</html>