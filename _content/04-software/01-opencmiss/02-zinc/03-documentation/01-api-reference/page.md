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

Documentation of the [EX file format](http://www.cmiss.org/cmgui/wiki/TheCmguiEXFormatGuideExnodeAndExelemFiles) and descriptions of graphics attributes relevent to Zinc can be found on the [Cmgui documentation](http://abi-software-book.readthedocs.org/en/latest/cmgui/index.html).

### C++ and Python API Documentation

The [OpenCMISS-Zinc C++ API Documentation](http://cmiss.sourceforge.net/) can be used to look up classes and methods in C++, which are mostly applicable to Python (PyZinc).

Apart from syntactic and include/import differences, the main differences between using Zinc from C++ and Python are as follows:

1.  Python automatically cleans up strings returned by API methods e.g. getName().
2.  Python arrays/lists know their size so they are passed in 'as is', whereas variable-sized arrays in the C++ API are preceded by the array size argument:

    *C++:*

        const double xi[3] = { 0.5, 0.5, 0.5 };
        fieldcache.setMeshLocation(element, 3, xi);

    *Python:*

        xi = [0.5, 0.5, 0.5]
        fieldcache.setMeshLocation(element, xi)

3. C++ methods which return arrays do so by filling 'out' array arguments, and variable sized arrays are preceded by the array size argument. Python does not permit arguments to be modified, so these are appended to the return value, however the array size to return must be specified if it is present in the C++ API:

    *C++:*

        double outValues[3];
        int result = field.evaluateReal(fieldcache, 3, outValues);

    *Python:*

        result, outValues = field.evaluateReal(fieldcache, 3)

4. Python enumerations are separated by '.' from the class name. This example also shows that fixed size arrays do not need the size passed to the C++ API:

    *C++:*

        const double orange[3] = { 1.0, 0.5, 0.0 };
        material.setAttributeReal3(Material::ATTRIBUTE_DIFFUSE, orange);

    *Python:*

        orange = [ 1.0, 0.5, 0.0 ]
        material.setAttributeReal3(Material.ATTRIBUTE_DIFFUSE, orange)

### C API Documentation

The C API documentation can be downloaded in this [large single page](capi) (*Warning: Can be slow to load*).
