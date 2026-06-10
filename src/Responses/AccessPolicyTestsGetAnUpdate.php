<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AccessPolicyTestsGetAnUpdate
{
	public function __construct(
		/** The UUID of the policy test. */
		public ?string $id = null,
		/** The percentage of (processed) users approved based on policy evaluation results. */
		public ?int $percentApproved = null,
		/** The percentage of (processed) users blocked based on policy evaluation results. */
		public ?int $percentBlocked = null,
		/** The percentage of (processed) users errored based on policy evaluation results. */
		public ?int $percentErrored = null,
		/** The percentage of users processed so far (of the entire user base). */
		public ?int $percentUsersProcessed = null,
		/** The status of the policy test. */
		public ?\FoundryCo\Cloudflare\Enums\AccessPolicyTestsGetAnUpdateStatus $status = null,
		/** The total number of users in the user base. */
		public ?int $totalUsers = null,
		/** The number of (processed) users approved based on policy evaluation results. */
		public ?int $usersApproved = null,
		/** The number of (processed) users blocked based on policy evaluation results. */
		public ?int $usersBlocked = null,
		/** The number of (processed) users errored based on policy evaluation results. */
		public ?int $usersErrored = null,
	) {
	}
}
