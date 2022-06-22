@extends('admin.main-layout')

@section('content-header')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Create</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Create</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
@endsection

@section('body')
    <!-- Main row -->
    <div class="row">
        <div class="container-fluid">
        <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Create</h3>
              </div>
                <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="{{ route('ourclient.store') }}" enctype="multipart/form-data"> 
                        @csrf
                        <div class="card-body">
                        <div class="form-group">
                            <label for="client_name">Title</label>
                            <input type="text" class="form-control" id="client_name" name="client_name" placeholder="Enter client name">
                        </div>
                        <div class="form-group">
                            <label for="client_url">Client url</label>
                            <input type="text" class="form-control" id="client_url" name="client_url" placeholder="Enter client url">
                        </div>                                               
                        <div class="form-group">
                            <label for="client_image">Client Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="client_image" name="client_image">
                                    <label class="custom-file-label" for="client_image">Choose image</label>
                                </div>                            
                            </div>
                        </div>                        
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                        <button type="submit" class="btn btn-info">Save</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
        </div>
    </div>
    <!-- /.row (main row) -->
@endsection