$(document).ready(function(){
    //hilangkan tombol cari
    $('#btn-src').hide();
    $('.spinner-border').hide();

//event ketika keyword ditulis
$('#keyword').on('keyup', function(){
    //memunculkan spiner
    $('.spinner-border').show();
    //ajax menggunakan load
    // $('#container').load('ajax/listanime.php?keyword=' + $('#keyword').val());
    
    //$.get();
    $.get('ajax/listanime.php?keyword=' + $('#keyword').val(), function(data){
        $('#container').html(data);
        $('.spinner-border').hide();
    });

});


});