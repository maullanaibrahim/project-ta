@extends('layouts.main2')

@section('container')
    <h4 class="fw-bold pt-5 text-center">TAMBAH DATA BARANG / JASA</h4>
    <div class="container mt-4">
        <div class="card overflow-hidden m-auto mb-4 pt-2 pb-4" style="width: 35%;height: 515px;">
            <div class="card-body" id="vertical-example">
                <form action="/goods-create" method="post">
                    @csrf
                    <div class="row g-2 mb-4">
                        <div class="col-md-4">
                            <div class="form-floating">
                                @foreach($goods as $g)
                                <input type="text" class="form-control @error('kode_barang') is-invalid @enderror" id="kode_barang" name="kode_barang" value="{{ $g->kode_barang+1 }}" disabled>
                                @endforeach
                                <label>Kode Barang</label>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-floating">
                                <select class="form-select @error('lead_time') is-invalid @enderror" name="lead_time" id="lead_time" required>
                                    <option selected disabled>Pilih lead time</option>
                                    <option value="3 HARI KERJA">3 HARI KERJA</option>
                                    <option value="7 HARI KERJA">7 HARI KERJA</option>
                                    <option value="14 HARI KERJA">14 HARI KERJA</option>
                                    <option value="21 HARI KERJA">21 HARI KERJA</option>
                                </select>
                                <label>Lead Time</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" name="nama_barang" id="nama_barang" placeholder="Nama Barang" required>
                        <label>Nama Barang / Jasa</label>
                    </div>
                    <div class="row g-2 mb-4">
                        <div class="col-md-8">
                            <div class="form-floating">
                                <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" placeholder="Harga">
                                <label>Harga</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating">
                            <select class="form-select @error('satuan') is-invalid @enderror" id="satuan" name="satuan">
                                <option selected>Pilih satuan</option>
                                <option value="BUAH">BUAH</option>
                                <option value="JERIGEN">JERIGEN</option>
                                <option value="LITER">LITER</option>
                                <option value="UNIT">UNIT</option>
                                <option value="PCS">PCS</option>
                            </select>
                            <label>Satuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-floating mb-4">
                        <select class="form-select" name="jenis_barang" id="jenis_barang" required>
                            <option selected disabled>Pilih jenis barang / jasa</option>
                            <option value="ASSET">ASSET</option>
                            <option value="NON ASSET">NON ASSET</option>
                        </select>
                        <label>Jenis Barang / Jasa</label>
                    </div>
                    <div class="form-floating mb-4">
                        <select class="form-select" name="Kategori" id="kategori" required>
                            <option selected disabled>Pilih kategori barang / jasa</option>
                            <option value="ATK">ATK</option>
                            <option value="ELECTRIC">ELECTRIC</option>
                            <option value="EQUIPMENT">EQUIPMENT</option>
                            <option value="FURNITURE">FURNITURE</option>
                            <option value="UTENSIL">UTENSIL</option>
                        </select>
                        <label>Kategori</label>
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
@endsection

@section('js')
    <script type="text/javascript">
        harga.addEventListener('keyup', function(e){
            // tambahkan 'Rp.' pada saat form di ketik
            // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
            harga.value = formatRupiah(this.value, 'Rp. ');
            /* Fungsi formatRupiah */
            function formatRupiah(angka, prefix){
                var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split   		= number_string.split(','),
                sisa     		= split[0].length % 3,
                rupiah     		= split[0].substr(0, sisa),
                ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
            
                // tambahkan titik jika yang di input sudah menjadi angka ribuan
                if(ribuan){
                    separator = sisa ? '.' : '';
                    rupiah += separator + ribuan.join('.');
                }
            
                rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
                return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
            }
        });
    </script>
@endsection