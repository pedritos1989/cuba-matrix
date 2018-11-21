<?php

declare(strict_types=1);

namespace CubaMatrix\Bundle\AppBundle\Controller;

use Doctrine\ORM\EntityManager;
use Sylius\Component\Taxonomy\Model\Taxon;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class CategoryController
{
    /**
     * @var EngineInterface
     */
    private $templatingEngine;

    /**
     * @var EntityManager
     */
    protected $em;

    /**
     * CategoryController constructor.
     * @param EngineInterface $templatingEngine
     * @param EntityManager $em
     */
    public function __construct(EngineInterface $templatingEngine, EntityManager $em)
    {
        $this->templatingEngine = $templatingEngine;
        $this->em = $em;
    }

    /**
     * @param Request $request
     *
     * @return Response
     */
    public function indexAction(Request $request): Response
    {
        return $this->templatingEngine->renderResponse('@CubaMatrixApp/Category/index.html.twig');
    }
}