<?php

namespace App\Http\Controllers;

use Google;
use Google_Service_Indexing;
use Google_Service_Indexing_UrlNotification;

class IndexingController extends Controller
{
    public function indexing()
    {
        try {
            $googleClient = new Google\Client();

            $path = storage_path('SERVICE_ACCOUNT_CREDENTIALS.json');

            // Add here location to the JSON key file that you created and downloaded earlier.
            $googleClient->setAuthConfig($path);
            $googleClient->setScopes(Google_Service_Indexing::INDEXING);
            $googleIndexingService = new Google_Service_Indexing($googleClient);

            // Use URL_UPDATED for new or updated pages.
            $urlNotification = new Google_Service_Indexing_UrlNotification([
                'url' => "URL",
                'type' => 'URL_UPDATED'
            ]);

            $result = $googleIndexingService->urlNotifications->publish($urlNotification);
        } catch (\Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }
}
