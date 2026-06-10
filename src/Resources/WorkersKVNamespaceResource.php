<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class WorkersKVNamespaceResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Namespaces
	 */
	public function list(
		?float $page = null,
		?float $perPage = null,
		?\FoundryCo\Cloudflare\Enums\WorkersKVNamespaceOrder $order = null,
		?\FoundryCo\Cloudflare\Enums\WorkersKVNamespaceDirection $direction = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/storage/kv/namespaces', \FoundryCo\Cloudflare\Responses\WorkersKvNamespaceListNamespaces::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'order' => $order ?? null, 'direction' => $direction ?? null]);
	}


	/**
	 * Create a Namespace
	 */
	public function create(\FoundryCo\Cloudflare\Requests\WorkersKvNamespaceCreateANamespaceRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/storage/kv/namespaces', \FoundryCo\Cloudflare\Responses\WorkersKvNamespaceCreateANamespace::class, $request);
	}


	/**
	 * Get a Namespace
	 */
	public function get(string $namespaceId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/storage/kv/namespaces/' . $namespaceId, \FoundryCo\Cloudflare\Responses\WorkersKvNamespaceGetANamespace::class, []);
	}


	/**
	 * Rename a Namespace
	 */
	public function update(
		string $namespaceId,
		\FoundryCo\Cloudflare\Requests\WorkersKvNamespaceRenameANamespaceRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/storage/kv/namespaces/' . $namespaceId, \FoundryCo\Cloudflare\Responses\WorkersKvNamespaceRenameANamespace::class, $request);
	}


	/**
	 * Remove a Namespace
	 */
	public function delete(string $namespaceId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/storage/kv/namespaces/' . $namespaceId);
	}


	/**
	 * Write multiple key-value pairs
	 */
	public function bulk(string $namespaceId): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/storage/kv/namespaces/' . $namespaceId . '/bulk', \FoundryCo\Cloudflare\Responses\WorkersKvNamespaceWriteMultipleKeyValuePairs::class, null);
	}


	/**
	 * Delete multiple key-value pairs
	 */
	public function workersKvNamespaceDeleteMultipleKeyValuePairsDeprecated(string $namespaceId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/storage/kv/namespaces/' . $namespaceId . '/bulk');
	}


	/**
	 * Delete multiple key-value pairs
	 */
	public function workersKvNamespaceDeleteMultipleKeyValuePairs(string $namespaceId): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/storage/kv/namespaces/' . $namespaceId . '/bulk/delete', \FoundryCo\Cloudflare\Responses\WorkersKvNamespaceDeleteMultipleKeyValuePairs::class, null);
	}


	/**
	 * Get multiple key-value pairs
	 */
	public function workersKvNamespaceGetMultipleKeyValuePairs(
		string $namespaceId,
		\FoundryCo\Cloudflare\Requests\WorkersKvNamespaceGetMultipleKeyValuePairsRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/storage/kv/namespaces/' . $namespaceId . '/bulk/get', null, $request);
	}


	/**
	 * List a Namespace's Keys
	 */
	public function keys(
		string $namespaceId,
		?float $limit = null,
		?string $prefix = null,
		?string $cursor = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/storage/kv/namespaces/' . $namespaceId . '/keys', \FoundryCo\Cloudflare\Responses\WorkersKvNamespaceListANamespaceSKeys::class, ['limit' => $limit ?? null, 'prefix' => $prefix ?? null, 'cursor' => $cursor ?? null]);
	}


	/**
	 * Read the metadata for a key
	 */
	public function metadata(string $keyName, string $namespaceId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/storage/kv/namespaces/' . $namespaceId . '/metadata/' . $keyName, null, []);
	}


	/**
	 * Read key-value pair
	 */
	public function values(string $keyName, string $namespaceId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/storage/kv/namespaces/' . $namespaceId . '/values/' . $keyName, null, []);
	}


	/**
	 * Write key-value pair with optional metadata
	 */
	public function workersKvNamespaceWriteKeyValuePairWithMetadata(
		string $keyName,
		string $namespaceId,
		?float $expiration = null,
		?float $expirationTtl = null,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/storage/kv/namespaces/' . $namespaceId . '/values/' . $keyName, null, null);
	}


	/**
	 * Delete key-value pair
	 */
	public function workersKvNamespaceDeleteKeyValuePair(string $keyName, string $namespaceId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/storage/kv/namespaces/' . $namespaceId . '/values/' . $keyName);
	}
}
