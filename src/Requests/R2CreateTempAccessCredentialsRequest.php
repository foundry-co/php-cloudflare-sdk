<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create Temporary Access Credentials
 */
readonly class R2CreateTempAccessCredentialsRequest
{
	public function __construct(
		/** Name of the R2 bucket. */
		public string $bucket,
		/** The parent access key id to use for signing. */
		public string $parentAccessKeyId,
		/** Permissions allowed on the credentials. */
		public \FoundryCo\Cloudflare\Enums\R2CreateTempAccessCredentialsRequestPermission $permission,
		/** How long the credentials will live for in seconds. */
		public float $ttlSeconds,
		/** Optional object paths to scope the credentials to. */
		public ?array $objects = null,
		/** Optional prefix paths to scope the credentials to. */
		public ?array $prefixes = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'bucket' => $this->bucket,
		    'parentAccessKeyId' => $this->parentAccessKeyId,
		    'permission' => $this->permission->value,
		    'ttlSeconds' => $this->ttlSeconds,
		    'objects' => $this->objects,
		    'prefixes' => $this->prefixes,
		], fn ($v) => $v !== null);
	}
}
