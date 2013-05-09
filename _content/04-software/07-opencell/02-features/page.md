---
_layout: software-page
_template: page
_fieldset: page
title: Features
---
### Model editing

OpenCell can be used to edit CellML models using a tree-like representation of the model structure, which displays components, variables, and other elements of the model as nodes in the tree. OpenCell displays mathematical equations in a clear graphical way to ease the editing of the model mathematics.

### Running simulations

OpenCell can run simulations of CellML models, allowing the user to set parameters such as the integrator algorithm, step size and point density, start and end times, etc. OpenCell can graph the output of models and also output the results of simulations to files.

###Interactive model diagrams
<img src="/assets/img/software/opencell/680x280/opencell-session.png" alt="An interactive OpenCell session" />
Most of the models available in the CellML model repository come with OpenCell session files. These allow the user to interact with a diagram of the model structure - for example, the user may be able to click on individual membrane proteins in order to see the voltage traces for particular transporters.

###Code generation

OpenCell can be used to output models as C, MATLAB or Python code, with experimental support for FORTRAN77