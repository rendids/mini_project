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
                <div class="modal-body">
                    <form action="{{ route('kategori.store') }}" method="post">
                        @csrf
                        <label for="name">Nama Kategori</label>
                        <input type="text" class="form-control" name="name" id="">
                        <label for="name">Keterangan</label>
                        <input type="text" class="form-control" name="keterangan" id="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light btn-sm" data-bs-dismiss="modal">Close</button>
                    <button type="sumbit" class="btn btn-primary btn-sm">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Exam Toppers</h4>
                <button type="button" class="btn btn-primary btn-sm mb-2" data-bs-toggle="modal"
                    data-bs-target="#basicModal">Tambah</button>
            </div>
            <div class="card-body dflex justify-content-center text-center">
                <div class="table-responsive">
                    <table class="table table-responsive-md">
                        <thead>
                            <tr class="bg-primary text-white">
                                <th><strong>NO.</strong></th>
                                <th><strong>Nama Kategori</strong></th>
                                <th><strong>Kategori</strong></th>
                                <th><strong>Aksi</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kategori as $item)
                                <tr>
                                    <td><strong>{{ $loop->iteration }}</strong></td>
                                    <td><span>{{ $item->name }}</span></td>
                                    <td>{{ $item->keterangan }}</td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <button class="btn btn-primary shadow btn-xm sharp me-1"
                                                onclick="openEditModal('{{ $item->id }}', '{{ $item->name }}', '{{ $item->keterangan }}')">
                                                <i class="fas fa-pencil"></i>
                                            </button>
                                            <form action="{{ route('kategori.destroy', ['id' => $item->id]) }}"
                                                method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger shadow btn-xm sharp me-1"><i
                                                        class="fas fa-trash"></i></button>
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
                        <label for="edit_name">Nama Kategori</label>
                        <input type="text" class="form-control" name="name" id="edit_name">

                        <label for="edit_keterangan">Keterangan</label>
                        <input type="text" class="form-control" name="keterangan" id="edit_keterangan">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light btn-sm" data-bs-dismiss="modal">Close</button>
                    <button type="submit" form="editForm" class="btn btn-primary btn-sm">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function openEditModal(id, name, keterangan) {
            // Set the form action dynamically based on the category ID
            var editForm = document.getElementById('editForm');
            editForm.action = "{{ route('kategori.update', ['id' => ':id']) }}".replace(':id', id);

            // Populate the form fields with category data
            document.getElementById('edit_name').value = name;
            document.getElementById('edit_keterangan').value = keterangan;

            // Open the edit modal
            $('#editModal').modal('show');
        }
    </script>
@endsection
