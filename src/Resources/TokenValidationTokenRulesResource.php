<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
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
	): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/token_validation/rules', \FoundryCo\Cloudflare\Responses\TokenValidationRulesList::class, ['perPage' => $perPage ?? null, 'page' => $page ?? null, 'tokenConfiguration' => $tokenConfiguration ?? null, 'action' => $action ?? null, 'enabled' => $enabled ?? null, 'id' => $id ?? null, 'ruleId' => $ruleId ?? null, 'host' => $host ?? null, 'hostname' => $hostname ?? null]);
	}


	/**
	 * Create a token validation rule
	 */
	public function create(\FoundryCo\Cloudflare\Requests\TokenValidationRulesCreateRequest $request): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/token_validation/rules', \FoundryCo\Cloudflare\Responses\TokenValidationRulesCreate::class, $request);
	}


	/**
	 * Bulk create token validation rules
	 */
	public function bulk(): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/token_validation/rules/bulk', \FoundryCo\Cloudflare\Responses\TokenValidationRulesBulkCreate::class, null);
	}


	/**
	 * Bulk edit token validation rules
	 */
	public function update(): mixed
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/token_validation/rules/bulk', \FoundryCo\Cloudflare\Responses\TokenValidationRulesBulkEdit::class, null);
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
	): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/token_validation/rules/preview', \FoundryCo\Cloudflare\Responses\TokenValidationRulesPreview::class, $request);
	}


	/**
	 * Get a zone token validation rule
	 */
	public function get(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/token_validation/rules/' . $ruleId, \FoundryCo\Cloudflare\Responses\TokenValidationRulesGet::class, []);
	}


	/**
	 * Edit a zone token validation rule
	 */
	public function rules(\FoundryCo\Cloudflare\Requests\TokenValidationRulesEditRequest $request): mixed
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/token_validation/rules/' . $ruleId, \FoundryCo\Cloudflare\Responses\TokenValidationRulesEdit::class, $request);
	}


	/**
	 * Delete a zone token validation rule
	 */
	public function delete(): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/token_validation/rules/' . $ruleId);
	}
}
