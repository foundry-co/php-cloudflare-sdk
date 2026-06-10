<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class FraudDetectionResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * Get Fraud Detection Settings
	 */
	public function list(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/fraud_detection/settings', \FoundryCo\Cloudflare\Responses\FraudDetectionZoneGetSettings::class, []);
	}


	/**
	 * Update Fraud Detection Settings
	 */
	public function update(\FoundryCo\Cloudflare\Requests\FraudDetectionZoneUpdateSettingsRequest $request): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/fraud_detection/settings', \FoundryCo\Cloudflare\Responses\FraudDetectionZoneUpdateSettings::class, $request);
	}
}
