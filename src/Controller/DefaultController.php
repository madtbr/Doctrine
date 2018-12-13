<?php
namespace App\Controller;
use App\Entity\Cliente;
use App\Entity\Animal;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     * @Template("default/index.html.twig")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $qts_animais = $em->getRepository(Cliente::class)->qtsAnimaisPorCliente();
        $qte_racas = $em->getRepository(Animal::class)->qtsPorRaca();
        //VarDumper::dump($qte_racas);
        return [
            'qts_animais' => $qts_animais,
            'qtde_por_raca' => $qte_racas
        ];
    }
}

