//ambil elemnent

var keyword = document.getElementById('keyword');
var btnsrc = document.getElementById('btn-src');
var container = document.getElementById('container');

//tambahkan event ketika keyword di tulis
keyword.addEventListener('keypress', function(){

    //buat objek ajax
    var xhr = new XMLHttpRequest();

    //cek kesiapan ajax
    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200){
            container.innerHTML = xhr.responseText;
        }
    }
//eksekusi ajax
xhr.open('GET', 'ajax/listanime.php?keyword=' + keyword.value, true);
xhr.send();



});