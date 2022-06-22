@extends('admin.main-layout')

@section('content-header')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">All Clients List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">All Clients List</li>
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
          <div class="card-body p-0">
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Client Name</th>
                      <th>Client url</th>
                      <th>Client Image</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $i=0; ?>
                  @foreach ($ourclients as $ourclient)
                    <tr>
                      <td>{{++$i}}</td>
                      <td>{{$ourclient->client_name}}</td>
                      <td>{{$ourclient->client_url}}</td>
                      <td><img src="{{asset('uploads/ourclient/'.$ourclient->client_image)}}" width="100" alt=""></td>
                      <td><a class="btn btn-default" href="{{route('admin.ourclient.edit', $ourclient->id)}}"><i class="fas fa-edit"></i></a>
                      <a class="btn btn-default" href="#deleteModal{{$ourclient->id}}" data-toggle="modal"><i class="fas fa-trash-alt"></i></a>
                    
                    <!-- Modal -->
                <div class="modal fade" id="deleteModal{{$ourclient->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="{{route('admin.ourclient.delete', $ourclient->id)}}" method="post">
                        @csrf 
                        <button type="submit" class="btn btn-danger">Permanent Delete</button>                         
                        </form>
                        
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>  
                      
                      </div>
                    </div>
                  </div>
                </div>
                    
                    
                    </td>
                    </tr>
                    @endforeach 
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.row (main row) -->
@endsection