<?php
namespace App\Controller;

use App\Entity\Produit;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class PagesController extends AbstractController
{
    /**
     * @Route("/MesProduitsDemo", name="pages")
     */
    public function index()
    {
        return $this->render('pages/index.html.twig', [ 
            'title' => 'MesProduitsDemo',
        ]);
    }

    
    /**
     * @Route("/MesProduitsDemo/edit", name="edit_produit")
     */
    public function edit() {
        return $this->render('pages/edit.html.twig');
        }

    /**
     * @Route("/MesProduitsDemo/add", name="add_produit")
     */
    public function add() {
        return $this->render('pages/new.html.twig');
        }

}



  


   
    




