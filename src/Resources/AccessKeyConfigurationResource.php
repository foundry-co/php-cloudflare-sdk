<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AccessKeyConfigurationResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Get the Access key configuration
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/access/keys', \FoundryCo\Cloudflare\Responses\AccessKeyConfigurationGetTheAccessKeyConfiguration::class, []);
	}


	/**
	 * Update the Access key configuration
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\AccessKeyConfigurationUpdateTheAccessKeyConfigurationRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/access/keys', \FoundryCo\Cloudflare\Responses\AccessKeyConfigurationUpdateTheAccessKeyConfiguration::class, $request);
	}


	/**
	 * Rotate Access keys
	 */
	public function create(): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/access/keys/rotate', \FoundryCo\Cloudflare\Responses\AccessKeyConfigurationRotateAccessKeys::class, null);
	}
}
