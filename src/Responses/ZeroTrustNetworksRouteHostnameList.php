<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZeroTrustNetworksRouteHostnameList
{
	public function __construct(
		/** An optional description of the hostname route. */
		public ?string $comment = null,
		/** Timestamp of when the resource was created. */
		public ?\DateTimeImmutable $createdAt = null,
		/** Timestamp of when the resource was deleted. If `null`, the resource has not been deleted. */
		public ?\DateTimeImmutable $deletedAt = null,
		/** The hostname of the route. */
		public ?string $hostname = null,
		/** The hostname route ID. */
		public ?string $id = null,
		public mixed $tunType = null,
		/** UUID of the tunnel. */
		public ?string $tunnelId = null,
		/** A user-friendly name for a tunnel. */
		public ?string $tunnelName = null,
	) {
	}
}
