# Use custom error handler in TYPO3

Shows an example configuration of a custom error handler (TYPO3 CMS)

## What does it do?

Adds a custom error handler which redirect to a predefined page based on given error and/or status code.

## Requirements

This example uses no 3rd party libraries.

## Site configuration

Add the following snippet to your site configuration (e.g. `typo3conf/sites/<your_site>/config.yaml`)

```yaml
errorHandling:
    - errorCode: 404
      errorHandler: PHP
      errorPhpClassFQCN: Passionweb\CustomErrorHandler\Error\CustomErrorHandler
    - errorCode: 403
      errorHandler: PHP
      errorPhpClassFQCN: Passionweb\CustomErrorHandler\Error\CustomErrorHandler
```

## Extension settings

There are no extension settings available.

## Troubleshooting and logging

If something does not work as expected take a look at the log file.
Every problem is logged to the TYPO3 log (normally found in `var/log/typo3_*.log`)

## Achieving more together or Feedback, Feedback, Feedback

I'm grateful for any feedback! Be it suggestions for improvement, requests or just a (constructive) feedback on how good or crappy this snippet/repo is.

Feel free to send me your feedback to [service@passionweb.de](mailto:service@passionweb.de "Send Feedback") or [contact me on Slack](https://typo3.slack.com/team/U02FG49J4TG "Contact me on Slack")
