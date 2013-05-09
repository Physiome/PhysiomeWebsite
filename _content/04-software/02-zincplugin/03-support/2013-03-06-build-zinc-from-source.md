---
_layout: support
title: Building the Zinc plugin from source
categories:
  - developers guide
intro: >
  Follow our step-by-step guide to
  building the Zinc plugin from source
  code for the Mozilla platform.
description:
navtitle:
---
Zinc is the cmgui extension for the mozilla platform. Zinc depends on cmgui and firefox so both these applications need to be built first. Building everything from scratch can take anything from several hours to several days depending on how smoothly things go.

1. Building cmgui. See [www.cmiss.org/cmgui/wiki/BuildingCmguiFromSource](http://www.cmiss.org/cmgui/wiki/BuildingCmguiFromSource) (there are also older [cmgui](http://www.cmiss.org/cmgui/zinc/Cmgui) build instructions)
2. Building [Firefox](http://www.cmiss.org/cmgui/zinc/Firefox)
3. [Building Zinc NPRuntime](http://www.cmiss.org/cmgui/zinc/BuildingZincNPRuntime) (0.7.0 and above) or [Building Zinc](http://www.cmiss.org/cmgui/zinc/BuildingZinc) (0.6.x and below)

Note that there is some work underway to build Zinc for Windows using the standard [Windows mozilla build environment](http://www.cmiss.org/cmgui/zinc/WindowsMozillaBuildEnvironment).