<?php


namespace TemplateBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TemplateController extends Controller
{
    public function indexAction()   // l'action de toute la template
    {
        return $this->render('@Template/Template/Template.html.twig');
    }
    public function TemplateAction()   // l'action de la layout -la route:(ma_layout)
    {
        return $this->render('@Template/Template/index.html.twig');
    }
}