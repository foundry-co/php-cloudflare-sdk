<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Additional request parameters
 */
readonly class AccountRequestTracerRequestTraceRequestContext
{
	public function __construct(
		/** Bot score used for evaluating tracing request processing */
		public ?int $botScore = null,
		/** Geodata for tracing request */
		public ?AccountRequestTracerRequestTraceRequestContextGeoloc $geoloc = null,
		/** Whether to skip any challenges for tracing request (e.g.: captcha) */
		public ?bool $skipChallenge = null,
		/** Threat score used for evaluating tracing request processing */
		public ?int $threatScore = null,
	) {
	}
}
