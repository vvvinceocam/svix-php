generate:
  php vendor/bin/jane-openapi generate

test:
  #!/usr/bin/env bash
  docker-compose -f tests/docker-compose.yaml up -d --wait
  export SVIX_TEST_TOKEN="`docker-compose -f tests/docker-compose.yaml exec svix svix-server jwt generate | cut -d' ' -f3`"
  php vendor/bin/pest
  docker-compose -f tests/docker-compose.yaml down
