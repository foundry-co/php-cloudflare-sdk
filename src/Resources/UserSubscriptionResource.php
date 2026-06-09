<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class UserSubscriptionResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * Get User Subscriptions
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\UserSubscriptionSubscriptions
	{
		return $this->client->get('/user/subscriptions', \FoundryCo\Cloudflare\Responses\UserSubscriptionSubscriptions::class, []);
	}


	/**
	 * Update User Subscription
	 */
	public function update(
		string $identifier,
		\FoundryCo\Cloudflare\Requests\UserSubscriptionUpdateUserSubscriptionRequest $request,
	): mixed
	{
		return $this->client->put('/user/subscriptions/' . $identifier, null, $request);
	}


	/**
	 * Delete User Subscription
	 */
	public function delete(string $identifier): void
	{
		$this->client->delete('/user/subscriptions/' . $identifier);
	}
}
