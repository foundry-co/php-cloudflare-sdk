<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class PagesDeploymentResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Get deployments
	 */
	public function get(
		string $projectName,
		?\FoundryCo\Cloudflare\Enums\PagesDeploymentEnv $env = null,
		?int $page = null,
		?int $perPage = null,
	): \FoundryCo\Cloudflare\Responses\PagesDeploymentDeployments
	{
		return $this->client->get('/accounts/' . $this->accountId . '/pages/projects/' . $projectName . '/deployments', \FoundryCo\Cloudflare\Responses\PagesDeploymentDeployments::class, ['env' => $env ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Create deployment
	 */
	public function create(string $projectName): \FoundryCo\Cloudflare\Responses\PagesDeploymentDeployment
	{
		return $this->client->post('/accounts/' . $this->accountId . '/pages/projects/' . $projectName . '/deployments', \FoundryCo\Cloudflare\Responses\PagesDeploymentDeployment::class, null);
	}


	/**
	 * Get deployment info
	 */
	public function deployments(
		string $deploymentId,
		string $projectName,
	): \FoundryCo\Cloudflare\Responses\PagesDeploymentInfo
	{
		return $this->client->get('/accounts/' . $this->accountId . '/pages/projects/' . $projectName . '/deployments/' . $deploymentId, \FoundryCo\Cloudflare\Responses\PagesDeploymentInfo::class, []);
	}


	/**
	 * Delete deployment
	 */
	public function delete(string $deploymentId, string $projectName, ?bool $force = null): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/pages/projects/' . $projectName . '/deployments/' . $deploymentId);
	}


	/**
	 * Get deployment logs
	 */
	public function logs(string $deploymentId, string $projectName): \FoundryCo\Cloudflare\Responses\PagesDeploymentLogs
	{
		return $this->client->get('/accounts/' . $this->accountId . '/pages/projects/' . $projectName . '/deployments/' . $deploymentId . '/history/logs', \FoundryCo\Cloudflare\Responses\PagesDeploymentLogs::class, []);
	}


	/**
	 * Retry deployment
	 */
	public function retry(
		string $deploymentId,
		string $projectName,
	): \FoundryCo\Cloudflare\Responses\PagesDeploymentDeployment
	{
		return $this->client->post('/accounts/' . $this->accountId . '/pages/projects/' . $projectName . '/deployments/' . $deploymentId . '/retry', \FoundryCo\Cloudflare\Responses\PagesDeploymentDeployment::class, null);
	}


	/**
	 * Rollback deployment
	 */
	public function rollback(
		string $deploymentId,
		string $projectName,
	): \FoundryCo\Cloudflare\Responses\PagesDeploymentDeployment
	{
		return $this->client->post('/accounts/' . $this->accountId . '/pages/projects/' . $projectName . '/deployments/' . $deploymentId . '/rollback', \FoundryCo\Cloudflare\Responses\PagesDeploymentDeployment::class, null);
	}
}
