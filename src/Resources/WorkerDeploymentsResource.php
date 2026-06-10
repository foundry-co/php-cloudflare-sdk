<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class WorkerDeploymentsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Deployments
	 */
	public function get(string $scriptName): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workers/scripts/' . $scriptName . '/deployments', \FoundryCo\Cloudflare\Responses\WorkerDeploymentsListDeployments::class, []);
	}


	/**
	 * Create Deployment
	 */
	public function create(
		string $scriptName,
		\FoundryCo\Cloudflare\Requests\WorkerDeploymentsCreateDeploymentRequest $request,
		?bool $force = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/workers/scripts/' . $scriptName . '/deployments', \FoundryCo\Cloudflare\Responses\WorkerDeploymentsCreateDeployment::class, $request);
	}


	/**
	 * Get Deployment
	 */
	public function deployments(string $scriptName, string $deploymentId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workers/scripts/' . $scriptName . '/deployments/' . $deploymentId, \FoundryCo\Cloudflare\Responses\WorkerDeploymentsGetDeployment::class, []);
	}


	/**
	 * Delete Deployment
	 */
	public function delete(string $scriptName, string $deploymentId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/workers/scripts/' . $scriptName . '/deployments/' . $deploymentId);
	}
}
