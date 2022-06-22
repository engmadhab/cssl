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
                    <form action="{{route('admin.service.update', $service->id)}}" method="POST" enctype="multipart/form-data"> 
                        {{route('admin.service.update', $service->id)}}
                    @csrf
                    @method('PUT')
                        <div class="card-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{$service->title}}">
                        </div>
                        <div class="form-group">
                            <label for="short_desc">Short Desc</label>
                            <input type="text" class="form-control" id="short_desc" name="short_desc" value="{{$service->short_desc}}">
                        </div>
                        <div class="form-group">
                            <label for="fulldesc">Full Desc</label>
                            <textarea id="fulldesc" class="form-control" cols="30" rows="10" name="fulldesc">{{$service->fulldesc}}</textarea>
                        </div>  
                        
                        <div class="form-group">
                          <div class="row align-items-end">
                            <div class="col-md-6">
                              <label for="oldimage">Banner Old Image</label><br>
                              <img class="img-fluid" src="{{asset('uploads/service/'.$service->serviceimage)}}" alt="">
                            </div>
                            <div class="col-md-6">                              
                              <input type="file" class="form-control" name="serviceimage" id="serviceImage">
                              <label class="custom-file-label" for="serviceImage">Choose new image (optional)</label>
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