<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AIGatewayResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Get credit balance
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-gateway/billing/credit-balance', \FoundryCo\Cloudflare\Responses\AigBillingGetCreditBalance::class, []);
	}


	/**
	 * Get invoice history
	 */
	public function invoiceHistory(?\FoundryCo\Cloudflare\Enums\AIGatewayType $type = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-gateway/billing/invoice-history', \FoundryCo\Cloudflare\Responses\AigBillingGetInvoiceHistory::class, ['type' => $type ?? null]);
	}


	/**
	 * Get invoice preview
	 */
	public function invoicePreview(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-gateway/billing/invoice-preview', \FoundryCo\Cloudflare\Responses\AigBillingGetInvoicePreview::class, []);
	}


	/**
	 * Get spending limit
	 */
	public function spendingLimit(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-gateway/billing/spending-limit', \FoundryCo\Cloudflare\Responses\AigBillingGetSpendingLimit::class, []);
	}


	/**
	 * Set spending limit
	 */
	public function create(\FoundryCo\Cloudflare\Requests\AigBillingSetSpendingLimitRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai-gateway/billing/spending-limit', null, $request);
	}


	/**
	 * Delete spending limit
	 */
	public function delete(): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/ai-gateway/billing/spending-limit');
	}


	/**
	 * Create a top-up
	 */
	public function topup(\FoundryCo\Cloudflare\Requests\AigBillingCreateTopupRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai-gateway/billing/topup', \FoundryCo\Cloudflare\Responses\AigBillingCreateTopup::class, $request);
	}


	/**
	 * Get auto top-up configuration
	 */
	public function config(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-gateway/billing/topup/config', \FoundryCo\Cloudflare\Responses\AigBillingGetTopupConfig::class, []);
	}


	/**
	 * Set auto top-up configuration
	 */
	public function aigBillingSetTopupConfig(
		\FoundryCo\Cloudflare\Requests\AigBillingSetTopupConfigRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai-gateway/billing/topup/config', \FoundryCo\Cloudflare\Responses\AigBillingSetTopupConfig::class, $request);
	}


	/**
	 * Delete auto top-up configuration
	 */
	public function aigBillingDeleteTopupConfig(): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/ai-gateway/billing/topup/config');
	}


	/**
	 * Get account top-up limits
	 */
	public function limits(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-gateway/billing/topup/limits', \FoundryCo\Cloudflare\Responses\AigBillingGetTopupLimits::class, []);
	}


	/**
	 * Check top-up status
	 */
	public function status(\FoundryCo\Cloudflare\Requests\AigBillingCheckTopupStatusRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai-gateway/billing/topup/status', \FoundryCo\Cloudflare\Responses\AigBillingCheckTopupStatus::class, $request);
	}


	/**
	 * Get usage history
	 */
	public function usageHistory(
		?\FoundryCo\Cloudflare\Enums\AIGatewayValueGroupingWindow $valueGroupingWindow = null,
		?float $startTime = null,
		?float $endTime = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-gateway/billing/usage-history', \FoundryCo\Cloudflare\Responses\AigBillingGetUsageHistory::class, ['valueGroupingWindow' => $valueGroupingWindow ?? null, 'startTime' => $startTime ?? null, 'endTime' => $endTime ?? null]);
	}
}
