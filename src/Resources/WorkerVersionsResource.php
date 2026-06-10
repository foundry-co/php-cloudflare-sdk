<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class WorkerVersionsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Versions
	 */
	public function get(string $scriptName, ?bool $deployable = null, ?int $page = null, ?int $perPage = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workers/scripts/' . $scriptName . '/versions', \FoundryCo\Cloudflare\Responses\WorkerVersionsListVersions::class, ['deployable' => $deployable ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Upload Version
	 */
	public function create(
		string $scriptName,
		?\FoundryCo\Cloudflare\Enums\WorkerVersionsBindingsInherit $bindingsInherit = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/workers/scripts/' . $scriptName . '/versions', \FoundryCo\Cloudflare\Responses\WorkerVersionsUploadVersion::class, null);
	}


	/**
	 * Get Version Detail
	 */
	public function versions(string $scriptName, string $versionId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workers/scripts/' . $scriptName . '/versions/' . $versionId, \FoundryCo\Cloudflare\Responses\WorkerVersionsGetVersionDetail::class, []);
	}
}
