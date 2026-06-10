<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum RadarCertificateTransparencySignatureAlgorithmItem: string
{
	case DSASHA1 = 'DSA_SHA_1';
	case DSASHA256 = 'DSA_SHA_256';
	case ECDSASHA1 = 'ECDSA_SHA_1';
	case ECDSASHA256 = 'ECDSA_SHA_256';
	case ECDSASHA384 = 'ECDSA_SHA_384';
	case ECDSASHA512 = 'ECDSA_SHA_512';
	case PSSSHA256 = 'PSS_SHA_256';
	case PSSSHA384 = 'PSS_SHA_384';
	case PSSSHA512 = 'PSS_SHA_512';
	case RSAMD2 = 'RSA_MD2';
	case RSAMD5 = 'RSA_MD5';
	case RSASHA1 = 'RSA_SHA_1';
	case RSASHA256 = 'RSA_SHA_256';
	case RSASHA384 = 'RSA_SHA_384';
	case RSASHA512 = 'RSA_SHA_512';
}
