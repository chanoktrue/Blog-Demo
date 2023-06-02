
@extends('master')
@section('title', 'Content CRUD')

@section('content')    
    <div class="container">
        <h1>Content</h1>

        <div class="mb-2">
            <a href=" {{ route('create') }}" role="button" class="btn btn-sm btn-success">Create Content</a>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ห้วข้อ</th>
                    <th>TAG</th>
                    <th>วันที่สร้าง</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contents as $content)                                            
                <tr>
                    <td> {{ $content->id}} </td>
                    <td> {{ $content->topic }} </td>
                    <td> {{ $content->tags }} </td>
                    <td> {{ $content->created_at->format('d/m/Y H:i')}} </td>
                    <td>
                        <a href=" {{ url("content/{$content->id}/edit") }}" role="button" class="btn btn-sm btn-warning">Edit</a>
                    </td>                    
                </tr>
                @endforeach
            </tbody>
        </table>
       
    </div>
@endsection
