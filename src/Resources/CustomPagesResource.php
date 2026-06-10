<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class CustomPagesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * List custom pages
	 */
	public function get(string $zoneIdentifier): mixed
	{
		return $this->client->get('/zones/' . $zoneIdentifier . '/custom_pages', \FoundryCo\Cloudflare\Responses\CustomPagesForAZoneListCustomPages::class, []);
	}


	/**
	 * Create a preview token
	 */
	public function create(
		string $zoneIdentifier,
		\FoundryCo\Cloudflare\Requests\CustomPagesForAZoneCreatePreviewTokenRequest $request,
	): mixed
	{
		return $this->client->post('/zones/' . $zoneIdentifier . '/custom_pages/preview_tokens', \FoundryCo\Cloudflare\Responses\CustomPagesForAZoneCreatePreviewToken::class, $request);
	}


	/**
	 * Get a custom page
	 */
	public function customPages(
		\FoundryCo\Cloudflare\Enums\CustomPagesForAZoneIdentifier $identifier,
		string $zoneIdentifier,
	): mixed
	{
		return $this->client->get('/zones/' . $zoneIdentifier . '/custom_pages/' . $identifier, null, []);
	}


	/**
	 * Update a custom page
	 */
	public function update(
		\FoundryCo\Cloudflare\Enums\CustomPagesForAZoneIdentifier $identifier,
		string $zoneIdentifier,
		\FoundryCo\Cloudflare\Requests\CustomPagesForAZoneUpdateACustomPageRequest $request,
	): mixed
	{
		return $this->client->put('/zones/' . $zoneIdentifier . '/custom_pages/' . $identifier, \FoundryCo\Cloudflare\Responses\CustomPagesForAZoneUpdateACustomPage::class, $request);
	}
}
