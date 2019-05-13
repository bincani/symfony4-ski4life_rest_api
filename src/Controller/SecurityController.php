<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\Annotations as FOSRest;
use FOS\OAuthServerBundle\Model\ClientManagerInterface;

use Psr\Log\LoggerInterface;

class SecurityController extends FOSRestController
{
    private $client_manager;

    public function __construct(ClientManagerInterface $client_manager)
    {
        $this->client_manager = $client_manager;
    }

    /**
     * Create Client.
     * @FOSRest\Post("/createClient")
     *
     * @return Response
     */
    public function AuthenticationAction(Request $request, LoggerInterface $logger)
    {
        $data = json_decode($request->getContent(), true);
        $logger->info(sprintf('data: %s', print_r($data, true)) );

        if (
            empty($data['redirect-uri']) || empty($data['grant-type'])
            ||
            (!in_array($data['grant-type'], ['password']))
        ) {
            $logger->info(sprintf('redirect-uri %d | grant-type: %d', empty($data['redirect-uri']), empty($data['grant-type'])) );
            return $this->handleView($this->view($data));
        }

        $clientManager = $this->client_manager;
        $client = $clientManager->createClient();
        $client->setRedirectUris([$data['redirect-uri']]);
        $client->setAllowedGrantTypes([$data['grant-type']]);
        $clientManager->updateClient($client);
        $rows = [
            'client_id' => $client->getPublicId(), 'client_secret' => $client->getSecret()
        ];
        $logger->info(sprintf('data %s', print_r($rows, true)) );
        return $this->handleView($this->view($rows));
    }
}