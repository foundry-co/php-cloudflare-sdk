<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A name for a value. A value stored under a given key may be retrieved via the same key.
 */
readonly class WorkersKVNamespaceKeys
{
	public function __construct(
		/** A key's name. The name may be at most 512 bytes. All printable, non-whitespace characters are valid. Use percent-encoding to define key names as part of a URL. */
		public string $name,
		/** The time, measured in number of seconds since the UNIX epoch, at which the key will expire. This property is omitted for keys that will not expire. */
		public ?float $expiration = null,
		public mixed $metadata = null,
	) {
	}
}
