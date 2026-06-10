<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AccountSubscriptionsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Subscriptions
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/subscriptions', \FoundryCo\Cloudflare\Responses\AccountSubscriptionsListSubscriptions::class, []);
	}


	/**
	 * Create Subscription
	 */
	public function create(\FoundryCo\Cloudflare\Requests\AccountSubscriptionsCreateSubscriptionRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/subscriptions', \FoundryCo\Cloudflare\Responses\AccountSubscriptionsCreateSubscription::class, $request);
	}


	/**
	 * Update Subscription
	 */
	public function update(
		string $subscriptionIdentifier,
		\FoundryCo\Cloudflare\Requests\AccountSubscriptionsUpdateSubscriptionRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/subscriptions/' . $subscriptionIdentifier, \FoundryCo\Cloudflare\Responses\AccountSubscriptionsUpdateSubscription::class, $request);
	}


	/**
	 * Delete Subscription
	 */
	public function delete(string $subscriptionIdentifier): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/subscriptions/' . $subscriptionIdentifier);
	}
}
