<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class MagicIPsecTunnelsTunnelsIpsecTunnelsItemBgpStatus
{
	public function __construct(
		public \FoundryCo\Cloudflare\Enums\MagicIPsecTunnelsTunnelsIpsecTunnelsItemBgpStatusState $state,
		public bool $tcpEstablished,
		public \DateTimeImmutable $updatedAt,
		public ?string $bgpState = null,
		public ?string $cfSpeakerIp = null,
		public ?int $cfSpeakerPort = null,
		public ?string $customerSpeakerIp = null,
		public ?int $customerSpeakerPort = null,
	) {
	}
}
