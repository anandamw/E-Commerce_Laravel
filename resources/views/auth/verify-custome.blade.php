<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Container</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 300px;
            max-width: 100%;
            margin: 20px;
        }

        .card-header {
            background-color: #ffffff;
            color: #000;
            padding: 15px 0;
            text-align: center;
            font-size: 20px;
            font-weight: bold;
        }

        .card-body {
            padding: 20px;
            color: #333333;
        }

        .card-footer {
            background-color: #f8f9fa;
            padding: 10px;
            text-align: center;
        }

        .button {
            display: inline-block;
            padding: 8px 15px;
            font-size: 10px;
            color: #ffffff;
            background-color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
            border: 1px solid black;
        }

        .button:hover {
            background-color: #ffffff;
        }
    </style>
</head>

<body>
    <div class="card">
        <div class="card-body">
            <h2>Berung Madhure</h2>
            <p>Halo <span style="color: #000; font-weight: bold "> {{ $user->username }} </span> Untuk Masuk ke Bereng
                Madhure, silakan klik tombol di bawah ini
                untuk
                memverifikasi alamat
                email Anda.</p>
            <a href="{{ $url }}" class="button" style="color: red ">Verifikasi Sekarang</a>
        </div>
        <div class="card-footer">
            Terima kasih telah bergabung dengan kami!
        </div>
    </div>
</body>

</html>
