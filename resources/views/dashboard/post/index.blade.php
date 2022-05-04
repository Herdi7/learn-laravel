@extends('dashboard/layouts/main')

@section('container')
<div class="table-responsive my-4">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Judul</th>
          <th scope="col">Category</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($posts as $post)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->category->name }}</td>
            <td>
                <a href="/Dashboard/posts/{{ $post->slug }}" class="btn btn-info">Detail</a>
                <a href="" class="btn btn-warning">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          @endforeach
      </tbody>
    </table>
  </div>
@endsection