# Elastica universal module

![stability-wip](https://img.shields.io/badge/stability-work_in_progress-lightgrey.svg)
![stability-experimental](https://img.shields.io/badge/stability-experimental-orange.svg)

[![Build Status](https://travis-ci.org/gbprod/elastica-universal-module.svg?branch=master)](https://travis-ci.org/gbprod/elastica-universal-module)
[![codecov](https://codecov.io/gh/gbprod/elastica-universal-module/branch/master/graph/badge.svg)](https://codecov.io/gh/gbprod/elastica-universal-module)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/gbprod/elastica-universal-module/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/gbprod/elastica-universal-module/?branch=master)

[![Latest Stable Version](https://poser.pugx.org/gbprod/elastica-universal-module/v/stable)](https://packagist.org/packages/gbprod/elastica-universal-module)
[![Total Downloads](https://poser.pugx.org/gbprod/elastica-universal-module/downloads)](https://packagist.org/packages/gbprod/elastica-universal-module)
[![Latest Unstable Version](https://poser.pugx.org/gbprod/elastica-universal-module/v/unstable)](https://packagist.org/packages/gbprod/elastica-universal-module)
[![License](https://poser.pugx.org/gbprod/elastica-universal-module/license)](https://packagist.org/packages/gbprod/elastica-universal-module)

This package integrates [Elastica](https://github.com/ruflin/Elastica) in any [container-interop](https://github.com/container-interop/service-provider) compatible framework/container.

## Installation

```
composer require gbprod/elastica-universal-module
```

Once installed, you need to register the [`GBProd\ElasticaServiceProvider`](src/ElasticaServiceProvider.php) into your container.

## Introduction

This service provider is meant to create an [Elasticsearch](https://www.elastic.co/fr/products/elasticsearch) client using [Elastica](https://github.com/ruflin/Elastica).

This service provider accepts an optional parameter in the constructor: a "suffix" that can be used if you want many different instances.

## Expected values / services

This *service provider* expects the following configuration / services to be available:

| Name                             | Compulsory | Description                            |
|----------------------------------|------------|----------------------------------------|
| `Elastica\Client[.suffix].host`  | *yes*      | Elasticsearch host                     |
| `Elastica\Client[.suffix].port`  | *yes*      | Elasticsearch port                     |


## Provided services

This *service provider* provides the following services:

| Service name                | Description                          |
|-----------------------------|--------------------------------------|
| `Elastica\Client[.suffix]`  | Elastica client                      |
