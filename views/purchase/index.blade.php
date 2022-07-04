@extends('layouts.main')

@section('content')
	<!-- Content Row -->
    <div class="row">
		<div class="col-lg-12">
			<div class="card overflow-hidden mb-4 p-0" style="height: 570px;">
				<div class="card-body" id="vertical-example">
					<figure class="text-center">
						<blockquote class="blockquote">
							<h4><b>DATA PURCHASE ORDER (PO)</b></h4>
						</blockquote>
						<figcaption class="blockquote-footer"></figcaption>
					</figure>
					<div class="table-responsive">
						<table id="ppbj" class="table table-striped" style="width:100%">
							<thead>
								<tr>
									<th>Tanggal</th>
									<th>Nomor PO</th>
									<th>Beban Biaya</th>
									<th>Supplier</th>
									<th>Pembuat</th>
									<th>Status</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td style="font-size:13px;">1-JUL-2022</td>
									<td style="font-size:13px;">PO0722001</td>
									<td style="font-size:13px;">KOTA BARU PARAHYANGAN 2</td>
									<td style="font-size:13px;">UNIVERSAL CAHAYA INTRADA</td>
									<td style="font-size:13px;">MAULANA</td>
                                    <td style="font-size:13px;"><span class="badge bg-label-success fs-6 me-1">RECEIVED</span></td>
									<td style="font-size:13px;">
                                    <a href="#"><button type="button" class="btn btn-outline-primary btn-sm"><i class="bx bx-show-alt me-1"></i> Detail</button></a>
									<a href="#"><button type="button" class="btn btn-outline-warning btn-sm"><i class="bx bxs-trash me-1"></i> Hapus</button></a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
    </div>
	<!-- / Content Row -->
@endsection