---
_layout: support
title: Getting started with PyZinc
categories:
  - users guide
intro: >
  PyZinc is an extension library to the Zinc Library, enabling development of applications using the Zinc visulalisation library. Find out how to get started.
description:
navtitle: Getting started with PyZinc
---
PyZinc is the Python bindings for the Zinc library. The Zinc library is an advanced OpenGL visualisation library. It’s main use is for visualising Finite Element Models.

### What you need

- The Zinc C/C++ shared object library
- The PyZinc python bindings

The Zinc C/C++ library can be found in the downloads section here for most OSs. The PyZinc Python bindings for the zinc library can be found on PyPi. PyZinc will work with either version 2 or version 3 of Python.

### Installing the Zinc library and PyZinc

To install the Zinc library on Ubuntu:

> sudo dpkg -i zinc-X.X.X-x86_64.deb

To install the PyZinc extension module on Ubuntu do:

> tar -xzf PyZinc-X.X.X-Python-Y.Y.tar.gz
> cd PyZinc-X.X.X-Python-Y.Y
> python setup.py build
> sudo python setup.py install