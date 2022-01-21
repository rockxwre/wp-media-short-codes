# WordPress Media short codes
This is a very simple plugin, which I created for my own personal use to make it easier to embed external media sources into a WordPress website.

Currently the following platforms are supported:
- Odysee
- Podbean
- SoundCloud
- YouTube

## Odysee
Short code: 
```
[embed_odysee media_url="<embed url>]"
```

Example:
```
[embed_odysee media_url="https://odysee.com/$/embed/sec/0ff7fa7bc5a959ec77751c23fb2f969d40086b87?r=CgycoGEcdALJyQyXBTVNeR5b1bbgQjLS"]
```

## Podbean
Short code: 
```
[embed_podbean media_url="<embed url>] title="<an optional title>"]
```

## SoundCloud
Short code: 
```
[embed_soundcloud media_url="<embed url>" url="<url of the webversion>" title="<title of the audio>" account_title="<name of the SoundCloud account>" account_url="<url of the SoundCloud account>"]
```
## YouTube
Short code:
```
[embed_youtube media_url="<embed url>"]
```