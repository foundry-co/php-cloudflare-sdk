<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class DurableObjectsNamespaceResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Namespaces
	 */
	public function list(?int $page = null, ?int $perPage = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workers/durable_objects/namespaces', \FoundryCo\Cloudflare\Responses\DurableObjectsNamespaceListNamespaces::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * List Objects
	 */
	public function get(string $id, ?float $limit = null, ?string $cursor = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workers/durable_objects/namespaces/' . $id . '/objects', \FoundryCo\Cloudflare\Responses\DurableObjectsNamespaceListObjects::class, ['limit' => $limit ?? null, 'cursor' => $cursor ?? null]);
	}
}
