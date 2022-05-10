@extends('dashboard/layouts/main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create Post</h1>
</div>
{{-- form --}}
<form method="post" action="/Dashboard/posts/" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-9">
            <div class="row">
                <div class="col-9">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Your Title" name="title" value="{{ old('title') }}" required>
                        <label for="title">Title</label>
                        <div id="titleFeedback" class="invalid-feedback mb-1">
                            {{ $errors->first('title') }}
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <button type="submit" class="btn btn-primary mt-2">Upload</button>
                </div>
            </div>
            <div style="height:480px;">
                <input id="body" type="hidden" name="body" value="{{ old('body',) }}">
                <trix-editor input="body" class="h-100 overflow-auto"></trix-editor>
            </div>
            @error('body')
            <div class="text-danger mb-1">
                {{ $errors->first('body') }}
            </div>
            @enderror
        </div>
        {{-- side --}}
        <div class="col-md-3">
            <div class="form-floating mb-3">
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" placeholder="Your Title" name="slug" value="{{ old('slug') }}">
                <label for="slug">Slug</label>
                @error('slug')    
                <div id="slugFeedback" class="invalid-feedback mb-1">
                    {{ $errors->first('slug') }}
                </div>
                @enderror
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
            <div class="form-floating mb-3">
                <div class="input-group">
                    <img class="img-prev img-fluid">
                    <input type="file" id="img" class="form-control" name="image" onchange="imgPreview()">
                </div>
            </div>
        </div>
    </div>
</form>


<script>
    const title = document.querySelector('#title')
    const slug = document.querySelector('#slug')

    title.addEventListener('change', function() {
        fetch(`/Dashboard/posts/getSlug?title=${title.value}`)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    })

    function imgPreview(){
        const img = document.querySelector('#img')
        const imgPrev = document.querySelector('.img-prev')

        imgPrev.style.display = 'block'

        const oFReader = new FileReader()

        oFReader.readAsDataURL(img.files[0])

        oFReader.onload = function(oFREvent) {
            imgPrev.src = oFREvent.target.result
        }
    }
</script>
@endsection