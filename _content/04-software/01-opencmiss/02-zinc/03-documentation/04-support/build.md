---
_layout: software-index
_template: software-project-index
_fieldset: page
title: OpenCMISS-Zinc and Cmgui
description:
intro: >
  Build Zinc, PyZinc and Cmgui on Linux, Mac or Windows.
navtitle: Building OpenCMISS-Zinc and Cmgui
---
There are three stages to complete to build your own version of Zinc, plus an extra stage for each of PyZinc and Cmgui.

These instructions assume you have created a root directory somewhere under which the build will be performed, and here this directory is referred to as <code><opencmiss\></code>. When substituting in your directory use the full *absolute* path because this will eliminate any confusion that arises when using relative paths with CMake. It is suggested you copy these instructions into a text editor, do a global search and replace on this path, and then paste commands into the console.

Notes:

1. The build instructions given here are written for a console application with commands entered at the command line.  These instructions are therefore most suitable for Linux and Mac OS X. They can be re-interpreted and adjusted for use on Windows; you may prefer to run cmake-gui and enter the paths and options interactively.

2. These instructions are for the default configuration (Release or Debug, depending on toolchain). For multi-configuration tools such as Visual Studio, other configurations can be built by invoking e.g. '<code>cmake --build --config Release .</code>'. Note that you need Debug Utilities and Dependencies for Debug Zinc and Cmgui, and similar for Release. In Windows you **must first** build the Release configuration of the Dependencies otherwise CMake will not be able to find any dependency libraries, including dependencies of dependencies!

3. If you intend to build Cmgui, follow the additional notes for adding its extra dependencies and building a static version of Zinc.

4. If you are using the GNU toolchain you may want to speed up the build by running it in parallel. Do this by appending to the build commands the options '<code>-- -j -lN</code>', where N is one less than the number of processor cores that the build machine has. For 3 threads you would run '<code>cmake --build . -- -j -l3</code>'.

Prerequisites
-------------

* CMake >= 2.8.12
* Subversion (svn)
* A Toolchain, (GNU, VisualStudio, Clang)
* SWIG (PyZinc only)
* Installing Perl (Cmgui on Windows only - see below)

Stage 1: Utilities
------------------

    mkdir -p <opencmiss>/utilities/manage/build
    cd <opencmiss>/utilities/manage
    svn co https://svn.physiomeproject.org/svn/opencmiss/utilities/trunk/ . --depth=files
    cd build
    cmake ..
    cmake --build .

Stage 2: Dependencies
---------------------

    mkdir -p <opencmiss>/dependencies/manage/build
    cd <opencmiss>/dependencies/manage
    svn co https://svn.physiomeproject.org/svn/opencmiss/dependencies/trunk/ . --depth=files
    cd build
    cmake -DDEPENDENCIES_ROOT=<opencmiss>/dependencies -DDEPENDENCIES_MODULE_PATH=<opencmiss>/utilities/cmake-2.8/Modules -DDEPENDENCIES_SVN_REPO=https://svn.physiomeproject.org/svn/opencmiss/dependencies/trunk/ ..
    cmake --build .

**Note:** To later build Cmgui you will need to add <code>-DBUILD_CMGUI_DEPS=TRUE</code> to the configuration command on the second to last line, which triggers the build of wxWidgets. At this time there is a minor problem with building expat for wxWidgets. In Linux this can be fixed by going to <opencmiss\>/dependencies/build/wxwidgets-2.8.10/src/expat, executing 'make' and re-running the final dependency build command above.

Stage 3: Zinc
-------------

    mkdir -p <opencmiss>/zinc
    mkdir -p <opencmiss>/build/zinc/library
    cd <opencmiss>/zinc
    svn co https://svn.physiomeproject.org/svn/cmiss/zinc/library/trunk/ library
    cd <opencmiss>/build/zinc/library
    cmake -DZINC_DEPENDENCIES_INSTALL_PREFIX=<opencmiss>/dependencies/install/ -DZINC_MODULE_PATH=<opencmiss>/utilities/cmake-2.8/Modules <opencmiss>/zinc/library
    cmake --build .

**Note:** To later build Cmgui you will need to add <code>-DZINC_BUILD_STATIC_LIBRARY=TRUE</code> to the configuration command on the second to last line. Cmgui links to a static version of the Zinc library.

Stage 4: PyZinc
---------------

    mkdir -p <opencmiss>/zinc
    mkdir -p <opencmiss>/build/zinc/bindings
    cd <opencmiss>/zinc
    svn co https://svn.physiomeproject.org/svn/cmiss/zinc/bindings/trunk/ bindings
    cd <opencmiss>/build/zinc/bindings
    cmake -DZinc_DIR=<opencmiss>/build/zinc/library -DPYZINC_MODULE_PATH=<opencmiss>/utilities/cmake-2.8/Modules <opencmiss>/zinc/bindings/python
    cmake --build .

**Note:**  SWIG and CMake together do not correctly detect when dependent files are out of date and so at times the build will not proceed correctly.  To work around this always do a '<code>make clean</code>' (or equivalent) before rebuilding PyZinc.

Stage 5: Cmgui
--------------

Cmgui requires a static version of the Zinc library and a number of dependencies that are not required for Zinc alone, if you have taken heed of the notes in the build instructions for the dependencies and Zinc itself, then you will be able to build Cmgui following these instructions.

    mkdir -p <opencmiss>/build/cmgui
    mkdir -p <opencmiss>/build/perl_interpreter
    cd <opencmiss>
    svn co https://svn.physiomeproject.org/svn/cmiss/cmgui/trunk/ cmgui
    svn co https://svn.physiomeproject.org/svn/cmiss/perl_interpreter/trunk/ perl_interpreter
    cd <opencmiss>/build/perl_interpreter
    cmake -DPERL_INTERPRETER_INSTALL_PREFIX=<opencmiss>/dependencies/install/ -DPERL_INTERPRETER_MODULE_PATH=<opencmiss>/utilities/cmake-2.8/Modules <opencmiss>/perl_interpreter
    cmake --build .
    cmake --build . --target install
    cd <opencmiss>/build/cmgui
    cmake -DZinc_DIR=<opencmiss>/build/zinc/library -DUSE_PERL_INTERPRETER=TRUE -Dcmiss_perl_interpreter_DIR=<opencmiss>/dependencies/install/lib/cmake -DWXWIDGETS_INSTALL_PREFIX=<opencmiss>/dependencies/install/ -DWX_USER_INTERFACE=TRUE <opencmiss>/cmgui
    cmake --build .

**Note:** When building the perl interpreter on Windows it must be built from the VisualStudio command prompt and it *must* use the 'NMake Makefiles' generator.  At the current time you also must use a perl library that was built with nmake.  ActiveState perl versions 5.12, 5.14, 5.16 were all built with nmake and are suitable for our purpose.
