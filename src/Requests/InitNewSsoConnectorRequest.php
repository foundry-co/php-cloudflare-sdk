<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Initialize new SSO connector
 */
readonly class InitNewSsoConnectorRequest
{
	public function __construct(
		/** Email domain of the new SSO connector */
		public string $emailDomain,
		/** Begin the verification process after creation */
		public ?bool $beginVerification = null,
		/** Controls the display of FedRAMP language to the user during SSO login */
		public ?bool $useFedrampLanguage = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'email_domain' => $this->emailDomain,
		    'begin_verification' => $this->beginVerification,
		    'use_fedramp_language' => $this->useFedrampLanguage,
		], fn ($v) => $v !== null);
	}
}
