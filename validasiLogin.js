var $form = document.querySelector('.form');
var $error = document.querySelector('.error');
var $inputFields = document.querySelectorAll('.form-group');
var $email = document.getElementById('email');
var $password = document.getElementById('password');

function insertError(pesan){
    $error.innerHTML = pesan;
    $error.style.display = 'block';
}

function hapusError(){
    $error.innerHTML = '';
    $error.style.display = 'hidden';
}

function validasi(kejadian){
    kejadian.preventDefault(); // digunakan untuk tidak menjalankan fungsi form apabila di-submit (kirim data ke action)
    $error.style.display = 'none';
    
    if($email.value != 'jwoopark@gmail.com' || $password.value != 'jeongwoo'){
        insertError('Email atau password salah');
    }else{
        hapusError();
        alert('Succesfully Login!');
        
    }
}

$form.addEventListener('submit', validasi);