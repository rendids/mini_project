@extends('layoutsjasa.app')
@section('content')
  <style>
    .table-list th {
      color: white;
    }

    .d-flex.justify-content-center {
      justify-content: space-between;
    }

    .table-list th,
    .table-list td {
      text-align: center;
    }

    .table-list th {
      background-color: #005abb;
      color: #ffffff;
    }

    .table-list tbody tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    .table-list tbody tr:hover {
      background-color: #e0e0e0;
    }

    .btn-aksi {
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .btn-aksi:hover {
      background-color: #ff6363;
      /* Sesuaikan dengan warna hover yang diinginkan */
      color: #fff;
    }

    .img-fluid {
      max-width: 100%;
      height: auto;
    }
  </style>

  <div class="col-xl-12">
    <div class="card h-auto shadow">
      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table table-list i-table style-1 mb-4 border-0 text-center" id="guestTable-all3 ">
            <thead>
              <tr class="bg-primary text-white">
                <th>No</th>
                <th>Nama Pemesan</th>
                <th>Nomer Pemesan</th>
                <th>Alamat Pemesaan</th>
                <th>Pembayaran</th>
                <th>Total</th>
                <th>Bukti</th>
                <th class="text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($pesan as $itm)
                <tr>
                  <td><strong>{{ $loop->iteration }}</strong></td>
                  <td>
                    <div>
                      <h5 class="">{{ $itm->penyedia->user->name }}</h5>
                    </div>
                  </td>
                  <td>
                    <div>
                      <h5 class="">{{ $itm->nopemesan }}</h5>
                    </div>
                  </td>
                  <td>
                    <div>
                      <h5 class="">{{ $itm->alamatpemesan }}</h5>
                    </div>
                  </td>
                  <td>
                    <h5 class="">{{ $itm->pembayaran }}</h5>
                  </td>
                  <td>
                    <h5 class="">{{ 'RP ' . number_format($itm->total, 0, ',', '.') }}</h5>
                  </td>
                  <td>
                    <img src="{{ asset('storage/bukti/' . $itm->bukti) }}" class="img-fluid" style="width: 200px;"
                      alt="" srcset="">
                  </td>
                  <td>



                    <div class="d-flex justify-content-center">
                      {{-- <form id="rejectForm{{ $itm->id }}" action="{{ route('tolak.pesanan', ['id' => $itm->id]) }}"
                        method="POST">
                        @csrf
                        @method('patch') --}}
                        <button type="button" class="btn btn-outline-danger" onclick="" data-bs-toggle="modal"
                          data-bs-target="#tolakpesanan{{ $itm->id }}">tolak</button>
                      {{-- </form> --}}
                      <form action="{{ route('terima.pesanan', ['id' => $itm->id]) }}" method="POST">
                        @csrf
                        @method('patch')
                        <button type="submit" class="btn btn-outline-success mx-3">Terima</button>
                      </form>
                    </div>
                  </td>

                  <div class="modal fade" id="tolakpesanan{{ $itm->id }}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <form id="rejectForm{{ $itm->id }}" action="{{ route('tolak.pesanan', ['id' => $itm->id]) }}" method="POST">
                          @csrf
                          @method('patch')
                          <div class="modal-header">
                            <h5 class="modal-title">Tolak Pesanan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                          </div>
                          <div class="modal-body">
                            <label for="" class="form-label fw-bold">Alasan</label>
                            <textarea name="alasan" class="form-control" cols="30" rows="10" placeholder="masukkan alasan penolakan"></textarea>
                            @error('alasan')
                                    <span class="text-danger my-2">{{ $message }}</span>
                                @enderror
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-danger light btn-sm" data-bs-dismiss="modal">Tutup</button>
                            <button type="button" class="btn btn-primary btn-sm" onclick="confirmReject({{ $itm->id }})">Tolak</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>

                  <script>
                    function confirmReject(itemId) {
                      Swal.fire({
                        title: 'Konfirmasi',
                        text: 'Anda yakin ingin menolak pesanan?',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Ya, Tolak!',
                        cancelButtonText: 'Batal'
                      }).then((result) => {
                        if (result.isConfirmed) {
                          // Submit the form when the user clicks 'Ya, Tolak!'
                          document.getElementById('rejectForm' + itemId).submit();
                        }
                      });
                    }
                  </script>
                @empty
                  <td colspan="8">
                    <h7>Data Kosong</h7>
                  </td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
