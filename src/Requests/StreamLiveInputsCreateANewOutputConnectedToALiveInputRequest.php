<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a new output, connected to a live input
 */
readonly class StreamLiveInputsCreateANewOutputConnectedToALiveInputRequest
{
	public function __construct(
		/** The streamKey used to authenticate against an output's target. */
		public string $streamKey,
		/** The URL an output uses to restream. */
		public string $url,
		/** When enabled, live video streamed to the associated live input will be sent to the output URL. When disabled, live video will not be sent to the output URL, even when streaming to the associated live input. Use this to control precisely when you start and stop simulcasting to specific destinations like YouTube and Twitch. */
		public ?bool $enabled = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'streamKey' => $this->streamKey,
		    'url' => $this->url,
		    'enabled' => $this->enabled,
		], fn ($v) => $v !== null);
	}
}
