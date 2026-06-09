<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Execute @cf/deepgram/aura-2-es model.
 */
readonly class WorkersAiPostRunCfDeepgramAura2EsRequest
{
	public function __construct(
		/** The bitrate of the audio in bits per second. Choose from predefined ranges or specific values based on the encoding type. */
		public ?float $bitRate = null,
		/** Container specifies the file format wrapper for the output audio. The available options depend on the encoding type.. */
		public ?\FoundryCo\Cloudflare\Enums\WorkersAiPostRunCfDeepgramAura2EsRequestContainer $container = null,
		/** Encoding of the output audio. */
		public ?\FoundryCo\Cloudflare\Enums\WorkersAiPostRunCfDeepgramAura2EsRequestEncoding $encoding = null,
		/** Sample Rate specifies the sample rate for the output audio. Based on the encoding, different sample rates are supported. For some encodings, the sample rate is not configurable */
		public ?float $sampleRate = null,
		/** Speaker used to produce the audio. */
		public ?\FoundryCo\Cloudflare\Enums\WorkersAiPostRunCfDeepgramAura2EsRequestSpeaker $speaker = null,
		/** The text content to be converted to speech */
		public ?string $text = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'bit_rate' => $this->bitRate,
		    'container' => $this->container?->value,
		    'encoding' => $this->encoding?->value,
		    'sample_rate' => $this->sampleRate,
		    'speaker' => $this->speaker?->value,
		    'text' => $this->text,
		], fn ($v) => $v !== null);
	}
}
