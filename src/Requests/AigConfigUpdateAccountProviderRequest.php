<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update a Account Provider
 */
readonly class AigConfigUpdateAccountProviderRequest
{
	public function __construct(
		public ?string $baseUrl = null,
		public ?bool $beta = null,
		public ?string $curlExample = null,
		public ?string $description = null,
		public ?bool $enable = null,
		public ?string $headers = null,
		public ?string $jsExample = null,
		public ?string $link = null,
		public ?string $logo = null,
		public ?string $name = null,
		public ?int $position = null,
		public ?string $slug = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'base_url' => $this->baseUrl,
		    'beta' => $this->beta,
		    'curl_example' => $this->curlExample,
		    'description' => $this->description,
		    'enable' => $this->enable,
		    'headers' => $this->headers,
		    'js_example' => $this->jsExample,
		    'link' => $this->link,
		    'logo' => $this->logo,
		    'name' => $this->name,
		    'position' => $this->position,
		    'slug' => $this->slug,
		], fn ($v) => $v !== null);
	}
}
