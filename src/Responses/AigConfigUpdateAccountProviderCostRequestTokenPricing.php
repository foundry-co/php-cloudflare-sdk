<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AigConfigUpdateAccountProviderCostRequestTokenPricing
{
	public function __construct(
		public ?float $inputAudioTokens = null,
		public ?float $inputCacheCreationTokens = null,
		public ?float $inputCachedTokens = null,
		public ?float $inputImageCount = null,
		public ?float $inputImageTokens = null,
		public ?float $inputTextTokens = null,
		public ?float $inputTokens = null,
		public ?float $inputVideoTokens = null,
		public ?float $outputImageCount = null,
		public ?float $outputReasoningTokens = null,
		public ?float $outputTokens = null,
		public ?float $totalTokens = null,
	) {
	}
}
