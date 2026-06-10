<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class DLPSettingsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Fetch limits associated with DLP for account
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/limits', \FoundryCo\Cloudflare\Responses\DlpLimitsGet::class, []);
	}


	/**
	 * Validate a DLP regex pattern
	 */
	public function create(\FoundryCo\Cloudflare\Requests\DlpPatternValidateRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/dlp/patterns/validate', \FoundryCo\Cloudflare\Responses\DlpPatternValidate::class, $request);
	}


	/**
	 * Get payload log settings
	 */
	public function payloadLog(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/payload_log', \FoundryCo\Cloudflare\Responses\DlpPayloadLogGet::class, []);
	}


	/**
	 * Set payload log settings
	 */
	public function update(\FoundryCo\Cloudflare\Requests\DlpPayloadLogPutRequest $request): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/dlp/payload_log', \FoundryCo\Cloudflare\Responses\DlpPayloadLogPut::class, $request);
	}


	/**
	 * Get DLP account-level settings.
	 */
	public function settings(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/settings', \FoundryCo\Cloudflare\Responses\DlpSettingsGet::class, []);
	}


	/**
	 * Update DLP account-level settings (full replacement).
	 */
	public function dlpSettingsUpdate(\FoundryCo\Cloudflare\Requests\DlpSettingsUpdateRequest $request): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/dlp/settings', \FoundryCo\Cloudflare\Responses\DlpSettingsUpdate::class, $request);
	}


	/**
	 * Partially update DLP account-level settings.
	 */
	public function dlpSettingsEdit(\FoundryCo\Cloudflare\Requests\DlpSettingsEditRequest $request): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/dlp/settings', \FoundryCo\Cloudflare\Responses\DlpSettingsEdit::class, $request);
	}


	/**
	 * Delete (reset) DLP account-level settings to initial values.
	 */
	public function delete(): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/dlp/settings');
	}
}
