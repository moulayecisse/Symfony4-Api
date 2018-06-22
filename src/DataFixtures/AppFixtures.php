<?php
/**
 * Created by PhpStorm.
 * User: muhammadtaqi
 * Date: 6/17/18
 * Time: 10:31 PM
 */

namespace App\DataFixtures;
use App\Entity\Article;
use App\Entity\Comment;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 10; $i++) {
            $article = new Article();
            $article->setBody('This is a body of article ' . $i);

            for ($i2= 0; $i2 < $i; $i2++) {
                $comment = new Comment();
                $comment->setBody('This is the body of comment ' . $i2 . ' of article ' . $i);
                $comment->setArticle($article);
                $manager->persist($comment);
            }
            $manager->persist($article);
        }
        $user = new User();
        $user->setApiKey('test_api_key');
        $user->setUsername('test');
        $user->setPassword('test');
        $user->setPlainPassword('test');
        $user->setEmail('test@gmail.com');
        $user->setIsActive(true);
        $user->setCreatedAt((new \DateTime('now')));
        $manager->persist($user);
        $manager->flush();
    }
}