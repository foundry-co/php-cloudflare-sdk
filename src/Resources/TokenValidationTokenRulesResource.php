<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class TokenValidationTokenRulesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * List token validation rules
	 */
	public function list(
		?int $perPage = null,
		?int $page = null,
		?array $tokenConfiguration = null,
		?\FoundryCo\Cloudflare\Enums\TokenValidationTokenRulesAction $action = null,
		?bool $enabled = null,
		mixed $id = null,
		mixed $ruleId = null,
		?string $host = null,
		?string $hostname = null,
	): \FoundryCo\Cloudflare\Responses\TokenValidationTokenRulesList
	{
		return $this->client->get('/zones/' . $this->zoneId . '/token_validation/rules', \FoundryCo\Cloudflare\Responses\TokenValidationTokenRulesList::class, ['perPage' => $perPage ?? null, 'page' => $page ?? null, 'tokenConfiguration' => $tokenConfiguration ?? null, 'action' => $action ?? null, 'enabled' => $enabled ?? null, 'id' => $id ?? null, 'ruleId' => $ruleId ?? null, 'host' => $host ?? null, 'hostname' => $hostname ?? null]);
	}


	/**
	 * Create a token validation rule
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\TokenValidationRulesCreateRequest $request,
	): \FoundryCo\Cloudflare\Responses\TokenValidationTokenRulesCreate
	{
		return $this->client->post('/zones/' . $this->zoneId . '/token_validation/rules', \FoundryCo\Cloudflare\Responses\TokenValidationTokenRulesCreate::class, $request);
	}


	/**
	 * Bulk create token validation rules
	 */
	public function bulk(): \FoundryCo\Cloudflare\Responses\TokenValidationTokenRulesCreate
	{
		return $this->client->post('/zones/' . $this->zoneId . '/token_validation/rules/bulk', \FoundryCo\Cloudflare\Responses\TokenValidationTokenRulesCreate::class, null);
	}


	/**
	 * Bulk edit token validation rules
	 */
	public function update(): \FoundryCo\Cloudflare\Responses\TokenValidationTokenRulesEdit
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/token_validation/rules/bulk', \FoundryCo\Cloudflare\Responses\TokenValidationTokenRulesEdit::class, null);
	}


	/**
	 * Preview operations covered by a Token Validation rule
	 */
	public function preview(
		\FoundryCo\Cloudflare\Requests\TokenValidationRulesPreviewRequest $request,
		?int $perPage = null,
		?int $page = null,
		?array $state = null,
		?array $host = null,
		?array $hostname = null,
		?array $method = null,
		?array $endpoint = null,
	): \FoundryCo\Cloudflare\Responses\TokenValidationTokenRulesPreview
	{
		return $this->client->post('/zones/' . $this->zoneId . '/token_validation/rules/preview', \FoundryCo\Cloudflare\Responses\TokenValidationTokenRulesPreview::class, $request);
	}


	/**
	 * Get a zone token validation rule
	 */
	public function get(): \FoundryCo\Cloudflare\Responses\TokenValidationTokenRulesGet
	{
		return $this->client->get('/zones/' . $this->zoneId . '/token_validation/rules/' . $ruleId, \FoundryCo\Cloudflare\Responses\TokenValidationTokenRulesGet::class, []);
	}


	/**
	 * Edit a zone token validation rule
	 */
	public function rules(
		\FoundryCo\Cloudflare\Requests\TokenValidationRulesEditRequest $request,
	): \FoundryCo\Cloudflare\Responses\TokenValidationTokenRulesEdit
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/token_validation/rules/' . $ruleId, \FoundryCo\Cloudflare\Responses\TokenValidationTokenRulesEdit::class, $request);
	}


	/**
	 * Delete a zone token validation rule
	 */
	public function delete(): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/token_validation/rules/' . $ruleId);
	}
}
