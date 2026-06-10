<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WebAnalyticsCreateSite
{
	public function __construct(
		/** If enabled, the JavaScript snippet is automatically injected for orange-clouded sites. */
		public ?bool $autoInstall = null,
		public ?\DateTimeImmutable $created = null,
		/** A list of rules. */
		public ?array $rules = null,
		public ?WebAnalyticsCreateSiteRuleset $ruleset = null,
		/** The Web Analytics site identifier. */
		public ?string $siteTag = null,
		/** The Web Analytics site token. */
		public ?string $siteToken = null,
		/** Encoded JavaScript snippet. */
		public ?string $snippet = null,
	) {
	}
}
