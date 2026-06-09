<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class WorkerScriptResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Upload Assets
	 */
	public function create(
		?\FoundryCo\Cloudflare\Enums\WorkerScriptBase64 $base64 = null,
	): \FoundryCo\Cloudflare\Responses\WorkerScriptUpload
	{
		return $this->client->post('/accounts/' . $this->accountId . '/workers/assets/upload', \FoundryCo\Cloudflare\Responses\WorkerScriptUpload::class, null);
	}


	/**
	 * List Workers
	 */
	public function list(?string $tags = null): \FoundryCo\Cloudflare\Responses\WorkerScriptWorkers
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workers/scripts', \FoundryCo\Cloudflare\Responses\WorkerScriptWorkers::class, ['tags' => $tags ?? null]);
	}


	/**
	 * Search Workers
	 */
	public function scriptsSearch(
		?string $name = null,
		?string $id = null,
		?\FoundryCo\Cloudflare\Enums\WorkerScriptOrderBy $orderBy = null,
		?int $page = null,
		?int $perPage = null,
	): \FoundryCo\Cloudflare\Responses\WorkerScriptWorkers
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workers/scripts-search', \FoundryCo\Cloudflare\Responses\WorkerScriptWorkers::class, ['name' => $name ?? null, 'id' => $id ?? null, 'orderBy' => $orderBy ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Download Worker
	 */
	public function get(string $scriptName): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workers/scripts/' . $scriptName, null, []);
	}


	/**
	 * Upload Worker Module
	 */
	public function update(
		string $scriptName,
		?\FoundryCo\Cloudflare\Enums\WorkerScriptBindingsInherit $bindingsInherit = null,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/workers/scripts/' . $scriptName, null, null);
	}


	/**
	 * Delete Worker
	 */
	public function delete(string $scriptName, ?bool $force = null): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/workers/scripts/' . $scriptName);
	}


	/**
	 * Create Assets Upload Session
	 */
	public function assetsUploadSession(
		string $scriptName,
		\FoundryCo\Cloudflare\Requests\WorkerScriptUpdateCreateAssetsUploadSessionRequest $request,
	): \FoundryCo\Cloudflare\Responses\WorkerScriptSession
	{
		return $this->client->post('/accounts/' . $this->accountId . '/workers/scripts/' . $scriptName . '/assets-upload-session', \FoundryCo\Cloudflare\Responses\WorkerScriptSession::class, $request);
	}


	/**
	 * Put script content
	 */
	public function content(
		string $scriptName,
		?string $cFWORKERBODYPART = null,
		?string $cFWORKERMAINMODULEPART = null,
	): \FoundryCo\Cloudflare\Responses\WorkerScriptContent
	{
		return $this->client->put('/accounts/' . $this->accountId . '/workers/scripts/' . $scriptName . '/content', \FoundryCo\Cloudflare\Responses\WorkerScriptContent::class, null);
	}


	/**
	 * Get script content
	 */
	public function v2(string $scriptName): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workers/scripts/' . $scriptName . '/content/v2', null, []);
	}


	/**
	 * Get Script Settings
	 */
	public function scriptSettings(string $scriptName): \FoundryCo\Cloudflare\Responses\WorkerScriptSettings
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workers/scripts/' . $scriptName . '/script-settings', \FoundryCo\Cloudflare\Responses\WorkerScriptSettings::class, []);
	}


	/**
	 * Patch Script Settings
	 */
	public function workerScriptSettingsPatchSettings(
		string $scriptName,
		\FoundryCo\Cloudflare\Requests\WorkerScriptSettingsPatchSettingsRequest $request,
	): \FoundryCo\Cloudflare\Responses\WorkerScriptSettings
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/workers/scripts/' . $scriptName . '/script-settings', \FoundryCo\Cloudflare\Responses\WorkerScriptSettings::class, $request);
	}


	/**
	 * List script secrets
	 */
	public function secrets(string $scriptName): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workers/scripts/' . $scriptName . '/secrets', null, []);
	}


	/**
	 * Add script secret
	 */
	public function workerPutScriptSecret(string $scriptName): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/workers/scripts/' . $scriptName . '/secrets', null, null);
	}


	/**
	 * Patch multiple script secrets
	 */
	public function secretsBulk(string $scriptName): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/workers/scripts/' . $scriptName . '/secrets-bulk', null, null);
	}


	/**
	 * Get secret binding
	 */
	public function workerGetScriptSecret(string $scriptName, string $secretName, ?bool $urlEncoded = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workers/scripts/' . $scriptName . '/secrets/' . $secretName, null, ['urlEncoded' => $urlEncoded ?? null]);
	}


	/**
	 * Delete script secret
	 */
	public function workerDeleteScriptSecret(string $scriptName, string $secretName, ?bool $urlEncoded = null): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/workers/scripts/' . $scriptName . '/secrets/' . $secretName);
	}


	/**
	 * Get Settings
	 */
	public function settings(string $scriptName): \FoundryCo\Cloudflare\Responses\WorkerScriptSettings
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workers/scripts/' . $scriptName . '/settings', \FoundryCo\Cloudflare\Responses\WorkerScriptSettings::class, []);
	}


	/**
	 * Patch Settings
	 */
	public function workerScriptPatchSettings(string $scriptName): \FoundryCo\Cloudflare\Responses\WorkerScriptSettings
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/workers/scripts/' . $scriptName . '/settings', \FoundryCo\Cloudflare\Responses\WorkerScriptSettings::class, null);
	}


	/**
	 * Get Worker subdomain
	 */
	public function subdomain(string $scriptName): \FoundryCo\Cloudflare\Responses\WorkerScriptSubdomain
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workers/scripts/' . $scriptName . '/subdomain', \FoundryCo\Cloudflare\Responses\WorkerScriptSubdomain::class, []);
	}


	/**
	 * Post Worker subdomain
	 */
	public function workerScriptPostSubdomain(
		string $scriptName,
		\FoundryCo\Cloudflare\Requests\WorkerScriptPostSubdomainRequest $request,
	): \FoundryCo\Cloudflare\Responses\WorkerScriptSubdomain
	{
		return $this->client->post('/accounts/' . $this->accountId . '/workers/scripts/' . $scriptName . '/subdomain', \FoundryCo\Cloudflare\Responses\WorkerScriptSubdomain::class, $request);
	}


	/**
	 * Delete Worker subdomain
	 */
	public function workerScriptDeleteSubdomain(string $scriptName): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/workers/scripts/' . $scriptName . '/subdomain');
	}


	/**
	 * Fetch Usage Model
	 */
	public function usageModel(string $scriptName): \FoundryCo\Cloudflare\Responses\WorkerScriptModel
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workers/scripts/' . $scriptName . '/usage-model', \FoundryCo\Cloudflare\Responses\WorkerScriptModel::class, []);
	}


	/**
	 * Update Usage Model
	 */
	public function workerScriptUpdateUsageModel(
		string $scriptName,
		\FoundryCo\Cloudflare\Requests\WorkerScriptUpdateUsageModelRequest $request,
	): \FoundryCo\Cloudflare\Responses\WorkerScriptModel
	{
		return $this->client->put('/accounts/' . $this->accountId . '/workers/scripts/' . $scriptName . '/usage-model', \FoundryCo\Cloudflare\Responses\WorkerScriptModel::class, $request);
	}
}
