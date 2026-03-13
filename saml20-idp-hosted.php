<?php

/**
 * SAML 2.0 IdP configuration for SimpleSAMLphp.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-hosted
 */

$metadata['https://tfg.antoniojose.net/idp'] = array(
 'host' => '__DEFAULT__',
'privatekey' => '/var/simplesamlphp/cert/server.key',
'certificate' => '/var/simplesamlphp/cert/server.pub',
 'auth' => 'example-userpass',
);
