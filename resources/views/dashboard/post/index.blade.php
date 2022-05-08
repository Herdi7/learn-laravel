@extends('dashboard/layouts/main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">My Post</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <a href="/Dashboard/posts/create" class="btn btn-primary">Add New Post</a>
  </div>
</div>
@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show py-2" role="alert">
  {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if ($posts->count())
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
              <a href="/Dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning">Edit</a>
              <form action="/Dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" type="submit" onclick="return confirm('Yakin Mau Hapus?')">Delete</button>
              </form>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
@else

<div class="text-center">
  <p class="fs-2">Belum Ada Postingan <a href="/Dashboard/posts/create">Buat</a> Sekarang</p>
</div>
@endif

@endsection