@extends('layouts.main2')

@section('container')
	<h4 class="fw-bold pt-5 text-center">PURCHASE ORDER (PO)</h4>
    <div class="container mt-4">
        <div class="card overflow-hidden mb-4 pt-2 pb-4" style="height: 515px;">
            <div class="card-body" id="vertical-example">
                <form class="row g-3">
					<div class="container">
						<div class="row g-2" style="margin-bottom:8px;">
							<div class="col-auto">
								<div class="form-floating">
									<input type="date" 
									  class="form-control" 
									  id="floatingInputGrid" 
									  placeholder="name@example.com" 
									>
									<label for="floatingInputGrid">Tanggal PO</label>
								</div>
							</div>
							<div class="col-auto">
								<div class="form-floating">
									<input type="date" 
									  class="form-control" 
									  id="floatingInputGrid" 
									  placeholder="name@example.com" 
									>
									<label for="floatingInputGrid">Expired PO</label>
								</div>
							</div>
							<div class="col-md">
								<div class="form-floating">
									<input type="text" 
									  class="form-control" 
									  id="floatingInputGrid" 
									  value="KOTA BARU PARAHYANGAN 2" 
									  readonly
									>
									<label for="floatingInputGrid">Beban Biaya</label>
								</div>
							</div>
							<div class="col-auto">
								<div class="form-floating">
									<input type="text" 
									  class="form-control" 
									  id="floatingInputGrid" 
									  value="PT. GRIYA PRATAMA" 
									  readonly
									>
									<label for="floatingInputGrid">Ditujukan Untuk</label>
								</div>
							</div>
							<div class="col-auto">
								<div class="form-floating">
									<input type="text" 
									  class="form-control" 
									  id="floatingInputGrid" 
									  value="NON ASSET" 
									  readonly
									>
									<label for="floatingInputGrid">Jenis PO</label>
								</div>
							</div>
							<div class="col-auto">
								<div class="form-floating">
									<input type="text" 
									  class="form-control" 
									  id="floatingInputGrid"
									  value="MAULANA"
									  readonly
									>
									<label for="floatingInputGrid">Dibuat Oleh</label>
								</div>
							</div>
						</div>
						<div class="row g-2" style="margin-bottom:12px;">
							<div class="col-auto">
								<div class="form-floating">
									<select class="form-select" id="floatingSelect" aria-label="Floating label select example">
    									<option selected readonly>Pilih Supplier</option>
    									<option value="1">ANUGRAH JAYA ELEKTRINDO</option>
    									<option value="2">BANGUN INDAH</option>
										<option value="2">COMPUMAX</option>
										<option value="2">GRAMEDIA</option>
										<option value="2">ZENTECH</option>
  									</select>
									<label for="floatingInputGrid">Supplier</label>
								</div>
							</div>
							<div class="col-auto">
								<div class="form-floating">
									<input type="text" 
									  class="form-control" 
									  id="floatingInputGrid" 
									  value="Tempo Pembayaran" 
									  readonly
									>
									<label for="floatingInputGrid">TOP</label>
								</div>
							</div>
							<div class="col-auto">
								<div class="form-floating">
									<input type="text" 
									  class="form-control" 
									  id="floatingInputGrid" 
									  value="No. Telp / Fax / WA" 
									  readonly
									>
									<label for="floatingInputGrid">Kontak Supplier</label>
								</div>
							</div>
							<div class="col-md">
								<div class="form-floating">
									<input type="text" 
									  class="form-control" 
									  id="floatingInputGrid" 
									  value="Alamat Lengkap" 
									  readonly
									>
									<label for="floatingInputGrid">Alamat Supplier</label>
								</div>
							</div>
						</div>

						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" id="ppn" value="option1">
							<label class="form-check-label" for="ppn">PPN</label>
						</div>
						<div class="float-end fs-6">
							<label class="form-check-label" for="kc">Tanggal Kirim :</label>
							<input type="date" style="color:grey;outline: 0;border-width: 0 0 0px;margin: 0px 15px 0px 10px;" required>

							Alamat Kirim :
							<div class="form-check form-check-inline ms-3">
								<input class="form-check-input" type="radio" id="gc" value="option2">
								<label class="form-check-label" for="gc">Griya Center</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" id="kc" value="option3">
								<label class="form-check-label" for="kc">Kopo Center</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" id="lainnya" value="option3">
								<label class="form-check-label" for="kc">Lainnya</label>
								<input type="text" style="outline: 0;border-width: 0 0 0px;border-color: #cecece;margin-left:5px;" placeholder="ketik alamat lengkap...">
							</div>
						</div>
						<br>

						<div class="dropdown-divider"></div>	
						@foreach($barang as $b)
						<div class="row g-2" style="margin-bottom:8px;">
							<div class="col-sm">
								<label class="form-label">Kode</label>
								<input type="text" class="form-control" id="inputText1" readonly>
							</div>
							<div class="col-md-2">
								<label class="form-label">Nama Barang / Jasa</label>
								<input type="text" class="form-control" id="InputText2" value="{{ $b->nama_barang }}" readonly>
							</div>
							<div class="col-md">
								<label class="form-label">QTY</label>
								<input type="text" class="form-control" id="InputText3" readonly>
							</div>
							<div class="col-md">
								<label class="form-label">Satuan</label>
								<input type="text" class="form-control" id="InputText4" readonly>
							</div>
							<div class="col-md-2">
								<label class="form-label">Harga</label>
								<input type="text" class="form-control" id="inputText5" readonly>
							</div>
							<div class="col-md">
								<label class="form-label">Disc (Rp)</label>
								<input type="text" class="form-control" id="inputText6" readonly>
							</div>
							<div class="col-md">
								<label class="form-label">Disc (%)</label>
								<input type="text" class="form-control" id="inputText7" readonly>
							</div>
							<div class="col-md-2">
								<label class="form-label">Jumlah (Rp)</label>
								<input type="text" class="form-control" id="inputText8" readonly>
							</div>
						</div>
						@endforeach
						<div class="dropdown-divider"></div>

					</div>
                </form>
            </div>
			<div class="float-end">
				<a href="ppbj-detail{id}">
					<button type="button" class="btn btn-success float-end me-4">Simpan</button>
				</a>
				<a href="ppbj-detail{id}">
					<button type="button" class="btn btn-warning float-end me-2">Batal</button>
				</a>
			</div>
        </div>
        <p class="text-center mt-4">
            © <script>document.write(new Date().getFullYear());</script>
			, dibuat oleh : <a href="#" target="_blank" class="footer-link fw-bolder">MaullanaIbrahim</a>
        </p>
    </div>
@endsection