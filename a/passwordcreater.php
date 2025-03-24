<?php
// Rastgele güçlü bir şifre oluşturma fonksiyonu
function generateStrongPassword($length = 12) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=';
    $charactersLength = strlen($characters);
    $randomPassword = '';
    for ($i = 0; $i < $length; $i++) {
        $randomPassword .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomPassword;
}

// Rastgele şifre oluştur
$password = generateStrongPassword(12); // 12 karakter uzunluğunda güçlü bir şifre
$hashed_password = password_hash($password, PASSWORD_DEFAULT); // Şifreyi hashle

// Şifreyi ekrana yazdır (sadece test için, üretimde bunu yapmayın)
// echo "Generated Password: " . $password . "<br>";