<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Specify custom certificate settings for BYO-PKI. This field is deprecated; use `certificate` instead.
 */
readonly class ZeroTrustAccountsConfigurationSettingsCustomCertificate
{
	public function __construct(
		/** Specify whether to enable a custom certificate authority for signing Gateway traffic. */
		public bool $enabled,
		/** Indicate the internal certificate status. */
		public ?string $bindingStatus = null,
		/** Specify the UUID of the certificate (ID from MTLS certificate store). */
		public ?string $id = null,
		public ?\DateTimeImmutable $updatedAt = null,
	) {
	}
}
