@foreach($users as $user)
<form method="POST" action="/admin/user/update/{{ $user->id }}">
  @csrf
  <h5>{{ $user->name }} ({{ $user->email }})</h5>
  <label>
    <input type="checkbox" name="welcome_enabled" {{ $user->welcome_enabled ? 'checked' : '' }}>
    Hoşgeldin Aktif
  </label>
  <label>
    <input type="checkbox" name="gift_enabled" {{ $user->gift_enabled ? 'checked' : '' }}>
    Hediye Ses Aktif
  </label>
  <input type="text" name="proxy" value="{{ $user->proxy }}" placeholder="Proxy">
  <button class="btn btn-sm btn-primary mt-1">Kaydet</button>
  <hr>
</form>
@endforeach

🛡 users tablosuna bu sütunları eklemelisin:

php artisan make:migration add_features_to_users_table

// database/migrations/...add_features_to_users_table.php
Schema::table('users', function (Blueprint $table) {
    $table->boolean('welcome_enabled')->default(true);
    $table->boolean('gift_enabled')->default(true);
    $table->string('proxy')->nullable();
});

php artisan migrate


---
