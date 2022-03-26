  <!-- Main News Start-->
  <div class="main-news">
      <div class="container">
          <div class="row">
              <div class="col-lg-9">
                  <div class="row">
                      @for ($i = 1; $i < 6; $i++)
                          @php
                              $article = Cache::get('top_general_headlines')->articles[$i];
                          @endphp
                          <div class="col-md-4">
                              <div class="mn-img">
                                  <img src="{{ $article->urlToImage }}" />
                                  <div class="mn-title">
                                      <a href="#"
                                          wire:click.prevent="getArticleDetails('{{ $article->title }}' , '{{ $article->content }}' ,'{{ $article->urlToImage }}' , 'top_general_headlines' )">{{ $article->title }}</a>
                                  </div>
                              </div>
                          </div>
                      @endfor
                  </div>
              </div>

              <div class="col-lg-3">
                  <div class="mn-list">
                      <h2>Read More</h2>
                      <ul>
                          @for ($i = 1; $i < 6; $i++)
                              @php
                                $article = Cache::get('top_general_headlines')->articles[$i];
                              @endphp
                              <li><a href="#" wire:click.prevent="getArticleDetails('{{ $article->title }}' ,
                                      '{{ $article->content }}' ,'{{ $article->urlToImage }}' ,
                                      'top_general_headlines' )">
                                      {{ $article->title }}</a></li>
                          @endfor
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Main News End-->
