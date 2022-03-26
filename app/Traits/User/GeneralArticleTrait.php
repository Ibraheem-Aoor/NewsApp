<?php
namespace App\Traits\User;

Trait GeneralArticleTrait
{
    /*
        This is a trait to reuse functions that related to articles manpulation on Diffrenet classes.
    */


// Getting the Details and save to to session then access display it on details page.
    public function getArticleDetails($title , $content , $image , $category)
    {
        session()->put('article' ,
        [
            'title' => $title,
            'content' => $content,
            'category' => $category,
            'image' => $image,
        ]);
        return redirect()->route('article.details');
    }//end method.

}//End Class
