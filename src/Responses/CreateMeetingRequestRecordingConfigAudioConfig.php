<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Object containing configuration regarding the audio that is being recorded.
 */
readonly class CreateMeetingRequestRecordingConfigAudioConfig
{
	public function __construct(
		/** Audio signal pathway within an audio file that carries a specific sound source. */
		public ?\FoundryCo\Cloudflare\Enums\CreateMeetingRequestRecordingConfigAudioConfigChannel $channel = null,
		/** Codec using which the recording will be encoded. If VP8/VP9 is selected for videoConfig, changing audioConfig is not allowed. In this case, the codec in the audioConfig is automatically set to vorbis. */
		public ?\FoundryCo\Cloudflare\Enums\CreateMeetingRequestRecordingConfigAudioConfigCodec $codec = null,
		/** Controls whether to export audio file seperately */
		public ?bool $exportFile = null,
	) {
	}
}
