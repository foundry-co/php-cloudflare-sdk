<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class DatasetsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Populate dataset-specific lookup tables from existing Events data with batch processing
	 */
	public function create(): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/events/datasets/populate', null, null);
	}
}
