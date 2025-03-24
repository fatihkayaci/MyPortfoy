document.getElementById('UserAdd').addEventListener('submit', function(event) {
    event.preventDefault();
    
    let fullname = document.getElementById('adSoyad').value.trim();
    let tcNo = document.getElementById('tcNo').value.trim();
    let phonenumber = document.getElementById('phonenumber').value.trim();
    let email = document.getElementById('email').value.trim();
    let plate = document.getElementById('plaka').value.trim();
    let gender = document.getElementById('gender').value.trim();
    let again = document.getElementById('again');
    let isChecked = again.checked;
    if (!fullname || !phonenumber || !email) {
        alert(`${fullname}Lütfen tüm alanları doldurun.`);
        return;
    }

    if (!validateEmail(email)) {
        alert('Geçerli bir e-posta adresi girin.');
        return;
    }
    let genderenum;
    if (gender === 'Erkek') {
        genderenum = "E";
    } else if (gender === 'Kadın') {
        genderenum = "K";
    } else {
        genderenum = "D";  
    }
    let formData = new FormData();
    formData.append('fullname', fullname);
    formData.append('tcNo', tcNo);
    formData.append('phonenumber', phonenumber);
    formData.append('email', email);
    formData.append('plate', plate);
    formData.append('gender', genderenum);

    fetch('controller/useradd.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        if(data === '1' && isChecked) {
            window.location.href = 'kullanici-ekle.php';
        }else if(data === '1' && !isChecked){
            window.location.href = 'kullanicilar.php';
        }
        else{
            alert(data);
        }
    })
    .catch(error => {
        alert('Bir hata oluştu: ' + error);
    });
});
function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(String(email).toLowerCase());
}

