<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PutPresetsPresetIdRequestConfig
{
	public function __construct(
		/** Maximum number of screen shares that can be active at a given time */
		public float $maxScreenshareCount,
		/** Maximum number of streams that are visible on a device */
		public PutPresetsPresetIdRequestConfigMaxVideoStreams $maxVideoStreams,
		/** Media configuration options. eg: Video quality */
		public PutPresetsPresetIdRequestConfigMedia $media,
		/** Type of the meeting */
		public \FoundryCo\Cloudflare\Enums\PutPresetsPresetIdRequestConfigViewType $viewType,
		/** Livestream viewer quality levels. */
		public ?array $livestreamViewerQualities = null,
	) {
	}
}
