<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class ZeroTrustSSHSettingsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Get Zero Trust SSH settings
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\ZeroTrustSSHSettingsSettings
	{
		return $this->client->get('/accounts/' . $this->accountId . '/gateway/audit_ssh_settings', \FoundryCo\Cloudflare\Responses\ZeroTrustSSHSettingsSettings::class, []);
	}


	/**
	 * Update Zero Trust SSH settings
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\ZeroTrustUpdateAuditSshSettingsRequest $request,
	): \FoundryCo\Cloudflare\Responses\ZeroTrustSSHSettingsSettings
	{
		return $this->client->put('/accounts/' . $this->accountId . '/gateway/audit_ssh_settings', \FoundryCo\Cloudflare\Responses\ZeroTrustSSHSettingsSettings::class, $request);
	}


	/**
	 * Rotate Zero Trust SSH account seed
	 */
	public function create(): \FoundryCo\Cloudflare\Responses\ZeroTrustSSHSettingsSeed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/gateway/audit_ssh_settings/rotate_seed', \FoundryCo\Cloudflare\Responses\ZeroTrustSSHSettingsSeed::class, null);
	}
}
