 <!-- Top News Start-->
 <div class="top-news">
     <div class="container">
         <div class="row">
             <div class="col-md-6 tn-left">
                 <div class="row tn-slider">
                     @forelse(Cache::get('top_general_headlines')->articles as $article)
                         <div class="col-md-6">
                             <div class="tn-img">
                                 <img src="{{ $article->urlToImage }}" />
                                 <div class="tn-title">
                                     <a
                                         href="#" wire:click.prevent="getArticleDetails('{{ $article->title }}' , '{{ $article->content }}' ,'{{ $article->urlToImage }}' , 'top_general_headlines' )">{{ $article->title }}</a>
                                 </div>
                             </div>
                         </div>
                     @empty
                     @endforelse
                 </div>
             </div>
             <div class="col-md-6 tn-right">
                 <div class="row">
                     @for ($i = 10; $i < 14; $i++)
                         <div class="col-md-6">
                             <div class="tn-img">
                                 <img src="{{ Cache::get('top_general_headlines')->articles[$i]->urlToImage }}" />
                                 <div class="tn-title">
                                     <a href="#"
                                         wire:click.prevent="getArticleDetails('{{ $article->title }}' , '{{ $article->content }}' ,'{{ $article->urlToImage }}' , 'top_general_headlines' )">{{ Cache::get('top_general_headlines')->articles[$i]->title }}</a>
                                 </div>
                             </div>
                         </div>
                     @endfor
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Top News End-->
