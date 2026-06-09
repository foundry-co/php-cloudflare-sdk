<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * List of steps acting on request/response
 */
readonly class AccountRequestTracerTraceTraceItem
{
	public function __construct(
		/** If step type is rule, then action performed by this rule */
		public ?string $action = null,
		/** If step type is rule, then action parameters of this rule as JSON */
		public ?array $actionParameters = null,
		/** If step type is rule or ruleset, the description of this entity */
		public ?string $description = null,
		/** If step type is rule, then expression used to match for this rule */
		public ?string $expression = null,
		/** If step type is ruleset, then kind of this ruleset */
		public ?string $kind = null,
		/** Whether tracing step affected tracing request/response */
		public ?bool $matched = null,
		/** If step type is ruleset, then name of this ruleset */
		public ?string $name = null,
		/** Tracing step identifying name */
		public ?string $stepName = null,
		public ?array $trace = null,
		/** Tracing step type */
		public ?string $type = null,
	) {
	}
}
