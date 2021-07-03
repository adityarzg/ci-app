//Fungsi berhasil
const flashData = $('.flash-data').data('flashdata');
if(flashData){
    swal.fire({
        type: 'success',
        icon: 'success',
        title: 'Data Mahasiswa',
        text: 'Berhasil ' + flashData,
    });
}

//Fungsi konfirmasi
$('.tombol-hapus').on('click', function(e) {
   e.preventDefault();
   const href = $(this).attr('href');
   Swal.fire({
        title: 'Apakah anda yakin?',
        text: "Data Mahasiswa akan dihapus",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus'
    }).then((result) => {
        if (result.isConfirmed) {
            document.location.href = href;
        }
    })
});

