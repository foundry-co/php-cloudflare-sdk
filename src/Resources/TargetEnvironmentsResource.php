<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class TargetEnvironmentsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Target Environments
	 */
	public function list(
		?int $page = null,
		?int $perPage = null,
	): \FoundryCo\Cloudflare\Responses\TargetEnvironmentsEnvironments
	{
		return $this->client->get('/accounts/' . $this->accountId . '/vuln_scanner/target_environments', \FoundryCo\Cloudflare\Responses\TargetEnvironmentsEnvironments::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Create Target Environment
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\CreateTargetEnvironmentRequest $request,
	): \FoundryCo\Cloudflare\Support\PaginatedResponse
	{
		return $this->client->post('/accounts/' . $this->accountId . '/vuln_scanner/target_environments', \FoundryCo\Cloudflare\Responses\TargetEnvironmentsEnvironment::class, $request);
	}


	/**
	 * Get Target Environment
	 */
	public function get(): \FoundryCo\Cloudflare\Support\PaginatedResponse
	{
		return $this->client->get('/accounts/' . $this->accountId . '/vuln_scanner/target_environments/' . $targetEnvironmentId, \FoundryCo\Cloudflare\Responses\TargetEnvironmentsEnvironment::class, []);
	}


	/**
	 * Update Target Environment
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\UpdateTargetEnvironmentRequest $request,
	): \FoundryCo\Cloudflare\Support\PaginatedResponse
	{
		return $this->client->put('/accounts/' . $this->accountId . '/vuln_scanner/target_environments/' . $targetEnvironmentId, \FoundryCo\Cloudflare\Responses\TargetEnvironmentsEnvironment::class, $request);
	}


	/**
	 * Edit Target Environment
	 */
	public function targetEnvironments(
		\FoundryCo\Cloudflare\Requests\EditTargetEnvironmentRequest $request,
	): \FoundryCo\Cloudflare\Support\PaginatedResponse
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/vuln_scanner/target_environments/' . $targetEnvironmentId, \FoundryCo\Cloudflare\Responses\TargetEnvironmentsEnvironment::class, $request);
	}


	/**
	 * Delete Target Environment
	 */
	public function delete(): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/vuln_scanner/target_environments/' . $targetEnvironmentId);
	}
}
