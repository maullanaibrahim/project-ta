@extends('layouts.main2')

@section('container')
    <h4 class="fw-bold pt-5 text-center">TAMBAH DATA SUPPLIER</h4>
    <div class="container mt-4">
        <div class="card overflow-hidden m-auto mb-4 pt-2 pb-4" style="width: 35%;height: 515px;">
            <div class="card-body" id="vertical-example">
                <form action="/supplier-create" method="post">
                    @csrf
                    <div class="row g-2">
                        <div class="col-md-4">
                            <div class="form-floating mb-3">
                                @foreach($suppliers as $s)
                                <input type="number" class="form-control @error('kode_supplier') is-invalid @enderror" name="kode_supplier" id="kode_supplier" value="{{ $s->kode_supplier+1 }}" required readonly>
                                @endforeach
                                <label>Kode Supplier</label>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-floating">
                                <input type="text" class="form-control text-uppercase @error('nama_supplier') is-invalid @enderror" name="nama_supplier" id="nama_supplier" placeholder="Nama Supplier" required>
                                <label>Nama Supplier</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" name="top" id="top" required>
                            <option selected disabled>Pilih term of payment</option>
                            <option value="7 HARI">7 HARI</option>
                            <option value="14 HARI">14 HARI</option>
                            <option value="21 HARI">21 HARI</option>
                            <option value="28 HARI">28 HARI</option>
                        </select>
                        <label>Term Of Payment</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control text-uppercase @error('kontak') is-invalid @enderror" name="kontak" id="kontak" placeholder="Kontak Supplier" required>
                        <label>Kontak Supplier</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control text-uppercase @error('pic') is-invalid @enderror" name="pic" id="pic" placeholder="PIC Sales" required>
                        <label>PIC Sales</label>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control text-uppercase" placeholder="Ketikkan alamat supplier" id="alamat" name="alamat" style="height: 80px"></textarea>
                        <label>Alamat Supplier</label>
                    </div>
                </div>
                <div class="float-end mt-3">
                    <button type="submit" class="btn btn-outline-primary float-end me-4">
                        <span class="tf-icons bx bxs-save"></span> Simpan
                    </button>
                    <a href="supplier">
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