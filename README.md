# Elastica uni

[![Build Status](https://travis-ci.org/gbprod/elastica-universal-module.svg?branch=master)](https://travis-ci.org/gbprod/elastica-universal-module)



# Elastica universal module

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
| `Elastica\Client[.suffix].host`  | *yes*      | Elasticsearch port                     |


## Provided services

This *service provider* provides the following services:

| Service name                | Description                          |
|-----------------------------|--------------------------------------|
| `Elastica\Client[.suffix]`  | Elastica client                      |
