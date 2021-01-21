# clabs
A companion plugin to wp-starter-theme, which is used to create custom blocks, sidebar plugins, and register custom post types and meta fields.

## Running builds

Run `npm run build` to build all production assets. Run `npm run dev` for a development build of assets, which also watches files for changes and automatically recompiles.

## Hot Reloading

Still to come. The closest you can get now is running `npm run start`, which watches for changes, and reloading the page.

## Running Tests

Run `npm run test` to run Jest tests against JavaScript files. Run `npm run test:watch` to keep the test runner open and watching for changes.

Run `npm run lint` to run ESLint against all JavaScript files. Linting will also happen when running development or production builds.

Run `phpcs` to run PHP CodeSniffer tests against PHP files.

## Custom Blocks

See the sample block for how to create and configure custom blocks. Each custom block needs its own webpack entry point and needs to be enqueued in `inc/assets.php`. Custom blocks can be conditionally enqueued depending on post type, post type supports, etc.
