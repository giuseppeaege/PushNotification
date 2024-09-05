<?php

return [
  'gcm' => [
      'priority' => 'normal',
      'dry_run' => false,
      'apiKey' => 'My_ApiKey',
      'timeout' => 5
  ],
  'fcm' => [
      'priority' => 'normal',
      'dry_run' => false,
      'apiKey' => 'My_ApiKey',
      'timeout' => 5
  ],
  'apn' => [
      'certificate' => __DIR__ . '/iosCertificates/apns-dev-cert.pem',
      'passPhrase' => 'secret', //Optional
      'passFile' => __DIR__ . '/iosCertificates/yourKey.pem', //Optional
      'dry_run' => true,
      'timeout' => 5
  ],
  'fcmv1' => [
      'priority' => 'normal',
      'dry_run' => false,
      'projectId' => 'my-project-id',
      'jsonFile' => __DIR__ . '/fcmCertificates/file.json',
      // 'concurrentRequests' => 5, // Optional, default 10
      // Optional: Default Guzzle request options for each FCM request
      // See https://docs.guzzlephp.org/en/stable/request-options.html
      'guzzle' => [],
  ],
];
