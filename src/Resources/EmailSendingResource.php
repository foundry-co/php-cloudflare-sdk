<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
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
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/email/sending/limits', \FoundryCo\Cloudflare\Responses\EmailSendingGetSendingLimits::class, []);
	}


	/**
	 * Send an email
	 */
	public function create(\FoundryCo\Cloudflare\Requests\EmailSendingAccountSendBuilderRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/email/sending/send', \FoundryCo\Cloudflare\Responses\EmailSendingAccountSendBuilder::class, $request);
	}


	/**
	 * Send a raw MIME email
	 */
	public function sendRaw(\FoundryCo\Cloudflare\Requests\EmailSendingAccountSendRawMessageRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/email/sending/send_raw', \FoundryCo\Cloudflare\Responses\EmailSendingAccountSendRawMessage::class, $request);
	}
}
