<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Informasi Akademik Sekolah - Login</title>
    
    <!-- CSS Dependencies -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/logo_fu.svg') }}">
    
    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #F3F4F6;
            height: 100vh;
            display: flex;
            overflow: hidden; /* Mencegah scroll di desktop */
        }

        /* Split Layout Containers */
        .landing-side {
            flex: 1.2;
            /* Nuansa Hijau Pesantren (Emerald Green to Dark Green) */
            background: linear-gradient(135deg, rgba(5, 150, 105, 0.9) 0%, rgba(2, 44, 34, 0.95) 100%), url('{{ asset("img/wallup.jpg") }}');
            background-size: cover;
            background-position: center;
            color: #ffffff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 60px;
            position: relative;
        }

        .login-side {
            flex: 1;
            background-color: #ffffff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 40px;
            box-shadow: -10px 0 30px rgba(0, 0, 0, 0.1);
            z-index: 10;
        }

        /* Landing Side Content */
        .landing-content {
            width: 100%;
            max-width: 600px;
            margin: 0 auto; /* Tengah mendatar */
            text-align: center;
            z-index: 2;
        }
        
        .school-logo {
            width: 100%; /* Memenuhi container (full-width) */
            max-width: 450px; /* Batas maksimal agar tidak raksasa di layar super besar */
            height: auto;
            display: inline-block;
        }

        .landing-title {
            font-size: 3rem;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 20px;
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .landing-subtitle {
            font-size: 1.15rem;
            font-weight: 300;
            line-height: 1.6;
            opacity: 0.9;
            margin-bottom: 40px;
        }

        .features-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .features-list li {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            font-size: 1.05rem;
        }

        .features-list li i {
            background: rgba(255, 255, 255, 0.2);
            padding: 8px;
            border-radius: 50%;
            margin-right: 15px;
            width: 35px;
            height: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Login Card Wrapper */
        .login-box-wrapper {
            width: 100%;
            max-width: 400px;
        }

        .login-header {
            text-align: center;
            margin-bottom: 35px;
        }

        .login-header h2 {
            font-weight: 700;
            color: #111827;
            font-size: 1.8rem;
        }

        .login-header p {
            color: #6B7280;
            margin-top: 5px;
        }

        /* Form Inputs Modern */
        .input-group .form-control {
            border-radius: 8px 0 0 8px;
            border: 1px solid #D1D5DB;
            border-right: none;
            padding: 12px 16px;
            font-size: 0.95rem;
            height: 48px;
            transition: all 0.2s;
            color: #111827;
            background-color: #F9FAFB;
        }

        .input-group .form-control:focus {
            background-color: #ffffff;
        }

        .input-group .input-group-append .input-group-text {
            background-color: #F9FAFB;
            border: 1px solid #D1D5DB;
            border-left: none;
            border-radius: 0 8px 8px 0;
            color: #6B7280;
            transition: background-color 0.2s, border-color 0.2s;
            height: 48px;
        }

        .input-group:focus-within .form-control,
        .input-group:focus-within .input-group-text {
            background-color: #ffffff;
            border-color: #10B981; /* Tema Hijau */
        }
        
        .input-group:focus-within {
            box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.2); /* Tema Hijau */
            border-radius: 8px;
        }

        .input-group-text .fas {
            color: #9CA3AF;
            transition: color 0.2s;
        }
        
        .input-group:focus-within .input-group-text .fas {
            color: #10B981; /* Tema Hijau */
        }

        .btn-primary {
            background-color: #059669; /* Tema Hijau */
            border-color: #059669;
            border-radius: 8px;
            padding: 12px 16px;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.2s ease-in-out;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 48px;
            margin-top: 24px;
        }

        .btn-primary:hover:not(:disabled) {
            background-color: #047857; /* Tema Hijau gelap */
            border-color: #047857;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(5, 150, 105, 0.3); /* Tema Hijau */
        }

        .btn-primary:disabled {
            background-color: #9CA3AF;
            border-color: #9CA3AF;
            opacity: 0.7;
            transform: none;
            box-shadow: none;
        }

        .icheck-primary label {
            color: #4B5563;
            font-weight: 500;
            font-size: 0.9rem;
        }

        /* Checkbox color override for icheck if possible */
        .icheck-primary input:checked + label::before {
            background-color: #059669 !important;
            border-color: #059669 !important;
        }

        .auth-links {
            margin-top: 30px;
            text-align: center;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .auth-links a {
            color: #10B981; /* Tema Hijau */
            font-weight: 500;
            text-decoration: none;
            transition: color 0.2s;
        }

        .auth-links a:hover {
            color: #047857; /* Tema Hijau gelap */
            text-decoration: underline;
        }

        .footer-credit {
            position: absolute;
            bottom: 24px;
            left: 60px;
            font-size: 0.85rem;
            opacity: 0.8;
            z-index: 2;
        }
        
        .footer-credit a {
            color: white;
            text-decoration: none;
            font-weight: 600;
        }

        /* Desain Responsif (Tablet & Mobile) */
        @media (max-width: 992px) {
            body {
                flex-direction: column;
                overflow: auto; /* Mengizinkan scroll di HP */
            }
            .landing-side {
                padding: 40px 20px;
                text-align: center;
            }
            .landing-content {
                margin: 0 auto;
            }
            .features-list {
                display: none; /* Sembunyikan daftar fitur agar tidak terlalu panjang di HP */
            }
            .landing-title {
                font-size: 2rem;
            }
            .footer-credit {
                position: relative;
                left: 0;
                bottom: 0;
                margin-top: 30px;
            }
            .login-side {
                padding: 60px 20px;
            }
        }
    </style>
</head>
<body>

    <!-- KIRI: Landing Page Side -->
    <div class="landing-side">
        <div class="landing-content">
            <!-- Menampilkan Logo SVG Yayasan -->
            <img src="{{ asset('img/logo_fu.svg') }}" alt="Logo Yayasan Fityanul Ulum" class="school-logo">
            
            <!-- <h1 class="landing-title">Sistem Informasi Akademik Sekolah</h1>
            <p class="landing-subtitle">Portal akademik terintegrasi untuk mendukung proses belajar mengajar yang lebih efektif, efisien, dan transparan.</p>
            
            <ul class="features-list">
                <li><i class="fas fa-users"></i> Manajemen Data Siswa & Guru</li>
                <li><i class="fas fa-calendar-alt"></i> Jadwal Pelajaran & Ujian Terpusat</li>
                <li><i class="fas fa-chart-bar"></i> Pantau Nilai & Perkembangan Akademik</li>
                <li><i class="fas fa-bullhorn"></i> Pengumuman & Informasi Terbaru</li>
            </ul> -->
        </div>
        
        <div class="footer-credit">
            &copy; <script>document.write(new Date().getFullYear());</script> &diams; <a href="" target="_blank">MA'HAD FITYANUL ULUM</a>
        </div>
    </div>

    <!-- KANAN: Login Form Side -->
    <div class="login-side">
        <div class="login-box-wrapper">
            <div class="login-header">
                <h2>Selamat Datang</h2>
                <p>Silakan masuk ke akun Anda</p>
            </div>

            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="input-group mb-4">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ old('email') }}" autocomplete="off" autofocus>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <input id="password" type="password" placeholder="{{ __('Password') }}" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="d-flex justify-content-between align-items-center mb-1">
                    <div class="icheck-primary">
                        <input type="checkbox" id="remember" class="form-check-input" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label for="remember">Ingat Saya</label>
                    </div>
                </div>

                <button type="submit" id="btn-login" class="btn btn-primary">
                    {{ __('Login') }} &nbsp; <i class="fas fa-sign-in-alt"></i>
                </button>
            </form>

            <div class="auth-links">
                @if (Route::has('password.request'))
                    <!-- <a href="{{ route('password.request') }}">{{ __('Lupa Password?') }}</a> -->
                @endif
                <!-- <a href="{{ route('register') }}">Belum punya akun? Buat Akun Baru</a> -->
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/toastr/toastr.min.js') }}"></script>
    
    <!-- Script Validasi AJAX Bawaan (Dinonaktifkan sementara) -->
    <!--
    <script>
        $(document).ready(function() {
            $("#email").keyup(function(){
                var email = $("#email").val();
                if (email.length >= 5){
                    $.ajax({
                        type:"GET",
                        data: { email : email },
                        dataType:"JSON",
                        url:"{{ url('/login/cek_email/json') }}",
                        success:function(data){
                            if (data.success) {
                                $("#email").removeClass("is-invalid").addClass("is-valid");
                                $("#password").removeAttr("disabled").val('');
                            } else {
                                $("#email").removeClass("is-valid").addClass("is-invalid");
                                $("#password").attr("disabled", "disabled").val('');
                                $("#remember").attr("disabled", "disabled");
                                $("#btn-login").attr("disabled", "disabled");
                            }
                        }
                    });
                } else {
                    $("#email").removeClass("is-valid is-invalid");
                    $("#password").attr("disabled", "disabled").val('');
                    $("#remember").attr("disabled", "disabled");
                    $("#btn-login").attr("disabled", "disabled");
                }
            });

            $("#password").keyup(function(){
                var email = $("#email").val();
                var password = $("#password").val();
                if (password.length >= 8){
                    $.ajax({
                        type:"GET",
                        data: { email : email, password : password },
                        dataType:"JSON",
                        url:"{{ url('/login/cek_password/json') }}",
                        success:function(data){
                            if (data.success) {
                                $("#password").removeClass("is-invalid").addClass("is-valid");
                                $("#remember").removeAttr("disabled");
                                $("#btn-login").removeAttr("disabled");
                            } else {
                                $("#password").removeClass("is-valid").addClass("is-invalid");
                                $("#remember").attr("disabled", "disabled");
                                $("#btn-login").attr("disabled", "disabled");
                            }
                        }
                    });
                } else {
                    $("#password").removeClass("is-valid is-invalid");
                    $("#remember").attr("disabled", "disabled");
                    $("#btn-login").attr("disabled", "disabled");
                }
            });
        });
    </script>
    -->

    <!-- Script Toastr Notification Bawaan -->
    @error('id_card')
        <script>toastr.error("Maaf User ini tidak terdaftar sebagai Guru Mahad Fityanul Ulum!");</script>
    @enderror
    @error('guru')
        <script>toastr.error("Maaf Guru ini sudah terdaftar sebagai User!");</script>
    @enderror
    @error('no_induk')
        <script>toastr.error("Maaf User ini tidak terdaftar sebagai Siswa Mahad Fityanul Ulum!");</script>
    @enderror
    @error('siswa')
        <script>toastr.error("Maaf Siswa ini sudah terdaftar sebagai User!");</script>
    @enderror
    @if (session('status'))
        <script>toastr.success("{{ Session('success') }}");</script>
    @endif
    @if (Session::has('error'))
        <script>toastr.error("{{ Session('error') }}");</script>
    @endif
</body>
</html>
