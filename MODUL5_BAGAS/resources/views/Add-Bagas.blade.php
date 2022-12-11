@extends('layout')

@section('content')
<div class="container" style="padding-top: 30px;">
        <h4>Tambah Mobil</h4>
        <a>Tambah Mobil Baru Anda Ke List Showroom</a>

        <div style="padding-top: 35px;">
            <form action="/product" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Mobil</label>
                    <input class="form-control" name="name" id="name" type="text"
                        placeholder="Mercedes C200">
                </div>
                <div class="mb-3">
                    <label for="owner" class="form-label">Nama Pemilik</label>
                    <input class="form-control" name="owner" id="owner" type="text"
                        placeholder="Bagas - 1202201372">
                </div>
                <div class="mb-3">
                    <label for="merk" class="form-label">Merk</label>
                    <input class="form-control" name="merk" id="merk" type="text" placeholder="Mercedes">
                </div>
                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal Beli</label>
                    <input class="form-control" name="tanggal" id="tanggal" type="date"
                        placeholder="01/01/2022">
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"
                        placeholder="Mercedes Benz C-Class Sedan C 200 Avantgarde Line adalah 5 Kursi Sedan yang tersedia seharga Rp 1,12 Milyar di Indonesia. Mobil ini tersedia dalam 3 warna dan Otomatis opsi transmisi di Indonesia. Dimensi C-Class Sedan C 200 Avantgarde Line adalah 4686 mm L x 1810 mm W x 1442 mm H. Lebih dari 2 pengguna telah memberikan penilaian untuk C-Class Sedan C 200 Avantgarde Line berdasarkan fitur, jarak tempuh, kenyamanan tempat duduk dan kinerja mesin."></textarea>
                </div>
                <div class="custom-file" style="margin-top: 30px; margin-bottom: 30px">
                    <label for="name">Foto</label>
                    <input type="file" class="custom-file-input" id="img_path" name="img_path">
                    <label class="custom-file-label" for="customFile">Choose image</label>
                </div>
                <label for="status">Status Pembayaran</label></br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="status"
                        value="Lunas">
                    <label class="form-check-label" for="Lunas">Lunas</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="status"
                        value="Belum Lunas">
                    <label class="form-check-label" for="Belum Lunas">Belum Lunas</label>
                </div>
                <div style="padding-top: 30px;">
                    <button type="submit" class="btn btn-primary" role="button" name="submit">Selesai</button>
                </div>
                </form>
        </div>

    </div>
@endsection