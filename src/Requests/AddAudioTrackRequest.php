<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Add audio tracks to a video
 */
readonly class AddAudioTrackRequest
{
	public function __construct(
		/** A string to uniquely identify the track amongst other audio track labels for the specified video. */
		public string $label,
		/** An audio track URL. The server must be publicly routable and support `HTTP HEAD` requests and `HTTP GET` range requests. The server should respond to `HTTP HEAD` requests with a `content-range` header that includes the size of the file. */
		public ?string $url = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'label' => $this->label,
		    'url' => $this->url,
		], fn ($v) => $v !== null);
	}
}
