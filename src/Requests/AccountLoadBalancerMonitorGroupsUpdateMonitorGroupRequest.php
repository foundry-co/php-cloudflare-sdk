<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update Monitor Group
 */
readonly class AccountLoadBalancerMonitorGroupsUpdateMonitorGroupRequest
{
	public function __construct(
		/** A short description of the monitor group */
		public string $description,
		public mixed $id,
		/** List of monitors in this group */
		public array $members,
		/** The timestamp of when the monitor group was created */
		public ?\DateTimeImmutable $createdOn = null,
		/** The timestamp of when the monitor group was last updated */
		public ?\DateTimeImmutable $modifiedOn = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'description' => $this->description,
		    'id' => $this->id,
		    'members' => $this->members,
		    'created_on' => $this->createdOn?->format(\DateTimeImmutable::ATOM),
		    'modified_on' => $this->modifiedOn?->format(\DateTimeImmutable::ATOM),
		], fn ($v) => $v !== null);
	}
}
