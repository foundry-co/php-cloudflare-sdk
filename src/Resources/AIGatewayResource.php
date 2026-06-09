<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function list(): \FoundryCo\Cloudflare\Responses\AIGatewayBalance
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-gateway/billing/credit-balance', \FoundryCo\Cloudflare\Responses\AIGatewayBalance::class, []);
	}


	/**
	 * Get invoice history
	 */
	public function invoiceHistory(
		?\FoundryCo\Cloudflare\Enums\AIGatewayType $type = null,
	): \FoundryCo\Cloudflare\Responses\AIGatewayHistory
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-gateway/billing/invoice-history', \FoundryCo\Cloudflare\Responses\AIGatewayHistory::class, ['type' => $type ?? null]);
	}


	/**
	 * Get invoice preview
	 */
	public function invoicePreview(): \FoundryCo\Cloudflare\Responses\AIGatewayPreview
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-gateway/billing/invoice-preview', \FoundryCo\Cloudflare\Responses\AIGatewayPreview::class, []);
	}


	/**
	 * Get spending limit
	 */
	public function spendingLimit(): \FoundryCo\Cloudflare\Responses\AIGatewayLimit
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-gateway/billing/spending-limit', \FoundryCo\Cloudflare\Responses\AIGatewayLimit::class, []);
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
	public function topup(
		\FoundryCo\Cloudflare\Requests\AigBillingCreateTopupRequest $request,
	): \FoundryCo\Cloudflare\Responses\AIGatewayTopup
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai-gateway/billing/topup', \FoundryCo\Cloudflare\Responses\AIGatewayTopup::class, $request);
	}


	/**
	 * Get auto top-up configuration
	 */
	public function config(): \FoundryCo\Cloudflare\Responses\AIGatewayConfig
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-gateway/billing/topup/config', \FoundryCo\Cloudflare\Responses\AIGatewayConfig::class, []);
	}


	/**
	 * Set auto top-up configuration
	 */
	public function aigBillingSetTopupConfig(
		\FoundryCo\Cloudflare\Requests\AigBillingSetTopupConfigRequest $request,
	): \FoundryCo\Cloudflare\Responses\AIGatewayConfig
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai-gateway/billing/topup/config', \FoundryCo\Cloudflare\Responses\AIGatewayConfig::class, $request);
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
	public function limits(): \FoundryCo\Cloudflare\Responses\AIGatewayLimits
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-gateway/billing/topup/limits', \FoundryCo\Cloudflare\Responses\AIGatewayLimits::class, []);
	}


	/**
	 * Check top-up status
	 */
	public function status(
		\FoundryCo\Cloudflare\Requests\AigBillingCheckTopupStatusRequest $request,
	): \FoundryCo\Cloudflare\Responses\AIGatewayStatus
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai-gateway/billing/topup/status', \FoundryCo\Cloudflare\Responses\AIGatewayStatus::class, $request);
	}


	/**
	 * Get usage history
	 */
	public function usageHistory(
		?\FoundryCo\Cloudflare\Enums\AIGatewayValueGroupingWindow $valueGroupingWindow = null,
		?float $startTime = null,
		?float $endTime = null,
	): \FoundryCo\Cloudflare\Responses\AIGatewayHistory
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-gateway/billing/usage-history', \FoundryCo\Cloudflare\Responses\AIGatewayHistory::class, ['valueGroupingWindow' => $valueGroupingWindow ?? null, 'startTime' => $startTime ?? null, 'endTime' => $endTime ?? null]);
	}
}
