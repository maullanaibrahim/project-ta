@extends('layouts.main2')

@section('container')
    <h4 class="fw-bold pt-5 text-center">TAMBAH DATA LOKASI</h4>
    <div class="container mt-4">
        <div class="card overflow-hidden m-auto mb-4 pt-2 pb-4" style="width: 35%;height: 515px;">
            <div class="card-body" id="vertical-example">
                <form action="/branch-create" method="post">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('kode_lokasi') is-invalid @enderror" name="kode_lokasi" id="kode_lokasi" placeholder="Kode Lokasi" required>
                        <label>Kode Lokasi</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('nama_lokasi') is-invalid @enderror" name="nama_lokasi" id="nama_lokasi" placeholder="Nama Lokasi" required>
                        <label>Nama Lokasi</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control @error('alamat_lokasi') is-invalid @enderror" placeholder="Tuliskan alamat lengkap disini" name="alamat_lokasi" id="alamat_lokasi" style="height: 100px" required></textarea>
                        <label>Alamat Lokasi</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" name="regional" id="regional" required>
                            <option selected disabled>Pilih regional</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                            <option value="F">F</option>
                            <option value="HO">HO</option>
                            <option value="DC">DC</option>
                        </select>
                        <label for="floatingSelect">Regional</label>
                    </div>
                    <div class="form-floating">
                        <select class="form-select" name="area" id="area" required>
                            <option selected disabled>Pilih area</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="HO">HO</option>
                            <option value="DC">DC</option>
                        </select>
                        <label for="floatingSelect">Area</label>
                    </div>
                </div>
                <div class="float-end mt-3">
                    <button type="submit" class="btn btn-outline-primary float-end me-4">
                        <span class="tf-icons bx bxs-save"></span> Simpan
                    </button>
                    <a href="branch">
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
    <script type="text/javascript">
        
    </script>
@endsection