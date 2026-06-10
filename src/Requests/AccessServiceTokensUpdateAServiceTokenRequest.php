<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update a service token
 */
readonly class AccessServiceTokensUpdateAServiceTokenRequest
{
	public function __construct(
		/** A version number identifying the current `client_secret` associated with the service token. Incrementing it triggers a rotation; the previous secret will still be accepted until the time indicated by `previous_client_secret_expires_at`. */
		public ?float $clientSecretVersion = null,
		/** The duration for how long the service token will be valid. Must be in the format `300ms` or `2h45m`. Valid time units are: ns, us (or µs), ms, s, m, h. The default is 1 year in hours (8760h). */
		public ?string $duration = null,
		/** The name of the service token. */
		public ?string $name = null,
		/** The expiration of the previous `client_secret`. This can be modified at any point after a rotation. For example, you may extend it further into the future if you need more time to update services with the new secret; or move it into the past to immediately invalidate the previous token in case of compromise. */
		public ?\DateTimeImmutable $previousClientSecretExpiresAt = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'client_secret_version' => $this->clientSecretVersion,
		    'duration' => $this->duration,
		    'name' => $this->name,
		    'previous_client_secret_expires_at' => $this->previousClientSecretExpiresAt?->format(\DateTimeImmutable::ATOM),
		], fn ($v) => $v !== null);
	}
}
