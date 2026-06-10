<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class TokenValidationTokenConfigurationResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * List token validation configurations
	 */
	public function list(?int $page = null, ?int $perPage = null): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/token_validation/config', \FoundryCo\Cloudflare\Responses\TokenValidationConfigList::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Create a new Token Validation configuration
	 */
	public function create(\FoundryCo\Cloudflare\Requests\TokenValidationConfigCreateRequest $request): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/token_validation/config', \FoundryCo\Cloudflare\Responses\TokenValidationConfigCreate::class, $request);
	}


	/**
	 * Get a single Token Configuration
	 */
	public function get(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/token_validation/config/' . $configId, \FoundryCo\Cloudflare\Responses\TokenValidationConfigGet::class, []);
	}


	/**
	 * Edit an existing Token Configuration
	 */
	public function update(\FoundryCo\Cloudflare\Requests\TokenValidationConfigEditRequest $request): mixed
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/token_validation/config/' . $configId, \FoundryCo\Cloudflare\Responses\TokenValidationConfigEdit::class, $request);
	}


	/**
	 * Delete Token Configuration
	 */
	public function delete(): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/token_validation/config/' . $configId);
	}


	/**
	 * Update Token Configuration credentials
	 */
	public function credentials(
		\FoundryCo\Cloudflare\Requests\TokenValidationConfigCredentialsUpdateRequest $request,
	): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/token_validation/config/' . $configId . '/credentials', null, $request);
	}
}
