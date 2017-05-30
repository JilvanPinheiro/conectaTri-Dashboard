<?php

namespace AppBundle\Controller\Admin;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PriceListController extends Controller
{
    /**
     * @Route("/administrador/cotacoes", name="admin_cotacoes")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Admin/pricelist/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/administrador/cotacoes/criadas", name="admin_pricelist_line_createdpricelistsXtime")
     */
    public function cahrt1Action(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Admin/pricelist/chart_line_createdpricelistsXtime.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
}
