# IPPiyo

IPPiyo is a small open-source IP address information page based off the classic style of IPChicken.

It displays information already available to the web server, including:

- Your IP address
- Reverse DNS / name address
- Remote connection port
- Browser User-Agent

IPPiyo is designed to be simple, self-hostable, and usable in old browsers.
There is no official IPPiyo instance available (yet?).

## Requirements

A web server with PHP support.

No database, JavaScript framework, package manager, or external service is required.

## Installation

Clone or download the repository into your web server's document root:

```sh
git clone https://github.com/rtbun/ippiyo.git
```

Then serve the directory through PHP.

When testing locally, IPPiyo **WILL** display a private or loopback address instead of your public IP.

## Privacy

IPPiyo itself does not require accounts or a visitor database.

The web server, reverse proxy, PHP host, or hosting provider used by an IPPiyo instance may still create normal access and error logs. The person operating each instance is responsible for its server configuration and log retention.

## Why?

No offense to the original creators of IPChicken, but:
- IPChicken is no longer loadable in older browsers, and has downgraded their design over time, with rounded corners and such.
- IPChicken uses Cloudflare.
- IPChicken sometimes provides inaccurate information for me, or just doesn't load on certain days.
- Sometimes, you just want to see your IP without all this bull$*#@!

IPPiyo is OPEN !
