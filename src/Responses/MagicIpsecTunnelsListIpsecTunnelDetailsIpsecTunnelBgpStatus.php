<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class MagicIpsecTunnelsListIpsecTunnelDetailsIpsecTunnelBgpStatus
{
	public function __construct(
		public ?\FoundryCo\Cloudflare\Enums\MagicIpsecTunnelsListIpsecTunnelDetailsIpsecTunnelBgpStatusState $state = null,
		public ?bool $tcpEstablished = null,
		public ?\DateTimeImmutable $updatedAt = null,
		public ?string $bgpState = null,
		public ?string $cfSpeakerIp = null,
		public ?int $cfSpeakerPort = null,
		public ?string $customerSpeakerIp = null,
		public ?int $customerSpeakerPort = null,
	) {
	}
}
