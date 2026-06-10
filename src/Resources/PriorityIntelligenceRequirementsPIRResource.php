<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class PriorityIntelligenceRequirementsPIRResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Priority Intelligence Requirements
	 */
	public function create(\FoundryCo\Cloudflare\Requests\CloudforceOnePriorityListRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/requests/priority', \FoundryCo\Cloudflare\Responses\CloudforceOnePriorityList::class, $request);
	}


	/**
	 * Create a New Priority Intelligence Requirement
	 */
	public function new(\FoundryCo\Cloudflare\Requests\CloudforceOnePriorityNewRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/requests/priority/new', \FoundryCo\Cloudflare\Responses\CloudforceOnePriorityNew::class, $request);
	}


	/**
	 * Get Priority Intelligence Requirement Quota
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/requests/priority/quota', \FoundryCo\Cloudflare\Responses\CloudforceOnePriorityQuota::class, []);
	}


	/**
	 * Get a Priority Intelligence Requirement
	 */
	public function get(string $priorityId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/requests/priority/' . $priorityId, \FoundryCo\Cloudflare\Responses\CloudforceOnePriorityGet::class, []);
	}


	/**
	 * Update a Priority Intelligence Requirement
	 */
	public function update(
		string $priorityId,
		\FoundryCo\Cloudflare\Requests\CloudforceOnePriorityUpdateRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/cloudforce-one/requests/priority/' . $priorityId, \FoundryCo\Cloudflare\Responses\CloudforceOnePriorityUpdate::class, $request);
	}


	/**
	 * Delete a Priority Intelligence Requirement
	 */
	public function delete(string $priorityId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/cloudforce-one/requests/priority/' . $priorityId);
	}
}
