<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Properties required to create a cloudchamber deployment specified by the user
 */
readonly class ApplicationsModifyApplicationConfiguration
{
	public function __construct(
		/** Image url */
		public string $image,
		public ?array $authorizedKeys = null,
		/**
		 * The command to be executed when the container starts, passed to the entrypoint.
		 * This can be overridden at run-time. If only the command is overridden at run-time,
		 * it gets passed to the default entrypoint specified in the image.
		 */
		public ?array $command = null,
		/** The disk configuration for this deployment. By default, all containers have a disk size of 2GB. */
		public ?ApplicationsModifyApplicationConfigurationDisk $disk = null,
		/**
		 * Represents the /etc/resolv.conf that will appear in the deployment.
		 * If the 'dns' property is specified, even if empty object, will override the default resolv.conf of the container.
		 * The default resolv.conf of a container is 'servers = ["1.1.1.1", "9.9.9.9", "2606:4700:4700::1111"]', only if an IPv4 is assigned.
		 * The default for a non IPv4 deployment is 'servers = ["2606:4700:4700::1111", "2620:fe::fe"]'.
		 */
		public ?ApplicationsModifyApplicationConfigurationDns $dns = null,
		/**
		 * The entry point for the container, specifying the executable to run when the container starts.
		 * This can be overridden at run-time. If overridden, the default command from the image is ignored.
		 * Both entrypoint and command can be specified at run-time to completely replace the image defaults.
		 */
		public ?array $entrypoint = null,
		/** Container environment variables */
		public ?array $environmentVariables = null,
		/**
		 * Opt-in experimental flags for this application. Only a subset of
		 * experimental flags can be set by users; unsupported values are rejected.
		 */
		public ?array $experimentalFlags = null,
		/**
		 * The instance type will be used to configure vCPU, memory, and disk.
		 *
		 * - "lite": 1/16 vCPU, 256 MiB memory, 2 GB disk
		 * - "basic": 1/4 vCPU, 1 GiB memory, 4 GB disk
		 * - "standard-1": 1/2 vCPU, 4 GiB memory, 8 GB disk
		 * - "standard-2": 1 vCPU, 6 GiB memory, 12 GB disk
		 * - "standard-3": 2 vCPU, 8 GiB memory, 16 GB disk
		 * - "standard-4": 4 vCPU, 12 GiB memory, 20 GB disk
		 */
		public mixed $instanceType = null,
		/** Deployment labels */
		public ?array $labels = null,
		/** Lifecycle configuration for a deployment. */
		public ?ApplicationsModifyApplicationConfigurationLifecycle $lifecycle = null,
		/** A memory size that specifies its unit at the end. */
		public ?string $memory = null,
		/** Specify the memory to be used for the deployment, in MiB. The default will be the one configured for the account. */
		public ?int $memoryMib = null,
		/** Configuration for enabling the container metadata service. */
		public ?ApplicationsModifyApplicationConfigurationMetadataService $metadataService = null,
		/** Settings for deployment observability such as logging. */
		public ?ApplicationsModifyApplicationConfigurationObservability $observability = null,
		/** A list of objects with secret names and the their access types from the account */
		public ?array $secrets = null,
		/** A list of SSH public key IDs from the account */
		public ?array $sshPublicKeyIds = null,
		public ?array $trustedUserCaKeys = null,
		/**
		 * Specify the vcpu to be used for the deployment. Vcpu must be at least 1. The input value will be rounded to
		 * the nearest 0.0001. The default will be the one configured for the account.
		 */
		public ?float $vcpu = null,
		/** Configuration properties for SSH'ing into a container with Wrangler */
		public ?ApplicationsModifyApplicationConfigurationWranglerSsh $wranglerSsh = null,
	) {
	}
}
