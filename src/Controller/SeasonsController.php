<?php

namespace App\Controller;

use App\Entity\Series;
// use App\Repository\SeasonRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class SeasonsController extends AbstractController
{
    // public function __construct(
    //     private SeasonRepository $repository,
    // ) {
    // }

    #[Route('/series/{series}/seasons', name: 'app_seasons')]
    public function index(Series $series): Response
    {
        $seasons = $series->getSeasons();

        return $this->render('seasons/index.html.twig', [
            'series' => $series,
            'seasons' => $seasons,
        ]);
    }

    /*
    public function index(int $seriesId): Response
    {
        $seasons = $this->repository->findBy([
            'series'=> $seriesId,
        ]);

        return $this->render('seasons/index.html.twig', [
            'seasons' => $seasons,
        ]);
    }
    */
}
