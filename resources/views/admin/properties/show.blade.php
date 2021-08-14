@extends('layouts.app')

@section('content')
    <div class="properties_wraper">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="app_content">
                            <h1>Brokers</h1>
                            <table class="table-auto">
                                <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Zip</th>
                                    <th>Broker Name</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach( $properties as $property )
                                    <tr>
                                        <td>{{ $property->title  }}</td>
                                        <td>{{ $property->city  }}</td>
                                        <td>{{ $property->state  }}</td>
                                        <td>{{ $property->zip  }}</td>
                                        <td><a href="{{ route('admin.brokers.show', $property->broker->id) }}"> {{ $property->broker->name  }} </a></td>
                                        <td>
                                            <a href="" class="btn btn-primary">SHOW</a>
                                            <a href="" class="btn btn-primary">UPDATE</a>
                                            <a href="" class="btn btn-danger">DELETE</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $properties->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
