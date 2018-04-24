<?php
    /**
     * Created by PhpStorm.
     * User: nyktalgia
     * Date: 25/04/2018
     * Time: 01:21
     */

    namespace App\Controller;

    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
    use Symfony\Component\HttpFoundation\Response;

    class ArticleController
    {
        /**
         * @Route("/")
         */
        public function homepage()
        {
            return new Response('OMG! My first page');

        }

        /**
         * @Route("/news/{slug}")
         */
        public function show($slug)
        {
            return new Response(sprintf('Future page to show article: %s',
                $slug));

        }

    }