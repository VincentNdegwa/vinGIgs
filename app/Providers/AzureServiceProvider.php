<?php

namespace App\Providers;

use MicrosoftAzure\Storage\Blob\BlobRestProxy;
use MicrosoftAzure\Storage\Blob\Models\CreateBlockBlobOptions;
use Illuminate\Support\ServiceProvider;

class AzureServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }
    public function getBlobClients()
    {
        // Fetch the Azure Storage Account Name and Account Key from the configuration
        $accountName = config('azure.storage.account_name');
        $accountKey = config('azure.storage.account_key');

        $connectionString = 'DefaultEndpointsProtocol=https;AccountName=' . $accountName . ';AccountKey=' . $accountKey;
        return BlobRestProxy::createBlobService($connectionString);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
