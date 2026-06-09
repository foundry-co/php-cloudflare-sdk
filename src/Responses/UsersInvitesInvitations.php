<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class UsersInvitesInvitations
{
	public function __construct(
		/** ID of the user to add to the organization. */
		public string $invitedMemberId,
		/** ID of the organization the user will be added to. */
		public string $organizationId,
		/** When the invite is no longer active. */
		public ?\DateTimeImmutable $expiresOn = null,
		/** Invite identifier tag. */
		public ?string $id = null,
		/** The email address of the user who created the invite. */
		public ?string $invitedBy = null,
		/** Email address of the user to add to the organization. */
		public ?string $invitedMemberEmail = null,
		/** When the invite was sent. */
		public ?\DateTimeImmutable $invitedOn = null,
		public ?bool $organizationIsEnforcingTwofactor = null,
		/** Organization name. */
		public ?string $organizationName = null,
		/** List of role names the membership has for this account. */
		public ?array $roles = null,
		/** Current status of the invitation. */
		public ?\FoundryCo\Cloudflare\Enums\UsersInvitesInvitationsStatus $status = null,
	) {
	}
}
