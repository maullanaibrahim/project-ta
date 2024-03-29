@extends('layouts.main2')

@section('container')
    <h4 class="fw-bold pt-5 text-center">TAMBAH DATA BARANG / JASA</h4>
    <div class="container mt-4">
        <div class="card overflow-hidden m-auto mb-4 pt-2 pb-4" style="width: 35%;height: 515px;">
            <div class="card-body" id="vertical-example">
                <form action="/goods-create" method="post">
                    @csrf
                    <div class="row g-2">
                        <div class="col-md-4">
                            <div class="form-floating mb-3">
                                @foreach($goods as $g)
                                <input type="text" class="form-control @error('kode_barang') is-invalid @enderror" name="kode_barang" id="kode_barang" value="{{ $g->kode_barang+1 }}" required readonly>
                                @endforeach
                                <label>Kode Barang</label>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-floating">
                                <input type="text" class="form-control text-uppercase @error('nama_barang') is-invalid @enderror" name="nama_barang" id="nama_barang" placeholder="Nama Barang" required>
                                <label>Nama Barang / Jasa</label>
                            </div>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col-md-8">
                            <div class="form-floating mb-2">
                                <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga" id="harga" placeholder="Harga Barang" required>
                                <label>Harga (Rp.)</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating">
                                <select class="form-select" name="satuan" id="satuan" required>
                                    <option selected disabled>Pilih satuan</option>
                                    <option value="BUAH">BUAH</option>
                                    <option value="JERIGEN">JERIGEN</option>
                                    <option value="UNIT">UNIT</option>
                                    <option value="PCS">PCS</option>
                                </select>
                                <label>Satuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-divider mb-4"></div>
                    <div class="form-floating mb-3">
                        <select class="form-select" name="lead_time" id="lead_time" required>
                            <option selected disabled>Pilih lead time</option>
                            <option value="3 HARI KERJA">3 HARI KERJA</option>
                            <option value="7 HARI KERJA">7 HARI KERJA</option>
                        </select>
                        <label>Lead Time</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" name="kategori" id="kategori" required>
                            <option selected disabled>Pilih kategori barang / jasa</option>
                            <option value="ATK">ATK</option>
                            <option value="CLEANING">CLEANING</option>
                        </select>
                        <label>Kategori</label>
                    </div>
                    <div class="form-floating">
                        <select class="form-select" name="jenis_barang" id="jenis_barang" required>
                            <option selected disabled>Pilih jenis barang / jasa</option>
                            <option value="ASSET">ASSET</option>
                            <option value="NON ASSET">NON ASSET</option>
                        </select>
                        <label>Jenis Barang / Jasa</label>
                    </div>
                </div>
                <div class="float-end mt-3">
                    <button type="submit" class="btn btn-outline-primary float-end me-4">
                        <span class="tf-icons bx bxs-save"></span> Simpan
                    </button>
                    <a href="goods">
                        <button type="button" class="btn btn-outline-warning float-end me-2">
                        <span class="tf-icons bx bx-caret-left"></span> Kembali
                        </button>
                    </a>
                </div>
            </form>
        </div>
        <p class="text-center">
            © <script>document.write(new Date().getFullYear());</script>
			, dibuat oleh : <a href="#" target="_blank" class="footer-link fw-bolder">MaullanaIbrahim</a>
        </p>
    </div>
@endsection