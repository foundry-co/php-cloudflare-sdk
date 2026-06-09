<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class NotificationPoliciesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Notification policies
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\NotificationPoliciesPolicies
	{
		return $this->client->get('/accounts/' . $this->accountId . '/alerting/v3/policies', \FoundryCo\Cloudflare\Responses\NotificationPoliciesPolicies::class, []);
	}


	/**
	 * Create a Notification policy
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\NotificationPoliciesCreateANotificationPolicyRequest $request,
	): \FoundryCo\Cloudflare\Responses\NotificationPoliciesPolicy
	{
		return $this->client->post('/accounts/' . $this->accountId . '/alerting/v3/policies', \FoundryCo\Cloudflare\Responses\NotificationPoliciesPolicy::class, $request);
	}


	/**
	 * Get a Notification policy
	 */
	public function get(string $policyId): \FoundryCo\Cloudflare\Responses\NotificationPoliciesPolicy
	{
		return $this->client->get('/accounts/' . $this->accountId . '/alerting/v3/policies/' . $policyId, \FoundryCo\Cloudflare\Responses\NotificationPoliciesPolicy::class, []);
	}


	/**
	 * Update a Notification policy
	 */
	public function update(
		string $policyId,
		\FoundryCo\Cloudflare\Requests\NotificationPoliciesUpdateANotificationPolicyRequest $request,
	): \FoundryCo\Cloudflare\Responses\NotificationPoliciesPolicy
	{
		return $this->client->put('/accounts/' . $this->accountId . '/alerting/v3/policies/' . $policyId, \FoundryCo\Cloudflare\Responses\NotificationPoliciesPolicy::class, $request);
	}


	/**
	 * Delete a Notification policy
	 */
	public function delete(string $policyId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/alerting/v3/policies/' . $policyId);
	}


	/**
	 * Show email unsubscribe details
	 */
	public function unsubscribe(
		string $policyId,
		?string $email = null,
		?string $token = null,
	): \FoundryCo\Cloudflare\Responses\NotificationPoliciesDetails
	{
		return $this->client->get('/accounts/' . $this->accountId . '/alerting/v3/policies/' . $policyId . '/email/unsubscribe', \FoundryCo\Cloudflare\Responses\NotificationPoliciesDetails::class, ['email' => $email ?? null, 'token' => $token ?? null]);
	}


	/**
	 * Unsubscribe email from a Notification policy
	 */
	public function notificationPoliciesUnsubscribeEmailFromNotificationPolicy(
		string $policyId,
		?string $email = null,
		?string $token = null,
	): \FoundryCo\Cloudflare\Responses\NotificationPoliciesPolicy
	{
		return $this->client->post('/accounts/' . $this->accountId . '/alerting/v3/policies/' . $policyId . '/email/unsubscribe', \FoundryCo\Cloudflare\Responses\NotificationPoliciesPolicy::class, null);
	}


	/**
	 * Test a Notification policy
	 */
	public function test(
		string $policyId,
		\FoundryCo\Cloudflare\Requests\NotificationPoliciesTestANotificationPolicyRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/alerting/v3/policies/' . $policyId . '/test', null, $request);
	}
}
