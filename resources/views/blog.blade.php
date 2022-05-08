@extends('layout/main')

@section('main')
  @if ($posts->count())
      <?php $skip = 0; ?>
    @if ($title == 'All Post' )
      @include('partials/slideShow')
      <?php $skip = 3; ?>
    @endif
    <section class="section section-md bg-gray-100">
      <div class="container">
          <div class="row row-50">
            <div class="col-lg-8">
              <div class="main-component">
                {{-- heading Component --}}
                <article class="heading-component">
                  <div class="heading-component-inner">
                    <h5 class="heading-component-title">{{ (request('search')) ? 'Result For ' . "'".request('search')."'" : $title }}
                    </h5><a class="button button-xs button-gray-outline" href="#">All news</a>
                  </div>
                </article>
                <!-- Post Future-->
                <div class="row row-30">
                @foreach ($posts->skip($skip) as $post)
                  <div class="col-md-6">
                    <article class="post-future">
                      <a class="post-future-figure" href="#">
                        <img src="{{ asset("storage/$post->image") }}" alt="" width="368" height="287"/>
                      </a>
                      <div class="post-future-main">
                        <h4 class="post-future-title"><a href="/Blog/{{ $post->slug }}">{{ $post->title }}</a></h4>
                        <div class="post-future-meta">
                          <!-- Badge-->
                          <div class="badge badge-secondary">{{ $post->category->name }}
                          </div>
                          <div class="post-future-time"><span class="icon mdi mdi-clock"></span>
                            <time datetime="2020">{{ $post->created_at->diffForHumans() }}</time>
                          </div>
                        </div>
                        <hr/>
                        <div class="post-future-text">
                          <p>{{ $post->excerpt }}</p>
                        </div>
                        <div class="post-future-footer group-flex group-flex-xs"><a class="button button-gray-outline" href="/Blog/{{ $post->slug }}">Read more</a>
                          <div class="post-future-share">
                            <div class="inline-toggle-parent">
                              <div class="inline-toggle icon material-icons-share"></div>
                              <div class="inline-toggle-element">
                                <ul class="list-inline">
                                  <li>Share</li>
                                  <li><a class="icon fa-facebook" href="#"></a></li>
                                  <li><a class="icon fa-twitter" href="#"></a></li>
                                  <li><a class="icon fa-google-plus" href="#"></a></li>
                                  <li><a class="icon fa-instagram" href="#"></a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </article>
                  </div>
                  @endforeach
                </div>
              </div>
              <div class="col-12 flex mt-3">
                {{ $posts->links() }}
              </div>
            </div>
          
  @else
  <h1 class="text-center text-danger">Nothing here</h1>
  @endif
  {{--  --}}
      <div class="col-md-3">
        @include('partials/sidebar')
      </div>
    </div>
  </div>
</section>
@endsection


