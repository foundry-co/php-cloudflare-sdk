<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class UpdateMeetingRequestRecordingConfigStorageConfig
{
	public function __construct(
		/** Type of storage media. */
		public \FoundryCo\Cloudflare\Enums\UpdateMeetingRequestRecordingConfigStorageConfigType $type,
		/**
		 * Access key of the storage medium. Access key is not required for the `gcs` storage media type.
		 *
		 * Note that this field is not readable by clients, only writeable.
		 */
		public ?string $accessKey = null,
		/**
		 * Authentication method used for "sftp" type storage medium
		 */
		public ?\FoundryCo\Cloudflare\Enums\UpdateMeetingRequestRecordingConfigStorageConfigAuthMethod $authMethod = null,
		/** Name of the storage medium's bucket. */
		public ?string $bucket = null,
		/** SSH destination server host for SFTP type storage medium */
		public ?string $host = null,
		/** SSH destination server password for SFTP type storage medium when auth_method is "PASSWORD". If auth_method is "KEY", this specifies the password for the ssh private key. */
		public ?string $password = null,
		/** Path relative to the bucket root at which the recording will be placed. */
		public ?string $path = null,
		/** SSH destination server port for SFTP type storage medium */
		public ?float $port = null,
		/** Private key used to login to destination SSH server for SFTP type storage medium, when auth_method used is "KEY" */
		public ?string $privateKey = null,
		/** Region of the storage medium. */
		public ?string $region = null,
		/** Secret key of the storage medium. Similar to `access_key`, it is only writeable by clients, not readable. */
		public ?string $secret = null,
		/** SSH destination server username for SFTP type storage medium */
		public ?string $username = null,
	) {
	}
}
