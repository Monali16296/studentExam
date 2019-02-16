@extends('layout.app')

@section('title', 'Roles')
@section('content')
<div class="row">  
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Pivot table user id</th> <!--pivot table means intermediate table role_user table-->
                <th>Pivot table role id</th>
                <th>User Id</th>
                <th>User Name</th>                
            </tr>
        </thead>
        <tbody>       
            @foreach($role->user as $userInfo)
            <tr>             
                <td>{{ $role->id }}</td>
                <td>{{ $role->role_name }}</td>                
                <td>{{ $userInfo->pivot->user_id }}</td>
                <td>{{ $userInfo->pivot->role_id }}</td>
                <td>{{ $userInfo->id }}</td>
                <td>{{ $userInfo->name }}</td>                
            </tr>
            @endforeach                          
        </tbody>
    </table>
</div>
@endsection



