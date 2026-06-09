<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum RadarAS112ResponseCodeItem: string
{
	case NOERROR = 'NOERROR';
	case FORMERR = 'FORMERR';
	case SERVFAIL = 'SERVFAIL';
	case NXDOMAIN = 'NXDOMAIN';
	case NOTIMP = 'NOTIMP';
	case REFUSED = 'REFUSED';
	case YXDOMAIN = 'YXDOMAIN';
	case YXRRSET = 'YXRRSET';
	case NXRRSET = 'NXRRSET';
	case NOTAUTH = 'NOTAUTH';
	case NOTZONE = 'NOTZONE';
	case BADSIG = 'BADSIG';
	case BADKEY = 'BADKEY';
	case BADTIME = 'BADTIME';
	case BADMODE = 'BADMODE';
	case BADNAME = 'BADNAME';
	case BADALG = 'BADALG';
	case BADTRUNC = 'BADTRUNC';
	case BADCOOKIE = 'BADCOOKIE';
}
