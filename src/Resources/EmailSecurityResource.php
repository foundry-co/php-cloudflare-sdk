<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class EmailSecurityResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Search email messages
	 */
	public function list(
		?\DateTimeImmutable $start = null,
		?\DateTimeImmutable $end = null,
		?string $query = null,
		?bool $detectionsOnly = null,
		?\FoundryCo\Cloudflare\Enums\EmailSecurityFinalDisposition $finalDisposition = null,
		?string $metric = null,
		?\FoundryCo\Cloudflare\Enums\EmailSecurityMessageAction $messageAction = null,
		?string $recipient = null,
		?string $sender = null,
		?string $alertId = null,
		?string $domain = null,
		?string $messageId = null,
		?string $subject = null,
		?\FoundryCo\Cloudflare\Enums\EmailSecurityDeliveryStatus $deliveryStatus = null,
		?string $cursor = null,
		?int $perPage = null,
		?int $page = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/email-security/investigate', \FoundryCo\Cloudflare\Responses\EmailSecurityInvestigate::class, ['start' => $start ?? null, 'end' => $end ?? null, 'query' => $query ?? null, 'detectionsOnly' => $detectionsOnly ?? null, 'finalDisposition' => $finalDisposition ?? null, 'metric' => $metric ?? null, 'messageAction' => $messageAction ?? null, 'recipient' => $recipient ?? null, 'sender' => $sender ?? null, 'alertId' => $alertId ?? null, 'domain' => $domain ?? null, 'messageId' => $messageId ?? null, 'subject' => $subject ?? null, 'deliveryStatus' => $deliveryStatus ?? null, 'cursor' => $cursor ?? null, 'perPage' => $perPage ?? null, 'page' => $page ?? null]);
	}


	/**
	 * Move multiple messages
	 */
	public function create(\FoundryCo\Cloudflare\Requests\EmailSecurityPostBulkMoveRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/email-security/investigate/move', \FoundryCo\Cloudflare\Responses\EmailSecurityPostBulkMove::class, $request);
	}


	/**
	 * Preview for non-detection messages
	 */
	public function preview(\FoundryCo\Cloudflare\Requests\EmailSecurityPostPreviewRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/email-security/investigate/preview', \FoundryCo\Cloudflare\Responses\EmailSecurityPostPreview::class, $request);
	}


	/**
	 * Release messages from quarantine
	 */
	public function release(): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/email-security/investigate/release', \FoundryCo\Cloudflare\Responses\EmailSecurityPostRelease::class, null);
	}


	/**
	 * Get message details
	 */
	public function get(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/email-security/investigate/' . $investigateId, \FoundryCo\Cloudflare\Responses\EmailSecurityGetMessage::class, []);
	}


	/**
	 * Get action log for a message
	 */
	public function actionLog(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/email-security/investigate/' . $investigateId . '/action_log', \FoundryCo\Cloudflare\Responses\EmailSecurityGetMessageActionLog::class, []);
	}


	/**
	 * Get message detection details
	 */
	public function detections(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/email-security/investigate/' . $investigateId . '/detections', \FoundryCo\Cloudflare\Responses\EmailSecurityGetMessageDetections::class, []);
	}


	/**
	 * Move a message
	 */
	public function move(\FoundryCo\Cloudflare\Requests\EmailSecurityPostMessageMoveRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/email-security/investigate/' . $investigateId . '/move', \FoundryCo\Cloudflare\Responses\EmailSecurityPostMessageMove::class, $request);
	}


	/**
	 * Get email preview
	 */
	public function emailSecurityGetMessagePreview(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/email-security/investigate/' . $investigateId . '/preview', \FoundryCo\Cloudflare\Responses\EmailSecurityGetMessagePreview::class, []);
	}


	/**
	 * Get raw email content
	 */
	public function raw(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/email-security/investigate/' . $investigateId . '/raw', \FoundryCo\Cloudflare\Responses\EmailSecurityGetMessageRaw::class, []);
	}


	/**
	 * Change email classification
	 */
	public function reclassify(\FoundryCo\Cloudflare\Requests\EmailSecurityPostReclassifyRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/email-security/investigate/' . $investigateId . '/reclassify', null, $request);
	}


	/**
	 * Get email trace
	 */
	public function trace(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/email-security/investigate/' . $investigateId . '/trace', \FoundryCo\Cloudflare\Responses\EmailSecurityGetMessageTrace::class, []);
	}


	/**
	 * Get PhishGuard reports
	 */
	public function reports(
		?\DateTimeImmutable $start = null,
		?\DateTimeImmutable $end = null,
		?\DateTimeImmutable $fromDate = null,
		?\DateTimeImmutable $toDate = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/email-security/phishguard/reports', \FoundryCo\Cloudflare\Responses\EmailSecurityGetPhishguardReports::class, ['start' => $start ?? null, 'end' => $end ?? null, 'fromDate' => $fromDate ?? null, 'toDate' => $toDate ?? null]);
	}


	/**
	 * Get reclassify submissions
	 */
	public function submissions(
		?\DateTimeImmutable $start = null,
		?\DateTimeImmutable $end = null,
		?\FoundryCo\Cloudflare\Enums\EmailSecurityType $type = null,
		?string $submissionId = null,
		?\FoundryCo\Cloudflare\Enums\EmailSecurityOriginalDisposition $originalDisposition = null,
		?\FoundryCo\Cloudflare\Enums\EmailSecurityRequestedDisposition $requestedDisposition = null,
		?\FoundryCo\Cloudflare\Enums\EmailSecurityOutcomeDisposition $outcomeDisposition = null,
		?string $status = null,
		?string $query = null,
		?bool $escalatedFromUser = null,
		?int $page = null,
		?int $perPage = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/email-security/submissions', \FoundryCo\Cloudflare\Responses\EmailSecuritySubmissions::class, ['start' => $start ?? null, 'end' => $end ?? null, 'type' => $type ?? null, 'submissionId' => $submissionId ?? null, 'originalDisposition' => $originalDisposition ?? null, 'requestedDisposition' => $requestedDisposition ?? null, 'outcomeDisposition' => $outcomeDisposition ?? null, 'status' => $status ?? null, 'query' => $query ?? null, 'escalatedFromUser' => $escalatedFromUser ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}
}
