@extends('layout.app')

@section('title', 'Registration')
@section('content')
<div class="row">  
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Home id</th>
                <th>Home name</th>                
                <th>Home creation date</th>                
                <th>Home updation date</th>                                                
            </tr>
        </thead>
        <tbody>     

            <tr>             
                <td>{{ $a->home->id }}</td>
                <td>{{ $a->home->name }}</td>                                
                <td>{{ $a->home->created_at }}</td>
                <td>{{ $a->home->updated_at }}</td>                
            </tr>

        </tbody>
    </table>
</div>


@endsection



