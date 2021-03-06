@extends('layout.app')

@section('content')

<div class="header"> 
    <h1 class="page-header">
        Campuses
    </h1>
    <ol class="breadcrumb">
        <li><a href="#">Dashboard</a></li>
        <li><a>Campus</a></li>
        <li class="active">View</li>
    </ol>               
</div>

<div id="page-inner">

    <form method="POST">
            @csrf
            @method('DELETE')

    <div class="panel panel-primary">
        <div class="panel-heading">
            Campus List
        </div>
        <div class="panel-body">
            <div class="table-responsive" style="overflow-y: hidden">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Campus Name</th>
                            <th>Campus Head</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-dark">
                        @if(count($campuses) >= 1)
                            @foreach($campuses as $campus)
                                <tr>
                                    <td>{{ $campus->name }}</td>
                                    <td>{{ $campus->description }}</td>
                                    <td>{{ $campus->head }}</td>
                                    <td>
                                        <a class="btn btn-warning" href="/view-campus/{{ $campus->id }}/edit">Edit</a> 
                                        <button class="btn btn-danger" formaction="{{ action('CampusController@destroy', $campus->id) }}" type="submit">Delete</button> 
                                    </td>
                                </tr>
                            @endforeach
                            
                        @else
                            <p class="alert alert-warning" style="margin:0px;">No Leave Types Found</p>
                        @endif
                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>
                <div class="text-center">
                    {{ $campuses->Links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection