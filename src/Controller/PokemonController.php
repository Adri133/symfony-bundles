<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Twig\Environment;

#[Route("/")]
class PokemonController extends AbstractController {

    #[Route("/", name:"blog_list")]
    public function index(Environment $twigEnvironment): Response
    {
        // get the user information and notifications somehow
        $title = 'Pokemons';
        $pokemons = ['Salameche', 'Bulbizar', 'Pikachu'];
        $html = $twigEnvironment->render('pokemon/pokemon.html.twig', [
                'title' => $title,
                'pokemons' => $pokemons,
            ]);
        return new Response($html);
    }
}