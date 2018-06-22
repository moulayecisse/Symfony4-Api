<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Article;
use App\Service\ArticleService;

class ArticleController extends Controller
{
    /**
     * @Route("/article", name="article")
     */
    public function index()
    {
        return $this->render('article/index.html.twig', [
            'controller_name' => 'ArticleController',
        ]);
    }

    /**
     * @Route(
     *     name="count_articles",
     *     path="/article/{id}/count",
     *     methods={"GET"},
     *     defaults={
     *       "_controller"="\App\Controller\ArticleController::countCommentsinArticle",
     *       "_api_resource_class"="App\Entity\Article",
     *       "_api_item_operation_name"="countCommentsinArticle"
     *     }
     *   )
     */
    public function countCommentsinArticle(Article $data, ArticleService $articleService) {
        $commentCount = $articleService->countCommentsinArticle($data);
        return $this->json([
            'id' => $data->getId(),
            'comments_count' => $commentCount,
        ]);
    }
}
