@extends('layouts.app')
@section('content')
  <div class="row page-titles">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active">admin</li>
      <li class="breadcrumb-item">kategori</li>
    </ol>
  </div>
  <div class="modal fade" id="basicModal" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah Kategori</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal">
          </button>
        </div>
        <form action="{{ route('kategori.store') }}" method="post">
          @csrf
          <div class="modal-body">
            <div class="mt-2">
              <label for="name">Nama Kategori</label>
              <input type="text" class="form-control" name="name" id="">
              @error('name')
                <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="mt-2">
              <label for="name">Harga</label>
              <input type="number" class="form-control" name="harga" id="">
              @error('harga')
                <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger light btn-sm" data-bs-dismiss="modal">Batal</button>
            <button type="sumbit" class="btn btn-primary btn-sm">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Kategori</h4>
        <button type="button" class="btn btn-primary btn-sm mb-2" data-bs-toggle="modal"
          data-bs-target="#basicModal">Tambah</button>
      </div>
      <div class="card-body dflex justify-content-center text-center">
        <div class="table-responsive">
          <table class="table table-responsive-md">
            <thead>
              <tr class="bg-primary text-white">
                <th><strong>No</strong></th>
                <th><strong>Nama Kategori</strong></th>
                <th><strong>Harga</strong></th>
                <th><strong>Aksi</strong></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($kategori as $item)
                <tr>
                  <td><strong>{{ $loop->iteration }}</strong></td>
                  <td><span>{{ $item->name }}</span></td>
                  <td>{{ 'RP ' . number_format($item->harga, 0, ',', '.') }}</td>
                  <td>
                    <div class="d-flex justify-content-center">
                      <button class="btn btn-primary shadow btn-xm sharp me-1"
                        onclick="openEditModal('{{ $item->id }}', '{{ $item->name }}', '{{ $item->harga }}')">
                        <i class="fas fa-pencil"></i>
                      </button>
                      <form action="{{ route('kategori.destroy', ['id' => $item->id]) }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger shadow btn-xm sharp me-1"><i class="fas fa-trash"></i></button>
                      </form>
                    </div>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- Edit Modal -->
  <div class="modal fade" id="editModal" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Kategori</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <form id="editForm" action="" method="post">
            @csrf
            @method('put')
            <div class="mt-2"> <!-- Penambahan kelas mb-3 -->
              <label for="edit_name">Nama Kategori</label>
              <input type="text" class="form-control" name="name" id="edit_name">
              @error('name')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="mt-2"> <!-- Penambahan kelas mb-3 -->
              <label for="edit_harga" class="mt-3">Harga</label> <!-- Penambahan kelas mt-3 -->
              <input type="text" class="form-control" name="harga" id="edit_harga">
              @error('harga')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger light btn-sm" data-bs-dismiss="modal">Batal</button>
          <button type="submit" form="editForm" class="btn btn-primary btn-sm">Simpan</button>
        </div>
      </div>
    </div>
  </div>
  <script>
    function openEditModal(id, name, harga) {
      // Set the form action dynamically based on the category ID
      var editForm = document.getElementById('editForm');
      editForm.action = "{{ route('kategori.update', ['id' => ':id']) }}".replace(':id', id);

      // Populate the form fields with category data
      document.getElementById('edit_name').value = name;
      document.getElementById('edit_harga').value = harga;

      // Open the edit modal
      $('#editModal').modal('show');
    }
  </script>
@endsection
