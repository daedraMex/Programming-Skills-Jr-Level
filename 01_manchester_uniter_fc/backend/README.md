# Manchester united fc backend

author: Juan

status:

last update: 18 - 11- 2024

<hr/>

## Setup

After you've made sure to have the correct things (and versions) installed, you
should be able to just run a few commands to get set up:

```shell
cd backend

```

### Prepare environment variables

1. Copy `.env-example` file and rename into `.env` file. The file `.env` is included in `.gitignore` so the sensitive will not be checked in.

   ```bash
    cp .env-example .env
   ```

1.Copy `.env-example` file and rename into `.env` file. The file `.env` is included in `.gitignore` so the sensitive will not be checked in.

   ```bash
   cp .env-example .env
   ```

2.Get the actual values and paste them in `.env`.
   (ask for this file if it's your first time setting this up)

## Docker config

To get the container up and running (and really see if it worked), run:

```shell
 docker compose up -d
```
