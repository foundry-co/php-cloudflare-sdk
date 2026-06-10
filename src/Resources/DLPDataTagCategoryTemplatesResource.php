<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class DLPDataTagCategoryTemplatesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Retrieve all data tag category templates in an account
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/data_tag_category_templates', \FoundryCo\Cloudflare\Responses\DlpDataTagCategoryTemplatesList::class, []);
	}


	/**
	 * Retrieve a specific data tag category template.
	 */
	public function get(string $templateId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/data_tag_category_templates/' . $templateId, \FoundryCo\Cloudflare\Responses\DlpDataTagCategoryTemplateRead::class, []);
	}
}
