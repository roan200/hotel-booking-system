<?php

include('includes/header.php');

$id = $_GET['staff_id'];

// Include your database connection file
include('config/conn.php');


// Fetch existing data based on the user's ID
$sql = "SELECT staff_id, name, email, role FROM staff WHERE staff_id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $staff = $result->fetch_assoc(); // assuming 'id' is a unique primary key, no need for a loop
} else {
    die('User not found.'); // Or handle this scenario appropriately
}

// Check if form has been submitted
if(isset($_POST['submit'])) {
    // Get the values submitted from the form
    $id_staff = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $role = $_POST['role'];


    // Update the user's data
    $sql = "UPDATE staff SET staff_id ='$id_staff', name='$name', email='$email', role ='$role' WHERE staff_ id=$user_id";

    if ($conn->query($sql) === TRUE) {
        echo "<script type='text/javascript'>
        alert('Updated Successful!');
        window.location = 'all-staff.php';
    </script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>

<div class="profile-container">
    <h1>Update User Profile</h1>

        <!-- The form action is this file itself -->
        <form action="" method="post">
        Staff ID: <input type="text" name="id" value="<?php echo $user['staff_id']; ?>"><br>
        Full Name: <input type="text" name="name" value="<?php echo $user['name']; ?>"><br>
        Email Address: <input type="text" name="email" value="<?php echo $user['email']; ?>"><br>
        Role: <input type="text" name="role" value="<?php echo $user['role']; ?>"><br>
        <input type="submit" name="submit" value="Update">
    </form>
</div>

<?php include('includes/scripts.php') ?>