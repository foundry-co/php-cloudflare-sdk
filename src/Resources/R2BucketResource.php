<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class R2BucketResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Event Notification Rules
	 */
	public function get(
		string $bucketName,
		?\FoundryCo\Cloudflare\Enums\R2BucketCfR2Jurisdiction $cfR2Jurisdiction = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/event_notifications/r2/' . $bucketName . '/configuration', null, ['cfR2Jurisdiction' => $cfR2Jurisdiction ?? null]);
	}


	/**
	 * Get Event Notification Rule
	 */
	public function queues(
		string $queueId,
		string $bucketName,
		?\FoundryCo\Cloudflare\Enums\R2BucketCfR2Jurisdiction $cfR2Jurisdiction = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/event_notifications/r2/' . $bucketName . '/configuration/queues/' . $queueId, null, ['cfR2Jurisdiction' => $cfR2Jurisdiction ?? null]);
	}


	/**
	 * Create Event Notification Rule
	 */
	public function update(
		string $queueId,
		string $bucketName,
		\FoundryCo\Cloudflare\Requests\R2PutEventNotificationConfigRequest $request,
		?\FoundryCo\Cloudflare\Enums\R2BucketCfR2Jurisdiction $cfR2Jurisdiction = null,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/event_notifications/r2/' . $bucketName . '/configuration/queues/' . $queueId, null, $request);
	}


	/**
	 * Delete Event Notification Rules
	 */
	public function delete(
		string $queueId,
		string $bucketName,
		\FoundryCo\Cloudflare\Requests\R2EventNotificationDeleteConfigRequest $request,
		?\FoundryCo\Cloudflare\Enums\R2BucketCfR2Jurisdiction $cfR2Jurisdiction = null,
	): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/event_notifications/r2/' . $bucketName . '/configuration/queues/' . $queueId);
	}


	/**
	 * List Buckets
	 */
	public function list(
		?string $nameContains = null,
		?string $startAfter = null,
		?float $perPage = null,
		?\FoundryCo\Cloudflare\Enums\R2BucketOrder $order = null,
		?\FoundryCo\Cloudflare\Enums\R2BucketDirection $direction = null,
		?string $cursor = null,
		?\FoundryCo\Cloudflare\Enums\R2BucketCfR2Jurisdiction $cfR2Jurisdiction = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/r2/buckets', \FoundryCo\Cloudflare\Responses\R2ListBuckets::class, ['nameContains' => $nameContains ?? null, 'startAfter' => $startAfter ?? null, 'perPage' => $perPage ?? null, 'order' => $order ?? null, 'direction' => $direction ?? null, 'cursor' => $cursor ?? null, 'cfR2Jurisdiction' => $cfR2Jurisdiction ?? null]);
	}


	/**
	 * Create Bucket
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\R2CreateBucketRequest $request,
		?\FoundryCo\Cloudflare\Enums\R2BucketCfR2Jurisdiction $cfR2Jurisdiction = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/r2/buckets', null, $request);
	}


	/**
	 * Get Bucket
	 */
	public function buckets(
		string $bucketName,
		?\FoundryCo\Cloudflare\Enums\R2BucketCfR2Jurisdiction $cfR2Jurisdiction = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/r2/buckets/' . $bucketName, null, ['cfR2Jurisdiction' => $cfR2Jurisdiction ?? null]);
	}


	/**
	 * Patch Bucket
	 */
	public function r2PatchBucket(
		string $bucketName,
		?\FoundryCo\Cloudflare\Enums\R2BucketCfR2Jurisdiction $cfR2Jurisdiction = null,
		mixed $cfR2StorageClass = null,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/r2/buckets/' . $bucketName, null, null);
	}


	/**
	 * Delete Bucket
	 */
	public function r2DeleteBucket(
		string $bucketName,
		?\FoundryCo\Cloudflare\Enums\R2BucketCfR2Jurisdiction $cfR2Jurisdiction = null,
	): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/r2/buckets/' . $bucketName);
	}


	/**
	 * Get Bucket CORS Policy
	 */
	public function cors(
		string $bucketName,
		?\FoundryCo\Cloudflare\Enums\R2BucketCfR2Jurisdiction $cfR2Jurisdiction = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/r2/buckets/' . $bucketName . '/cors', null, ['cfR2Jurisdiction' => $cfR2Jurisdiction ?? null]);
	}


	/**
	 * Put Bucket CORS Policy
	 */
	public function r2PutBucketCorsPolicy(
		string $bucketName,
		\FoundryCo\Cloudflare\Requests\R2PutBucketCorsPolicyRequest $request,
		?\FoundryCo\Cloudflare\Enums\R2BucketCfR2Jurisdiction $cfR2Jurisdiction = null,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/r2/buckets/' . $bucketName . '/cors', null, $request);
	}


	/**
	 * Delete Bucket CORS Policy
	 */
	public function r2DeleteBucketCorsPolicy(
		string $bucketName,
		?\FoundryCo\Cloudflare\Enums\R2BucketCfR2Jurisdiction $cfR2Jurisdiction = null,
	): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/r2/buckets/' . $bucketName . '/cors');
	}


	/**
	 * List Custom Domains of Bucket
	 */
	public function custom(
		string $bucketName,
		?\FoundryCo\Cloudflare\Enums\R2BucketCfR2Jurisdiction $cfR2Jurisdiction = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/r2/buckets/' . $bucketName . '/domains/custom', null, ['cfR2Jurisdiction' => $cfR2Jurisdiction ?? null]);
	}


	/**
	 * Attach Custom Domain To Bucket
	 */
	public function r2AddCustomDomain(
		string $bucketName,
		\FoundryCo\Cloudflare\Requests\R2AddCustomDomainRequest $request,
		?\FoundryCo\Cloudflare\Enums\R2BucketCfR2Jurisdiction $cfR2Jurisdiction = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/r2/buckets/' . $bucketName . '/domains/custom', null, $request);
	}


	/**
	 * Get Custom Domain Settings
	 */
	public function r2GetCustomDomainSettings(
		string $bucketName,
		string $domain,
		?\FoundryCo\Cloudflare\Enums\R2BucketCfR2Jurisdiction $cfR2Jurisdiction = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/r2/buckets/' . $bucketName . '/domains/custom/' . $domain, null, ['cfR2Jurisdiction' => $cfR2Jurisdiction ?? null]);
	}


	/**
	 * Configure Custom Domain Settings
	 */
	public function r2EditCustomDomainSettings(
		string $bucketName,
		string $domain,
		\FoundryCo\Cloudflare\Requests\R2EditCustomDomainSettingsRequest $request,
		?\FoundryCo\Cloudflare\Enums\R2BucketCfR2Jurisdiction $cfR2Jurisdiction = null,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/r2/buckets/' . $bucketName . '/domains/custom/' . $domain, null, $request);
	}


	/**
	 * Remove Custom Domain From Bucket
	 */
	public function r2DeleteCustomDomain(
		string $bucketName,
		string $domain,
		?\FoundryCo\Cloudflare\Enums\R2BucketCfR2Jurisdiction $cfR2Jurisdiction = null,
	): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/r2/buckets/' . $bucketName . '/domains/custom/' . $domain);
	}


	/**
	 * Get r2.dev Domain of Bucket
	 */
	public function managed(
		string $bucketName,
		?\FoundryCo\Cloudflare\Enums\R2BucketCfR2Jurisdiction $cfR2Jurisdiction = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/r2/buckets/' . $bucketName . '/domains/managed', null, ['cfR2Jurisdiction' => $cfR2Jurisdiction ?? null]);
	}


	/**
	 * Update r2.dev Domain of Bucket
	 */
	public function r2PutBucketPublicPolicy(
		string $bucketName,
		\FoundryCo\Cloudflare\Requests\R2PutBucketPublicPolicyRequest $request,
		?\FoundryCo\Cloudflare\Enums\R2BucketCfR2Jurisdiction $cfR2Jurisdiction = null,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/r2/buckets/' . $bucketName . '/domains/managed', null, $request);
	}


	/**
	 * Get Object Lifecycle Rules
	 */
	public function lifecycle(
		string $bucketName,
		?\FoundryCo\Cloudflare\Enums\R2BucketCfR2Jurisdiction $cfR2Jurisdiction = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/r2/buckets/' . $bucketName . '/lifecycle', null, ['cfR2Jurisdiction' => $cfR2Jurisdiction ?? null]);
	}


	/**
	 * Put Object Lifecycle Rules
	 */
	public function r2PutBucketLifecycleConfiguration(
		string $bucketName,
		\FoundryCo\Cloudflare\Requests\R2PutBucketLifecycleConfigurationRequest $request,
		?\FoundryCo\Cloudflare\Enums\R2BucketCfR2Jurisdiction $cfR2Jurisdiction = null,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/r2/buckets/' . $bucketName . '/lifecycle', null, $request);
	}


	/**
	 * Get Local Uploads Configuration
	 */
	public function localUploads(string $bucketName): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/r2/buckets/' . $bucketName . '/local-uploads', null, []);
	}


	/**
	 * Put Local Uploads Configuration
	 */
	public function r2PutBucketLocalUploadsConfiguration(
		string $bucketName,
		\FoundryCo\Cloudflare\Requests\R2PutBucketLocalUploadsConfigurationRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/r2/buckets/' . $bucketName . '/local-uploads', null, $request);
	}


	/**
	 * Get Bucket Lock Rules
	 */
	public function lock(
		string $bucketName,
		?\FoundryCo\Cloudflare\Enums\R2BucketCfR2Jurisdiction $cfR2Jurisdiction = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/r2/buckets/' . $bucketName . '/lock', null, ['cfR2Jurisdiction' => $cfR2Jurisdiction ?? null]);
	}


	/**
	 * Put Bucket Lock Rules
	 */
	public function r2PutBucketLockConfiguration(
		string $bucketName,
		\FoundryCo\Cloudflare\Requests\R2PutBucketLockConfigurationRequest $request,
		?\FoundryCo\Cloudflare\Enums\R2BucketCfR2Jurisdiction $cfR2Jurisdiction = null,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/r2/buckets/' . $bucketName . '/lock', null, $request);
	}


	/**
	 * Get Sippy Configuration
	 */
	public function sippy(
		string $bucketName,
		?\FoundryCo\Cloudflare\Enums\R2BucketCfR2Jurisdiction $cfR2Jurisdiction = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/r2/buckets/' . $bucketName . '/sippy', null, ['cfR2Jurisdiction' => $cfR2Jurisdiction ?? null]);
	}


	/**
	 * Enable Sippy
	 */
	public function r2PutBucketSippyConfig(
		string $bucketName,
		?\FoundryCo\Cloudflare\Enums\R2BucketCfR2Jurisdiction $cfR2Jurisdiction = null,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/r2/buckets/' . $bucketName . '/sippy', null, null);
	}


	/**
	 * Disable Sippy
	 */
	public function r2DeleteBucketSippyConfig(
		string $bucketName,
		?\FoundryCo\Cloudflare\Enums\R2BucketCfR2Jurisdiction $cfR2Jurisdiction = null,
	): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/r2/buckets/' . $bucketName . '/sippy');
	}


	/**
	 * Create Temporary Access Credentials
	 */
	public function tempAccessCredentials(
		\FoundryCo\Cloudflare\Requests\R2CreateTempAccessCredentialsRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/r2/temp-access-credentials', null, $request);
	}
}
