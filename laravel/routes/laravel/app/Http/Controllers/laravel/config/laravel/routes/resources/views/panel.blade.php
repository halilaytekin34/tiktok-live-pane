
<h4>Ses / Video Yükle</h4>
<form method="POST" action="{{ route('media.upload') }}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="media_type">Tür:</label>
        <select name="media_type" class="form-select">
            <option value="voice">Hoşgeldin Sesi</option>
            <option value="gift">Hediye Videosu</option>
        </select>
    </div>
    <input type="file" name="media_file" class="form-control" required>
    <button type="submit" class="btn btn-success mt-2">Yükle</button>
</form>
