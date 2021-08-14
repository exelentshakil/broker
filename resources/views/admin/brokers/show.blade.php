@extends('layouts.app')

@section('content')
    <div class="properties_wraper">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="app_content">
                            <h1><a href="{{ url()->previous() }}">Back</a></h1>
                            <table class="table-auto">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Total Property</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $broker->name  }}</td>
                                        <td>{{ $broker->email  }}</td>
                                        <td>{{ $broker->phone  }}</td>
                                        <td>{{ $broker->properties->count()  }}</td>
                                        <td>
                                            <a href="" class="btn btn-primary">SHOW</a>
                                            <a href="" class="btn btn-primary">UPDATE</a>
                                            <a href="" class="btn btn-danger">DELETE</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
