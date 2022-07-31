@extends('layouts.main2')

@section('container')
    <h4 class="fw-bold pt-5 text-center">PERMINTAAN PENGADAAN BARANG / JASA (e)</h4>
    <div class="container mt-4">
        <div class="card overflow-hidden mb-4 pt-2 pb-4" style="height: 515px;">
            <div class="card-body" id="vertical-example">
                <form action="/ppbj-create" method="post">
                @csrf
                <div class="row my-2">
                    <div class="col-md-2">DIVISI</div>
                    <div class="col-md-5">:
                        <div class="input-group w-50" style="margin:-30px 0px 0px 15px;">
                            <input name="user_id" value="{{ auth()->user()->id }}" hidden>
                            <input name="" class="form-control border-0" value="{{ auth()->user()->divisi }}" disabled>
                        </div>
                    </div>

                    <div class="col-md-2">PEMOHON</div>
                    <div class="col-md-3">: 
                        <div class="input-group w-75" style="margin:-30px 0px 0px 15px;">
                            <select class="form-select border-0" id="pemohon" name="pemohon">
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
                            <input type="text" name="no_ppbj" class="form-control border-0 text-uppercase" placeholder="Ketikkan No. PPBJ...">
                        </div>
                    </div>
                    
                    <div class="col-md-2">JABATAN</div>
                    <div class="col-md-3">: 
                        <div class="input-group w-75" style="margin:-30px 0px 0px 15px;">
                            <input class="form-control border-0" id="jabatan" name="jabatan" disabled>
                        </div>
                    </div>
                </div>

                <div class="row my-2">
                    <div class="col-md-2">BEBAN BIAYA</div>
                    <div class="col-md-5">: 
                        <div class="input-group w-50 border-bottom" style="margin:-30px 0px 0px 15px;">
                            <select class="form-select border-0" name="lokasi" id="lokasi">
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
                            <input class="form-control border-0" name="nik" id="nik" disabled>
                        </div>
                    </div>
                </div>

                <div class="table-responsive mt-4">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th><a href="javascript:void(0)" class="btn btn-success btn-sm addRow">+</a></th>
                                <th style="width: 150px;">KODE BARANG</th>
                                <th>NAMA BARANG</th>
                                <th style="width: 100px;">QTY</th>
                                <th style="width: 30px;">SATUAN</th>
                                <th style="width: 200px;">HARGA (Rp.)</th>
                                <th style="width: 250px;">JUMLAH (Rp.)</th>
                            </tr>
                        </thead>
                        <tbody id="tBarang">
                            <tr>
                                <td><a href='javascript:void(0)' class='btn btn-warning btn-sm deleteRow'>-</a>
                                <td><input class="form-control border-0 text-center" name="kode[]" id="kode" disabled></td>
                                <td>
                                <div class="input-group border-0">
                                    <select class="form-select border-0" name="barang[]" id="barang">
                                        <option selected disabled>Pilih nama barang...</option>
                                        @foreach($barangs as $b)
                                        <option value="{{ $b->id }}">{{ $b->nama_barang }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                </td>
                                <td style="width:140px;"><input type="number" name="qty[]" id="qty" class="form-control border-0 text-center" placeholder="0"></td>
                                <td style="width:150px;"><input name="satuan" id="satuan" class="form-control border-0 text-center" disabled></td>
                                <td><input type="number" name="harga" id="harga" class="form-control border-0 text-center" disabled></td>
                                <td><input name="jumlah" id="jumlah" class="form-control border-0 text-center" disabled></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                    <table class="table table-bordered mt-2">
                        <thead>
                            <tr class="text-center">
                                <th style="width: 230px;">TGL. KEBUTUHAN</th>
                                <th>ALASAN PERMINTAAN</th>
                                <th style="width: 250px;">DISERAHKAN KE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td><input name="tgl_kebutuhan" type="date" class="form-control border-0 text-center" placeholder="..."></td>
                                <td><textarea name="alasan" class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea></td>
                                <td style="width:300px;">
                                <div class="input-group w-100">
                                    <select class="form-select border-0" name="alokasi" id="alokasi">
                                        <option selected disabled>Pilih alokasi barang</option>
                                        @foreach($locations as $l)
                                        <option value="{{ $l->id }}">{{ $l->nama_lokasi }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
            </div>
            <div class="float-end mt-3">
                <button type="submit" class="btn btn-outline-primary float-end me-4">
                    <span class="tf-icons bx bxs-save"></span> Simpan
                </button>
                <a href="ppbj">
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

@section('js')
<script type="text/javascript">
    $(document).ready(function(){ 
 
    var count = 0;
        $('#pemohon').change(function(){
            var karyawan = $(this).val();
            var url = '{{ route("getPemohon", ":id") }}';
            url = url.replace(':id', karyawan);
            $.ajax({
                url: url,
                type: 'get',
                dataType: 'json',
                success: function(response){
                    if(response != null){
                        $('#jabatan').val(response.jabatan);
                        $('#nik').val(response.nik);
                    }
                }
            });
        });

        $('#barang').change(function(){
            var barang = $(this).val();
            var url = '{{ route("getBarang", ":id") }}';
            url = url.replace(':id', barang);
            $.ajax({
                url: url,
                type: 'get',
                dataType: 'json',
                success: function(response){
                    if(response != null){
                        $('#kode').val(response.kode_barang);
                        $('#satuan').val(response.satuan);
                        var harga0 = response.harga;
                                    
                        var	reverse = harga0.toString().split('').reverse().join(''),
                        ribuan 	= reverse.match(/\d{1,3}/g);
                        harga1	= ribuan.join('.').split('').reverse().join('');
                        $('#harga').val(harga1);
                        $('#qty').change(function(){
                            var qty = $(this).val();
                            var harga = parseInt(response.harga);
                            var jumlah0 = qty*harga;
                            var	reverse = jumlah0.toString().split('').reverse().join(''),
                            ribuan 	= reverse.match(/\d{1,3}/g);
                            jumlah1	= ribuan.join('.').split('').reverse().join('');
                            $('#jumlah').val(jumlah1);
                        });
                    }
                }
            });
        });

        $('thead').on('click', '.addRow', function(){
            var tr = "<tr>"+
                        "<td><a href='javascript:void(0)' class='btn btn-warning btn-sm deleteRow'>-</a></td>"+
                        "<td><input class='form-control border-0 text-center' name='kode[]' id='kode"+count+"' disabled></td>"+
                        "<td>"+
                        "<div class='input-group border-0'>"+
                            "<select class='form-select border-0' name='barang[]' id='barang"+count+"' autofocus>"+
                                "<option selected disabled>Pilih nama barang...</option>"+
                                "@foreach($barangs as $b)"+
                                "<option value='{{ $b->id }}'>{{ $b->nama_barang }}</option>"+
                                "@endforeach"+
                            "</select>"+
                        "</div>"+
                        "</td>"+
                        "<td style='width:140px;'><input type='number' name='qty[]' id='qty"+count+"' class='form-control border-0 text-center' placeholder='0'></td>"+
                        "<td style='width:150px;'><input name='satuan' id='satuan"+count+"' class='form-control border-0 text-center' disabled></td>"+
                        "<td><input type='number' name='harga' id='harga"+count+"' class='form-control border-0 text-center' value='Rp.' disabled></td>"+
                        "<td><input name='jumlah' id='jumlah"+count+"' class='form-control border-0 text-center' disabled></td>"+
                    "</tr>"+
                    "<script>"+
                        "$('#barang"+count+"').change(function(){"+
                        "var barang = $(this).val();"+
                        "var url = '{{ route("getBarang", ":id") }}';"+
                        "url = url.replace(':id', barang);"+
                        "$.ajax({"+
                            "url: url,"+
                            "type: 'get',"+
                            "dataType: 'json',"+
                            "success: function(response){"+
                                "if(response != null){"+
                                    "$('#kode"+count+"').val(response.kode_barang);"+
                                    "$('#satuan"+count+"').val(response.satuan);"+
                                    "var harga0 = response.harga;"+
                                    "var reverse = harga0.toString().split('').reverse().join(''),"+
                                    "ribuan = reverse.match("+/\d{1,3}/g+");"+
                                    "harga1	= ribuan.join('.').split('').reverse().join('');"+
                                    "$('#harga"+count+"').val(harga1);"+
                                    "$('#qty"+count+"').change(function(){"+
                                        "var qty = $(this).val();"+
                                        "var harga = parseInt(response.harga);"+
                                        "var jumlah0 = qty*harga;"+
                                        "var reverse = jumlah0.toString().split('').reverse().join(''),"+
                                        "ribuan = reverse.match("+/\d{1,3}/g+");"+
                                        "jumlah1 = ribuan.join('.').split('').reverse().join('');"+
                                        "$('#jumlah"+count+"').val(jumlah1);"+
                                    "});"+
                                "}"+
                            "}"+
                        "});"+
                    "});"+
                    "<\/script>"
            count = count + 1;
            console.log(count);
            $('#tBarang').append(tr);
        });
        
        $('#tBarang').on('click', '.deleteRow', function(){
            $(this).parent().parent().remove();
        })
    });
	</script>
@endsection