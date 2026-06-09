<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function list(): \FoundryCo\Cloudflare\Responses\DLPSettingsGet
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/limits', \FoundryCo\Cloudflare\Responses\DLPSettingsGet::class, []);
	}


	/**
	 * Validate a DLP regex pattern
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\DlpPatternValidateRequest $request,
	): \FoundryCo\Cloudflare\Responses\DLPSettingsValidate
	{
		return $this->client->post('/accounts/' . $this->accountId . '/dlp/patterns/validate', \FoundryCo\Cloudflare\Responses\DLPSettingsValidate::class, $request);
	}


	/**
	 * Get payload log settings
	 */
	public function payloadLog(): \FoundryCo\Cloudflare\Responses\DLPSettingsGet
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/payload_log', \FoundryCo\Cloudflare\Responses\DLPSettingsGet::class, []);
	}


	/**
	 * Set payload log settings
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\DlpPayloadLogPutRequest $request,
	): \FoundryCo\Cloudflare\Responses\DLPSettingsPut
	{
		return $this->client->put('/accounts/' . $this->accountId . '/dlp/payload_log', \FoundryCo\Cloudflare\Responses\DLPSettingsPut::class, $request);
	}


	/**
	 * Get DLP account-level settings.
	 */
	public function settings(): \FoundryCo\Cloudflare\Responses\DLPSettingsGet
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/settings', \FoundryCo\Cloudflare\Responses\DLPSettingsGet::class, []);
	}


	/**
	 * Update DLP account-level settings (full replacement).
	 */
	public function dlpSettingsUpdate(
		\FoundryCo\Cloudflare\Requests\DlpSettingsUpdateRequest $request,
	): \FoundryCo\Cloudflare\Responses\DLPSettingsUpdate
	{
		return $this->client->put('/accounts/' . $this->accountId . '/dlp/settings', \FoundryCo\Cloudflare\Responses\DLPSettingsUpdate::class, $request);
	}


	/**
	 * Partially update DLP account-level settings.
	 */
	public function dlpSettingsEdit(
		\FoundryCo\Cloudflare\Requests\DlpSettingsEditRequest $request,
	): \FoundryCo\Cloudflare\Responses\DLPSettingsEdit
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/dlp/settings', \FoundryCo\Cloudflare\Responses\DLPSettingsEdit::class, $request);
	}


	/**
	 * Delete (reset) DLP account-level settings to initial values.
	 */
	public function delete(): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/dlp/settings');
	}
}
