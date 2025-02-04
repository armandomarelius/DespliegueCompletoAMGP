<?php
namespace App\Controller;

use Doctrine\DBAL\Connection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class AMGPController extends AbstractController
{
    private Connection $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    #[Route('/api/amgp', name: 'get_amgp')]
    public function index(): JsonResponse
    {
        $sql = 'SELECT fraseAMGP FROM secretosAMGP LIMIT 1';
        $result = $this->connection->fetchOne($sql);

        if (!$result) {
            return $this->json(['message' => '¡No hay mensajes en la BD!']);
        }

        $result = 'Backend Operativo, respuesta de la BD: ' . $result;
        return $this->json(['message' => $result]);
    }
}
