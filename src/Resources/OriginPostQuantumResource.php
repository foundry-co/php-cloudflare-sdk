<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
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
	public function list(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/cache/origin_post_quantum_encryption', \FoundryCo\Cloudflare\Responses\ZoneCacheSettingsGetOriginPostQuantumEncryptionSetting::class, []);
	}


	/**
	 * Change Origin Post-Quantum Encryption setting
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\ZoneCacheSettingsChangeOriginPostQuantumEncryptionSettingRequest $request,
	): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/cache/origin_post_quantum_encryption', \FoundryCo\Cloudflare\Responses\ZoneCacheSettingsChangeOriginPostQuantumEncryptionSetting::class, $request);
	}
}
