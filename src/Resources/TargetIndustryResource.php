<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class TargetIndustryResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Lists all target industries for a specific dataset
	 */
	public function get(string $datasetId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/events/dataset/' . $datasetId . '/targetIndustries', null, []);
	}


	/**
	 * Lists target industries across multiple datasets
	 */
	public function list(?array $datasetIds = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/events/targetIndustries', null, ['datasetIds' => $datasetIds ?? null]);
	}


	/**
	 * Lists all target industries from industry map catalog
	 */
	public function catalog(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/events/targetIndustries/catalog', null, []);
	}
}
