<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class WorkersForPlatformsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List dispatch namespaces
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workers/dispatch/namespaces', \FoundryCo\Cloudflare\Responses\NamespaceWorkerList::class, []);
	}


	/**
	 * Create dispatch namespace
	 */
	public function create(\FoundryCo\Cloudflare\Requests\NamespaceWorkerCreateRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/workers/dispatch/namespaces', \FoundryCo\Cloudflare\Responses\NamespaceWorkerCreate::class, $request);
	}


	/**
	 * Get dispatch namespace
	 */
	public function get(string $dispatchNamespace): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workers/dispatch/namespaces/' . $dispatchNamespace, \FoundryCo\Cloudflare\Responses\NamespaceWorkerGetNamespace::class, []);
	}


	/**
	 * Update dispatch namespace
	 */
	public function update(
		string $dispatchNamespace,
		\FoundryCo\Cloudflare\Requests\NamespaceWorkerPutNamespaceRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/workers/dispatch/namespaces/' . $dispatchNamespace, \FoundryCo\Cloudflare\Responses\NamespaceWorkerPutNamespace::class, $request);
	}


	/**
	 * Patch dispatch namespace
	 */
	public function namespaces(
		string $dispatchNamespace,
		\FoundryCo\Cloudflare\Requests\NamespaceWorkerPatchNamespaceRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/workers/dispatch/namespaces/' . $dispatchNamespace, \FoundryCo\Cloudflare\Responses\NamespaceWorkerPatchNamespace::class, $request);
	}


	/**
	 * Delete dispatch namespace
	 */
	public function delete(string $dispatchNamespace): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/workers/dispatch/namespaces/' . $dispatchNamespace);
	}


	/**
	 * List Scripts in Namespace
	 */
	public function scripts(string $dispatchNamespace, ?string $tags = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workers/dispatch/namespaces/' . $dispatchNamespace . '/scripts', \FoundryCo\Cloudflare\Responses\NamespaceWorkerListScripts::class, ['tags' => $tags ?? null]);
	}


	/**
	 * Delete Scripts in Namespace
	 */
	public function namespaceWorkerDeleteScripts(
		string $dispatchNamespace,
		?string $tags = null,
		?int $limit = null,
	): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/workers/dispatch/namespaces/' . $dispatchNamespace . '/scripts');
	}


	/**
	 * Worker Details
	 */
	public function namespaceWorkerScriptWorkerDetails(string $dispatchNamespace, string $scriptName): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workers/dispatch/namespaces/' . $dispatchNamespace . '/scripts/' . $scriptName, \FoundryCo\Cloudflare\Responses\NamespaceWorkerScriptWorkerDetails::class, []);
	}


	/**
	 * Upload Worker Module
	 */
	public function namespaceWorkerScriptUploadWorkerModule(
		string $dispatchNamespace,
		string $scriptName,
		?\FoundryCo\Cloudflare\Enums\WorkersForPlatformsBindingsInherit $bindingsInherit = null,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/workers/dispatch/namespaces/' . $dispatchNamespace . '/scripts/' . $scriptName, null, null);
	}


	/**
	 * Delete Worker
	 */
	public function namespaceWorkerScriptDeleteWorker(
		string $dispatchNamespace,
		string $scriptName,
		?bool $force = null,
	): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/workers/dispatch/namespaces/' . $dispatchNamespace . '/scripts/' . $scriptName);
	}


	/**
	 * Create Assets Upload Session
	 */
	public function assetsUploadSession(
		string $dispatchNamespace,
		string $scriptName,
		\FoundryCo\Cloudflare\Requests\NamespaceWorkerScriptUpdateCreateAssetsUploadSessionRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/workers/dispatch/namespaces/' . $dispatchNamespace . '/scripts/' . $scriptName . '/assets-upload-session', \FoundryCo\Cloudflare\Responses\NamespaceWorkerScriptUpdateCreateAssetsUploadSession::class, $request);
	}


	/**
	 * Get Script Bindings
	 */
	public function bindings(string $dispatchNamespace, string $scriptName): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workers/dispatch/namespaces/' . $dispatchNamespace . '/scripts/' . $scriptName . '/bindings', null, []);
	}


	/**
	 * Get Script Content
	 */
	public function content(string $dispatchNamespace, string $scriptName): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workers/dispatch/namespaces/' . $dispatchNamespace . '/scripts/' . $scriptName . '/content', null, []);
	}


	/**
	 * Put Script Content
	 */
	public function namespaceWorkerPutScriptContent(
		string $dispatchNamespace,
		string $scriptName,
		?string $cFWORKERBODYPART = null,
		?string $cFWORKERMAINMODULEPART = null,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/workers/dispatch/namespaces/' . $dispatchNamespace . '/scripts/' . $scriptName . '/content', \FoundryCo\Cloudflare\Responses\NamespaceWorkerPutScriptContent::class, null);
	}


	/**
	 * List Script Secrets
	 */
	public function secrets(string $dispatchNamespace, string $scriptName): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workers/dispatch/namespaces/' . $dispatchNamespace . '/scripts/' . $scriptName . '/secrets', null, []);
	}


	/**
	 * Add script secret
	 */
	public function namespaceWorkerPutScriptSecrets(string $dispatchNamespace, string $scriptName): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/workers/dispatch/namespaces/' . $dispatchNamespace . '/scripts/' . $scriptName . '/secrets', null, null);
	}


	/**
	 * Patch multiple script secrets
	 */
	public function secretsBulk(string $dispatchNamespace, string $scriptName): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/workers/dispatch/namespaces/' . $dispatchNamespace . '/scripts/' . $scriptName . '/secrets-bulk', null, null);
	}


	/**
	 * Get secret binding
	 */
	public function namespaceWorkerGetScriptSecrets(
		string $dispatchNamespace,
		string $scriptName,
		string $secretName,
		?bool $urlEncoded = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workers/dispatch/namespaces/' . $dispatchNamespace . '/scripts/' . $scriptName . '/secrets/' . $secretName, null, ['urlEncoded' => $urlEncoded ?? null]);
	}


	/**
	 * Delete script secret
	 */
	public function namespaceWorkerDeleteScriptSecret(
		string $dispatchNamespace,
		string $scriptName,
		string $secretName,
		?bool $urlEncoded = null,
	): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/workers/dispatch/namespaces/' . $dispatchNamespace . '/scripts/' . $scriptName . '/secrets/' . $secretName);
	}


	/**
	 * Get Script Settings
	 */
	public function settings(string $dispatchNamespace, string $scriptName): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workers/dispatch/namespaces/' . $dispatchNamespace . '/scripts/' . $scriptName . '/settings', \FoundryCo\Cloudflare\Responses\NamespaceWorkerGetScriptSettings::class, []);
	}


	/**
	 * Patch Script Settings
	 */
	public function namespaceWorkerPatchScriptSettings(string $dispatchNamespace, string $scriptName): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/workers/dispatch/namespaces/' . $dispatchNamespace . '/scripts/' . $scriptName . '/settings', \FoundryCo\Cloudflare\Responses\NamespaceWorkerPatchScriptSettings::class, null);
	}


	/**
	 * Get Script Tags
	 */
	public function tags(string $dispatchNamespace, string $scriptName): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workers/dispatch/namespaces/' . $dispatchNamespace . '/scripts/' . $scriptName . '/tags', null, []);
	}


	/**
	 * Put Script Tags
	 */
	public function namespaceWorkerPutScriptTags(string $dispatchNamespace, string $scriptName): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/workers/dispatch/namespaces/' . $dispatchNamespace . '/scripts/' . $scriptName . '/tags', null, null);
	}


	/**
	 * Put Script Tag
	 */
	public function namespaceWorkerPutScriptTag(string $dispatchNamespace, string $scriptName, string $tag): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/workers/dispatch/namespaces/' . $dispatchNamespace . '/scripts/' . $scriptName . '/tags/' . $tag, \FoundryCo\Cloudflare\Enums\NamespaceWorkerPutScriptTag::class, null);
	}


	/**
	 * Delete Script Tag
	 */
	public function namespaceWorkerDeleteScriptTag(string $dispatchNamespace, string $scriptName, string $tag): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/workers/dispatch/namespaces/' . $dispatchNamespace . '/scripts/' . $scriptName . '/tags/' . $tag);
	}
}
