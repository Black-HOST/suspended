# SUSPENDED.page

Manage Domains Effortlessly with the SUSPENDED.page add-on for WHMCS

Tired of the hassle of manually suspending domains in WHMCS? 
The SUSPENDED.page add-on simplifies the process by giving you a single button that: 

- Suspends any domain with a single click, saving you and your support team time and effort.
- Provides an authoritative DNS service and SSL-ready web server with zero requirements and dependencies, meaning all traffic to that domain will be handled via HTTPS and offloaded from your network.
- Provides a lightweight but informative landing page for domain owners and visitors, explaining the domain's status with full transparency. This can potentially reduce damages by informing potential victims of the illicit nature of the domain they visited in the past, prompting them to take proactive measures.


## How It Works

All that this add-on does (for now) is, updating the domain status and its nameserves to the authoritative DNS servers of suspended.page:

```
ns1.suspended.page
ns2.suspended.page
```

The domain status is set to "**Fraud**" so the customer can't perform any actions from the WHMCS client area. Once the DNS changes are propagated, the visitors of the suspended domain will start to see the following content: 

![SUSPENDED.page DEMO](https://suspended.page/images/mockup.svg "Example for suspended domain")In later releases additional features are planed, feel free to check them or add any other suggestions [here](https://github.com/Black-HOST/suspended/issues)

## Compatibility

This add-on follows the standard WHMCS add-on development [documentation](https://developers.whmcs.com/addon-modules/) in order to be compatible even with legacy WHMCS versions such starting from WHMCS 7 up to the latest WHMCS 8 version at the moment.

| WHMCS VERSION | COMPATIBILITY |
|---------------|---------------|
|      7.x      |       ✅       |
|      8.x      |       ✅       |

## Installation

The installation is pretty much straight forward, all you need to do is to get the [latest release from](https://github.com/Black-HOST/suspended/releases/latest) and extract it's contents into the add-on WHMCS directory: 

```
/ -> WHMCS root
├─ modules/
│  ├─ addons/
│  │  ├─ suspended/
...
```

Once the code is uploaded, go to into the `WHMCS Admin -> System Settings -> Addon Modules` and enable the Domain Suspension add-on. 

## Support

If you encounter any issues or have any questions, please open an issue on the GitHub repository.

## Contributing

Contributions are welcome! If you'd like to contribute to the project, please fork the repository and submit a pull request.

> **Disclosure:** This project is sponsored by [BlackHOST](https://black.host/programs/powered-by-blackhost).

