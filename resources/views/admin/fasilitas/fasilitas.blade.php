@extends('admin/layout-admin/v_template')

@section('title','Fasilitas')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Fasilitas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Fasilitas</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

     <!-- Main content -->
     <section class="content">
        <div class="container-fluid">
            <a class="btn btn-success m-2" href="/admin/fasilitas/create" role="button">Tambah fasilitas</a>
            @if (session('pesan'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> Berhasil!</h5>
                    {{ session('pesan') }}
                </div>
            @endif
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                    <div class="card-tools">
                        <form action="/admin/fasilitas/pencarian/cari" method="GET">
                            <div class="input-group" style="width: 300px;">
                            <input type="text" name="cari" placeholder="Masukkan nama fasilitas" class="form-control" />
                            <div class="input-group-append">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                      <i class="fas fa-search"></i>
                                    </button>
                                  </div>
                            </div>
                            </div>
                      </form>
                    </div>
                  </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th style="width: 10px">No</th>
                        <th>Foto Fasilitas</th>
                        <th>Nama Fasilitas</th>
                        <th style="width: 200px">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $i=1 ?>
                      @foreach ($fasilitas as $item)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td><img src="{{ asset('/upload/fasilitas/'.$item->gambar_fasilitas) }}" class="product-image" style="width: 120px; height: 120px" alt="Partner Image"></td>
                            <td>{{ $item->nama_fasilitas }}</td>
                            <td>
                                <a class="btn btn-warning btn-sm mr-1" href="/admin/fasilitas/{{ $item->id_fasilitas }}/edit" role="button"> Edit</a>
                                <button type="button" class="btn btn-danger btn-sm mr-1" data-toggle="modal" data-target="#hapus{{ $item->id_fasilitas }}">
                                    Hapus
                                </button>
                            </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                  <ul class="pagination pagination-sm m-0 float-right">
                    {{ $fasilitas->links() }}
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

  @foreach ($fasilitas as $item)
    <div class="modal fade" id="hapus{{ $item->id_fasilitas }}">
        <div class="modal-dialog">
        <div class="modal-content bg-danger">
            <div class="modal-body">
            <p>Apakah data <span style="font-weight: bold">{{ $item->nama_fasilitas }}</span> ini yakin dihapus ?</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Tidak</button>
                <a class="btn btn-light" href="/admin/fasilitas/{{ $item->id_fasilitas }}" role="button">Hapus</a>
            </div>
        </div>
        <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    @endforeach


  </div>
  <!-- /.content-wrapper -->
@endsection
