<?php

namespace es02\3Scale_Laravel\Providers;

use ThreeScaleClient;
use Illuminate\Support\ServiceProvider;
use Exception;

class 3ScaleServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $response = $client->authorize(env("3SCALE_APP_ID"), env("3SCALE_APP_KEY"));

        if ($response->isSuccess()) {
            return $client
        } else {
            throw new Exception($response);
        }
    }
}
