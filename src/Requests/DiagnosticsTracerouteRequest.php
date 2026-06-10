<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Traceroute
 */
readonly class DiagnosticsTracerouteRequest
{
	public function __construct(
		public array $targets,
		/** If no source colo names specified, all colos will be used. China colos are unavailable for traceroutes. */
		public ?array $colos = null,
		public ?\FoundryCo\Cloudflare\Responses\DiagnosticsTracerouteRequestOptions $options = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'targets' => $this->targets,
		    'colos' => $this->colos,
		    'options' => $this->options?->toArray(),
		], fn ($v) => $v !== null);
	}
}
