<?php

namespace Ajoy39\ArtisansDomain;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ajoy39\ArtisansDomain\ArtisansDomain
 */
class ArtisansDomainFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'artisans-domain';
    }
}
