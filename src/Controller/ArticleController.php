<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

Class ArticleController
{
  /**
   * @Route("/")
   */
  public function homepage()
  {
    return new Response('Hello world!');
  }

  /**
   * @Route("/news/{slug}")
   */
  public function show($slug)
  {
    return new Response(sprintf(
      'Future page to show the article: "%s"',
      $slug
    ));
  }
}