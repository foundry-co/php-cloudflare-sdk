<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class CSAMScannerSettingsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * Get CSAM Scanner setting
	 */
	public function list(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/settings/csam_scanner_third_party', null, []);
	}


	/**
	 * Update CSAM Scanner setting
	 */
	public function update(\FoundryCo\Cloudflare\Requests\CsamScannerUpdateSettingRequest $request): mixed
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/settings/csam_scanner_third_party', null, $request);
	}
}
