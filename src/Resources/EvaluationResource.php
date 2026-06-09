<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class EvaluationResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Evaluate flag
	 */
	public function get(string $appId, ?string $flagKey = null, ?string $targetingKey = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/flagship/apps/' . $appId . '/evaluate', null, ['flagKey' => $flagKey ?? null, 'targetingKey' => $targetingKey ?? null]);
	}
}
