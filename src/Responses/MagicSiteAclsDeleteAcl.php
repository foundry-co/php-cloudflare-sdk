<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Bidirectional ACL policy for network traffic within a site.
 */
readonly class MagicSiteAclsDeleteAcl
{
	public function __construct(
		/** Description for the ACL. */
		public ?string $description = null,
		/** The desired forwarding action for this ACL policy. If set to "false", the policy will forward traffic to Cloudflare. If set to "true", the policy will forward traffic locally on the Magic Connector. If not included in request, will default to false. */
		public ?bool $forwardLocally = null,
		/** Identifier */
		public ?string $id = null,
		public ?MagicSiteAclsDeleteAclLan1 $lan1 = null,
		public ?MagicSiteAclsDeleteAclLan2 $lan2 = null,
		/** The name of the ACL. */
		public ?string $name = null,
		public ?array $protocols = null,
		/** The desired traffic direction for this ACL policy. If set to "false", the policy will allow bidirectional traffic. If set to "true", the policy will only allow traffic in one direction. If not included in request, will default to false. */
		public ?bool $unidirectional = null,
	) {
	}
}
