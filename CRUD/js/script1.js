$(document).ready(function(){

    //

    // event ketika keyword ditulis
    $('#keyword').on('keyup', function(){
       $('#container').load('ajax/karyawan.php?keyword=' + $('#keyword').val());
    });

})