<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AccountPermissionGroupsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Account Permission Groups
	 */
	public function list(
		?string $id = null,
		?string $name = null,
		?string $label = null,
		?float $page = null,
		?float $perPage = null,
	): \FoundryCo\Cloudflare\Responses\AccountPermissionGroupsList
	{
		return $this->client->get('/accounts/' . $this->accountId . '/iam/permission_groups', \FoundryCo\Cloudflare\Responses\AccountPermissionGroupsList::class, ['id' => $id ?? null, 'name' => $name ?? null, 'label' => $label ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Permission Group Details
	 */
	public function get(mixed $permissionGroupId): \FoundryCo\Cloudflare\Responses\AccountPermissionGroupsDetails
	{
		return $this->client->get('/accounts/' . $this->accountId . '/iam/permission_groups/' . $permissionGroupId, \FoundryCo\Cloudflare\Responses\AccountPermissionGroupsDetails::class, []);
	}
}
