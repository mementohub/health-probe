# iMemento Health Probe
[![Build Status](https://travis-ci.org/mementohub/health-probe.svg?branch=master)](https://travis-ci.org/mementohub/health-probe)
[![Latest Stable Version](https://poser.pugx.org/imemento/health-probe/v/stable)](https://packagist.org/packages/imemento/health-probe)
[![License](https://poser.pugx.org/imemento/health-probe/license)](https://packagist.org/packages/imemento/health-probe)
[![Total Downloads](https://poser.pugx.org/imemento/health-probe/downloads)](https://packagist.org/packages/imemento/health-probe)

Readiness and Liveness probe for K8s.

## Install
```bash
composer require imemento/health-probe
```

## Usage
Just install it and check if the `GET /healthy` route returns with `status = true` and HTTP code 200. 
