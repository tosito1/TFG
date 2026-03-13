$metadata['https://tfg.antoniojose.net/idp'] = [
    'entityid' => 'https://tfg.antoniojose.net/idp',
    'contacts' => [
        [
            'contactType' => 'technical',
            'givenName' => 'Antonio Jose Muriel Galvez',
            'emailAddress' => [
                'antoniojose.muriel@alu.uhu.es',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://192.168.106.135/simplesaml/module.php/saml/idp/singleSignOnService',
        ],
    ],
    'SingleLogoutService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://192.168.106.135/simplesaml/module.php/saml/idp/singleLogout',
        ],
    ],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIICujCCAiOgAwIBAgIBADANBgkqhkiG9w0BAQ0FADB6MQswCQYDVQQGEwJlczEPMA0GA1UECAwGSHVlbHZhMRQwEgYDVQQKDAthbnRvbmlvam9zZTEWMBQGA1UEAwwNc2ltcGxlc21hbHBocDEsMCoGCSqGSIb3DQEJARYdYW50b25pb2pvc2UubXVyaWVsQGFsdS51aHUuZXMwHhcNMjQwMzA2MTIwNzM1WhcNMjUwMzA2MTIwNzM1WjB6MQswCQYDVQQGEwJlczEPMA0GA1UECAwGSHVlbHZhMRQwEgYDVQQKDAthbnRvbmlvam9zZTEWMBQGA1UEAwwNc2ltcGxlc21hbHBocDEsMCoGCSqGSIb3DQEJARYdYW50b25pb2pvc2UubXVyaWVsQGFsdS51aHUuZXMwgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAMkjTkvC9KycekEiQQrfHQx2tAf5neyUvFvLNXBYOJtaAicvK6HWL1wcsSgbwpSJbBGiBxHvj6cMSLjiKE6likWD8zKiPCa+m7ZRIWsbTOXvbwD5B4BLVYFZszd4bA1XyVMjxYu2r4GyAdb8R/7iz5HEU6/gOAUgO4Ls9Gh9FjMrAgMBAAGjUDBOMB0GA1UdDgQWBBTBZ2g/ROnSp2s7PdINWIM2D5465DAfBgNVHSMEGDAWgBTBZ2g/ROnSp2s7PdINWIM2D5465DAMBgNVHRMEBTADAQH/MA0GCSqGSIb3DQEBDQUAA4GBAL0Lm/bI7Y7f/m9xGl+iNQ1UTIr+PhCjBM5QEh9VmQ93gpxt7LI+qJvyqEF76UmaI8TJpA8Pe1kjA2WduL7iotfwtCklNLzY2v0b6eLIahJiNGHQ0LZwJfnJqGBnPdNKO9H4nQvYIa0QnBq86VhuEioqWJzxq1lx6qeWSTqhY/U/',
        ],
        [
            'encryption' => true,
            'signing' => false,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIICujCCAiOgAwIBAgIBADANBgkqhkiG9w0BAQ0FADB6MQswCQYDVQQGEwJlczEPMA0GA1UECAwGSHVlbHZhMRQwEgYDVQQKDAthbnRvbmlvam9zZTEWMBQGA1UEAwwNc2ltcGxlc21hbHBocDEsMCoGCSqGSIb3DQEJARYdYW50b25pb2pvc2UubXVyaWVsQGFsdS51aHUuZXMwHhcNMjQwMzA2MTIwNzM1WhcNMjUwMzA2MTIwNzM1WjB6MQswCQYDVQQGEwJlczEPMA0GA1UECAwGSHVlbHZhMRQwEgYDVQQKDAthbnRvbmlvam9zZTEWMBQGA1UEAwwNc2ltcGxlc21hbHBocDEsMCoGCSqGSIb3DQEJARYdYW50b25pb2pvc2UubXVyaWVsQGFsdS51aHUuZXMwgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAMkjTkvC9KycekEiQQrfHQx2tAf5neyUvFvLNXBYOJtaAicvK6HWL1wcsSgbwpSJbBGiBxHvj6cMSLjiKE6likWD8zKiPCa+m7ZRIWsbTOXvbwD5B4BLVYFZszd4bA1XyVMjxYu2r4GyAdb8R/7iz5HEU6/gOAUgO4Ls9Gh9FjMrAgMBAAGjUDBOMB0GA1UdDgQWBBTBZ2g/ROnSp2s7PdINWIM2D5465DAfBgNVHSMEGDAWgBTBZ2g/ROnSp2s7PdINWIM2D5465DAMBgNVHRMEBTADAQH/MA0GCSqGSIb3DQEBDQUAA4GBAL0Lm/bI7Y7f/m9xGl+iNQ1UTIr+PhCjBM5QEh9VmQ93gpxt7LI+qJvyqEF76UmaI8TJpA8Pe1kjA2WduL7iotfwtCklNLzY2v0b6eLIahJiNGHQ0LZwJfnJqGBnPdNKO9H4nQvYIa0QnBq86VhuEioqWJzxq1lx6qeWSTqhY/U/',
        ],
    ],
];
