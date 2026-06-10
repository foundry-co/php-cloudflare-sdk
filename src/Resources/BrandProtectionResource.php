<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class BrandProtectionResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List saved query matches
	 */
	public function list(
		?string $offset = null,
		?string $limit = null,
		?array $queryId = null,
		?string $includeDomainId = null,
		?string $includeDismissed = null,
		?string $domainSearch = null,
		?\FoundryCo\Cloudflare\Enums\BrandProtectionOrderBy $orderBy = null,
		?\FoundryCo\Cloudflare\Enums\BrandProtectionOrder $order = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/v2/brand-protection/domain/matches', null, ['offset' => $offset ?? null, 'limit' => $limit ?? null, 'queryId' => $queryId ?? null, 'includeDomainId' => $includeDomainId ?? null, 'includeDismissed' => $includeDismissed ?? null, 'domainSearch' => $domainSearch ?? null, 'orderBy' => $orderBy ?? null, 'order' => $order ?? null]);
	}


	/**
	 * Get queries
	 */
	public function queries(?string $id = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/v2/brand-protection/domain/queries', null, ['id' => $id ?? null]);
	}


	/**
	 * Generate takedown letter
	 */
	public function create(\FoundryCo\Cloudflare\Requests\PostLetterGenerateRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/v2/brand-protection/letter/generate', null, $request);
	}


	/**
	 * List letter templates
	 */
	public function templates(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/v2/brand-protection/letter/templates', null, []);
	}


	/**
	 * Create letter template
	 */
	public function postLetterTemplateCreate(
		\FoundryCo\Cloudflare\Requests\PostLetterTemplateCreateRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/v2/brand-protection/letter/templates', null, $request);
	}


	/**
	 * List example letter templates
	 */
	public function examples(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/v2/brand-protection/letter/templates/examples', null, []);
	}


	/**
	 * Get letter template
	 */
	public function get(string $templateId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/v2/brand-protection/letter/templates/' . $templateId, null, []);
	}


	/**
	 * Update letter template
	 */
	public function update(
		string $templateId,
		\FoundryCo\Cloudflare\Requests\PutLetterTemplateUpdateRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/cloudforce-one/v2/brand-protection/letter/templates/' . $templateId, null, $request);
	}


	/**
	 * Delete letter template
	 */
	public function delete(string $templateId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/cloudforce-one/v2/brand-protection/letter/templates/' . $templateId);
	}


	/**
	 * List logo matches
	 */
	public function matches(
		?string $offset = null,
		?string $limit = null,
		?string $queryId = null,
		?string $download = null,
		?\FoundryCo\Cloudflare\Enums\BrandProtectionOrderBy $orderBy = null,
		?\FoundryCo\Cloudflare\Enums\BrandProtectionOrder $order = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/v2/brand-protection/logo/matches', null, ['offset' => $offset ?? null, 'limit' => $limit ?? null, 'queryId' => $queryId ?? null, 'download' => $download ?? null, 'orderBy' => $orderBy ?? null, 'order' => $order ?? null]);
	}


	/**
	 * Get logo queries
	 */
	public function getGetLogoQueries(?string $id = null, ?string $download = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/v2/brand-protection/logo/queries', null, ['id' => $id ?? null, 'download' => $download ?? null]);
	}


	/**
	 * Insert logo query
	 */
	public function postInsertLogoQuery(\FoundryCo\Cloudflare\Requests\PostInsertLogoQueryRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/v2/brand-protection/logo/queries', null, $request);
	}


	/**
	 * Delete logo query
	 */
	public function deleteDeleteLogoQuery(string $queryId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/cloudforce-one/v2/brand-protection/logo/queries/' . $queryId);
	}


	/**
	 * Search scanned images
	 */
	public function search(
		\FoundryCo\Cloudflare\Requests\PostSearchLogoSimilarityRequest $request,
		?string $showHistoric = null,
		?string $download = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/v2/brand-protection/logo/search', null, $request);
	}


	/**
	 * List takedown notices
	 */
	public function takedownNotices(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/v2/brand-protection/takedown-notices', null, []);
	}


	/**
	 * Create takedown notice
	 */
	public function postTakedownNoticeCreate(
		\FoundryCo\Cloudflare\Requests\PostTakedownNoticeCreateRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/v2/brand-protection/takedown-notices', null, $request);
	}


	/**
	 * Lookup takedown notices by domains
	 */
	public function lookup(\FoundryCo\Cloudflare\Requests\PostTakedownNoticeLookupRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/v2/brand-protection/takedown-notices/lookup', null, $request);
	}


	/**
	 * Get takedown notice
	 */
	public function getTakedownNoticeGet(int $noticeId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/v2/brand-protection/takedown-notices/' . $noticeId, null, []);
	}


	/**
	 * Update takedown notice
	 */
	public function putTakedownNoticeUpdate(
		int $noticeId,
		\FoundryCo\Cloudflare\Requests\PutTakedownNoticeUpdateRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/cloudforce-one/v2/brand-protection/takedown-notices/' . $noticeId, null, $request);
	}


	/**
	 * Delete takedown notice
	 */
	public function deleteTakedownNoticeDelete(int $noticeId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/cloudforce-one/v2/brand-protection/takedown-notices/' . $noticeId);
	}


	/**
	 * List takedown letters
	 */
	public function letters(int $noticeId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/v2/brand-protection/takedown-notices/' . $noticeId . '/letters', null, []);
	}


	/**
	 * Create takedown letter
	 */
	public function postTakedownLetterCreate(
		int $noticeId,
		\FoundryCo\Cloudflare\Requests\PostTakedownLetterCreateRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/v2/brand-protection/takedown-notices/' . $noticeId . '/letters', null, $request);
	}


	/**
	 * Get takedown letter
	 */
	public function getTakedownLetterGet(int $noticeId, int $letterId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/v2/brand-protection/takedown-notices/' . $noticeId . '/letters/' . $letterId, null, []);
	}


	/**
	 * Delete takedown letter
	 */
	public function deleteTakedownLetterDelete(int $noticeId, int $letterId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/cloudforce-one/v2/brand-protection/takedown-notices/' . $noticeId . '/letters/' . $letterId);
	}


	/**
	 * Download takedown letter PDF
	 */
	public function pdf(int $noticeId, int $letterId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/v2/brand-protection/takedown-notices/' . $noticeId . '/letters/' . $letterId . '/pdf', null, []);
	}


	/**
	 * Get total queries
	 */
	public function totalQueries(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/v2/brand-protection/total-queries', null, []);
	}
}
