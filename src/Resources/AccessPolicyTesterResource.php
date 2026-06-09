<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function create(
		\FoundryCo\Cloudflare\Requests\AccessPolicyTestsRequest $request,
	): \FoundryCo\Cloudflare\Responses\AccessPolicyTesterTests
	{
		return $this->client->post('/accounts/' . $this->accountId . '/access/policy-tests', \FoundryCo\Cloudflare\Responses\AccessPolicyTesterTests::class, $request);
	}


	/**
	 * Get the current status of a given Access policy test
	 */
	public function get(string $policyTestId): \FoundryCo\Cloudflare\Responses\AccessPolicyTesterUpdate
	{
		return $this->client->get('/accounts/' . $this->accountId . '/access/policy-tests/' . $policyTestId, \FoundryCo\Cloudflare\Responses\AccessPolicyTesterUpdate::class, []);
	}


	/**
	 * Get an Access policy test users page
	 */
	public function users(
		string $policyTestId,
		?int $page = null,
		?int $perPage = null,
		?\FoundryCo\Cloudflare\Enums\AccessPolicyTesterStatus $status = null,
	): \FoundryCo\Cloudflare\Responses\AccessPolicyTesterPage
	{
		return $this->client->get('/accounts/' . $this->accountId . '/access/policy-tests/' . $policyTestId . '/users', \FoundryCo\Cloudflare\Responses\AccessPolicyTesterPage::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'status' => $status ?? null]);
	}
}
