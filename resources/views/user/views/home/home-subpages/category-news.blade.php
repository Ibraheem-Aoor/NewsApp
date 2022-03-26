 <!-- Category News Start-->
 <div>
     <div class="cat-news">
         <div class="container">
             {{-- row_1 => Business and entertainment --}}
             <div class="row">
                 <div class="col-md-6">
                     <h2>Business</h2>
                     <div class="row cn-slider">
                         @forelse(Cache::get('top_business_headlines')->articles as $article)
                             <div class="col-md-6">
                                 <div class="cn-img">
                                     <img src="{{ $article->urlToImage }}" />
                                     <div class="cn-title">
                                         <a href="#"
                                             wire:click.prevent="getArticleDetails('{{ $article->title }}' , '{{ $article->content }}' ,'{{ $article->urlToImage }}' , 'top_business_headlines' )">{{ $article->title }}
                                         </a>
                                     </div>
                                 </div>
                             </div>
                         @empty
                         @endforelse
                     </div>
                 </div>
                 <div class="col-md-6">
                     <h2>Entertainment</h2>
                     <div class="row cn-slider">
                         @forelse(Cache::get('top_entertainment_headlines')->articles as $article)
                             <div class="col-md-6">
                                 <div class="cn-img">
                                     <img src="{{ $article->urlToImage }}" />
                                     <div class="cn-title">
                                         <a wire:click.prevent="getArticleDetails('{{ $article->title }}' , '{{ $article->content }}' ,'{{ $article->urlToImage }}' , 'top_entertainment_headlines' )">{{ $article->title }}</a>
                                     </div>
                                 </div>
                             </div>
                         @empty
                         @endforelse
                     </div>
                 </div>
             </div>
             {{-- End row_1 --}}

             {{-- row_2 => sport and health --}}
             <div class="row">
                 <div class="col-md-6">
                     <h2>Sport</h2>
                     <div class="row cn-slider">
                         @forelse(Cache::get('top_sport_headlines')->articles as $article)
                             <div class="col-md-6">
                                 <div class="cn-img">
                                     <img src="{{ $article->urlToImage }}" />
                                     <div class="cn-title">
                                         <a wire:click.prevent="getArticleDetails('{{ $article->title }}' , '{{ $article->content }}' ,'{{ $article->urlToImage }}' , 'top_sport_headlines' )">{{ $article->title }}</a>
                                     </div>
                                 </div>
                             </div>
                         @empty
                         @endforelse
                     </div>
                 </div>
                 <div class="col-md-6">
                     <h2>Health</h2>
                     <div class="row cn-slider">
                         @forelse(Cache::get('top_health_headlines')->articles as $article)
                             <div class="col-md-6">
                                 <div class="cn-img">
                                     <img src="{{ $article->urlToImage }}" />
                                     <div class="cn-title">
                                         <a wire:click.prevent="getArticleDetails('{{ $article->title }}' , '{{ $article->content }}' ,'{{ $article->urlToImage }}' , 'top_health_headlines' )">{{ $article->title }}</a>
                                     </div>
                                 </div>
                             </div>
                         @empty
                         @endforelse
                     </div>
                 </div>
             </div>
             {{-- End row_2 --}}

             {{-- row_3 => Technology and sceince --}}
             <div class="row">
                 <div class="col-md-6">
                     <h2>Technology</h2>
                     <div class="row cn-slider">
                         @forelse(Cache::get('top_technology_headlines')->articles as $article)
                             <div class="col-md-6">
                                 <div class="cn-img">
                                     <img src="{{ $article->urlToImage }}" />
                                     <div class="cn-title">
                                         <a wire:click.prevent="getArticleDetails('{{ $article->title }}' , '{{ $article->content }}' ,'{{ $article->urlToImage }}' , 'top_technology_headlines' )">{{ $article->title }}</a>
                                     </div>
                                 </div>
                             </div>
                         @empty
                         @endforelse
                     </div>
                 </div>
                 <div class="col-md-6">
                     <h2>Science</h2>
                     <div class="row cn-slider">
                         @forelse(Cache::get('top_science_headlines')->articles as $article)
                             <div class="col-md-6">
                                 <div class="cn-img">
                                     <img src="{{ $article->urlToImage }}" alt="" />
                                     <div class="cn-title">
                                         <a wire:click.prevent="getArticleDetails('{{ $article->title }}' , '{{ $article->content }}' ,'{{ $article->urlToImage }}' , 'top_science_headlines' )">{{ $article->title }}</a>
                                     </div>
                                 </div>
                             </div>
                         @empty
                         @endforelse
                     </div>
                 </div>
             </div>
             {{-- End row_3 --}}
         </div>
     </div>
     <!-- Category News End-->
 </div>
