@extends('dashboard/layouts/main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create Post</h1>
</div>

<div class="col-lg-8">
{{-- form --}}
    <form method="post" action="/Dashboard/posts">
        @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Your Title" name="title" value="{{ old('title') }}" required>
            <label for="title">Title</label>
            <div id="titleFeedback" class="invalid-feedback mb-1">
                {{ $errors->first('title') }}
            </div>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" placeholder="Your Title" name="slug" value="{{ old('slug') }}">
            <label for="slug">Slug</label>
            <div id="slugFeedback" class="invalid-feedback mb-1">
                {{ $errors->first('title') }}
            </div>
        </div>
        <div class="mb-3">
            <select class="form-select @error('category') is-invalid @enderror" name="category_id">
                @foreach ($categories as $category)
                    @if ($category == old('category'))
                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                    @else
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif
                @endforeach
              </select>
        </div>
        @error('body')
        <div class="text-danger mb-1">
            {{ $errors->first('body') }}
        </div>
        @enderror
        <div style="height:480px;">
            <input id="body" type="hidden" name="body" value="{{ old('body') }}">
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