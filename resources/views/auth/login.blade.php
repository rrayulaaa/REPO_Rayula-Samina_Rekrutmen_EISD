<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - KampusSkill</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #4f46e5;
            --primary-hover: #4338ca;
            --primary-light: #eef2ff;
            --bg-gradient-1: #0f172a;
            --bg-gradient-2: #1e1b4b;
            --surface: #ffffff;
            --text-main: #0f172a;
            --text-muted: #64748b;
            --border-color: #e2e8f0;
            --error-color: #ef4444;
            --radius-lg: 16px;
            --radius-md: 10px;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: radial-gradient(circle at top left, #1e1b4b 0%, #0f172a 50%, #0284c7 100%);
            padding: 24px;
            color: var(--text-main);
        }

        .login-wrapper {
            width: 100%;
            max-width: 440px;
            position: relative;
        }

        /* Decorative Blur Blobs */
        .blob {
            position: absolute;
            border-radius: 50%;
            filter: blur(60px);
            z-index: 0;
            opacity: 0.6;
        }

        .blob-1 {
            width: 200px;
            height: 200px;
            background: #6366f1;
            top: -40px;
            left: -40px;
        }

        .blob-2 {
            width: 180px;
            height: 180px;
            background: #38bdf8;
            bottom: -30px;
            right: -30px;
        }

        .login-card {
            position: relative;
            z-index: 1;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.5);
            border-radius: var(--radius-lg);
            padding: 40px 32px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25), 0 1px 3px rgba(0, 0, 0, 0.05);
            animation: fadeIn 0.4s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(12px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .brand-header {
            text-align: center;
            margin-bottom: 28px;
        }

        .brand-logo {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 52px;
            height: 52px;
            background: linear-gradient(135deg, #4f46e5 0%, #06b6d4 100%);
            border-radius: 14px;
            color: #ffffff;
            font-size: 24px;
            font-weight: 800;
            margin-bottom: 14px;
            box-shadow: 0 8px 16px rgba(79, 70, 229, 0.3);
        }

        .brand-header h1 {
            font-size: 24px;
            font-weight: 800;
            color: #0f172a;
            letter-spacing: -0.02em;
            margin-bottom: 6px;
        }

        .brand-header p {
            font-size: 14px;
            color: var(--text-muted);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            color: #334155;
            margin-bottom: 8px;
        }

        .input-input-wrap {
            position: relative;
            display: flex;
            align-items: center;
        }

        .input-icon {
            position: absolute;
            left: 14px;
            color: #94a3b8;
            font-size: 18px;
            pointer-events: none;
            display: flex;
            align-items: center;
        }

        .form-input {
            width: 100%;
            padding: 12px 14px 12px 42px;
            font-size: 14px;
            font-family: inherit;
            color: #0f172a;
            background: #f8fafc;
            border: 1.5px solid var(--border-color);
            border-radius: var(--radius-md);
            outline: none;
            transition: all 0.2s ease;
        }

        .form-input:focus {
            background: #ffffff;
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(79, 70, 229, 0.12);
        }

        .form-input.is-invalid {
            border-color: var(--error-color);
            background: #fef2f2;
        }

        .toggle-password {
            position: absolute;
            right: 12px;
            background: none;
            border: none;
            color: #94a3b8;
            cursor: pointer;
            font-size: 13px;
            font-weight: 600;
            padding: 4px 8px;
            border-radius: 4px;
            transition: color 0.2s;
        }

        .toggle-password:hover {
            color: var(--primary);
        }

        .error-message {
            font-size: 12px;
            color: var(--error-color);
            margin-top: 6px;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .form-options {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 24px;
            font-size: 13px;
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            color: #475569;
            font-weight: 500;
            user-select: none;
        }

        .remember-me input {
            width: 16px;
            height: 16px;
            accent-color: var(--primary);
            cursor: pointer;
        }

        .btn-submit {
            width: 100%;
            padding: 13px;
            background: linear-gradient(135deg, #4f46e5 0%, #4338ca 100%);
            color: #ffffff;
            font-size: 15px;
            font-weight: 700;
            font-family: inherit;
            border: none;
            border-radius: var(--radius-md);
            cursor: pointer;
            box-shadow: 0 4px 14px rgba(79, 70, 229, 0.4);
            transition: all 0.2s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .btn-submit:hover {
            transform: translateY(-1px);
            box-shadow: 0 6px 20px rgba(79, 70, 229, 0.5);
            background: linear-gradient(135deg, #4338ca 0%, #3730a3 100%);
        }

        .btn-submit:active {
            transform: translateY(0);
        }

        /* Demo Account Section */
        .demo-section {
            margin-top: 28px;
            padding-top: 20px;
            border-top: 1px dashed var(--border-color);
            text-align: center;
        }

        .demo-title {
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: #94a3b8;
            font-weight: 700;
            margin-bottom: 12px;
        }

        .demo-buttons {
            display: flex;
            gap: 8px;
            justify-content: center;
        }

        .btn-demo {
            flex: 1;
            padding: 8px 10px;
            font-size: 12px;
            font-weight: 600;
            font-family: inherit;
            color: var(--primary);
            background: var(--primary-light);
            border: 1px solid #c7d2fe;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.2s ease;
            text-align: center;
        }

        .btn-demo:hover {
            background: #e0e7ff;
            border-color: var(--primary);
        }

        .card-footer {
            margin-top: 24px;
            text-align: center;
            font-size: 13px;
        }

        .card-footer a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
            transition: color 0.2s;
        }

        .card-footer a:hover {
            color: var(--primary-hover);
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="login-wrapper">
        <div class="blob blob-1"></div>
        <div class="blob blob-2"></div>

        <div class="login-card">

            @include('components.flash')

            <div class="brand-header">
                <div class="brand-logo">K</div>
                <h1>KampusSkill</h1>
                <p>Masuk ke akun Anda untuk melanjutkan</p>
            </div>

            <form action="{{ route('login.perform') }}" method="POST">
                @csrf

                <!-- Email Input -->
                <div class="form-group">
                    <label for="email">Alamat Email Kampus</label>
                    <div class="input-input-wrap">
                        <span class="input-icon">
                            <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 002-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </span>
                        <input 
                            type="email" 
                            name="email" 
                            id="email" 
                            class="form-input @error('email') is-invalid @enderror" 
                            placeholder="nama@student.kampus.ac.id" 
                            value="{{ old('email') }}" 
                            required 
                            autofocus
                        >
                    </div>
                    @error('email')
                        <div class="error-message">
                            <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Password Input -->
                <div class="form-group">
                    <label for="password">Kata Sandi</label>
                    <div class="input-input-wrap">
                        <span class="input-icon">
                            <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                            </svg>
                        </span>
                        <input 
                            type="password" 
                            name="password" 
                            id="password" 
                            class="form-input @error('password') is-invalid @enderror" 
                            placeholder="••••••••" 
                            required
                        >
                        <button type="button" class="toggle-password" id="togglePasswordBtn">Lihat</button>
                    </div>
                    @error('password')
                        <div class="error-message">
                            <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Form Options -->
                <div class="form-options">
                    <label class="remember-me">
                        <input type="checkbox" name="remember" value="1">
                        <span>Ingat saya</span>
                    </label>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn-submit">
                    <span>Masuk Akun</span>
                    <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </button>
            </form>

            <!-- Quick Demo Login Helpers -->
            <div class="demo-section">
                <div class="demo-title">Kredensial Demo Cepat</div>
                <div class="demo-buttons">
                    <button type="button" class="btn-demo" onclick="fillDemo('susi@student.kampus.ac.id', 'password')">
                        👤 Mahasiswa (Susi)
                    </button>
                    <button type="button" class="btn-demo" onclick="fillDemo('admin@kampus.ac.id', 'password')">
                        🛡️ Admin Kampus
                    </button>
                </div>
            </div>

            <div class="card-footer">
                <a href="{{ route('services.index') }}">← Kembali ke Beranda</a>
            </div>

        </div>
    </div>

    <script>
        // Toggle password visibility
        const toggleBtn = document.getElementById('togglePasswordBtn');
        const passwordInput = document.getElementById('password');

        toggleBtn.addEventListener('click', function() {
            const isPassword = passwordInput.getAttribute('type') === 'password';
            passwordInput.setAttribute('type', isPassword ? 'text' : 'password');
            this.textContent = isPassword ? 'Sembunyi' : 'Lihat';
        });

        // Quick demo fill
        function fillDemo(email, password) {
            document.getElementById('email').value = email;
            document.getElementById('password').value = password;
        }
    </script>
</body>
</html>
