<?php
/**
 * Created by PhpStorm.
 * User: muhammadtaqi
 * Date: 6/17/18
 * Time: 10:47 PM
 */

namespace App\Service;
use App\Entity\Article;

class ArticleService {
    public function countCommentsinArticle(Article $article) {
        $count = $article->getComments()->count();
        return $count;
    }
}