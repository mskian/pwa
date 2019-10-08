<?php

/*
 * This file is part of mskian/pwa
 *
 * Copyright (c) 2019 santhoshveer.com.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Flarum\Extend;
use Flarum\Frontend\Document;

return [
    (new Extend\Frontend('forum'))
        ->content(function (Document $document) {
            $document->head[] = '
            <meta name="robots" content="index, follow">
            <meta property="og:image" content="https://forum.santhoshveer.com/assets/site-image-6awm3gzz.png">
            <meta name="mobile-web-app-capable" content="yes">
            <meta name="application-name" content="San Forum">
            <meta name="apple-mobile-web-app-capable" content="yes">
            <meta name="apple-mobile-web-app-status-bar-style" content="white-translucent">
            <meta name="apple-mobile-web-app-title" content="San Forum">
            <script type="application/ld+json">
            {
              "@context": "http:\/\/schema.org",
              "@type": "WebSite",
              "url": "https:\/\/forum.santhoshveer.com\/",
              "potentialAction": {
                "@type": "SearchAction",
                "target": "https:\/\/forum.santhoshveer.com\/?q={search_term_string}",
                "query-input": "required name=search_term_string"
              }
            }
            </script>
            <link rel="apple-touch-icon" href="/assets/extensions/mskian-pwa/Icon-48.png">
            <link rel="apple-touch-icon" sizes="72x72" href="/assets/extensions/mskian-pwa/Icon-72.png">
            <link rel="apple-touch-icon" sizes="96x96" href="/assets/extensions/mskian-pwa/Icon-96.png">
            <link rel="apple-touch-icon" sizes="144x144" href="/assets/extensions/mskian-pwa/Icon-144.png">
            <link rel="apple-touch-icon" sizes="192x192" href="/assets/extensions/mskian-pwa/Icon-192.png">
            <link rel="apple-touch-icon" sizes="256x256" href="/assets/extensions/mskian-pwa/Icon-256.png">
            <link rel="apple-touch-icon" sizes="512x512" href="/assets/extensions/mskian-pwa/Icon-512.png">
            <link rel="manifest" href="/site.webmanifest">
            ';
        })
        ->content(function (Document $document) {
          $document->foot[] = '<script>
if ("serviceWorker" in navigator) {
if (navigator.serviceWorker.controller) {
  console.log("Active service worker found, no need to register");
} else {
  // Register the service worker
  navigator.serviceWorker
    .register("/sw.js", {
      scope: "/"
    })
    .then(function (reg) {
      console.log("Service worker has been registered for scope: " + reg.scope);
    });
}
}
</script>';
      })
];