<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diskominfo Surakarta - Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <!--Header Awal-->
    <header>
        <div id="brand"><a href="#">
                <img src="image/BTS logo.png" alt="logo"></a>
            <ul>
                <li><a href="/">Home</a></li>
                <li>
                    <div class="dropdown">
                        <a href="#" class="drop_btn" onclick="dropdownFunction()">
                            Information
                        </a>
                        <div class="drop_content" id="myDropdown">
                            <a href="/about">Diskominfo Surakarta</a>
                            <a href="/btslist">Data BTS Tower</a>
                            <!-- <a href="btsmonitor.html">Data Monitoring</a> -->
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <nav>
            <ul>
                <li id="contact"><a href="/contact">Contact Us</a></li>
                {{-- <li id="login"><a href="/login">Log In</a></li> --}}
            </ul>
        </nav>
    </header>
    <!--Header Akhir-->

    <!--Main Awal-->
    <main class="main_login">
        <div class="banner">
            <div class="banner_login">
                @if(session()->has('success'))
                    <script>alert('Login Sukses')</script>
                    {{ session('success') }}
                @endif
                @if(session()->has('loginError'))
                    <script>alert('Login Gagal')</script>
                    {{ session('loginError') }}
                @endif
                <h1><span>Login</span> your account</h1>
                <form class="card_login" action="/login" method="post">
                    @csrf
                    <div class="box_input box_input_username">
                        <label for="email">Email :</label>
                        <div class="input_field">
                            <input type="email" id="email" name="email" placeholder="masukkan email..." autofocus required>
                        </div>
                        {{-- @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror --}}
                    </div>
                    <div class="box_input box_input_password">
                        <label for="password">Password :</label>
                        <div class="input_field">
                            <input type="password" id="password" name="password" placeholder="masukkan password..." required>

                            <div class="forgot_password">
                                <a href="#">lupa password</a>
                            </div>
                        </div>
                    </div>
                    <div class="button_login">
                        <button id="button_login" type="submit">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <br>
    </main>
    <!--Main Akhir-->

    <!--Awal Footer-->
    <footer>
        <div class="footer_content">Copyright &copy; Diskominfo BTS Surakarta 2022 </div>
        <div class="footer_content">
            <a href="https://www.instagram.com"><img src="image/sosmed1.png" alt="ig"></a>
            <a href="https://www.twitter.com"><img src="image/sosmed2.png" alt="tw"></a>
            <a href="https://www.facebook.com"><img src="image/sosmed3.png" alt="fb"></a>
            <a href="https://www.youtube.com"><img src="image/sosmed4.png" alt="yt"></a>
            <a href="https://www.linkedin.com"><img src="image/sosmed5.png" alt="in"></a>
            <a href="https://www.whatsapp.com"><img src="image/sosmed6.png" alt="wa"></a>
        </div>
        {{-- <div class="footer_content" id="fc">
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Use</a>
        </div> --}}

    </footer>
    <!--Akhir Footer-->

    <script>
        // Dropdown
        function dropdownFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }
        window.onclick = function (e) {
            if (!e.target.matches('.drop_btn')) {
                var myDropdown = document.getElementById("myDropdown");
                if (myDropdown.classList.contains('show')) {
                    myDropdown.classList.remove('show');
                }
            }
        }

        // document.getElementById("button_login").onclick = function () {
        //     event.preventDefault();

        //     // akun dummy
        //     var user = 'admin';
        //     var pass = 'admin';

        //     var usernameVal = document.getElementById("input_username").value;
        //     var passwordVal = document.getElementById("input_password").value;
        //     if(!usernameVal || !passwordVal){
        //         alert('Username atau Password tidak boleh kosong!')
        //         return;
        //     }
        //     else{
        //         // cek apakah valid ke akun dummy
        //         if(usernameVal == 'surveyor' && passwordVal == 'surveyor'){
        //             alert('Selamat, Anda telah berhasil login sebagai surveyor');
        //             location.href = "/surveyor";

        //         }
        //         else if(usernameVal == 'admin' && passwordVal == 'admin'){
        //             alert('Selamat, Anda telah berhasil login sebagai admin');
        //             location.href = "/admin";

        //         }
        //         else{
        //             alert('Username atau Password salah!')
        //             return;
        //         }
        //     }


        //     // put data post codes here
        // };
    </script>
</body>

</html>
