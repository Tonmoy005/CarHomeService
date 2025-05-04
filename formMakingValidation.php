<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>

<?php
$errors = [];
$firstName = $lastName = $fatherName = $dob = $gender = "";
$email = $phone = $postOffice = $postalCode = $thana = "";
$district = $division = $currentAddress = $permanentAddress = "";
$carBrand = $licenseNumber = $carColor = $carServiceCount = "";

function clean($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["first_name"])) {
        $errors[] = "Please enter your first name.";
    } else {
        $firstName = clean($_POST["first_name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $firstName)) {
            $errors[] = "First name can only contain letters and spaces.";
        }
    }

    if (empty($_POST["last_name"])) {
        $errors[] = "Please enter your last name.";
    } else {
        $lastName = clean($_POST["last_name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $lastName)) {
            $errors[] = "Last name can only contain letters and spaces.";
        }
    }

    if (empty($_POST["father_name"])) {
        $errors[] = "Please enter your father's name.";
    } else {
        $fatherName = clean($_POST["father_name"]);
    }

    if (empty($_POST["dob"])) {
        $errors[] = "Please enter your date of birth.";
    } else {
        $dob = $_POST["dob"];
        if (!preg_match("/^\d{4}-\d{2}-\d{2}$/", $dob)) {
            $errors[] = "Date of birth format is invalid.";
        }
    }

    if (empty($_POST["gender"])) {
        $errors[] = "Please select your gender.";
    } else {
        $gender = $_POST["gender"];
        if ($gender !== "Male" && $gender !== "Female") {
            $errors[] = "Invalid gender selected.";
        }
    }

    if (empty($_POST["email"])) {
        $errors[] = "Please enter your email.";
    } else {
        $email = clean($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Email address is not valid.";
        }
    }

    if (empty($_POST["phone"])) {
        $errors[] = "Please enter your phone number.";
    } else {
        $phone = clean($_POST["phone"]);
        if (!preg_match("/^[0-9]{10,15}$/", $phone)) {
            $errors[] = "Phone number should be 10 to 15 digits.";
        }
    }

    if (empty($_POST["post_office"])) {
        $errors[] = "Please enter your post office.";
    } else {
        $postOffice = clean($_POST["post_office"]);
    }

    if (empty($_POST["postal_code"])) {
        $errors[] = "Please enter your postal code.";
    } else {
        $postalCode = clean($_POST["postal_code"]);
        if (!preg_match("/^\d{4}$/", $postalCode)) {
            $errors[] = "Postal code must be 4 digits.";
        }
    }

    if (empty($_POST["thana"])) {
        $errors[] = "Please select your thana.";
    } else {
        $thana = $_POST["thana"];
    }

    if (empty($_POST["district"])) {
        $errors[] = "Please select your district.";
    } else {
        $district = $_POST["district"];
    }

    if (empty($_POST["division"])) {
        $errors[] = "Please select your division.";
    } else {
        $division = $_POST["division"];
    }

    if (empty($_POST["current_address"])) {
        $errors[] = "Please enter your current address.";
    } else {
        $currentAddress = clean($_POST["current_address"]);
    }

    if (empty($_POST["permanent_address"])) {
        $errors[] = "Please enter your permanent address.";
    } else {
        $permanentAddress = clean($_POST["permanent_address"]);
    }

    if (empty($_POST["car_brand"])) {
        $errors[] = "Please select your car brand.";
    } else {
        $carBrand = $_POST["car_brand"];
    }

    if (empty($_POST["license_number"])) {
        $errors[] = "Please enter your license number.";
    } else {
        $licenseNumber = clean($_POST["license_number"]);
        if (!preg_match("/^[A-Z0-9-]+$/i", $licenseNumber)) {
            $errors[] = "License number can only have letters, numbers, and dashes.";
        }
    }

    if (empty($_POST["car_one_color"])) {
        $errors[] = "Please select your car color.";
    } else {
        $carColor = $_POST["car_one_color"];
    }

    if (empty($_POST["car_service_count"])) {
        $errors[] = "Please enter how many cars need service.";
    } else {
        $carServiceCount = $_POST["car_service_count"];
        if (!filter_var($carServiceCount, FILTER_VALIDATE_INT, ["options" => ["min_range" => 1]])) {
            $errors[] = "Number of cars must be a positive number.";
        }
    }

    if ($errors) {
        echo "<h3>Please fix the following issues:</h3><ul>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
    } else {
        echo "<h3>Thank you! Your registration was successful.</h3>";
    }
}
?>

<h2>Register</h2>
<form method="POST" action="" autocomplete="on">
    <!-- Paste your original form HTML here as it is -->
</form>

</body>
</html>