<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class DLPEmailResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Get mapping
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/email/account_mapping', \FoundryCo\Cloudflare\Responses\DlpEmailScannerGetAccountMapping::class, []);
	}


	/**
	 * Create mapping
	 */
	public function create(\FoundryCo\Cloudflare\Requests\DlpEmailScannerCreateAccountMappingRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/dlp/email/account_mapping', \FoundryCo\Cloudflare\Responses\DlpEmailScannerCreateAccountMapping::class, $request);
	}


	/**
	 * List all email scanner rules
	 */
	public function rules(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/email/rules', \FoundryCo\Cloudflare\Responses\DlpEmailScannerListAllRules::class, []);
	}


	/**
	 * Create email scanner rule
	 */
	public function dlpEmailScannerCreateRule(
		\FoundryCo\Cloudflare\Requests\DlpEmailScannerCreateRuleRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/dlp/email/rules', \FoundryCo\Cloudflare\Responses\DlpEmailScannerCreateRule::class, $request);
	}


	/**
	 * Update email scanner rule priorities
	 */
	public function update(\FoundryCo\Cloudflare\Requests\DlpEmailScannerUpdateRulePrioritiesRequest $request): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/dlp/email/rules', \FoundryCo\Cloudflare\Responses\DlpEmailScannerUpdateRulePriorities::class, $request);
	}


	/**
	 * Get an email scanner rule
	 */
	public function get(string $ruleId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/email/rules/' . $ruleId, \FoundryCo\Cloudflare\Responses\DlpEmailScannerGetRule::class, []);
	}


	/**
	 * Update email scanner rule
	 */
	public function dlpEmailScannerUpdateRule(
		string $ruleId,
		\FoundryCo\Cloudflare\Requests\DlpEmailScannerUpdateRuleRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/dlp/email/rules/' . $ruleId, \FoundryCo\Cloudflare\Responses\DlpEmailScannerUpdateRule::class, $request);
	}


	/**
	 * Delete email scanner rule
	 */
	public function delete(string $ruleId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/dlp/email/rules/' . $ruleId);
	}
}
