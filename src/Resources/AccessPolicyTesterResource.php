<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AccessPolicyTesterResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Start Access policy test
	 */
	public function create(\FoundryCo\Cloudflare\Requests\AccessPolicyTestsRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/access/policy-tests', \FoundryCo\Cloudflare\Responses\AccessPolicyTests::class, $request);
	}


	/**
	 * Get the current status of a given Access policy test
	 */
	public function get(string $policyTestId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/access/policy-tests/' . $policyTestId, \FoundryCo\Cloudflare\Responses\AccessPolicyTestsGetAnUpdate::class, []);
	}


	/**
	 * Get an Access policy test users page
	 */
	public function users(
		string $policyTestId,
		?int $page = null,
		?int $perPage = null,
		?\FoundryCo\Cloudflare\Enums\AccessPolicyTesterStatus $status = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/access/policy-tests/' . $policyTestId . '/users', \FoundryCo\Cloudflare\Responses\AccessPolicyTestsGetAUserPage::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'status' => $status ?? null]);
	}
}
