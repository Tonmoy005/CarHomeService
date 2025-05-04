<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <style>
        .error { color: red; margin-left: 10px; }
    </style>
</head>
<body>

<?php

$error_first_name = $error_last_name = $error_father_name = $error_dob = $error_gender = "";
$error_email = $error_phone = $error_post_office = $error_postal_code = $error_thana = $error_district = $error_division = "";
$error_current_address = $error_permanent_address = $error_car_brand = $error_license_number = $error_car_one_color = $error_car_service_count = "";
$success_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function clean_input($data) {
        return htmlspecialchars(stripslashes(trim($data)));
    }

    if (empty($_POST["first_name"])) { $error_first_name = "Invalid"; }
    else if (empty($_POST["last_name"])) { $error_last_name = "Invalid"; }
    else if (empty($_POST["father_name"])) { $error_father_name = "Invalid"; }
    else if (empty($_POST["dob"])) { $error_dob = "Invalid"; }
    else if (empty($_POST["gender"])) { $error_gender = "Invalid"; }
    else if (empty($_POST["email"])) { $error_email = "Invalid"; }
    else if (empty($_POST["phone"])) { $error_phone = "Invalid"; }
    else if (empty($_POST["post_office"])) { $error_post_office = "Invalid"; }
    else if (empty($_POST["postal_code"])) { $error_postal_code = "Invalid"; }
    else if (empty($_POST["thana"])) { $error_thana = "Invalid"; }
    else if (empty($_POST["district"])) { $error_district = "Invalid"; }
    else if (empty($_POST["division"])) { $error_division = "Invalid"; }
    else if (empty($_POST["current_address"])) { $error_current_address = "Invalid"; }
    else if (empty($_POST["permanent_address"])) { $error_permanent_address = "Invalid"; }
    else if (empty($_POST["car_brand"])) { $error_car_brand = "Invalid"; }
    else if (empty($_POST["license_number"])) { $error_license_number = "Invalid"; }
    else if (empty($_POST["car_one_color"])) { $error_car_one_color = "Invalid"; }
    else if (empty($_POST["car_service_count"])) { $error_car_service_count = "Invalid"; }

    else if (!preg_match("/^[a-zA-Z-' ]*$/", $_POST["first_name"])) { $error_first_name = "Invalid"; }
    else if (!preg_match("/^[a-zA-Z-' ]*$/", $_POST["last_name"])) { $error_last_name = "Invalid"; }
    else if (!preg_match("/^[a-zA-Z-' ]*$/", $_POST["father_name"])) { $error_father_name = "Invalid"; }
    else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) { $error_email = "Invalid"; }
    else if (!preg_match("/^[0-9]{10,15}$/", $_POST["phone"])) { $error_phone = "Invalid"; }

    else {
        $success_message = "<h3 style='color:green;'>Form submitted successfully!</h3>";
    }
}

echo $success_message;
?>

<h2>Register</h2>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" autocomplete="off" novalidate>
    <fieldset>
        <legend>Register</legend>

        <label>First Name:
            <input type="text" name="first_name" value="<?php echo isset($_POST['first_name']) ? htmlspecialchars($_POST['first_name']) : ''; ?>">
            <span class="error"><?php echo $error_first_name; ?></span>
        </label><br><br>

        <label>Last Name:
            <input type="text" name="last_name" value="<?php echo isset($_POST['last_name']) ? htmlspecialchars($_POST['last_name']) : ''; ?>">
            <span class="error"><?php echo $error_last_name; ?></span>
        </label><br><br>

        <label>Father's Name:
            <input type="text" name="father_name" value="<?php echo isset($_POST['father_name']) ? htmlspecialchars($_POST['father_name']) : ''; ?>">
            <span class="error"><?php echo $error_father_name; ?></span>
        </label><br><br>

        <label>Date of Birth:
            <input type="text" name="dob" value="<?php echo isset($_POST['dob']) ? htmlspecialchars($_POST['dob']) : ''; ?>">
            <span class="error"><?php echo $error_dob; ?></span>
        </label><br><br>

        <label>Gender:
            <input type="radio" name="gender" value="Male" <?php if(isset($_POST['gender']) && $_POST['gender']=="Male") echo "checked"; ?>> Male
            <input type="radio" name="gender" value="Female" <?php if(isset($_POST['gender']) && $_POST['gender']=="Female") echo "checked"; ?>> Female
            <span class="error"><?php echo $error_gender; ?></span>
        </label><br><br>

        <label>Email:
            <input type="text" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
            <span class="error"><?php echo $error_email; ?></span>
        </label><br><br>

        <label>Phone Number:
            <input type="text" name="phone" value="<?php echo isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : ''; ?>">
            <span class="error"><?php echo $error_phone; ?></span>
        </label><br><br>
    </fieldset>

    <fieldset>
        <legend>Address</legend>

        <label>Post Office:
            <input type="text" name="post_office" value="<?php echo isset($_POST['post_office']) ? htmlspecialchars($_POST['post_office']) : ''; ?>">
            <span class="error"><?php echo $error_post_office; ?></span>
        </label><br><br>

        <label>Postal Code:
            <input type="text" name="postal_code" value="<?php echo isset($_POST['postal_code']) ? htmlspecialchars($_POST['postal_code']) : ''; ?>">
            <span class="error"><?php echo $error_postal_code; ?></span>
        </label><br><br>

        <label>Thana:
            <select name="thana">
                <option value="">Select Thana</option>
                <option value="Monohardi" <?php if(isset($_POST['thana']) && $_POST['thana']=="Monohardi") echo "selected"; ?>>Monohardi</option>
                <option value="Shibpur" <?php if(isset($_POST['thana']) && $_POST['thana']=="Shibpur") echo "selected"; ?>>Shibpur</option>
                <option value="Narsingdi Sadar" <?php if(isset($_POST['thana']) && $_POST['thana']=="Narsingdi Sadar") echo "selected"; ?>>Narsingdi Sadar</option>
                <option value="Madhobdi" <?php if(isset($_POST['thana']) && $_POST['thana']=="Madhobdi") echo "selected"; ?>>Madhobdi</option>
            </select>
            <span class="error"><?php echo $error_thana; ?></span>
        </label><br><br>

        <label>District:
            <select name="district">
                <option value="">Select District</option>
                <option value="Narsingdi" <?php if(isset($_POST['district']) && $_POST['district']=="Narsingdi") echo "selected"; ?>>Narsingdi</option>
                <option value="Narayanganj" <?php if(isset($_POST['district']) && $_POST['district']=="Narayanganj") echo "selected"; ?>>Narayanganj</option>
                <option value="Dhaka" <?php if(isset($_POST['district']) && $_POST['district']=="Dhaka") echo "selected"; ?>>Dhaka</option>
                <option value="Gazipur" <?php if(isset($_POST['district']) && $_POST['district']=="Gazipur") echo "selected"; ?>>Gazipur</option>
            </select>
            <span class="error"><?php echo $error_district; ?></span>
        </label><br><br>

        <label>Division:
            <select name="division">
                <option value="">Select Division</option>
                <option value="Dhaka" <?php if(isset($_POST['division']) && $_POST['division']=="Dhaka") echo "selected"; ?>>Dhaka</option>
                <option value="Barishal" <?php if(isset($_POST['division']) && $_POST['division']=="Barishal") echo "selected"; ?>>Barishal</option>
                <option value="Chattagram" <?php if(isset($_POST['division']) && $_POST['division']=="Chattagram") echo "selected"; ?>>Chattagram</option>
                <option value="Khulna" <?php if(isset($_POST['division']) && $_POST['division']=="Khulna") echo "selected"; ?>>Khulna</option>
                <option value="Rajshahi" <?php if(isset($_POST['division']) && $_POST['division']=="Rajshahi") echo "selected"; ?>>Rajshahi</option>
                <option value="Rangpur" <?php if(isset($_POST['division']) && $_POST['division']=="Rangpur") echo "selected"; ?>>Rangpur</option>
            </select>
            <span class="error"><?php echo $error_division; ?></span>
        </label><br><br>

        <label>Current Address:
            <input type="text" name="current_address" value="<?php echo isset($_POST['current_address']) ? htmlspecialchars($_POST['current_address']) : ''; ?>">
            <span class="error"><?php echo $error_current_address; ?></span>
        </label><br><br>

        <label>Permanent Address:
            <input type="text" name="permanent_address" value="<?php echo isset($_POST['permanent_address']) ? htmlspecialchars($_POST['permanent_address']) : ''; ?>">
            <span class="error"><?php echo $error_permanent_address; ?></span>
        </label><br><br>
    </fieldset>

    <fieldset>
        <legend>Vehicle</legend>

        <label>Car Brand:
            <select name="car_brand">
                <option value="">Select Car Brand</option>
                <option value="Toyota" <?php if(isset($_POST['car_brand']) && $_POST['car_brand']=="Toyota") echo "selected"; ?>>Toyota</option>
                <option value="Volkswagen" <?php if(isset($_POST['car_brand']) && $_POST['car_brand']=="Volkswagen") echo "selected"; ?>>Volkswagen</option>
                <option value="Mercedes-Benz" <?php if(isset($_POST['car_brand']) && $_POST['car_brand']=="Mercedes-Benz") echo "selected"; ?>>Mercedes-Benz</option>
                <option value="BMW" <?php if(isset($_POST['car_brand']) && $_POST['car_brand']=="BMW") echo "selected"; ?>>BMW</option>
                <option value="Ford" <?php if(isset($_POST['car_brand']) && $_POST['car_brand']=="Ford") echo "selected"; ?>>Ford</option>
                <option value="General Motors (GM)" <?php if(isset($_POST['car_brand']) && $_POST['car_brand']=="General Motors (GM)") echo "selected"; ?>>General Motors (GM)</option>
                <option value="Honda" <?php if(isset($_POST['car_brand']) && $_POST['car_brand']=="Honda") echo "selected"; ?>>Honda</option>
                <option value="Tesla" <?php if(isset($_POST['car_brand']) && $_POST['car_brand']=="Tesla") echo "selected"; ?>>Tesla</option>
            </select>
            <span class="error"><?php echo $error_car_brand; ?></span>
        </label><br><br>

        <label>License Number:
            <input type="text" name="license_number" value="<?php echo isset($_POST['license_number']) ? htmlspecialchars($_POST['license_number']) : ''; ?>">
            <span class="error"><?php echo $error_license_number; ?></span>
        </label><br><br>

        <label>Car One Color:
            <select name="car_one_color">
                <option value="">Select Color</option>
                <option value="White" <?php if(isset($_POST['car_one_color']) && $_POST['car_one_color']=="White") echo "selected"; ?>>White</option>
                <option value="Black" <?php if(isset($_POST['car_one_color']) && $_POST['car_one_color']=="Black") echo "selected"; ?>>Black</option>
                <option value="Gray" <?php if(isset($_POST['car_one_color']) && $_POST['car_one_color']=="Gray") echo "selected"; ?>>Gray</option>
                <option value="Silver" <?php if(isset($_POST['car_one_color']) && $_POST['car_one_color']=="Silver") echo "selected"; ?>>Silver</option>
                <option value="Blue" <?php if(isset($_POST['car_one_color']) && $_POST['car_one_color']=="Blue") echo "selected"; ?>>Blue</option>
                <option value="Red" <?php if(isset($_POST['car_one_color']) && $_POST['car_one_color']=="Red") echo "selected"; ?>>Red</option>
            </select>
            <span class="error"><?php echo $error_car_one_color; ?></span>
        </label><br><br>

        <label>How many cars do you need to service?:
            <input type="text" name="car_service_count" value="<?php echo isset($_POST['car_service_count']) ? htmlspecialchars($_POST['car_service_count']) : ''; ?>">
            <span class="error"><?php echo $error_car_service_count; ?></span>
        </label><br><br>
    </fieldset>

    <button type="submit"><b>Submit</b></button>
</form>

</body>
</html>