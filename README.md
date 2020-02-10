# Th0rn0's Blog

Some shit in here

Heh.

docker buildx is require to build multiple archs

```docker run --rm --privileged docker/binfmt:820fdd95a9972a5308930a2bdfb8573dd4447ad3```

```docker buildx build --platform linux/amd64,linux/arm/v7 --no-cache --push -t th0rn0/personal-site:latest .```