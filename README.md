# Setting Up a Local Flarum Instance Using Docker

Welcome! This guide will walk you through setting up a local Flarum instance using Docker. Please follow the steps carefully to ensure a smooth setup.

## Prerequisites

- Ensure that **ports 80, 8002, and 3306** are available on your machine.
- The setup is based on **PHP 8.2**:
  - If you are not running PHP 8.2, update line 2 in the `Dockerfile.dev` accordingly.

## Before You Start

1. Run `composer install` in the root directory of this repository.
2. Execute the following command to build and start the Docker container:
   ```bash
   docker compose build && docker compose up -d
   ```
3. Access the Docker container and run the necessary CLI commands:
   ```bash
   docker exec -it flarum-svc82 bash
   php flarum cache:clear
   php flarum assets:publish
   ```
4. Once the setup is complete, your Flarum site will be available at [http://localhost](http://localhost).

### Stopping the Instance

To stop the Docker container, run:

```bash
docker compose down
```

## Login Credentials

- **Username**: `admin`
- **Password**: `admin123`

> **Note**: All outgoing emails are logged to a local file located at `storage/logs`.

## Fake Data

Fake data (users, discussions, and posts) is already generated. You can create more fake data via the admin panel:

[http://localhost/admin#/extension/migratetoflarum-fake-data](http://localhost/admin#/extension/migratetoflarum-fake-data)

## Developing Extensions

To create new extensions, use the `workbench` directory. Refer to the official [Flarum Extension Development Documentation](https://docs.flarum.org/extend/start/) for a step-by-step guide.

## Running Tests

1. Create a new database named `flarum_test` using PHPMyAdmin or the command-line interface.
2. Execute the `flarum_test.sh` script:
   ```bash
   ./flarum_test.sh
   ```

---

For additional information, refer to the official [Flarum Documentation](https://docs.flarum.org/).

Happy coding!
