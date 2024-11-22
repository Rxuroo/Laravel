<form action="{{ route('admin.penerbit.update', $penerbit->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="nama">Nama Penerbit:</label>
    <input type="text" id="nama" name="nama" value="{{ $penerbit->penerbit_nama }}" required>

    <label for="alamat">Alamat:</label>
    <input type="text" id="alamat" name="alamat" value="{{ $penerbit->penerbit_alamat }}" required>

    <label for="notelp">No. Telepon:</label>
    <input type="text" id="notelp" name="notelp" value="{{ $penerbit->penerbit_notelp }}" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{{ $penerbit->penerbit_email }}" required>

    <button type="submit">Update</button>
</form>
