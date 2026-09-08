<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $service->title }} - KampusSkill</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #6366f1;
            --primary-hover: #4f46e5;
            --text-main: #f8fafc;
            --text-muted: #94a3b8;
            --border-color: rgba(255, 255, 255, 0.12);
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
            background: linear-gradient(135deg, #0b132b 0%, #1c2541 40%, #0d3b66 100%);
            background-attachment: fixed;
            color: var(--text-main);
        }

        .navbar {
            background: rgba(15, 23, 42, 0.75);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-bottom: 1px solid var(--border-color);
            padding: 16px 24px;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .navbar-container {
            max-width: 900px;
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
            width: 36px;
            height: 36px;
            background: linear-gradient(135deg, #6366f1 0%, #06b6d4 100%);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            font-weight: 800;
            color: #fff;
            box-shadow: 0 4px 12px rgba(99, 102, 241, 0.3);
        }

        .btn-nav-outline {
            background: rgba(255, 255, 255, 0.05);
            color: #ffffff;
            border: 1px solid var(--border-color);
            padding: 8px 18px;
            border-radius: var(--radius-md);
            font-size: 13px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.2s ease;
            cursor: pointer;
        }

        .btn-nav-outline:hover {
            background: rgba(255, 255, 255, 0.15);
            border-color: rgba(255, 255, 255, 0.3);
        }

        .main-container {
            max-width: 900px;
            margin: 32px auto 60px;
            padding: 0 24px;
        }

        .btn-back {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #94a3b8;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 24px;
            transition: color 0.2s ease;
        }

        .btn-back:hover {
            color: #ffffff;
        }

        .content-card {
            background: rgba(15, 23, 42, 0.65);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid var(--border-color);
            border-radius: var(--radius-lg);
            padding: 32px;
            color: var(--text-main);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25);
            margin-bottom: 24px;
        }

        .header-detail {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 16px;
            margin-bottom: 16px;
        }

        .category-badge {
            display: inline-block;
            background: rgba(99, 102, 241, 0.15);
            color: #818cf8;
            border: 1px solid rgba(99, 102, 241, 0.3);
            font-size: 12px;
            font-weight: 700;
            padding: 6px 14px;
            border-radius: 20px;
            margin-bottom: 14px;
        }

        .detail-title {
            font-size: 26px;
            font-weight: 800;
            color: #ffffff;
            line-height: 1.3;
        }

        .price-tag {
            font-size: 28px;
            font-weight: 800;
            color: #38bdf8;
            white-space: nowrap;
        }

        .meta-info {
            display: flex;
            align-items: center;
            gap: 16px;
            font-size: 14px;
            color: var(--text-muted);
            padding-bottom: 20px;
            border-bottom: 1px solid var(--border-color);
            margin-bottom: 20px;
        }

        .meta-info strong {
            color: #f1f5f9;
        }

        .rating-star {
            color: #fbbf24;
            font-weight: 700;
        }

        .section-subtitle {
            font-size: 18px;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 12px;
        }

        .description-text {
            font-size: 15px;
            color: #cbd5e1;
            line-height: 1.6;
            margin-bottom: 24px;
        }

        .action-container {
            padding-top: 20px;
            border-top: 1px solid var(--border-color);
            display: flex;
            justify-content: flex-end;
        }

        .btn-order {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 14px 32px;
            background: linear-gradient(135deg, #6366f1 0%, #06b6d4 100%);
            color: #ffffff;
            font-weight: 700;
            font-size: 15px;
            border-radius: var(--radius-md);
            text-decoration: none;
            box-shadow: 0 4px 16px rgba(99, 102, 241, 0.35);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .btn-order:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(99, 102, 241, 0.5);
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            color: #cbd5e1;
            margin-bottom: 8px;
        }

        .form-input-custom {
            width: 100%;
            padding: 12px 16px;
            font-size: 14px;
            font-family: inherit;
            border: 1px solid var(--border-color);
            border-radius: var(--radius-md);
            background: rgba(30, 41, 59, 0.7);
            color: #ffffff;
            outline: none;
            transition: all 0.2s ease;
        }

        .form-input-custom:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.25);
            background: rgba(30, 41, 59, 0.9);
        }

        .form-input-custom option {
            background: #1e293b;
            color: #ffffff;
        }

        textarea.form-input-custom {
            resize: vertical;
            min-height: 110px;
        }

        .btn-submit {
            padding: 12px 28px;
            background: linear-gradient(135deg, #6366f1 0%, #4f46e5 100%);
            color: #ffffff;
            font-weight: 700;
            font-size: 14px;
            border: none;
            border-radius: var(--radius-md);
            cursor: pointer;
            box-shadow: 0 4px 14px rgba(99, 102, 241, 0.35);
            transition: transform 0.15s ease, box-shadow 0.15s ease;
        }

        .btn-submit:hover {
            transform: translateY(-1px);
            box-shadow: 0 6px 18px rgba(99, 102, 241, 0.45);
        }

        .review-item {
            padding: 16px 0;
            border-bottom: 1px solid var(--border-color);
        }

        .review-item:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

        .review-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 6px;
        }

        .reviewer-name {
            font-weight: 700;
            font-size: 14px;
            color: #f1f5f9;
        }

        .review-comment {
            font-size: 14px;
            color: #94a3b8;
            line-height: 1.5;
        }

        .empty-reviews {
            color: var(--text-muted);
            font-size: 14px;
            text-align: center;
            padding: 12px 0;
        }
    </style>
</head>
<body>

    <nav class="navbar">
        <div class="navbar-container">
            <a href="{{ route('services.index') }}" class="brand-logo">
                <div class="brand-badge">K</div>
                <span>KampusSkill</span>
            </a>
            <div>
                @auth
                    <span style="font-size: 13px; color: #cbd5e1; margin-right: 12px;">{{ auth()->user()->name }}</span>
                    <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn-nav-outline">Keluar</button>
                    </form>
                @else
                    <a href="/login" class="btn-nav-outline">Masuk</a>
                @endauth
            </div>
        </div>
    </nav>

    <main class="main-container">

        <a href="{{ route('services.index') }}" class="btn-back">
            &larr; Kembali ke Daftar Jasa
        </a>

        @if(session('success'))
            <div style="background: rgba(16, 185, 129, 0.2); border: 1px solid rgba(16, 185, 129, 0.4); color: #6ee7b7; padding: 12px 16px; border-radius: 12px; margin-bottom: 20px; font-size: 14px;">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div style="background: rgba(239, 68, 68, 0.2); border: 1px solid rgba(239, 68, 68, 0.4); color: #fca5a5; padding: 12px 16px; border-radius: 12px; margin-bottom: 20px; font-size: 14px;">
                {{ session('error') }}
            </div>
        @endif

        <div class="content-card">
            <div>
                <span class="category-badge">{{ $service->category->name ?? 'Jasa' }}</span>
            </div>
            <div class="header-detail">
                <h1 class="detail-title">{{ $service->title }}</h1>
                <div class="price-tag">Rp {{ number_format($service->price, 0, ',', '.') }}</div>
            </div>

            <div class="meta-info">
                <div>Penyedia Jasa: <strong>{{ $service->user->name ?? 'Anonim' }}</strong></div>
                <div>•</div>
                <div class="rating-star">
                    ★ {{ number_format($service->reviewers->avg('pivot.rating') ?? 0, 1) }}
                    <span style="color: var(--text-muted); font-weight: 400;">({{ $service->reviewers->count() }} Ulasan)</span>
                </div>
            </div>

            <h2 class="section-subtitle">Deskripsi Jasa</h2>
            <p class="description-text">{{ $service->description }}</p>

            <div class="action-container">
                <a href="https://wa.me/{{ $service->user->phone ?? '' }}?text=Halo,%20saya%20tertarik%20dengan%20jasa%20{{ urlencode($service->title) }}" target="_blank" class="btn-order">
                    Pesan Jasa Sekarang &rarr;
                </a>
            </div>
        </div>

        <div class="content-card">
            <h2 class="section-subtitle" style="margin-bottom: 20px;">Beri Ulasan & Rating</h2>
            
            <form action="{{ route('reviews.store', $service->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label class="form-label">Rating Bintang (1 - 5)</label>
                    <select name="rating" class="form-input-custom" required>
                        <option value="">-- Pilih Rating --</option>
                        <option value="5">5 - Sangat Memuaskan</option>
                        <option value="4">4 - Bagus</option>
                        <option value="3">3 - Cukup</option>
                        <option value="2">2 - Kurang</option>
                        <option value="1">1 - Buruk</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-label">Ulasan / Komentar</label>
                    <textarea name="comment" class="form-input-custom" placeholder="Tulis ulasan Anda mengenai jasa ini..." required></textarea>
                </div>

                <button type="submit" class="btn-submit">Kirim Ulasan</button>
            </form>
        </div>

        <div class="content-card">
            <h2 class="section-subtitle" style="margin-bottom: 20px;">Daftar Ulasan Mahasiswa</h2>

            @if($service->reviewers->count() > 0)
                @foreach ($service->reviewers as $reviewer)
                    <div class="review-item">
                        <div class="review-header">
                            <span class="reviewer-name">{{ $reviewer->name ?? 'Pengguna' }}</span>
                            <span class="rating-star">★ {{ $reviewer->pivot->rating }}.0</span>
                        </div>
                        <p class="review-comment">{{ $reviewer->pivot->comment }}</p>
                    </div>
                @endforeach
            @else
                <div class="empty-reviews">
                    Belum ada ulasan untuk jasa ini.
                </div>
            @endif
        </div>

    </main>

</body>
</html>