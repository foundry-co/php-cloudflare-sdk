<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class SecretsStoreResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * View secret usage
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/secrets_store/quota', \FoundryCo\Cloudflare\Responses\SecretsStoreQuota::class, []);
	}


	/**
	 * List account stores
	 */
	public function stores(
		?\FoundryCo\Cloudflare\Enums\SecretsStoreDirection $direction = null,
		?int $page = null,
		?int $perPage = null,
		?\FoundryCo\Cloudflare\Enums\SecretsStoreOrder $order = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/secrets_store/stores', \FoundryCo\Cloudflare\Responses\SecretsStoreList::class, ['direction' => $direction ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null, 'order' => $order ?? null]);
	}


	/**
	 * Create a store
	 */
	public function create(\FoundryCo\Cloudflare\Requests\SecretsStoreCreateRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/secrets_store/stores', \FoundryCo\Cloudflare\Responses\SecretsStoreCreate::class, $request);
	}


	/**
	 * Get a store by ID
	 */
	public function get(string $storeId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/secrets_store/stores/' . $storeId, \FoundryCo\Cloudflare\Responses\SecretsStoreGetStoreById::class, []);
	}


	/**
	 * Delete a store
	 */
	public function delete(string $storeId, ?bool $force = null): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/secrets_store/stores/' . $storeId);
	}


	/**
	 * List store secrets
	 */
	public function secrets(
		string $storeId,
		?\FoundryCo\Cloudflare\Enums\SecretsStoreDirection $direction = null,
		?int $page = null,
		?int $perPage = null,
		?string $search = null,
		?\FoundryCo\Cloudflare\Enums\SecretsStoreOrder $order = null,
		?array $scopes = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/secrets_store/stores/' . $storeId . '/secrets', \FoundryCo\Cloudflare\Responses\SecretsStoreSecretsList::class, ['direction' => $direction ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null, 'search' => $search ?? null, 'order' => $order ?? null, 'scopes' => $scopes ?? null]);
	}


	/**
	 * Create a secret
	 */
	public function secretsStoreSecretCreate(string $storeId): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/secrets_store/stores/' . $storeId . '/secrets', \FoundryCo\Cloudflare\Responses\SecretsStoreSecretCreate::class, null);
	}


	/**
	 * Delete secrets
	 */
	public function secretsStoreDeleteBulk(
		string $storeId,
		\FoundryCo\Cloudflare\Requests\SecretsStoreDeleteBulkRequest $request,
	): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/secrets_store/stores/' . $storeId . '/secrets');
	}


	/**
	 * Get a secret by ID
	 */
	public function secretsStoreGetById(string $storeId, string $secretId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/secrets_store/stores/' . $storeId . '/secrets/' . $secretId, \FoundryCo\Cloudflare\Responses\SecretsStoreGetById::class, []);
	}


	/**
	 * Patch a secret
	 */
	public function update(
		string $storeId,
		string $secretId,
		\FoundryCo\Cloudflare\Requests\SecretsStorePatchByIdRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/secrets_store/stores/' . $storeId . '/secrets/' . $secretId, \FoundryCo\Cloudflare\Responses\SecretsStorePatchById::class, $request);
	}


	/**
	 * Delete a secret
	 */
	public function secretsStoreSecretDeleteById(string $storeId, string $secretId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/secrets_store/stores/' . $storeId . '/secrets/' . $secretId);
	}


	/**
	 * Duplicate Secret
	 */
	public function duplicate(
		string $storeId,
		string $secretId,
		\FoundryCo\Cloudflare\Requests\SecretsStoreDuplicateByIdRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/secrets_store/stores/' . $storeId . '/secrets/' . $secretId . '/duplicate', \FoundryCo\Cloudflare\Responses\SecretsStoreDuplicateById::class, $request);
	}


	/**
	 * List account stores (System)
	 */
	public function secretsStoreSystemList(
		string $accountTag,
		?\FoundryCo\Cloudflare\Enums\SecretsStoreDirection $direction = null,
		?int $page = null,
		?int $perPage = null,
		?\FoundryCo\Cloudflare\Enums\SecretsStoreOrder $order = null,
	): mixed
	{
		return $this->client->get('/system/accounts/' . $accountTag . '/stores', \FoundryCo\Cloudflare\Responses\SecretsStoreSystemList::class, ['direction' => $direction ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null, 'order' => $order ?? null]);
	}


	/**
	 * Create a store (System)
	 */
	public function secretsStoreSystemCreate(
		string $accountTag,
		\FoundryCo\Cloudflare\Requests\SecretsStoreSystemCreateRequest $request,
	): mixed
	{
		return $this->client->post('/system/accounts/' . $accountTag . '/stores', \FoundryCo\Cloudflare\Responses\SecretsStoreSystemCreate::class, $request);
	}


	/**
	 * Get a store by ID (System)
	 */
	public function secretsStoreSystemGetStoreById(string $accountTag, string $storeId): mixed
	{
		return $this->client->get('/system/accounts/' . $accountTag . '/stores/' . $storeId, \FoundryCo\Cloudflare\Responses\SecretsStoreSystemGetStoreById::class, []);
	}


	/**
	 * Delete a store (System)
	 */
	public function secretsStoreSystemDeleteById(string $accountTag, string $storeId, ?bool $force = null): void
	{
		$this->client->delete('/system/accounts/' . $accountTag . '/stores/' . $storeId);
	}


	/**
	 * List store secrets (System)
	 */
	public function secretsStoreSystemSecretsList(
		string $accountTag,
		string $storeId,
		?\FoundryCo\Cloudflare\Enums\SecretsStoreDirection $direction = null,
		?int $page = null,
		?int $perPage = null,
		?string $search = null,
		?\FoundryCo\Cloudflare\Enums\SecretsStoreOrder $order = null,
		?array $scopes = null,
	): mixed
	{
		return $this->client->get('/system/accounts/' . $accountTag . '/stores/' . $storeId . '/secrets', \FoundryCo\Cloudflare\Responses\SecretsStoreSystemSecretsList::class, ['direction' => $direction ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null, 'search' => $search ?? null, 'order' => $order ?? null, 'scopes' => $scopes ?? null]);
	}


	/**
	 * Create secrets (System)
	 */
	public function secretsStoreSystemSecretCreate(string $accountTag, string $storeId): mixed
	{
		return $this->client->post('/system/accounts/' . $accountTag . '/stores/' . $storeId . '/secrets', \FoundryCo\Cloudflare\Responses\SecretsStoreSystemSecretCreate::class, null);
	}


	/**
	 * Delete secrets (System)
	 */
	public function secretsStoreSystemDeleteBulk(
		string $accountTag,
		string $storeId,
		\FoundryCo\Cloudflare\Requests\SecretsStoreSystemDeleteBulkRequest $request,
	): void
	{
		$this->client->delete('/system/accounts/' . $accountTag . '/stores/' . $storeId . '/secrets');
	}


	/**
	 * Get a secret by ID (System)
	 */
	public function secretsStoreSystemGetById(string $accountTag, string $storeId, string $secretId): mixed
	{
		return $this->client->get('/system/accounts/' . $accountTag . '/stores/' . $storeId . '/secrets/' . $secretId, \FoundryCo\Cloudflare\Responses\SecretsStoreSystemGetById::class, []);
	}


	/**
	 * Patch a secret (System)
	 */
	public function secretsStoreSystemPatchById(
		string $accountTag,
		string $storeId,
		string $secretId,
		\FoundryCo\Cloudflare\Requests\SecretsStoreSystemPatchByIdRequest $request,
	): mixed
	{
		return $this->client->patch('/system/accounts/' . $accountTag . '/stores/' . $storeId . '/secrets/' . $secretId, \FoundryCo\Cloudflare\Responses\SecretsStoreSystemPatchById::class, $request);
	}


	/**
	 * Delete a secret (System)
	 */
	public function secretsStoreSystemSecretDeleteById(string $accountTag, string $storeId, string $secretId): void
	{
		$this->client->delete('/system/accounts/' . $accountTag . '/stores/' . $storeId . '/secrets/' . $secretId);
	}


	/**
	 * Duplicate secret (System)
	 */
	public function secretsStoreSystemDuplicateById(
		string $accountTag,
		string $storeId,
		string $secretId,
		\FoundryCo\Cloudflare\Requests\SecretsStoreSystemDuplicateByIdRequest $request,
	): mixed
	{
		return $this->client->post('/system/accounts/' . $accountTag . '/stores/' . $storeId . '/secrets/' . $secretId . '/duplicate', \FoundryCo\Cloudflare\Responses\SecretsStoreSystemDuplicateById::class, $request);
	}
}
