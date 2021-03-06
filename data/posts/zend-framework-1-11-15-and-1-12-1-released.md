---
layout: post
title: Zend Framework 1.11.15 and 1.12.1 Released!
date: 2012-12-18T20:00:00Z
update: 2012-12-18T20:00:00Z
author: Matthew Weier O'Phinney
url_author: https://mwop.net/
permalink: /blog/zend-framework-1-11-15-and-1-12-1-released.html
categories:
- blog
- released

---

 The Zend Framework community is pleased to announce the immediate availability of Zend Framework versions 1.11.15 and 1.12.1! Packages and installation instructions are available at:

- [http://framework.zend.com/downloads/latest](/downloads/latest)

 These releases contain security fixes; please read on for details.

Security Announcement
---------------------

 These releases are security releases, and contain fixes to both the `Zend_Feed_Rss` and `Zend_Feed_Atom` classes. If you are using either, and particularly if you are instantiating them directly (instead of via `Zend_Feed::import()`)we recommend upgrading immediately. For more information, please read the [ZF2012-05 advisory details](/security/advisory/ZF2012-05). Thanks goes to Yury Dyachenko at Positive Research Center for alerting us of the issues and working with us on appropriate fixes.

Thank You!
----------

 Many thanks to all contributors to this release!
