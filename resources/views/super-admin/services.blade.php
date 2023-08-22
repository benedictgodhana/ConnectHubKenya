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
      <th>Service Category</th>
      <th>Title</th>  
      <th>Description</th>  
      <th>Price</th>
      <th>Duration/Hr</th>
      <th>Action</th>

      


    </tr>
  </thead>
  <tbody>
  @foreach ($services as $service)
                            <tr>
                            <td>{{ $service->category->name }}</td>                                
                            <td>{{ $service->name }}</td>
                            <td>{{ $service->description }}</td>
                            <td>{{ $service->price}}</td>
                            <td>{{ $service-> duration}}</td>





                               
                                <td>
                                <div class="btn-group"style="margin-top:-10px">
                                <button  type="button" class="btn btn-warning">Action</button>
                                <button type="button" class="btn btn-warning dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu" role="menu">
                                <div class="dropdown-item " style="margin-top:-10px">
                <a href="#" class="dropdown-item" 
                   data-toggle="modal" 
                   data-target="#updateServiceModal" 
                   data-service-id="{{ $service->id }}"
                   data-category-id="{{ $service->category->name }}"                 
                   data-name="{{ $service->name }}"
                   data-description="{{ $service->description }}"
                   data-price="{{ $service->price }}"
                   data-duration="{{ $service->duration }}"><i class="fas fa-edit"></i>
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
