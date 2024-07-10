# TextformatterTokens Module

## Overview
The TextformatterTokens module allows other modules to register tokens and replace them with actual values.

## Installation
1. Enable the `TextformatterTokens` module.
2. Enable the `SiteTokens` module.
3. Enable the `TextformatterTokens` text formatter for a field.

## Usage
Use tokens provided by the `SiteTokens` module inside a field that has the `TextformatterTokens` text formatter enabled.
Save and display your page. The tokens should be replaced with the actual content.

## Example Tokens
- `[site:name]`
- `[page id=123]` where `id` is the ID of the page you want to embed its body field.

## Debugging
You can view logs under your ProcessWire admin dashboard at Setup > Logs > `tokens`.

## Writing own tokens
To create custom tokens, refer to the `SiteTokens.module` file for an example implementation.