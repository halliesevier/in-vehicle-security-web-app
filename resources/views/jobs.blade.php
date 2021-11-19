@extends('layouts.layouts')

@section('content')
<style>
    .table-container {
        margin: auto;
        width: 50%;
        padding: 10px;
    }

    table,
    th,
    td {
        border: 1px solid white;
        border-collapse: collapse;
    }

    th,
    td {
        background-color: #96D4D4;
    }
</style>

<div class='content'>
    <div>
        <h1> List of Jobs</h1>
    </div>

    <div class="table-container">
        <table>
            <thead>
                <tr class="border-b-2">
                    <th>Job ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Input File Name</th>
                    <th>Result File</th>
                </tr>
            </thead>
            <tbody>
                @foreach($jobs as $job)
                <tr>
                    <td>{{$job->id}}</td>
                    <td>{{$job->name}}</td>
                    <td>{{$job->email}}</td>
                    <td>{{$job->filename}}</td>

                    <form action="/submitresult" method="POST" enctype="multipart/form-data">
                        @csrf
                        <td><input type="file" name="resultfile"></td>
                        <td> <input type="submit" value="Upload Result"></td>
                    </form>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection