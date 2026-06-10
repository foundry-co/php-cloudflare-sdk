<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
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
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/intel/sinkholes', \FoundryCo\Cloudflare\Responses\SinkholeConfigListSinkholes::class, []);
	}


	/**
	 * Create a new sinkhole for your account
	 */
	public function create(\FoundryCo\Cloudflare\Requests\SinkholeConfigCreateSinkholeRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/intel/sinkholes', \FoundryCo\Cloudflare\Responses\SinkholeConfigCreateSinkhole::class, $request);
	}


	/**
	 * Get a sinkhole
	 */
	public function get(string $sinkholeId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/intel/sinkholes/' . $sinkholeId, \FoundryCo\Cloudflare\Responses\SinkholeConfigGetSinkhole::class, []);
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
	public function ingresses(string $sinkholeId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/intel/sinkholes/' . $sinkholeId . '/ingresses', \FoundryCo\Cloudflare\Responses\SinkholeConfigListSinkholeIngresses::class, []);
	}


	/**
	 * Create an ingress rule
	 */
	public function sinkholeConfigCreateIngress(
		string $sinkholeId,
		\FoundryCo\Cloudflare\Requests\SinkholeConfigCreateIngressRequest $request,
	): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/intel/sinkholes/' . $sinkholeId . '/ingresses', \FoundryCo\Cloudflare\Responses\SinkholeConfigCreateIngress::class, $request);
	}


	/**
	 * Get an ingress rule
	 */
	public function sinkholeConfigGetIngress(string $sinkholeId, string $ingressId): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/intel/sinkholes/' . $sinkholeId . '/ingresses/' . $ingressId, \FoundryCo\Cloudflare\Responses\SinkholeConfigGetIngress::class, []);
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
