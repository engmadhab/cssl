@extends('admin.main-layout')

@section('content-header')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Edit</li>
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
                <h3 class="card-title">Edit</h3>
              </div>
                <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('admin.ourclient.update', $ourclient->id)}}" method="POST" enctype="multipart/form-data"> 
                        {{route('admin.ourclient.update', $ourclient->id)}}
                    @csrf
                    @method('PUT')
                        <div class="card-body">
                        <div class="form-group">
                            <label for="client_name">Client name</label>
                            <input type="text" class="form-control" id="client_name" name="client_name" value="{{$ourclient->client_name}}">
                        </div>
                        <div class="form-group">
                            <label for="client_url">Client_url</label>
                            <input type="text" class="form-control" id="client_url" name="client_url" value="{{$ourclient->client_url}}">
                        </div>
                                                
                        <div class="form-group">
                          <div class="row align-items-end">
                            <div class="col-md-6">
                              <label for="oldimage">Client Old Image</label><br>
                              <img class="img-fluid" src="{{asset('uploads/ourclient/'.$ourclient->client_image)}}" alt="">
                            </div>
                            <div class="col-md-6">                              
                              <input type="file" class="form-control" name="client_image" id="client_image">
                              <label class="custom-file-label" for="client_image">Choose new image (optional)</label>
                            </div>
                          </div>    
                        </div> 
                        
                                            
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                        <button type="submit" class="btn btn-info">Update</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
        </div>
    </div>
    <!-- /.row (main row) -->
@endsection