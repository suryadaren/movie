@extends('admin.template')
@section('content')
<div class="data-table-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="data-table-list">
                    <div class="basic-tb-hd">
                        <h2>List Of Movies</h2>
                    </div>
                    <div class="table-responsive">
                        <table id="data-table-basic" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Release</th>
                                    <th>Genre</th>
                                    <th>Director</th>
                                    <th style="width: 15%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- menampilkan data movie -->
                                @foreach($movie as $mov)
                                <tr>
                                    <td>{{$mov->title}}</td>
                                    <td>{{$mov->release}}</td>
                                    <td>{{$mov->genre}}</td>
                                    <td>{{$mov->director}}</td>
                                    <td>
                                            <form action="admin/{{$mov->id}}" method="post">
                                            <a href="admin/{{$mov->id}}/edit" class="btn btn-warning">edit</a>
                                            {{ method_field('DELETE') }}
                                            {{@csrf_field()}}
                                            <input type="submit" class="btn btn-danger" value="delete">
                                            </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Title</th>
                                    <th>Release</th>
                                    <th>Genre</th>
                                    <th>Director</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop