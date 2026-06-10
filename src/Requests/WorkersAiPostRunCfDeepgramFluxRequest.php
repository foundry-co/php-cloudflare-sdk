<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Execute @cf/deepgram/flux model.
 */
readonly class WorkersAiPostRunCfDeepgramFluxRequest
{
	public function __construct(
		/** End-of-turn confidence required to fire an eager end-of-turn event. When set, enables EagerEndOfTurn and TurnResumed events. Valid Values 0.3 - 0.9. */
		public ?string $eagerEotThreshold = null,
		/** Encoding of the audio stream. Currently only supports raw signed little-endian 16-bit PCM. */
		public ?\FoundryCo\Cloudflare\Enums\WorkersAiPostRunCfDeepgramFluxRequestEncoding $encoding = null,
		/** End-of-turn confidence required to finish a turn. Valid Values 0.5 - 0.9. */
		public ?string $eotThreshold = null,
		/** A turn will be finished when this much time has passed after speech, regardless of EOT confidence. */
		public ?string $eotTimeoutMs = null,
		/** Keyterm prompting can improve recognition of specialized terminology. Pass multiple keyterm query parameters to boost multiple keyterms. */
		public ?string $keyterm = null,
		/** Opts out requests from the Deepgram Model Improvement Program. Refer to Deepgram Docs for pricing impacts before setting this to true. https://dpgr.am/deepgram-mip */
		public ?\FoundryCo\Cloudflare\Enums\WorkersAiPostRunCfDeepgramFluxRequestMipOptOut $mipOptOut = null,
		/** Sample rate of the audio stream in Hz. */
		public ?string $sampleRate = null,
		/** Label your requests for the purpose of identification during usage reporting */
		public ?string $tag = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'eager_eot_threshold' => $this->eagerEotThreshold,
		    'encoding' => $this->encoding?->value,
		    'eot_threshold' => $this->eotThreshold,
		    'eot_timeout_ms' => $this->eotTimeoutMs,
		    'keyterm' => $this->keyterm,
		    'mip_opt_out' => $this->mipOptOut?->value,
		    'sample_rate' => $this->sampleRate,
		    'tag' => $this->tag,
		], fn ($v) => $v !== null);
	}
}
