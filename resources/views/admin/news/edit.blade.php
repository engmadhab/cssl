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
                    <form action="{{route('admin.news.update', $news->id)}}" method="POST" enctype="multipart/form-data"> 
                        {{route('admin.news.update', $news->id)}}
                    @csrf
                    @method('PUT')
                        <div class="card-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{$news->title}}">
                        </div>
                        <div class="form-group">
                            <label for="news_short_desc">Short Desc</label>
                            <input type="text" class="form-control" id="news_short_desc" name="news_short_desc" value="{{$news->news_short_desc}}">
                        </div>
                        <div class="form-group">
                            <label for="news_full_desc">Full Desc</label>
                            <textarea id="news_full_desc" class="form-control" cols="30" rows="10" name="news_full_desc">{{$news->news_full_desc}}</textarea>
                        </div>  
                        
                        <div class="form-group">
                          <div class="row align-items-end">
                            <div class="col-md-6">
                              <label for="oldimage">News Old Image</label><br>
                              <img class="img-fluid" src="{{asset('uploads/news/'.$news->news_image)}}" alt="">
                            </div>
                            <div class="col-md-6">                              
                              <input type="file" class="form-control" name="news_image" id="news_image">
                              <label class="custom-file-label" for="news_image">Choose new image (optional)</label>
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