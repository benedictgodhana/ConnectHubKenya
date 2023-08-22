@extends('layout/layout')

@section('space-work')

<div style="width: 10%">
    <button type="button" class="btn btn-block bg-gradient-primary" data-toggle="modal" data-target="#addServiceModal">Add Service</button>
</div>
<br>
<div class="card-body">
<table class="table table-bordered">
  <thead class="bg-info">
    <tr>
      <th>Title</th>  
      <th>Description</th>  
      <th>Action</th> 
    </tr>
  </thead>
  <tbody>
  @foreach ($categories as $category)
                            <tr>
                            <td>{{ $category->name }}</td>                                
                            <td>{{ $category->description }}</td>

                                <td>
                                <div class="btn-group">
                                <button  type="button" class="btn btn-warning">Action</button>
                                <button type="button" class="btn btn-warning dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu" role="menu">
                                <div class="dropdown-item " style="margin-top:-10px">
                                        <a href="#" class="dropdown-item" 
                                        
                                        data-duration=""><i class="fas fa-edit"></i>
                                            Update
                                        </a>
                                        <a class="dropdown-item" href="#"><i class="fas fa-power-off"></i>Deactivate</a>

                                </div>
                            </div>
                            </div>
             
                                </td>
                            </tr>
                        @endforeach

    
  </tbody>
</table>
@endsection
