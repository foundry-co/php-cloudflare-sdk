<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class DLPSensitivityGroupTemplatesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Retrieve all sensitivity group templates in an account
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\DLPSensitivityGroupTemplatesList
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/sensitivity_groups/templates', \FoundryCo\Cloudflare\Responses\DLPSensitivityGroupTemplatesList::class, []);
	}


	/**
	 * Retrieve a specific sensitivity group template.
	 */
	public function get(string $templateId): \FoundryCo\Cloudflare\Responses\DLPSensitivityGroupTemplatesRead
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/sensitivity_groups/templates/' . $templateId, \FoundryCo\Cloudflare\Responses\DLPSensitivityGroupTemplatesRead::class, []);
	}
}
