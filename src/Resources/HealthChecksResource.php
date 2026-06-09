<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class HealthChecksResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * List Health Checks
	 */
	public function list(?float $page = null, ?float $perPage = null): \FoundryCo\Cloudflare\Responses\HealthChecksChecks
	{
		return $this->client->get('/zones/' . $this->zoneId . '/healthchecks', \FoundryCo\Cloudflare\Responses\HealthChecksChecks::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Create Health Check
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\HealthChecksCreateHealthCheckRequest $request,
	): \FoundryCo\Cloudflare\Responses\HealthChecksCheck
	{
		return $this->client->post('/zones/' . $this->zoneId . '/healthchecks', \FoundryCo\Cloudflare\Responses\HealthChecksCheck::class, $request);
	}


	/**
	 * Create Preview Health Check
	 */
	public function preview(
		\FoundryCo\Cloudflare\Requests\HealthChecksCreatePreviewHealthCheckRequest $request,
	): \FoundryCo\Cloudflare\Responses\HealthChecksCheck
	{
		return $this->client->post('/zones/' . $this->zoneId . '/healthchecks/preview', \FoundryCo\Cloudflare\Responses\HealthChecksCheck::class, $request);
	}


	/**
	 * Health Check Preview Details
	 */
	public function get(string $healthcheckId): \FoundryCo\Cloudflare\Responses\HealthChecksDetails
	{
		return $this->client->get('/zones/' . $this->zoneId . '/healthchecks/preview/' . $healthcheckId, \FoundryCo\Cloudflare\Responses\HealthChecksDetails::class, []);
	}


	/**
	 * Delete Preview Health Check
	 */
	public function delete(string $healthcheckId): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/healthchecks/preview/' . $healthcheckId);
	}


	/**
	 * Health Check Details
	 */
	public function healthchecks(string $healthcheckId): \FoundryCo\Cloudflare\Responses\HealthChecksDetails
	{
		return $this->client->get('/zones/' . $this->zoneId . '/healthchecks/' . $healthcheckId, \FoundryCo\Cloudflare\Responses\HealthChecksDetails::class, []);
	}


	/**
	 * Update Health Check
	 */
	public function update(
		string $healthcheckId,
		\FoundryCo\Cloudflare\Requests\HealthChecksUpdateHealthCheckRequest $request,
	): \FoundryCo\Cloudflare\Responses\HealthChecksCheck
	{
		return $this->client->put('/zones/' . $this->zoneId . '/healthchecks/' . $healthcheckId, \FoundryCo\Cloudflare\Responses\HealthChecksCheck::class, $request);
	}


	/**
	 * Patch Health Check
	 */
	public function healthChecksPatchHealthCheck(
		string $healthcheckId,
		\FoundryCo\Cloudflare\Requests\HealthChecksPatchHealthCheckRequest $request,
	): \FoundryCo\Cloudflare\Responses\HealthChecksCheck
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/healthchecks/' . $healthcheckId, \FoundryCo\Cloudflare\Responses\HealthChecksCheck::class, $request);
	}


	/**
	 * Delete Health Check
	 */
	public function healthChecksDeleteHealthCheck(string $healthcheckId): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/healthchecks/' . $healthcheckId);
	}


	/**
	 * List Health Checks
	 */
	public function smartShieldListHealthChecks(
		?float $page = null,
		?float $perPage = null,
	): \FoundryCo\Cloudflare\Responses\HealthChecksChecks
	{
		return $this->client->get('/zones/' . $this->zoneId . '/smart_shield/healthchecks', \FoundryCo\Cloudflare\Responses\HealthChecksChecks::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Create Health Check
	 */
	public function smartShieldCreateHealthCheck(
		\FoundryCo\Cloudflare\Requests\SmartShieldCreateHealthCheckRequest $request,
	): \FoundryCo\Cloudflare\Responses\HealthChecksCheck
	{
		return $this->client->post('/zones/' . $this->zoneId . '/smart_shield/healthchecks', \FoundryCo\Cloudflare\Responses\HealthChecksCheck::class, $request);
	}


	/**
	 * Health Check Details
	 */
	public function smartShieldHealthCheckDetails(
		string $healthcheckId,
	): \FoundryCo\Cloudflare\Responses\HealthChecksDetails
	{
		return $this->client->get('/zones/' . $this->zoneId . '/smart_shield/healthchecks/' . $healthcheckId, \FoundryCo\Cloudflare\Responses\HealthChecksDetails::class, []);
	}


	/**
	 * Update Health Check
	 */
	public function smartShieldUpdateHealthCheck(
		string $healthcheckId,
		\FoundryCo\Cloudflare\Requests\SmartShieldUpdateHealthCheckRequest $request,
	): \FoundryCo\Cloudflare\Responses\HealthChecksCheck
	{
		return $this->client->put('/zones/' . $this->zoneId . '/smart_shield/healthchecks/' . $healthcheckId, \FoundryCo\Cloudflare\Responses\HealthChecksCheck::class, $request);
	}


	/**
	 * Patch Health Check
	 */
	public function smartShieldPatchHealthCheck(
		string $healthcheckId,
		\FoundryCo\Cloudflare\Requests\SmartShieldPatchHealthCheckRequest $request,
	): \FoundryCo\Cloudflare\Responses\HealthChecksCheck
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/smart_shield/healthchecks/' . $healthcheckId, \FoundryCo\Cloudflare\Responses\HealthChecksCheck::class, $request);
	}


	/**
	 * Delete Health Check
	 */
	public function smartShieldDeleteHealthCheck(string $healthcheckId): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/smart_shield/healthchecks/' . $healthcheckId);
	}
}
