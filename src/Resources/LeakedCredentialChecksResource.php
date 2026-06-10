<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class LeakedCredentialChecksResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * Get Leaked Credential Checks Status
	 */
	public function list(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/leaked-credential-checks', \FoundryCo\Cloudflare\Responses\WafProductApiLeakedCredentialsGetStatus::class, []);
	}


	/**
	 * Set Leaked Credential Checks Status
	 */
	public function create(\FoundryCo\Cloudflare\Requests\WafProductApiLeakedCredentialsSetStatusRequest $request): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/leaked-credential-checks', \FoundryCo\Cloudflare\Responses\WafProductApiLeakedCredentialsSetStatus::class, $request);
	}


	/**
	 * List Leaked Credential Checks Custom Detections
	 */
	public function detections(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/leaked-credential-checks/detections', \FoundryCo\Cloudflare\Responses\WafProductApiLeakedCredentialsListDetections::class, []);
	}


	/**
	 * Create Leaked Credential Checks Custom Detection
	 */
	public function wafProductApiLeakedCredentialsCreateDetection(
		\FoundryCo\Cloudflare\Requests\WafProductApiLeakedCredentialsCreateDetectionRequest $request,
	): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/leaked-credential-checks/detections', \FoundryCo\Cloudflare\Responses\WafProductApiLeakedCredentialsCreateDetection::class, $request);
	}


	/**
	 * Get Leaked Credential Checks Custom Detection
	 */
	public function get(mixed $detectionId): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/leaked-credential-checks/detections/' . $detectionId, \FoundryCo\Cloudflare\Responses\WafProductApiLeakedCredentialsGetDetection::class, []);
	}


	/**
	 * Update Leaked Credential Checks Custom Detection
	 */
	public function update(
		mixed $detectionId,
		\FoundryCo\Cloudflare\Requests\WafProductApiLeakedCredentialsUpdateDetectionRequest $request,
	): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/leaked-credential-checks/detections/' . $detectionId, \FoundryCo\Cloudflare\Responses\WafProductApiLeakedCredentialsUpdateDetection::class, $request);
	}


	/**
	 * Delete Leaked Credential Checks Custom Detection
	 */
	public function delete(mixed $detectionId): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/leaked-credential-checks/detections/' . $detectionId);
	}
}
