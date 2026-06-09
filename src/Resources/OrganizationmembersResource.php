<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class OrganizationmembersResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * List organization members
	 */
	public function get(
		string $organizationId,
		?array $status = null,
		?string $useremail = null,
		?string $useremailcontains = null,
		?string $useremailstartsWith = null,
		?string $useremailendsWith = null,
		?string $pageToken = null,
		?int $pageSize = null,
	): \FoundryCo\Cloudflare\Responses\OrganizationMembersList
	{
		return $this->client->get('/organizations/' . $organizationId . '/members', \FoundryCo\Cloudflare\Responses\OrganizationMembersList::class, ['status' => $status ?? null, 'useremail' => $useremail ?? null, 'useremailcontains' => $useremailcontains ?? null, 'useremailstartsWith' => $useremailstartsWith ?? null, 'useremailendsWith' => $useremailendsWith ?? null, 'pageToken' => $pageToken ?? null, 'pageSize' => $pageSize ?? null]);
	}


	/**
	 * Create organization member
	 */
	public function create(
		string $organizationId,
		\FoundryCo\Cloudflare\Requests\MembersCreateRequest $request,
	): \FoundryCo\Cloudflare\Responses\OrganizationMembersCreate
	{
		return $this->client->post('/organizations/' . $organizationId . '/members', \FoundryCo\Cloudflare\Responses\OrganizationMembersCreate::class, $request);
	}


	/**
	 * Get organization member
	 */
	public function members(
		string $organizationId,
		string $memberId,
	): \FoundryCo\Cloudflare\Responses\OrganizationMembersRetrieve
	{
		return $this->client->get('/organizations/' . $organizationId . '/members/' . $memberId, \FoundryCo\Cloudflare\Responses\OrganizationMembersRetrieve::class, []);
	}


	/**
	 * Delete organization member
	 */
	public function delete(
		string $organizationId,
		string $memberId,
		\FoundryCo\Cloudflare\Requests\MembersDeleteRequest $request,
	): void
	{
		$this->client->delete('/organizations/' . $organizationId . '/members/' . $memberId);
	}


	/**
	 * Batch create organization members
	 */
	public function membersBatchcreate(
		string $organizationId,
		\FoundryCo\Cloudflare\Requests\MembersBatchCreateRequest $request,
	): \FoundryCo\Cloudflare\Responses\OrganizationMembersBatchCreate
	{
		return $this->client->post('/organizations/' . $organizationId . '/members:batchCreate', \FoundryCo\Cloudflare\Responses\OrganizationMembersBatchCreate::class, $request);
	}
}
