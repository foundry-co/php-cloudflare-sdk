<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Value of the zone setting.
 */
readonly class ZoneCacheSettingsGetVariantsSettingValue
{
	public function __construct(
		/** List of strings with the MIME types of all the variants that should be served for avif. */
		public ?array $avif = null,
		/** List of strings with the MIME types of all the variants that should be served for bmp. */
		public ?array $bmp = null,
		/** List of strings with the MIME types of all the variants that should be served for gif. */
		public ?array $gif = null,
		/** List of strings with the MIME types of all the variants that should be served for jp2. */
		public ?array $jp2 = null,
		/** List of strings with the MIME types of all the variants that should be served for jpeg. */
		public ?array $jpeg = null,
		/** List of strings with the MIME types of all the variants that should be served for jpg. */
		public ?array $jpg = null,
		/** List of strings with the MIME types of all the variants that should be served for jpg2. */
		public ?array $jpg2 = null,
		/** List of strings with the MIME types of all the variants that should be served for png. */
		public ?array $png = null,
		/** List of strings with the MIME types of all the variants that should be served for tif. */
		public ?array $tif = null,
		/** List of strings with the MIME types of all the variants that should be served for tiff. */
		public ?array $tiff = null,
		/** List of strings with the MIME types of all the variants that should be served for webp. */
		public ?array $webp = null,
	) {
	}
}
