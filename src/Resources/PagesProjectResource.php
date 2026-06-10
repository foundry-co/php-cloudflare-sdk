<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class PagesProjectResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Get projects
	 */
	public function list(?int $page = null, ?int $perPage = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/pages/projects', \FoundryCo\Cloudflare\Responses\PagesProjectGetProjects::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Create project
	 */
	public function create(\FoundryCo\Cloudflare\Requests\PagesProjectCreateProjectRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/pages/projects', \FoundryCo\Cloudflare\Responses\PagesProjectCreateProject::class, $request);
	}


	/**
	 * Get project
	 */
	public function get(string $projectName): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/pages/projects/' . $projectName, \FoundryCo\Cloudflare\Responses\PagesProjectGetProject::class, []);
	}


	/**
	 * Update project
	 */
	public function update(
		string $projectName,
		\FoundryCo\Cloudflare\Requests\PagesProjectUpdateProjectRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/pages/projects/' . $projectName, \FoundryCo\Cloudflare\Responses\PagesProjectUpdateProject::class, $request);
	}


	/**
	 * Delete project
	 */
	public function delete(string $projectName): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/pages/projects/' . $projectName);
	}


	/**
	 * Connect project source
	 */
	public function source(
		string $projectName,
		\FoundryCo\Cloudflare\Requests\PagesProjectConnectProjectSourceRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/pages/projects/' . $projectName . '/source', \FoundryCo\Cloudflare\Responses\PagesProjectConnectProjectSource::class, $request);
	}


	/**
	 * Disconnect project source
	 */
	public function pagesProjectDisconnectProjectSource(string $projectName): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/pages/projects/' . $projectName . '/source');
	}
}
