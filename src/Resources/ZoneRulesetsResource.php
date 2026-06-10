<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class ZoneRulesetsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * List zone rulesets
	 */
	public function list(?string $cursor = null, ?int $perPage = null): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/rulesets', null, ['cursor' => $cursor ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Create a zone ruleset
	 */
	public function create(\FoundryCo\Cloudflare\Requests\CreateZoneRulesetRequest $request): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/rulesets', null, $request);
	}


	/**
	 * Get a zone entry point ruleset
	 */
	public function get(\FoundryCo\Cloudflare\Enums\ZoneRulesetsRulesetPhase $rulesetPhase): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/rulesets/phases/' . $rulesetPhase . '/entrypoint', null, []);
	}


	/**
	 * Update a zone entry point ruleset
	 */
	public function update(
		\FoundryCo\Cloudflare\Enums\ZoneRulesetsRulesetPhase $rulesetPhase,
		\FoundryCo\Cloudflare\Requests\UpdateZoneEntrypointRulesetRequest $request,
	): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/rulesets/phases/' . $rulesetPhase . '/entrypoint', null, $request);
	}


	/**
	 * List a zone entry point ruleset's versions
	 */
	public function versions(\FoundryCo\Cloudflare\Enums\ZoneRulesetsRulesetPhase $rulesetPhase): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/rulesets/phases/' . $rulesetPhase . '/entrypoint/versions', null, []);
	}


	/**
	 * Get a zone entry point ruleset version
	 */
	public function getZoneEntrypointRulesetVersion(
		string $rulesetVersion,
		\FoundryCo\Cloudflare\Enums\ZoneRulesetsRulesetPhase $rulesetPhase,
	): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/rulesets/phases/' . $rulesetPhase . '/entrypoint/versions/' . $rulesetVersion, null, []);
	}


	/**
	 * Get a zone ruleset
	 */
	public function rulesets(string $rulesetId): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/rulesets/' . $rulesetId, null, []);
	}


	/**
	 * Update a zone ruleset
	 */
	public function updateZoneRuleset(
		string $rulesetId,
		\FoundryCo\Cloudflare\Requests\UpdateZoneRulesetRequest $request,
	): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/rulesets/' . $rulesetId, null, $request);
	}


	/**
	 * Delete a zone ruleset
	 */
	public function delete(string $rulesetId): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/rulesets/' . $rulesetId);
	}


	/**
	 * Create a zone ruleset rule
	 */
	public function rules(string $rulesetId, \FoundryCo\Cloudflare\Requests\CreateZoneRulesetRuleRequest $request): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/rulesets/' . $rulesetId . '/rules', null, $request);
	}


	/**
	 * Update a zone ruleset rule
	 */
	public function updateZoneRulesetRule(
		string $ruleId,
		string $rulesetId,
		\FoundryCo\Cloudflare\Requests\UpdateZoneRulesetRuleRequest $request,
	): mixed
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/rulesets/' . $rulesetId . '/rules/' . $ruleId, null, $request);
	}


	/**
	 * Delete a zone ruleset rule
	 */
	public function deleteZoneRulesetRule(string $ruleId, string $rulesetId): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/rulesets/' . $rulesetId . '/rules/' . $ruleId);
	}


	/**
	 * List a zone ruleset's versions
	 */
	public function listZoneRulesetVersions(string $rulesetId): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/rulesets/' . $rulesetId . '/versions', null, []);
	}


	/**
	 * Get a zone ruleset version
	 */
	public function getZoneRulesetVersion(string $rulesetVersion, string $rulesetId): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/rulesets/' . $rulesetId . '/versions/' . $rulesetVersion, null, []);
	}


	/**
	 * Delete a zone ruleset version
	 */
	public function deleteZoneRulesetVersion(string $rulesetVersion, string $rulesetId): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/rulesets/' . $rulesetId . '/versions/' . $rulesetVersion);
	}


	/**
	 * List a zone ruleset version's rules by tag
	 */
	public function byTag(string $ruleTag, string $rulesetVersion, string $rulesetId): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/rulesets/' . $rulesetId . '/versions/' . $rulesetVersion . '/by_tag/' . $ruleTag, null, []);
	}
}
