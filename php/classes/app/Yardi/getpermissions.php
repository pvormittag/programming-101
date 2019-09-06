<?php

Class GetPermissions extends GuzzleClientTest
{
   public function __construct ($username, $password,$property_id, $server, $database, $service_endpoint) {
       $this->username = $username;
       $this->password = $password;
       $this->property_id = $property_id;
       $this->server = $server;
       $this->database = $database;
       $this->endpoint = $service_endpoint . '/WebServices/ItfResidentData.asmx';
   }
    
    public function load(){
        $client = GuzzleClientTest::getGuzzleClient();
        try {
            $response = $tclient->post($this->endpoint, [
                'headers' => [
                    'Content-Type' => 'application/soap+xml; charset=utf-8',
                    // Unset the `User-Agent` header to address an issue with
                    // Yardi blocking requests which use Guzzle's default
                    // user agent string:
                    // https://bitbucket.org/engrain/app-sightmap-ai/issues/6
                    'User-Agent' => null,
                ],
                'body' => <<<EOT
<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xmlns:xsd="http://www.w3.org/2001/XMLSchema"
    xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
    <soap12:Body>
        <GetPermissions xmlns="http://tempuri.org/YSI.Interfaces.WebServices/ItfResidentData">
            <UserName>{$this->username}</UserName>
            <Password>{$this->password}</Password>
            <ServerName>{$this->server}</ServerName>
            <Database>{$this->database}</Database>
            <Platform>SQL</Platform>
            <YardiPropertyId>{$this->property_id}</YardiPropertyId>
            <InterfaceEntity>{$entity}</InterfaceEntity>
            <InterfaceLicense>{$license}</InterfaceLicense>
        </GetPermissions>
    </soap12:Body>
</soap12:Envelope>
EOT
            ]);

           return (string)$response->getBody();
        } catch (RequestException $e) {
            if ($e->hasResponse()) {
            
            }

            // Re-throw previous exception if no response.

            throw $e;
        }
    }
}