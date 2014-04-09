---
_layout: software-download
_template: software-project-download
title: Cmgui 3.0.0
intro: >
  This is the download page for the release of
  version 3.0.0 of Cmgui for Windows, Mac and Linux.
description:
navtitle: Cmgui 3.0.0
downloadlinks:
  -
    distrib_link: >
      http://sourceforge.net/projects/cmiss/files/cmgui/cmgui-3.0.0/cmgui-3.0.0-amd64-Windows.exe/download
    distrib_linktext: >
      Download Cmgui 3.0.0 installer for 64-bit Windows
    distrib_file_size: 4.6 MB
    distrib_platform: Windows 64 bit
  -
    distrib_link: >
      http://sourceforge.net/projects/cmiss/files/cmgui/cmgui-3.0.0/cmgui-3.0.0-amd64-Windows.zip/download
    distrib_linktext: >
      Download Cmgui 3.0.0 Zip archive for 64-bit Windows
    distrib_file_size: 6.2 MB
    distrib_platform: Windows 64 bit
  -
    distrib_link: >
      http://sourceforge.net/projects/cmiss/files/cmgui/cmgui-3.0.0/cmgui-3.0.0-x86_64-Ubuntu-10.04.4-LTS.deb/download
    distrib_linktext: >
      Download Cmgui-wx 3.0.0 debian installer package for Ubuntu 64 bit Linux
    distrib_file_size: 10.9 MB
    distrib_platform: Linux 64 bit
  -
    distrib_link: >
      http://sourceforge.net/projects/cmiss/files/cmgui/cmgui-3.0.0/cmgui-3.0.0-x86_64-Ubuntu-10.04.4-LTS.tar.gz/download
    distrib_linktext: >
      Download Cmgui-wx 3.0.0 tar.gz archive for Ubuntu 64 bit Linux
    distrib_file_size: 10.9 MB
    distrib_platform: Linux 64 bit
  -
    distrib_link: >
      http://sourceforge.net/projects/cmiss/files/cmgui/cmgui-3.0.0/cmgui-3.0.0-i386-Mac-OS-X-10.6.8.dmg/download
    distrib_linktext: >
      Download Cmgui-wx 3.0.0 dmg installer for Mac OS X (32-bit universal)
    distrib_file_size: 10.3 MB
    distrib_platform: Mac OS X 32 bit universal
  -
    distrib_link: >
      http://sourceforge.net/projects/cmiss/files/cmgui/cmgui-3.0.0/cmgui-3.0.0-i386-Mac-OS-X-10.6.8.tar.gz/download
    distrib_linktext: >
      Download Cmgui-wx 3.0.0 tar.gz archive for Mac OS X (32-bit universal)
    distrib_file_size: 10.2 MB
    distrib_platform: Mac OS X 32 bit universal
releasestatus: latest
---

#### Issues on Windows

This is a fully functional release of Cmgui v3.0, however on Windows it requires a particular installation of perl (and this will sometimes be needed in Linux). For Windows users without the correct version of perl already installed (meaning Cmgui fails to run), please contact the [Cmgui developers](support) to get support.

We intend to eliminate this issue in a future release.

### Installation

1. Download the installer package for your platform (preferred) or the zip/tar.gz archive.
2. In Windows, run the .exe and follow the installer wizard. On the Mac the dmg package should be automatically installed. In Linux, install the debian package with the following command line: `sudo dpkg -i cmgui-3*.deb`. The zip/tar.gz archives merely need to be uncompressed into the desired installation location and for paths and/or shortcuts to the cmgui application binary to be set up.
