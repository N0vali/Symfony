<?php
/**
 * Created by PhpStorm.
 * User: wilder17
 * Date: 20/11/18
 * Time: 15:46
 */
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog/{page}",requirements={"page"="[a-z0-9-]+"}, name="blog_list")
     */
    public function list($page="Article sans titre")
    {
        $page=str_replace('-',' ',$page);
        $page=ucwords($page);
        return $this->render('blog/index.html.twig', ['page' => $page]);
    }
}