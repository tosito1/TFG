<?php

/**
 * SAML 2.0 remote SP metadata for SimpleSAMLphp.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-sp-remote
 */

/*
 * Example SimpleSAMLphp SAML 2.0 SP
 */

$metadata['https://tfg.antoniojose.sp.net/'] = [
    'SingleLogoutService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://192.168.106.133/simplesaml/module.php/saml/sp/saml2-logout.php/default-sp',
        ],
    ],
    'AssertionConsumerService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://192.168.106.133/simplesaml/module.php/saml/sp/saml2-acs.php/default-sp',
            'index' => 0,
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
            'Location' => 'https://192.168.106.133/simplesaml/module.php/saml/sp/saml2-acs.php/default-sp',
            'index' => 1,
        ],
    ],
    'contacts' => [
        [
            'emailAddress' => 'antoniojose.muriel@alu.uhu.es',
            'givenName' => 'Antonio Jose Muriel Galvez',
            'contactType' => 'technical',
        ],
    ],
    'certData' => 'MIICujCCAiOgAwIBAgIBADANBgkqhkiG9w0BAQ0FADB6MQswCQYDVQQGEwJlczEPMA0GA1UECAwGSHVlbHZhMRQwEgYDVQQKDAthbnRvbmlvam9zZTEWMBQGA1UEAwwNc2ltcGxlc21hbHBocDEsMCoGCSqGSIb3DQEJARYdYW50b25pb2pvc2UubXVyaWVsQGFsdS51aHUuZXMwHhcNMjQwMzA2MTIwNzM1WhcNMjUwMzA2MTIwNzM1WjB6MQswCQYDVQQGEwJlczEPMA0GA1UECAwGSHVlbHZhMRQwEgYDVQQKDAthbnRvbmlvam9zZTEWMBQGA1UEAwwNc2ltcGxlc21hbHBocDEsMCoGCSqGSIb3DQEJARYdYW50b25pb2pvc2UubXVyaWVsQGFsdS51aHUuZXMwgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAMkjTkvC9KycekEiQQrfHQx2tAf5neyUvFvLNXBYOJtaAicvK6HWL1wcsSgbwpSJbBGiBxHvj6cMSLjiKE6likWD8zKiPCa+m7ZRIWsbTOXvbwD5B4BLVYFZszd4bA1XyVMjxYu2r4GyAdb8R/7iz5HEU6/gOAUgO4Ls9Gh9FjMrAgMBAAGjUDBOMB0GA1UdDgQWBBTBZ2g/ROnSp2s7PdINWIM2D5465DAfBgNVHSMEGDAWgBTBZ2g/ROnSp2s7PdINWIM2D5465DAMBgNVHRMEBTADAQH/MA0GCSqGSIb3DQEBDQUAA4GBAL0Lm/bI7Y7f/m9xGl+iNQ1UTIr+PhCjBM5QEh9VmQ93gpxt7LI+qJvyqEF76UmaI8TJpA8Pe1kjA2WduL7iotfwtCklNLzY2v0b6eLIahJiNGHQ0LZwJfnJqGBnPdNKO9H4nQvYIa0QnBq86VhuEioqWJzxq1lx6qeWSTqhY/U/',
];
