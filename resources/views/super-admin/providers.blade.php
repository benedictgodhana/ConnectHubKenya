@extends('layout/layout')

@section('space-work')
<div style="width: 10%">
    <button type="button" class="btn btn-block bg-gradient-primary" data-toggle="modal" data-target="#addServiceProviderModal">Add Service Provider</button>
</div>
<br>
<div class="card-body">
    <table class="table table-bordered">
        <thead class="bg-info">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Contact</th>
                <th>County</th>
                <th>SubCounty</th>
                <th>Area</th>
                <th>Service</th>
                <th>Rating</th>
                <th>Add Info</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($providers as $provider)
            <tr>
                <td>{{ $provider->user->name }}</td>
                <td>{{ $provider->user->email }}</td>
                <td>{{ $provider->gender }}</td>
                <td>{{ $provider->phone_number }}</td>
                <td>{{ $provider->county->name }}</td>
                <td>{{ $provider->subcounty->name }}</td>                
                <td>{{ $provider->area->name }}</td>               
                 <td>{{ $provider->service->name }}</td>              
                <td>{{ $provider->rating }}</td>
                <td>{{ $provider->additional_info }}</td>
                <td>
                    <!-- Add action buttons or links here -->
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
