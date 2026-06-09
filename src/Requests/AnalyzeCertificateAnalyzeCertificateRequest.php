<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Analyze Certificate
 */
readonly class AnalyzeCertificateAnalyzeCertificateRequest
{
	public function __construct(
		/** A ubiquitous bundle has the highest probability of being verified everywhere, even by clients using outdated or unusual trust stores. An optimal bundle uses the shortest chain and newest intermediates. And the force bundle verifies the chain, but does not otherwise modify it. */
		public ?\FoundryCo\Cloudflare\Enums\AnalyzeCertificateAnalyzeCertificateRequestBundleMethod $bundleMethod = null,
		/** The zone's SSL certificate or certificate and the intermediate(s). */
		public ?string $certificate = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'bundle_method' => $this->bundleMethod?->value,
		    'certificate' => $this->certificate,
		], fn ($v) => $v !== null);
	}
}
