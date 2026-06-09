<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PageRulesRules
{
	public function __construct(
		/**
		 * The set of actions to perform if the targets of this rule match the
		 * request. Actions can redirect to another URL or override settings, but
		 * not both.
		 */
		public array $actions,
		/** The timestamp of when the Page Rule was created. */
		public \DateTimeImmutable $createdOn,
		/** Identifier. */
		public string $id,
		/** The timestamp of when the Page Rule was last modified. */
		public \DateTimeImmutable $modifiedOn,
		/**
		 * The priority of the rule, used to define which Page Rule is processed
		 * over another. A higher number indicates a higher priority. For example,
		 * if you have a catch-all Page Rule (rule A: `/images/*`) but want a more
		 * specific Page Rule to take precedence (rule B: `/images/special/*`),
		 * specify a higher priority for rule B so it overrides rule A.
		 */
		public int $priority,
		/** The status of the Page Rule. */
		public \FoundryCo\Cloudflare\Enums\PageRulesRulesStatus $status,
		/** The rule targets to evaluate on each request. */
		public array $targets,
	) {
	}
}
