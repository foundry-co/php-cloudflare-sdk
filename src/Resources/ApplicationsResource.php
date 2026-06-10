<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class ApplicationsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Applications associated with your account
	 */
	public function list(?string $name = null, ?string $image = null, ?array $label = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/containers/applications', \FoundryCo\Cloudflare\Responses\ListApplications::class, ['name' => $name ?? null, 'image' => $image ?? null, 'label' => $label ?? null]);
	}


	/**
	 * Create a new application
	 */
	public function create(\FoundryCo\Cloudflare\Requests\CreateApplicationRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/containers/applications', \FoundryCo\Cloudflare\Responses\CreateApplication::class, $request);
	}


	/**
	 * Get a single application by id
	 */
	public function get(string $applicationId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/containers/applications/' . $applicationId, \FoundryCo\Cloudflare\Responses\GetApplication::class, []);
	}


	/**
	 * Modify an application
	 */
	public function update(
		string $applicationId,
		\FoundryCo\Cloudflare\Requests\ModifyApplicationRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/containers/applications/' . $applicationId, \FoundryCo\Cloudflare\Responses\ModifyApplication::class, $request);
	}


	/**
	 * Delete a single application by id
	 */
	public function delete(string $applicationId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/containers/applications/' . $applicationId);
	}


	/**
	 * Create a new rollout for an application
	 */
	public function rollouts(
		string $applicationId,
		\FoundryCo\Cloudflare\Requests\CreateApplicationRolloutRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/containers/applications/' . $applicationId . '/rollouts', \FoundryCo\Cloudflare\Responses\CreateApplicationRollout::class, $request);
	}


	/**
	 * List all application versions
	 */
	public function versions(string $applicationId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/containers/applications/' . $applicationId . '/versions', \FoundryCo\Cloudflare\Responses\ListApplicationVersions::class, []);
	}


	/**
	 * List applications
	 */
	public function applications(
		?string $filter = null,
		?int $limit = null,
		?int $offset = null,
		?string $orderBy = null,
		?string $search = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/resource-library/applications', \FoundryCo\Cloudflare\Responses\GetApplications::class, ['filter' => $filter ?? null, 'limit' => $limit ?? null, 'offset' => $offset ?? null, 'orderBy' => $orderBy ?? null, 'search' => $search ?? null]);
	}


	/**
	 * Get application
	 */
	public function getApplicationById(string $id): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/resource-library/applications/' . $id, \FoundryCo\Cloudflare\Responses\GetApplicationById::class, []);
	}
}
