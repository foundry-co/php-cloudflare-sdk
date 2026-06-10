<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class TurnstileResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Turnstile Widgets
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/challenges/widgets', \FoundryCo\Cloudflare\Responses\AccountsTurnstileWidgetsList::class, []);
	}


	/**
	 * Create a Turnstile Widget
	 */
	public function create(\FoundryCo\Cloudflare\Requests\AccountsTurnstileWidgetCreateRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/challenges/widgets', \FoundryCo\Cloudflare\Responses\AccountsTurnstileWidgetCreate::class, $request);
	}


	/**
	 * Turnstile Widget Details
	 */
	public function get(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/challenges/widgets/' . $sitekey, \FoundryCo\Cloudflare\Responses\AccountsTurnstileWidgetGet::class, []);
	}


	/**
	 * Update a Turnstile Widget
	 */
	public function update(\FoundryCo\Cloudflare\Requests\AccountsTurnstileWidgetUpdateRequest $request): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/challenges/widgets/' . $sitekey, \FoundryCo\Cloudflare\Responses\AccountsTurnstileWidgetUpdate::class, $request);
	}


	/**
	 * Delete a Turnstile Widget
	 */
	public function delete(): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/challenges/widgets/' . $sitekey);
	}


	/**
	 * Rotate Secret for a Turnstile Widget
	 */
	public function rotateSecret(
		\FoundryCo\Cloudflare\Requests\AccountsTurnstileWidgetRotateSecretRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/challenges/widgets/' . $sitekey . '/rotate_secret', \FoundryCo\Cloudflare\Responses\AccountsTurnstileWidgetRotateSecret::class, $request);
	}
}
