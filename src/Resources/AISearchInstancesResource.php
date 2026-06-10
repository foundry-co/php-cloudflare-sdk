<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AISearchInstancesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List instances.
	 */
	public function list(
		?int $page = null,
		?int $perPage = null,
		?string $search = null,
		?string $namespace = null,
		?\FoundryCo\Cloudflare\Enums\AISearchInstancesOrderBy $orderBy = null,
		?\FoundryCo\Cloudflare\Enums\AISearchInstancesOrderByDirection $orderByDirection = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-search/instances', \FoundryCo\Cloudflare\Responses\AiSearchListInstances::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'search' => $search ?? null, 'namespace' => $namespace ?? null, 'orderBy' => $orderBy ?? null, 'orderByDirection' => $orderByDirection ?? null]);
	}


	/**
	 * Create new instance.
	 */
	public function create(\FoundryCo\Cloudflare\Requests\AiSearchCreateInstanceRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai-search/instances', \FoundryCo\Cloudflare\Responses\AiSearchCreateInstance::class, $request);
	}


	/**
	 * Read instance.
	 */
	public function get(string $id): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-search/instances/' . $id, \FoundryCo\Cloudflare\Responses\AiSearchFetchInstance::class, []);
	}


	/**
	 * Update instance.
	 */
	public function update(string $id, \FoundryCo\Cloudflare\Requests\AiSearchUpdateInstanceRequest $request): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/ai-search/instances/' . $id, \FoundryCo\Cloudflare\Responses\AiSearchUpdateInstance::class, $request);
	}


	/**
	 * Delete instance.
	 */
	public function delete(string $id): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/ai-search/instances/' . $id);
	}


	/**
	 * Chat Completions
	 */
	public function completions(
		string $id,
		\FoundryCo\Cloudflare\Requests\AiSearchInstanceChatCompletionRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai-search/instances/' . $id . '/chat/completions', null, $request);
	}


	/**
	 * Search
	 */
	public function search(string $id, \FoundryCo\Cloudflare\Requests\AiSearchInstanceSearchRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai-search/instances/' . $id . '/search', \FoundryCo\Cloudflare\Responses\AiSearchInstanceSearch::class, $request);
	}


	/**
	 * Stats
	 */
	public function stats(string $id): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-search/instances/' . $id . '/stats', \FoundryCo\Cloudflare\Responses\AiSearchStats::class, []);
	}


	/**
	 * List instances.
	 */
	public function instances(
		string $name,
		?int $page = null,
		?int $perPage = null,
		?string $search = null,
		?string $namespace = null,
		?\FoundryCo\Cloudflare\Enums\AISearchInstancesOrderBy $orderBy = null,
		?\FoundryCo\Cloudflare\Enums\AISearchInstancesOrderByDirection $orderByDirection = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-search/namespaces/' . $name . '/instances', \FoundryCo\Cloudflare\Responses\AiSearchNamespaceListInstances::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'search' => $search ?? null, 'namespace' => $namespace ?? null, 'orderBy' => $orderBy ?? null, 'orderByDirection' => $orderByDirection ?? null]);
	}


	/**
	 * Create new instance.
	 */
	public function aiSearchNamespaceCreateInstance(
		string $name,
		\FoundryCo\Cloudflare\Requests\AiSearchNamespaceCreateInstanceRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai-search/namespaces/' . $name . '/instances', \FoundryCo\Cloudflare\Responses\AiSearchNamespaceCreateInstance::class, $request);
	}


	/**
	 * Read instance.
	 */
	public function aiSearchNamespaceFetchInstance(string $id, string $name): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-search/namespaces/' . $name . '/instances/' . $id, \FoundryCo\Cloudflare\Responses\AiSearchNamespaceFetchInstance::class, []);
	}


	/**
	 * Update instance.
	 */
	public function aiSearchNamespaceUpdateInstance(
		string $id,
		string $name,
		\FoundryCo\Cloudflare\Requests\AiSearchNamespaceUpdateInstanceRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/ai-search/namespaces/' . $name . '/instances/' . $id, \FoundryCo\Cloudflare\Responses\AiSearchNamespaceUpdateInstance::class, $request);
	}


	/**
	 * Delete instance.
	 */
	public function aiSearchNamespaceDeleteInstance(string $id, string $name): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/ai-search/namespaces/' . $name . '/instances/' . $id);
	}


	/**
	 * Chat Completions
	 */
	public function aiSearchNamespaceInstanceChatCompletion(
		string $id,
		string $name,
		\FoundryCo\Cloudflare\Requests\AiSearchNamespaceInstanceChatCompletionRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai-search/namespaces/' . $name . '/instances/' . $id . '/chat/completions', null, $request);
	}


	/**
	 * Search
	 */
	public function aiSearchNamespaceInstanceSearch(
		string $id,
		string $name,
		\FoundryCo\Cloudflare\Requests\AiSearchNamespaceInstanceSearchRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai-search/namespaces/' . $name . '/instances/' . $id . '/search', \FoundryCo\Cloudflare\Responses\AiSearchNamespaceInstanceSearch::class, $request);
	}


	/**
	 * Stats
	 */
	public function aiSearchNamespaceStats(string $id, string $name): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-search/namespaces/' . $name . '/instances/' . $id . '/stats', \FoundryCo\Cloudflare\Responses\AiSearchNamespaceStats::class, []);
	}
}
