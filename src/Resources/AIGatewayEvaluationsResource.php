<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AIGatewayEvaluationsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Evaluators
	 */
	public function list(
		?int $page = null,
		?int $perPage = null,
		?string $orderBy = null,
		?\FoundryCo\Cloudflare\Enums\AIGatewayEvaluationsOrderByDirection $orderByDirection = null,
	): \FoundryCo\Cloudflare\Responses\AIGatewayEvaluationsEvaluators
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-gateway/evaluation-types', \FoundryCo\Cloudflare\Responses\AIGatewayEvaluationsEvaluators::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'orderBy' => $orderBy ?? null, 'orderByDirection' => $orderByDirection ?? null]);
	}


	/**
	 * List Evaluations
	 */
	public function get(
		string $gatewayId,
		?int $page = null,
		?int $perPage = null,
		?string $name = null,
		?bool $processed = null,
		?string $search = null,
	): \FoundryCo\Cloudflare\Responses\AIGatewayEvaluationsEvaluations
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-gateway/gateways/' . $gatewayId . '/evaluations', \FoundryCo\Cloudflare\Responses\AIGatewayEvaluationsEvaluations::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'name' => $name ?? null, 'processed' => $processed ?? null, 'search' => $search ?? null]);
	}


	/**
	 * Create a new Evaluation
	 */
	public function create(
		string $gatewayId,
		\FoundryCo\Cloudflare\Requests\AigConfigCreateEvaluationsRequest $request,
	): \FoundryCo\Cloudflare\Responses\AIGatewayEvaluationsEvaluations
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai-gateway/gateways/' . $gatewayId . '/evaluations', \FoundryCo\Cloudflare\Responses\AIGatewayEvaluationsEvaluations::class, $request);
	}


	/**
	 * Fetch a Evaluation
	 */
	public function evaluations(
		string $gatewayId,
		string $id,
	): \FoundryCo\Cloudflare\Responses\AIGatewayEvaluationsEvaluations
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-gateway/gateways/' . $gatewayId . '/evaluations/' . $id, \FoundryCo\Cloudflare\Responses\AIGatewayEvaluationsEvaluations::class, []);
	}


	/**
	 * Delete a Evaluation
	 */
	public function delete(string $gatewayId, string $id): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/ai-gateway/gateways/' . $gatewayId . '/evaluations/' . $id);
	}
}
