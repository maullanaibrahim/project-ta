@extends('layouts.main2')

@section('container')
    <h4 class="fw-bold pt-5 text-center">PERMINTAAN PENGADAAN BARANG / JASA (e)</h4>
    <div class="container mt-4">
        <div class="card overflow-hidden mb-4 pt-2 pb-4" style="height: 515px;">
            <div class="card-body" id="vertical-example">
                <div class="row my-2">
                    <div class="col-md-2">DIVISI</div>
                    <div class="col-md-5">: {{ $data->user->divisi }}</div>

                    <div class="col-md-2">PEMOHON</div>
                    <div class="col-md-3">: {{ $data->karyawan->nama_karyawan }}</div>
                </div>
                <div class="row my-2">
                    <div class="col-md-2">NOMOR PPBJe</div>
                    <div class="col-md-5">: {{ $data->no_ppbj }}</div>
                        
                    <div class="col-md-2">JABATAN</div>
                    <div class="col-md-3">: {{ $data->karyawan->jabatan }}</div>
                </div>
                <div class="row my-2">
                    <div class="col-md-2">BEBAN BIAYA</div>
                    <div class="col-md-5">: <span class="badge bg-label-primary fs-6 me-1">{{ $data->beban_biaya }}</span></div>

                    <div class="col-md-2">NIK</div>
                    <div class="col-md-3">: {{ $data->karyawan->nik }}</div>
                </div>
                <div class="table-responsive mt-4">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th style="width: 30px;">#</th>
                                <th style="width: 170px;">KETERANGAN</th>
                                <th>NAMA BARANG</th>
                                <th style="width: 30px;">QTY</th>
                                <th style="width: 30px;">SATUAN</th>
                                <th style="width: 200px;">HARGA</th>
                                <th style="width: 250px;">JUMLAH</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
                                <td class="text-center"><a href>{{ $data->ppbj_detail->keterangan }}</a></td>
                                <td>{{ $data->ppbj_detail->nama_barang }}</td>
                                <td class="text-center">{{ $data->ppbj_detail->qty }}</td>
                                <td class="text-center">{{ $data->ppbj_detail->satuan }}</td>
                                <td class="text-center">{{ "Rp " . number_format($data->ppbj_detail->harga,2,',','.') }}</td>
                                <td class="text-center">{{ "Rp " . number_format($data->ppbj_detail->jumlah,2,',','.') }}</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="text-center">
									<a href="#" data-bs-toggle="modal" data-bs-target="#largeModal"><i class="bx bx-edit me-1"></i> Beli Barang</a>
                                    <!-- Modal -->
                                    <div class="modal fade mt-modal" id="largeModal" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel1">Pilih Jenis Pembelian</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row ms-2">
                                                    <div class="card p-0 me-4" style="width: 30%;">
                                                        <img src="/dist/img/icons/po2.jpg" class="card-img-top mb-card" alt="...">
                                                        <div class="card-body">
                                                            <a href="{{ route('purchase.create',$data->ppbj_detail->id) }}" class="btn btn-primary w-100">Purchase Order</a>
                                                        </div>
                                                    </div>
                                                    <div class="card p-0 me-4" style="width: 30%;">
                                                        <img src="/dist/img/icons/cash2.jpg" class="card-img-top mb-card" alt="...">
                                                        <div class="card-body">
                                                            <a href="#" class="btn btn-primary w-100">Cash</a>
                                                        </div>
                                                    </div>
                                                    <div class="card p-0" style="width: 30%;">
                                                        <img src="/dist/img/icons/transfer.jpg" class="card-img-top mb-card" alt="...">
                                                        <div class="card-body">
                                                            <a href="#" class="btn btn-primary w-100">Transfer</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                            </div>
                                            </div>
                                        </div>
                                    </div>
								</td>
                                <td colspan="4" class="text-center"><strong>TOTAL HARGA</strong></td>
                                <td class="text-center"><strong>{{ "Rp " . number_format($data->total_harga ,2,',','.') }}</strong></td>
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
                                <td class="text-uppercase"><span class="badge bg-label-warning fs-6 me-1">{{ date('d-M-Y', strtotime($data->tgl_kebutuhan)); }}</span></td>
                                <td class="text-uppercase">{{ $data->alasan}}</td>
                                <td class="text-uppercase">{{ $data->beban_biaya }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="table">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th colspan="2">APPROVAL</th>
                                <th style="width: 150px;">TGL. APPROVAL</th>
                                <th class="col-md-4">ALASAN</th>
                                <th>STATUS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($data->total_harga <= 2000000)
                            <tr>
                                <td style="width: 230px;" class="text-uppercase"><strong>CHIEF UNIT TERKAIT</strong></td>
                                <td class="text-uppercase">{{ $data->ppbj_approval->chief }}</td>
                                <td class="text-center text-uppercase">{{ date('d-M-Y', strtotime($data->ppbj_approval->tgl1)); }}</td>
                                <td class="text-center text-uppercase">{{ $data->ppbj_approval->alasan1 }}</td>
                                <td class="text-center text-uppercase"><span class="badge bg-label-success fs-6 me-1">{{ $data->ppbj_approval->status1 }}</span></td>
                            </tr>
                            @elseif ($data->total_harga <= 5000000)
                            <tr>
                                <td style="width: 230px;" class="text-uppercase"><strong>CHIEF UNIT TERKAIT</strong></td>
                                <td class="text-uppercase">{{ $data->ppbj_approval->chief }}</td>
                                <td class="text-center text-uppercase">{{ date('d-M-Y', strtotime($data->ppbj_approval->tgl1)); }}</td>
                                <td class="text-center text-uppercase">{{ $data->ppbj_approval->alasan1 }}</td>
                                <td class="text-center text-uppercase"><span class="badge bg-label-success fs-6 me-1">{{ $data->ppbj_approval->status1 }}</span></td>
                            </tr>
                            <tr>
                                <td style="width: 230px;" class="text-uppercase"><strong>MANAGER UNIT TERKAIT</strong></td>
                                <td class="text-uppercase">{{ $data->ppbj_approval->manager }}</td>
                                <td class="text-center text-uppercase">{{ date('d-M-Y', strtotime($data->ppbj_approval->tgl2)); }}</td>
                                <td class="text-center text-uppercase">{{ $data->ppbj_approval->alasan2 }}</td>
                                <td class="text-center text-uppercase"><span class="badge bg-label-success fs-6 me-1">{{ $data->ppbj_approval->status2 }}</span></td>
                            </tr>
                            @elseif ($data->total_harga <= 10000000)
                            <tr>
                                <td style="width: 230px;" class="text-uppercase"><strong>CHIEF UNIT TERKAIT</strong></td>
                                <td class="text-uppercase">{{ $data->ppbj_approval->chief }}</td>
                                <td class="text-center text-uppercase">{{ date('d-M-Y', strtotime($data->ppbj_approval->tgl1)); }}</td>
                                <td class="text-center text-uppercase">{{ $data->ppbj_approval->alasan1 }}</td>
                                <td class="text-center text-uppercase"><span class="badge bg-label-success fs-6 me-1">{{ $data->ppbj_approval->status1 }}</span></td>
                            </tr>
                            <tr>
                                <td style="width: 230px;" class="text-uppercase"><strong>MANAGER UNIT TERKAIT</strong></td>
                                <td class="text-uppercase">{{ $data->ppbj_approval->manager }}</td>
                                <td class="text-center text-uppercase">{{ date('d-M-Y', strtotime($data->ppbj_approval->tgl2)); }}</td>
                                <td class="text-center text-uppercase">{{ $data->ppbj_approval->alasan2 }}</td>
                                <td class="text-center text-uppercase"><span class="badge bg-label-success fs-6 me-1">{{ $data->ppbj_approval->status2 }}</span></td>
                            </tr>
                            <tr>
                                <td style="width: 230px;" class="text-uppercase"><strong>SENIOR MANAGER</strong></td>
                                <td class="text-uppercase">{{ $data->ppbj_approval->senior_manager }}</td>
                                <td class="text-center text-uppercase">{{ date('d-M-Y', strtotime($data->ppbj_approval->tgl3)); }}</td>
                                <td class="text-center text-uppercase">{{ $data->ppbj_approval->alasan3 }}</td>
                                <td class="text-center text-uppercase"><span class="badge bg-label-success fs-6 me-1">{{ $data->ppbj_approval->status3 }}</span></td>
                            </tr>
                            @else
                            <tr>
                                <td style="width: 230px;" class="text-uppercase"><strong>CHIEF UNIT TERKAIT</strong></td>
                                <td class="text-uppercase">{{ $data->ppbj_approval->chief }}</td>
                                <td class="text-center text-uppercase">{{ date('d-M-Y', strtotime($data->ppbj_approval->tgl1)); }}</td>
                                <td class="text-center text-uppercase">{{ $data->ppbj_approval->alasan1 }}</td>
                                <td class="text-center text-uppercase"><span class="badge bg-label-success fs-6 me-1">{{ $data->ppbj_approval->status1 }}</span></td>
                            </tr>
                            <tr>
                                <td style="width: 230px;" class="text-uppercase"><strong>MANAGER UNIT TERKAIT</strong></td>
                                <td class="text-uppercase">{{ $data->ppbj_approval->manager }}</td>
                                <td class="text-center text-uppercase">{{ date('d-M-Y', strtotime($data->ppbj_approval->tgl2)); }}</td>
                                <td class="text-center text-uppercase">{{ $data->ppbj_approval->alasan2 }}</td>
                                <td class="text-center text-uppercase"><span class="badge bg-label-success fs-6 me-1">{{ $data->ppbj_approval->status2 }}</span></td>
                            </tr>
                            <tr>
                                <td style="width: 230px;" class="text-uppercase"><strong>SENIOR MANAGER</strong></td>
                                <td class="text-uppercase">{{ $data->ppbj_approval->senior_manager }}</td>
                                <td class="text-center text-uppercase">{{ date('d-M-Y', strtotime($data->ppbj_approval->tgl3)); }}</td>
                                <td class="text-center text-uppercase">{{ $data->ppbj_approval->alasan3 }}</td>
                                <td class="text-center text-uppercase"><span class="badge bg-label-success fs-6 me-1">{{ $data->ppbj_approval->status3 }}</span></td>
                            </tr>
                            <tr>
                                <td style="width: 230px;" class="text-uppercase"><strong>DIREKTUR</strong></td>
                                <td class="text-uppercase">{{ $data->ppbj_approval->direktur }}</td>
                                <td class="text-center text-uppercase">{{ date('d-M-Y', strtotime($data->ppbj_approval->tgl4)); }}</td>
                                <td class="text-center text-uppercase">{{ $data->ppbj_approval->alasan4 }}</td>
                                <td class="text-center text-uppercase"><span class="badge bg-label-success fs-6 me-1">{{ $data->ppbj_approval->status4 }}</span></td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="float-end mt-3">
                <a href="#">
                    <button type="button" class="btn btn-outline-primary float-end me-4">
                        <span class="tf-icons bx bx-printer"></span> Cetak
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
@endsection
