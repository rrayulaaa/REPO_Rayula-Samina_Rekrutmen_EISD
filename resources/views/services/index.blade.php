<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda Jasa - KampusSkill</title>
    
    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary: #6366f1;
            --primary-hover: #4f46e5;
            --text-main: #f8fafc;
            --text-muted: #cbd5e1;
            --border-color: rgba(255, 255, 255, 0.15);
            --radius-lg: 20px;
            --radius-md: 12px;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            min-height: 100vh;
            background: #0f172a;
            color: var(--text-main);
            position: relative;
            overflow-x: hidden;
        }

        /* Ambient Glow Background Effects */
        .glow-1 {
            position: absolute;
            top: -100px;
            left: 50%;
            transform: translateX(-50%);
            width: 600px;
            height: 400px;
            background: radial-gradient(circle, rgba(99, 102, 241, 0.25) 0%, rgba(15, 23, 42, 0) 70%);
            pointer-events: none;
            z-index: 0;
        }

        .glow-2 {
            position: absolute;
            top: 400px;
            right: -100px;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(6, 182, 212, 0.15) 0%, rgba(15, 23, 42, 0) 70%);
            pointer-events: none;
            z-index: 0;
        }

        /* Navbar Transparan / Glassmorphism */
        .navbar {
            background: rgba(15, 23, 42, 0.8);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-bottom: 1px solid var(--border-color);
            padding: 16px 24px;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .navbar-container {
            max-width: 1140px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .brand-logo {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            color: #ffffff;
            font-weight: 800;
            font-size: 20px;
        }

        .brand-badge {
            width: 38px;
            height: 38px;
            background: linear-gradient(135deg, #6366f1 0%, #06b6d4 100%);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            font-weight: 800;
            color: #fff;
            box-shadow: 0 4px 14px rgba(99, 102, 241, 0.4);
        }

        .nav-actions {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .btn-nav-outline {
            background: rgba(255, 255, 255, 0.08);
            color: #ffffff;
            border: 1px solid var(--border-color);
            padding: 8px 18px;
            border-radius: var(--radius-md);
            font-size: 13px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.2s ease;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            cursor: pointer;
        }

        .btn-nav-outline:hover {
            background: rgba(255, 255, 255, 0.18);
            border-color: rgba(255, 255, 255, 0.35);
        }

        /* Hero Header */
        .hero {
            position: relative;
            z-index: 1;
            padding: 60px 24px 30px;
            text-align: center;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(99, 102, 241, 0.15);
            border: 1px solid rgba(99, 102, 241, 0.35);
            color: #a5b4fc;
            padding: 6px 16px;
            border-radius: 30px;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 18px;
        }

        .hero-title {
            font-size: 38px;
            font-weight: 800;
            margin-bottom: 12px;
            letter-spacing: -0.02em;
            color: #ffffff;
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }

        .hero-subtitle {
            color: #cbd5e1;
            font-size: 16px;
            max-width: 580px;
            margin: 0 auto 32px;
            line-height: 1.6;
        }

        /* Stats Bar */
        .hero-stats {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 32px;
            margin-top: 20px;
            flex-wrap: wrap;
        }

        .stat-item {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #94a3b8;
            font-size: 14px;
        }

        .stat-item i {
            color: #38bdf8;
            font-size: 16px;
        }

        .stat-item strong {
            color: #f8fafc;
        }

        /* Container Utama */
        .main-container {
            position: relative;
            z-index: 1;
            max-width: 1140px;
            margin: 0 auto 60px;
            padding: 0 24px;
        }

        /* Feature Highlights Section */
        .features-bar {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 16px;
            margin-bottom: 32px;
        }

        .feature-card {
            background: rgba(30, 41, 59, 0.5);
            border: 1px solid var(--border-color);
            border-radius: var(--radius-md);
            padding: 16px;
            display: flex;
            align-items: center;
            gap: 14px;
            backdrop-filter: blur(12px);
        }

        .feature-icon {
            width: 42px;
            height: 42px;
            border-radius: 10px;
            background: rgba(99, 102, 241, 0.2);
            color: #818cf8;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            flex-shrink: 0;
        }

        .feature-text h4 {
            font-size: 14px;
            font-weight: 700;
            color: #f8fafc;
        }

        .feature-text p {
            font-size: 12px;
            color: #94a3b8;
        }

        /* Filter Box */
        .filter-card {
            background: rgba(30, 41, 59, 0.7);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid var(--border-color);
            border-radius: var(--radius-lg);
            padding: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25);
            margin-bottom: 32px;
        }

        .filter-form {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            align-items: center;
        }

        .search-wrapper {
            flex: 1 1 260px;
            position: relative;
        }

        .search-wrapper i {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #64748b;
        }

        .input-search {
            width: 100%;
            height: 46px;
            padding: 0 16px 0 44px;
            font-size: 14px;
            font-family: inherit;
            border: 1px solid rgba(255, 255, 255, 0.18);
            border-radius: var(--radius-md);
            background: rgba(15, 23, 42, 0.8);
            color: #ffffff;
            outline: none;
            transition: all 0.2s ease;
        }

        .select-category {
            height: 46px;
            padding: 0 16px;
            font-size: 14px;
            font-family: inherit;
            border: 1px solid rgba(255, 255, 255, 0.18);
            border-radius: var(--radius-md);
            background: rgba(15, 23, 42, 0.8);
            color: #ffffff;
            outline: none;
            transition: all 0.2s ease;
            flex: 0 0 200px;
            cursor: pointer;
        }

        .input-search::placeholder {
            color: #64748b;
        }

        .input-search:focus,
        .select-category:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.3);
            background: rgba(15, 23, 42, 0.95);
        }

        .select-category option {
            background: #0f172a;
            color: #ffffff;
        }

        .btn-submit {
            height: 46px;
            padding: 0 24px;
            background: linear-gradient(135deg, #6366f1 0%, #4f46e5 100%);
            color: #ffffff;
            font-weight: 700;
            font-size: 14px;
            border: none;
            border-radius: var(--radius-md);
            cursor: pointer;
            white-space: nowrap;
            box-shadow: 0 4px 14px rgba(99, 102, 241, 0.4);
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: transform 0.15s ease, box-shadow 0.15s ease;
        }

        .btn-submit:hover {
            transform: translateY(-1px);
            box-shadow: 0 6px 18px rgba(99, 102, 241, 0.5);
        }

        .btn-reset {
            height: 46px;
            padding: 0 18px;
            background: rgba(255, 255, 255, 0.08);
            color: #cbd5e1;
            font-weight: 600;
            font-size: 14px;
            border: 1px solid var(--border-color);
            border-radius: var(--radius-md);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            white-space: nowrap;
            transition: all 0.2s ease;
        }

        .btn-reset:hover {
            background: rgba(255, 255, 255, 0.18);
            color: #ffffff;
        }

        /* Section Title */
        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .section-title {
            font-size: 20px;
            font-weight: 700;
            color: #f8fafc;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .section-title i {
            color: #6366f1;
        }

        /* Grid Jasa */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 24px;
        }

        .service-card {
            background: rgba(30, 41, 59, 0.75);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid var(--border-color);
            border-radius: var(--radius-lg);
            padding: 24px;
            display: flex;
            flex-direction: column;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            transition: transform 0.2s ease, box-shadow 0.2s ease, border-color 0.2s ease;
            position: relative;
            overflow: hidden;
        }

        .service-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 18px 40px rgba(0, 0, 0, 0.45);
            border-color: rgba(99, 102, 241, 0.5);
        }

        .category-badge {
            align-self: flex-start;
            background: rgba(99, 102, 241, 0.2);
            color: #a5b4fc;
            border: 1px solid rgba(99, 102, 241, 0.35);
            font-size: 12px;
            font-weight: 700;
            padding: 4px 12px;
            border-radius: 20px;
            margin-bottom: 16px;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .service-title {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 10px;
            color: #ffffff;
            line-height: 1.4;
        }

        .service-author {
            font-size: 13.5px;
            color: #94a3b8;
            margin-bottom: 24px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .author-avatar {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background: #475569;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 11px;
            color: #fff;
            font-weight: 700;
        }

        .service-author strong {
            color: #f1f5f9;
        }

        .service-footer {
            margin-top: auto;
            padding-top: 16px;
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        .price-container {
            display: flex;
            flex-direction: column;
        }

        .price-label {
            font-size: 11px;
            color: #94a3b8;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .service-price {
            font-size: 22px;
            font-weight: 800;
            color: #38bdf8;
        }

        .btn-card-action {
            width: 100%;
            height: 42px;
            background: linear-gradient(135deg, #6366f1 0%, #4f46e5 100%);
            color: #ffffff;
            font-weight: 700;
            border-radius: var(--radius-md);
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            font-size: 14px;
            box-shadow: 0 4px 14px rgba(99, 102, 241, 0.35);
            transition: transform 0.15s ease, box-shadow 0.15s ease;
        }

        .btn-card-action:hover {
            transform: translateY(-1px);
            box-shadow: 0 6px 18px rgba(99, 102, 241, 0.5);
        }

        .empty-state {
            grid-column: 1 / -1;
            text-align: center;
            padding: 60px 24px;
            background: rgba(30, 41, 59, 0.5);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-radius: var(--radius-lg);
            color: #cbd5e1;
            border: 1px solid var(--border-color);
        }

        .empty-state i {
            font-size: 40px;
            color: #64748b;
            margin-bottom: 16px;
        }

        /* Footer */
        .footer {
            border-top: 1px solid var(--border-color);
            background: rgba(15, 23, 42, 0.9);
            padding: 30px 24px;
            text-align: center;
            color: #64748b;
            font-size: 13px;
            position: relative;
            z-index: 1;
        }
    </style>
</head>
<body>

    <!-- Ambient Glow Effects -->
    <div class="glow-1"></div>
    <div class="glow-2"></div>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-container">
            <a href="{{ route('services.index') }}" class="brand-logo">
                <div class="brand-badge">K</div>
                <span>KampusSkill</span>
            </a>
            <div class="nav-actions">
                @auth
                    <span style="font-size: 13.5px; color: #f1f5f9; font-weight: 500; margin-right: 6px;">
                        <i class="fa-regular fa-user-circle" style="color: #818cf8;"></i> {{ auth()->user()->name }}
                    </span>
                    <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn-nav-outline">
                            <i class="fa-solid fa-right-from-bracket"></i> Keluar
                        </button>
                    </form>
                @else
                    <a href="/login" class="btn-nav-outline">
                        <i class="fa-solid fa-right-to-bracket"></i> Masuk
                    </a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Header Section -->
    <header class="hero">
        <div class="hero-badge">
            <i class="fa-solid fa-bolt"></i> Marketplace Jasa Mahasiswa
        </div>
        <h1 class="hero-title">Eksplorasi Keahlian Mahasiswa</h1>
        <p class="hero-subtitle">Solusi tepat untuk kebutuhan tugas, proyek, hingga bimbingan akademik bersama rekan seperjuangan kampus kamu.</p>
        
        <div class="hero-stats">
            <div class="stat-item">
                <i class="fa-solid fa-shield-halved"></i> <span><strong>100%</strong> Terverifikasi</span>
            </div>
            <div class="stat-item">
                <i class="fa-solid fa-graduation-cap"></i> <span>Khusus <strong>Sesama Mahasiswa</strong></span>
            </div>
            <div class="stat-item">
                <i class="fa-solid fa-clock-rotate-left"></i> <span>Pengerjaan <strong>Cepat</strong></span>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-container">

        @include('components.flash')

        <!-- Feature Highlights -->
        <div class="features-bar">
            <div class="feature-card">
                <div class="feature-icon"><i class="fa-solid fa-code"></i></div>
                <div class="feature-text">
                    <h4>Tugas Coding & Web</h4>
                    <p>Bantuan koding & skripsi</p>
                </div>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><i class="fa-solid fa-pen-nib"></i></div>
                <div class="feature-text">
                    <h4>Desain & Kreatif</h4>
                    <p>Poster, PPT, & UI/UX</p>
                </div>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><i class="fa-solid fa-book-open"></i></div>
                <div class="feature-text">
                    <h4>Penerjemahan & Teks</h4>
                    <p>Jurnal & revisi tata bahasa</p>
                </div>
            </div>
        </div>

        <!-- Filter Form Card -->
        <div class="filter-card">
            <form action="{{ route('services.index') }}" method="GET" class="filter-form">
                <div class="search-wrapper">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" name="search" class="input-search" placeholder="Cari penawaran jasa atau skill..." value="{{ request('search') }}">
                </div>
                
                <select name="category" class="select-category">
                    <option value="">Semua Kategori</option>
                    @foreach ($categories as $cat)
                        <option value="{{ $cat->id }}" {{ request('category') == $cat->id ? 'selected' : '' }}>
                            {{ $cat->name }}
                        </option>
                    @endforeach
                </select>

                <button type="submit" class="btn-submit">
                    <i class="fa-solid fa-filter"></i> Cari Jasa
                </button>
                <a href="{{ route('services.index') }}" class="btn-reset">
                    <i class="fa-solid fa-rotate"></i> Reset
                </a>
            </form>
        </div>

        <!-- Section Header -->
        <div class="section-header">
            <h2 class="section-title">
                <i class="fa-solid fa-grip"></i> Penawaran Terbaru
            </h2>
        </div>

        <!-- Grid Jasa -->
        <div class="services-grid">
            @forelse ($services as $service)
                <div class="service-card">
                    <span class="category-badge">
                        <i class="fa-solid fa-tag"></i> {{ $service->category->name }}
                    </span>
                    <h3 class="service-title">{{ $service->title }}</h3>
                    
                    <div class="service-author">
                        <div class="author-avatar">
                            {{ strtoupper(substr($service->user->name, 0, 1)) }}
                        </div>
                        <span>Oleh <strong>{{ $service->user->name }}</strong></span>
                    </div>

                    <div class="service-footer">
                        <div class="price-container">
                            <span class="price-label">Mulai dari</span>
                            <div class="service-price">Rp {{ number_format($service->price, 0, ',', '.') }}</div>
                        </div>
                        
                        <a href="{{ route('services.show', $service->id) }}" class="btn-card-action">
                            <span>Lihat Detail</span> <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            @empty
                <div class="empty-state">
                    <i class="fa-solid fa-folder-open"></i>
                    <p>Belum ada penawaran jasa yang sesuai dengan pencarian kamu.</p>
                </div>
            @endforelse
        </div>

    </main>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; {{ date('Y') }} KampusSkill. Platform Pemberdayaan Jasa & Talent Mahasiswa.</p>
    </footer>

</body>
</html>