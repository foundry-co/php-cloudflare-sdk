<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class StreamLiveInputsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List live inputs
	 */
	public function list(?bool $includeCounts = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/stream/live_inputs', \FoundryCo\Cloudflare\Responses\StreamLiveInputsListLiveInputs::class, ['includeCounts' => $includeCounts ?? null]);
	}


	/**
	 * Create a live input
	 */
	public function create(\FoundryCo\Cloudflare\Requests\StreamLiveInputsCreateALiveInputRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/stream/live_inputs', \FoundryCo\Cloudflare\Responses\StreamLiveInputsCreateALiveInput::class, $request);
	}


	/**
	 * Retrieve a live input
	 */
	public function get(string $liveInputIdentifier): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/stream/live_inputs/' . $liveInputIdentifier, \FoundryCo\Cloudflare\Responses\StreamLiveInputsRetrieveALiveInput::class, []);
	}


	/**
	 * Update a live input
	 */
	public function update(
		string $liveInputIdentifier,
		\FoundryCo\Cloudflare\Requests\StreamLiveInputsUpdateALiveInputRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/stream/live_inputs/' . $liveInputIdentifier, \FoundryCo\Cloudflare\Responses\StreamLiveInputsUpdateALiveInput::class, $request);
	}


	/**
	 * Delete a live input
	 */
	public function delete(string $liveInputIdentifier): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/stream/live_inputs/' . $liveInputIdentifier);
	}


	/**
	 * Disable a live input
	 */
	public function disable(string $liveInputIdentifier): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/stream/live_inputs/' . $liveInputIdentifier . '/disable', \FoundryCo\Cloudflare\Responses\StreamLiveInputsDisableALiveInput::class, null);
	}


	/**
	 * Enable a live input
	 */
	public function enable(string $liveInputIdentifier): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/stream/live_inputs/' . $liveInputIdentifier . '/enable', \FoundryCo\Cloudflare\Responses\StreamLiveInputsEnableALiveInput::class, null);
	}


	/**
	 * List all outputs associated with a specified live input
	 */
	public function outputs(string $liveInputIdentifier): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/stream/live_inputs/' . $liveInputIdentifier . '/outputs', \FoundryCo\Cloudflare\Responses\StreamLiveInputsListAllOutputsAssociatedWithASpecifiedLiveInput::class, []);
	}


	/**
	 * Create a new output, connected to a live input
	 */
	public function streamLiveInputsCreateANewOutputConnectedToALiveInput(
		string $liveInputIdentifier,
		\FoundryCo\Cloudflare\Requests\StreamLiveInputsCreateANewOutputConnectedToALiveInputRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/stream/live_inputs/' . $liveInputIdentifier . '/outputs', \FoundryCo\Cloudflare\Responses\StreamLiveInputsCreateANewOutputConnectedToALiveInput::class, $request);
	}


	/**
	 * Update an output
	 */
	public function streamLiveInputsUpdateAnOutput(
		string $outputIdentifier,
		string $liveInputIdentifier,
		\FoundryCo\Cloudflare\Requests\StreamLiveInputsUpdateAnOutputRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/stream/live_inputs/' . $liveInputIdentifier . '/outputs/' . $outputIdentifier, \FoundryCo\Cloudflare\Responses\StreamLiveInputsUpdateAnOutput::class, $request);
	}


	/**
	 * Delete an output
	 */
	public function streamLiveInputsDeleteAnOutput(string $outputIdentifier, string $liveInputIdentifier): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/stream/live_inputs/' . $liveInputIdentifier . '/outputs/' . $outputIdentifier);
	}
}
