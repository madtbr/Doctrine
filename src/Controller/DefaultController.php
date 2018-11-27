<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     * @Template("default/index.html.twig")
     */
    public function index()
    {
        return [];
    }
}
