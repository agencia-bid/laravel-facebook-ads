<?php

namespace Agenciabid\LaravelFacebookAds\Entities;

use FacebookAds\Object\AdAccount;
use Illuminate\Support\Collection;
use Agenciabid\LaravelFacebookAds\Traits\Formatter;

/**
 * Class Campaigns.
 */
class Campaigns
{
    use Formatter;

    protected $entity = Campaign::class;

    /**
     * List all campaigns.
     *
     * @param array $fields
     * @param string $accountId
     *
     * @return Collection
     *
     * @see https://developers.facebook.com/docs/marketing-api/reference/ad-account/campaigns
     * @throws \Agenciabid\LaravelFacebookAds\Exceptions\MissingEntityFormatter
     */
    public function all(array $fields, string $accountId): Collection
    {
        return $this->format(
            (new AdAccount)->setId($accountId)->getCampaigns($fields)
        );
    }
}
