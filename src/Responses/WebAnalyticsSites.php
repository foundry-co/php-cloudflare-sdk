<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WebAnalyticsSites
{
	public function __construct(
		/** If enabled, the JavaScript snippet is automatically injected for orange-clouded sites. */
		public ?bool $autoInstall = null,
		public ?\DateTimeImmutable $created = null,
		/** A list of rules. */
		public ?array $rules = null,
		public ?WebAnalyticsSitesRuleset $ruleset = null,
		/** The Web Analytics site identifier. */
		public ?string $siteTag = null,
		/** The Web Analytics site token. */
		public ?string $siteToken = null,
		/** Encoded JavaScript snippet. */
		public ?string $snippet = null,
	) {
	}
}
