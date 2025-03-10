# dokuwiki-plugin-toc-shortcode
Replaces
```
{inhaltsverzeichnis}
```

with an nspages String

```
<nspages -sidebar -hideNoPages -hideNoSubns -simpleList -h1 -subns -exclude:[start sidebar] -textNS="" -textPages="">
```
