<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beli</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



</head>
<body>
      <p>jumlah data : <span id="data-count">{{ $count }}</span> </p>
        <table class="table table-report mt-sm-2" id="myTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Kode Barang</th>
                 </tr>
            </thead>
            <tbody>
            @php
            $no = 1;
            @endphp
            @foreach ($beli as $item)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item->nama_barang }}</td>
                    <td>{{ $item->kode_barang }}</td>
                </tr>
            @endforeach
            </tbody>
    </table>

 <script>
        $(document).ready(function() {
            setInterval(function() {
                $.ajax({
                    url: '/belis',
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        var currentCount = parseInt($('#data-count').text()); // Ambil jumlah data saat ini dari elemen HTML
                        if (response.count > currentCount) {
                            location.reload(); // Reload halaman jika jumlah data bertambah
                        }
                    }
                });
            }, 2000); // Interval waktu dalam milidetik, misalnya setiap 5 detik
        });
    </script>
</body>
</html>
