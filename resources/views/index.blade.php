
<!-- index.blade.php -->
@extends('master')
@section('content')
    <div class="container">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Post</th>
                <th colspan="2">Action</th>
            </tr>
            </thead>
            <tbody>
            @php
                $i=1;
            @endphp
            @foreach($cruds as $post)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$post['title']}}</td>
                    <td>{{$post['post']}}</td>
                    <td><a href="{{action('CRUDController@edit', $post['id'])}}" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form action="{{action('CRUDController@destroy', $post['id'])}}" method="post">
                            {{csrf_field()}}
                            <input name="_method" type="hidden" value="DELETE">
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a class="btn btn-success " href="{{action('CRUDController@create')}}">Add</a>
    </div>
@endsection

