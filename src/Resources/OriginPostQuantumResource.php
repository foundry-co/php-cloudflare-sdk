<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class OriginPostQuantumResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * Get Origin Post-Quantum Encryption setting
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\OriginPostQuantumSetting
	{
		return $this->client->get('/zones/' . $this->zoneId . '/cache/origin_post_quantum_encryption', \FoundryCo\Cloudflare\Responses\OriginPostQuantumSetting::class, []);
	}


	/**
	 * Change Origin Post-Quantum Encryption setting
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\ZoneCacheSettingsChangeOriginPostQuantumEncryptionSettingRequest $request,
	): \FoundryCo\Cloudflare\Responses\OriginPostQuantumSetting
	{
		return $this->client->put('/zones/' . $this->zoneId . '/cache/origin_post_quantum_encryption', \FoundryCo\Cloudflare\Responses\OriginPostQuantumSetting::class, $request);
	}
}
