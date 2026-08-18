<?php
$conn = mysqli_connect('db', 'clinic_user', 'clinic_pass', 'clinicdb');
if (!$conn) { 
    die("Không kết nối được CSDL: " . mysqli_connect_error()); 
}
$result = mysqli_query($conn, "SELECT full_name FROM patients");
echo "<h1>Danh sách bệnh nhân</h1><ul>";
while ($row = mysqli_fetch_assoc($result)) { 
    echo "<li>" . htmlspecialchars($row['full_name']) . "</li>"; 
}
echo "</ul>";
?>
