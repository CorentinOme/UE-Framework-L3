<?php
/**
 * Created by PhpStorm.
 * User: corentin
 * Date: 02/10/18
 * Time: 17:25
 */
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LivreController
{
    /**
     * @Route("/livre/numero/{ref}")
     */
    public function numero($ref)
    {

        return new Response(
            '<html><body>Numéro du livre: '.$ref.'</body></html>'
        );
    }
}
