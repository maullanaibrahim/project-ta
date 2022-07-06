@extends('layouts.main2')

@section('container')
    <h4 class="fw-bold pt-5 text-center">PERMINTAAN PENGADAAN BARANG / JASA (e)</h4>
    <div class="container mt-4">
        <div class="card overflow-hidden mb-4 pt-2 pb-4" style="height: 515px;">
            <div class="card-body" id="vertical-example">
                <div class="row my-2">
                    <div class="col-md-2">DIVISI</div>
                    <div class="col-md-5">: 
                        <div class="input-group w-50" style="margin:-30px 0px 0px 15px;">
                            <input class="form-control border-0" disabled>
                        </div>
                    </div>

                    <div class="col-md-2">PEMOHON</div>
                    <div class="col-md-3">: 
                        <div class="input-group w-75" style="margin:-30px 0px 0px 15px;">
                            <select class="form-select border-0" id="pemohon">
                                <option selected disabled>Pilih nama pemohon</option>
                                @foreach($karyawans as $k)
                                <option value="{{ $k->id }}">{{ $k->nama_karyawan }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row my-2">
                    <div class="col-md-2">NOMOR PPBJe</div>
                    <div class="col-md-5">: 
                        <div class="input-group w-50 border-bottom" style="margin:-30px 0px 0px 15px;">
                            <input class="form-control border-0" placeholder="Ketikkan No. PPBJ...">
                        </div>
                    </div>
                    
                    <div class="col-md-2">JABATAN</div>
                    <div class="col-md-3">: 
                        <div class="input-group w-75" style="margin:-30px 0px 0px 15px;">
                            <input class="form-control border-0" value="" disabled>
                        </div>
                    </div>
                </div>

                <div class="row my-2">
                    <div class="col-md-2">BEBAN BIAYA</div>
                    <div class="col-md-5">: 
                        <div class="input-group w-50 border-bottom" style="margin:-30px 0px 0px 15px;">
                            <select class="form-select border-0" id="lokasi">
                                <option selected disabled>Pilih beban biaya</option>
                                @foreach($locations as $l)
                                <option value="{{ $l->id }}">{{ $l->nama_lokasi }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-md-2">NIK</div>
                    <div class="col-md-3">: 
                        <div class="input-group w-75" style="margin:-30px 0px 0px 15px;">
                            <input class="form-control border-0" disabled>
                        </div>
                    </div>
                </div>

                <div class="table-responsive mt-4">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th style="width: 150px;">KODE BARANG</th>
                                <th>NAMA BARANG</th>
                                <th style="width: 100px;">QTY</th>
                                <th style="width: 30px;">SATUAN</th>
                                <th style="width: 200px;">HARGA</th>
                                <th style="width: 250px;">JUMLAH</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input class="form-control border-0" disabled></td>
                                <td>
                                <div class="input-group border-0">
                                    <select class="form-select border-0" name="barang" id="barang">
                                        <option selected disabled>Pilih nama barang...</option>
                                        @foreach($barangs as $b)
                                        <option value="{{ $b->id }}">{{ $b->nama_barang }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                </td>
                                <td><input class="form-control border-0 text-center" placeholder="..."></td>
                                <td class="text-center"><input name="satuan" id="satuan" class="form-control border-0" disabled></td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                            </tr>
                            <tr>
                                <td colspan="5" class="text-center"><strong>TOTAL HARGA</strong></td>
                                <td class="text-center"><strong>-</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="table-responsive my-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th style="width: 230px;">TGL. KEBUTUHAN</th>
                                <th>ALASAN PERMINTAAN</th>
                                <th style="width: 250px;">DISERAHKAN KE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td><input type="date" class="form-control border-0 text-center text-uppercase" placeholder="..."></td>
                                <td><input class="form-control border-0 text-center text-uppercase" placeholder="Sebutkan alasan permintaan ..."></td>
                                <td><input id="alokasi" class="form-control border-0 text-uppercase" disabled></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="float-end mt-3">
                <a href="#">
                    <button type="button" class="btn btn-outline-primary float-end me-4">
                        <span class="tf-icons bx bxs-save"></span> Simpan
                    </button>
                </a>
                <a href="ppbj">
                    <button type="button" class="btn btn-outline-warning float-end me-2">
                    <span class="tf-icons bx bx-caret-left"></span> Kembali
                    </button>
                </a>
            </div>
        </div>
        <p class="text-center">
            © <script>document.write(new Date().getFullYear());</script>
			, dibuat oleh : <a href="#" target="_blank" class="footer-link fw-bolder">MaullanaIbrahim</a>
        </p>
    </div>
    <script type="text/javascript">
        
    </script>
@endsection