<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AISearchNamespacesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List namespaces.
	 */
	public function list(
		?int $page = null,
		?int $perPage = null,
		?string $search = null,
	): \FoundryCo\Cloudflare\Responses\AISearchNamespacesNamespaces
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-search/namespaces', \FoundryCo\Cloudflare\Responses\AISearchNamespacesNamespaces::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'search' => $search ?? null]);
	}


	/**
	 * Create namespace.
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\AiSearchCreateNamespaceRequest $request,
	): \FoundryCo\Cloudflare\Responses\AISearchNamespacesNamespace
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai-search/namespaces', \FoundryCo\Cloudflare\Responses\AISearchNamespacesNamespace::class, $request);
	}


	/**
	 * Read namespace.
	 */
	public function get(string $name): \FoundryCo\Cloudflare\Responses\AISearchNamespacesNamespace
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-search/namespaces/' . $name, \FoundryCo\Cloudflare\Responses\AISearchNamespacesNamespace::class, []);
	}


	/**
	 * Update namespace.
	 */
	public function update(
		string $name,
		\FoundryCo\Cloudflare\Requests\AiSearchUpdateNamespaceRequest $request,
	): \FoundryCo\Cloudflare\Responses\AISearchNamespacesNamespace
	{
		return $this->client->put('/accounts/' . $this->accountId . '/ai-search/namespaces/' . $name, \FoundryCo\Cloudflare\Responses\AISearchNamespacesNamespace::class, $request);
	}


	/**
	 * Delete namespace.
	 */
	public function delete(string $name): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/ai-search/namespaces/' . $name);
	}


	/**
	 * Move an instance to a different namespace.
	 */
	public function instances(
		string $name,
		string $id,
		\FoundryCo\Cloudflare\Requests\AiSearchMoveInstanceRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/ai-search/namespaces/' . $name . '/instances/' . $id, null, $request);
	}
}
