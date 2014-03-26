---
_layout: software-download
_template: software-project-download
title: Cmgui 2.9.0
intro: >
  This is the official release page for
  version 2.9.0 of Cmgui. Cmgui is
  available for the Windows and Linux
  platforms.
description:
navtitle: Cmgui 2.9.0
downloadlinks:
  -
    distrib_link: >
      http://sourceforge.net/projects/cmiss/files/cmgui/cmgui-wx-2.9.0/cmgui-wx-2.9.0_win32.zip/download
    distrib_linktext: >
      Download Cmgui-wx 2.9.0 installer for
      Windows
    distrib_file_size: 5.3MB
    distrib_platform: Windows
  -
    distrib_link: >
      http://sourceforge.net/projects/cmiss/files/cmgui/cmgui-wx-2.9.0/cmgui-wx-2.9.0_x86_64-linux.tar.bz2/download
    distrib_linktext: >
      Download Cmgui-wx 2.9.0 64 bit binary
      for Linux
    distrib_file_size: 8.1MB
    distrib_platform: Linux 64 bit
  -
    distrib_link: >
      http://sourceforge.net/projects/cmiss/files/cmgui/cmgui-wx-2.9.0/cmgui-wx-2.9.0_i686-linux.tar.bz2/download
    distrib_linktext: >
      Download Cmgui-wx 2.9.0 32 bit binary
      for Linux
    distrib_file_size: 7.6MB
    distrib_platform: Linux 32 bit
releasestatus: latest
---
<dl class="inline-display clearfix"><dt>Status</dt> <dd>Final</dd> <dt>License</dt> <dd><a href="http://www.mozilla.org/MPL/" title="External link: Mozilla Public License.">MPL</a></dd> <dt>Release manager</dt> <dd>Alan Wu</dd></dl>

### Enhancements in this release

Cmgui 2.9.0 has now been released, we have made a number of improvements in this release, including field storage, 3D visualisation and a mathematical field abstraction layer.

Please read the help page for information about migrating from an older version of Cmgui to 2.9.0

Documentation for the APIs can be found at: www.cmiss.org/cmgui/wiki/cmguiZincAPIIntro/attachment_download/file

Please visit our forum if you have any question regarding Cmgui.

### Change log

##### API Changes

- (New) Add CMISS_SCENE_VIEWER_INPUT_MODIFIER_NONE mode (New) Enable more field types for create/define fields APIs

Added Features (some incomplete)

[3133](https://tracker.physiomeproject.org/show_bug.cgi?id=3133) FieldML 0.5 import, replaces FieldML 0.4 import.
[3184](https://tracker.physiomeproject.org/show_bug.cgi?id=3184) Allowed reading data into a specific region.

##### Bugs fixed

Fixed several bugs causing occasional crashes:

- [3115](https://tracker.physiomeproject.org/show_bug.cgi?id=3115) Key presses now get sent to scene viewer callbacks
- [3160](https://tracker.physiomeproject.org/show_bug.cgi?id=3160) Fixed crashes caused when passing a null field to Cmiss_field_module_create_abs
- [3167](https://tracker.physiomeproject.org/show_bug.cgi?id=3167) Fixed setting linear filter for image field has no effect
- [3181](https://tracker.physiomeproject.org/show_bug.cgi?id=3181) Fixed crashes when passing null context to Cmiss_context_get_default_region
- [3207](https://tracker.physiomeproject.org/show_bug.cgi?id=3207) Fixed streamlines not showing on 2D models

##### Improvements

- [2512](https://tracker.physiomeproject.org/show_bug.cgi?id=2512) Remove group regions, replaced by group fields
- [3213](https://tracker.physiomeproject.org/show_bug.cgi?id=3213) Improved field evaluation/assignment caching
- Removed cmgui-motif from current build
