

// // jika input dengan type button di kenakan event klik
$('input[type=button]').click(function(){

    // menyimpan value button yang sedang di klik
    var clickButtonValue = $(this).val();

    // menyimpan kondisi value layar saat ini / waktu di klik
    var currentLayarValue = $('#txtHasil').val();

    // mendefinisikan selector #txtHasil ke dalam variabel
    var layar = $('#txtHasil');

    // jika tombol yang diklik value nya bernilai "="
    if(clickButtonValue == '=') {
        // isi value dari layar akan direplace dengan jumlah dari hasil penjumlahan kondisi value layar saat itu juga
        layar.val(eval(currentLayarValue));

    // jika tombol yang diklik value nya bernilai "C"
    } else if(clickButtonValue == 'C') {
        // isi value layar akan di clear
        layar.val('');
    // jika tombol yang diklik value nya bernilai selain "C" dan "="
    } else { 
        // value layar saat ini akan diambil, dan disandingkan dengan value yang saat ini di klik, kemudian ditampilkan ulang di layar
        layar.val(currentLayarValue + clickButtonValue);
    }
});

