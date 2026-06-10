<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AIGatewayDynamicRoutesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List all AI Gateway Dynamic Routes.
	 */
	public function get(string $gatewayId, ?int $page = null, ?int $perPage = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-gateway/gateways/' . $gatewayId . '/routes', null, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Create a new AI Gateway Dynamic Route.
	 */
	public function create(
		string $gatewayId,
		\FoundryCo\Cloudflare\Requests\AigConfigPostGatewayDynamicRouteRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai-gateway/gateways/' . $gatewayId . '/routes', \FoundryCo\Cloudflare\Responses\AigConfigPostGatewayDynamicRoute::class, $request);
	}


	/**
	 * Get an AI Gateway Dynamic Route.
	 */
	public function routes(string $gatewayId, string $id): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-gateway/gateways/' . $gatewayId . '/routes/' . $id, \FoundryCo\Cloudflare\Responses\AigConfigGetGatewayDynamicRoute::class, []);
	}


	/**
	 * Update an AI Gateway Dynamic Route.
	 */
	public function update(
		string $gatewayId,
		string $id,
		\FoundryCo\Cloudflare\Requests\AigConfigUpdateGatewayDynamicRouteRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/ai-gateway/gateways/' . $gatewayId . '/routes/' . $id, null, $request);
	}


	/**
	 * Delete an AI Gateway Dynamic Route.
	 */
	public function delete(string $gatewayId, string $id): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/ai-gateway/gateways/' . $gatewayId . '/routes/' . $id);
	}


	/**
	 * List all AI Gateway Dynamic Route Deployments.
	 */
	public function deployments(string $gatewayId, string $id): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-gateway/gateways/' . $gatewayId . '/routes/' . $id . '/deployments', null, []);
	}


	/**
	 * Create a new AI Gateway Dynamic Route Deployment.
	 */
	public function aigConfigPostGatewayDynamicRouteDeployment(
		string $gatewayId,
		string $id,
		\FoundryCo\Cloudflare\Requests\AigConfigPostGatewayDynamicRouteDeploymentRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai-gateway/gateways/' . $gatewayId . '/routes/' . $id . '/deployments', \FoundryCo\Cloudflare\Responses\AigConfigPostGatewayDynamicRouteDeployment::class, $request);
	}


	/**
	 * List all AI Gateway Dynamic Route Versions.
	 */
	public function versions(string $gatewayId, string $id): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-gateway/gateways/' . $gatewayId . '/routes/' . $id . '/versions', null, []);
	}


	/**
	 * Create a new AI Gateway Dynamic Route Version.
	 */
	public function aigConfigPostGatewayDynamicRouteVersion(
		string $gatewayId,
		string $id,
		\FoundryCo\Cloudflare\Requests\AigConfigPostGatewayDynamicRouteVersionRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai-gateway/gateways/' . $gatewayId . '/routes/' . $id . '/versions', \FoundryCo\Cloudflare\Responses\AigConfigPostGatewayDynamicRouteVersion::class, $request);
	}


	/**
	 * Get an AI Gateway Dynamic Route Version.
	 */
	public function aigConfigGetGatewayDynamicRouteVersion(string $gatewayId, string $id, string $versionId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-gateway/gateways/' . $gatewayId . '/routes/' . $id . '/versions/' . $versionId, \FoundryCo\Cloudflare\Responses\AigConfigGetGatewayDynamicRouteVersion::class, []);
	}
}
