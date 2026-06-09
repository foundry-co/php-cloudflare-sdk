<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AIGatewayLogsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Gateway Logs
	 */
	public function get(
		string $gatewayId,
		?string $search = null,
		?int $page = null,
		?int $perPage = null,
		?\FoundryCo\Cloudflare\Enums\AIGatewayLogsOrderBy $orderBy = null,
		?\FoundryCo\Cloudflare\Enums\AIGatewayLogsOrderByDirection $orderByDirection = null,
		?array $filters = null,
		?bool $metaInfo = null,
		?\FoundryCo\Cloudflare\Enums\AIGatewayLogsDirection $direction = null,
		?\DateTimeImmutable $startDate = null,
		?\DateTimeImmutable $endDate = null,
		?float $minCost = null,
		?float $maxCost = null,
		?float $minTokensIn = null,
		?float $maxTokensIn = null,
		?float $minTokensOut = null,
		?float $maxTokensOut = null,
		?float $minTotalTokens = null,
		?float $maxTotalTokens = null,
		?float $minDuration = null,
		?float $maxDuration = null,
		mixed $feedback = null,
		?bool $success = null,
		?bool $cached = null,
		?string $model = null,
		?string $modelType = null,
		?string $provider = null,
		?string $requestContentType = null,
		?string $responseContentType = null,
	): \FoundryCo\Cloudflare\Responses\AIGatewayLogsLogs
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-gateway/gateways/' . $gatewayId . '/logs', \FoundryCo\Cloudflare\Responses\AIGatewayLogsLogs::class, ['search' => $search ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null, 'orderBy' => $orderBy ?? null, 'orderByDirection' => $orderByDirection ?? null, 'filters' => $filters ?? null, 'metaInfo' => $metaInfo ?? null, 'direction' => $direction ?? null, 'startDate' => $startDate ?? null, 'endDate' => $endDate ?? null, 'minCost' => $minCost ?? null, 'maxCost' => $maxCost ?? null, 'minTokensIn' => $minTokensIn ?? null, 'maxTokensIn' => $maxTokensIn ?? null, 'minTokensOut' => $minTokensOut ?? null, 'maxTokensOut' => $maxTokensOut ?? null, 'minTotalTokens' => $minTotalTokens ?? null, 'maxTotalTokens' => $maxTotalTokens ?? null, 'minDuration' => $minDuration ?? null, 'maxDuration' => $maxDuration ?? null, 'feedback' => $feedback ?? null, 'success' => $success ?? null, 'cached' => $cached ?? null, 'model' => $model ?? null, 'modelType' => $modelType ?? null, 'provider' => $provider ?? null, 'requestContentType' => $requestContentType ?? null, 'responseContentType' => $responseContentType ?? null]);
	}


	/**
	 * Delete Gateway Logs
	 */
	public function delete(
		string $gatewayId,
		?\FoundryCo\Cloudflare\Enums\AIGatewayLogsOrderBy $orderBy = null,
		?\FoundryCo\Cloudflare\Enums\AIGatewayLogsOrderByDirection $orderByDirection = null,
		?array $filters = null,
		?int $limit = null,
	): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/ai-gateway/gateways/' . $gatewayId . '/logs');
	}


	/**
	 * Get Gateway Log Detail
	 */
	public function logs(string $id, string $gatewayId): \FoundryCo\Cloudflare\Responses\AIGatewayLogsDetail
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-gateway/gateways/' . $gatewayId . '/logs/' . $id, \FoundryCo\Cloudflare\Responses\AIGatewayLogsDetail::class, []);
	}


	/**
	 * Patch Gateway Log
	 */
	public function update(
		string $id,
		string $gatewayId,
		\FoundryCo\Cloudflare\Requests\AigConfigPatchGatewayLogRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/ai-gateway/gateways/' . $gatewayId . '/logs/' . $id, null, $request);
	}


	/**
	 * Get Gateway Log Request
	 */
	public function request(string $id, string $gatewayId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-gateway/gateways/' . $gatewayId . '/logs/' . $id . '/request', null, []);
	}


	/**
	 * Get Gateway Log Response
	 */
	public function response(string $id, string $gatewayId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-gateway/gateways/' . $gatewayId . '/logs/' . $id . '/response', null, []);
	}
}
