<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class UsersOrganizationsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * List Organizations
	 */
	public function list(
		?string $name = null,
		?float $page = null,
		?float $perPage = null,
		?\FoundryCo\Cloudflare\Enums\UsersOrganizationsOrder $order = null,
		?\FoundryCo\Cloudflare\Enums\UsersOrganizationsDirection $direction = null,
		?\FoundryCo\Cloudflare\Enums\UsersOrganizationsMatch $match = null,
		?\FoundryCo\Cloudflare\Enums\UsersOrganizationsStatus $status = null,
	): mixed
	{
		return $this->client->get('/user/organizations', \FoundryCo\Cloudflare\Responses\UserSOrganizationsListOrganizations::class, ['name' => $name ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null, 'order' => $order ?? null, 'direction' => $direction ?? null, 'match' => $match ?? null, 'status' => $status ?? null]);
	}


	/**
	 * Organization Details
	 */
	public function get(string $organizationId): mixed
	{
		return $this->client->get('/user/organizations/' . $organizationId, null, []);
	}


	/**
	 * Leave Organization
	 */
	public function delete(string $organizationId): void
	{
		$this->client->delete('/user/organizations/' . $organizationId);
	}
}
