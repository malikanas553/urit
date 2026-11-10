# Urit — landing page

Single-page marketing site for Urit, built with Laravel 12, Blade, Tailwind CSS v4 and Vite.

**Live site:** https://malikanas553.github.io/urit/

## Run locally

```bash
composer install
cp .env.example .env && php artisan key:generate
npm install
npm run dev        # or: npm run build
php artisan serve  # → http://127.0.0.1:8000/
```

## Project layout

- `routes/web.php`: `/` renders the `home` view
- `resources/views/home.blade.php`: the page, assembled from section partials in `resources/views/partials/home/`
- `resources/views/components/`: shared Blade components (`section-heading`, `pill-button`, `icon`)
- `resources/css/app.css`: Tailwind theme (brand colours, font, shadows)
- `resources/js/app.js`: mobile menu, testimonial carousel, email-form validation
- `public/images/`: photos (stock stand-ins; replace with final assets)

## Deployment (GitHub Pages)

GitHub Pages only serves static files, so `.github/workflows/deploy-pages.yml` runs on every push to `main`. It builds the assets, renders the page with `php artisan export:static`, and publishes the resulting `dist/` folder.

To preview the static build locally:

```bash
npm run build
APP_URL=http://localhost:8080 php artisan export:static
npx serve dist -l 8080
```

The email forms only validate in the browser. They aren't connected to a backend yet.
