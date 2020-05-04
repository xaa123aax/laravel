@extends('layouts.app')

@section('css')
    <link rel="stylesheet" herf="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">最新消息管理</div>

                    <div class="card-body">
                     <a class="btn btn-success" href="/admin/news/create">新增最新消息</a>
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Img</th>
                                <th>Sort</th>
                                <th>功能</th>
                            </tr>
                            </thead>
                            <tbody>


                            @foreach($news_lists as $news)
                                <tr>
                                    <td>{{$news->title}}</td>
                                    <td>{{$news->description}}</td>
                                    <td><img src="{{$news->image_url}}" width="250" alt=""></td>
                                    <td>{{$news->sort}}</td>
                                    <td>
                                        <a class="btn btn-primary btn-sm" href="">編輯</a>
                                        <a class="btn btn-danger btn-sm" href="">刪除</a>
                                    </td>
                                <tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
@endsection
