<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Configuration for assets within a Worker.
 *
 * [`_headers`](https://developers.cloudflare.com/workers/static-assets/headers/#custom-headers) and
 * [`_redirects`](https://developers.cloudflare.com/workers/static-assets/redirects/) files should be
 * included as modules named `_headers` and `_redirects` with content type `text/plain`.
 */
readonly class CreateWorkerVersionRequestAssets
{
	public function __construct(
		/** Configuration for assets within a Worker. */
		public ?CreateWorkerVersionRequestAssetsConfig $config = null,
		/** Token provided upon successful upload of all files from a registered manifest. */
		public ?string $jwt = null,
	) {
	}
}
