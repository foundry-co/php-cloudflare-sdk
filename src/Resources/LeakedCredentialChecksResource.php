<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function list(): \FoundryCo\Cloudflare\Responses\LeakedCredentialChecksStatus
	{
		return $this->client->get('/zones/' . $this->zoneId . '/leaked-credential-checks', \FoundryCo\Cloudflare\Responses\LeakedCredentialChecksStatus::class, []);
	}


	/**
	 * Set Leaked Credential Checks Status
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\WafProductApiLeakedCredentialsSetStatusRequest $request,
	): \FoundryCo\Cloudflare\Responses\LeakedCredentialChecksStatus
	{
		return $this->client->post('/zones/' . $this->zoneId . '/leaked-credential-checks', \FoundryCo\Cloudflare\Responses\LeakedCredentialChecksStatus::class, $request);
	}


	/**
	 * List Leaked Credential Checks Custom Detections
	 */
	public function detections(): \FoundryCo\Cloudflare\Responses\LeakedCredentialChecksDetections
	{
		return $this->client->get('/zones/' . $this->zoneId . '/leaked-credential-checks/detections', \FoundryCo\Cloudflare\Responses\LeakedCredentialChecksDetections::class, []);
	}


	/**
	 * Create Leaked Credential Checks Custom Detection
	 */
	public function wafProductApiLeakedCredentialsCreateDetection(
		\FoundryCo\Cloudflare\Requests\WafProductApiLeakedCredentialsCreateDetectionRequest $request,
	): \FoundryCo\Cloudflare\Responses\LeakedCredentialChecksDetection
	{
		return $this->client->post('/zones/' . $this->zoneId . '/leaked-credential-checks/detections', \FoundryCo\Cloudflare\Responses\LeakedCredentialChecksDetection::class, $request);
	}


	/**
	 * Get Leaked Credential Checks Custom Detection
	 */
	public function get(mixed $detectionId): \FoundryCo\Cloudflare\Responses\LeakedCredentialChecksDetection
	{
		return $this->client->get('/zones/' . $this->zoneId . '/leaked-credential-checks/detections/' . $detectionId, \FoundryCo\Cloudflare\Responses\LeakedCredentialChecksDetection::class, []);
	}


	/**
	 * Update Leaked Credential Checks Custom Detection
	 */
	public function update(
		mixed $detectionId,
		\FoundryCo\Cloudflare\Requests\WafProductApiLeakedCredentialsUpdateDetectionRequest $request,
	): \FoundryCo\Cloudflare\Responses\LeakedCredentialChecksDetection
	{
		return $this->client->put('/zones/' . $this->zoneId . '/leaked-credential-checks/detections/' . $detectionId, \FoundryCo\Cloudflare\Responses\LeakedCredentialChecksDetection::class, $request);
	}


	/**
	 * Delete Leaked Credential Checks Custom Detection
	 */
	public function delete(mixed $detectionId): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/leaked-credential-checks/detections/' . $detectionId);
	}
}
