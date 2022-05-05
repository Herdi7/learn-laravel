@extends('dashboard/layouts/main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create Post</h1>
</div>

<div class="col-lg-8">
{{-- form --}}
    <form action="/Dashboard/posts/store" method="post">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="title" placeholder="Your Title" name="title">
            <label for="title">Title</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="slug" placeholder="Your Title" name="slug" disabled readonly>
            <label for="slug">Slug</label>
        </div>
        <div class="mb-3">
            <select class="form-select">
                <option selected>Pilih Kategori dari Artikel</option>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
              </select>
        </div>
        <div style="height:400px;">
            <input id="body" type="hidden" name="body">
            <trix-editor input="body" class="h-100 overflow-auto"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary mt-5">Upload</button>
    </form>
</div>


<script>
    const title = document.querySelector('#title')
    const slug = document.querySelector('#slug')

    title.addEventListener('change', function() {
        fetch(`/Dashboard/posts/getSlug?title=${title.value}`)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    })
</script>
@endsection