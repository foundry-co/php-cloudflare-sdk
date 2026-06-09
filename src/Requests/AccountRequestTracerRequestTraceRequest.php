<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Request Trace
 */
readonly class AccountRequestTracerRequestTraceRequest
{
	public function __construct(
		/** HTTP Method of tracing request */
		public string $method,
		/** URL to which perform tracing request */
		public string $url,
		public ?\FoundryCo\Cloudflare\Responses\AccountRequestTracerRequestTraceRequestBody $body = null,
		/** Additional request parameters */
		public ?\FoundryCo\Cloudflare\Responses\AccountRequestTracerRequestTraceRequestContext $context = null,
		/** Cookies added to tracing request */
		public ?array $cookies = null,
		/** Headers added to tracing request */
		public ?array $headers = null,
		/** HTTP Protocol of tracing request */
		public ?string $protocol = null,
		/** Skip sending the request to the Origin server after all rules evaluation */
		public ?bool $skipResponse = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'method' => $this->method,
		    'url' => $this->url,
		    'body' => $this->body?->toArray(),
		    'context' => $this->context?->toArray(),
		    'cookies' => $this->cookies,
		    'headers' => $this->headers,
		    'protocol' => $this->protocol,
		    'skip_response' => $this->skipResponse,
		], fn ($v) => $v !== null);
	}
}
