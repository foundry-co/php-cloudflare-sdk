<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class SinkholeConfigResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * List sinkholes owned by this account
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\SinkholeConfigSinkholes
	{
		return $this->client->get('/accounts/' . $this->accountId . '/intel/sinkholes', \FoundryCo\Cloudflare\Responses\SinkholeConfigSinkholes::class, []);
	}


	/**
	 * Create a new sinkhole for your account
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\SinkholeConfigCreateSinkholeRequest $request,
	): \FoundryCo\Cloudflare\Responses\SinkholeConfigSinkhole
	{
		return $this->client->post('/accounts/' . $this->accountId . '/intel/sinkholes', \FoundryCo\Cloudflare\Responses\SinkholeConfigSinkhole::class, $request);
	}


	/**
	 * Get a sinkhole
	 */
	public function get(string $sinkholeId): \FoundryCo\Cloudflare\Responses\SinkholeConfigSinkhole
	{
		return $this->client->get('/accounts/' . $this->accountId . '/intel/sinkholes/' . $sinkholeId, \FoundryCo\Cloudflare\Responses\SinkholeConfigSinkhole::class, []);
	}


	/**
	 * Update a sinkhole
	 */
	public function update(
		string $sinkholeId,
		\FoundryCo\Cloudflare\Requests\SinkholeConfigUpdateSinkholeRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/intel/sinkholes/' . $sinkholeId, null, $request);
	}


	/**
	 * Delete a sinkhole
	 */
	public function delete(string $sinkholeId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/intel/sinkholes/' . $sinkholeId);
	}


	/**
	 * List ingresses for a sinkhole
	 */
	public function ingresses(string $sinkholeId): \FoundryCo\Cloudflare\Responses\SinkholeConfigIngresses
	{
		return $this->client->get('/accounts/' . $this->accountId . '/intel/sinkholes/' . $sinkholeId . '/ingresses', \FoundryCo\Cloudflare\Responses\SinkholeConfigIngresses::class, []);
	}


	/**
	 * Create an ingress rule
	 */
	public function sinkholeConfigCreateIngress(
		string $sinkholeId,
		\FoundryCo\Cloudflare\Requests\SinkholeConfigCreateIngressRequest $request,
	): \FoundryCo\Cloudflare\Responses\SinkholeConfigIngress
	{
		return $this->client->post('/zones/' . $this->zoneId . '/intel/sinkholes/' . $sinkholeId . '/ingresses', \FoundryCo\Cloudflare\Responses\SinkholeConfigIngress::class, $request);
	}


	/**
	 * Get an ingress rule
	 */
	public function sinkholeConfigGetIngress(
		string $sinkholeId,
		string $ingressId,
	): \FoundryCo\Cloudflare\Responses\SinkholeConfigIngress
	{
		return $this->client->get('/zones/' . $this->zoneId . '/intel/sinkholes/' . $sinkholeId . '/ingresses/' . $ingressId, \FoundryCo\Cloudflare\Responses\SinkholeConfigIngress::class, []);
	}


	/**
	 * Update an ingress rule
	 */
	public function sinkholeConfigUpdateIngress(
		string $sinkholeId,
		string $ingressId,
		\FoundryCo\Cloudflare\Requests\SinkholeConfigUpdateIngressRequest $request,
	): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/intel/sinkholes/' . $sinkholeId . '/ingresses/' . $ingressId, null, $request);
	}


	/**
	 * Delete an ingress rule
	 */
	public function sinkholeConfigDeleteIngress(string $sinkholeId, string $ingressId): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/intel/sinkholes/' . $sinkholeId . '/ingresses/' . $ingressId);
	}
}
