<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use \Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use \Symfony\Component\HttpKernel\Profiler\Profiler;
use \Symfony\Component\HttpFoundation\JsonResponse;

Class ArticleController extends AbstractController
{
  /**
   * @Route("/", name="app_homepage")
   */
  public function homepage()
  {
    return $this->render('article/homepage.html.twig');
  }

  /**
   * @Route("/news/{slug}", name="article_show")
   */
  public function show($slug)
  {
    $comments = [
      'I ate a normal rock once. It did NOT taste like bacon!',
      'Woohoo! I\'m going on an all-asteroid diet!',
      'I like bacon too! Buy some from my site! bakinsomebacon.com',
    ];

    // dump($slug, $this);

    return $this->render('article/show.html.twig', [
      'title' => ucwords(str_replace('-', ' ', $slug)),
      'slug' => $slug,
      'comments' => $comments,
    ]);
  }

  /**
   * @Route("/news/{slug}/heart", name="article_toggle_heart", methods={"POST"})
   */
  public function toggleArticleHear()
  {
    // TODO - atually heart/unheart the article!

    return new JsonResponse(['hearts' => rand(5,100)]);
  }
}