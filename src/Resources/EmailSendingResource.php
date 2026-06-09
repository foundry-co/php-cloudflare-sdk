<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class EmailSendingResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Get sending limits
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\EmailSendingLimits
	{
		return $this->client->get('/accounts/' . $this->accountId . '/email/sending/limits', \FoundryCo\Cloudflare\Responses\EmailSendingLimits::class, []);
	}


	/**
	 * Send an email
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\EmailSendingAccountSendBuilderRequest $request,
	): \FoundryCo\Cloudflare\Responses\EmailSendingBuilder
	{
		return $this->client->post('/accounts/' . $this->accountId . '/email/sending/send', \FoundryCo\Cloudflare\Responses\EmailSendingBuilder::class, $request);
	}


	/**
	 * Send a raw MIME email
	 */
	public function sendRaw(
		\FoundryCo\Cloudflare\Requests\EmailSendingAccountSendRawMessageRequest $request,
	): \FoundryCo\Cloudflare\Responses\EmailSendingMessage
	{
		return $this->client->post('/accounts/' . $this->accountId . '/email/sending/send_raw', \FoundryCo\Cloudflare\Responses\EmailSendingMessage::class, $request);
	}
}
