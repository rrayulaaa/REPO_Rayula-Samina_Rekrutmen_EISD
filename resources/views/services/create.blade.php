<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Penawaran Jasa - KampusSkill</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #4f46e5;
            --primary-hover: #4338ca;
            --surface: #ffffff;
            --background: #f8fafc;
            --text-main: #0f172a;
            --text-muted: #64748b;
            --border-color: #e2e8f0;
            --error-color: #ef4444;
            --radius-lg: 12px;
            --radius-md: 8px;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Plus Jakarta Sans', Arial, sans-serif;
            background: var(--background);
            color: var(--text-main);
            max-width: 800px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .header-bar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 24px;
        }

        .header-bar h1 {
            font-size: 24px;
            font-weight: 800;
            color: var(--text-main);
        }

        .btn-back {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            padding: 8px 14px;
            border-radius: var(--radius-md);
            background: #eef2ff;
            transition: all 0.2s ease;
        }

        .btn-back:hover {
            background: #e0e7ff;
        }

        .form-card {
            background: var(--surface);
            border: 1px solid var(--border-color);
            border-radius: var(--radius-lg);
            padding: 32px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 8px;
            color: #334155;
        }

        .form-control {
            width: 100%;
            padding: 12px 14px;
            font-size: 14px;
            font-family: inherit;
            color: var(--text-main);
            background: #f8fafc;
            border: 1.5px solid var(--border-color);
            border-radius: var(--radius-md);
            outline: none;
            transition: all 0.2s ease;
        }

        .form-control:focus {
            background: #ffffff;
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(79, 70, 229, 0.1);
        }

        .form-control.is-invalid {
            border-color: var(--error-color);
            background: #fef2f2;
        }

        textarea.form-control {
            resize: vertical;
            min-height: 120px;
        }

        .error-text {
            font-size: 12px;
            color: var(--error-color);
            margin-top: 6px;
            font-weight: 500;
        }

        .btn-submit {
            width: 100%;
            padding: 14px;
            background: var(--primary);
            color: #ffffff;
            font-size: 15px;
            font-weight: 700;
            font-family: inherit;
            border: none;
            border-radius: var(--radius-md);
            cursor: pointer;
            transition: all 0.2s ease;
            box-shadow: 0 4px 12px rgba(79, 70, 229, 0.25);
            margin-top: 10px;
        }

        .btn-submit:hover {
            background: var(--primary-hover);
            box-shadow: 0 6px 16px rgba(79, 70, 229, 0.35);
        }

        .helper-text {
            font-size: 13px;
            color: var(--text-muted);
            margin-top: 4px;
        }
    </style>
</head>
<body>

    @include('components.flash')

    <div class="header-bar">
        <div>
            <h1>Tambah Penawaran Jasa Baru</h1>
            <p class="helper-text">Tawarkan keahlian dan jasa Anda kepada mahasiswa & komunitas kampus</p>
        </div>
        <a href="{{ route('services.index') }}" class="btn-back">
            ← Kembali
        </a>
    </div>

    <div class="form-card">
        <form action="{{ route('services.store') }}" method="POST">
            @csrf

            <!-- Judul Jasa -->
            <div class="form-group">
                <label for="title">Judul Jasa / Penawaran *</label>
                <input 
                    type="text" 
                    name="title" 
                    id="title" 
                    class="form-control @error('title') is-invalid @enderror" 
                    placeholder="Contoh: Jasa Desain Poster & Banner Tugas" 
                    value="{{ old('title') }}" 
                    required
                >
                @error('title')
                    <div class="error-text">{{ $message }}</div>
                @enderror
            </div>

            <!-- Kategori Jasa -->
            <div class="form-group">
                <label for="category_id">Kategori Jasa *</label>
                <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror" required>
                    <option value="">-- Pilih Kategori Jasa --</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <div class="error-text">{{ $message }}</div>
                @enderror
            </div>

            <!-- Harga -->
            <div class="form-group">
                <label for="price">Harga Jasa (Rp) *</label>
                <input 
                    type="number" 
                    name="price" 
                    id="price" 
                    class="form-control @error('price') is-invalid @enderror" 
                    placeholder="Contoh: 50000" 
                    value="{{ old('price') }}" 
                    min="0"
                    step="1000"
                    required
                >
                <div class="helper-text">Masukkan angka tanpa titik atau koma (misal: 50000)</div>
                @error('price')
                    <div class="error-text">{{ $message }}</div>
                @enderror
            </div>

            <!-- Deskripsi Jasa -->
            <div class="form-group">
                <label for="description">Deskripsi Lengkap Jasa *</label>
                <textarea 
                    name="description" 
                    id="description" 
                    class="form-control @error('description') is-invalid @enderror" 
                    placeholder="Jelaskan detail jasa yang ditawarkan, estimasi pengerjaan, dan ketentuan lainnya..." 
                    required
                >{{ old('description') }}</textarea>
                @error('description')
                    <div class="error-text">{{ $message }}</div>
                @enderror
            </div>

            <!-- Tombol Simpan -->
            <button type="submit" class="btn-submit">
                Simpan & Publikasikan Jasa
            </button>
        </form>
    </div>

</body>
</html>
