# iMemento Health Probe
[![Build Status](https://github.com/mementohub/health-probe/workflows/Testing/badge.svg)](https://github.com/mementohub/health-probe/actions)
[![Latest Stable Version](https://img.shields.io/packagist/v/imemento/health-probe)](https://packagist.org/packages/imemento/health-probe)
[![License](https://img.shields.io/packagist/l/imemento/health-probe)](https://packagist.org/packages/imemento/health-probe)
[![Total Downloads](https://img.shields.io/packagist/dt/imemento/health-probe)](https://packagist.org/packages/imemento/health-probe)

Readiness and Liveness probe for K8s.

## Install
```bash
composer require imemento/health-probe
```

## Usage
Just install it and check if the `GET /healthy` route returns with `status = true` and HTTP code 200. 
