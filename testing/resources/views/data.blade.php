<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Page</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Data Page</h1>
    <p>jumlah data : <span id="data-count">{{ $count }}</span> </p>


    <script>
        $(document).ready(function() {
            setInterval(function() {
                $.ajax({
                    url: '/check-data',
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        var currentCount = parseInt($('#data-count').text()); // Ambil jumlah data saat ini dari elemen HTML
                        if (response.count > currentCount) {
                            location.reload(); // Reload halaman jika jumlah data bertambah
                        }
                    }
                });
            }, 5000); // Interval waktu dalam milidetik, misalnya setiap 5 detik
        });
    </script>
</body>
</html>
