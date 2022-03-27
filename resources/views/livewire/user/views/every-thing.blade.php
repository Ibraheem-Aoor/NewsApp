<div>
    <!-- Main News Start-->
    <div class="main-news">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        @forelse ($articles as $article)
                            <div class="col-md-4">
                                <div class="mn-img">
                                    <img src="{{ $article->urlToImage }}" />
                                    <div class="mn-title">
                                        <a href="#"
                                            wire:click.prevent="getArticleDetails('{{ $article->title }}' , '{{ $article->content }}' ,'{{ $article->urlToImage }}' ,
                                            '{{$topic}}' )">{{ $article->title }}</a>
                                    </div>
                                </div>
                            </div>
                        @empty
                        @endforelse
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Main News End-->

</div>
