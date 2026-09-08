@if (session('success'))
    <div style="background-color: #d4edda; color: #155724; padding: 12px; margin-bottom: 20px; border: 1px solid #c3e6cb; border-radius: 4px;">
        <strong>Berhasil!</strong> {{ session('success') }}
    </div>
@endif

@if ($errors->any())
    <div style="background-color: #f8d7da; color: #721c24; padding: 12px; margin-bottom: 20px; border: 1px solid #f5c6cb; border-radius: 4px;">
        <strong>Terjadi Kesalahan:</strong>
        <ul style="margin: 5px 0 0 20px; padding: 0;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif