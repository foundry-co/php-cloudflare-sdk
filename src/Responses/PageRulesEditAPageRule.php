<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PageRulesEditAPageRule
{
	public function __construct(
		/**
		 * The set of actions to perform if the targets of this rule match the
		 * request. Actions can redirect to another URL or override settings, but
		 * not both.
		 */
		public ?array $actions = null,
		/** The timestamp of when the Page Rule was created. */
		public ?\DateTimeImmutable $createdOn = null,
		/** Identifier. */
		public ?string $id = null,
		/** The timestamp of when the Page Rule was last modified. */
		public ?\DateTimeImmutable $modifiedOn = null,
		/**
		 * The priority of the rule, used to define which Page Rule is processed
		 * over another. A higher number indicates a higher priority. For example,
		 * if you have a catch-all Page Rule (rule A: `/images/*`) but want a more
		 * specific Page Rule to take precedence (rule B: `/images/special/*`),
		 * specify a higher priority for rule B so it overrides rule A.
		 */
		public ?int $priority = null,
		/** The status of the Page Rule. */
		public ?\FoundryCo\Cloudflare\Enums\PageRulesEditAPageRuleStatus $status = null,
		/** The rule targets to evaluate on each request. */
		public ?array $targets = null,
	) {
	}
}
