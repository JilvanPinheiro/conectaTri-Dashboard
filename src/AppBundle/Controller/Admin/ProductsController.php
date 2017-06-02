<?php

namespace AppBundle\Controller\Admin;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProductsController extends Controller
{
    /**
     * @Route("/administrador/produtos", name="admin_produtos")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Admin/products/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/administrador/produtos/criados", name="admin_chart_line_createdproductsXtime")
     */
    public function chart1Action(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Admin/products/charts/chart_line_createdproductsXtime.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }


    /**
     * @Route("/administrador/produtos/historico", name="admin_table_bestprices")
     */
    public function chart2Action(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Admin/products/charts/chart_table_bestprices.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

}
