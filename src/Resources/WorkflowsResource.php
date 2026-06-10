<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class WorkflowsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List all Workflows
	 */
	public function list(?float $perPage = null, ?float $page = null, ?string $search = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workflows', \FoundryCo\Cloudflare\Responses\WorListWorkflows::class, ['perPage' => $perPage ?? null, 'page' => $page ?? null, 'search' => $search ?? null]);
	}


	/**
	 * Get Workflow details
	 */
	public function get(string $workflowName): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workflows/' . $workflowName, \FoundryCo\Cloudflare\Responses\WorGetWorkflowDetails::class, []);
	}


	/**
	 * Create/modify Workflow
	 */
	public function update(
		string $workflowName,
		\FoundryCo\Cloudflare\Requests\WorCreateOrModifyWorkflowRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/workflows/' . $workflowName, \FoundryCo\Cloudflare\Responses\WorCreateOrModifyWorkflow::class, $request);
	}


	/**
	 * Deletes a Workflow
	 */
	public function delete(string $workflowName): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/workflows/' . $workflowName);
	}


	/**
	 * List of workflow instances
	 */
	public function instances(
		string $workflowName,
		?float $page = null,
		?float $perPage = null,
		?string $cursor = null,
		?\FoundryCo\Cloudflare\Enums\WorkflowsDirection $direction = null,
		?\FoundryCo\Cloudflare\Enums\WorkflowsStatus $status = null,
		?\DateTimeImmutable $dateStart = null,
		?\DateTimeImmutable $dateEnd = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workflows/' . $workflowName . '/instances', \FoundryCo\Cloudflare\Responses\WorListWorkflowInstances::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'cursor' => $cursor ?? null, 'direction' => $direction ?? null, 'status' => $status ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null]);
	}


	/**
	 * Create a new workflow instance
	 */
	public function create(
		string $workflowName,
		\FoundryCo\Cloudflare\Requests\WorCreateNewWorkflowInstanceRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/workflows/' . $workflowName . '/instances', \FoundryCo\Cloudflare\Responses\WorCreateNewWorkflowInstance::class, $request);
	}


	/**
	 * Batch create new Workflow instances
	 */
	public function batch(string $workflowName): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/workflows/' . $workflowName . '/instances/batch', \FoundryCo\Cloudflare\Responses\WorBatchCreateWorkflowInstance::class, null);
	}


	/**
	 * Batch terminate instances of a workflow
	 */
	public function terminate(string $workflowName): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/workflows/' . $workflowName . '/instances/batch/terminate', \FoundryCo\Cloudflare\Responses\WorBatchTerminateWorkflowInstances::class, null);
	}


	/**
	 * Get status of the job responsible for terminate all instances of a workflow
	 */
	public function worStatusTerminateWorkflowInstances(string $workflowName): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workflows/' . $workflowName . '/instances/terminate', \FoundryCo\Cloudflare\Responses\WorStatusTerminateWorkflowInstances::class, []);
	}


	/**
	 * Get logs and status from instance
	 */
	public function worDescribeWorkflowInstance(
		string $workflowName,
		string $instanceId,
		?\FoundryCo\Cloudflare\Enums\WorkflowsSimple $simple = null,
		?\FoundryCo\Cloudflare\Enums\WorkflowsOrder $order = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workflows/' . $workflowName . '/instances/' . $instanceId, \FoundryCo\Cloudflare\Responses\WorDescribeWorkflowInstance::class, ['simple' => $simple ?? null, 'order' => $order ?? null]);
	}


	/**
	 * Send event to instance
	 */
	public function events(string $workflowName, string $instanceId, string $eventType): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/workflows/' . $workflowName . '/instances/' . $instanceId . '/events/' . $eventType, null, null);
	}


	/**
	 * Change status of instance
	 */
	public function status(string $workflowName, string $instanceId): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/workflows/' . $workflowName . '/instances/' . $instanceId . '/status', \FoundryCo\Cloudflare\Responses\WorChangeStatusWorkflowInstance::class, null);
	}


	/**
	 * Get full step output from instance
	 */
	public function step(
		string $workflowName,
		string $instanceId,
		?string $name = null,
		?\FoundryCo\Cloudflare\Enums\WorkflowsType $type = null,
		?int $attempt = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workflows/' . $workflowName . '/instances/' . $instanceId . '/step', \FoundryCo\Cloudflare\Responses\WorGetWorkflowInstanceStep::class, ['name' => $name ?? null, 'type' => $type ?? null, 'attempt' => $attempt ?? null]);
	}


	/**
	 * List deployed Workflow versions
	 */
	public function versions(string $workflowName, ?float $perPage = null, ?float $page = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workflows/' . $workflowName . '/versions', \FoundryCo\Cloudflare\Responses\WorListWorkflowVersions::class, ['perPage' => $perPage ?? null, 'page' => $page ?? null]);
	}


	/**
	 * Get Workflow version details
	 */
	public function worDescribeWorkflowVersions(string $workflowName, string $versionId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workflows/' . $workflowName . '/versions/' . $versionId, \FoundryCo\Cloudflare\Responses\WorDescribeWorkflowVersions::class, []);
	}


	/**
	 * Get Workflow version dag
	 */
	public function dag(string $workflowName, string $versionId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workflows/' . $workflowName . '/versions/' . $versionId . '/dag', \FoundryCo\Cloudflare\Responses\WorDescribeWorkflowVersionsDag::class, []);
	}


	/**
	 * Get Workflow version graph
	 */
	public function graph(string $workflowName, string $versionId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workflows/' . $workflowName . '/versions/' . $versionId . '/graph', \FoundryCo\Cloudflare\Responses\WorDescribeWorkflowVersionsGraph::class, []);
	}
}
