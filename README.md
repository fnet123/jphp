JPHP - an implementation of PHP
===============================

[![Build Status](https://travis-ci.org/jphp-compiler/jphp.svg?branch=master)](https://travis-ci.org/jphp-compiler/jphp) [ ![Download](https://api.bintray.com/packages/dim-s/maven/jphp-compiler/images/download.svg) ](https://bintray.com/dim-s/maven/jphp-compiler/_latestVersion) [![Documentation Status](https://readthedocs.org/projects/jphp-docs/badge/?version=latest)](https://readthedocs.org/projects/jphp-docs/?badge=latest)

JPHP is a new implementation for PHP which uses the Java VM. It supports many features of the PHP language (5.6+).

How does it work? JPHP is a compiler like `javac`, it compiles php sources to JVM bytecode and then
can execute the result on the Java VM.

- Official Site: **[j-php.net](http://j-php.net/)**

### Goals

JPHP is not a replacement for the Zend PHP engine or Facebook HHVM. We don’t plan to implement the zend runtime libraries (e.g. Curl, PRCE, etc.) for JPHP.

Our project started in October 2013. There were a few reasons for that:

1. Ability to use java libraries in PHP
2. Upgrading performance via JIT and JVM
3. Replacing the ugly runtime library of Zend PHP with a better runtime library.
4. Using the PHP language not only on the web
5. Also: unicode for strings and threads

### Features

+ JIT (~2.5 faster PHP 5.6, ~1.1 faster PHP 7), Optimizer - [Performance benchmarks](http://blog.j-php.net/archives/34)
+ Using java libraries and classes in PHP code.
+ Unicode for strings (UTF-16, like in Java)
+ Threading, Sockets, Environment architecture (like sandbox objects in the runkit zend extension).
+ GUI (based on Swing, improved - more flexible layouts)
+ Embedded cache system for classes and functions
+ Optional Hot Reloading for classes and functions
+ Ability to use on **Android** OS

**What JPHP does not yet support?**

+ Importing namespaced functions (php 5.6)

### Documentation

- Wiki here: [read](http://j-php.net/wiki/)
- You can find the latest api documentation here: http://jphp-docs.readthedocs.org/
- To contribute to the api documentation, you can fork the `docs` project: https://github.com/jphp-compiler/docs


### Getting started (Hello World)

[http://j-php.net/wiki/Getting-started](http://j-php.net/wiki/Getting-started)

### Build SNAPSHOT from sources

Use `gradle install` to build and install the jphp modules and libraries into the mavel local repository. After this, you can use jphp in your projects as a maven dependency.

`org.develnext:jphp-core:<version>-SNAPSHOT`
