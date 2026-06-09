<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function list(): \FoundryCo\Cloudflare\Responses\DLPEmailMapping
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/email/account_mapping', \FoundryCo\Cloudflare\Responses\DLPEmailMapping::class, []);
	}


	/**
	 * Create mapping
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\DlpEmailScannerCreateAccountMappingRequest $request,
	): \FoundryCo\Cloudflare\Responses\DLPEmailMapping
	{
		return $this->client->post('/accounts/' . $this->accountId . '/dlp/email/account_mapping', \FoundryCo\Cloudflare\Responses\DLPEmailMapping::class, $request);
	}


	/**
	 * List all email scanner rules
	 */
	public function rules(): \FoundryCo\Cloudflare\Responses\DLPEmailRules
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/email/rules', \FoundryCo\Cloudflare\Responses\DLPEmailRules::class, []);
	}


	/**
	 * Create email scanner rule
	 */
	public function dlpEmailScannerCreateRule(
		\FoundryCo\Cloudflare\Requests\DlpEmailScannerCreateRuleRequest $request,
	): \FoundryCo\Cloudflare\Responses\DLPEmailRule
	{
		return $this->client->post('/accounts/' . $this->accountId . '/dlp/email/rules', \FoundryCo\Cloudflare\Responses\DLPEmailRule::class, $request);
	}


	/**
	 * Update email scanner rule priorities
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\DlpEmailScannerUpdateRulePrioritiesRequest $request,
	): \FoundryCo\Cloudflare\Responses\DLPEmailPriorities
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/dlp/email/rules', \FoundryCo\Cloudflare\Responses\DLPEmailPriorities::class, $request);
	}


	/**
	 * Get an email scanner rule
	 */
	public function get(string $ruleId): \FoundryCo\Cloudflare\Responses\DLPEmailRule
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/email/rules/' . $ruleId, \FoundryCo\Cloudflare\Responses\DLPEmailRule::class, []);
	}


	/**
	 * Update email scanner rule
	 */
	public function dlpEmailScannerUpdateRule(
		string $ruleId,
		\FoundryCo\Cloudflare\Requests\DlpEmailScannerUpdateRuleRequest $request,
	): \FoundryCo\Cloudflare\Responses\DLPEmailRule
	{
		return $this->client->put('/accounts/' . $this->accountId . '/dlp/email/rules/' . $ruleId, \FoundryCo\Cloudflare\Responses\DLPEmailRule::class, $request);
	}


	/**
	 * Delete email scanner rule
	 */
	public function delete(string $ruleId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/dlp/email/rules/' . $ruleId);
	}
}
