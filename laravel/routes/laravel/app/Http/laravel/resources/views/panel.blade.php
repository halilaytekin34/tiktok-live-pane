@extends('layouts.app')

@section('content')
<div class="container">
    <h2>TikTok Canlı Yayın Paneli</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="/panel/start">
        @csrf
        <div class="mb-3">
            <label for="tiktok_username" class="form-label">TikTok Kullanıcı Adı</label>
            <input type="text" name="tiktok_username" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Yayına Bağlan</button>
    </form>
</div>
@endsection


---
