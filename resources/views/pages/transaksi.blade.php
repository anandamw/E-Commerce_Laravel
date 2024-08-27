@extends('layouts.template')




@section('content')
    <div class="container-fluid">
        <h1> Haiii Sekarang anda berada dalam halaman admin</h1>

        <button type="button" id="pay-button" class="btn btn-primary"> Bayar sekarang</button>
    </div>

    <!-- Midtrans Snap.js -->
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>

    <script type="text/javascript">
        document.getElementById('pay-button').onclick = function() {
            // SnapToken acquired from controller
            snap.pay('{{ $transaksi->snap_token }}', {
                onSuccess: function(result) {
                    // Tambahkan logika untuk sukses, seperti menyimpan data ke database
                    document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                },
                onPending: function(result) {
                    // Tambahkan logika untuk pembayaran yang pending
                    document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                },
                onError: function(result) {
                    // Tambahkan logika untuk error saat pembayaran
                    document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                }
            });
        };
    </script>
@endsection
