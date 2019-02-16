@extends('layout.app')

@section('title', 'subjects')
@section('content')
<div class="row">  
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Country Id</th>
                <th>Country Name</th>
                <th>Country Post Id</th>
                <th>Country Post</th>                        
            </tr>
        </thead>
        <tbody>       
            @foreach($info as $country)            
            <tr>             
                <td>{{ $country->id }}</td>
                <td>{{ $country->name }}</td>
                @foreach ($country->posts as $post)
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>                  
                @endforeach
            </tr>
            @endforeach                  
        </tbody>
    </table>
</div>
@endsection



