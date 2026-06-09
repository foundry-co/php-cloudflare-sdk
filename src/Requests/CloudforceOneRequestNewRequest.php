<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a New Request.
 */
readonly class CloudforceOneRequestNewRequest
{
	public function __construct(
		/** Request content. */
		public ?string $content = null,
		/** Priority for analyzing the request. */
		public ?string $priority = null,
		/** Requested information from request. */
		public ?string $requestType = null,
		/** Brief description of the request. */
		public ?string $summary = null,
		/** The CISA defined Traffic Light Protocol (TLP). */
		public ?\FoundryCo\Cloudflare\Enums\CloudforceOneRequestNewRequestTlp $tlp = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'content' => $this->content,
		    'priority' => $this->priority,
		    'request_type' => $this->requestType,
		    'summary' => $this->summary,
		    'tlp' => $this->tlp?->value,
		], fn ($v) => $v !== null);
	}
}
