<div class="login-page">

    <style>
        .login-page {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 25px;
            background: linear-gradient(135deg, #f0f7f6 0%, #edf2f9 100%);
            font-family: 'Segoe UI', Arial, sans-serif;
        }

        .login-page * {
            box-sizing: border-box;
        }

        .login-card {
            width: 100%;
            max-width: 420px;
            padding: 38px;
            background: #ffffff;
            border: 1px solid #e5eceb;
            border-radius: 18px;
            box-shadow: 0 15px 45px rgba(32, 65, 70, 0.09);
        }

        .login-logo {
            width: 66px;
            height: 66px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 20px;
            background: #e3f4ef;
            border-radius: 18px;
            color: #168078;
            font-size: 32px;
        }

        .login-title {
            margin: 0;
            color: #203642;
            text-align: center;
            font-size: 27px;
            font-weight: 700;
            letter-spacing: -0.7px;
        }

        .login-subtitle {
            margin: 10px 0 30px;
            color: #84919c;
            text-align: center;
            font-size: 14px;
        }

        .login-label {
            display: block;
            margin-bottom: 8px;
            color: #344653;
            font-size: 13px;
            font-weight: 600;
        }

        .login-input-group {
            position: relative;
            margin-bottom: 21px;
        }

        .login-input-group i.input-icon {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            color: #8999a5;
            font-size: 17px;
            pointer-events: none;
        }

        .login-input {
            width: 100%;
            height: 49px;
            padding: 12px 15px 12px 44px;
            border: 1px solid #dce5e8;
            border-radius: 9px;
            outline: none;
            background: #fcfdfd;
            color: #263746;
            font-size: 14px;
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        .login-input::placeholder {
            color: #a8b3bc;
        }

        .login-input:focus {
            border-color: #168078;
            background: #ffffff;
            box-shadow: 0 0 0 4px rgba(22, 128, 120, 0.10);
        }

        .login-password {
            padding-right: 45px;
        }

        .login-eye {
            position: absolute;
            top: 50%;
            right: 14px;
            transform: translateY(-50%);
            border: none;
            background: transparent;
            color: #84919c;
            cursor: pointer;
            font-size: 17px;
        }

        .login-button {
            width: 100%;
            height: 49px;
            margin-top: 7px;
            border: none;
            border-radius: 9px;
            background: #168078;
            color: #ffffff;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s, transform 0.2s;
        }

        .login-button:hover {
            background: #116b65;
            transform: translateY(-1px);
        }

        .login-button i {
            margin-left: 7px;
        }

        .login-error {
            margin-bottom: 20px;
            padding: 12px;
            border-radius: 8px;
            background: #fff0f0;
            color: #bd3c3c;
            font-size: 13px;
        }

        .login-footer {
            margin-top: 27px;
            padding-top: 19px;
            border-top: 1px solid #edf0f2;
            color: #929da6;
            text-align: center;
            font-size: 12px;
        }

        .login-footer i {
            margin-right: 5px;
            color: #168078;
        }

        @media (max-width: 480px) {
            .login-card {
                padding: 28px 23px;
            }

            .login-title {
                font-size: 24px;
            }
        }
    </style>

    <div class="login-card">

        <div class="login-logo">
            <i class="bi bi-patch-check-fill"></i>

        </div>

        <h1 class="login-title">PetShop Estoque</h1>

        <p class="login-subtitle">
            Entre na sua conta para continuar
        </p>

        @if ($errors->any())
            <div class="login-error">
                <i class="bi bi-exclamation-circle me-2"></i>
                {{ $errors->first() }}
            </div>
        @endif

        <label for="email" class="login-label">
            E-mail
        </label>

        <div class="login-input-group">
            <i class="bi bi-envelope input-icon"></i>

            <input type="email" id="email" name="email" class="login-input" placeholder="Digite seu e-mail"
                value="{{ old('email') }}" autocomplete="username" required autofocus>
        </div>

        <label for="password" class="login-label">
            Senha
        </label>

        <div class="login-input-group">
            <i class="bi bi-lock input-icon"></i>

            <input type="password" id="password" name="password" class="login-input login-password"
                placeholder="Digite sua senha" autocomplete="current-password" required>

            <button type="button" class="login-eye" id="togglePassword" aria-label="Mostrar ou ocultar senha">
                <i class="bi bi-eye" id="eyeIcon"></i>
            </button>
        </div>

        <form action="/inicio" method="GET">
            <button type="submit" class="login-button">
                Entrar
                <i class="bi bi-arrow-right"></i>
            </button>
        </form>

        </form>

        <div class="login-footer">
            <i class="bi bi-shield-check"></i>
            Acesso seguro para funcionários
            <br>
            <span style="display: block; margin-top: 8px;">
                © {{ date('Y') }} PetShop Estoque
            </span>
        </div>

    </div>

</div>

<script>
    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');
    const eyeIcon = document.getElementById('eyeIcon');

    togglePassword.addEventListener('click', function() {
        const mostrar = passwordInput.type === 'password';

        passwordInput.type = mostrar ? 'text' : 'password';

        eyeIcon.classList.toggle('bi-eye', !mostrar);
        eyeIcon.classList.toggle('bi-eye-slash', mostrar);
    });
</script>
