<?php

include '../../db/database.php';
include '../../class/usercode.php';
include 'passwordcreater.php';

// Retrieve and sanitize form data
$fullname = trim($_POST['fullname']);
$tcNo = trim($_POST['tcNo']);
$email = trim($_POST['email']);
$phonenumber = trim($_POST['phonenumber']);
$plate = trim($_POST['plate']);
$gender = trim($_POST['gender']);
$password = generateStrongPassword(12);
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$role = 2;
$time = date('Y-m-d H:i:s');
// Validate form data bakılacak
// if (empty($fullname) || empty($txtemail) || empty($telephone) || empty($txtpass) || empty($confirm_password)) {
//     echo "Lütfen tüm alanları doldurun.";
//     exit;
// }

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Geçerli bir e-posta adresi girin.";
    exit;
}
$checktcno = "SELECT tc_no, email, phone FROM tbl_users WHERE tc_no = :tc_no OR email = :email OR phone = :phone";
$stmt = $conn->prepare($checktcno);
$stmt->execute([':tc_no' => $tcNo]);
$stmt->execute([':email' => $email]);
$stmt->execute([':phone' => $phonenumber]);
if ($stmt->rowCount() > 0) {
    echo "Böyle bir kullanıcı kaydı bulunmaktadır.";
    exit;
}

$uniqueCode = generateUniqueUserCode($conn);

// Insert data into the database
$sql = "INSERT INTO tbl_users (fullname, tc_no, email, phone, car_plate, gender, password, role, created_at, user_code) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
try {
    $stmt->execute([$fullname, $tcNo, $email, $phonenumber, $plate, $gender, $hashed_password, $role, $time, $uniqueCode]);
    echo "1";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$pdo = null;
?>