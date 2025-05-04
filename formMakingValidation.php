<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <style>
        .error { color: red; }
    </style>
</head>
<body>

<?php
$first_name = $last_name = $father_name = $dob = $gender = $email = $phone = "";
$post_office = $postal_code = $thana = $district = $division = "";
$current_address = $permanent_address = $car_brand = $license_number = $car_one_color = $car_service_count = "";
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["first_name"])) {
        $errors[] = "First Name is required";
    } else {
        $first_name = clean_input($_POST["first_name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $first_name)) {
            $errors[] = "Only letters and spaces allowed in First Name";
        }
    }

    if (empty($_POST["last_name"])) {
        $errors[] = "Last Name is required";
    } else {
        $last_name = clean_input($_POST["last_name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $last_name)) {
            $errors[] = "Only letters and spaces allowed in Last Name";
        }
    }

    if (empty($_POST["father_name"])) {
        $errors[] = "Father's Name is required";
    } else {
        $father_name = clean_input($_POST["father_name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $father_name)) {
            $errors[] = "Only letters and spaces allowed in Father's Name";
        }
    }

    if (empty($_POST["dob"])) {
        $errors[] = "Date of Birth is required";
    } else {
        $dob = $_POST["dob"];
    }

    if (empty($_POST["gender"])) {
        $errors[] = "Gender is required";
    } else {
        $gender = $_POST["gender"];
    }

    if (empty($_POST["email"])) {
        $errors[] = "Email is required";
    } else {
        $email = clean_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email format";
        }
    }

    if (empty($_POST["phone"])) {
        $errors[] = "Phone Number is required";
    } else {
        $phone = clean_input($_POST["phone"]);
        if (!preg_match("/^[0-9]{10,15}$/", $phone)) {
            $errors[] = "Phone number must be 10-15 digits";
        }
    }

    $post_office = clean_input($_POST["post_office"]);
    $postal_code = clean_input($_POST["postal_code"]);
    $thana = clean_input($_POST["thana"]);
    $district = clean_input($_POST["district"]);
    $division = clean_input($_POST["division"]);
    $current_address = clean_input($_POST["current_address"]);
    $permanent_address = clean_input($_POST["permanent_address"]);
    $car_brand = clean_input($_POST["car_brand"]);
    $license_number = clean_input($_POST["license_number"]);
    $car_one_color = clean_input($_POST["car_one_color"]);
    $car_service_count = clean_input($_POST["car_service_count"]);

    if (empty($errors)) {
        echo "<h3 style='color:green;'>Form submitted successfully!</h3>";
    } else {
        echo "<h3 class='error'>Please fix the following errors:</h3><ul class='error'>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
    }
}

function clean_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}
?>

<h2>Register</h2>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" autocomplete="on">
    <!-- Insert your form HTML fields here -->
    <fieldset>
        <legend>Register</legend>
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required autocomplete="given-name"><br><br>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required autocomplete="family-name"><br><br>

        <label for="father_name">Father's Name:</label>
        <input type="text" id="father_name" name="father_name" required autocomplete="off"><br><br>

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required autocomplete="bday"><br><br>

        <label>Gender:</label>
        <input type="radio" id="male" name="gender" value="Male" required> <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="Female" required> <label for="female">Female</label><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required autocomplete="email"><br><br>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required autocomplete="tel"><br><br>
    </fieldset>

    <fieldset>
        <legend>Address</legend>
        <label for="post_office">Post Office:</label>
        <input type="text" id="post_office" name="post_office" required autocomplete="off"><br><br>

        <label for="postal_code">Postal Code:</label>
        <input type="text" id="postal_code" name="postal_code" required autocomplete="postal-code"><br><br>

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
        <input type="text" id="current_address" name="current_address" required autocomplete="street-address"><br><br>

        <label for="permanent_address">Permanent Address:</label>
        <input type="text" id="permanent_address" name="permanent_address" required autocomplete="street-address"><br><br>
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
        <input type="text" id="license_number" name="license_number" required><br><br>

        <label for="car_one_color">Car One Color:</label>
        <select id="car_one_color" name="car_one_color" required>
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
        <p>Thank you for taking our service.</p>
    </fieldset>

    <button type="submit"><b>Submit</b></button>
</form>

</body>
</html>