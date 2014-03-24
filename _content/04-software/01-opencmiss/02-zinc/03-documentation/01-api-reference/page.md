---
_layout: software-index
_template: software-project-index
_fieldset: page
title: OpenCMISS-Zinc API Reference
intro: >
  The Zinc library provides a complete API
  for creating software to interact with
  and visualise complex models.
description: 
navtitle: 
---

### Introduction

The following document gives an introduction to the OpenCMISS-Zinc library including the concepts behind its API, suitable for most levels of users:

[Introduction to OpenCMISS-Zinc v3.0.pdf](http://sourceforge.net/projects/cmiss/files/Documentation/3.0.0/Introduction%20to%20OpenCMISS-Zinc%20v3.0.pdf/download) 
\[[*Alt*](ftp://ftp.bioeng.auckland.ac.nz/cmiss/zinclibrary/release/Introduction%20to%20OpenCMISS-Zinc%20v3.0.pdf)\]

Its contents cover:

 *       An overview of what the library offers.
 *       The object-method style of the API.
 *       Patterns of API use and best practices.
 *       Differences between using Zinc from C, C++ and Python.
 *       A simple example in each language, and links to more examples.
 *       Plain language descriptions of the main Zinc object types.

### C++ and Python API Documentation

We will soon offer full C++ API documentation here, applicable also to Python (PyZinc) with the few differences, mainly in passing arrays, noted in the above Introduction document.

In the interim one may figure out the C++ API from either by the systematic differences to the C API (see below), or by inspecting the methods in the C++ classes in the .hpp headers in the installed zinc API folder, which can also be browsed in the [Zinc SVN repository](https://svn.physiomeproject.org/svn/cmiss/zinc/library/trunk/core/source/api/zinc/).

### C API Documentation

The C API documentation can be downloaded in this [large single page](capi) (*Warning: Can be slow to load*).
