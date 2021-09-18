version: '3'

services:
  web-host:
    build: web/
    ports:
    - "80:80"
    links:
    - db-host
    deploy: 
      mode: replicated
      replicas: 1
  db-host:
    image: redis:latest
