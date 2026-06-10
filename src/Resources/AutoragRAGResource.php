<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AutoragRAGResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Files
	 */
	public function get(
		string $id,
		?int $page = null,
		?int $perPage = null,
		?string $search = null,
		?\FoundryCo\Cloudflare\Enums\AutoRAGRAGStatus $status = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/autorag/rags/' . $id . '/files', \FoundryCo\Cloudflare\Responses\AutoragConfigFiles::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'search' => $search ?? null, 'status' => $status ?? null]);
	}


	/**
	 * Sync
	 */
	public function update(string $id): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/autorag/rags/' . $id . '/sync', \FoundryCo\Cloudflare\Responses\AutoragConfigSync::class, null);
	}
}
