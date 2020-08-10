@extends('adminLTE.master')

@section('content')
    <div class="mt-3 ml-3">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Create Table</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <a class="btn btn-primary mb-2" href="pertanyaan/create">Create New Post</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Title</th>
                            <th>Body</th>
                            <th style="width: 40px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($questions as $key => $question)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $question->title }}</td>
                                <td>{{ $question->content }}</td>
                                <td>
                                    <a href="/pertanyaan/{{$question->id}}" class="btn btn-info btn-sm">Show</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" align="center">No question</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
