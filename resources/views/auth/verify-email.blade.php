<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('') }}assets/css/verify.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <div class="container">
        <div class="logo"></div>
        <div class="sub-logo">
            <i style=" display: flex;
    align-items: center;
    justify-content: center;
    color: #ed2a26;
    background-color: white;
    font-size: 60px;
    width: 80px;
    height: 80px;
    border-radius: 50%;"
                class='sub-i bx bx-envelope'></i>
        </div>


        <div class="container-verify">
            <h1>Email Verification</h1>

            <div>

                <div style="display: flex">
                    <p>haiii </p>

                    <div style="margin-left: 5px; font-weight: bold;  color: #ed2a26; ">{{ auth()->user()->username }}
                    </div>

                </div>

                <div style="display: flex; ">
                    <p> Silakan cek email
                        <span style="background-color: white;  font-weight: bold; color:  #ed2a26">

                            {{ auth()->user()->email }}
                        </span>
                        untuk verifikasi akun. Jika kamu
                        tidak menerima email, klik tombol di bawah untuk
                        mengirim
                        ulang.
                    </p>
                </div>
            </div>

            <div style="display: flex; gap: 8px ">


                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button type="submit">Kirim Ulang Verifikasi Email</button>
                </form>

                @if (auth()->user()->email_verified_at == !null)
                    <button style="background-color: rgb(54, 54, 54)"> <a href="/"
                            style="text-decoration: none; color: white " type="submit">
                            Refresh</a></button>
                @endif




            </div>
        </div>


        <span></span>

        <div class="footer">
            <div class="" style="color: black ; margin: 20px 0; cursor: pointer; ">| Privacy Policy | Contact
                Details |</div>
        </div>

    </div>


</body>

</html>
