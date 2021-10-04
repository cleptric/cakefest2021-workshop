<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;
use App\Service\MetarService;

/**
 * Metar Controller
 *
 * @method \App\Model\Entity\Metar[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MetarController extends AppController
{
    /**
     * Get method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function get(?string $icao = null)
    {
        $this->request->allowMethod('get');

        $metarService = new MetarService();
        $metar = $metarService->get($icao);

        return $this->response
            ->withStatus(200)
            ->withStringBody(json_encode([
                'metar' => $metar,
            ]));
    }
}
