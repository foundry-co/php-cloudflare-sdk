<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function create(
		\FoundryCo\Cloudflare\Requests\CloudforceOnePriorityListRequest $request,
	): \FoundryCo\Cloudflare\Responses\PriorityIntelligenceRequirementsPIRList
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/requests/priority', \FoundryCo\Cloudflare\Responses\PriorityIntelligenceRequirementsPIRList::class, $request);
	}


	/**
	 * Create a New Priority Intelligence Requirement
	 */
	public function new(
		\FoundryCo\Cloudflare\Requests\CloudforceOnePriorityNewRequest $request,
	): \FoundryCo\Cloudflare\Responses\PriorityIntelligenceRequirementsPIRNew
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/requests/priority/new', \FoundryCo\Cloudflare\Responses\PriorityIntelligenceRequirementsPIRNew::class, $request);
	}


	/**
	 * Get Priority Intelligence Requirement Quota
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\PriorityIntelligenceRequirementsPIRQuota
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/requests/priority/quota', \FoundryCo\Cloudflare\Responses\PriorityIntelligenceRequirementsPIRQuota::class, []);
	}


	/**
	 * Get a Priority Intelligence Requirement
	 */
	public function get(string $priorityId): \FoundryCo\Cloudflare\Responses\PriorityIntelligenceRequirementsPIRGet
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/requests/priority/' . $priorityId, \FoundryCo\Cloudflare\Responses\PriorityIntelligenceRequirementsPIRGet::class, []);
	}


	/**
	 * Update a Priority Intelligence Requirement
	 */
	public function update(
		string $priorityId,
		\FoundryCo\Cloudflare\Requests\CloudforceOnePriorityUpdateRequest $request,
	): \FoundryCo\Cloudflare\Responses\PriorityIntelligenceRequirementsPIRUpdate
	{
		return $this->client->put('/accounts/' . $this->accountId . '/cloudforce-one/requests/priority/' . $priorityId, \FoundryCo\Cloudflare\Responses\PriorityIntelligenceRequirementsPIRUpdate::class, $request);
	}


	/**
	 * Delete a Priority Intelligence Requirement
	 */
	public function delete(string $priorityId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/cloudforce-one/requests/priority/' . $priorityId);
	}
}
