<aside class="aside-components">
  <div class="aside-component">
    <!-- Heading Component-->
    <article class="heading-component">
      <div class="heading-component-inner">
        <h5 class="heading-component-title">Find By Categories
        </h5>
        @foreach ($categories as $category)
        <div class="game-result-team game-result-team-horizontal game-result-team-first">
            <div class="game-result-team-title">
              <h6 class="game-result-team-name"><a href="{{ (request('search')) ? '?search='.request('search').'&category='.$category->slug : 'Category/'.$category->slug }}" class="{{ (request('category') == $category->slug ?? false) ? 'badge badge-secondary' : '' }}">{{ ($category->name ) }}</a></h6>
            </div>
            <div class="game-result-score game-result-score-big game-result-team-win">{{ $category->posts->count() }}
            </div>
        </div>
        @endforeach
      </div>
      <div class="heading-component-inner mt-3">
        <h5 class="heading-component-title">Find By Author
        </h5>
        @foreach ($authors as $author)
        <div class="game-result-team game-result-team-horizontal game-result-team-first">
            <div class="game-result-team-title">
              <h6 class="game-result-team-name"><a href="{{ (request('search')) ? '?search='.request('search').'&author='.$author->username : 'Author/'.$author->username }}" class="{{ (request('author') == $author->username) ? 'badge badge-secondary' : '' }}">{{ ($author->name ) }}</a></h6>
            </div>
            <div class="game-result-score game-result-score-big game-result-team-win">{{ $category->posts->count() }}
            </div>
        </div>
        @endforeach
      </div>
    </article>
  </div>
</aside> 