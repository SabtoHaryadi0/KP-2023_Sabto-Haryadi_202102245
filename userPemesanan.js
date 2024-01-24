document.getElementById('userForm').addEventListener('button', function (event) {
    event.preventDefault();

    var name = document.getElementById('name').value;
    var alamat = document.getElementById('alamat').value;
    var jumlah = document.getElementById('jumlah').value;

    // Tampilkan data pada halaman
    document.getElementById('result').innerHTML = 'Terima Kasih, pesanan anda dengan ' + 'Nama: ' + name + '<br>Alamat: ' + alamat + '<br>Jumlah: ' + jumlah + ', akan segera diantarkan';
});
