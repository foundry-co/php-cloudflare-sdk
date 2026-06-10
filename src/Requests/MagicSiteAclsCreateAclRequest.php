<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a new Site ACL
 */
readonly class MagicSiteAclsCreateAclRequest
{
	public function __construct(
		public \FoundryCo\Cloudflare\Responses\MagicSiteAclsCreateAclRequestLan1 $lan1,
		public \FoundryCo\Cloudflare\Responses\MagicSiteAclsCreateAclRequestLan2 $lan2,
		/** The name of the ACL. */
		public string $name,
		/** Description for the ACL. */
		public ?string $description = null,
		/** The desired forwarding action for this ACL policy. If set to "false", the policy will forward traffic to Cloudflare. If set to "true", the policy will forward traffic locally on the Magic Connector. If not included in request, will default to false. */
		public ?bool $forwardLocally = null,
		public ?array $protocols = null,
		/** The desired traffic direction for this ACL policy. If set to "false", the policy will allow bidirectional traffic. If set to "true", the policy will only allow traffic in one direction. If not included in request, will default to false. */
		public ?bool $unidirectional = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'lan_1' => $this->lan1->toArray(),
		    'lan_2' => $this->lan2->toArray(),
		    'name' => $this->name,
		    'description' => $this->description,
		    'forward_locally' => $this->forwardLocally,
		    'protocols' => $this->protocols?->value,
		    'unidirectional' => $this->unidirectional,
		], fn ($v) => $v !== null);
	}
}
