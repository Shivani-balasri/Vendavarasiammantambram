<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $pincode = $_POST["pincode"];
    $nature_of_payment = $_POST["nature_of_payment"];
    $amount = $_POST["amount"];
    $other_details = $_POST["other_details"];
} else {
    // Redirect to the form page if accessed directly without form submission
    header("Location: your_form_page.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>Form Data</h2>
    <table>
        <tr>
            <th>Name</th>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <th>Mobile</th>
            <td><?php echo $phone; ?></td>
        </tr>
        <tr>
            <th>Address</th>
            <td><?php echo $address; ?></td>
        </tr>
        <!-- Add more rows for other form fields -->
    </table>
</body>
</html>
