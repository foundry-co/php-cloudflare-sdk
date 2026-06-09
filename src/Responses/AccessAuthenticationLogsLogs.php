<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AccessAuthenticationLogsLogs
{
	public function __construct(
		/** The event that occurred, such as a login attempt. */
		public ?string $action = null,
		/** The result of the authentication event. */
		public ?bool $allowed = null,
		/** The URL of the Access application. */
		public ?string $appDomain = null,
		/** The unique identifier for the Access application. */
		public ?string $appUid = null,
		/** The IdP used to authenticate. */
		public ?string $connection = null,
		public ?\DateTimeImmutable $createdAt = null,
		/** The IP address of the authenticating user. */
		public ?string $ipAddress = null,
		/** The unique identifier for the request to Cloudflare. */
		public ?string $rayId = null,
		/** The email address of the authenticating user. */
		public ?string $userEmail = null,
	) {
	}
}
