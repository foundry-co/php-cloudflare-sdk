<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AccessApplicationsTestAccessPolicies
{
	public function __construct(
		public ?AccessApplicationsTestAccessPoliciesAppState $appState = null,
		public ?AccessApplicationsTestAccessPoliciesUserIdentity $userIdentity = null,
	) {
	}
}
