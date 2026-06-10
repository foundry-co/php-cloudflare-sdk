<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class UpdateSsoConnectorState
{
	public function __construct(
		/** Timestamp for the creation of the SSO connector */
		public ?\DateTimeImmutable $createdOn = null,
		public ?string $emailDomain = null,
		public ?bool $enabled = null,
		/** SSO Connector identifier tag. */
		public mixed $id = null,
		/** Timestamp for the last update of the SSO connector */
		public ?\DateTimeImmutable $updatedOn = null,
		/** Controls the display of FedRAMP language to the user during SSO login */
		public ?bool $useFedrampLanguage = null,
		public ?UpdateSsoConnectorStateVerification $verification = null,
	) {
	}
}
