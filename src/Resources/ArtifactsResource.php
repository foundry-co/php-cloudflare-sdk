<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class ArtifactsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List namespaces
	 */
	public function list(?int $limit = null, ?string $cursor = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/artifacts/namespaces', null, ['limit' => $limit ?? null, 'cursor' => $cursor ?? null]);
	}


	/**
	 * Get a namespace
	 */
	public function get(string $namespace): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/artifacts/namespaces/' . $namespace, null, []);
	}


	/**
	 * List repositories
	 */
	public function repos(
		string $namespace,
		?int $limit = null,
		?string $cursor = null,
		?string $search = null,
		?\FoundryCo\Cloudflare\Enums\ArtifactsSort $sort = null,
		?\FoundryCo\Cloudflare\Enums\ArtifactsDirection $direction = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/artifacts/namespaces/' . $namespace . '/repos', null, ['limit' => $limit ?? null, 'cursor' => $cursor ?? null, 'search' => $search ?? null, 'sort' => $sort ?? null, 'direction' => $direction ?? null]);
	}


	/**
	 * Create a repository
	 */
	public function create(string $namespace): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/artifacts/namespaces/' . $namespace . '/repos', null, null);
	}


	/**
	 * Get a repository
	 */
	public function artifactsReposGet(string $namespace, string $name): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/artifacts/namespaces/' . $namespace . '/repos/' . $name, null, []);
	}


	/**
	 * Delete a repository
	 */
	public function delete(string $namespace, string $name): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/artifacts/namespaces/' . $namespace . '/repos/' . $name);
	}


	/**
	 * Read a Git blob
	 */
	public function blob(string $namespace, string $name, string $hash): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/artifacts/namespaces/' . $namespace . '/repos/' . $name . '/blob/' . $hash, null, []);
	}


	/**
	 * Read a Git commit
	 */
	public function commit(string $namespace, string $name, string $hash): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/artifacts/namespaces/' . $namespace . '/repos/' . $name . '/commit/' . $hash, null, []);
	}


	/**
	 * Read a file
	 */
	public function file(string $namespace, string $name, ?string $ref = null, ?string $path = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/artifacts/namespaces/' . $namespace . '/repos/' . $name . '/file', null, ['ref' => $ref ?? null, 'path' => $path ?? null]);
	}


	/**
	 * Fork a repository
	 */
	public function fork(string $namespace, string $name): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/artifacts/namespaces/' . $namespace . '/repos/' . $name . '/fork', null, null);
	}


	/**
	 * Import a repository
	 */
	public function import(string $namespace, string $name): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/artifacts/namespaces/' . $namespace . '/repos/' . $name . '/import', null, null);
	}


	/**
	 * Read commit history
	 */
	public function log(
		string $namespace,
		string $name,
		?string $ref = null,
		?int $limit = null,
		?int $offset = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/artifacts/namespaces/' . $namespace . '/repos/' . $name . '/log', null, ['ref' => $ref ?? null, 'limit' => $limit ?? null, 'offset' => $offset ?? null]);
	}


	/**
	 * Read a raw file with content type
	 */
	public function raw(string $namespace, string $name, string $ref, string $path): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/artifacts/namespaces/' . $namespace . '/repos/' . $name . '/raw/' . $ref . '/' . $path, null, []);
	}


	/**
	 * List repository tokens
	 */
	public function tokens(
		string $namespace,
		string $name,
		?\FoundryCo\Cloudflare\Enums\ArtifactsState $state = null,
		?int $page = null,
		?int $perPage = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/artifacts/namespaces/' . $namespace . '/repos/' . $name . '/tokens', null, ['state' => $state ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Read a Git tree
	 */
	public function tree(string $namespace, string $name, string $hash): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/artifacts/namespaces/' . $namespace . '/repos/' . $name . '/tree/' . $hash, null, []);
	}


	/**
	 * Create a repository token
	 */
	public function artifactsTokensCreate(string $namespace): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/artifacts/namespaces/' . $namespace . '/tokens', null, null);
	}


	/**
	 * Revoke a token
	 */
	public function artifactsTokensRevoke(string $namespace, string $id): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/artifacts/namespaces/' . $namespace . '/tokens/' . $id);
	}
}
