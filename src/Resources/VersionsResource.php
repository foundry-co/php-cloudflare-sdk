<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class VersionsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Versions
	 */
	public function get(string $workerId, ?int $page = null, ?int $perPage = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workers/workers/' . $workerId . '/versions', \FoundryCo\Cloudflare\Responses\ListWorkerVersions::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Create Version
	 */
	public function create(
		string $workerId,
		\FoundryCo\Cloudflare\Requests\CreateWorkerVersionRequest $request,
		?bool $deploy = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/workers/workers/' . $workerId . '/versions', \FoundryCo\Cloudflare\Responses\CreateWorkerVersion::class, $request);
	}


	/**
	 * Get Version
	 */
	public function versions(
		string $workerId,
		string $versionId,
		?\FoundryCo\Cloudflare\Enums\VersionsInclude $include = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workers/workers/' . $workerId . '/versions/' . $versionId, \FoundryCo\Cloudflare\Responses\GetWorkerVersion::class, ['include' => $include ?? null]);
	}


	/**
	 * Delete Version
	 */
	public function delete(string $workerId, string $versionId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/workers/workers/' . $workerId . '/versions/' . $versionId);
	}
}
