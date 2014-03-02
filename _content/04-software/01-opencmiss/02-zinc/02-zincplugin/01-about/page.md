---
_layout: software-page
_template: page
_fieldset: page
title: About the Zinc plugin
description:
intro: >
  The browser plugin that brings the cmgui
  visualisation engine to the web.
navtitle: About the Zinc plugin
---
### Overview

The Zinc plugin is a browser plugin that embeds the cmgui visualisation engine.

The Zinc plugin has recently been completely re-written as an NPruntime plugin, replacing the old Firefox extension. This plugin should work on a range of browsers (Firefox, Opera, Google Chrome, Safari) and a range of operating systems. This re-write will also move the plugin more in line with current best practices for plugin development.

###Features
<ul class="check dotted"><li>Broader browser support - the Zinc plugin now runs in Chrome, FireFox and Safari</li><li>Large and well-documented API</li><li>Auto update</li></ul>

### Roadmap

#### Major items for Zinc plugin 0.8.0.0 (planning)

- Full support for FieldML

#### Major items for Zinc plugin 0.7.0.0 (completed)

- Rewritten using npruntime
- Added a large number of APIs
- Run on Chrome, FireFox and Safari

#### Major items for Zinc plugin 0.6.x (completed)

- Provide from addons.mozilla.org and auto update
- Use code signing certificates to avoid the about:config requirement on installation.

### History

The idea, proof of concept and early generations of the cmgui web browser extension for the Mozilla platform were developed by ZEST. The project was code named ZINC. ZEST released the source code of ZINC under open source license for the benifit of the Physiome Project.

Andrew Miller, employed at the Auckland Bioengineering Institute, took the development lead of ZINC and re-engineered it, resulting in mozCmgui.

Shane Blackett, took that, renamed it back to ZINC and reimplemented it without CORBA but maintaining the same interfaces.

Peter Bier has been adding interface components to support image processing in the [Digitiser](http://cmiss.bioeng.auckland.ac.nz/development/examples/a/digitise).

In November 2007 ZINC was accepted as a public [Firefox addon](https://addons.mozilla.org/en-US/firefox/addon/zinc/).

Shane Blackett initiated a complete rewrite of ZINC using NPAPIs and targeted to make ZINC a true plugin.

Alan Wu is continued the effort of changing ZINC to a plugin and released ZINC-npruntime in April 2012.

Zinc 0.7.0.0 was released on 16 April 2012 and is built against libZinc revision 9199.

The Zinc plugin is maintained by [Alan Wu](http://www.abi.auckland.ac.nz/uoa/alan-wu).