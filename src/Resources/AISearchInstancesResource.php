<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	): \FoundryCo\Cloudflare\Responses\AISearchInstancesInstances
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-search/instances', \FoundryCo\Cloudflare\Responses\AISearchInstancesInstances::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'search' => $search ?? null, 'namespace' => $namespace ?? null, 'orderBy' => $orderBy ?? null, 'orderByDirection' => $orderByDirection ?? null]);
	}


	/**
	 * Create new instance.
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\AiSearchCreateInstanceRequest $request,
	): \FoundryCo\Cloudflare\Responses\AISearchInstancesInstance
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai-search/instances', \FoundryCo\Cloudflare\Responses\AISearchInstancesInstance::class, $request);
	}


	/**
	 * Read instance.
	 */
	public function get(string $id): \FoundryCo\Cloudflare\Responses\AISearchInstancesInstance
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-search/instances/' . $id, \FoundryCo\Cloudflare\Responses\AISearchInstancesInstance::class, []);
	}


	/**
	 * Update instance.
	 */
	public function update(
		string $id,
		\FoundryCo\Cloudflare\Requests\AiSearchUpdateInstanceRequest $request,
	): \FoundryCo\Cloudflare\Responses\AISearchInstancesInstance
	{
		return $this->client->put('/accounts/' . $this->accountId . '/ai-search/instances/' . $id, \FoundryCo\Cloudflare\Responses\AISearchInstancesInstance::class, $request);
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
	public function search(
		string $id,
		\FoundryCo\Cloudflare\Requests\AiSearchInstanceSearchRequest $request,
	): \FoundryCo\Cloudflare\Responses\AISearchInstancesSearch
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai-search/instances/' . $id . '/search', \FoundryCo\Cloudflare\Responses\AISearchInstancesSearch::class, $request);
	}


	/**
	 * Stats
	 */
	public function stats(string $id): \FoundryCo\Cloudflare\Responses\AISearchInstancesStats
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-search/instances/' . $id . '/stats', \FoundryCo\Cloudflare\Responses\AISearchInstancesStats::class, []);
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
	): \FoundryCo\Cloudflare\Responses\AISearchInstancesInstances
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-search/namespaces/' . $name . '/instances', \FoundryCo\Cloudflare\Responses\AISearchInstancesInstances::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'search' => $search ?? null, 'namespace' => $namespace ?? null, 'orderBy' => $orderBy ?? null, 'orderByDirection' => $orderByDirection ?? null]);
	}


	/**
	 * Create new instance.
	 */
	public function aiSearchNamespaceCreateInstance(
		string $name,
		\FoundryCo\Cloudflare\Requests\AiSearchNamespaceCreateInstanceRequest $request,
	): \FoundryCo\Cloudflare\Responses\AISearchInstancesInstance
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai-search/namespaces/' . $name . '/instances', \FoundryCo\Cloudflare\Responses\AISearchInstancesInstance::class, $request);
	}


	/**
	 * Read instance.
	 */
	public function aiSearchNamespaceFetchInstance(
		string $id,
		string $name,
	): \FoundryCo\Cloudflare\Responses\AISearchInstancesInstance
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-search/namespaces/' . $name . '/instances/' . $id, \FoundryCo\Cloudflare\Responses\AISearchInstancesInstance::class, []);
	}


	/**
	 * Update instance.
	 */
	public function aiSearchNamespaceUpdateInstance(
		string $id,
		string $name,
		\FoundryCo\Cloudflare\Requests\AiSearchNamespaceUpdateInstanceRequest $request,
	): \FoundryCo\Cloudflare\Responses\AISearchInstancesInstance
	{
		return $this->client->put('/accounts/' . $this->accountId . '/ai-search/namespaces/' . $name . '/instances/' . $id, \FoundryCo\Cloudflare\Responses\AISearchInstancesInstance::class, $request);
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
	): \FoundryCo\Cloudflare\Responses\AISearchInstancesSearch
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai-search/namespaces/' . $name . '/instances/' . $id . '/search', \FoundryCo\Cloudflare\Responses\AISearchInstancesSearch::class, $request);
	}


	/**
	 * Stats
	 */
	public function aiSearchNamespaceStats(
		string $id,
		string $name,
	): \FoundryCo\Cloudflare\Responses\AISearchInstancesStats
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-search/namespaces/' . $name . '/instances/' . $id . '/stats', \FoundryCo\Cloudflare\Responses\AISearchInstancesStats::class, []);
	}
}
