//ambil elemen yang dibutuhkan
const keyword = document.getElementById("keyword");
const cari = document.getElementById("cari");
const container = document.getElementById("container");

//tambahkan event ketika keyword ditulis
keyword.addEventListener('keyup', function () {
    
    //buat object ajax
    let xhr = new XMLHttpRequest();

    //cek kesiapan ajax
    xhr.onreadystatechange = function (){
        if(xhr.readyState == 4 && xhr.status == 200){
            container.innerHTML = xhr.responseText;
        }
    }

    //eksekusi ajax
    xhr.open('GET','ajax/karyawan.php?keyword=' + keyword.value, true)
    xhr.send();

})